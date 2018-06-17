<?php

include 'modelo/ModeloEntrada.php';
include 'modelo/ModeloCategoria.php';
include 'modelo/utilities.php';
include 'modelo/entrada.php';

/**
 * Class Blog
 */
class ControladorBlog {

    private $modeloEntrada;
    private $modeloCategoria;

    public function __construct() {
        $this->modeloEntrada = new ModeloEntrada();
        $this->modeloCategoria = new ModeloCategoria();
    }

    // @todo Este controlador pone de acuerdo modelos y vistas... coge datos de los modelos y los muestra en las vistas...

    public function mostrarEntradas(){
        // @todo Usar esto en todos los métodos de todos los controladores que estan en PRIVADO.
        // if (!isset($user)) {
        //     die('No tienes acceso, por favor <a href="login.php">inicia sesión<a>.');
        // }

        // @todo coger datos desde el modelo y guardarlos en un array (para pasarlo a la vista)
        // El modelo esta en: /modelo/Blog.php
        

        // Este es un array guarrero...
        $entradas = $this->modeloEntrada->obtenerEntradas();
        $categorias = $this->modeloCategoria->obtenerCategorias();

        // @todo una vista...
        // La vista esta en: /vista/privado/Blog/listado.php

        include 'vista/privado/entradas.php';
        die();
    }

    public function crear() {
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

        // @todo Useeeer!
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
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            die('Operación no permitida, falta el ID de la entrada a eliminar.');
        }

        $this->modeloEntrada->borrar($id);
        
        $this->mostrarEntradas();
    } 

    public function moderarComentarios($id){

    }
}
