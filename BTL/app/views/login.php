<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="public/css/header.css">
	<link rel="stylesheet" href="public/css/login.css">

	<!-- <link rel="stylesheet" type="text/css" href="public/css/styleLogin.css"> -->

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap');

		.dang_nhap a{
			color: tomato;
		}
	</style>
</head>
<body>
	<?php include "header.php" ?>
	<section>
		<div class="img-sec">
			<img src="https://media.cntraveler.com/photos/58a76bb1e85725558885abb3/16:9/w_2560%2Cc_limit/cherry-blossom-season.jpg">
		</div>
		<div class="content">
			<div class="form-content">
				<h2>Đăng nhập nào</h2>
				<form action="http://localhost:8088/public?url=users/login" method="POST">
					<div class="input-content">
						<span>Tên đăng nhập</span>
						<input type="text" name="username">
						<span><?php echo $data['usernameError']; ?></span>
					</div>
					<div class="input-content">
						<span>Mật khẩu</span>
						<input type="password" name="password">
						<span><?php echo $data['passwordError'] ?></span>
					</div>
					<div class="input-content">
						<input type="submit" id="submit" value="Đăng nhập" name="">
					</div>
					<div class="input-content">
						<p>
							Không có tài khoản ư, đăng ký thôi <a href="http://localhost:8088/public?url=users/register">Đăng ký</a>
						</p>
					</div>
				</form>
			</div>
		</div>
	</section>
</body>
</html>