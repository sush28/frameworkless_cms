<?php

class Concierto {
  
    public $id;
    public $fecha;
    public $arena;
    public $ciudad;
    public $disponibilidad;
    public $puntoventa;


    public function __construct($id, $fecha, $arena, $ciudad, $disponibilidad, $puntoventa) {

        $this->id = $id;
        $this->fecha = $fecha;
        $this->arena = $arena;
        $this->ciudad = $ciudad;
        $this->disponibilidad = $disponibilidad;
        $this->puntoventa = $puntoventa;   
    }

}

?>