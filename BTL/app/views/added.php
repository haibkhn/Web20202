<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
		.form{
			border: solid;
			padding: 10px;
		}
		.item_house{
			border: dotted;
		}
		.modal-bg{
			position: fixed;
			width: 100%;
			height: 100vh;
			top: 0;
			left: 0;
			background-color: rgba(0,0,0,0.5);
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
		.modal{
			position: relative;
			background-color: white;
			width: 80%;
			height: 80%;
			display: flex;
		}
		.modal-close{
			position: absolute;
			top: 10px;
			right: 10px;
			font-weight: bold;
			cursor: pointer;
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
					echo "<a href=\"http://localhost:8088/public?url=houses/del/".$value['id']."\">xoa</a>";
					echo "<button class=\"modal_btn\" onclick=\"addBg(".$value['id'].")\">sua</button>";
				}
			 ?>
	</div>
	<div class="modal-bg">
		<div class="modal">
			<form action="http://localhost:8088/public?url=houses/change" method="post">
				<div class="">
				<p>quan<p/>
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
			<span class="modal-close">X</span>
		</div>
	</div>
	<script type="text/javascript">
		var modalBg = document.querySelector('.modal-bg');
		
		function addBg(id){
			modalBg.classList.add('bg-active');
			document.getElementsByTagName("form")[0].setAttribute("action", "http://localhost:8088/public?url=houses/change/"+id);
		}

		var modalClose = document.querySelector('.modal-close')
		modalClose.addEventListener('click', function(){
			modalBg.classList.remove('bg-active');
		});

	</script>
</body>
</html>