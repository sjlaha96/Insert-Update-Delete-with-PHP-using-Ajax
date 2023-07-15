<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<title>Insert Page</title>
</head>
<body>
	<div style="margin: auto;width: 70%;">
		<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		</div>

		<form id="insert" name="form1" method="post">
			<div class="form-group">
				<label>NAME</label>
				<input type="text" class="form-control" id="name" placeholder="Type Name.." name="name">
			</div>
			<div class="form-group">
				<label>LOCATION</label>
				<select name="location" id="location" class="form-control">
					<option value="">Select</option>
					<option value="Delhi">Delhi</option>
					<option value="Mumbai">Mumbai</option>
					<option value="Kolkata">Kolkata</option>
					<option value="Chennai">Chennai</option>
				</select>
			</div>
			<div class="form-group">
				<label>SALARY</label>
				<input type="text" class="form-control" id="salary" placeholder="Type Salary.." name="salary">
			</div>
			<div class="form-group">
				<label>DESIGNATION</label>
				<input type="text" class="form-control" id="designation" placeholder="Type Designation.." name="designation">
			</div>
			<input type="button" name="button" class="btn btn-primary" value="Save" id="button">
		</form>
	</div>

	<script>
		$(document).ready(function(){
			$('#button').click(function(){
				var name= $('#name').val();
				var location=$('#location').val();
				var salary=$('#salary').val();
				var designation=$('#designation').val();

				if(name!="" && location!="" && salary!="" && designation!=""){
					$.ajax({
						'url': 'save.php',
						'type': 'POST',
						'data': {
							name: name,
							location: location,
							salary: salary,
							designation: designation
						},
						'cache': false,
						'success': function(dataResult){
							$('#insert').find('input:text').val('');
							$('#success').show();
							$('#success').html(dataResult);
						}
					})
				}
				else{
					alert('Please fill up all fields!');
				}
			})
		})
	</script>
</body>
</html>