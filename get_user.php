<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		table{
			width:100%;
			border-collapse: collapse;
		}
		table, td, th{
			border: 1px solid black;
			padding: 5px;
		}
		th{text-align: left;}
	</style>
</head>
<body>
	<?php
		include('connection.php');
		if ($_POST['user']!="") {
			$user=intval($_POST['user']);
			$sql="select * from employees where emp_id=".$user;
			$result=mysqli_query($conn,$sql);

			echo "<table bgcolor='yellow' width='50%'>
					<tr>
						<td>ID</td>
						<td>Name</td>
						<td>Location</td>
						<td>Salary</td>
						<td>Designation</td>
					</tr>";
			while ($row=mysqli_fetch_assoc($result)){
				echo "<tr>";
				echo "<td>".$row['emp_id']."</td>";
				echo "<td>".$row['emp_name']."</td>";
				echo "<td>".$row['emp_location']."</td>";
				echo "<td>".$row['emp_salary']."</td>";
				echo "<td>".$row['emp_designation']."</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		else{
			echo "Sorry, no data found!";
		}
		mysqli_close($conn);
	?>
</body>
</html>