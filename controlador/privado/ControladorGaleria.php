<?php

include_once 'modelo/ModeloGaleria.php';
include_once 'modelo/galeria.php';
include_once 'modelo/utilities.php';


class ControladorGaleria {

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

        $modeloGaleria = new ModeloGaleria();

        if (false !== $modeloGaleria->guardar($imagen)) {
            guardarImagen($archivo, "almacenamiento/galeria/");
        }

        $this->mostrarGaleria();
        
    }

    public function borrar($id){

    } 

    public function moderarComentarios($id){

    }
}
