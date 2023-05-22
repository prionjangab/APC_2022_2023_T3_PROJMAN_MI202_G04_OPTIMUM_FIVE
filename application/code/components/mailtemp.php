<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('composer/vendor/phpmailer/phpmailer/src/Exception.php');
require('composer/vendor/phpmailer/phpmailer/src/SMTP.php');
require('composer/vendor/phpmailer/phpmailer/src/PHPMailer.php');

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
    $mail->isSMTP();                                          //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                 //Enable SMTP authentication
    $mail->Username   = 'ramitnoreply@gmail.com';             //SMTP username
    $mail->Password   = 'wtwibgdwpxuypfoc';                   //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
    $mail->Port       = 465;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ramitnoreply@gmail.com', 'RAM-IT');
    $mail->addAddress('shido2111@gmail.com', 'Marc E. Zamora');     //Add a recipient           //Name is optional

    //Attachments
    //Add attachments
    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Testing The PHP Mate';
    $mail->Body    = 
    'I need to know what else I can do to make this phpmailer to work by using only the ramitnoreply burner account. <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br> Thank You
    <br> ITRO TEAM';

    $mail->send();

header('Location: home.php');
?>