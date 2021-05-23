<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Document</title>
	<link rel="stylesheet" href="public/css/header.css">

	<style>
		/* ul#ulheader li{
			display: inline;
			padding: 20px;
		}
		#divheader{
			text-align: right;
			margin-right: 2px;
		} */
		.da-luu a{
			color: tomato;
		}
		.form{
			border: solid;
			padding: 10px;
		}
		.item_house{
			border: dotted;
		}
	</style>
</head>
<body>
	<?php include "header.php" ?>
	<div class="list">
			<?php 
				foreach ($data as $key => $value) {
					echo "<div class=\"item_house\">";
					// echo "<div class=\"item_info\">";
					echo "dia chi: ".$value['addr']."<br>".
						"loai nha: ".$value['type']."<br>".
						"dien tich: ".$value['s']."<br>".
						"gia: ".$value['cost']."<br>".
						"thong tin them: ".$value['scribble'];
					echo "</div><br>";
					echo "<a href=\"http://localhost:8088/public?url=saves/del/".$value['id']."\">xoa</a>";
				}
			 ?>
	</div>
	
</body>
</html>