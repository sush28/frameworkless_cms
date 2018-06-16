<?php

include_once 'conexion.php';
include_once 'concierto.php';

class ModeloConcierto{

  
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

    function insertarConcierto($fecha, $arena, $ciudad, $disponibilidad, $puntoventa) {
        $conciertos = array();
        $sql = sprintf(
            "INSERT INTO `concierto` (`id`, `fecha`, `arena`, `ciudad`, `disponibilidad`, `puntoventa`) VALUES (%s, %s, '%s', '%s', '%s', '%s')",
            "NULL",
            mysqli::real_escape_string ($fecha),
            mysqli::real_escape_string ($arena),
            mysqli::real_escape_string ($ciudad),
            mysqli::real_escape_string ($disponibilidad),
            mysqli::real_escape_string ($puntoventa)
        );

        $resul = mysqli_query($con, $sql) or die("No se han podido obtener los conciertos.");

        while ($row = mysqli_fetch_array($resul, MYSQLI_ASSOC)) {
            array_push($conciertos, $row['id_escu']);
        }
        return $conciertos;
    }
    
}

/* CONSULTAS */

/* CREATE */
$sql = sprintf(
    "INSERT INTO `concierto` (`id`, `fecha`, `arena`, `ciudad`, `disponibilidad`, `puntoventa`) VALUES (%s, %s, `%s`, `%s`, `%s`, `%s`)",
    "NULL",
    mysqli::real_escape_string ($fecha),
    mysqli::real_escape_string ($arena),
    mysqli::real_escape_string ($ciudad),
    mysqli::real_escape_string ($disponibilidad),
    mysqli::real_escape_string ($puntoventa)
);

/* READ */
$sql = "SELECT * FROM `concierto` ORDER BY `fecha` ASC";

/* UPDATE */
$sql = sprintf(
    "UPDATE `concierto` SET `id`=%s, `fecha`=%s, `arena`=`%s`, `ciudad`=`%s`, `disponibilidad`=%s , `puntoventa`=%s  WHERE id=%s",
    "NULL",
    mysqli::real_escape_string ($fecha),
    mysqli::real_escape_string ($arena),
    mysqli::real_escape_string ($ciudad),
    mysqli::real_escape_string ($disponibilidad),
    mysqli::real_escape_string ($puntoventa)
);

/* DELETE */
$sql = sprintf(
    "DELETE FROM `concierto` WHERE id=%s",
    mysqli::real_escape_string ($id)
);



?>

