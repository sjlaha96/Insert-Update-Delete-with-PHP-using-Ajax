<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<title>Get User Details</title>
	<script>
		$(document).ready(function(){
			$('.info').change(function(){
				var userid= $('.info').val();
				$.ajax({
					'type': 'POST',
					'url': 'get_user.php',
					'data': {user: userid},
					'success': function(data){
						$('#txtHint').html(data);
					}
				});
			});
		});
	</script>
</head>
<body>
	<?php
	include('connection.php');
	$sql="select emp_id,emp_name from employees";
	$result=mysqli_query($conn,$sql);

	echo "<h3>Select employee to get details</h3>";
	echo "<select class='info'>";
	echo "<option value=''>Select Employee</option>";
	while ($row=mysqli_fetch_assoc($result)) {
		echo "<option value=".$row['emp_id'].">".$row['emp_name']."</option>";
	}
	echo "</select>";
	?>
	<br>
	<div id="txtHint">Informations are listed here...</div>
</body>
</html>




