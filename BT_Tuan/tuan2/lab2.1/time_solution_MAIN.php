<!DOCTYPE html>
<html>
<head>
<style>
.header{
	margin: 0px auto;
	font-size: 40px;
	width: 800px;
	height: 200px;
	line-height: 200px;
}
</style>
</head>
<body>
<div align="center" class="header">Enter your name and select date and time</div>
<div align="center" class="body">
	
	<form method="get" action="time_solution.php">
	<label>Enter you name</label><br><br>
	<input type="text" name="name"><br><br>
	<label>DATE</label><br>
	<label>Day / Month / Year</label>
	<br>
	<select name="day">
		<?php
			for ($i=1; $i <= 31 ; $i++) { 
					echo "<option>$i</option>";
					}
				?>
	</select>
	<select name="month">
		<?php
			for ($i=1; $i <=12 ; $i++) { 
					echo "<option>$i</option>";
					}
				?>
	</select>
	<select name="year">
		<?php
			for ($i=1000; $i <=3000 ; $i++) { 
					echo "<option>$i</option>";
					}
				?>
	</select><br><br>
	<label>TIME</label><br>
	<label>Hour / Minute / Second</label><br>
	<select name="hour">
		<?php
			for ($i=0; $i <=24 ; $i++) { 
					echo "<option>$i</option>";
					}
				?>
	</select>
	<select name="min">
		<?php
			for ($i=0; $i <=59 ; $i++) { 
					echo "<option>$i</option>";
					}
				?>
	</select>
	<select name="sec">
		<?php
			for ($i=0; $i <=59 ; $i++) { 
					echo "<option>$i</option>";
					}
				?>
	</select><br><br>
	<input type="submit" value="Submit">
	<input type="reset" value="Reset">
</form>
</div>

</body>
</html>