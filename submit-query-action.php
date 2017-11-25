<?php

	session_start();
	include('config/db.php');



	$fname = $_POST['fname'];
	

	$mname = $_POST['mname'];
	$lname = $_POST['lname'];

	$paddress = $_POST['paddress'];

	$roomno = $_POST['roomno'];



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


		

		<div class="maincontent">
		
			<table width="98%">
				<tr bgcolor="#069" style="color: #fff; text-align: center;">
				
					<th>S.N</th>
					<th>Full Name</th>
					
					<th>Address</th>
					<th>Phone</th>

					<th>Payement Cleared Upto</th>
					<th>Room No</th>

					<th>Guardian Name</th>
					<th>Guardian Contact</th>

					<th>Hostel Joined Date</th>
					<th>Action</th>
					

				</tr>


				 <?php
					
					
					
					$q = "SELECT * FROM tbl_std_info ORDER by `first_name` asc";
					$result = mysqli_query($link, $q);
					$num = mysqli_num_rows($result);
					$j=1;
					
					for($i=1; $i<=$num; $i++)
					{
						
						$row = mysqli_fetch_array($result);
						
						
						
						//Query code starts (Display only selected data)
						if (
								($fname == $row['first_name'] || $fname == NULL ) &&
								($mname == $row['middle_name'] || $mname == NULL ) &&
								
								($lname == $row['last_name'] || $lname == NULL ) &&
								($paddress == $row['address_permanent'] || $paddress == NULL ) &&
								
								($roomno == $row['room_no'] || $roomno == NULL )
							
							)

						{
							

						//Query code ends

					
						?>
						
						
						<tr height="25" bgcolor="#DDD">
						                           
						
             				<td><?php echo $j; $j++; ?></td>

							<td><?php echo $row['first_name'].' '; echo $row['middle_name'].' '; echo $row['last_name'];?></td>
							
							<td><?php echo $row['address_permanent']; ?></td>
							<td><?php echo $row['phone']; ?></td>

							<td><?php echo $row['payment_cleared_till']; ?></td>
							<td><?php echo $row['room_no']; ?></td>

							<td><?php echo $row['guardian_name']; ?></td>
							<td><?php echo $row['guardian_phone']; ?></td>

							<td><?php echo $row['hostel_joined_date']; ?></td>

							<td>
								
								<a style="text-decoration: none;" href="view-more-details.php?id=<?php echo $row['id']?>"> View</td>


						</tr>
					

					<?php
						}
					}

					?>

						

			</table>	
			
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