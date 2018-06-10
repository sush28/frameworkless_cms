<?php

class Conectar {
    public static function conexion () {
        try {
            $conexion = mysqli_connect("fotofrancis-db.cu7evvvvmquh.eu-west-1.rds.amazonaws.com","root","soycarlos","francisco-db");
        } catch(Exception $e){
            die("Error en la base de datos: " . $e->getMessage());
        }
        return $conexion;
    }


}

?>