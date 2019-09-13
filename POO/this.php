<?php 
    class Persona{
        public $nombre;
        public $edad;
        public $pais;
        public function mostrarInformacion(){
            echo $this->nombre .' tiene ' .$this->edad.' de edad y es de '.$this->pais;
        }
    } 
    $rob =new Persona;
    $rob->nombre='roberto';
    $rob->edad=25;
    $rob->pais='mexico';
    $rob->mostrarInformacion();

    echo '<br>';
    $armando =new Persona;
    $armando->nombre='armando';
    $armando->edad=22;
    $armando->pais='mexico';
    $armando->mostrarInformacion();
?> 