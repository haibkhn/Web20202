<?php 
$file = "Ex3.xml"; 
$xml = simplexml_load_file($file) or die ("Unable to load XML file!"); 
echo "<b> Not using foreach: </b> <br>";
echo $xml->sin[0] ;
echo "<br/>"; 
echo $xml->sin[1] ;
echo "<br/>"; 
echo $xml->sin[2] ; 
echo "<br/>";
echo $xml->sin[3] ; 
echo "<br/>";
echo $xml->sin[4] ; 
echo "<br/>";
echo $xml->sin[5] ;
echo "<br/>"; 
echo $xml->sin[6] ;
echo "<br/>";
echo "<br/>";
echo "<br/>"; ?>

<?php 
$file = "Ex3.xml";
$xml = simplexml_load_file($file) or die ("Unable to load XML file!"); 
echo "<b> Using foreach:</b> <br>";
foreach ($xml->sin as $sin) { echo "$sin"; echo "<br/>"; } ?>

