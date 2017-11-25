<?php
	session_start();
	include('config/db.php');

	if(isset($_SESSION['login'])&&$_SESSION['login']='yes'){
		header("Location: cmshome.php");
		exit;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Hostel Management System</title>

	<link rel="stylesheet" type="text/css" href="css/style.css" name="login">
</head>
<body bgcolor="#066">
	<div id="mainwrapper">


		<?php

			if(isset($_GET['error']) && $_GET['error'] = 'yes')
			{
				?>

				<div style="color: #f00; text-align:center;"> Username/ Password Incorrect</div>

			<?php
			}

			?>

			<div class="maincontent">
				<div class="index-content">
					<form method="POST" action="login_action.php" name="loginForm" >
						<table width="30%" align="center">
							<tr  height="30"  >
								<th colspan="2" > <i style="font-size: 20px;">Everest Boys Hostel</i></th>
							</tr>

							<tr>
								<th colspan="2">User Login </th>
							</tr>
							<tr>
								<td>Username</td>
								<td><input type="text" name="username"></td>
							</tr>

							<tr>
								<td>Password</td>
								<td><input type="password" name="password"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="submit">
								<input type="reset" name="reset"></td>
							</tr>
					
						</table>
					</form>	
				</div>
			</div>
		
	</div>

</body>
</html>