<?php 	
	$la = $_POST["l1"];
	$lb = $_POST["l2"];
	$lc = $_POST["l3"];
	$fn = "../lines.txt";
	$file = fopen($fn, "w");
	$line = "{$la}*&*#{$lb}*&*#{$lc}";
	fwrite($file,$line);
	fclose($file);
	header("Location: http://qml.com");
	die();		
?>
