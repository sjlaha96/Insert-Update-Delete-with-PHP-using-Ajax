<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db="laha96";

	$conn=mysqli_connect($servername,$username,$password,$db);
	if($conn){
		//echo "Connection Successful";
	}
	else{
		echo "Connection failed!";
		die("Connection lost: ".mysqli_connect_error());
	}
?>