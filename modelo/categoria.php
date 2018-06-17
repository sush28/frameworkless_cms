<?php

class Categoria {
  
    public $id;
    public $nombre;
    public $slug;

    public function __construct($nombre, $slug) {

        $this->nombre = $nombre;
        $this->slug = $slug;
    }
}

?>