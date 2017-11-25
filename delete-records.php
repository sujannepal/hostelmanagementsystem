<?php
	session_start();
	include('config/db.php');
	
	$id = $_GET['id'];
	
	$q = "DELETE FROM tbl_std_info WHERE id = '$id'";
	
	mysqli_query($link,$q);
	header("Location: view-records.php");

?>