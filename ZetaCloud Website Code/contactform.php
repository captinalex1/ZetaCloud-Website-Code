<?php

if (isset($_POST['send-message'])) {
    
    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
}

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

try {

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer();
    //$mail->SMTPDebug = 2;                                     //For debuging
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
    $mail->Username = 'zetacloudcorp@gmail.com';                     //SMTP username
    $mail->Password = 'tyutmptwdkffmlia';                               //SMTP password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($emailFrom, $name);
    $mail->addAddress('zetacloudcorp@gmail.com');                                  //Add a recipient               
    $mail->addReplyTo($emailFrom, $name);

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = $message;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    header('location: ./contact.php?sending=success');
} 
catch (Exception $e) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}