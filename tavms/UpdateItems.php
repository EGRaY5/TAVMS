<?php
include("dbconn.php");
	if(isset($_POST['id']))
	{
		$var = $_POST['id'];

    }
	
	echo $var;

	if(isset($_POST['update'])){
	$id = $_POST['id'];
	$num = $_POST['num'];
	$name = $_POST['name'];
	$manu = $_POST['manu'];
	$model = $_POST['model'];
	$color = $_POST['color'];
	$milage = $_POST['milage'];
	$price = $_POST['price'];
    $data = $_POST['data'];
	
	

	$sql="UPDATE vehicles SET ID='$id',Vehicle_NO='$num',V_Name='$name',Manufacturer='$manu',Model='$model',Color='$color',Milage='$milage',Price='$price',Image='$data' WHERE ID = '$var'";

	if (!mysqli_query($conn,$sql)) {
	 	die('Error: ' . mysqli_error($conn));
	}

	header("location: DisplayItems.php");
	mysqli_close($conn);
	}
?>