<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="import" href="home.php">
	<title>Document</title>
	<style>
		ul#ulheader li{
			display: inline;
			padding: 20px;
		}
		#divheader{
			text-align: right;
			margin-right: 2px;
		}
		.margin1{
			margin: 5px;
			display: inline-block;
		}
		.text1{
			width: 50px;
		}
		#filterform{
			border: solid;
			/*width: 15%;*/
			/*height: 500px;*/
			/*display: inline-block;*/
			margin-top: -10px;
		}
		.align1{
			text-align: center;
		}
		#listhouse{
			/*border: solid;*/
			display: inline-block;
			width: 84%;
		}
		.item_house{
			border: dotted;
		}
		img.main_img{
			width: auto;
			height: 100px;
			/*display: inline-block;*/
		}
		img.item_img{
			width: auto;
			height: 70px;
			/*display: inline-block;*/
		}
		.item_info{
			display: inline-block;
		}
		div.img{
			display: inline-block;
		}
		/*.image1{
			width: 
		}*/
		/*.display1{
			display: inline-block;
		}*/
	</style>
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
			<div >
				<div class="display1">
					<div id="list"></div>
					<div>
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
								
								echo "<div class=\"item_info\">";
								echo "dia chi: ".$value['addr']."<br>".
									"loai nha: ".$value['type']."<br>".
									"dien tich: ".$value['s']."<br>".
									"gia: ".$value['cost']."<br>".
									"thong tin them: ".$value['scribble'];
								echo "</div>";
								
								echo "<div class=\"img\">";
								echo "<img src=\"../public/img/".$img[0]."\" class=\"main_img\">";
								echo "</div>";
								unset($img[0]);

								foreach ($img as $key => $value2) {
									echo "<div class=\"img\">";
									echo "<img src=\"../public/img/".$value2."\" class=\" item_img\">";
									echo "</div>";
								}
								if(isset($_SESSION['username']))
								echo "<a href=\"http://localhost:8088/public?url=saves/save/".$value['id']."\">luu</a>";
								
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
	
</div>
</body>
<script type="text/javascript">
		var getCookieValue = (name) => (
  			document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)')?.pop() || '')
		document.getElementById("saveReport").innerHTML = getCookieValue('saveReport');
	</script>
</html>	