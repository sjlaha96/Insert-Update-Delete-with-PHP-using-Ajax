<?php
	include('connection.php');
	$id=$_POST['emp_id'];
	$sql="select * from employees where emp_id=".$id;
	$result=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_assoc($result)){
		echo "<h3>"; 
    	echo "EMPLOYEE_ID:<input type='text' id='emp_id' value='".$row['emp_id']."' readonly><br>";
    	echo "EMPLOYEE_NAME:<input type='text' id='emp_name' value='".$row['emp_name']."'><br>";
    	echo "EMPLOYEE_LOC:<input type='text' id='emp_loc' value='".$row['emp_location']."'><br>";
   		echo "EMPLOYEE_SALARY:<input type='number' id='emp_sal' value='".$row['emp_salary']."'><br>";
   		echo "EMPLOYEE_DESIG:<input type='text' id='emp_desig' value='".$row['emp_designation']."'><br>";
		echo "</h3>";
	}
?>