
 <?php

header('Content-Type: application/json');
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);


use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;



require 'vendor/autoload.php';
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



    $fullName = htmlspecialchars($_POST['full_name']);

    $company  = htmlspecialchars($_POST['company_name']);

    $email    = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    $countryCode = htmlspecialchars($_POST['country_code']);

    $phoneNumber = htmlspecialchars($_POST['phone']);

    $phone = $countryCode . " " . $phoneNumber;

    $inquiry  = htmlspecialchars($_POST['inquiry_type']);

    // $message  = htmlspecialchars($_POST['message']);



    if (empty($fullName) || empty($email)) {

        echo json_encode([

            "status" => "error",

            "message" => "Required fields are missing."

        ]);

        exit;

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

        $smtpHost = $smtpConfig['host'] ?? getenv('ECX_SMTP_HOST') ?: 'smtp.hostinger.com';
        $smtpPort = $smtpConfig['port'] ?? getenv('ECX_SMTP_PORT') ?: 465;
        $smtpUsername = $smtpConfig['username'] ?? getenv('ECX_SMTP_USERNAME') ?: 'info@empireonecx.com';
        $smtpPassword = $smtpConfig['password'] ?? getenv('ECX_SMTP_PASSWORD') ?: '';

        if ($smtpPassword === '') {
            throw new Exception('SMTP password is not configured.');
        }

        $mail->Host       = $smtpHost;

        $mail->SMTPAuth   = true;

        $mail->Username   = $smtpUsername;

        $mail->Password   = $smtpPassword;

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

        $mail->Port       = (int) $smtpPort;



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



        echo json_encode([

            "status" => "success",

            "message" => "Thank you! We will contact you soon."

        ]);



    } catch (Exception $e) {



        echo json_encode([

            "status" => "error",

            "message" => "Mail Error: " . ($mail->ErrorInfo ?: $e->getMessage())

        ]);

    }

} 

