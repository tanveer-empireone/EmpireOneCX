<?php
ob_start();

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

function loadEmpireOneMailConfig()
{
    $config = [];
    $configPath = dirname(__DIR__) . '/empireonecx-mail-config.php';

    if (is_readable($configPath)) {
        $loadedConfig = require $configPath;
        if (is_array($loadedConfig)) {
            $config = $loadedConfig;
        }
    }

    return $config;
}

function logPipedriveIssue($message, array $context = [])
{
    $safeContext = $context;
    unset($safeContext['api_token'], $safeContext['pipedrive_api_token'], $safeContext['password']);

    error_log('[Pipedrive] ' . $message . (!empty($safeContext) ? ' ' . json_encode($safeContext) : ''));
}

function sendJsonResponse(array $payload)
{
    while (ob_get_level() > 0) {
        ob_end_clean();
    }

    header('Content-Type: application/json');
    echo json_encode($payload);
}

function pipedriveRequest($method, $path, array $payload, $apiToken, $baseUrl)
{
    $separator = strpos($path, '?') === false ? '?' : '&';
    $url = rtrim($baseUrl, '/') . $path . $separator . 'api_token=' . rawurlencode($apiToken);
    $body = !empty($payload) ? json_encode($payload) : '';

    if (function_exists('curl_init')) {
        $ch = curl_init($url);

        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => [
                'Accept: application/json',
                'Content-Type: application/json',
                'x-api-token: ' . $apiToken,
            ],
            CURLOPT_PROXY => '',
            CURLOPT_NOPROXY => '*',
            CURLOPT_TIMEOUT => 12,
        ]);

        if ($body !== '') {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
        }

        $responseBody = curl_exec($ch);
        $curlError = curl_error($ch);
        $httpStatus = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($responseBody === false) {
            throw new Exception('cURL error: ' . $curlError);
        }
    } else {
        $headers = "Accept: application/json\r\nContent-Type: application/json\r\nx-api-token: {$apiToken}\r\n";
        if ($body !== '') {
            $headers .= 'Content-Length: ' . strlen($body) . "\r\n";
        }

        $context = stream_context_create([
            'http' => [
                'method' => $method,
                'header' => $headers,
                'content' => $body,
                'timeout' => 12,
                'ignore_errors' => true,
            ],
        ]);

        $responseBody = @file_get_contents($url, false, $context);
        $httpStatus = 0;
        $responseHeaders = function_exists('http_get_last_response_headers') ? http_get_last_response_headers() : ($http_response_header ?? []);
        if (isset($responseHeaders[0]) && preg_match('/\s(\d{3})\s/', $responseHeaders[0], $matches)) {
            $httpStatus = (int) $matches[1];
        }

        if ($responseBody === false) {
            throw new Exception('HTTP request to Pipedrive failed.');
        }
    }

    $decoded = json_decode($responseBody, true);
    if (!is_array($decoded)) {
        throw new Exception('Invalid JSON response. HTTP status: ' . $httpStatus);
    }

    if ($httpStatus < 200 || $httpStatus >= 300 || (isset($decoded['success']) && $decoded['success'] === false)) {
        $apiMessage = $decoded['error'] ?? $decoded['error_info'] ?? $decoded['message'] ?? 'Unknown Pipedrive API error.';
        throw new Exception($apiMessage . ' HTTP status: ' . $httpStatus);
    }

    return $decoded['data'] ?? [];
}

function createPipedriveOrganization($companyName, $apiToken, $baseUrl)
{
    $companyName = trim($companyName);

    if ($companyName === '') {
        return null;
    }

    $organization = pipedriveRequest('POST', '/api/v2/organizations', [
        'name' => $companyName,
    ], $apiToken, $baseUrl);

    return $organization['id'] ?? null;
}

function createPipedrivePerson($fullName, $email, $phone, $organizationId, $apiToken, $baseUrl)
{
    $payload = [
        'name' => trim($fullName) ?: 'Website Lead',
        'emails' => [
            [
                'value' => $email,
                'primary' => true,
                'label' => 'work',
            ],
        ],
    ];

    if (trim($phone) !== '') {
        $payload['phones'] = [
            [
                'value' => trim($phone),
                'primary' => true,
                'label' => 'work',
            ],
        ];
    }

    if ($organizationId) {
        $payload['org_id'] = (int) $organizationId;
    }

    $person = pipedriveRequest('POST', '/api/v2/persons', $payload, $apiToken, $baseUrl);

    return $person['id'] ?? null;
}

