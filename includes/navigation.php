
<?php 
	if(!isset($thispage)) $thispage='';
	
?>


<div class="navigation">
	
	<div class="nav-left"><p style="padding-left: 10px; padding-top: 0px; margin-top: 8px;">User Type : <?php echo $_SESSION['username']; ?> </p></div>

	<div class="nav-mid">
		

		<ul>
			<li><a href="cmshome.php" <?php if($thispage == 'cmshome') echo 'class="active"';   ?> >Home </a></li>
			<li><a href="add-records.php" <?php if($thispage=='add-records') echo 'class="active"'; ?>>Add Records</a></li>
			<li><a href="view-records.php" <?php if($thispage=='view-records') echo 'class="active"'; ?>>View Records</a></li>


			<li><a href="submit-query.php" <?php if($thispage=='submit-query') echo 'class="active"'; ?>>Submit Query</a></li>



			
		</ul>


	</div>


	<div class="nav-right">
		
		<p style="padding-left: 10px; padding-top: 0px; margin-top: 8px;">&nbsp; <a href="change-admin-detail.php">Change password  </a>  &nbsp;&nbsp;&nbsp;|
			&nbsp;&nbsp;&nbsp; <a href="logout.php"> Logout</a></p> 
		
	</div>




</div>




