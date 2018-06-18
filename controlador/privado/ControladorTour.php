<?php

include_once 'modelo/ModeloConcierto.php';
include_once 'modelo/utilities.php';
include_once 'modelo/concierto.php';
include_once 'modelo/encuesta.php';
include_once 'controlador/privado/ControladorLogin.php';


class ControladorTour {   

    private $modeloConcierto;
    private $controladorLogin;

    public function __construct() { 
        $this->modeloConcierto = new ModeloConcierto();
        $this->controladorLogin = new ControladorLogin();
    }

    public function mostrarConciertos(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para mostrar conciertos, por favor inicia sesión.');
        }

        $conciertos = $this->modeloConcierto->obtenerConciertos();
        $encuesta = $this->modeloConcierto->obtenerEncuesta();

        include 'vista/privado/tour.php';
        die();
    }

    public function crear(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para crear conciertos, por favor inicia sesión.');
        }

        $fecha = $_POST['fecha'];
        $arena = $_POST['arena'];
        $localizacion = $_POST['localizacion'];
        $disponibilidad = $_POST['disponibilidad'];
        $puntoventa = $_POST['puntoventa'];

        $concierto = new Concierto($fecha, $arena, $localizacion, $disponibilidad, $puntoventa);

        $this->modeloConcierto->guardar($concierto);

        $this->mostrarConciertos();
    }

    public function obtenerConciertoComoJSON(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para obtenerConcierto como JSON conciertos, por favor inicia sesión.');
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id']; 
        } else {
            die('Operación no permitida, falta el ID del concierto a modificar.');
        }

        $concierto = $this->modeloConcierto->obtenerConcierto($id);

        // Devuelve JSON para jquery
        header('Content-Type: application/json');
        print_r(json_encode($concierto)); die;
    }

    public function modificar(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para modificar conciertos, por favor inicia sesión.');
        }

        $id = $_POST['id-concierto'];
        $fecha = $_POST['modificar-fecha'];
        $arena = $_POST['modificar-arena'];
        $localizacion = $_POST['modificar-localizacion'];
        $disponibilidad = $_POST['modificar-disponibilidad'];
        $puntoventa = $_POST['modificar-puntoventa'];

        $concierto = new Concierto($fecha, $arena, $localizacion, $disponibilidad, $puntoventa);
        $concierto->id = $id;
        $this->modeloConcierto->modificar($concierto);

        $this->mostrarConciertos();

    }

    public function borrar(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para borrar conciertos, por favor inicia sesión.');
        }

        if(isset($_GET['id'])){
            $id = $_GET['id'];
        } else {
            die('Operación no permitida, falta el ID del concierto.');
        }

        $this->modeloConcierto->borrar($id);

        $this->mostrarConciertos();

    } 

}
