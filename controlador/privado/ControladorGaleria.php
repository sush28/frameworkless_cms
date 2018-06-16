<?php

include 'modelo/ModeloConcierto.php';


/* Class Tour */
class ControladorGaleria {



    public function listado(){
        // @todo coger datos desde el modelo y guardarlos en un array (para pasarlo a la vista)
        // El modelo esta en: /modelo/Blog.php
        $blog = new ModeloBlog();

        // Este es un array guarrero...
        $posts = $blog->obtenerPosts();

        include 'vista/publico/tour.php';
        die();
    }

    public function crear(){

    }

    public function borrar($id){

    } 

    public function moderarComentarios($id){

    }
}
