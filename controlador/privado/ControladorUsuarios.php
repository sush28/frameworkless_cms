<?php

include_once 'modelo/ModeloUsuario.php';
include_once 'modelo/usuario.php';
include_once 'modelo/utilities.php';
include_once 'controlador/privado/ControladorLogin.php';


class ControladorUsuarios{

    private $modeloUsuario;
    private $controladorLogin;

    public function __construct() {
        $this->modeloUsuario = new ModeloUsuario();
        $this->controladorLogin = new ControladorLogin();
    }

    public function mostrarUsuarios(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para mostrar usuarios, por favor inicia sesión.');
        } else {
            if ($_SESSION['rol'] !== 'admin') {
                $this->controladorLogin->login('No tienes permisos para mostrar usuarios, por favor inicia sesión.');
            }
        }

        $usuarios = $this->modeloUsuario->obtenerUsuarios();

        include 'vista/privado/usuarios.php';
        die();
    }

    public function crear(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para crear usuarios, por favor inicia sesión.');
        }

        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $rol = $_POST['rol'];
        $autor = $_POST['autor'];

        $usuario = new Usuario($user, $pass, $rol, $autor);

        $this->modeloUsuario->guardar($usuario);

        $this->mostrarUsuarios();
    }

    public function obtenerUsuarioComoJSON(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para obtener usuarios, por favor inicia sesión.');
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            die('Operación no permitida, falta el Id del usuario a modificar.');
        }

        $usuario = $this->modeloUsuario->obtenerUsuario($id);

        header('Content-Type: application/json');
        print_r(json_encode($usuario)); die;
    }
    
    public function modificar(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para modificar usuarios, por favor inicia sesión.');
        }

        $id = $_POST['id-usuario'];
        $user = $_POST['modificar-user'];
        $pass = $_POST['modificar-pass'];
        $rol = $_POST['modificar-rol'];
        $autor = $_POST['modificar-autor'];

        $usuario = new Usuario($user, $pass, $rol, $autor);
        $usuario->id = $id;

        $this->modeloUsuario->modificar($usuario);

        $this->mostrarUsuarios();

    }

    public function borrar(){
        if (!$this->controladorLogin->logeado()) {
            $this->controladorLogin->login('No tienes acceso para borrar usuarios, por favor inicia sesión.');
        }

        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            die('Operación no permitida, falta el ID del usuario a eliminar.');
        }

        $this->modeloUsuario->borrar($id);

        $this->mostrarUsuarios();
    }
 

}