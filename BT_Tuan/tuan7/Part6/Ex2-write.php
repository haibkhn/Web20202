<?php 
$file = "Ex2.xml";
$xml = simplexml_load_file($file) or die ("Unable to load XML file!"); 
$xml->name = "Sammy Snail"; 
$xml->age = 4; 
$xml->species = "snail"; 
$xml->parents->mother = "Sue Snail"; 
$xml->parents->father = "Sid Snail"; ?>