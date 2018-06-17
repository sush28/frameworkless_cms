<?php

include 'modelo/ModeloConcierto.php';
include 'modelo/utilities.php';
include 'modelo/concierto.php';


class ControladorTour {

    public function mostrarConciertos(){
        // @todo coger datos desde el modelo y guardarlos en un array (para pasarlo a la vista)

        $modeloConcierto = new ModeloConcierto();

        $conciertos = $modeloConcierto->obtenerConciertos();

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

        $modeloConcierto = new ModeloConcierto();

        $modeloConcierto->guardar($concierto);

        $this->mostrarConciertos();
    }

    public function modificar($id){

    }

    public function borrar($id){

    } 

    public function moderarComentarios($id){

    }
}
