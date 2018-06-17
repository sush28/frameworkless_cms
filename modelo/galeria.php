<?php

class Galeria {

    public $imagen;
    public $altimagen;
    public $fecha;

    public function __construct($imagen, $altimagen, $fecha) {

        $this->imagen = $imagen;
        $this->altimagen = $altimagen;
        $this->fecha = $fecha;
    }
}

?>