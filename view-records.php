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
				$thispage = 'view-records';

				include ('includes/navigation.php');
			?>
		</div><!--Navigation div ends-->
		<br clear="all"/>


		<div class="maincontent">
		
			<table width="98%" >
				<tr height = "30" bgcolor="#069" style="color: #fff; text-align: center;" >
					<td>S.N</td>
					<td>Full Name</td>
					
					<td>Address</td>
					<td>Phone</td>

					<td>Payement Cleared Upto</td>
					<td>Room No</td>

					<td>Guardian Name</td>
					<td>Guardian Contact</td>

					<td>Hostel Joined Date</td>
					<td>Action</td>
					

				</tr>


				<?php

					$q = "SELECT * FROM `tbl_std_info`";
					$result = mysqli_query($link, $q);
					$num = mysqli_num_rows($result);


					for($i=1; $i<= $num; $i++){

							$row = mysqli_fetch_array($result);
						?>


						  <?php 
								if($i % 2 == 0)
								{
									?>
									<tr height="25" bgcolor="#ddd">
                                     <?php 
								}?>
                             
                              <?php 
								if($i % 2!= 0)
								{
									?>
									<tr height="25">
                                     <?php 
								}?>
                           
						



							<td><?php echo $row['id']; ?></td>
							<td><?php echo $row['first_name'].' '; echo $row['middle_name'].' '; echo $row['last_name'];?></td>
							
							<td><?php echo $row['address_permanent']; ?></td>
							<td><?php echo $row['phone']; ?></td>
							<td><?php echo $row['payment_cleared_till']; ?></td>
							<td><?php echo $row['room_no']; ?></td>
							<td><?php echo $row['guardian_name']; ?></td>
							<td><?php echo $row['guardian_phone']; ?></td>
							<td><?php echo $row['hostel_joined_date']; ?></td>





							<td>

							 <?php 
								  
								  	if($_SESSION['username']=='admin')
									{
										?>	
								<a style="text-decoration: none;" href="edit-records.php?id=<?php echo $row['id']?>">Edt </a>&nbsp;| 

								<a style="text-decoration: none;" href="delete-records.php?id=<?php echo $row['id']?>"
          onclick="Javascript:a = confirm('Are you sure?');if(!a)return false;">Del</a> | 

          							<?php
          							}
          							?>

								<a style="text-decoration: none;" href="view-more-details.php?id=<?php echo $row['id']?>"> Details</td>


						</tr>

						<?php
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