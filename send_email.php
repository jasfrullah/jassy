<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo 1;
    // $firstName = $_POST['firstName'];
    // $lastName = $_POST['lastName'];
    // $email = $_POST['email'];
    // $message = $_POST['message'];
    // try {
    //     //Server settings
    //     $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    //     $mail->isSMTP();                                            //Send using SMTP
    //     $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    //     $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    //     $mail->Username   = 'domain.it365@gmail.com';                     //SMTP username
    //     $mail->Password   = 'yvka yqei rliw qocl';                               //SMTP password
    //     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    //     $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //     //Recipients
    //     $mail->setFrom($email, $firstName . ' ' . $lastName);
    //     $mail->addAddress('jassyansao@gmail.com', 'Jasfrullah Ansao');     //Add a recipient
    //     // $mail->addAddress($email);               //Name is optional
    //     $mail->addReplyTo($email, $firstName . ' ' . $lastName);
    //     //Content
    //     $mail->isHTML(true);                                  //Set email format to HTML
    //     $mail->Subject = 'From ' . $firstName . ' ' . $lastName;
    //     $mail->Body    = $message;

       
    //     echo $mail->send();
    // } catch (Exception $e) {
    //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // }
} else {
  
    echo "Sample";
}
