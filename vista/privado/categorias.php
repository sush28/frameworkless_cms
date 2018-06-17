<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Categorías | Gestor de contenido</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>
        
    <div class="container c-formulario c-formulario--categoria">
        <header class="header-cms">
            <div class="row">
                <div class="col-12">
                    <h1>Categorías</h1>
                </div>
            </div>
        </header>
        <div class="c-desplegable">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <a class="btn btn-desplegable" data-toggle="collapse" href="#creacionCategoria" role="button" aria-expanded="false" aria-controls="creacionCategoria">Añadir categoría</a>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="creacionCategoria">
                                <form action="index.php?apartado=privado&controlador=categorias&accion=crear" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nombre">Nombre</label>
                                        <input class="form-control" type="text" name="nombre" id="nombre" required>
                                    </div>
                                    <div class="form-group text-right">
                                        <button class="btn btn-cms" type="submit" name="submit">Crear categoría</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container c-listado c-listado--categorias">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php
                    foreach($categorias as $key => $categoria) {
                ?>
                <div class="c-listado-elemento categoria">   
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <div class="titulo-cat"><?php echo $categoria['nombre'];?> </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="modificar modificar-post">
                                <a href="#" data-toggle="modal" data-target="#modificarCategoria"><i class="far fa-edit"></i> Editar </a>
                            </div>
                            <div class="eliminar eliminar-post">
                                <a href="eliminar-entrada.php"><i class="far fa-trash-alt"></i> Borrar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modificarCategoria" tabindex="-1" role="dialog" aria-labelledby="modificarCategoriaLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="modificarCategoriaLabel">Modificar entrada</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="form-container" class="container">
                        <form action="index.php?apartado=privado&controlador=categorias&accion=modificar" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="modificar-nombre">Nombre</label>
                                <input class="form-control" type="text" name="modificar-nombre" id="modificar-nombre" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit" name="submit">Modificar categoría</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Modificar categoría</button>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

</body>
</html>