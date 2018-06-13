<?php

class Entrada {

    include("conexion.php");
    private $db;
    

    public $id;
    public $titulo;
    public $contenido;
    public $autor;
    public $imagen;
    public $altimagen;
    public $fecha;
    public $publico;
    public $slug;


    public function __construct($id, $titulo, $contenido, $autor, $imagen, $altimagen, $fecha, $publico, $slug) {

        
        $this->id = $id;
        $this->titulo = $titulo;
        $this->contenido = $contenido;
        $this->autor = $autor;
        $this->imagen = $imagen;
        $this->altimagen = $altimagen;
        $this->fecha = $fecha;
        $this->publico = $publico;
        $this->slug = $slug;
    }


    public function getEntradas() {
        $entradas = array();
        $consulta = "select * from entrada;";

        $resul = mysqli_query($this->$db, $consulta) or die("No se han podido consultar las empresa.");

        while ($row = mysqli_fetch_array($resul, MYSQLI_ASSOC)) {
            array_push($entradas, $row['id_empr']);
        }
        return $entradas;
    }



}

?>
