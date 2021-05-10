<!DOCTYPE html>
<html>
<head>
	<style >
.body{
	margin: 0px auto;
	font-size: 40px;
	width: 850px;
	height: 200px;
	color: red;
	margin-top: 150px;
	margin-right: 100px;
}
</style>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="body" >
		<?php
	$first= $_GET["firstName"];
	$middle=$_GET["middleName"];
	$last=$_GET["lastName"];
	echo "$first $middle $last";
	echo "<br>";
	if ($first==$last) {
		echo "$first equal $last";
	}
	if ($first<$last) {
		echo "$first shorter than $last";
	}
	if ($first>$last) {
		# code...
		echo "$first longer than $last";
	}
	echo "<br>";
	$score1=$_GET["score1"];$score2=$_GET["score2"];
	$final=(2*$score1+3*$score2)/5;
	if($final>89){
		echo "your final is $final. You got an A";
	}
	elseif ($final>79) {
		echo "your final is $final. You got an B";
	}elseif ($final>69) {
		echo "your final is $final. You got an C";
	}elseif ($final>59) {
		echo "your final is $final. You got an D";
	}elseif ($final>=0) {
		echo "your final is $final. You got an F";
	}

	?>
	</div>
</body>
</html>
