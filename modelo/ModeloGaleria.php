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

    function insertarImagen($id, $imagen, $altimagen) {
        return;
    }

}

/* CONSULTAS */

/* CREATE */
$sql = sprintf(
    "INSERT INTO `galeria` (`id`, `imagen`, `altimagen`) VALUES (%s, `%s`, `%s`)",
    "NULL",
    mysqli::real_escape_string ($imagen),
    mysqli::real_escape_string ($altimagen)
);

/* READ */
$sql = "SELECT * FROM `galeria` ORDER BY `fecha` DESC";

/* UPDATE */
$sql = sprintf(
    "UPDATE `galeria` SET `id`=%s, `imagen`=%s, `altimagen`=%s WHERE id=%s",
    "NULL",
    mysqli::real_escape_string ($imagen),
    mysqli::real_escape_string ($altimagen),
    mysqli::real_escape_string ($id)
);

/* DELETE */
$sql = sprintf(
    "DELETE FROM `galeria` WHERE id=%s",
    mysqli::real_escape_string ($id)
);


?>

