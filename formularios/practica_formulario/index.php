<?php 
	$errores='';
	$enviado='';
	if (isset($_POST ['submit'])) {
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$mensaje=$_POST['mensaje'];
		if (!empty($nombre)) {
		// Saneamos el nombre para eliminar caracteres que no deberian estar.
		$nombre = trim($nombre);
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
		// Comprobamos que el nombre despues de quitar los caracteres ilegales no este vacio.
		if ($nombre == "") {
			$errores.= 'Por favor ingresa un nombre.<br />';
		}
	} else {
		$errores.= 'Por favor ingresa un nombre.<br />';
		}
		if (!empty($correo)) {
		$correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
		// Comprobamos que sea un correo valido
		if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
			$errores.= "Por favor ingresa un correo valido.<br />";
		}
	} else {
		$errores.= 'Por favor ingresa un correo.<br />';
	}
	if(!empty($mensaje)){
		$mensaje=htmlspecialchars($mensaje);
		$mensaje=trim($mensaje);
		$mensaje=stripcslashes($mensaje);
	}else{
		$errores .='por favor rngresa el mensaje <br>';
	}
	if(!$errores){
		$enviar_a='robts_94@outlook.com';
		$asunto='oputunidad de todo';
		$mensaje_prepardo= "De: $nombre \n";
		$mensaje_prepardo .="correo: $correo \n";
		$mensaje_prepardo .="mensaje:". $mensaje; 

		//mail($enviar_a, $asunto, $mensaje_prepardo);
		$enviado ='true';
	}
}
	require 'index.view.php';
 ?>
