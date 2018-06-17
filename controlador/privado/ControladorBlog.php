<?php

include 'modelo/ModeloBlog.php';

/**
 * Class Blog
 */
class ControladorBlog { 

    // @todo Este controlador pone de acuerdo modelos y vistas... coge datos de los modelos y los muestra en las vistas...

    public function listado(){
        // @todo Usar esto en todos los métodos de todos los controladores que estan en PRIVADO.
        if (!isset($user)) {
            die('No tienes acceso, por favor <a href="login.php">inicia sesión<a>.');
        }

        // @todo coger datos desde el modelo y guardarlos en un array (para pasarlo a la vista)
        // El modelo esta en: /modelo/Blog.php
        $blog = new ModeloBlog();

        // Este es un array guarrero...
        $posts = $blog->obtenerPosts();

        // @todo una vista...
        // La vista esta en: /vista/privado/Blog/listado.php

        include 'vista/privado/Blog/entradas.php';
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
