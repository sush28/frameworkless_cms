<?php

class Comentario {
  
    public $id;
    public $id_comentario_padre;
    public $id_entrada;
    public $nombre;
    public $texto;
    public $fecha;
    public $validado;

    public function __construct($id_comentario_padre, $id_entrada, $nombre, $texto, $fecha, $validado) {
        $this->id_comentario_padre = $id_comentario_padre;
        $this->id_entrada = $id_entrada;
        $this->nombre = $nombre;
        $this->texto = $texto;
        $this->fecha = $fecha; 
        $this->validado = $validado;
    }
}