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
				$thispage = 'submit-query';

				include ('includes/navigation.php');
			?>
		</div><!--Navigation div ends-->
		<br clear="all"/>


		<div class="maincontent"><!--Maincontent div opens -->

			<form method="POST" action="submit-query-action.php">
        	<input type="hidden" name="id" value="<?php echo $id?>">

				<table align="center" width=30%>

					<tr></tr>
					<tr></tr>
					<tr></tr>
					
					<tr>
						<td colspan="2" ><b><i>Every fields are optional</i></b></td>
					</tr>

					<tr></tr>
					<tr></tr>

					<tr></tr>
					<tr></tr>
					

					<tr>
						<td>First Name</td>

						<td>
							<SELECT name= "fname" >
								<option selected="selected"  ></option>
								<?php

									$q1 = "SELECT DISTINCT first_name FROM tbl_std_info ORDER BY `first_name`";
									$result1 = mysqli_query($link,$q1);
									$num1 = mysqli_num_rows($result1);
									for($i=1; $i<=$num1; $i++)
									{
										$row1= mysqli_fetch_array($result1);
										?>
                                    
                                    <option value="<?php echo $row1['first_name'];//echo $row1['id']; ?>">
										<?php echo $row1['first_name'];?>           							 
            						</option>
                                    
                                    <?php
										}
									?>

								
							</SELECT>
						</td>

					</tr>

					<tr>
						<td>Middle Name</td>
						<td>
							<SELECT name ="mname">
								<option selected="selected"></option>
								<?php

									$q2 = "SELECT DISTINCT middle_name  FROM tbl_std_info ORDER BY `middle_name`";
									$result2 = mysqli_query($link , $q2);
									$num2 = mysqli_num_rows($result2);
									for($i2 = 1 ; $i2 <= $num2 ; $i2++ )
									{
										$row2= mysqli_fetch_array($result2);
										?>
                                    
                                    <option value="<?php echo $row2['middle_name']; ?>">
										<?php echo $row2['middle_name'];?>           							 
            						</option>
                                    
                                    <?php
										}
									?>

								
							</SELECT>
						</td>
					</tr>

					<tr>
						<td>Last Name</td>
						<td>
							<SELECT name ="lname">
								<option selected="selected"></option>
								<?php

									$q3 = "SELECT DISTINCT last_name FROM tbl_std_info ORDER BY `last_name`";
									$result3 = mysqli_query ($link , $q3) ;
									$num3 = mysqli_num_rows ($result3) ;
									for($i3 = 1 ; $i3 <= $num3 ; $i3++)
									{
										$row3 = mysqli_fetch_array($result3);
										?>
                                    
                                    <option value="<?php echo $row3['last_name']; ?>">
										<?php echo $row3['last_name'];?>           							 
            						</option>
                                    
                                    <?php
										}
									?>

								
							</SELECT>
						</td>
					</tr>


					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					
					

					<tr>
						<td>Permanent Address</td>
						<td>
							<SELECT name ="paddress">
								<option selected="selected"></option>
								<?php

									$q4 = "SELECT DISTINCT address_permanent FROM tbl_std_info ORDER BY `address_permanent`";
									$result4 = mysqli_query ($link , $q4) ;
									$num4 = mysqli_num_rows ($result4) ;
									for($i4 = 1 ; $i4 <= $num4 ; $i4++)
									{
										$row4 = mysqli_fetch_array($result4);
										?>
                                    
                                    <option value="<?php echo $row4['address_permanent']; ?>">
										<?php echo $row4['address_permanent'];?>           							 
            						</option>
                                    
                                    <?php
										}
									?>

								
							</SELECT>
						</td>
					</tr>

					

					<tr></tr>
					<tr></tr>
					<tr></tr>
					
					

					
					<tr>
						<td>Room No</td>
						<td>
							<SELECT name ="roomno">
								<option selected="selected"></option>
								<?php

									$q5 = "SELECT DISTINCT room_no FROM tbl_std_info ORDER BY `room_no`";
									$result5 = mysqli_query ($link , $q5) ;
									$num5 = mysqli_num_rows ($result5) ;
									for($i5 = 1 ; $i5 <= $num5 ; $i5++)
									{
										$row5 = mysqli_fetch_array($result5);
										?>
                                    
                                    <option value="<?php echo $row5['room_no']; ?>">
										<?php echo $row5['room_no'];?>           							 
            						</option>
                                    
                                    <?php
										}
									?>

								
							</SELECT>
						</td>
					</tr>

					

					<tr></tr>
					<tr></tr>
					<tr></tr>
					
					

			
					<tr></tr>
					<tr></tr>
					<tr></tr>

				

					<tr></tr>
					<tr>
						<td></td>
						<td>
                        	<input type="submit" name="submit" value="Submit" />
							
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