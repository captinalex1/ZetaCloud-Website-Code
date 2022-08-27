<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require_once 'Login-Script/includes/reset-request.inc.php';

try {
    $userEmail = $_POST["email"];

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer();
    $mail->SMTPDebug = 2;
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = 'zetacloudcorp@gmail.com';                     //SMTP username
    $mail->Password = '';                               //SMTP password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('zetacloudcorp@gmail.com', 'ZetaCloud');
    $mail->addAddress($userEmail);                                  //Add a recipient               
    $mail->addReplyTo('no-reply@zetacloudcorp.cloud', 'NO REPLY');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Reset your password for ZetaCloud';
    $mail->Body = '<p>We have recevied a password reset request. The link to your passsword reset is below. If you have not requested for a password reset link, please ignore this email.</p>';
    $mail->Body .= '<p>Here is your password reset link: </p>';
    $mail->Body .= '<p><a href="' . $url . '">' . $url . '</a></p>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} 
catch (Exception $e) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
