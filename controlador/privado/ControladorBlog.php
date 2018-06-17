<?php

include 'modelo/ModeloEntrada.php';
include 'modelo/ModeloCategoria.php';
include 'modelo/utilities.php';
include 'modelo/entrada.php';

/**
 * Class Blog
 */
class ControladorBlog { 

    // @todo Este controlador pone de acuerdo modelos y vistas... coge datos de los modelos y los muestra en las vistas...

    public function mostrarEntradas(){
        // @todo Usar esto en todos los métodos de todos los controladores que estan en PRIVADO.
        // if (!isset($user)) {
        //     die('No tienes acceso, por favor <a href="login.php">inicia sesión<a>.');
        // }

        // @todo coger datos desde el modelo y guardarlos en un array (para pasarlo a la vista)
        // El modelo esta en: /modelo/Blog.php
        $modeloEntrada = new ModeloEntrada();
        $modeloCategoria = new ModeloCategoria();

        // Este es un array guarrero...
        $entradas = $modeloEntrada->obtenerEntradas();
        $categorias = $modeloCategoria->obtenerCategorias();

        // @todo una vista...
        // La vista esta en: /vista/privado/Blog/listado.php

        include 'vista/privado/entradas.php';
        die();
    }

    public function crear() {
        $categoria = $_POST['categoria'];
        $titulo = $_POST['titulo'];
        $archivo = $_FILES['imagen'];
        $alt = $_POST['altimagen'];
        $contenido = $_POST['entrada'];
        $esPublico = "false";
        if (isset($_POST["publico"])) {
            if ($_POST["publico"] == "público") {
                $esPublico = "true";
            }
        }

        // @todo Useeeer!
        $entrada = new Entrada($titulo, $contenido, 1, $archivo["name"], $alt, fechaActual(), $esPublico, slugify($titulo), $categoria);

        $modeloEntrada = new ModeloEntrada();

        if (false !== $modeloEntrada->guardar($entrada)) {
            guardarImagen($archivo);
        }

        $this->mostrarEntradas();
    }

    public function modificar($id){

    }

    public function borrar($id){

    } 

    public function moderarComentarios($id){

    }
}
