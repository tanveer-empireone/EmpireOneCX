
<?php

ob_start();
error_reporting(E_ALL);
ini_set('display_errors', '0');
ini_set('display_startup_errors', '0');

function sendJsonResponse($payload, $statusCode = 200)
{
    while (ob_get_level() > 0) {
        ob_end_clean();
    }

    http_response_code($statusCode);
    header('Content-Type: application/json');
    echo json_encode($payload);
    exit;
}

register_shutdown_function(function () {
    $error = error_get_last();
    if ($error && in_array($error['type'], [E_ERROR, E_PARSE, E_CORE_ERROR, E_COMPILE_ERROR], true)) {
        error_log('EmpireOneCX contact form fatal error: ' . $error['message']);
        sendJsonResponse([
            'status' => 'error',
            'message' => 'Server configuration error. Please check the hosting PHP error log.'
        ], 500);
    }
});


use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;



$autoloadPath = __DIR__ . '/vendor/autoload.php';
if (!is_readable($autoloadPath)) {
    error_log('EmpireOneCX contact form missing Composer autoload file.');
    sendJsonResponse([
        'status' => 'error',
        'message' => 'Server configuration error: mail library is missing.'
    ], 500);
}

require $autoloadPath;
function splitLeadName($fullName)
{
    $fullName = trim(preg_replace('/\s+/', ' ', $fullName));
    if ($fullName === '') {
        return ['', 'Website Lead'];
    }

    $parts = explode(' ', $fullName, 2);
    if (count($parts) === 1) {
        return ['', $parts[0]];
    }

    return [$parts[0], $parts[1]];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $fullName = htmlspecialchars(isset($_POST['full_name']) ? $_POST['full_name'] : '', ENT_QUOTES, 'UTF-8');

    $company  = htmlspecialchars(isset($_POST['company_name']) ? $_POST['company_name'] : '', ENT_QUOTES, 'UTF-8');

    $email    = filter_var(isset($_POST['email']) ? $_POST['email'] : '', FILTER_SANITIZE_EMAIL);

    $countryCode = htmlspecialchars(isset($_POST['country_code']) ? $_POST['country_code'] : '', ENT_QUOTES, 'UTF-8');

    $phoneNumber = htmlspecialchars(isset($_POST['phone']) ? $_POST['phone'] : '', ENT_QUOTES, 'UTF-8');

    $phone = $countryCode . " " . $phoneNumber;

    $inquiry  = htmlspecialchars(isset($_POST['inquiry_type']) ? $_POST['inquiry_type'] : '', ENT_QUOTES, 'UTF-8');

    // $message  = htmlspecialchars($_POST['message']);



    if (empty($fullName) || empty($email)) {

        sendJsonResponse([

            "status" => "error",

            "message" => "Required fields are missing."

        ]);

    }



    $mail = new PHPMailer(true);



    try {



        $mail->isSMTP();

        $smtpConfig = [];
        $smtpConfigPath = dirname(__DIR__) . '/empireonecx-mail-config.php';
        if (is_readable($smtpConfigPath)) {
            $smtpConfig = require $smtpConfigPath;
            if (!is_array($smtpConfig)) {
                $smtpConfig = [];
            }
        }

        $smtpHost = isset($smtpConfig['host']) ? $smtpConfig['host'] : (getenv('ECX_SMTP_HOST') ?: 'smtp.gmail.com');
        $smtpPort = isset($smtpConfig['port']) ? $smtpConfig['port'] : (getenv('ECX_SMTP_PORT') ?: 465);
        $smtpUsername = isset($smtpConfig['username']) ? $smtpConfig['username'] : (getenv('ECX_SMTP_USERNAME') ?: 'info@empireonecx.com');
        $smtpPassword = isset($smtpConfig['password']) ? $smtpConfig['password'] : (getenv('ECX_SMTP_PASSWORD') ?: '');
        $smtpEncryption = strtolower(isset($smtpConfig['encryption']) ? $smtpConfig['encryption'] : (getenv('ECX_SMTP_ENCRYPTION') ?: ((int) $smtpPort === 587 ? 'tls' : 'ssl')));

        if ($smtpPassword === '') {
            throw new Exception('SMTP password is not configured.');
        }

        $mail->Host       = $smtpHost;

        $mail->SMTPAuth   = true;

        $mail->Username   = $smtpUsername;

        $mail->Password   = $smtpPassword;

        $mail->SMTPSecure = $smtpEncryption === 'tls'
            ? PHPMailer::ENCRYPTION_STARTTLS
            : PHPMailer::ENCRYPTION_SMTPS;

        $mail->Port       = (int) $smtpPort;

        $mail->Timeout    = 20;



        $mail->isHTML(true);

        $mail->Subject = "New Inquiry from EmpireOne Website";



        /* ===========================

        ADMIN EMAIL DESIGN

        =========================== */



        $adminBody = '

        <!DOCTYPE html>

        <html>

        <head>

        <meta charset="UTF-8">

        </head>

        <body style="margin:0;padding:0;background:#f4f4f4;font-family:Arial, sans-serif;">



        <table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f4f4;padding:40px 0;">

        <tr>

        <td align="center">



        <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:10px;overflow:hidden;">



        <!-- Header -->

        <tr>

        <td style="padding:20px;text-align:center;

        background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);

        color:#ffffff;">

        <h2 style="margin:0;">New Contact Form Submission</h2>

        </td>

        </tr>



        <!-- Body -->

        <tr>

        <td style="padding:30px;">



        <table width="100%" cellpadding="8" cellspacing="0">



        <tr>

        <td style="font-weight:bold;">Full Name:</td>

        <td>'.$fullName.'</td>

        </tr>



        <tr>

        <td style="font-weight:bold;">Company:</td>

        <td>'.$company.'</td>

        </tr>



        <tr>

        <td style="font-weight:bold;">Email:</td>

        <td>'.$email.'</td>

        </tr>



        <tr>

        <td style="font-weight:bold;">Phone:</td>

        <td>'.$phone.'</td>

        </tr>



        <tr>

        <td style="font-weight:bold;">Inquiry Type:</td>

        <td>'.$inquiry.'</td>

        </tr>



        </table>



        </td>

        </tr>



        <!-- Footer -->

        <tr>

        <td style="padding:15px;text-align:center;font-size:12px;color:#777;">

        This message was sent from your website contact form.

        </td>

        </tr>



        </table>



        </td>

        </tr>

        </table>



        </body>

        </html>

        ';



        /* ===========================

        SEND TO ADMIN

        =========================== */



        $mail->setFrom('info@empireonecx.com', 'EmpireOneCX');

        $mail->addReplyTo($email, $fullName);

        $mail->addAddress('info@empireonecx.com');

        $mail->Body = $adminBody;

        $mail->send();

        /* ===========================

        USER THANK YOU EMAIL

        =========================== */



        $mail->clearAddresses();

        $mail->clearReplyTos();

        $mail->addReplyTo('info@empireonecx.com', 'EmpireOneCX');

        $mail->addAddress($email);

        $mail->Subject = "Thank You for Contacting Us";



        $userBody = '

        <!DOCTYPE html>

        <html>

        <head>

        <meta charset="UTF-8">

        </head>

        <body style="margin:0;padding:0;background:#f4f4f4;font-family:Arial, sans-serif;">



        <table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f4f4;padding:40px 0;">

        <tr>

        <td align="center">



        <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:10px;overflow:hidden;">



        <tr>

        <td style="padding:20px;text-align:center;

        background: linear-gradient(90deg, #7A76FF 0%, #CB46FA 50.14%, #FE881C 100%);

        color:#ffffff;">

        <h2 style="margin:0;">Thank You for Reaching Out!</h2>

        </td>

        </tr>



        <tr>

        <td style="padding:30px;color:#333;font-size:15px;line-height:1.6;">



        <p>Hi '.$fullName.',</p>



        <p>Thank you for contacting us. We have received your message and our team will get back to you shortly.</p>



<p>If your inquiry is urgent, please feel free to contact us directly at <a href="tel:+18002330843">+1 800 233 0843</a> or </p>


        <br>



        <p>Best Regards,<br>

        <strong>EmpireOneCX</strong></p>



        </td>

        </tr>



        <tr>

        <td style="padding:15px;text-align:center;font-size:12px;color:#777;">

        © '.date("Y").' EmpireOneCX. All rights reserved.

        </td>

        </tr>



        </table>



        </td>

        </tr>

        </table>



        </body>

        </html>

        ';



        $mail->Body = $userBody;

        $mail->send();



        sendJsonResponse([

            "status" => "success",

            "message" => "Thank you! We will contact you soon."

        ]);



    } catch (Exception $e) {



        error_log('EmpireOneCX contact form mail error: ' . $e->getMessage());

        $mailError = isset($mail) && $mail instanceof PHPMailer ? $mail->ErrorInfo : '';

        sendJsonResponse([

            "status" => "error",

            "message" => "Mail Error: " . ($mailError ?: $e->getMessage())

        ]);

    }

} 

