<?php

include_once 'modelo/conexion.php';
include_once 'modelo/concierto.php';
include_once 'modelo/encuesta.php';


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
            $concierto = new Concierto($row['fecha'], $row['arena'], $row['localizacion'], $row['disponibilidad'], $row['puntoventa']);
            $concierto->id = $row['id'];
            array_push($conciertos, $concierto);
        }

        return $conciertos;
    }

    public function obtenerEncuesta() {
        $filas = array();
        $sql = "SELECT count(`pais`) as `total`, `pais` FROM `encuesta` GROUP BY `pais` ORDER BY count(`pais`) DESC";

        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die("No se ha podido obtener el concierto.");
        
        while ($row = mysqli_fetch_array($resul, MYSQLI_ASSOC)) {
            array_push($filas, $row);
        }
        
        return $filas;
    }

    public function obtenerConcierto($id) {
        $sql = sprintf(
            "SELECT * FROM `concierto` WHERE id=%s",
            mysqli_real_escape_string($this->conexion->getConexion(), $id)
        );

        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die("No se ha podido obtener el concierto.");

        return mysqli_fetch_assoc($resul);
    }

    public function guardar($concierto) {
        $sql = sprintf(
            "INSERT INTO `concierto` (`id`, `fecha`, `arena`, `localizacion`, `disponibilidad`, `puntoventa`) VALUES (%s, '%s', '%s', '%s', '%s', '%s')",
            "NULL",
            mysqli_real_escape_string($this->conexion->getConexion(), $concierto->fecha),
            mysqli_real_escape_string($this->conexion->getConexion(), $concierto->arena),
            mysqli_real_escape_string($this->conexion->getConexion(), $concierto->localizacion),
            mysqli_real_escape_string($this->conexion->getConexion(), $concierto->disponibilidad),
            mysqli_real_escape_string($this->conexion->getConexion(), $concierto->puntoventa)
        );

        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die(mysqli_error($this->conexion->getConexion()));

        return $resul;
    }

    public function modificar($concierto){
        $sql = sprintf(
            "UPDATE `concierto` SET `fecha`='%s', `arena`='%s', `localizacion`='%s', `disponibilidad`='%s', `puntoventa`='%s' WHERE id=%s",
            mysqli_real_escape_string($this->conexion->getConexion(), $concierto->fecha),
            mysqli_real_escape_string($this->conexion->getConexion(), $concierto->arena),
            mysqli_real_escape_string($this->conexion->getConexion(), $concierto->localizacion),
            mysqli_real_escape_string($this->conexion->getConexion(), $concierto->disponibilidad),
            mysqli_real_escape_string($this->conexion->getConexion(), $concierto->puntoventa),
            mysqli_real_escape_string($this->conexion->getConexion(), $concierto->id)
        );

        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die(mysqli_error($this->conexion->getConexion()));

        return $resul;
    }

    public function borrar($id){
        $sql = sprintf(
            "DELETE FROM `concierto` WHERE id=%s",
            mysqli_real_escape_string($this->conexion->getConexion(), $id)
        );

        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die(mysqli_error($this->conexion->getConexion()));

        return $resul;
    }

    // public function consultarEncuesta(){
    //     $sql = sprintf(
    //         "SELECT * FROM `concierto` (`id`, `pais`) VALUES (%s, '%s')",
    //     );
    // }

    public function guardarEncuesta($encuesta){
        $sql = sprintf(
            "INSERT INTO `encuesta` (`id`, `pais`) VALUES (%s, '%s')",
            "NULL",
            mysqli_real_escape_string($this->conexion->getConexion(), $encuesta->pais)
        );

        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die(mysqli_error($this->conexion->getConexion()));

        return $resul;
    }
    
}
