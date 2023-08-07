<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


function sendOTP($email, $otp)
{
    require_once "vendor/autoload.php";
    $message_body = "Your OTP code is:<br/><br/>" . $otp;
    $mail = new PHPMailer(); //From email address and name 
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
    $mail->isSMTP(); //Send using SMTP
    $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = 'your username'; //SMTP username
    $mail->Password = 'your password'; //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->setFrom('aro100@gmail.com', 'OTP Sender');//your email to send OTP code
    $mail->addAddress($email); //Name is optional
    $mail->isHTML(true); //Send HTML or Plain Text email 
    $mail->Subject = "OTP to Login";
    $mail->Body = "$message_body";
    $result = $mail->send();

    if (!$result) {
        echo "Mailer Error: " . $email->ErrorInfo;
    } else {

    }

}





?>
