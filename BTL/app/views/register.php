<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng ký</title>
	<link rel="stylesheet" href="public/css/header.css">
	<link rel="stylesheet" href="public/css/register.css">

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap');

		.dang_ky a{
			color: tomato;
		}
	</style>
</head>
<body>
	<?php include "header.php" ?>
	<section>
		<div class="img-sec">
				<img src="public/img/register2.jpg">
		</div>
		<div class="content">
			<div class="form-content">
				<h2>Đăng ký nào</h2>
				<form action="http://localhost:8088/public?url=users/register" method="POST">
					<div class="input-content">
						<span>Tên đăng nhập</span>
						<input type="text" name="username">
						<span><?php echo $data['usernameError']; ?></span>
					</div>
					<div class="input-content">
						<span>Email</span>
						<input type="email" name="email">
						<span><?php echo $data['emailError'] ?></span>
					</div>
					<div class="input-content">
						<span>Số điện thoại</span>
						<input type="tel" name="phone" pattern="[0-9]{10}" required="required" placeholder="0123456789">
					</div>
					<div class="input-content">
						<span>Mật khẩu</span>
						<input type="password" name="password">
						<span><?php echo $data['passwordError'] ?></span>
					</div>
					<div class="input-content">
						<span>Xác nhận mật khẩu</span>
						<input type="password" name="confirmPassword">
						<span><?php echo $data['confirmPasswordError'] ?></span>
					</div>
					<div class="input-content">
						<input type="submit" id="submit" value="Đăng ký" name="">
					</div>
				</form>
			</div>
		<div>

		
	</section>
</body>
</html>