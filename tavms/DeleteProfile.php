<?php
	include("dbconn.php");
	
	session_start();
	$user_check=$_SESSION['login_user'];

	$result = mysqli_query($con,"DELETE FROM customer WHERE Customer_ID ='$user_check'");
	

	if (!$result)
	{
	 	die('Error: ' . mysqli_error($con));
	}
	else {
		echo 'Your Profile Deleted';
		header("location: SignUp.php");
	}
	
	
	mysqli_close($con);
?>