<?php

include_once 'modelo/ModeloConcierto.php';
include_once 'modelo/utilities.php';
include_once 'modelo/concierto.php';


class ControladorTour { 

    private $modeloConcierto;

    public function __construct() {
        $this->modeloConcierto = new ModeloConcierto();
    }

    public function mostrarConciertos(){
        // @todo coger datos desde el modelo y guardarlos en un array (para pasarlo a la vista)

        $conciertos = $this->modeloConcierto->obtenerConciertos();

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

    public function modificar($id){

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

    public function moderarComentarios($id){

    }
}
