<?php
/**
 * Contact Form Email Processor — CC Pardawala
 * Receives POST data and delivers emails via Gmail SMTP to dhruvskhorawa.dk@gmail.com
 */

header('Content-Type: application/json; charset=UTF-8');
require_once __DIR__ . '/mailer.php';

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'status' => 'error',
        'message' => 'Invalid request method.'
    ]);
    exit;
}

// Retrieve & sanitize inputs
$name    = isset($_POST['name']) ? trim(strip_tags($_POST['name'])) : '';
$phone   = isset($_POST['phone']) ? trim(strip_tags($_POST['phone'])) : '';
$email   = isset($_POST['email']) ? trim(strip_tags($_POST['email'])) : 'Not Provided';
$service = isset($_POST['service']) ? trim(strip_tags($_POST['service'])) : 'General Consultation';
$message = isset($_POST['message']) ? trim(strip_tags($_POST['message'])) : 'No additional notes provided.';

// Validation
if (empty($name) || empty($phone)) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Please enter your Full Name and Phone Number.'
    ]);
    exit;
}

// Format submission time
$submittedAt = date('d M Y, h:i A') . ' (IST)';

// Build Luxury Branded HTML Email Template
$htmlBody = '
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; background-color: #F4F1EA; margin: 0; padding: 30px; color: #1E1E1E; }
        .email-container { max-width: 600px; margin: 0 auto; background: #FFFFFF; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.08); border: 1px solid #E8E2D5; }
        .email-header { background: #1C1917; padding: 30px 25px; text-align: center; border-bottom: 3px solid #C5A880; }
        .email-header h1 { color: #FAF7F2; margin: 0; font-size: 22px; font-weight: 600; letter-spacing: 2px; text-transform: uppercase; }
        .email-header p { color: #C5A880; margin: 5px 0 0 0; font-size: 12px; letter-spacing: 1.5px; text-transform: uppercase; }
        .email-body { padding: 35px 30px; }
        .badge { background: #F5EFE6; color: #8A6D3B; padding: 5px 12px; border-radius: 50px; font-size: 11px; font-weight: bold; text-transform: uppercase; display: inline-block; margin-bottom: 15px; }
        .intro { font-size: 15px; line-height: 1.6; color: #4A4A4A; margin-bottom: 25px; }
        .details-table { width: 100%; border-collapse: collapse; margin-bottom: 25px; }
        .details-table td { padding: 12px 14px; border-bottom: 1px solid #EFEAE1; font-size: 14px; }
        .details-table td.label { font-weight: 600; color: #736757; width: 35%; text-transform: uppercase; font-size: 12px; letter-spacing: 0.5px; }
        .details-table td.value { color: #1C1917; font-weight: 500; }
        .message-box { background: #FAF8F5; border-left: 4px solid #C5A880; padding: 16px 20px; border-radius: 0 8px 8px 0; margin-bottom: 30px; font-size: 14px; line-height: 1.6; color: #333; }
        .action-btns { text-align: center; margin-bottom: 25px; }
        .btn { display: inline-block; padding: 12px 24px; background: #C5A880; color: #FFFFFF !important; text-decoration: none; border-radius: 6px; font-weight: 600; font-size: 13px; margin: 0 5px; text-transform: uppercase; letter-spacing: 1px; }
        .btn-phone { background: #1C1917; }
        .email-footer { background: #F9F7F2; padding: 20px; text-align: center; border-top: 1px solid #EAE4D8; font-size: 12px; color: #8C827A; }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>CC PARDAWALA</h1>
            <p>Curtain Craft • New Styling Consultation Inquiry</p>
        </div>
        
        <div class="email-body">
            <span class="badge">New Website Inquiry</span>
            <p class="intro">A prospective client has submitted a styling consultation booking on your CC Pardawala website. Details are provided below:</p>
            
            <table class="details-table">
                <tr>
                    <td class="label">Client Name:</td>
                    <td class="value"><strong>' . htmlspecialchars($name) . '</strong></td>
                </tr>
                <tr>
                    <td class="label">Phone Number:</td>
                    <td class="value"><a href="tel:' . htmlspecialchars($phone) . '" style="color: #8A6D3B; text-decoration: none; font-weight: bold;">' . htmlspecialchars($phone) . '</a></td>
                </tr>
                <tr>
                    <td class="label">Email Address:</td>
                    <td class="value">' . ($email !== 'Not Provided' ? '<a href="mailto:' . htmlspecialchars($email) . '" style="color: #8A6D3B; text-decoration: none;">' . htmlspecialchars($email) . '</a>' : 'Not Provided') . '</td>
                </tr>
                <tr>
                    <td class="label">Service Required:</td>
                    <td class="value"><strong>' . htmlspecialchars($service) . '</strong></td>
                </tr>
                <tr>
                    <td class="label">Submitted At:</td>
                    <td class="value">' . $submittedAt . '</td>
                </tr>
            </table>

            <div style="font-weight: 600; font-size: 13px; color: #736757; text-transform: uppercase; margin-bottom: 8px; letter-spacing: 0.5px;">Client Consultation Notes:</div>
            <div class="message-box">
                ' . nl2br(htmlspecialchars($message)) . '
            </div>

            <div class="action-btns">
                <a href="tel:' . htmlspecialchars($phone) . '" class="btn btn-phone">Call Client Now</a>
                <a href="https://wa.me/' . preg_replace('/[^0-9]/', '', $phone) . '" class="btn" style="background: #25D366;">WhatsApp Chat</a>
            </div>
        </div>

        <div class="email-footer">
            Sent automatically from CC Pardawala Website Contact Form • <a href="https://ccpardawala.com" style="color: #8A6D3B;">ccpardawala.com</a>
        </div>
    </div>
</body>
</html>
';

$toEmail = 'dhruvskhorawa.dk@gmail.com';
$toName = 'Dhruv Khorawa (CC Pardawala)';
$subject = "New Styling Inquiry from " . $name . " [" . $service . "]";

// Send mail via SimpleSMTP
$smtp = new SimpleSMTP();
$result = $smtp->sendMail(
    $toEmail,
    $toName,
    ($email !== 'Not Provided' && filter_var($email, FILTER_VALIDATE_EMAIL)) ? $email : 'noreply@ccpardawala.com',
    $name,
    $subject,
    $htmlBody
);

if ($result['success']) {
    echo json_encode([
        'status' => 'success',
        'message' => 'Thank you, ' . htmlspecialchars($name) . '! Your styling consultation request has been sent successfully. Our team will contact you shortly.'
    ]);
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Unable to send message at the moment. Please call us directly at +91 95865 41555.',
        'debug' => $result['error'] ?? 'Unknown SMTP error'
    ]);
}
