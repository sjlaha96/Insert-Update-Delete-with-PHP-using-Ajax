<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script>
		$(document).ready(function(){
			$('#delete').change(function(){
				var del=$('#delete').val();
				$.ajax({
					'type': 'POST',
					'url': 'delete.php',
					'data':{delete:del},
					'success': function(data){
						$('#delete_msg').html(data);
					}
				});
			});
		});
	</script>
</head>
<body>
	<?php
		include('connection.php');
		$sql="select emp_id, emp_name from employees";
		$result=mysqli_query($conn,$sql);

		echo "Select employee to delete";
		echo "<select id=delete>
			<option value=''>Choose Employee</option>";
		while ($row=mysqli_fetch_assoc($result)) {
			echo "<option value=".$row['emp_id'].">".$row['emp_name']."</option>";
		}
		echo "</select>";
	?>
	<br>
	<h3 id="delete_msg" style="color: red;"></h3>
</body>
</html>