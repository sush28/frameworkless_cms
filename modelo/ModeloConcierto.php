<?php

include_once 'conexion.php';
include_once 'concierto.php';

class ModeloConcierto{

    public $con = new Conexion();
  
    public function obtenerPosts(){

    }

    function getConciertos() {
        $conciertos = array();
        $sql = "select * from concierto;";

        $resul = mysqli_query($con, $sql) or die("No se han podido obtener los conciertos.");

        while ($row = mysqli_fetch_array($resul, MYSQLI_ASSOC)) {
            array_push($conciertos, $row['id_escu']);
        }
        return $conciertos;
    }

    function insertarConcierto($fecha, $arena, $ciudad, $disponible, $puntoventa) {
        $conciertos = array();
        $sql = sprintf(
            "INSERT INTO `concierto` (`id`, `fecha`, `arena`, `ciudad`, `disponible`, `puntoventa`) VALUES (%s, %s, '%s', '%s', '%s', '%s')",
            "NULL",
            mysqli::real_escape_string ($fecha),
            mysqli::real_escape_string ($arena),
            mysqli::real_escape_string ($ciudad),
            mysqli::real_escape_string ($disponible),
            mysqli::real_escape_string ($puntoventa),
        );

        $resul = mysqli_query($con, $sql) or die("No se han podido obtener los conciertos.");

        while ($row = mysqli_fetch_array($resul, MYSQLI_ASSOC)) {
            array_push($conciertos, $row['id_escu']);
        }
        return $conciertos;
    }

    function getEscuelas() {
        $escuelas = array();
        $textoIns = "select id_escu from escuelas;";

        $resul = mysqli_query($this->mysqli, $textoIns) or die("No se han podido consultar los ID de escuela.");

        while ($row = mysqli_fetch_array($resul, MYSQLI_ASSOC)) {
            array_push($escuelas, $row['id_escu']);
        }
        return $escuelas;
    }
}

?>