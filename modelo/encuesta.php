<?php

class Encuesta {
  
    public $id;
    public $pais;

    public function __construct($pais) {
        $this->pais = $pais;
    }
}