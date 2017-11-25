<?php

	session_start();
	include('config/db.php');


	$day1 = $_POST['day1'];
	$month1 = $_POST['month1'];
	$year1 = $_POST['year1'];
	$date1 = $year1 ."-" . $month1 ."-" . $day1;
	
	

	$day2 = $_POST['day2'];
	$month2 = $_POST['month2'];
	$year2 = $_POST['year2'];
	$date2 = $year2 . "-" . $month2 . "-" . $day2;

	$day3 = $_POST['day3'];
	$month3 = $_POST['month3'];
	$year3 = $_POST['year3'];
	$date3 = $year3 . "-" . $month3 . "-" . $day3;



	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];

	
	$phone = $_POST['phone'];

	$paddress = $_POST['paddress'];
	$gname = $_POST['gname'];
	$gphone = $_POST['gphone'];

	$roomno = $_POST['roomno'];
	$fee = $_POST['fee'];
	$created_at = date("Y-m-d H:i:s");
	


	$q = "INSERT INTO `tbl_std_info` (`id`, `first_name`, `middle_name`, `last_name`, `dob`, `phone`, `address_permanent`, `guardian_name`, `guardian_phone`, `hostel_joined_date`, `room_no`, `monthly_fee`, `payment_cleared_till`,  `created_at`) VALUES (NULL, '$fname', '$mname', '$lname', '$date1', '$phone', '$paddress', '$gname', '$gphone', '$date2', '$roomno', '$fee', '$date3', '$created_at');";

	mysqli_query($link,$q);
	header("Location: view-records.php");















/*

//with image

	$q = "INSERT INTO `tbl_std_info` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `dob`, `phone`, `address_permanent`, `guardian_name`, `gaurdian_phone`, `hostel_joined_date`, `room_no`, `monthly_fee`, `payment_cleared_till`, `unique_id_thumb`, `unique_id_large`, `created_at`) VALUES (NULL, '$fname', '$mname', '$lname', '$gender', '$date1', '$phone', '$paddress', '$gname', '$gphone', '$date2', '$roomno', '$fee', '$date3', '', '', $created_at);";




	if(mysqli_query($link,$q))
	{
		$id = mysqli_insert_id();
		$image = $id.'.jpg';
		$thumb = $id.'_thumb.jpg';
		if(ImgUpload('image','unique-id-image/',$image))
			{
				ImageResizeWithCrop(150,150,"unique-id-image/$image",'unique-id-image/thumb/'.$thumb);
				$q = "UPDATE tbl_std_info SET `unique_id_thumb` = '$thumb', `unique_id_large` = '$image' WHERE id = '$id'";
				mysqli_query($link,$q);
			}
		//else mysqli_query($link,"DELETE FROM tbl_std_info WHERE id = '$id'");
	}
	
	//echo mysqli_error();
	//var_dump($q);
	//exit();
header("Location: cmshome.php");
*/

?>