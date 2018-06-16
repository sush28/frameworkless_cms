<?php

class Galeria {
  
    public $id;
    public $imagen;
    public $altimagen;

    public function __construct($id, $imagen, $altimagen) {

        $this->id = $id;
        $this->imagen = $imagen;
        $this->altimagen = $altimagen;
    }
}

?>