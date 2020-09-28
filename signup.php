<!DOCTYPE html>
<html>
<head>
	<title>Create New Account | PHP Chat</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.google.com/css?family=Roboto|Courgette|Pacifico:400,700">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	<div class="signup-form">
		<form action="" method="post">
			<div class="form-header">
				<h2>Sign Up</h2>
				<p>Create a New Account to PHP Chat</p>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input class="form-control" type="text" name="user_name" placeholder="Example: aditya" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" type="password" name="user_pass" placeholder="Password" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Email Address</label>
				<input class="form-control" type="email" name="user_email" placeholder="user@example.com" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Country</label>
				<select class="form-control" name="user_country" required>
					<option disabled="">Select a Country</option>
					<option>India</option>
					<option>Austria</option>
					<option>Britain</option>
					<option>Myanmar</option>
					<option>France</option>
					<option>Italy</option>
					<option>Germany</option>
				</select>
			</div>
			<div class="form-group">
				<label>Gender</label>
				<select class="form-control" name="user_gender" required>
					<option disabled="">Select your Gender</option>
					<option>Male</option>
					<option>Female</option>
					<option>Others</option>
				</select>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
			</div>
			<?php include("signup_user.php") ?>
		</form>
		<div class="text-center small" style="color: #67428B;">
			Already have an account?<a href="signin.php">SignIn Here</a>
		</div>
	</div>
</body>
</html>