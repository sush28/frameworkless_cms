<?php

class Conexion {

    private $con;

    public function __construct(){
        $this->con = mysqli_connect("fotofrancis-db.cu7evvvvmquh.eu-west-1.rds.amazonaws","laura","@laura","laura");
    }

    public function getConnection(){
        return $this->con;
    }
}

?>
