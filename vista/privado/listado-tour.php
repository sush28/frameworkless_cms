<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Tour | Gestor de contenido</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Desplegable --> 
    <div class="container c-formulario c-formulario--tour">
        <div class="header-cms">
            <div class="row">
                <div class="col-12">
                    <h1>Tour</h1>
                </div>
            </div>
        </div>
        <div class="c-desplegable">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-primary" data-toggle="collapse" href="#creacionTour" role="button" aria-expanded="false" aria-controls="creacionTour">Añadir tour</a>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="creacionTour">
                                <form action="crear-post.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="categoria">País</label>
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
                                        <label for="ciudad">Ciudad</label>
                                        <input class="form-control" type="text" name="ciudad" id="ciudad" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="disponibilidad">Disponibilidad</label>
                                        <select class="form-control" name="disponibilidad">
                                            <option value="disponibles">A la venta</option>
                                            <option value="vendidas">Vendidas</option>
                                            <option value="disponible">Próximamente</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="altimagen">Enlace con el punto de venta</label>
                                        <input class="form-control" type="text" name="altimagen" id="altimagen"/>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit" name="submit">Añadir fecha</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Listado --> 
    <div class="container c-tabla-cms c-tabla-cms--tour">
        <div class="conciertos">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Ciudad</th>
                        <th scope="col">País</th>
                        <th scope="col">Disponibilidad</th>
                        <th scope="col">Punto de venta</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="concierto">
                        <td>24/07/18</td>
                        <td>Madrid</td>
                        <td>España</td>
                        <td>A la venta</td>
                        <td>Enlace</td>
                        <td>
                            <a href="#" data-toggle="modal" data-target="#modificarConcierto"><i class="far fa-edit"></i> Editar </a>
                            <a href="eliminar-entrada.php"><i class="far fa-trash-alt"></i> Borrar</a>
                        </td>
                    </tr>
                    <tr class="concierto">
                        <td>24/07/18</td>
                        <td>Bcn</td>
                        <td>España</td>
                        <td>Vendidas</td>
                        <td>Enlace</td>
                        <td>
                            <a href="modificar-entrada.php"><i class="far fa-edit"></i> Editar </a>
                            <a href="eliminar-entrada.php"><i class="far fa-trash-alt"></i> Borrar</a>
                        </td>
                    </tr>
                    <tr class="concierto">
                        <td>24/07/18</td>
                        <td>Kentucky</td>
                        <td>España</td>
                        <td>A la venta</td>
                        <td>Enlace</td>
                        <td>
                            <a href="modificar-entrada.php"><i class="far fa-edit"></i> Editar </a>
                            <a href="eliminar-entrada.php"><i class="far fa-trash-alt"></i> Borrar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <!-- Modal --> 
    <div class="modal fade" id="modificarConcierto" tabindex="-1" role="dialog" aria-labelledby="modificarConciertoLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modificarConciertoLabel">Modificar concierto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="form-container" class="container">
                    <form action="crear-post.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="categoria">País</label>
                            <select class="form-control" name="categoria">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <input class="form-control" type="text" name="ciudad" id="ciudad" required>
                        </div>
                        <div class="form-group">
                            <label for="disponibilidad">Disponibilidad</label>
                            <select class="form-control" name="disponibilidad">
                                <option value="disponibles">A la venta</option>
                                <option value="vendidas">Vendidas</option>
                                <option value="disponible">Próximamente</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="altimagen">Enlace con el punto de venta</label>
                            <input class="form-control" type="text" name="altimagen" id="altimagen"/>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-enviar" type="submit" name="submit">Añadir fecha</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Modificar</button>
            </div>
            </div>
        </div>
    </div>


    <?php include 'includes/footer.php'; ?>

</body>
</html>