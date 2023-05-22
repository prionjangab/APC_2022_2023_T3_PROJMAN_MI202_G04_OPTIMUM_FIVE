<?php
require 'connect.php';

	$id=$_GET['id'];
	mysqli_query($con,"delete from `ticket` where tid='$id'");
	header('location:../../ticket.php');
?>