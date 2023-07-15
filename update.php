<?php
	include('connection.php');

	$name=$_POST['ename'];
	$location=$_POST['eloc'];
	$salary=$_POST['esal'];
	$designation=$_POST['edesig'];
	$id=$_POST['eid'];
	
	$sql="update employees set emp_name='$name',emp_location='$location',emp_salary='$salary',emp_designation='$designation' where emp_id='$id'";
	mysqli_query($conn,$sql);

	if(mysqli_affected_rows($conn)>0){
		echo "Employee ".$_POST['ename']." updated successfully!";
	}
	else{
		echo "Unable to update!";
	}
?>