<?php

class Categoria {
  
    public $id;
    public $nombre;
    public $slug;

    public function __construct($id, $nombre, $slug) {

        $this->id = $id;
        $this->nombre = $nombre;
        $this->slug = $slug;
    }
}

?>