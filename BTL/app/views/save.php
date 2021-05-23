<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Nhà ưa thích</title>
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
		/* .da-luu a{
			color: tomato;
		}
		.form{
			border: solid;
			padding: 10px;
		}
		.item_house{
			border: dotted;
		} */
		body{
			background: none;
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

						echo "<a href=\"http://localhost:8088/public?url=saves/del/".$value['id']."\"><i class='fas fa-trash-alt'></i></a>";
					}
				?>
			</div>
		</div>
	</div>
	
</body>
</html>