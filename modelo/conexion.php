<?php

class Conexion {

    private $con;

    public function __construct(){
        $this->con = mysqli_connect("fotofrancis-db.cu7evvvvmquh.eu-west-1.rds.amazonaws.com", "laura", "@laura", "laura");
    }

    public function getConexion(){
        return $this->con;
    }
}

?>
