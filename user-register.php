<!DOCTYPE html>
<html>
<head>
	<title>Html FORM</title>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
</head>
<body>
	<div class="container-fluid">
	<form action="register.php" method="post" class="form form-horizontal" enctype="multipart/form-data">
		<div class="form-group">
			<label for="" class="col-sm-3">Name: </label>
			<div class="col-sm-8">
				<input type="text" name="full_name" class="form-control" required />
			</div>
		</div>

		<div class="form-group">
			<label for="" class="col-sm-3">Username: </label>
			<div class="col-sm-8">
				<input type="text" name="username" class="form-control" required />
			</div>
		</div>

		<div class="form-group">
			<label for="" class="col-sm-3"> Date of Birth: </label>
			<div class="col-sm-8">
				<input type="date" name="date_of_birth" class="form-control" />
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-sm-3"> Address: </label>
			<div class="col-sm-8">
				<input type="text" name="address" class="form-control" />
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-sm-3">
				Email:
			</label>
			<div class="col-sm-8">
				<input type="email" name="email_address" class="form-control" />
			</div>
		</div>

		<div class="form-group">
			<label for="" class="col-sm-3">
				Phone No:
			</label>
			<div class="col-sm-8">
				<input type="tel" name="phone_number" class="form-control" />
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-sm-3">
				Gender
			</label>
			<div class="col-sm-8">
				<input type="radio" name="gender" value="Male" /> Male 
				<input type="radio" name="gender" value="Female"/> Female 
				<input type="radio" name="gender" value="Other" /> Other
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-sm-3">
				Country:
			</label>
			<div class="col-sm-8">
				<select name="country" class="form-control">
					<option value="Nepal">Nepal</option>
					<option value="China">China</option>
					<option value="India">India</option>
					<option value="USA">USA</option>
					<option value="UK">UK</option>
					<option value="Australia">Australia</option>
				</select>		
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-sm-3">About Yourself: </label>
			<div class="col-sm-8">
				<textarea name="about_yourself" class="form-control"></textarea>
			</div>
		</div>
		<div class="form-group">
			<label for="" class="col-sm-3">
				User Role:
			</label>
			<div class="col-sm-8">
				<select name="role_id" class="form-control">
					<option value="1">Admin</option>
					<option value="2">User</option>
					<option value="3">Guest</option>
					<option value="5">Reporter</option>
				</select>		
			</div>
		</div>

		<div class="form-group">
			<input type="submit" value="Register" class="btn btn-primary" />
			<input type="hidden" name="action" value="add" />
			<input type="reset" value="Cancel" class="btn btn-danger" />
		</div>

	</form>
	</div>
</body>
</html>