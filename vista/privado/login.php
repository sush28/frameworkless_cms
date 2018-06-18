<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Gestor de contenido | Two Door Cinema Club</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles-cms.css">


    <?php
    /*
    session_start();


    if (isset($_POST["login"])) {
        $user = "laura";
        $pass = "miPass";


        if ($_POST["user"] == $user && $_POST["pass"] == $pass) {
            // El login es correcto
            $_SESSION["login"] = true;
            $_SESSION["username"] = "Francisco";

            // Redirecciona a gestion...
            header('Location: gestion.php');
        } else {
            die('Usuario y/o contraseña incorrecto/s');
        }
    }

*/
?>

</head>
<body>
    <div class="container-fluid c-login">
        <div class="row">
            <header class="col-12">
                <h1 class="text-center p-4">Gestor de contenidos</h1>
            </header>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mx-auto mt-4">
                <form action="index.php?apartado=privado&controlador=login&accion=autenticar" method="post" enctype="multipart/form-data" class="formulario">
                    <h2 class="text-center">Inicia sesión</h2>
                    <?php
                        // if(isset($mensajeLogin)) {
                        //     ?><h3><?php echo $mensajeLogin; ?></h3><?php
                        // }
                    ?>
                    <hr>
                    <div class="form-group">
                        <label for="usuario">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="user" required>
                    </div>
                    <div class="form-group">
                        <label for="contra">Contraseña</label>
                        <input type="password" class="form-control" id="contra" name="pass" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="login">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        
    </script>
</body>
</html>