<?php

include_once 'modelo/ModeloCategoria.php';
include_once 'modelo/utilities.php';
include_once 'modelo/categoria.php';
include_once 'controlador/privado/ControladorLogin.php';


class ControladorCategorias { 

    private $modeloCategoria;
    private $controladorLogin;

    public function __construct(){
        $this->modeloCategoria = new ModeloCategoria();
        $this->controladorLogin = new ControladorLogin();
    }

    public function mostrarCategorias(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para mostrar categorias, por favor inicia sesión.');
        }

        $modeloCategoria = new ModeloCategoria();

        $categorias = $modeloCategoria->obtenerCategorias();

        // @todo una vista...
        // La vista esta en: /vista/privado/Blog/listado.php

        include 'vista/privado/categorias.php';
        die();
    }

    public function crear() {
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para crear categorias, por favor inicia sesión.');
        }

        $nombre = $_POST['nombre'];

        $categoria = new Categoria($nombre, slugify($nombre));

        $this->modeloCategoria->guardar($categoria);

        $this->mostrarCategorias();
    }

    public function obtenerCategoriaComoJSON(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para obtener categoria como JSON, por favor inicia sesión.');
        }

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
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para modificar categorias, por favor inicia sesión.');
        }

        $id = $_POST['id-categoria'];
        $nombre = $_POST['modificar-nombre'];


        $categoria = new Categoria($nombre, slugify($nombre));
        $categoria->id = $id;

        $this->modeloCategoria->modificar($categoria);

        $this->mostrarCategorias();

    }

    public function borrar(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para borrar categorias, por favor inicia sesión.');
        }

        if(isset($_GET['id'])){
            $id = $_GET['id'];
        } else {
            die('Operación no permitida, falta el ID de la categoría.');
        }

        $this->modeloCategoria->borrar($id);

        $this->mostrarCategorias();

    } 
}
