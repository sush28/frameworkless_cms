<?php

include 'modelo/ModeloBlog.php';

/**
 * Class Blog
 */
class ControladorBlog {

    // @todo Este controlador pone de acuerdo modelos y vistas... coge datos de los modelos y los muestra en las vistas...

    public function listado(){
        // @todo coger datos desde el modelo y guardarlos en un array (para pasarlo a la vista)
        // El modelo esta en: /modelo/Blog.php
        $blog = new ModeloBlog();

        // Este es un array guarrero...
        $posts = $blog->obtenerPosts();

        // @todo una vista...
        // La vista esta en: /vista/privado/Blog/listado.php

        $vista = file_get_contents('vista/privado/Blog/listado.php');

        echo $vista;
        die();
    }

    public function crear(){

    }

    public function modificar($postId){

    }

    public function borrar($postId){

    } 

    public function moderarComentarios($postId){

    }
}
