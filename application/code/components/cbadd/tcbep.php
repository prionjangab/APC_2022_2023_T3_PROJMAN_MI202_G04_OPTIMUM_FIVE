
<?php
require '../connect.php';

$id=$_GET['id'];

$queries = $_POST["queries"];
$replies = $_POST["replies"];

$sql = "update `cbr` set  queries='$queries' , replies='$replies'  where id=". $id;

if ($con->query($sql) === TRUE) {
echo "New record created successfully";
header('location: ../../../tcb.php?link=tcb');
} else {
echo "Error: " . $sql . "<br>" . $con->error;      
}

$con->close();
?>


 

