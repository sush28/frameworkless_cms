<?php

include_once 'modelo/ModeloUsuario.php';

class ControladorLogin {

    private $modeloUsuario;

    public function __construct() {
        $this->modeloUsuario = new ModeloUsuario();
    }

    public function login($mensajeLogin = null) {
        include 'vista/privado/login.php';
        die();
    }

    public function autenticar() {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $logeado = $this->modeloUsuario->login($user, $pass);

        if ($logeado === null) {
            $this->login("Usuario o contraseña incorrectas.");
        } else {
            $_SESSION['user'] = $logeado['user'];
            $_SESSION['pass'] = $logeado['pass'];
            $_SESSION['rol'] = $logeado['rol'];
            $_SESSION['autor'] = $logeado['autor'];

            header("Location: index.php?apartado=privado&controlador=blog&accion=mostrarEntradas");
            die;
        }
    }


    public function logeado() {
        if (isset($_SESSION['user'])) {
            return true;
        } else {
            return false;
        }
    }

    public function cerrarSesion() {
        unset($_SESSION['user']);
        unset($_SESSION['pass']);
        unset($_SESSION['rol']);
        unset($_SESSION['autor']);

        header("Location: index.php?apartado=privado&controlador=login&accion=login");
        die;
    }
}