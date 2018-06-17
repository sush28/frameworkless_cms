<?php

include_once 'modelo/ModeloCategoria.php';
include_once 'modelo/utilities.php';
include_once 'modelo/categoria.php';


class ControladorCategorias { 

    private $modeloCategoria;

    public function __construct(){
        $this->modeloCategoria = new ModeloCategoria();
    }

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

        $categoria = new Categoria($nombre, slugify($nombre));

        $this->modeloCategoria->guardar($categoria);

        $this->mostrarCategorias();
    }

    public function obtenerCategoriaComoJSON(){
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            die('Operación no permitida, falta el Id de la categoria a modificar.');
        }

        $categoria = $this->modeloCategoria->obtenerCategoria($id);

        // Devuelve JSON para jquery
        header('Content-Type: application/json');
        print_r(json_encode($categoria)); die;
    }

    public function modificar(){
        $id = $_POST['id-categoria'];
        $nombre = $_POST['modificar-nombre'];


        $categoria = new Categoria($nombre, slugify($nombre));
        $categoria->id = $id;

        $this->modeloCategoria->modificar($categoria);

        $this->mostrarCategorias();

    }

    public function borrar(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        } else {
            die('Operación no permitida, falta el ID de la categoría.');
        }

        $this->modeloCategoria->borrar($id);

        $this->mostrarCategorias();

    } 

    public function moderarComentarios($id){

    }
}
