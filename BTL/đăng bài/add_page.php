<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="1.css">	

<body>
	<h1>Đăng tin nhà đất</h1>
	<div style="display: inline-block;background: green">
		<?php if(isset($suc)) echo "<p>".$suc."</p>";?>
	</div>
	<div>
		<form action="" method="POST" class="form" enctype="multipart/form-data">
			<div class="">
				<h2>Quận</h2>
				<select name="site" id="site">
					<option value="hai ba trung">Hai Bà Trưng</option>
					<option value="hoan kiem">Hoàn Kiếm</option>
					<option value="dong da">Đống Đa</option>
					<option value="hoang mai">Hoàng Mai</option>
					<option value="thanh xuan">Thanh Xuân</option>
				</select>
			</div>
			<div>
				<h2>Địa chỉ cụ thể</h2>
				<input type="text" name="addr" required="required">
			</div>
			<div class="">
				<h2>Giá cả</h2>
				<input type="tel" name="cost" pattern="[0-9]{6,9}" required="required">
			</div>
			<div class="">
				<h2>Diện tích</h2>
				<input type="tel" name="s" pattern="[0-9]{1,4}" required="required">

			</div>
			<div class="">
				<h2>Miêu tả nhà</h2>
				<textarea name="scribble" cols="75%" rows="20%"></textarea>
			</div>
			<div class="margin1">
				<h2><label for="type">Loại nhà</label></h2>
				<select name="type" id="type">
					<option value="chung cu mini">Chung cư mini</option>
					<option value="phong tro">Phòng trọ</option>
					<option value="nha nguyen can">Nhà nguyên căn</option>
				</select>
			</div>
			<div class="">
				<h2>Ảnh chính</h2>
				<input type="file" name="main_img" required="required">
			</div>
			<div class="">
				<h2>Ảnh thêm</h2>
				<input type="file" name="extra_img[]" multiple>
			</div>
			<br>
			<!-- <button type="submit" name="submit">submit</button> -->
			<input type="submit" value="Đăng bài" name="submit">
		</form>
	</div>	
</body>
