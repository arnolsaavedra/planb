Plan B - Back-End Developer Application Landing Page
This repository contains the source code for an interactive landing page created as part of an application for the Back-End Developer position at the Plan B agency.

The goal of this project is not just to submit my candidacy, but also to practically demonstrate my full-stack web development skills, from responsive front-end design to secure back-end logic.

✨ Key Features
Modern & Responsive Design: Built with Bootstrap 5 for a flawless viewing experience on any device, from mobile phones to desktops.

Interactive Skills Checklist: Clearly and visually demonstrates fulfillment of all technical requirements listed in the job description.

Functional Contact Form: A contact form that not only captures information but also processes it on the back-end.

PHP-Powered Email Sending: Utilizes a back-end PHP script to notify multiple recipients of a new interested contact.

Smooth User Experience: The form submits asynchronously (AJAX) using the fetch API, preventing page reloads.

Custom HTML Email Notifications: Includes a branded HTML email template for notifications, ensuring professional communication.

Secure & Scalable Code: Implements PHPMailer for robust and secure email sending via SMTP and sanitizes user input to prevent vulnerabilities.

🛠️ Tech Stack
Frontend
HTML5

CSS3 (with custom styles)

Bootstrap 5

JavaScript (ES6)

Backend
PHP 8+

Tools & Libraries
Composer: For PHP dependency management.

PHPMailer: A robust and popular library for sending emails in PHP.

🚀 Installation and Setup
To run this project in your local environment, follow these steps:

Clone the Repository:

composer install
This will create a vendor/ directory with all the necessary dependencies.

Local Server:
You will need a local server environment that supports PHP, such as XAMPP, MAMP, or PHP's built-in server.

Access the Project:
Open your browser and navigate to your project's URL on your local server (e.g., http://localhost/repository-name).

⚙️ Required Configuration
For the contact form to successfully send emails, it is essential to configure your credentials in the send-email.php file.

Open the send-email.php file and modify the following sections:

SMTP Credentials:
Replace the placeholder values with the credentials from your email provider (e.g., Gmail, SendGrid).

PHP

$mail->Host       = 'smtp.example.com';
$mail->Username   = 'your_email@example.com';
$mail->Password   = 'your_secret_password';
$mail->Port       = 465; // or 587 for TLS
Sender's Address:
Ensure the sender's "From" address is the same as your SMTP Username.

PHP

$mail->setFrom('your_email@example.com', 'Landing Page Notifications');
Recipient List:
Add or modify the email addresses that will receive the notification in the $recipients array.

PHP

$recipients = [
    'hiring-team@planb.com'     => 'Plan B Hiring Team',
    'another-email@example.com' => 'Another Person'
];
📁 File Structure
.
├── vendor/                   # Composer dependencies (PHPMailer)
├── composer.json             # Defines the project's dependencies
├── composer.lock             # Locks the specific versions of dependencies
├── index.html                # The main landing page file (Frontend)
├── send-email.php            # Form logic and email sending (Backend)
└── README.md                 # This file

Created by Arnol Saavedra
