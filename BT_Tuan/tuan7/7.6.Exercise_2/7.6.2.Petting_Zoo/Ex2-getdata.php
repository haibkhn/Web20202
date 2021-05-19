<?php 
$file = "Ex2.xml";

$xml = simplexml_load_file($file) or die ("Unable to load XML file!");

echo '<b> Before: </b><br>';

echo "Name: " . $xml->name; 
echo "<br/>";
echo "Age: " . $xml->age; 
echo "<br/>";
echo "Species: " . $xml->species; 
echo "<br/>";
echo "Parents: " . $xml->parents->mother . " and " . $xml->parents->father; ?>

<?php 
$file = "Ex2.xml";
$xml = simplexml_load_file($file) or die ("Unable to load XML file!"); 
$xml->name = "Sammy Snail"; 
$xml->age = 4; 
$xml->species = "snail"; 
$xml->parents->mother = "Sue Snail"; 
$xml->parents->father = "Sid Snail"; 

echo '<br> <br><b> After:</b> <br>';

echo "Name: " . $xml->name; 
echo "<br/>";
echo "Age: " . $xml->age; 
echo "<br/>";
echo "Species: " . $xml->species; 
echo "<br/>";
echo "Parents: " . $xml->parents->mother . " and " . $xml->parents->father; ?>
