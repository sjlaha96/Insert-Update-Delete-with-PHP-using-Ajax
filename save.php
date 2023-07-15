<?php
	include 'connection.php';
	$name=$_POST['name'];
	$location=$_POST['location'];
	$salary=$_POST['salary'];
	$designation=$_POST['designation'];
	
	$sql = "INSERT INTO `employees`( `emp_name`, `emp_location`, `emp_salary`, `emp_designation`) 
	VALUES ('$name','$location','$salary','$designation')";
	
	if (mysqli_query($conn, $sql)) 
	{
		echo "Data inserted successfully!";
	} 
	else {
		echo "Unable to insert data!";
	}
	mysqli_close($conn);
?>