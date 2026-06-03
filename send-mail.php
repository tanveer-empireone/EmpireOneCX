
 <?php

header('Content-Type: application/json');
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);


use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;



require 'vendor/autoload.php';



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

        $mail->Host       = 'smtp.gmail.com';

        $mail->SMTPAuth   = true;

        $mail->Username   = 'techadmin@empireonegroup.com'; // YOUR GMAIL

        $mail->Password   = 'dvzv ohwz bxfu bhtb'; // APP PASSWORD

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        $mail->Port       = 587;



        // $mail->setFrom('marketing@empireonegroup.com', 'EmpireOne BPO Solutions');

        // $mail->addAddress('marketing@empireonegroup.com');



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



        $mail->setFrom('techadmin@empireonegroup.com', 'EmpireOne BPO Solution');

        $mail->addAddress('techadmin@empireonegroup.com');

        $mail->Body = $adminBody;

        $mail->send();





        /* ===========================

        USER THANK YOU EMAIL

        =========================== */



        $mail->clearAddresses();

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



        <p>If your inquiry is urgent, please feel free to contact us directly.</p>



        <br>



        <p>Best Regards,<br>

        <strong>EmpireOne Global Solutions Team</strong></p>



        </td>

        </tr>



        <tr>

        <td style="padding:15px;text-align:center;font-size:12px;color:#777;">

        © '.date("Y").' EmpireOne Global Solutions. All rights reserved.

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

            "message" => "Mail Error: " . $mail->ErrorInfo

        ]);

    }

} 

