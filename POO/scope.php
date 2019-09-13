<?php
class Usr{
    public $nombre;
    private $correo;

    function __construct($nombre,$correo){
        $this->nombre=$nombre;
        $this->correo=$correo;
    }
    public function mostrarInformacion(){
        return $this->correo;
    }

}

class miembro extends Usr{
    public function mostrarCorero(){
        return 'Este es el correo:' .$this->correo;
    }
}

$rob = new Usr('Roberto', 'rob@outlook.com'); 
$rob->mostrarInformacion();
?>