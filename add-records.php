<?php

	session_start();
	include('config/db.php');

	if(!isset($_SESSION['login'])&&$_SESSION['login']!='yes'){
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
				$thispage = 'add-records';
				
				include ('includes/navigation.php');
			?>
		</div><!--Navigation div ends-->
		<br clear="all"/>


		<div class="maincontent"><!--Maincontent div opens -->

			<form method="POST" action="add-records-action.php" enctype="multipart/form-data">
				<table align="center" width=40%>
					
					<tr></tr>
					<tr></tr>
					<tr></tr>
					
					<tr>
						<td colspan="2" align="center"><b><i>Please fill the student records carefully</i></b></td>
					</tr>

					<tr></tr>
					<tr></tr>

					<tr></tr>
					<tr></tr>
					

					<tr>
						<td>First Name</td>
						<td><input type="text" name="fname" size="40"></td>

					</tr>

					<tr>
						<td>Middle Name</td>
						<td><input type="text" name="mname" size="40"></td>

					</tr>

					<tr>
						<td>Last Name</td>
						<td><input type="text" name="lname" size="40"></td>

					</tr>


					<tr></tr>
					<tr></tr>
					<tr></tr>


					<tr>
						<td>DOB</td>
						<td>
							<select name="day1">
								<option selected="selected"><?php echo date('d');  ?></option>

								<?php


									for($i=1; $i<=31; $i++ ){
										?>
										<option><?php echo $i ?></option>

										<?php
									}

								?>


							</select>

							<select name="month1">

								<option selected="selected"><?php echo date('m'); ?></option>
								<?php

									for($j=1; $j<=12; $j++ ){
										?>
										<option><?php  echo $j ?></option>

										<?php
									}

								?>


							</select>

							<select name="year1">
								
									<option selected="selected"><?php $year = date('Y'); echo $year; ?></option>

									<?php
									for($k = $year; $k>=1900; $k-- ){
										?>
										<option><?php echo $k ?></option>

										<?php
									}

								?>


							</select>


						</td>

					</tr>

					<tr>
						<td>Phone</td>
						<td><input type="text" name="phone" size="40"></td>

					</tr>

					<tr></tr>
					<tr></tr>
					<tr></tr>
					
					

					<tr>
						<td>Permanent Address</td>
						<td><input type="text" name="paddress" size="40"></td>

					</tr>

					<tr>
						<td>Guardian's Name</td>
						<td><input type="text" name="gname" size="40"></td>

					</tr>

					<tr>
						<td>Guardian's Phone</td>
						<td><input type="text" name="gphone" size="40"></td>

					</tr>

					<tr></tr>
					<tr></tr>
					<tr></tr>
					
					

					<tr>
						<td>Hostel Joined Date</td>
						<td>


							
							<select name="day2">
								<option selected="selected"><?php echo date('d');  ?></option>

								<?php


									for($i=1; $i<=31; $i++ ){
										?>
										<option><?php echo $i ?></option>

										<?php
									}

								?>


							</select>

							<select name="month2">

								<option selected="selected"><?php echo date('m'); ?></option>
								<?php

									for($j=1; $j<=12; $j++ ){
										?>
										<option><?php  echo $j ?></option>

										<?php
									}

								?>


							</select>

							<select name="year2">
								
									<option selected="selected"><?php $year = date('Y'); echo $year; ?></option>

									<?php
									for($k = $year; $k>=1900; $k-- ){
										?>
										<option><?php echo $k ?></option>

										<?php
									}

								?>


							</select>


						</td>


					</tr>

					<tr>
						<td>Room No</td>
						<td><input type="text" name="roomno" size="40"></td>

					</tr>

					<tr>
						<td>Monthly Fee</td>
						<td><input type="text" name="fee" size="40"></td>

					</tr>

					<tr></tr>
					<tr></tr>
					<tr></tr>
					
					

					<tr>
						<td>Payment Cleared Till</td>
						<td>
							<select name="day3">
								<option selected="selected"><?php echo date('d');  ?></option>

								<?php


									for($i=1; $i<=31; $i++ ){
										?>
										<option><?php echo $i ?></option>

										<?php
									}

								?>


							</select>
							
							<select name="month3">

								<option selected="selected"><?php echo date('m'); ?></option>
								<?php

									for($j=1; $j<=12; $j++ ){
										?>
										<option><?php  echo $j ?></option>

										<?php
									}

								?>


							</select>

							<select name="year3">
								
									<option selected="selected"><?php $year = date('Y'); echo $year; ?></option>

									<?php
									for($k = $year; $k>=1900; $k-- ){
										?>
										<option><?php echo $k ?></option>

										<?php
									}

								?>


							</select>


						</td>

					</tr>

			<!--		<tr>
						<td>User Photo</td>
						<td><input type="text" name="roomno"></td>

					</tr>
-->
					<tr></tr>
					<tr></tr>
					<tr></tr>

					
<!--
					<tr>
						<td>Unique Id Photo</td>
						<td><input type="file" name="uniqueid"></td>
-->
					</tr>

					<tr></tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="submit" value="Submit">
							<input type="reset" name="reset" value="Reset">

						</td>
					</tr>




				</table>
			</form>
			
			
		</div><!--Maincontent div close -->

		<div class="footer">

			<?php
				include("includes/footer.php");
			?>
		</div>
		<br clear="all"/>
		
	</div>

</body>
</html>