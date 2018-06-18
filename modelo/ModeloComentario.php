<?php

include_once 'modelo/conexion.php';
include_once 'modelo/entrada.php';
include_once 'modelo/comentario.php';

/**
 * Class Comentario
 */
class ModeloComentario{

    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion(); 
    }
    
    public function obtenerComentarios($id_entrada) {
        $comentarios = array();

        $sql = "SELECT * FROM `comentario` WHERE `id_entrada` = " . $id_entrada . " AND `validado` = 1 AND `id_comentario_padre` IS NULL ORDER BY `fecha` ASC";

        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die("No se han podido obtener los comentarios padre.");

        while ($row = mysqli_fetch_array($resul, MYSQLI_ASSOC)) {
            $comentarioEHijos = array();

            $comentario = new Comentario(null, $id_entrada, $row['nombre'], $row['texto'], $row['fecha'], $row['validado']);
            $comentario->id = $row['id'];

            $comentarioEHijos['objeto'] = $comentario;
            $comentarioEHijos['hijos'] = array();
            
            $sql = "SELECT * FROM `comentario` WHERE `id_comentario_padre` = " . $row['id'] . " ORDER BY `fecha` ASC";
            $resul2 = mysqli_query($this->conexion->getConexion(), $sql) or die("No se han podido obtener los comentarios hijo.");
            while ($row2 = mysqli_fetch_array($resul2, MYSQLI_ASSOC)) {
                $comentarioHijo = new Comentario(null, $id_entrada, $row2['nombre'], $row2['texto'], $row2['fecha'], $row2['validado']);
                $comentarioHijo->id = $row2['id'];
                array_push($comentarioEHijos['hijos'], $comentarioHijo);
            }

            array_push($comentarios, $comentarioEHijos);
        }

        return $comentarios;
    }

    public function guardar($comentario){
        $sql = sprintf(
            "INSERT INTO `comentario` (`id`, `id_comentario_padre`, `id_entrada`, `nombre`, `texto`, `fecha`, `validado`) 
            VALUES (%s, %s, %s, '%s', '%s', '%s', %s)",
            "NULL",
            mysqli_real_escape_string($this->conexion->getConexion(), $comentario->id_comentario_padre),
            mysqli_real_escape_string($this->conexion->getConexion(), $comentario->id_entrada),
            mysqli_real_escape_string($this->conexion->getConexion(), $comentario->nombre),
            mysqli_real_escape_string($this->conexion->getConexion(), $comentario->texto),
            mysqli_real_escape_string($this->conexion->getConexion(), $comentario->fecha),
            mysqli_real_escape_string($this->conexion->getConexion(), $comentario->validado)
        );
        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die(mysqli_error($this->conexion->getConexion()));

        return $resul;
    }

    public function borrar($id){
        $sql = sprintf(
            "DELETE FROM `comentario` WHERE `id`=%s",
            mysqli_real_escape_string($this->conexion->getConexion(), $id)
        );
        
        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die(mysqli_error($this->conexion->getConexion()));

        return $resul;
    }
}
