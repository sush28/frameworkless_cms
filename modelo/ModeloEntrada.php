<?php

include_once 'modelo/conexion.php';
include_once 'modelo/entrada.php';
include_once 'modelo/ModeloCategoria.php';

/**
 * Class Entrada
 */
class ModeloEntrada{

    private $conexion;
    private $modeloCategoria;

    public function __construct() {
        $this->conexion = new Conexion();
        $this->modeloCategoria = new ModeloCategoria();
    }
    
    public function obtenerEntradas() {
        $entradas = array();

        $sql = "SELECT * FROM `entrada` ORDER BY `fecha` ASC";

        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die("No se han podido obtener las entradas.");

        while ($row = mysqli_fetch_array($resul, MYSQLI_ASSOC)) {
            // array_push($entradas, $row);

            $entrada = new Entrada($row['titulo'], $row['contenido'], $row['id_usuario'], $row['imagen'], $row['altimagen'], $row['fecha'], $row['publico'], $row['slug'], $row['id_categoria']);
            $entrada->id = $row['id'];
            $entrada->tituloCategoria = $this->modeloCategoria->obtenerNombreCategoria($row['id_categoria']);

            array_push($entradas, $entrada);
        }

        return $entradas;
    } 

    public function obtenerEntrada($id) {
        $sql = sprintf(
            "SELECT * FROM `entrada` WHERE id=%s",
            mysqli_real_escape_string($this->conexion->getConexion(), $id)
        );

        $resultado = mysqli_query($this->conexion->getConexion(), $sql) or die("No se ha podido obtener la entrada.");

        return mysqli_fetch_assoc($resultado);
    }

    public function guardar($entrada) {
        $sql = sprintf(
            "INSERT INTO `entrada` (`id`, `titulo`, `contenido`, `id_usuario`, `imagen`, `altimagen`, `fecha`, `publico`, `slug`, `id_categoria`) 
            VALUES (%s, '%s', '%s', %s, '%s', '%s', '%s', %s, '%s', %s)",
            "NULL",
            mysqli_real_escape_string($this->conexion->getConexion(), $entrada->titulo),
            mysqli_real_escape_string($this->conexion->getConexion(), $entrada->contenido),
            mysqli_real_escape_string($this->conexion->getConexion(), $entrada->id_usuario),
            mysqli_real_escape_string($this->conexion->getConexion(), $entrada->imagen),
            mysqli_real_escape_string($this->conexion->getConexion(), $entrada->altimagen),
            mysqli_real_escape_string($this->conexion->getConexion(), $entrada->fecha),
            mysqli_real_escape_string($this->conexion->getConexion(), $entrada->publico),
            mysqli_real_escape_string($this->conexion->getConexion(), $entrada->slug),
            mysqli_real_escape_string($this->conexion->getConexion(), $entrada->id_categoria)
        );
        // print_r($sql); die;
        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die(mysqli_error($this->conexion->getConexion()));

        // or die("No se han podido insertar la entrada.");

        return $resul;
    }

    public function modificar($entrada) {
        
        if ($entrada->imagen === "") {
            $sql = sprintf(
                "UPDATE `entrada` SET `titulo`='%s', `contenido`='%s', `id_usuario`=%s, `altimagen`='%s', `fecha`='%s', `publico`=%s, `slug`='%s', `id_categoria`=%s  WHERE id=%s",
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->titulo),
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->contenido),
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->id_usuario),
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->altimagen),
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->fecha),
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->publico),
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->slug),
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->id_categoria),
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->id)
            );
        } else {
            $sql = sprintf(
                "UPDATE `entrada` SET `titulo`='%s', `contenido`='%s', `id_usuario`=%s, `imagen`='%s', `altimagen`='%s', `fecha`='%s', `publico`=%s, `slug`='%s', `id_categoria`=%s  WHERE id=%s",
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->titulo),
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->contenido),
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->id_usuario),
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->imagen),
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->altimagen),
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->fecha),
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->publico),
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->slug),
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->id_categoria),
                mysqli_real_escape_string($this->conexion->getConexion(), $entrada->id)
            );
        }

        // print_r($sql); die;
        
        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die(mysqli_error($this->conexion->getConexion()));

        return $resul;
    }

    public function borrar($id) {
        $sql = sprintf(
            "DELETE FROM `entrada` WHERE `id`=%s",
            mysqli_real_escape_string($this->conexion->getConexion(), $id)
        );
        
        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die(mysqli_error($this->conexion->getConexion()));

        return $resul;
    }
}
