<?php

include '../../modelo/Blog.php';

/**
 * Class Blog
 */
class Blog{

    // @todo Este controlador pone de acuerdo modelos y vistas... coge datos de los modelos y los muestra en las vistas...

    public function listado(){
        // @todo coger datos desde el modelo y guardarlos en un array (para pasarlo a la vista)
        // El modelo esta en: /modelo/Blog.php
        $blog = new Blog();

        // Este es un array guarrero...
        $posts = $blog->obtenerPosts();

        // @todo una vista...
        // La vista esta en: /vista/privado/Blog/listado.php

        header("Location: ../../vista/privado/Blog/listado.php");
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
