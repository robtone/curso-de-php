<?php
class Persona{
    public $nombre;
    public $edad;
    public $pais;
    function __construct($nombre, $edad, $pais){
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->pais=$pais;
    }
    public function mostrarInformacion(){
        return $this->nombre. ' tiene '.$this->edad .'y es del pais '.$this->pais;
    }
}

class Estudiante extends Persona {
	function __construct($nombre, $edad, $pais, $carrera){
		parent::__construct($nombre, $edad, $pais);
		$this->carrera = $carrera;
	}
}
class Trabajador extends Persona{
    function __construct($nombre,$edad,$pais,$trabajo){
        parent::__construct($nombre,$edad,$pais);
        $this->trabajo=$trabajo;
    }
}

$rob = new Estudiante('Roberto', 23, 'Mexico', 'Profesor');
$rob->mostrarInformacion();
echo '<br>';
$arturo =new Trabajador('r2d2', 22, 'mexico', 'cidwa');
echo $arturo->trabajo;
?>