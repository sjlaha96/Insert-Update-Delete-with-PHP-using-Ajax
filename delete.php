<?php
	include('connection.php');
	$id=intval($_POST['delete']);
	$sql= "delete from employees where emp_id=".$id;
	mysqli_query($conn,$sql);
	$del=mysqli_affected_rows($conn);

	if($del>0){
		echo "Data deleted successfully!";
	}
	else{
		echo "Something went wrong!";
	}

?>