<?php

include_once 'modelo/ModeloEntrada.php';
include_once 'modelo/ModeloCategoria.php';

class ControladorBlog {

    private $modeloEntrada;
    private $modeloCategoria;

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
}