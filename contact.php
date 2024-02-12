<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
	<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

// Retrieve form data
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                  // Enable verbose debug output
    $mail->isSMTP();                                       // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                  // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                              // Enable SMTP authentication
    $mail->Username   = 'kanupriyachawla09@gmail.com';             // SMTP username
    $mail->Password   = 'Kanupriya_7120';                    // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                               // TCP port to connect to

    //Recipients
    $mail->setFrom('kanupriyachawla09@gmail.com', 'Mailer');
    $mail->addAddress('recipient@example.com', 'Joe User'); // Add a recipient, perhaps the email entered in the form

    // Content
    $mail->isHTML(true);                                    // Set email format to HTML
    $mail->Subject = 'New contact form submission';
    $mail->Body    = "You have received a new message from your website contact form. Here are the details:<br>Name: $name<br>Email: $email<br>Message: $message";
    $mail->AltBody = "You have received a new message from your website contact form.\n\nHere are the details:\nName: $name\nEmail: $email\nMessage: $message";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


<body>
</body>
</html>