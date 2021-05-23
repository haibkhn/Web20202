<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<link rel="stylesheet" type="text/css" href="styleLogin.css">
</head>
<body>
	<?php include "header.php" ?>
		<header>
			<div class="insideLogin">
				<h1>Log in</h1>
				<form action="http://localhost/Web20202/rent_house-master/rent_house-master/public?url=users/login" method="POST">
					<p>
						<div class="inputTitle">Username</div>
						<input type="text" class="input" name="username" placeholder="Username">
						<span><?php echo $data['usernameError']; ?></span>
					</p>
					<p>
						<div class="inputTitle">Password</div>
						<input type="password" class="input" name="password" placeholder="Password">
						<span><?php echo $data['passwordError'] ?></span>
					</p>
				<button id="submit" class="LoginButton" type="submit" value="submit">Log in</button>
				<br><br>
			</form>
			</div>
		</header>
</body>
</html>