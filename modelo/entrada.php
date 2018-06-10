<?php

class Profesor {

    public $id;
    public $nombre;
    public $mail;
    public $tlf;

    public function __construct($id, $titulo, $contenido, $autor, $imagen, $altimagen, $fecha, $publico, $slug) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->autor = $autor;
        $this->imagen = $imagen;
        $this->altimagen = $altimagen;
        $this->fecha = $fecha;
        $this->publico = $publico;
        $this->slug = $slug;
    }

}

?>
