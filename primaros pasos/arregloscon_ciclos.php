<?php
	$meses = array(
		'enero','febrero','marzo','abril',
		'mayo','junio','junio','agosto',
		'septiembre','octubre','novriembre','diciembre'
	);
	for ($i=0; $i <count($meses) ; $i++) { 
		echo $meses[$i].'<br/>';
	}
	$contador =0;
	while ($contador < count($meses)) {
		echo $meses [$contador].'<br/>';	
		$contador++;
	}

?>