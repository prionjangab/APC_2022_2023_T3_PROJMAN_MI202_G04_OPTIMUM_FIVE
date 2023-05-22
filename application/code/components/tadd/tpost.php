
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require('../../../composer/vendor/phpmailer/phpmailer/src/Exception.php');
require('../../../composer/vendor/phpmailer/phpmailer/src/SMTP.php');
require('../../../composer/vendor/phpmailer/phpmailer/src/PHPMailer.php');

require '../connect.php';

$iid = $_POST["iid"];
$iname = $_POST["iname"];
$ipstion = $_POST["ipstion"];
$email = $_POST["email"];
$img = $_POST["img"];
$itype = $_POST["itype"];
$inqry = $_POST["inquiry"];
$fdes = $_POST["fdes"];
$stat = $_POST["stat"];
$priority = $_POST["priority"];
$loc = $_POST["location"];
if ($loc == "Outside"){
    $floor = 0;
    $room = 0;
    require 'sev.php';
    $ls = 1;
    $severity = $iq + $ls;
    $fpriority = $priority + $ls;
    
} else {
    $floor = $_POST["floor"];
    $room = $_POST["room"];
    require 'sev.php';
    $ls = 2;
    $severity = $iq + $ls;
    $fpriority = $priority + $ls;

}


$dt = $_POST["dt"];
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "../../../res/img/" . $filename;

move_uploaded_file($tempname, $folder);

$query=mysqli_query($con,"SELECT * FROM accounts where pstion = 'supervisor'");


$mail = new PHPMailer(true);

    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
    $mail->isSMTP();                                          //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                 //Enable SMTP authentication
    $mail->Username   = 'ramitnoreply@gmail.com';             //SMTP username    shido2111         ramitnoreply      marczamora143
    $mail->Password   = 'wtwibgdwpxuypfoc';                   //SMTP password    djmcbhljqqztfgdg  wtwibgdwpxuypfoc  dbzxakuqekgbulhi
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          //Enable implicit TLS encryption
    $mail->Port       = 465;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('ramitnoreply@gmail.com', 'RAM-IT');
    while ($row=mysqli_fetch_array($query)){
    $mail->addAddress($row["email"], $row["fname"]." " . $row["lname"]); 
}    //Add a recipient           //Name is optional

    // $mail->AddEmbeddedImage($folder, $filename, $folder); //Attachments
    //Add attachments
    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Ticket added';
    $mail->Body    = 
    " <!--RAMIT to ITRO Specialist-->
    <br>    Inquirer's Info
            <hr>
    <br>    Good Day,
    <br>
    <br>    This is to inform about the current state of the ticket# ". $_POST["iid"] ." recieved by RAM-IT.  
    <br>
    <br>    As a confirmation, the following are the details of the ticket that was received by RAM-IT.
    <br>
    <br>    Inquiry: ". $_POST["inquiry"] ."
    <br>    Type of Inquiry: ". $_POST["itype"] ."
    <br>    Inquiry Description: ". $_POST["fdes"] ."
    <br>    Date of Creation: ". $_POST["dt"] ."
    <br>
    <br>    The current state of the ticket# ". $_POST["iid"] ." is PENDING.
    <br>
    <br>    Upon receiving this e-mail, we encourage you to access the RAM-IT website to process the submitted ticket.
    <br>
    <br>    Thank you.
    <br>
    <br>    RAM-IT
            <hr>
    <br>   **This is a system-generated e-mail. Please do not reply.**";

    $sql = "INSERT INTO ticket (iid, iname, ipstion, email , img , itype , inqry , fdes , stat , priority , severity , dt , place , floor , room, filename, notifstus, notifstum)
    VALUES ('$iid', '$iname', '$ipstion', '$email' , '$img' , '$itype' , '$inqry' , '$fdes' , '$stat', '$priority', '$severity', '$dt', '$loc', '$floor', '$room', '$filename', '0', '$iname submitted a new ticket')";
    
if ($con->query($sql) === TRUE) {
echo "New record created successfully";
$mail->send();
header('location: ../../../ticket.php?link=ticket');
} else {
echo "Error: " . $sql . "<br>" . $con->error;      
}

$con->close();
?>


