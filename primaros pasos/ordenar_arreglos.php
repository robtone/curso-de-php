<?php
	$meses = array(
		'enero','febrero','marzo','abril',
		'mayo','junio','junio','agosto',
		'septiembre','octubre','novriembre','diciembre'
	);
	//ordena de manera ascendente de manera alfevetica y numarica
	//sort($meses);
	//ordenar de manera descendente
	//rsort($meses)
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
		foreach ($meses as $mes) {
			echo '<li>'. $mes .'</li>';
		}
		?>
	</ul>
</body>
</html>