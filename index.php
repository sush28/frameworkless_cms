<?php
// enlace http://192.168.64.2/www/tfg-2018/index.php?apartado=publico&controlador=home&accion=index

if (isset($_GET['apartado'])) {
    $apartado = $_GET['apartado'];
} else {
    $apartado = 'publico';
}

if (isset($_GET['controlador'])) {
    $controlador = $_GET['controlador'];
} else {
    $controlador = 'home';
}
$controlador = 'Controlador' . ucfirst($controlador);

if (isset($_GET['accion'])) {
    $accion = $_GET['accion'];
} else {
    $accion = 'index';
}

include 'controlador/' . $apartado . '/' . $controlador . '.php';

$controlador = new $controlador();

$controlador->$accion();
?>
