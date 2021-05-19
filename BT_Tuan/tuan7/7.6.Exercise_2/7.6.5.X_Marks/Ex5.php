<?php 
$file = "Ex5.xml"; 
$xml = simplexml_load_file($file) or die ("Unable to load XML file!");

echo "<b> Full ingredients: </b><br>";
foreach ($xml->xpath('//desc') as $desc) { echo "$desc"; echo "<br/>"; }
echo "<br/>"; ?>

<?php 
$file = "Ex5.xml"; 
$xml = simplexml_load_file($file) or die ("Unable to load XML file!"); 
echo "<b> Quantity >= 2: </b> <br>";
foreach ($xml->xpath('//item[quantity > 1]/desc') as $desc) { echo "$desc"; echo "<br/>"; } ?>