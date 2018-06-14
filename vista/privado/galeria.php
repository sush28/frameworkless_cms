<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Galería | Gestor de contenido</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <div class="container c-formulario c-formulario--categoria">
        <div class="header-cms">
            <div class="row">
                <div class="col-12">
                    <h1>Galería</h1>
                </div>
            </div>
        </div>
        <div class="c-desplegable">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-desplegable" data-toggle="collapse" href="#creacionEntrada" role="button" aria-expanded="false" aria-controls="creacionEntrada">Añadir imagen</a>
                    <div class="row">
                        <div class="col-12">
                            <div class="collapse multi-collapse" id="creacionEntrada">
                                <form action="crear-post.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-xs-12 mx-auto">
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
                                                <button class="btn btn-cms" type="submit" name="submit">Crear</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>