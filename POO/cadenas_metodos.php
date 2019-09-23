<?php
    class Usr{
        public $nombre;
        public $correo;
        function __construct($nombre, $correo ){
            $this->nombre=$nombre;
            $this->correo=$correo;
        } 
        public function mostrrNombre(){
            echo 'Su nombre es: ' . $this->nombre. '<br>';
            return $this;
        }
        public function mostrarCorreo(){
            echo 'Su correo es: ' .$this->correo.'<br>';
            return $this;
        }
    }
    
    $rob=new Usr('roberto', 'roberto@hotmail.com');
    $rob->mostrarNombre()->mostrarCorreo();
   // $ron->mostrarCorreo();
?>