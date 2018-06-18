<?php

include_once 'modelo/conexion.php';
include_once 'modelo/usuario.php';
include_once 'modelo/ModeloUsuario.php';

/**
 * Class Usuario
 */
class ModeloUsuario{

    private $conexion;

    public function __construct() {
        $this->conexion = new Conexion();
    }

    public function obtenerUsuarios(){
        $usuarios = array();

        $sql = "SELECT * FROM `usuario` ORDER BY `rol` DESC";

        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die("No se han podido obtener los usuarios.");

        while ($row = mysqli_fetch_array($resul, MYSQLI_ASSOC)) {
            $usuario = new Usuario($row['user'], $row['pass'], $row['rol'], $row['autor']);
            $usuario->id = $row['id'];

            array_push($usuarios, $usuario);
        }

        return $usuarios;
    }

    public function obtenerUsuario($id){
        $sql = sprintf(
            "SELECT * FROM `usuario` WHERE id=%s",
            mysqli_real_escape_string($this->conexion->getConexion(), $id)
        );

        $resultado = mysqli_query($this->conexion->getConexion(), $sql) or die("No se ha podido obtener el usuario.");

        return mysqli_fetch_assoc($resultado);
    }

    public function guardar($usuario) {
        $sql = sprintf(
            "INSERT INTO `usuario` (`id`, `user`, `pass`, `rol`, `autor`) 
            VALUES (%s, '%s', '%s', '%s', '%s')",
            "NULL",
            mysqli_real_escape_string($this->conexion->getConexion(), $usuario->user),
            mysqli_real_escape_string($this->conexion->getConexion(), $usuario->pass),
            mysqli_real_escape_string($this->conexion->getConexion(), $usuario->rol),
            mysqli_real_escape_string($this->conexion->getConexion(), $usuario->autor)
        );

        // print_r($sql); die;
        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die(mysqli_error($this->conexion->getConexion()));

        return $resul;

    }

    public function modificar($usuario) {
        $sql = sprintf(
            "UPDATE `usuario` SET `user`='%s', `pass`='%s', `rol`='%s', `autor`='%s'  WHERE id=%s",
            mysqli_real_escape_string($this->conexion->getConexion(), $usuario->user),
            mysqli_real_escape_string($this->conexion->getConexion(), $usuario->pass),
            mysqli_real_escape_string($this->conexion->getConexion(), $usuario->rol),
            mysqli_real_escape_string($this->conexion->getConexion(), $usuario->autor)
        );

        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die(mysqli_error($this->conexion->getConexion()));

        return $resul;
    }

    public function borrar($id) {
        $sql = sprintf(
            "DELETE FROM `usuario` WHERE `id`=%s",
            mysqli_real_escape_string($this->conexion->getConexion(), $id)
        );
        
        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die(mysqli_error($this->conexion->getConexion()));

        return $resul;
    }

}