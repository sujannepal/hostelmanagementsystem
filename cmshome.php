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
				$thispage = 'cmshome';
				include ('includes/navigation.php');
			?>
		</div><!--Navigation div ends-->
		<br clear="all"/>


		<div class="maincontent">

			<div class="content-1"></div>
			<div class="content-2">

				<div class="content-2-a">
					<h3><i>Special Features</i></h3>

					&raquo; Free High Speed Wi-fi 24 hours<br>
					&raquo; Hot water 24 hours<br>
					&raquo; Peaceful Location<br>
					&raquo; Hygenic Food<br>
					


					

				</div>
				
				<div class="content-2-b">
					
					<h3><i>Contact Details</i></h3>

					&raquo;Putalisadak, Kathmandu<br>
					&raquo;Contact: 9841223300 <br>
					&raquo;Email: ebhostel@gmail.com<br>

				</div>
				
				

			</div>

			<div class="content-3"></div>

			
			
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