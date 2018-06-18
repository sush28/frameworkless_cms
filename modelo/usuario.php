<?php

class Usuario {
  
    public $id;
    public $user;
    public $pass;
    public $rol;
    public $autor;

    public function __construct($user, $pass, $rol, $autor) {
        $this->user = $user;
        $this->pass = $pass;
        $this->rol = $rol;
        $this->autor = $autor;
    }
}