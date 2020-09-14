<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->addAddress('joysen833@gmail.com','Joy sen');
    $mail->setFrom('onlinebazzar07@gmail.com','onlinebazzar');
    $mail->addReplyTo('onlinebazzar07@gmail.com','onlinebazzar');
    $mail->Subject = 'check here';
    $mail->Body = 'try this';
    $mail->send();
    echo 'sent';
} catch (Exception $th) {
    
    echo $th->errorMessage();
}


// $mail = new PHPMailer(true);
// $mail->setFrom('onlinebazzar07@gmail.com', 'Mailer');
// $mail->addAddress('joysen833@gmail.com', 'Joe User');     // Add a recipient
// // $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('onlinebazzar07@gmail.com', 'onlinebazzar');

// $mail->Subject = 'Here is the subject';
// $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

// $mail->isSMTP();
// $mail->Host       = 'smtpout.secureserver.net';                    // Set the SMTP server to send through
// $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
// $mail->SMTPAuth = 'tsl';
// $mail->Username   = 'rajbiraj@onlinebazzar.co';                     // SMTP username
// $mail->Password   = 'RAifutDpAt7K7pT';                               // SMTP password
// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
// $mail->Port       = 465;


// $email->AddAttachment('./index.jpg', 'index.jpg');

// $email->Send();

echo 'wjhef';
?>