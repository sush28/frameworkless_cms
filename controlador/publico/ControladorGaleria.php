<?php

include 'modelo/ModeloGaleria.php';
include 'modelo/galeria.php';
include 'modelo/utilities.php';

class ControladorGaleria {

    public function mostrarGaleria() {

        $modeloGaleria = new ModeloGaleria();

        $imagenes = $modeloGaleria->obtenerImagenes();

        include 'vista/publico/galeria.php';
        die();
    }

}



