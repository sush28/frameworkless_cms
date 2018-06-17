<?php

include_once 'modelo/conexion.php';

class ModeloConcierto{

    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function obtenerConciertos(){
        $conciertos = array();

        $sql = "SELECT * FROM `concierto` ORDER BY `fecha` ASC";

        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die("No se han podido obtener los conciertos.");

        while ($row = mysqli_fetch_array($resul, MYSQLI_ASSOC)) {
            array_push($conciertos, $row);
        }

        return $conciertos;
    }

    function guardar($concierto) {
        $sql = sprintf(
            "INSERT INTO `concierto` (`id`, `fecha`, `arena`, `localizacion`, `disponibilidad`, `puntoventa`) VALUES (%s, '%s', '%s', '%s', '%s', '%s')",
            "NULL",
            mysqli_real_escape_string($this->conexion->getConexion(), $concierto->$fecha),
            mysqli_real_escape_string($this->conexion->getConexion(), $concierto->$arena),
            mysqli_real_escape_string($this->conexion->getConexion(), $concierto->$localizacion),
            mysqli_real_escape_string($this->conexion->getConexion(), $concierto->$disponibilidad),
            mysqli_real_escape_string($this->conexion->getConexion(), $concierto->$puntoventa)
        );

        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die(mysqli_error($this->conexion->getConexion()));

        return $resul;
    }
    
}

/* CONSULTAS */

/* CREATE */

// $sql = sprintf(
//     "INSERT INTO `concierto` (`id`, `fecha`, `arena`, `ciudad`, `disponibilidad`, `puntoventa`) VALUES (%s, %s, `%s`, `%s`, `%s`, `%s`)",
//     "NULL",
//     mysqli::real_escape_string ($fecha),
//     mysqli::real_escape_string ($arena),
//     mysqli::real_escape_string ($ciudad),
//     mysqli::real_escape_string ($disponibilidad),
//     mysqli::real_escape_string ($puntoventa)
// );

// /* READ */
// $sql = "SELECT * FROM `concierto` ORDER BY `fecha` ASC";

// /* UPDATE */
// $sql = sprintf(
//     "UPDATE `concierto` SET `id`=%s, `fecha`=%s, `arena`=`%s`, `ciudad`=`%s`, `disponibilidad`=%s , `puntoventa`=%s  WHERE id=%s",
//     "NULL",
//     mysqli::real_escape_string ($fecha),
//     mysqli::real_escape_string ($arena),
//     mysqli::real_escape_string ($ciudad),
//     mysqli::real_escape_string ($disponibilidad),
//     mysqli::real_escape_string ($puntoventa)
// );

// /* DELETE */
// $sql = sprintf(
//     "DELETE FROM `concierto` WHERE id=%s",
//     mysqli::real_escape_string ($id)
// );



?>

