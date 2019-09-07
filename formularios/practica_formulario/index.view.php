<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Fomulario Contacto</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			<input type="text" class="form-control " id="nombre" name="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre; ?>">
			
			<input type="text" class="form-control" id="correo" name="correo" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo $correo; ?>">
			
			<textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje" ><?php if(!$enviado && isset($mensaje)) echo $mensaje; ?></textarea>
			<?php if (!empty($errores)): ?>
				<div class="alert error" role="alert">
					<?php echo $errores; ?>
				</div>
			<?php elseif($enviado) : ?>
				<div class="alert success" role="alert">
					<?php echo 'Enviado Correctamente'; ?>
				</div>
			<?php endif; ?>
			<input type="submit" name="submit" class="btn btn-primary" value="Enviar correo">
		</form>
	</div>	
</body>
</html>