function createPipedriveLead($fullName, $companyName, $inquiryType, $personId, $organizationId, $apiToken, $baseUrl)
{
    $leadTitleParts = array_filter([
        trim($companyName),
        trim($fullName),
        trim($inquiryType),
    ]);

    $payload = [
        'title' => !empty($leadTitleParts) ? implode(' - ', $leadTitleParts) : 'Website Contact Form Lead',
    ];

    if ($personId) {
        $payload['person_id'] = (int) $personId;
    }

    if ($organizationId) {
        $payload['organization_id'] = (int) $organizationId;
    }

    pipedriveRequest('POST', '/api/v1/leads', $payload, $apiToken, $baseUrl);
}

function syncContactFormLeadToPipedrive($fullName, $companyName, $email, $phone, $inquiryType, array $config)
{
    $apiToken = $config['pipedrive_api_token'] ?? getenv('PIPEDRIVE_API_TOKEN') ?: '';
    $companyDomain = $config['pipedrive_company_domain'] ?? getenv('PIPEDRIVE_COMPANY_DOMAIN') ?: 'empireonecx';
    $baseUrl = $config['pipedrive_base_url'] ?? getenv('PIPEDRIVE_BASE_URL') ?: 'https://' . $companyDomain . '.pipedrive.com';

    if (trim($apiToken) === '') {
        return;
    }

    try {
        $organizationId = createPipedriveOrganization($companyName, $apiToken, $baseUrl);
        $personId = createPipedrivePerson($fullName, $email, $phone, $organizationId, $apiToken, $baseUrl);

        if (!$personId && !$organizationId) {
            throw new Exception('Pipedrive person and organization IDs were not returned.');
        }

        createPipedriveLead($fullName, $companyName, $inquiryType, $personId, $organizationId, $apiToken, $baseUrl);
    } catch (Throwable $e) {
        logPipedriveIssue($e->getMessage(), [
            'email' => $email,
            'company' => $companyName,
            'inquiry_type' => $inquiryType,
        ]);
    }
}

