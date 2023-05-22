<?php
	require '../connect.php';
	date_default_timezone_set('Asia/Singapore');
   	$mysqltime = date ('Y-m-d H:i:s', time());
	
	$id=$_GET['id'];
	
	$assignid=$_POST['assignid'];
	$aemail=$_POST['aemail'];
	$aname=$_POST['aname'];
        $apstion=$_POST['apstion'];
	
	$query=mysqli_query($con,"SELECT * FROM ticket where tid = '$id'");
	$row=mysqli_fetch_array($query);

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('../../../composer/vendor/phpmailer/phpmailer/src/Exception.php');
require('../../../composer/vendor/phpmailer/phpmailer/src/SMTP.php');
require('../../../composer/vendor/phpmailer/phpmailer/src/PHPMailer.php');


//inquirer
$mail = new PHPMailer(true);

    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
    $mail->isSMTP();                                          //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                 //Enable SMTP authentication
    $mail->Username   = 'shido2111@gmail.com';             ///SMTP username    shido2111         ramitnoreply      marczamora143
    $mail->Password   = 'djmcbhljqqztfgdg';                   //SMTP password    djmcbhljqqztfgdg  wtwibgdwpxuypfoc  dbzxakuqekgbulhi
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
    $mail->Port       = 465;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ramitnoreply@gmail.com', 'RAM-IT');
    $mail->addAddress($row["email"], $row["iname"]);      //Add a recipient           //Name is optional

    // $mail->AddEmbeddedImage($folder, $filename, $folder); //Attachments
    //Add attachments
    //Optional name


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Ticket #'. $id . " Assigned";
    $mail->Body    = 
    " <!--RAMIT to ITRO Specialist-->
    <br>    The ticket ". $id ." is assigned to an ITRO Specialist with its details below:     
    <br>
    <br>    ". $_POST["aname"] ."
    <br>   ". $_POST["assignid"] ."
    <br>   ". $_POST["aemail"] ."
    <br>
    <br>    Inquirer's Info
            <hr>
    <br>    Good Day,
    <br>
    <br>    This is to inform that the ticket ". $id ." is assigned to ". $row["aname"] .". 
    <br>
    <br>    As a confirmation, the following are the details of the ticket that was received by RAM-IT.
    <br>
    <br>    Inquirer ID: ". $row["iid"] ."
    <br>    Name: ". $row["iname"] ."
    <br>    Ticket Priority: ". $row["priority"] ."
    <br>    Inquiry: ". $row["inquiry"] ."
    <br>    Type of Inquiry: ". $row["itype"] ."
    <br>    Inquiry Description: ". $row["fdes"] ."
    <br>    Date of Creation: ". $row["dt"] ."
    <br>
    <br>    Upon receiving this e-mail, we encourage you to access the RAM-IT website to process the submitted ticket.
    <br>
    <br>    Thank you.
    <br>
    <br>    RAM-IT
            <hr>
    <br>   **This is a system-generated e-mail. Please do not reply.**";
	
	

//assign
$mail1 = new PHPMailer(true);

//Server settings
// $mail1->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
$mail1->isSMTP();                                          //Send using SMTP
$mail1->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail1->SMTPAuth   = true;                                 //Enable SMTP authentication
$mail1->Username   = 'ramitnoreply@gmail.com';             //SMTP username    shido2111         ramitnoreply      marczamora143
$mail1->Password   = 'wtwibgdwpxuypfoc';                   //SMTP password    djmcbhljqqztfgdg  wtwibgdwpxuypfoc  dbzxakuqekgbulhi
$mail1->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
$mail1->Port       = 465;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

//Recipients
$mail1->setFrom('ramitnoreply@gmail.com', 'RAM-IT');
$mail1->addAddress($_POST['aemail'], $_POST['aname']);     //Add a recipient           //Name is optional

// $mail->AddEmbeddedImage($folder, $filename, $folder); //Attachments
//Add attachments
//Optional name


//Content
$mail1->isHTML(true);                                  //Set email format to HTML
$mail1->Subject = 'The Ticket #'. $id . " is assigned to you";
$mail1->Body    = 
" <!--RAMIT to ITRO Specialist-->
<br>    The ticket ". $id ." is assigned to an ITRO Specialist with its details below:     
<br>
<br>    ". $_POST["aname"] ."
<br>   ". $_POST["assignid"] ."
<br>   ". $_POST["aemail"] ."
<br>
<br>    Inquirer's Info
        <hr>
<br>    Good Day,
<br>
<br>    This is to inform that the ticket ". $id ." is assigned to ". $row["aname"] .". 
<br>
<br>    As a confirmation, the following are the details of the ticket that was received by RAM-IT.
<br>
<br>    Inquirer ID: ". $row["iid"] ."
<br>    Name: ". $row["iname"] ."
<br>    Ticket Priority: ". $row["priority"] ."
<br>    Inquiry: ". $row["inquiry"] ."
<br>    Type of Inquiry: ". $row["itype"] ."
<br>    Inquiry Description: ". $row["fdes"] ."
<br>    Date of Creation: ". $row["dt"] ."
<br>
<br>    Upon receiving this e-mail, we encourage you to access the RAM-IT website to process the submitted ticket.
<br>
<br>    Thank you.
<br>
<br>    RAM-IT
        <hr>
<br>   **This is a system-generated e-mail. Please do not reply.**";

$mail->send();
$mail1->send();
	

	mysqli_query($con,"update `ticket` set stat='open' , assignid='".$assignid."', aemail='".$aemail."', apstion='".$apstion."',  
    aname='".$aname."', dta='".$mysqltime."', 
    notifstus='0', notifstum='The ticket# ".$id." has a new ITRO specialist assigned', notifits='0', 
    notifitm='You are assigned to the ticket# ".$id."', notifdts='".$mysqltime."', notifdti='".$mysqltime."'   where tid=". $id);


	header('location: ../../../ticket.php?link=ticket');
	exit;
	
	
	
?>