<?php

$apartado    = $_GET['apartado'];
$controlador = 'Controlador' . $_GET['controlador'];
$accion      = $_GET['accion'];

// http://192.168.64.2/www/tfg-2018/?apartado=privado&controlador=Blog&accion=listado
// http://laura.lh/?apartado=privado&controlador=Blog&accion=listado

include 'controlador/' . $apartado . '/' . $controlador . '.php';

$controlador = new $controlador();

$controlador->$accion();

?>
