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
        $entradas = $this->modeloEntrada->obtenerEntradas();
        include 'vista/publico/entradas.php';
        die();
    }
}