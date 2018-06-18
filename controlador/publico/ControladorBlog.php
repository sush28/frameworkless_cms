<?php

include_once 'modelo/ModeloEntrada.php';
include_once 'modelo/ModeloCategoria.php';
include_once 'modelo/ModeloComentario.php';
include_once 'modelo/utilities.php';
include_once 'modelo/comentario.php';


class ControladorBlog {

    private $modeloEntrada;
    private $modeloCategoria;
    private $modeloComentario;

    public function __construct() {
        $this->modeloEntrada = new ModeloEntrada();
        $this->modeloCategoria = new ModeloCategoria();
    }
    
    public function mostrarBlog() {
        if (isset($_GET['categoria'])) {
            $categoria = $_GET['categoria'];
        } else {
            $categoria = null;
        }

        $categorias = $this->modeloCategoria->obtenerCategorias();
        $entradas = $this->modeloEntrada->obtenerEntradas($categoria);

        include 'vista/publico/entradas.php';
        die();
    }

    public function mostrarEntrada() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            die('Operación no permitida, falta el ID de la entrada a visualizar.');
        }

        $categorias = $this->modeloCategoria->obtenerCategorias();
        $entrada = $this->modeloEntrada->obtenerEntrada($id);

        include 'vista/publico/entrada.php';
        die();
    }


    public function crearComentario(){
        if (isset($_GET['id'])) {
            $id_entrada = $_GET['id'];
        } else {
            die('Operación no permitida, falta el ID de la entrada a visualizar.');
        }
        $nombre = $_POST['nombre-padre'];
        $texto = $_POST['texto-padre'];
        $validado = 0;

        $comentario = new Comentario("NULL", $id_entrada, $nombre, $texto, fechaActual(), $validado);
        
    }

    public function responderComentario(){
        $nombre = $_POST['nombre-hijo'];
        $texto = $_POST['texto-hijo'];
        $validado = 0;
    }

    public function borrar(){
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            die('Operación no permitida, falta el ID del comentario a eliminar.');
        }

        $this->modeloComentario->borrar($id);

        $this->mostrarEntrada();
    } 

    
}