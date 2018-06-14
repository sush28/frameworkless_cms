<?php

class Entrada {

    include("conexion.php");
    private $db;
    

    public $id;
    public $titulo;
    public $contenido;
    public $autor;
    public $imagen;
    public $altimagen;
    public $fecha;
    public $publico;
    public $slug;
    public $id_cat;


    public function __construct($id, $titulo, $contenido, $autor, $imagen, $altimagen, $fecha, $publico, $slug, $id_cat) {

        $this->id = $id;
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->autor = $autor;
        $this->imagen = $imagen;
        $this->altimagen = $altimagen;
        $this->fecha = $fecha;
        $this->publico = $publico;
        $this->slug = $slug;
        $this->id_cat = $id_cat;
        
    }

}

?>
