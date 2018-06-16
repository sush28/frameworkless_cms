<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Entradas | Gestor de contenido</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container c-formulario c-formulario--entradas">
        <header class="header-cms">
            <div class="row">
                <div class="col-12">
                    <h1>Entradas</h1>
                </div>
            </div>
        </header>
        <div class="c-desplegable">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-desplegable" data-toggle="collapse" href="#creacionEntrada" role="button" aria-expanded="false" aria-controls="creacionEntrada">Crear entrada</a>
                    <div class="row">
                        <div class="col-12">
                            <div class="collapse multi-collapse" id="creacionEntrada">
                                <form action="crear-post.php" method="post" enctype="multipart/form-data">
                                    <h2 class="text-center">Crear post</h2>
                                    <div class="row">
                                        <div class="col-xs-12 mx-auto">
                                            <div class="form-group">
                                                <label for="categoria">Categoría</label>
                                                <select class="form-control" id="categoria">
                                                    <option value="">Categoría 1</option>
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
                                                <input class="form-check-input" type="checkbox" value="" id="publico">
                                                <label class="form-check-label" for="publico">Público</label>
                                            </div>
                                            <div class="form-group text-right">
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
    <div class="container c-listado c-listado--blog">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="c-listado-elemento entrada">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="fecha-post">12-3-18</div>
                            <div class="titulo-post">Blablabla</div>
                            <div class="desc-post">Post sobre cosas muy interesantes bla bla bla bla bla bala </div>
                        </div>
                        <div class="col-md-2">
                            <div class="modificar modificar-post">
                                <a href="modificar-entrada.php" data-toggle="modal" data-target="#modificarEntrada"><i class="far fa-edit"></i> Editar </a>
                            </div>
                            <div class="eliminar eliminar-post">
                                <a href="eliminar-entrada.php"><i class="far fa-trash-alt"></i> Borrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="c-listado-elemento entrada">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="titulo-post">Blablabla</div>
                            <div class="desc-post">Post sobre cosas muy interesantes bla bla bla bla bla bala </div>
                        </div>
                        <div class="col-md-2">
                            <div class="modificar modificar-post">
                                <a href="modificar-entrada.php" data-toggle="modal" data-target="#modificarEntrada"><i class="far fa-edit"></i> Editar </a>
                            </div>
                            <div class="eliminar eliminar-post">
                                <a href="eliminar-entrada.php"><i class="far fa-trash-alt"></i> Borrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="c-listado-elemento entrada">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="titulo-post">Blablabla</div>
                            <div class="desc-post">Post sobre cosas muy interesantes bla bla bla bla bla bala </div>
                        </div>
                        <div class="col-md-2">
                            <div class="modificar modificar-post">
                                <a href="modificar-entrada.php" data-toggle="modal" data-target="#modificarEntrada"><i class="far fa-edit"></i> Editar </a>
                            </div>
                            <div class="eliminar eliminar-post">
                                <a href="eliminar-entrada.php"><i class="far fa-trash-alt"></i> Borrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="c-listado-elemento entrada">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="titulo-post">Blablabla</div>
                            <div class="desc-post">Post sobre cosas muy interesantes bla bla bla bla bla bala </div>
                        </div>
                        <div class="col-md-2">
                            <div class="modificar modificar-post">
                                <a href="modificar-entrada.php" data-toggle="modal" data-target="#modificarEntrada"><i class="far fa-edit"></i> Editar </a>
                            </div>
                            <div class="eliminar eliminar-post">
                                <a href="eliminar-entrada.php"><i class="far fa-trash-alt"></i> Borrar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modificarEntrada" tabindex="-1" role="dialog" aria-labelledby="modificarEntradaLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="modificarEntradaLabel">Modificar entrada</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="form-container" class="container">
                    <form action="crear-post.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-xs-12 mx-auto">
                                <div class="form-group">
                                    <label for="modificar-categoria">Categoría</label>
                                    <select class="form-control" id="modificar-categoria">
                                        <option value="">Categoría 1</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="modificar-titulo">Título</label>
                                    <input class="form-control" type="text" name="titulo" id="modificar-titulo" required>
                                </div>
                                <div class="form-group">
                                    <label for="modificar-imagen">Imagen</label>
                                    <input class="form-control" type="file" name="imagen" id="modificar-imagen" required/>
                                    <small>El tamaño recomendado es de 900x300px.</small>
                                </div>
                                <div class="form-group">
                                    <label for="modificar-altimagen">Alt de la imagen</label>
                                    <input class="form-control" type="text" name="altimagen" id="modificar-altimagen"/>
                                    <small>Pequeña descripción que ayudará a las personas que no puedan ver la imagen o usen lector de pantalla.</small>

                                </div>
                                <div class="form-group">
                                    <label for="modificar-entrada">Entrada</label>
                                    <textarea class="form-control" name="entrada" id="modificar-entrada" required>                   
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <input class="form-check-input" type="checkbox" value="" id="modificar-publico">
                                    <label class="form-check-label" for="modificar-publico">Público</label>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit" name="submit">Crear</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

</body>
</html>