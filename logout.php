<?php

	session_Start();
	unset($_SESSION['login']);
	header("Location: index.php");


?>