<?php
include("dbconn.php");

if(isset($_POST['num']) && isset($_POST['name']) && isset($_POST['manu']) && isset($_POST['model']) && isset($_POST['color']) && isset($_POST['milage']) && isset($_POST['price'])){
	$num = $_POST['num'];
	$name = $_POST['name'];
	$manu=$_POST['manu'];
	$model = $_POST['model'];
	$color = $_POST['color'];
	$milage = $_POST['milage'];
	$price = $_POST['price'];
	$data = $_POST['image'];
	$data = 'index/'.$data;

}

//        // Temporary file name stored on the server
//        $tmpName  = $_FILES['image']['tmp_name'];
//        // Read the file
//        $fp      = fopen($tmpName, 'r');
//        $data = fread($fp, filesize($tmpName));
//        $data = addslashes($data);
//        fclose($fp);
		
		$sql="INSERT INTO  vehicles (Vehicle_NO,V_Name,Manufacturer,Model,Color,Milage,Price,Image) VALUES ('$num','$name','$manu','$model','$color','$milage','$price','$data')";
		
		if (!mysqli_query($conn,$sql)) {
		 	die('Error: ' . mysqli_error($conn));
		}
		else{
			echo "<h2>Successfully Added ".$name."</h2>";
		}
		//header("location: InsertItems.php");

 
	

?>
