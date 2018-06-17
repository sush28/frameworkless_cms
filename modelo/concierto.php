<?php

class Concierto {
  
    public $id;
    public $fecha;
    public $arena;
    public $localizacion;
    public $disponibilidad;
    public $puntoventa;


    public function __construct($fecha, $arena, $localizacion, $disponibilidad, $puntoventa) {
        $this->fecha = $fecha;
        $this->arena = $arena;
        $this->localizacion = $localizacion;
        $this->disponibilidad = $disponibilidad;
        $this->puntoventa = $puntoventa;   
    }
}

?>