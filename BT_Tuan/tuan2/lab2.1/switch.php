<!DOCTYPE html>
<html>
<head>
	<title>Kết quả</title>
	<style >
		.header{
			margin: 0px auto;
			font-size: 50px;
			margin-top: 100px;
		}
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

</head>
<body>
	<div class="header" align="center">Thông báo</div>
		<div class="body">
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
		echo "$first is shorter than $last";
	}
	if ($first>$last) {
		echo "$first is longer than $last";
	}
	echo "<br>";
	$score1=$_GET["score1"];$score2=$_GET["score2"];
	$final=(2*$score1+3*$score2)/5;
$rate;
if($final>89){
		echo "your final is $final. You got an A. ";
		$rate="A";
	}
	elseif ($final>79) {
		echo "your final is $final. You got an B. ";
		$rate="B";
	}elseif ($final>69) {
		echo "your final is $final. You got an C. ";
		$rate="C";
	}elseif ($final>59) {
		echo "your final is $final. You got an D. ";
		$rate="D";
	}elseif ($final>=0) {
		echo "your final is $final. You got an F. ";
		$rate="F";
	}
	echo "<br>";
	switch ($rate) {
		case "A" : echo "Excellent"; break; 
		case "B" : echo "Good"; break; 
		case "C" : echo "Normal"; break; 
		case "D" : echo "Not bad"; break; 
		case "F" : echo "Chuc ban may man lan sau!"; break; 
		default : echo "Illegl grade!";
	}
?>
		</div>
</body>
</html>
