<?php
    session_start();
    if($_SESSION){
        $nombre=$_SESSION['nombre'];
        echo "<h1>Hola, $nombre</h1>" ;
    }else {
        echo "No has iniciado sesion <br>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     
    <a href=cerrar.php>Cerrar sesion</a>
</body>
</html>