<?php 
	$errores = '';
	if (isset($_POST['submit'])) {
		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
	}
	if (!empty($nombre)) {
		//$nombre= trim($nombre);
		//$nombre=htmlspecialchars($nombre);
		//$nombre=stripcslashes($nombre);
		filter_var($nombre, FILTER_SANITIZE_STRING);
		echo "tu nombre es :  $nombre  <br>";
	}else  {
		$errores .='por favor agrega un nombre <br>';
	}
	if (!empty($correo)) {
		//$nombre= trim($correo);
		//$nombre=htmlspecialchars($correo);
		//$nombre=stripcslashes($correo);
		$correo= filter_var($correo, FILTER_SANITIZE_EMAIL);
		if (!filter_var($correo, FILTER_SANITIZE_EMAIL)) {
			$errores .='por favor agrega un correo <br>';	
		}
		echo "tu correo es :  $correo  <br>";
	}else  {
		$errores .='por favor agrega un correo <br>';
	}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>validacio</title>
	<style >
		.error {color: red;}
	</style>
</head>
<body>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		<input type=text" name="nombre" placeholder="Nombre">
		<br>
		<input type="email" name="correo" placeholder="Correo">
		<?php if (!empty($errores)): ?>
			<div class="error"><?php echo $errores; ?> </div>
		<?php endif; ?>	

		<input type="submit" name="submit">
	</form>
</body>
</html>