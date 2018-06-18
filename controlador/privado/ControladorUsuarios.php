<?php

include_once 'modelo/ModeloUsuario.php';
include_once 'modelo/usuario.php';
include_once 'modelo/utilities.php';


class ControladorUsuarios{

    private $modeloUsuario;

    public function __construct() {
        $this->modeloUsuario = new ModeloUsuario();
    }

    public function mostrarUsuarios(){

        $usuarios = $this->modeloUsuario->obtenerUsuarios();

        include 'vista/privado/usuarios.php';
        die();
    }

    public function crear(){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $rol = $_POST['rol'];
        $autor = $_POST['autor'];

        $usuario = new Usuario($user, $pass, $rol, $autor);

        $this->modeloUsuario->guardar($usuario);

        $this->mostrarUsuarios();
    }

    public function obtenerUsuarioComoJSON(){
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
        $user = $_POST['id-usuario'];
        $pass = $_POST['modificar-pass'];
        $rol = $_POST['modificar-rol'];
        $autor = $_POST['modificar-autor'];

        $usuario = new Usuario($user, $pass, $rol, $autor);
        $entrada->id = $id;

        $this->modeloUsuario->modificar($usuario);

        $this->mostrarUsuarios();

    }

    public function borrar(){
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            die('Operación no permitida, falta el ID del usuario a eliminar.');
        }

        $this->modeloUsuario->borrar($id);

        $this->mostrarUsuarios();
    }

 

}