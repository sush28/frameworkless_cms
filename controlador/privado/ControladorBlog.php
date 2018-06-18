<?php

include_once 'modelo/ModeloEntrada.php';
include_once 'modelo/ModeloCategoria.php';
include_once 'modelo/utilities.php';
include_once 'modelo/entrada.php';
include_once 'controlador/privado/ControladorLogin.php';

/**
 * Class Blog
 */
class ControladorBlog {

    private $modeloEntrada;
    private $modeloCategoria;
    private $controladorLogin;

    public function __construct() {
        $this->modeloEntrada = new ModeloEntrada();
        $this->modeloCategoria = new ModeloCategoria();
        $this->controladorLogin = new ControladorLogin();
    }

    public function mostrarEntradas(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para mostrar entradas, por favor inicia sesión.');
        }
        
        $entradas = $this->modeloEntrada->obtenerEntradas();
        $categorias = $this->modeloCategoria->obtenerCategorias();

        include 'vista/privado/entradas.php';
        die();
    }

    public function crear() {
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para crear entradas, por favor inicia sesión.');
        }

        $categoria = $_POST['categoria'];
        $titulo = $_POST['titulo'];
        $archivo = $_FILES['imagen'];
        $alt = $_POST['altimagen'];
        $contenido = $_POST['entrada'];
        $esPublico = 0;
        if (isset($_POST["publico"])) {
            if ($_POST["publico"] === "publico") {
                $esPublico = 1;
            }
        }

        // @todo Useeeer!
        $entrada = new Entrada($titulo, $contenido, 1, $archivo["name"], $alt, fechaActual(), $esPublico, slugify($titulo), $categoria);

        if (false !== $this->modeloEntrada->guardar($entrada)) {
            guardarImagen($archivo);
        }

        $this->mostrarEntradas();
    }
 
    public function obtenerEntradaComoJSON(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para obtener entrada como JSON, por favor inicia sesión.');
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            die('Operación no permitida, falta el ID de la entrada a modificar.');
        }

        $entrada = $this->modeloEntrada->obtenerEntrada($id);

        // Devuelve JSON para jquery
        header('Content-Type: application/json');
        print_r(json_encode($entrada)); die;
    }

    public function modificar() {
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para modificar entradas, por favor inicia sesión.');
        }

        $id = $_POST['id-entrada'];
        $categoria = $_POST['modificar-categoria'];
        $titulo = $_POST['modificar-titulo'];
        $archivo = $_FILES['modificar-imagen'];
        $alt = $_POST['modificar-altimagen'];
        $contenido = $_POST['modificar-entrada'];
        $esPublico = 0;
        if (isset($_POST["publico"])) {
            if ($_POST["publico"] === "publico") {
                $esPublico = 1;
            }
        }

        $entrada = new Entrada($titulo, $contenido, 1, $archivo["name"], $alt, fechaActual(), $esPublico, slugify($titulo), $categoria);
        $entrada->id = $id;

        if (false !== $this->modeloEntrada->modificar($entrada)) {
            if ($archivo['size'] > 0) {
                guardarImagen($archivo);
            }
        }

        $this->mostrarEntradas();
    }

    public function borrar(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para borrar entradas, por favor inicia sesión.');
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            die('Operación no permitida, falta el ID de la entrada a eliminar.');
        }

        $this->modeloEntrada->borrar($id);

        $this->mostrarEntradas();
    } 

    public function borrarComentario(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para borrar comentarios, por favor inicia sesión.');
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            die('Operación no permitida, falta el ID del comentario a eliminar.');
        }

        $this->modeloComentario->borrar($id);

        $this->mostrarEntrada();
    }
}
