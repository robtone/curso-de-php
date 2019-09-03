<?php
	$meses = array(
		'enero','febrero','marzo','abril',
		'mayo','junio','junio','agosto',
		'septiembre','octubre','novriembre','diciembre'
	);
	$rob = array ('telefono'=>'53197986','edad'=>25,'apellido'=>'alcantara','pais'=>'mexicano');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Meses</h1>
	<ul>
		<?php
			//foreach ($meses as $mes) {
			//	echo '<li>'. $mes .'</li>';
			//}
			foreach ($rob as $dato => $valor) {
				echo '<li>'.$dato.' : '.$valor .'</li>';
			}

		?>
	</ul>
</body>
</html>
