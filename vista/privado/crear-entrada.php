<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Crear entrada | Gestor de contenido</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-s-12 col-md-10 mx-auto mt-4">
                <a href="listado-entradas.php" class="confirmacion"><i class="fas fa-arrow-alt-circle-left pl-3"></i> Volver a posts</a>

                <div id="form-container" class="container">
                    <form action="crear-post.php" method="post" enctype="multipart/form-data">
                     <h2 class="text-center">Crear post</h2>
                     <div class="row">
                        <div class="col-xs-12 mx-auto">
                            <div class="form-group">
                                <label for="categoria">Categoría</label>
                                <select class="form-control" name="categoria">
                                    <?php
                                    $resultado = mysqli_query($con, "SELECT * FROM categoria");
                                    while ($categoria = mysqli_fetch_array(
                                        $resultado,
                                        MYSQLI_ASSOC
                                    )) {
                                        ?><option value="<?= $categoria["idcategoria"] ?>"><?= $categoria["nombre"] ?></option><?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="titulo">Título</label>
                                <input class="form-control" type="text" name="titulo" id="titulo" required>
                            </div>
                            <div class="form-group">
                                <label for="imagen">Imagen</label>
                                <input class="form-control" type="file" name="imagen" id="imagen" required/>
                                <small>El tamaño recomendado es de 900x300px.</small>
                            </div>
                            <div class="form-group">
                                <label for="altimagen">Alt de la imagen</label>
                                <input class="form-control" type="text" name="altimagen" id="altimagen"/>
                                <small>Pequeña descripción que ayudará a las personas que no puedan ver la imagen o usen lector de pantalla.</small>

                            </div>
                            <div class="form-group">
                                <label for="entrada">Entrada</label>
                                <textarea class="form-control" name="entrada" id="entrada" required>                   
                                </textarea>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="publico" value="público"> Público<br>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" name="submit">Crear</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
