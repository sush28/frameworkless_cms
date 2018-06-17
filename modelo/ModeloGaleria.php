<?php

include_once 'modelo/conexion.php';
include_once 'modelo/ModeloGaleria.php';


class ModeloGaleria{

    public function __construct() {
        $this->conexion = new Conexion(); 
    } 

    public function obtenerImagenes(){
        $imagenes = array();

        $sql = "SELECT * FROM `galeria` ORDER BY fecha DESC";

        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die("No se han podido obtener las imágenes de la galería.");

        while ($row = mysqli_fetch_array($resul, MYSQLI_ASSOC)) {
            $imagen = new Galeria($row['imagen'], $row['altimagen'],$row['fecha']);
            $imagen->id = $row['id'];
            array_push($imagenes, $imagen);
        }
        return $imagenes;
    }

    public function guardar($imagen) {
        $sql = sprintf(
            "INSERT INTO `galeria` (`id`, `imagen`, `altimagen`, `fecha`) VALUES (%s, '%s', '%s', '%s')",
            "NULL",
            mysqli_real_escape_string($this->conexion->getConexion(), $imagen->imagen),
            mysqli_real_escape_string($this->conexion->getConexion(), $imagen->altimagen),
            mysqli_real_escape_string($this->conexion->getConexion(), $imagen->fecha)
        );
        // print_r($sql); die;
        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die(mysqli_error($this->conexion->getConexion()));

        // or die("No se han podido insertar la entrada.");

        return $resul;
    }

    public function borrar($id){
        $sql = sprintf(
             "DELETE FROM `galeria` WHERE id=%s",
             mysqli_real_escape_string($this->conexion->getConexion(), $id)
        );

        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die(mysqli_error($this->conexion->getConexion()));

        return $resul;
    }

}

/* CONSULTAS */


// /* READ */
// $sql = "SELECT * FROM `galeria` ORDER BY `fecha` DESC";

// /* UPDATE */
// $sql = sprintf(
//     "UPDATE `galeria` SET `id`=%s, `imagen`=%s, `altimagen`=%s WHERE id=%s",
//     "NULL",
//     mysqli::real_escape_string ($imagen),
//     mysqli::real_escape_string ($altimagen),
//     mysqli::real_escape_string ($id)
// );


?>

