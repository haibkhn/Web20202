<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/header.css">
	<style>
		.dang_nhap a{
			color: tomato;
		}
	</style>
</head>
<body>
	<?php include "header.php" ?>
	<div>
		<div>
			<h2>Sign in</h2>
			<form action="http://hailocalhost/Web/CNWeb20201/Web20202/BTL/public?url=users/login" method="POST">
				<p>
					<div>username</div>
					<input type="text" name="username">
					<span><?php echo $data['usernameError']; ?></span>
				</p>
				<p>
					<div>password</div>
					<input type="password" name="password">
					<span><?php echo $data['passwordError'] ?></span>
				</p>
				
				<button id="submit" type="submit" value="submit">Submit</button>
			</form>
		</div>
	</div>
</body>
</html>