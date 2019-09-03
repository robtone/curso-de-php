<?php
	if (!$_POST) {
		header('Location: http://localhost/curso_php/formularios/');	
	}
	$nombre=$_POST['nombre'];
	$sexo = $_POST['sexo'];
	$year =$_POST['year'];
	$terminos=$_POST['terminos'];
	echo 'Hola ' . $nombre . ' eres ' . $sexo;
?>