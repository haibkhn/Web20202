<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="/Web/CNWeb20201/rent_house/public/header.css" media="all" type="text/css"/> -->
	<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="trsr.css">
	<script src="https://kit.fontawesome.com/c9b833d924.js" crossorigin="anonymous"></script>

	<!-- <link rel="stylesheet" href="public/css/all.css"> -->

	<link rel="import" href="home.php">
	<!-- <link rel="preconnect" href="https://fonts.gstatic.com"> -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<title>Document</title>
	<style>
		.logo a{
			color: tomato;
		}
		.margin1{
			margin: 5px;
		}
		.text1{
			width: 50px;
		}
		#filterform{
			border: solid;
			width: 100%;
			height: 500px;
			display: inline-block;
		}
		.align1{
			text-align: center;
		}
		#listhouse{
 
			border: solid;
			display: inline-block;
			width: 1500px;
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
  			document.cookie.match('(^|;)\\s*' + name + '\\s*=\\s*([^;]+)')?.pop() || ''
		)
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
	<?php include "filter.html" ?>
	<!-- <div id="listhouse">
		<div >
			<div class="display1">
				<img src="<?php echo "#"?>" class="image1">
				<div id="list"></div>
				<div>
					<?php
						foreach (json_decode($data) as $key => $value) {
							print_r($value);
							echo "<br/>";
						}
						//print_r(json_decode($data));
					 ?>
				</div>
			</div>
		</div>
	</div> -->
</div>
</body>
</html>	