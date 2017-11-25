
<?php
	
	session_start();
	include('config/db.php');
	
	
	$password_old = $_POST['password_old']; 
	
	
	$password_new = $_POST['password_new'];
	
	
	$u_id = $_SESSION['user_id'];
	
	$q= "SELECT * FROM tbl_admin WHERE id ='$u_id'";
	$result = mysqli_query($link,$q);
	$row = mysqli_fetch_array($result);
	
	$pw_db = $row['password'];
	
	
	
	if($password_old == $pw_db)
	{
		
		$q1 = "UPDATE `tbl_admin` SET  `password` = '$password_new' WHERE id ='$u_id' ";
		
		
		mysqli_query($link,$q1);
	
		
		header("Location: cmshome.php?password-changed-successfully");
		
	
	}
	else
	{

		?>
		<script type="text/javascript">
			alert('Old password does not match');
			

		</script>

	<?php
		}
	?>
		
	
	
	
	

