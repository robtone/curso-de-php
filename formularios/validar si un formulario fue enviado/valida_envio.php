<?php 
	//con esta forma se conprueva si fue enviado correctamente  
	//if ($_SERVER['REQUEST_METHOD'] == 'GET') {
	//	echo "Se envian por el metodo get";
	//}
	//else{
	//	echo "Se envian por el metodo post";
	//}
	//la otra forma de comprovar es por el submit
	if (isset($_POST['submit'])) {
		echo "Se han envian correctamente";
		print_r($_POST['submit']);
	}
 ?>