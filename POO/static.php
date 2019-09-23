<?php
    class Persona {
        public static $dia ='el dia de hoy';
        public static function saludo($nombre =null){
            return 'hola, buen dia ' . $nombre;
        }
    }
    //$rob = new Persona;
    echo $rob -> saludo ('rob'); 
    //echo Persona :: $dia;
    
?>