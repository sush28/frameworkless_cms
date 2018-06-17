<?php

include_once 'modelo/conexion.php';
include_once 'modelo/categoria.php';

   
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
            $categoria = new Categoria($row['nombre'], $row['slug']);
            $categoria->id = $row['id'];

            array_push($categorias, $categoria);
        }

        return $categorias;
    }

    public function obtenerNombreCategoria($id) {
        $sql = sprintf(
            "SELECT `nombre` FROM `categoria` WHERE id=%s",
            mysqli_real_escape_string($this->conexion->getConexion(), $id)
        );

        $resultado = mysqli_query($this->conexion->getConexion(), $sql) or die("No se han podido obtener la categoria.");

        $resultados = mysqli_fetch_assoc($resultado);

        return $resultados['nombre'];
    }

    function guardar($categoria) {
        $sql = sprintf(
            "INSERT INTO `categoria` (`id`, `nombre`, `slug`) 
            VALUES (%s, '%s', '%s')",
            "NULL",
            mysqli_real_escape_string($this->conexion->getConexion(), $categoria->nombre),
            mysqli_real_escape_string($this->conexion->getConexion(), $categoria->slug)
        );

        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die(mysqli_error($this->conexion->getConexion()));

        return $resul;
    }

    function modificar($categoria, $id) {

        $sql = sprintf(
            "UPDATE `categoria` SET `id`=%s, `nombre`=%s, `slug`=%s WHERE id=%s",
            "NULL",
            mysqli_real_escape_string($this->conexion->getConexion(), $categoria->$nombre),
            mysqli_real_escape_string($this->conexion->getConexion(), $categoria->$slug),
            mysqli_real_escape_string($this->conexion->getConexion(), $id)
        );

        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die(mysqli_error($this->conexion->getConexion()));

        return $resul;
    }

    function borrar($id) {
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



