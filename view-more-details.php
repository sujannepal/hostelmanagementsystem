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

			<form method="POST" >
        	<input type="hidden" name="id" value="<?php echo $id?>">

				<table align="center" width=30% cellpadding="1" cellspacing="3" bgcolor="#fff">
					

					<tr></tr>
					<tr></tr>
					<tr></tr>
					
					<tr>
						<td colspan="2" align="center"><b style="font-size: 20px;">Student Profile</b></td>
					</tr>

					<tr></tr>
					<tr></tr>

					<tr></tr>
					<tr></tr>
						


					<tr>
						<th align="left"  class="more-details-tbl-1">Name</th>
						<td class="more-details-tbl-2">
							<?php echo $row['first_name'] ." ";  
								echo $row['middle_name'] . " ";   
								echo $row['last_name']; 
							?>	
						</td>

					</tr>

					

					



					<tr>
						<th align="left"  class="more-details-tbl-1">DOB</th>
						<td  class="more-details-tbl-2">

							 <?php 
						       	$date1 = $row['dob'];
								$date1 = explode('-',$date1);
								
								$year1 = $date1[0];
								$month1 = $date1[1];
								$day1 = $date1[2];



								echo $day1 . "-" . $month1 . "-" . $year1;   
						       
						      ?>
						</td>

					</tr>

					<tr>
						<th align="left"  class="more-details-tbl-1">Phone</th>
						<td  class="more-details-tbl-2"><?php echo $row['phone'] ; ?></td> 
						 
						

					</tr>

					

					<tr>
						<th align="left" class="more-details-tbl-1">Permanent Address</th>
						<td  class="more-details-tbl-2"><?php echo $row['address_permanent'] ; ?></td> 

					</tr>

					<tr>
						<th align="left"  class="more-details-tbl-1">Guardian's Name</th>
						<td  class="more-details-tbl-2"><?php echo $row['guardian_name'] ; ?></td> 


					</tr>

					<tr>
						<th align="left" class="more-details-tbl-1">Guardian's Phone</th>
						<td class="more-details-tbl-2"><?php echo $row['guardian_phone'] ; ?></td> 


					</tr>

					
					

					<tr>
						<th align="left" class="more-details-tbl-1">Hostel Joined Date</th>
						<td class="more-details-tbl-2">

							 <?php 
						       	$date2 = $row['hostel_joined_date'];
								$date2 = explode('-',$date2);
								
								$year2 = $date2[0];
								$month2 = $date2[1];
								$day2 = $date2[2];

								echo $day2 . "-" . $month2 . "-" . $year2;   

						       
						      ?>


						</td>


					</tr>

					<tr>
						<th align="left" class="more-details-tbl-1">Room No</th>
						<td class="more-details-tbl-2"><?php echo $row['room_no'] ; ?></td> 


					</tr>

					<tr>
						<th align="left" class="more-details-tbl-1">Monthly Fee (Rs.)</th>
						<td class="more-details-tbl-2"><?php echo $row['monthly_fee'] ; ?></td> 


					</tr>

				
					

					<tr>
						<th align="left" class="more-details-tbl-1">Payment Cleared Till</th>
						<td class="more-details-tbl-2">


							<?php

								$date3 = $row['payment_cleared_till'];
								$date3 = explode('-', $date3);

								$year3 = $date3[0];
								$month3 = $date3[1];
								$day3 = $date3[2];

								echo $day3 . "-" . $month3 . "-" . $year3;   

							?>
							

						</td>

					</tr>

			
					
			</tr>

					<tr></tr>
					
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