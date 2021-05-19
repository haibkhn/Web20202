<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="header.css">

	<style>
		.form{
			border: solid;
			padding: 10px;
		}
		.dang_tin a{
			color: tomato;
		}
	</style>
</head>
<body>
	<?php include "header.php" ?>
	<h1 style="display: inline-block; border: solid;">DANG TIN</h1>
	<div style="display: inline-block;background: green">
		<?php if(isset($suc)) echo "<p>".$suc."</p>";?>
	</div>
	<div>
		<form action="http://hailocalhost/Web/CNWeb20201/Web20202/BTL/public?url=houses/addHouse" method="POST" class="form" enctype="multipart/form-data">
			<div class="">
				<p>quan</p>
				<select name="site" id="site">
					<option value="hai ba trung">hai ba trung</option>
					<option value="hoan kiem">hoan kiem</option>
					<option value="dong da">dong da</option>
					<option value="hoang mai">hoangmai</option>
					<option value="thanh xuan">thanh xuan</option>
				</select>
			</div>
			<div>
				<p>dia chi cu the</p>
				<input type="text" name="addr" required="required">
			</div>
			<div class="">
				<p>gia</p>
				<input type="tel" name="cost" pattern="[0-9]{6,9}" required="required">
			</div>
			<div class="">
				<p>dien tich</p>
				<input type="tel" name="s" pattern="[0-9]{1,4}" required="required">

			</div>
			<div class="">
				<p>mieu ta nha</p>
				<input type="text" name="scribble" style="width: 99%">
			</div>
			<div class="margin1">
				<p><label for="type">loai nha</label></p>
				<select name="type" id="type">
					<option value="chung cu mini">chung cu mini</option>
					<option value="phong tro">phong tro</option>
					<option value="nha nguyen can">nha nguyen can</option>
				</select>
			</div>
			<div class="">
				<p>anh chinh</p>
				<input type="file" name="main_img" required="required">
			</div>
			<div class="">
				<p>anh them</p>
				<input type="file" name="extra_img[]" multiple>
			</div>
			<br>
			<!-- <button type="submit" name="submit">submit</button> -->
			<input type="submit" value="submit1" name="submit">
		</form>
	</div>
	
</body>
</html>