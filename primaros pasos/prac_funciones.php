<?php
	function areatriangulo($base,$altura){
		return ($base*$altura)/2;
	}
	$area = areatriangulo(10,10);
	echo 'El triangulo tiene una area de '.$area.' metros cuadrados';
?>