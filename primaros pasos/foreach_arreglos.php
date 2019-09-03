<?php
	$meses = array(
		'enero','febrero','marzo','abril',
		'mayo','junio','junio','agosto',
		'septiembre','octubre','novriembre','diciembre'
	);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>Meses del Año</h1>
	<ul>
		<?php
		//el foreach es el que te recorre el arreglo y es especifico para los arreglos
		foreach ($meses as $mes) {
			echo '<li>'. $mes .'</li>';
		}
		?>
	</ul>
</body>
</html>