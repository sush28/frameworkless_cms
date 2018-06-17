<?php

class Entrada {

    public $id;
    public $titulo;
    public $contenido;
    public $id_usuario;
    public $imagen;
    public $altimagen;
    public $fecha;
    public $publico;
    public $slug;
    public $id_categoria;


    public function __construct($id, $titulo, $contenido, $id_usuario, $imagen, $altimagen, $fecha, $publico, $slug, $id_categoria) {

        $this->id = $id;
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->id_usuario = $id_usuario;
        $this->imagen = $imagen;
        $this->altimagen = $altimagen;
        $this->fecha = $fecha;
        $this->publico = $publico;
        $this->slug = $slug;
        $this->id_categoria = $id_categoria;

    }

}

?>
