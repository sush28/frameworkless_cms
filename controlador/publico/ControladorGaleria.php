<?php

include_once 'modelo/ModeloGaleria.php';
include_once 'modelo/galeria.php';
include_once 'modelo/utilities.php';

class ControladorGaleria {

    public function mostrarGaleria() {

        $modeloGaleria = new ModeloGaleria();

        $imagenes = $modeloGaleria->obtenerImagenes();

        include 'vista/publico/galeria.php';
        die();
    }

}



