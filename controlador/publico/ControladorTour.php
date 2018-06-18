<?php

include_once 'modelo/ModeloConcierto.php';
include_once 'modelo/concierto.php';
include_once 'modelo/encuesta.php';
include_once 'modelo/utilities.php';

class ControladorTour {

    private $modeloConcierto;

    public function __construct() { 
        $this->modeloConcierto = new ModeloConcierto();
    }

    public function mostrarTour() {

        $conciertos = $this->modeloConcierto->obtenerConciertos();

        include 'vista/publico/tour.php';
        die();
    }

    public function crearEncuesta(){
        $pais = $_POST['pais'];

        $encuesta = new Encuesta($pais);

        $this->modeloConcierto->guardarEncuesta($encuesta);

        $this->mostrarTour();

    }


}