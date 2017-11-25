<?php

	session_start();
	include('config/db.php');

	$id = $_GET['id'];

	$q = "SELECT * FROM tbl_std_info WHERE id = '$id'";

	$result = mysqli_query($link, $q);

	$row = mysqli_fetch_array($result);
	
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

				include ('includes/navigation.php');
			?>
		</div><!--Navigation div ends-->
		<br clear="all"/>


		<div class="maincontent"><!--Maincontent div opens -->

			<form method="POST" action="edit-records-action.php" >
        	<input type="hidden" name="id" value="<?php echo $id?>">

				<table align="center" width=60%>
					<tr>
						<td>First Name</td>
						<td><input type="text" name="fname"  value="<?php echo $row['first_name']; ?>"></td>

					</tr>

					<tr>
						<td>Middle Name</td>
						<td><input type="text" name="mname" value="<?php echo $row['middle_name']; ?>"></td>

					</tr>

					<tr>
						<td>Last Name</td>
						<td><input type="text" name="lname" value="<?php echo $row['last_name']; ?>"></td>

					</tr>


					<tr></tr>
					<tr></tr>
					<tr></tr>



					<tr>
						<td>DOB</td>
						<td>

							 <?php 
						       	$date1 = $row['dob'];
								$date1 = explode('-',$date1);
								
								$year1 = $date1[0];
								$month1 = $date1[1];
								$day1 = $date1[2];
						       
						      ?>

							<select name="day1">
								<option selected="selected"><?php echo $day1;  ?></option>

								<?php


									for($i=1; $i<=31; $i++ ){
										?>
										<option><?php echo $i ?></option>

										<?php
									}

								?>


							</select>

							<select name="month1">

								<option selected="selected"><?php echo $month1; ?></option>
								<?php

									for($j=1; $j<=12; $j++ ){
										?>
										<option><?php  echo $j ?></option>

										<?php
									}

								?>


							</select>

							<select name="year1">
								
									<option selected="selected"><?php echo $year1; ?></option>

									<?php
									for($k = $year1; $k>=1900; $k-- ){
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
						<td><input type="text" name="phone" value="<?php echo $row['phone']; ?>"></td>

					</tr>

					<tr></tr>
					<tr></tr>
					<tr></tr>
					
					

					<tr>
						<td>Permanent Address</td>
						<td><input type="text" name="paddress" value="<?php  echo $row['address_permanent']; ?>"></td>

					</tr>

					<tr>
						<td>Guardian's Name</td>
						<td><input type="text" name="gname"  value="<?php  echo $row['guardian_name']; ?>"></td>

					</tr>

					<tr>
						<td>Guardian's Phone</td>
						<td><input type="text" name="gphone"  value="<?php  echo $row['guardian_phone']; ?>"></td>

					</tr>

					<tr></tr>
					<tr></tr>
					<tr></tr>
					
					

					<tr>
						<td>Hostel Joined Date</td>
						<td>

							 <?php 
						       	$date2 = $row['hostel_joined_date'];
								$date2 = explode('-',$date2);
								
								$year2 = $date2[0];
								$month2 = $date2[1];
								$day2 = $date2[2];
						       
						      ?>


							
							<select name="day2">
								<option selected="selected"><?php echo $day2;  ?></option>

								<?php


									for($i=1; $i<=31; $i++ ){
										?>
										<option><?php echo $i ?></option>

										<?php
									}

								?>


							</select>

							<select name="month2">

								<option selected="selected"><?php echo $month2; ?></option>
								<?php

									for($j=1; $j<=12; $j++ ){
										?>
										<option><?php  echo $j ?></option>

										<?php
									}

								?>


							</select>

							<select name="year2">
								
									<option selected="selected"><?php echo $year2; ?></option>

									<?php
									for($k = $year2; $k>=1900; $k-- ){
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
						<td><input type="text" name="roomno" value="<?php  echo $row['room_no']; ?>"></td>

					</tr>

					<tr>
						<td>Monthly Fee</td>
						<td><input type="text" name="fee" value="<?php echo $row['monthly_fee'];  ?>"></td>

					</tr>

					<tr></tr>
					<tr></tr>
					<tr></tr>
					
					

					<tr>
						<td>Payment Cleared Till</td>
						<td>


							<?php

								$date3 = $row['payment_cleared_till'];
								$date3 = explode('-', $date3);

								$year3 = $date3[0];
								$month3 = $date3[1];
								$day3 = $date3[2];
							?>
							<select name="day3">
								<option selected="selected"><?php echo $day3;  ?></option>

								<?php


									for($i=1; $i<=31; $i++ ){
										?>
										<option><?php echo $i ?></option>

										<?php
									}

								?>


							</select>
							
							<select name="month3">

								<option selected="selected"><?php echo $month3; ?></option>
								<?php

									for($j=1; $j<=12; $j++ ){
										?>
										<option><?php  echo $j ?></option>

										<?php
									}

								?>


							</select>

							<select name="year3">
								
									<option selected="selected"><?php echo $year3; ?></option>

									<?php
									for($k = $year3; $k>=1900; $k-- ){
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