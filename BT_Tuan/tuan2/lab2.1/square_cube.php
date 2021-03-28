<!DOCTYPE html>
<html>
<head>
	<title>BÌNH PHƯƠNG LẬP PHƯƠNG</title>
	<style>
		.header{
	margin: 0px auto;
	font-size: 40px;
	width: 800px;
	height: 100px;
	line-height: 200px;
	margin-top: 0px;
}
			
		.body{
	margin: 0px auto;
	width: 800px;
	height: 200px;
	margin-top: 50px;
	font-weight: 200;
	line-height: 20px;
}
	</style>
</head>
<body>
	<div class="header" align="center">Tính bình phương và lập phương</div>
	<div class="body" align="center">
		<form method="get">
		<table>
			<tr>
				<td>Start Number</td>
				<td><select name="start">
					<?php
						for ($i=0; $i <=10 ; $i++) { 
							echo "<option>$i</option>";
						}
					?>
				</select>
				</td>
			</tr>
			<tr>
				<td>Start Number</td>
				<td><select name="end">
					<?php
						for ($i=0; $i <=20 ; $i++) { 
							echo "<option>$i</option>";
						}
					?>
				</select>
				</td>
			</tr>
			<tr>
				<td align="right"><input type="submit" value="Submit"></td>
				<td align="left"><input type="reset" value="Reset"></td>
			</tr>
		</table>
		<table>
			<tr>
				<th>Number</th>
				<th>Square</th>
				<th>Cube</th>
			</tr>
			<?php
				if(array_key_exists("start", $_GET)){
					$start=$_GET["start"];
					$end=$_GET["end"];
					$i=$start;
					while ($i<=$end) {
						$sqr=$i*$i;
						$cubed=$i*$i*$i;
						echo "<tr>
								<td>$i</td>
								<td>$sqr</td>
								<td>$cubed</td>
								</tr>";
						$i=$i+1;		
					}
				}
				?>
		</table>
	</form>
	</div>
</body>
</html>
