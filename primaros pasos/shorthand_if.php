<?php
	//$edad = (isset($edad)) ? ; :
	//isset espara saver si tiene un valor o no 
	//$edad =18;
	//echo isset($edad):
$edad = (isset($edad)) ? $edad :'El usuario no establacio su edad';
	echo 'Edad: '. $edad;
?>