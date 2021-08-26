<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nhà của mình</title>
	<link rel="stylesheet" href="public/css/header.css">
	<link rel="stylesheet" href="public/css/add_page.css">
	<link rel="stylesheet" href="public/css/filterPage.css">

	<script src="https://kit.fontawesome.com/c9b833d924.js" crossorigin="anonymous"></script>

	<style>
		/* ul#ulheader li{
			display: inline;
			padding: 20px;
		}
		#divheader{
			text-align: right;
			margin-right: 2px;
		} */
		body{
			background: none;
		}
		.phong-cua-ban a{
			color: tomato;
		}
		.form{
			/* border: solid #fec107; */
			padding: 10px;
		}
		/* .item_house{
			border: dotted;
		} */
		.modal-bg{
			position: fixed;
			width: 100%;
			height: 100vh;
			/* max-height: calc(100vh - 210px); */
    		/* overflow-y: auto; */
			top: 0;
			left: 0;
			/* background-color: rgba(0,0,0,0.5); */
			display: flex;
			justify-content: center;
			align-items: center;
			visibility: hidden ;
			opacity: 0;
			transition: visibility 0s opacity 0,5s;
		}
		.bg-active{
			visibility: visible;
			opacity: 1;
		}
		.wrapper{
			background: none;
		}
		.wrapper form{
			/* border: 3px solid salmon; */
			background-color: white;
			padding: 10px;
			margin-bottom: 20px;
		}
		.modal{
			position: absolute;
			/* background-color: white; */
			width: 60%;
			height: 80%;
			display: flex;
			background: url("public/img/lado.jpg");
			max-height: 100%;
			overflow-y: auto;
		}
		.modal_btn{
			position: absolute;
			text-decoration: none;
			font-size: 20px;
			color: rgb(91, 91, 235);
			bottom: 55px;
			right: 50px;
			background: white;
			border: none;
			cursor: pointer;
		}
		.modal-close{
			position: absolute;
			top: 10px;
			right: 10px;
			font-weight: bold;
			cursor: pointer;
		}
		@media screen and (max-width: 786px){
			.modal{
				width: 100%;
			}
		}

		</style>
</head>
<body>
	<?php include "header.php" ?>
	<div id="listhouse">
		<div class="display1">
			<div class="list">
				<?php
					foreach ($data as $key => $value) {
						$img = $value['img'];
						$img = rtrim($img,';');
						$img  = explode(";",$img);

						echo "<div class=\"item_house\">";
						// div class img truoc tien
						echo "<img src=\"../public/img/".$img[0]."\">";

						// echo "<div class=\"img\">";
						// echo "<img src=\"../public/img/".$img[0]."\" class=\"main_img\">";
						// echo "</div>";
						unset($img[0]);

						switch ($value['type']) {
							case "chung cu mini":
								$value_house = "Chung cư mini";
								break;
							case "phong tro":
								$value_house = "Phòng trọ";
								break;
							case "nha nguyen can":
								$value_house = "Nhà nguyên căn";
								break;
						}

						switch ($value['site']) {
							case "hoang mai":
								$quan = "Hoàng Mai";
								break;
							case "hai ba trung":
								$quan = "Hai Bà Trưng";
								break;
							case "hoan kiem":
								$quan = "Hoàn Kiếm";
								break;
							case "dong da":
								$quan = "Đống Đa";
								break;
							case "thanh xuan":
								$quan = "Thanh Xuân";
								break;
						}

						echo "<div class=\"item_info\">";
							echo "<span class='gia-dtich'>" .$value['cost']." ₫	- " .$value['s']. " <span>&#13217;</span>  </span>";
							echo "<p style='color:rgb(50, 129, 168)'> Quận: ". $quan. "</p>".
								"<span class='breaker'></span>";
							echo "<p> Địa chỉ: ".$value['addr']."<br>".
									"Loại nhà: ".$value_house."<br>".
									"Thông tin thêm: ".$value['scribble'] . "</p>";
						echo "</div>";

						echo "<a href=\"http://localhost:8088/public/?url=houses/del/".$value['id']."\"><i class='fas fa-trash-alt'></i></a>";
						echo "<button class=\"modal_btn\" onclick=\"addBg(".$value['id'].")\"><i class='fas fa-edit'></i></button>";
                        echo "<a href=\"http://localhost:8088/public/?url=houses/detail/".$value['id']."\">xem chi tiet</a>";
						echo "</div>";
					}
				?>
			</div>
		</div>
	</div>

	<div class="modal-bg">
		<div class="modal">
			<div class="wrapper">
				<form action="http://localhost:8088/public/?url=houses/addHouse" method="POST" class="form" enctype="multipart/form-data">
					<div class="title">
						Sửa tin nhà đất
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
							<label>Đường</label>
							<input type="text" name="street" required="required" class="input">
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
							<label>Số phòng tắm</label>
							<input type="tel" name="bathroom" pattern="[0-9]{1,4}" required="required" class="input">
						</div>

						<div class="inputfield">
							<label>Số phòng ngủ</label>
							<input type="tel" name="bedroom" pattern="[0-9]{1,4}" required="required" class="input">
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
							<p>Xác nhận sửa bài</p>
						</div> 
						<!-- <br> -->
						<div class="inputfield">
							<input type="submit" value="Sửa bài" class="btn" name="submit">
						</div>
						<!-- <input type="submit" value="submit1" name="submit"> -->
					</div>
				</form>
			</div>
			<span class="modal-close" style="color:white; font-size:35px"><i class="fas fa-times" style="text-shadow: 0 0 10px #fec107;"></i></span>
		</div>
	</div>
	
	<script type="text/javascript">
		var modalBg = document.querySelector('.modal-bg');
		
		function addBg(id){
			modalBg.classList.add('bg-active');
			document.getElementsByTagName("form")[0].setAttribute("action", "http://localhost:8088/public/?url=houses/change/"+id);
		}

		var modalClose = document.querySelector('.modal-close')
		modalClose.addEventListener('click', function(){
			modalBg.classList.remove('bg-active');
		});
		window.onclick = function(event) {
			if (event.target == modalBg) {
				modalBg.classList.remove('bg-active');
			}
		}
	</script>
</body>
</html>