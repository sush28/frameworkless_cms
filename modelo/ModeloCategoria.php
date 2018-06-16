<?php

include_once 'conexion.php';
include_once 'categoria.php';

class ModeloCategoria{

  
    public function obtenerPosts(){

    }

    function getCategoria($id) {
        return $categorias;
    }

    function getListadoCategorias() {
        return $categorias;
    }

    function insertarCategoria($id, $nombre, $slug) {
        return;
    }

    function modificarCategoria($id) {
        return;
    }

    function borrarCategoria($id) {
        return;
    }

}

/* CONSULTAS */

/* CREATE */
$sql = sprintf(
    "INSERT INTO `categoria` (`id`, `nombre`, `slug`) VALUES (%s, `%s`, `%s`)",
    "NULL",
    mysqli::real_escape_string ($nombre),
    mysqli::real_escape_string ($slug)
);

/* READ */
$sql = "SELECT * FROM `categoria` ORDER BY `nombre` DESC";

$sql = sprintf(
    "SELECT `nombre` FROM `categoria` WHERE id=%s",
    mysqli::real_escape_string ($id)
);

/* UPDATE */
$sql = sprintf(
    "UPDATE `categoria` SET `id`=%s, `nombre`=%s, `slug`=%s WHERE id=%s",
    "NULL",
    mysqli::real_escape_string ($nombre),
    mysqli::real_escape_string ($slug),
    mysqli::real_escape_string ($id)
);

/* DELETE */
$sql = sprintf(
    "DELETE FROM `categoria` WHERE id=%s",
    mysqli::real_escape_string ($id)
);


?>

