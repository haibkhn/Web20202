<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		
		ul#ulheader li{
			display: inline;
			padding: 20px;
		}
		#divheader{
			text-align: right;
			margin-right: 2px;
		}
	</style>
</head>
<body>
	<?php include "header.php" ?>
	<div>
		<div>
			<h2>Register</h2>
			<form action="http://localhost:8088/public?url=users/register" method="POST">
				<p>
					<div>username</div>
					<input type="text" name="username">
					<span><?php echo $data['usernameError']; ?></span>
				</p>
				<p>
					<div>email</div>
					<input type="email" name="email">
					<span><?php echo $data['emailError'] ?></span>
				</p>
				<p>
					<div>phone</div>
					<input type="tel" name="phone" pattern="[0-9]{10}" required="required" placeholder="0123456789">
				</p>
				<p>
					<div>password</div>
					<input type="password" name="password">
					<span><?php echo $data['passwordError'] ?></span>
				</p>
				<p>
					<div>confirm password</div>
					<input type="password" name="confirmPassword">
					<span><?php echo $data['confirmPasswordError'] ?></span>
				</p>
				
				<button id="submit" type="submit" value="submit">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>