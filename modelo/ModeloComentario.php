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
    
    public function obtenerComentarios($entrada) {
        $comentarios = array();

        $sql = "SELECT * FROM `comentarios` WHERE `id_entrada` = " . $entrada->id . " ORDER BY `fecha` ASC";

        $resul = mysqli_query($this->conexion->getConexion(), $sql) or die("No se han podido obtener las entradas.");

        while ($row = mysqli_fetch_array($resul, MYSQLI_ASSOC)) {
            $comentarioEHijos = array();
            // array_push($entradas, $row);

            // $entrada = new Entrada($row['titulo'], $row['contenido'], $row['id_usuario'], $row['imagen'], $row['altimagen'], $row['fecha'], $row['publico'], $row['slug'], $row['id_categoria']);
            // $entrada->id = $row['id'];
            // $entrada->tituloCategoria = $this->modeloCategoria->obtenerNombreCategoria($row['id_categoria']);

            $comentario = new Comentario(); // hACER

            $comentarioEHijos['objeto'] = $comentario;
            // id es: $row['id']
            $sql = "SELECT * FROM `comentarios` WHERE `id_comentario_padre` = " . $row['id'] . " ORDER BY `fecha` ASC";
            $resul2 = mysqli_query($this->conexion->getConexion(), $sql) or die("No se han podido obtener las entradas.");
            while ($row2 = mysqli_fetch_array($resul2, MYSQLI_ASSOC)) {
                $comentarioHijo = new Comentario(); // hacer...
                
                array_push($comentarioEHijos['hijos'], $comentarioHijo);
            }

            array_push($comentarios, $comentario);
        }

        return $comentarios;

        /**
         * [
         *      [
         *          'objeto' => Comentario
         *          'hijos'  => Array()
         *      ],
         *      [
         *          'objeto' => Comentario
         *          'hijos'  => Array()
         *      ],
         *      [
         *          'objeto' => Comentario
         *          'hijos'  => Array()
         *      ],
         *      [
         *          'objeto' => Comentario
         *          'hijos'  => Array()
         *      ],
         * ]
         */
    }

    public function guardar($comentario){
        $sql = sprintf(
            "INSERT INTO `comentario` (`id`, `id_comentario_padre`, `id_entrada`, `nombre`, `texto`, `fecha`, `validado`) 
            VALUES (%s, %s, %s, %s, '%s', '%s', %s)",
            "NULL",
            mysqli_real_escape_string($this->conexion->getConexion(), $comentario->id_comentario_padre),
            mysqli_real_escape_string($this->conexion->getConexion(), $comentario->id_entrada),
            mysqli_real_escape_string($this->conexion->getConexion(), $comentario->nombre),
            mysqli_real_escape_string($this->conexion->getConexion(), $comentario->texto),
            mysqli_real_escape_string($this->conexion->getConexion(), $comentario->fecha),
            mysqli_real_escape_string($this->conexion->getConexion(), $comentario->validado)
        );
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
