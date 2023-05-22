
<?php
require '../connect.php';

$queries = mysqli_real_escape_string($con, $_POST['queries']);
$replies = mysqli_real_escape_string($con, $_POST['replies']);
$link = mysqli_real_escape_string($con, $_POST['link']);
$msg = mysqli_real_escape_string($con, $_POST['msg']);

if ($link == ""){
    
   } else{
    $flink = "<a class = link href=$link> $msg </a>";
    if ($msg == ""){
        $msg = "here...";
        $flink = "<a class = link href=$link> $msg </a>";
       } else{
           
       }
       
   }
   
$sql = "INSERT INTO cbr (queries, replies)
VALUES ('$queries', '$replies $flink' )";

if ($con->query($sql) === TRUE) {
echo "New record created successfully";
header('location: ../../../tcb.php?link=tcb');
} else {
echo "Error: " . $sql . "<br>" . $con->error;      
}

$con->close();
?>


 

