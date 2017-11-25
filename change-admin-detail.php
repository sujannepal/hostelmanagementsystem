<?php

	session_start();
	include('config/db.php');
	
	if(!isset($_SESSION['login']) && $_SESSION['login']!='yes'){
        header("Location: index.php");
        exit;
    
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hostel Management System</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="mainwrapper">
		<div class="header"><!--Header div opens-->
			<?php
				include("includes/header.php");
			?>
		</div><!--Header div ends-->
		<br clear="all"/>

		<div class="navigation"><!--Navigation div opens-->
			<?php

				include ('includes/navigation.php');
			?>
		</div><!--Navigation div ends-->
		<br clear="all"/>


		<div class="maincontent">


		<form method="POST" action="change-admin-detail-action.php" >
			<table align="center" style="margin-top: 20px;">
				<tr>
					<td colspan="2"><b><i>Please fill the information below to change your password</i></b></td>
				</tr>


				<tr></tr>
				<tr></tr>
				<tr></tr>

				<tr>


					<td>Enter current password</td>
					<td><input type="password" name="password_old"></td>
				</tr>

				<tr>
					<td>Enter new password</td>
					<td><input type="password" name="password_new"></td>
				</tr>
				<tr></tr>
				<tr></tr>

				<tr></tr>
				<tr></tr>
				<tr></tr>

				<tr>
					<td></td>
					<td><input type="submit" name="Submit">
					<input type="reset" name="Reset"></td>

				</tr>

			</table>

		
	</form>
			
			
		</div>

		<div class="footer">

			<?php
				include("includes/footer.php");
			?>
		</div>
		<br clear="all"/>
		
	</div>

</body>
</html>