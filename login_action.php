<?php

	session_start();
	include('config/db.php');

	$username = $_POST['username'];
	$password = $_POST['password'];

	$q = "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password' ";
	$result = mysqli_query($link,$q);

	
	$num = mysqli_num_rows($result);

	if($num == 0){
		header("Location: index.php?error=yes");
	}

	else
		{

		$row = mysqli_fetch_array($result);

		$_SESSION['username'] = $username;

		$_SESSION['user_id'] = $row['id'];

		$_SESSION['login'] = 'yes';

		header("Location: cmshome.php");
	}



?>