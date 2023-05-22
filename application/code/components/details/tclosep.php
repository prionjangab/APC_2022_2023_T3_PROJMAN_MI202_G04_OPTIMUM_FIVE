<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('../../../composer/vendor/phpmailer/phpmailer/src/Exception.php');
require('../../../composer/vendor/phpmailer/phpmailer/src/SMTP.php');
require('../../../composer/vendor/phpmailer/phpmailer/src/PHPMailer.php');
require '../connect.php';

date_default_timezone_set('Asia/Singapore');
$mysqltime = date ('Y-m-d H:i:s', time());

	   

	$id=$_GET['id'];
	

	$query=mysqli_query($con,"SELECT * FROM ticket where tid = '$id'");
	$row=mysqli_fetch_array($query);

	//assign
$mail = new PHPMailer(true);

//Server settings
$mail->isSMTP();                                          //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                 //Enable SMTP authentication
$mail->Username   = 'ramitnoreply@gmail.com';             //SMTP username    shido2111         ramitnoreply      marczamora143
$mail->Password   = 'wtwibgdwpxuypfoc';                  //SMTP password    djmcbhljqqztfgdg  wtwibgdwpxuypfoc  dbzxakuqekgbulhi
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
$mail->Port       = 465;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail->setFrom('ramitnoreply@gmail.com', 'RAM-IT');
$mail->addAddress($row['aemail'], $row['aname']);     //Add a recipient           //Name is optional

// $mail->AddEmbeddedImage($folder, $filename, $folder); //Attachments
//Add attachments
//Optional name


//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'The Ticket #'. $id . " is now closed";
$mail->Body    = 
" <!--RAMIT to EVERYONE-->
<br>    Inquirer's Info
	<hr>
<br>    Good Day,
<br>
<br>    This is to inform that the ticket ". $row["iid"] ." is now closed.  
<br>
<br>    As a confirmation, the following are the details of the closed ticket.
<br>
<br>    Inquirer ID: ". $row["iid"] ."
<br>    Name: ". $row["iname"] ."
<br>    Ticket Priority: ". $row["priority"] ."
<br>    Inquiry: ". $row["inquiry"] ."
<br>    Type of Inquiry: ". $row["itype"] ."
<br>    Inquiry Description: ". $row["fdes"] ."
<br>    Date of Creation: ". $row["dt"] ."
<br>
	<hr>
<br>    ITRO Specialist Info:
	<hr>
<br>    
<br>    Assign ID: ". $row["assignid"] ."
<br>    Name: ". $row["aname"] ."
<br>    E-mail: ". $row["aemail"] ."
<br>
<br>    Thank you.
<br>
<br>    RAM-IT
		<hr>
<br>   **This is a system-generated e-mail. Please do not reply.**";

$mail->send();
mysqli_query($con,"update `ticket` set stat='closed', notifits='0', notifitm='The ticket# ". $id .
" is now closed the inquirer is satisfied with the ticket.',  notifdti='". $mysqltime. "', dtc='".$mysqltime."' where tid=". $id);


	header('location:../../../ticket.php?link=ticket');
?>