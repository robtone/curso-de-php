<?php 
    class Persona {
        public $nombre;
        public $edad;
        public $pais;

        function __construct($nombre, $edad, $pais){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->pais = $pais;
        }

        public function mostrarInformacion(){
            echo $this->nombre .' tiene ' .$this->edad.' de edad y es de '.$this->pais;
        }
    } 
    $rob =new Persona ('rob', 25, 'Mexico');
   // $rob->nombre='roberto';
    //$rob->edad=25;
    //$rob->pais='mexico';
    $rob->mostrarInformacion();

    echo '<br>';
    $armando =new Persona ('armando', 22, 'Mexicano');
    //$armando->nombre='armando';
    //$armando->edad=22;
    //$armando->pais='mexico';
    $armando->mostrarInformacion();
?> 