<?php

include 'modelo/ModeloConcierto.php';


/* Class Tour */
class ControladorTour {


    public function listadoCMS(){
        // @todo coger datos desde el modelo y guardarlos en un array (para pasarlo a la vista)
        // El modelo esta en: /modelo/Blog.php
        $concierto = new ModeloConcierto();

        // Este es un array guarrero...
        $conciertos = $concierto->obtenerPosts();

        // @todo una vista...
        // La vista esta en: /vista/privado/Blog/listado.php

        include 'vista/privado/Blog/listado.php';
        die();
    }

    public function listadoFront(){
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

    public function modificar($id){

    }

    public function borrar($id){

    } 

    public function moderarComentarios($id){

    }
}
