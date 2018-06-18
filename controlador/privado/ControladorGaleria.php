<?php

include_once 'modelo/ModeloGaleria.php';
include_once 'modelo/galeria.php';
include_once 'modelo/utilities.php';
include_once 'controlador/privado/ControladorLogin.php';


class ControladorGaleria {

    private $modeloGaleria;
    private $controladorLogin;

    public function __construct() {
        $this->modeloGaleria = new ModeloGaleria();
        $this->controladorLogin = new ControladorLogin();
    }

    public function mostrarGaleria(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para borrar imágenes, por favor inicia sesión.');
        }

        $modeloGaleria = new ModeloGaleria();

        $imagenes = $modeloGaleria->obtenerImagenes();

        include 'vista/privado/galeria.php';
        die();
    }

    public function crear(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para crear imágenes, por favor inicia sesión.');
        }

        $archivo = $_FILES['imagen'];
        $altimagen = $_POST['altimagen'];

        $imagen = new Galeria($archivo["name"], $altimagen, fechaActual());

        if (false !== $this->modeloGaleria->guardar($imagen)) {
            guardarImagen($archivo, "almacenamiento/galeria/");
        }

        $this->mostrarGaleria();
        
    }

    public function borrar(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para borrar imágenes, por favor inicia sesión.');
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            die('Operación no permitida, falta el ID de la imagen.');
        }

        $this->modeloGaleria->borrar($id);

        $this->mostrarGaleria();

    } 

}
