<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="import" href="home.php">
	<link rel="stylesheet" href="public/css/header.css">
	<link rel="stylesheet" href="public/css/filter.css">
	<link rel="stylesheet" href="public/css/filterPage.css">
	<script src="https://kit.fontawesome.com/c9b833d924.js" crossorigin="anonymous"></script>

	<title>Document</title>
	<style></style>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
	<script type="text/javascript">
		var getCookieValue = (name) => (
  			document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)')?.pop() || '');
		// $(document).ready(function(){
		// 	if(getCookieValue('none_user') != '') 	alert(getCookieValue('none_user')); 
		// });
		document.addEventListener("DOMContentLoaded", function(event) { 
  			if(getCookieValue('none_user') != '') 	alert(getCookieValue('none_user')); 
		});
	</script>
</head>
<body>
	<?php include "header.php" ?>
	<div>
		<?php include "filter.php" ?>
		<div id="saveReport" style="background-color: lightgreen;"></div>
		<div id="listhouse">
			<div class="display1">
				<div class="list">
					<?php
						foreach ($data as $key => $value) {
							// echo "<pre>";
							// print_r($value);
							// echo "</pre>";
							$img = $value['img'];
							$img = rtrim($img,';');
							$img  = explode(";",$img);
							// echo "<pre>";
							// print_r($img);
							// echo "</pre>";

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

							// foreach ($img as $key => $value2) {
							// 	echo "<div class=\"img\">";
							// 	echo "<img src=\"../public/img/".$value2."\" class=\" item_img\">";
							// 	echo "</div>";
							// }
							if(isset($_SESSION['username']))
							echo "<a href=\"http://localhost:8088/public?url=saves/save/".$value['id']."\"><i class='far fa-heart'></i></a>";
							echo "</div><br>";

							// echo $value['img'];
							// echo "<div>";
							// echo ""
						}
						// print_r(json_decode($data));
					?>
				</div>
			</div>
		</div>
	</div>
	
</div>
</body>
<script type="text/javascript">
		var getCookieValue = (name) => (
  			document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)')?.pop() || '')
		document.getElementById("saveReport").innerHTML = getCookieValue('saveReport');
	</script>
</html>	