<?php

include_once 'modelo/ModeloGaleria.php';
include_once 'modelo/galeria.php';
include_once 'modelo/utilities.php';


class ControladorGaleria {

    private $modeloGaleria;

    public function __construct() {
        $this->modeloGaleria = new ModeloGaleria();
    }

    public function mostrarGaleria(){
        // @todo coger datos desde el modelo y guardarlos en un array (para pasarlo a la vista)
        // El modelo esta en: /modelo/Blog.php
        $modeloGaleria = new ModeloGaleria();

        $imagenes = $modeloGaleria->obtenerImagenes();

        include 'vista/privado/galeria.php';
        die();
    }

    public function crear(){

        $archivo = $_FILES['imagen'];
        $altimagen = $_POST['altimagen'];

        $imagen = new Galeria($archivo["name"], $altimagen, fechaActual());

        if (false !== $this->modeloGaleria->guardar($imagen)) {
            guardarImagen($archivo, "almacenamiento/galeria/");
        }

        $this->mostrarGaleria();
        
    }

    public function borrar(){
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            die('Operación no permitida, falta el ID de la imagen.');
        }

        $this->modeloGaleria->borrar($id);

        $this->mostrarGaleria();

    } 

    public function moderarComentarios($id){

    }
}
