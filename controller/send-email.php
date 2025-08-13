
<?php
// Import PHPMailer classes into the global namespace

require_once '../vendor/phpmailer/src/Exception.php';
require_once '../vendor/phpmailer/src/PHPMailer.php';
require_once '../vendor/phpmailer/src/SMTP.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


// Set the response header to JSON
header('Content-Type: application/json');

// Helper function to send a JSON response and terminate the script
function sendResponse($success, $message) {
    echo json_encode(['success' => $success, 'message' => $message]);
    exit;
}

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    sendResponse(false, 'Method not allowed.');
}

// Get and sanitize form data from the English form fields ('name', 'phone')
$name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
$phone = isset($_POST['phone']) ? htmlspecialchars(trim($_POST['phone'])) : '';

// Simple data validation
if (empty($name) || empty($phone)) {
    sendResponse(false, 'Please fill out all fields.');
}

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    //======================================================================
    // SMTP SERVER CONFIGURATION (VERY IMPORTANT!)
    //======================================================================
    $mail->isSMTP();
    $mail->Host       = 'KEY';  // e.g., 'smtp.gmail.com' for Gmail
    $mail->SMTPAuth   = true;
    $mail->Username   = 'KEY'; // Your SMTP username
    $mail->Password   = 'KEY'; // Your password or app password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use PHPMailer::ENCRYPTION_STARTTLS for port 587
    $mail->Port       = 465; // SMTP port. 587 for TLS, 465 for SSL.

    // --- Sender and Recipient ---
    $mail->setFrom('arnol@arnolsaavedra.com', 'Landing Page Notifications');

    // The recipient (the company email that will receive the notification)
    $mail->addAddress('KEY', 'Arnol');
    $mail->addAddress('KEY', 'Plan B Hiring Team');

    // --- Email Content ---
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'New Interested Contact: ' . $name;
    $mail->Body    = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; }
                .container { padding: 20px; border: 1px solid #ddd; border-radius: 5px; max-width: 600px; }
                h2 { color: #333; }
                p { font-size: 16px; }
            </style>
        </head>
        <body>
        
            <div class='container'>
                <div heigth='200px' width='300px' style='text-align: center;background:#3A78BF;'><img src='https://arnolsaavedra.com/planb/planb_logo.jpg'></div>
                <h2>New Interested Candidate</h2>
                <p>A new contact has been received from the job application landing page.</p>
                <p><strong>Name:</strong> {$name}</p>
                <p><strong>Phone:</strong> {$phone}</p>
                <p>This contact confirms their interest in the Back-End Developer position.</p>
            </div>
        </body>
        </html>
    ";
    // Plain text version for non-HTML email clients
    $mail->AltBody = "New Interested Candidate:\nName: {$name}\nPhone: {$phone}";

    // Send the email
    $mail->send();

    sendResponse(true, 'Message sent successfully.');

} catch (Exception $e) {
    // In case of an error, send a failure response with the error details.
    // In a production environment, it's better to log this error than to display it.
    sendResponse(false, "Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
}
?>