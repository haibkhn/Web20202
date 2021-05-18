<?php 
$file = "Ex2.xml";

$xml = simplexml_load_file($file) or die ("Unable to load XML file!");
echo "Name: " . $xml->name; 
echo "<br/>";
echo "Age: " . $xml->age; 
echo "<br/>";
echo "Species: " . $xml->species; 
echo "<br/>";
echo "Parents: " . $xml->parents->mother . " and " . $xml->parents->father; ?>