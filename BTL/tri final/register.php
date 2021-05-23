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
	<link rel="stylesheet" type="text/css" href="styleRegister.css">
</head>
<body>
	<?php include "header.php" ?>
	<header>
		<div class="insideRegister">
			<h1>Register</h1>
			<form action="http://localhost/Web20202/rent_house-master/rent_house-master/public?url=users/register" method="POST">
				<p>
					<div class="inputTitle">Username</div>
					<input type="text" name="username" placeholder="Username">
					<span><?php echo $data['usernameError']; ?></span>
				</p>
				<p>
					<div class="inputTitle">Email</div>
					<input type="email" name="email" placeholder="Email">
					<span><?php echo $data['emailError'] ?></span>
				</p>
				<p>
					<div class="inputTitle">Phone</div>
					<input type="tel" name="phone" pattern="[0-9]{10}" required="required" placeholder="0123456789">
				</p>
				<p>
					<div class="inputTitle">Password</div>
					<input type="password" name="password">
					<span><?php echo $data['passwordError'] ?></span>
				</p>
				<p>
					<div class="inputTitle">Confirm password</div>
					<input type="password" name="confirmPassword">
					<span><?php echo $data['confirmPasswordError'] ?></span>
				</p>
				
				<button id="submit" type="submit" value="submit">Submit</button>
				<br><br><br><br>
			</form>
		</div>
	</header>
</body>
</html>