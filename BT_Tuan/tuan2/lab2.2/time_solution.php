<!DOCTYPE html>
<html>
<head>
	<title></title>
<style >
.body{
	margin: 0px auto;
	font-size: 40px;
	width: 850px;
	height: 200px;
	color: red;
	margin-top: 150px;
}
</style>
</head>
<body>
	<div class="body">
		<?php
$name=$_GET["name"];
echo "Hi $name !";
echo "<br>";
$hour=$_GET["hour"];
$min=$_GET["min"];
$sec=$_GET["sec"];
$day=$_GET["day"];
$month=$_GET["month"];
$year=$_GET["year"];
echo "You have choose to have an appointment on $hour:$min:$sec , $day/$month/$year";
echo "<br>";
echo "More information";
echo "<br>";
if($hour>=12){
	$i=$hour-"12";
	echo "In 12 hours, the time and date is $i:$min:$sec PM, $day/$month/$year";
}else
{
	echo "In 12 hours, the time and date is $hour:$min:$sec AM, $day/$month/$year";
}
echo "<br>";
if($month=="1"||$month=="3"||$month=="5"||$month=="7"||$month=="8"||$month=="10"||$month=="12"){
	echo "This month has 31 days!";
}
if($month=="4"||$month=="6"||$month=="9"||$month=="11"){
	echo "This month has 30 days!";
}
if($month=="2"){
	if($year%"400"==0){echo "This month has 29 days";}
	elseif (($year%"4"=="0")&&$year%"100" ) {echo "This month has 29 day";}
	else{echo "This month has 28 days";}
}
?>

	</div>
</body>
</html>

