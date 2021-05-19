<?php
$file = "Ex6.xml";
$xml = simplexml_load_file($file) or die ("Unable to load XML file!");
?>
<html> 
<head><basefont face="Arial"></head>

<body>
<h1><?php echo $xml->title; ?> (<?php echo $xml->year; ?>)</h1>
<h3><?php echo $xml->teaser; ?></h3>
<?php echo $xml->body; ?>
<p align="right"/>
<font size="-2">
Director: <b><?php echo $xml->director; ?></b>
<br />
Duration: <b><?php echo $xml->duration; ?> min</b> 
<br />
Cast: <b><?php foreach ($xml->cast->person as $person) { echo "$person "; } ?></b> 
<br />
Rating: <b><?php echo $xml->rating; ?></b> 
</font>

</body> 
</html>