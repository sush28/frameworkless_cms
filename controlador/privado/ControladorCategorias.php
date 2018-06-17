<?php

include_once 'modelo/ModeloCategoria.php';
include_once 'modelo/utilities.php';
include_once 'modelo/categoria.php';


class ControladorCategorias { 

    // @todo Este controlador pone de acuerdo modelos y vistas... coge datos de los modelos y los muestra en las vistas...

    public function mostrarCategorias(){
        // @todo Usar esto en todos los métodos de todos los controladores que estan en PRIVADO.
        // if (!isset($user)) {
        //     die('No tienes acceso, por favor <a href="login.php">inicia sesión<a>.');
        // }

        // @todo coger datos desde el modelo y guardarlos en un array (para pasarlo a la vista)
        // El modelo esta en: /modelo/Blog.php
        $modeloCategoria = new ModeloCategoria();

        $categorias = $modeloCategoria->obtenerCategorias();

        // @todo una vista...
        // La vista esta en: /vista/privado/Blog/listado.php

        include 'vista/privado/categorias.php';
        die();
    }

    public function crear() {
        $nombre = $_POST['nombre'];

        // @todo Useeeer!
        $categoria = new Categoria($nombre, slugify($nombre));

        $modeloCategoria = new ModeloCategoria();

        $modeloCategoria->guardar($categoria);

        $this->mostrarCategorias();
    }

    public function modificar($id){
        $nombre = $_POST['modificar-nombre'];

        // @todo Useeeer!
        $categoria = new Categoria($nombre, slugify($nombre));

        $modeloCategoria = new ModeloCategoria();

        $modeloCategoria->modificar($categoria);

        $this->mostrarCategorias();

    }

    public function borrar($id){

    } 

    public function moderarComentarios($id){

    }
}
