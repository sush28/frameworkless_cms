<?php

include_once 'modelo/conexion.php';
include_once 'categoria.php';

class ModeloCategoria{

    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

  
    public function obtenerCategorias(){
        $categorias = array();

        $sql = "SELECT * FROM `categoria` ORDER BY `nombre` DESC";

        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die("No se han podido obtener las categorías.");

        while ($row = mysqli_fetch_array($resul, MYSQLI_ASSOC)) {
            array_push($categorias, $row);
        }

        return $categorias;
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

// /* CONSULTAS */

// /* CREATE */
// $sql = sprintf(
//     "INSERT INTO `categoria` (`id`, `nombre`, `slug`) VALUES (%s, `%s`, `%s`)",
//     "NULL",
//     mysqli::real_escape_string ($nombre),
//     mysqli::real_escape_string ($slug)
// );

// /* READ */
// $sql = "SELECT * FROM `categoria` ORDER BY `nombre` DESC";

// $sql = sprintf(
//     "SELECT `nombre` FROM `categoria` WHERE id=%s",
//     mysqli::real_escape_string ($id)
// );

// /* UPDATE */
// $sql = sprintf(
//     "UPDATE `categoria` SET `id`=%s, `nombre`=%s, `slug`=%s WHERE id=%s",
//     "NULL",
//     mysqli::real_escape_string ($nombre),
//     mysqli::real_escape_string ($slug),
//     mysqli::real_escape_string ($id)
// );

// /* DELETE */
// $sql = sprintf(
//     "DELETE FROM `categoria` WHERE id=%s",
//     mysqli::real_escape_string ($id)
// );



