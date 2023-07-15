<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<title>Update</title>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#show").change(function(){
				var emp_id= $('#show').val();
				$.ajax({
					'type':'POST',
					'url': 'set_data.php',
					'data': {emp_id:emp_id},
					'success': function(data){
						$('#emp_show').html(data);
						$('#msg').html("");
					}
				});
			});

			$("#btn_update").click(function(){
				var id=$('#emp_id').val();
				var name=$('#emp_name').val();
				var location=$('#emp_loc').val();
				var salary=$('#emp_sal').val();
				var designation=$('#emp_desig').val();

				$.ajax({
					'type':'POST',
					'url': 'update.php',
					'data': {eid:id, ename:name, eloc:location, esal:salary, edesig:designation},
					'success': function(data){
						$('#msg').html(data);
					}
				});
			});
		});
	</script>
</head>
<body>
	<h2>Select Employee to Update</h2>
	<?php
		include('connection.php');
		$sql="select emp_id, emp_name from employees";
		$result=mysqli_query($conn,$sql);

		echo "<select id='show'>";
		echo "<option value=''>Choose Employee</option>";
		while($row=mysqli_fetch_assoc($result)){
			echo "<option value=".$row['emp_id'].">".$row['emp_name']."</option>";
		}
		echo "</select>";
	?>
	<br>
	<div id="emp_show"></div>
	<br>
	<input type="button" id="btn_update" value="Update">
	<br>
	<h3 id="msg"></h3>
</body>
</html>