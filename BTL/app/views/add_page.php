<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Thêm nhà</title>
	<link rel="stylesheet" href="public/css/header.css">
	<link rel="stylesheet" href="public/css/add_page.css">

	<style>
		/* .form{
			border: solid;
			padding: 10px;
		} */
		.dang_tin a{
			color: tomato;
		}
	</style>
</head>
<body>
	<?php include "header.php" ?>
	<!-- <h1 style="display: inline-block; border: solid;">DANG TIN</h1> -->
	<div style="display: inline-block;background: lightgreen" id="AHreport"> </div>

	<div class="wrapper">
		<form action="http://localhost:8088/public?url=houses/addHouse" method="POST" class="form" enctype="multipart/form-data">
			<div class="title">
				Đăng tin nhà đất
			</div>
			<div class="form">
				<div class="inputfield">
					<label>Quận</label>
					<div class="custom_select">
						<select name="site" id="site">
							<option value="hai ba trung">Hai Bà Trưng</option>
							<option value="hoan kiem">Hoàn Kiếm</option>
							<option value="dong da">Đống Đa</option>
							<option value="hoang mai">Hoàng Mai</option>
							<option value="thanh xuan">Thanh Xuân</option>
						</select>
					</div>
				</div>
			
				<div class="inputfield">
					<label>Địa chỉ cụ thể</label>
					<input type="text" name="addr" required="required" class="input">
				</div>

				<div class="inputfield">
					<label>Giá cả</label>
					<input type="tel" name="cost" pattern="[0-9]{6,9}" required="required" class="input">
				</div>

				<div class="inputfield">
					<label>Diện tích</label>
					<input type="tel" name="s" pattern="[0-9]{1,4}" required="required" class="input">
				</div>

				<div class="inputfield">
					<label>Loại nhà</label>
					<div class="custom_select">
						<select name="type" id="type">
							<option value="chung cu mini">Chung cư mini</option>
							<option value="phong tro">Phòng trọ</option>
							<option value="nha nguyen can">Nhà nguyên căn</option>
						</select>
					</div>
				</div>

				<div class="inputfield">
					<label>Số điện thoại liên hệ</label>
					<input type="text" class="input">
				</div> 

				<div class="inputfield">
					<label>Miêu tả nhà</label>
					<textarea class="textarea" name="scribble"></textarea>
				</div> 

				<div class="inputfield">
					<label>Ảnh mô tả chính</label>
					<input type="file" name="main_img" required="required">
				</div>

				<div class="inputfield">
					<label>Ảnh mô tả thêm</label>
					<input style="margin:0;" type="file" name="extra_img[]" multiple>
				</div>

				<div class="inputfield terms">
					<label class="check">
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
					<p>Xác nhận đăng bài</p>
				</div> 
				<!-- <br> -->
				<div class="inputfield">
					<input type="submit" value="Đăng bài" class="btn" name="submit">
				</div>
				<!-- <input type="submit" value="submit1" name="submit"> -->
			</div>
		</form>
	</div>
	
</body>
<script type="text/javascript">
	var getCookieValue = (name) => (
		document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)')?.pop() || '')
	document.getElementById("AHreport").innerHTML = getCookieValue('AHreport');
</script>
</html>