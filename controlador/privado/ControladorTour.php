<?php

include_once 'modelo/ModeloConcierto.php';
include_once 'modelo/utilities.php';
include_once 'modelo/concierto.php';
include_once 'modelo/encuesta.php';


class ControladorTour {   

    private $modeloConcierto;

    public function __construct() { 
        $this->modeloConcierto = new ModeloConcierto();
    }

    public function mostrarConciertos(){
        // @todo coger datos desde el modelo y guardarlos en un array (para pasarlo a la vista)

        $conciertos = $this->modeloConcierto->obtenerConciertos();
        $encuesta = $this->modeloConcierto->obtenerEncuesta();

        include 'vista/privado/tour.php';
        die();
    }

    public function crear(){
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
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        } else {
            die('Operación no permitida, falta el ID del concierto.');
        }

        $this->modeloConcierto->borrar($id);

        $this->mostrarConciertos();

    } 

}