function scheduleAppointmentWithGoogleAppsScript(array $appointment, array $config)
{
    $webAppUrl = trim((string) ($config['google_apps_script_url'] ?? getenv('GOOGLE_APPS_SCRIPT_URL') ?: ''));
    $sharedToken = trim((string) ($config['google_apps_script_token'] ?? getenv('GOOGLE_APPS_SCRIPT_TOKEN') ?: ''));

    if ($webAppUrl === '') {
        throw new Exception('Google Calendar scheduling is not configured. Add google_apps_script_url to the mail config.');
    }

    if ($sharedToken === '') {
        throw new Exception('Google Calendar scheduling is not configured. Add google_apps_script_token to the mail config.');
    }

    $payload = [
        'token' => $sharedToken,
        'name' => $appointment['name'],
        'email' => $appointment['email'],
        'company_name' => $appointment['company_name'],
        'inquiry_type' => $appointment['inquiry_type'],
        'appointment_date' => $appointment['appointment_date'],
        'appointment_time' => $appointment['appointment_time'],
        'time_zone' => 'America/New_York',
        'duration_minutes' => 30,
    ];

    $body = http_build_query($payload, '', '&', PHP_QUERY_RFC3986);

    if (function_exists('curl_init')) {
        $ch = curl_init($webAppUrl);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_HTTPHEADER => ['Content-Type: application/x-www-form-urlencoded'],
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_PROXY => '',
            CURLOPT_NOPROXY => '*',
            CURLOPT_TIMEOUT => 20,
        ]);
        $responseBody = curl_exec($ch);
        $curlError = curl_error($ch);
        $httpStatus = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($responseBody === false) {
            throw new Exception('Google Calendar request failed: ' . $curlError);
        }
    } else {
        $context = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                'content' => $body,
                'timeout' => 20,
                'ignore_errors' => true,
            ],
        ]);
        $responseBody = @file_get_contents($webAppUrl, false, $context);
        $httpStatus = 0;
        $responseHeaders = $http_response_header ?? [];
        if (isset($responseHeaders[0]) && preg_match('/\s(\d{3})\s/', $responseHeaders[0], $matches)) {
            $httpStatus = (int) $matches[1];
        }

        if ($responseBody === false) {
            throw new Exception('Google Calendar request failed.');
        }
    }

    $result = json_decode($responseBody, true);
    if (!is_array($result) || $httpStatus < 200 || $httpStatus >= 300 || empty($result['success'])) {
        $message = is_array($result) ? ($result['message'] ?? 'Unknown Apps Script error.') : 'Invalid Apps Script response.';
        throw new Exception($message . ' HTTP status: ' . $httpStatus);
    }

    return $result;
}

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405);
    sendJsonResponse([
        "status" => "error",
        "message" => "Please submit the contact form using the website form."
    ]);
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {



    $fullName = htmlspecialchars($_POST['full_name']);

    $company  = htmlspecialchars($_POST['company_name']);

    $email    = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    $countryCode = htmlspecialchars($_POST['country_code']);

    $phoneNumber = htmlspecialchars($_POST['phone']);

    $phone = $countryCode . " " . $phoneNumber;

    $inquiry  = htmlspecialchars($_POST['inquiry_type']);

    $appointmentDate = htmlspecialchars($_POST['appointment_date'] ?? '');
    $appointmentTime = htmlspecialchars($_POST['appointment_time'] ?? '');
    $formType = htmlspecialchars($_POST['form_type'] ?? 'contact');

    if ($formType === 'appointment' && $appointmentDate !== '' && $appointmentTime !== '') {
        $inquiry .= ' | Strategy call requested: ' . $appointmentDate . ' at ' . $appointmentTime . ' ET';
    }

    // $message  = htmlspecialchars($_POST['message']);



    if (empty($fullName) || empty($email)) {

        sendJsonResponse([

            "status" => "error",

            "message" => "Required fields are missing."

        ]);

        exit;

    }

    if ($formType === 'appointment') {
        if ($appointmentDate === '' || $appointmentTime === '') {
            sendJsonResponse([
                "status" => "error",
                "message" => "Please select an appointment date and time."
            ]);
            exit;
        }

        try {
            scheduleAppointmentWithGoogleAppsScript([
                'name' => $fullName,
                'email' => $email,
                'company_name' => $company,
                'inquiry_type' => $inquiry,
                'appointment_date' => $appointmentDate,
                'appointment_time' => $appointmentTime,
            ], loadEmpireOneMailConfig());
        } catch (Throwable $e) {
            error_log('[Google Calendar] ' . $e->getMessage());
            sendJsonResponse([
                "status" => "error",
                "message" => "We could not schedule the Google Meet appointment. Please try again or email info@empireonecx.com."
            ]);
            exit;
        }
    }



    $mail = new PHPMailer(true);



    try {



        $mail->isSMTP();

        $smtpConfig = loadEmpireOneMailConfig();

        $smtpHost = $smtpConfig['host'] ?? getenv('ECX_SMTP_HOST') ?: 'smtp.hostinger.com';
        $smtpPort = $smtpConfig['port'] ?? getenv('ECX_SMTP_PORT') ?: 465;
        $smtpUsername = $smtpConfig['username'] ?? getenv('ECX_SMTP_USERNAME') ?: 'info@empireonecx.com';
        $smtpPassword = $smtpConfig['password'] ?? getenv('ECX_SMTP_PASSWORD') ?: '';
        $smtpPassword = preg_replace('/\s+/', '', (string) $smtpPassword);

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

        '.($appointmentDate !== '' ? '<tr><td style="font-weight:bold;">Requested Date:</td><td>'.$appointmentDate.'</td></tr>' : '').'
        '.($appointmentTime !== '' ? '<tr><td style="font-weight:bold;">Requested Time:</td><td>'.$appointmentTime.' ET</td></tr>' : '').'



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



        <p>If your inquiry is urgent, please feel free to contact us directly at <a href="tel:+18002330843">+1 800 233 0843</a>.</p>


        <br>



        <p>Best Regards,<br>

        <strong>EmpireOneCX</strong></p>

        <p style="margin:12px 0 0;">
            <img src="https://empireonecx.com/assets/images/empireonecx.png" alt="EmpireOneCX" width="160" style="display:block;max-width:160px;height:auto;border:0;">
        </p>



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

        syncContactFormLeadToPipedrive($fullName, $company, $email, $phone, $inquiry, $smtpConfig);



        sendJsonResponse([

            "status" => "success",

            "message" => "Thank you! We will contact you soon."

        ]);



    } catch (Exception $e) {



        sendJsonResponse([

            "status" => "error",

            "message" => "Mail Error: " . ($mail->ErrorInfo ?: $e->getMessage())

        ]);

    }

} 
