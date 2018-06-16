<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Usuarios | Gestor de contenido</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>
        
    <div class="container c-formulario c-formulario--usuarios">
        <header class="header-cms">
            <div class="row">
                <div class="col-12">
                    <h1>Administración de usuarios</h1>
                </div>
            </div>
        </header>
        <div class="c-desplegable">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <a class="btn btn-desplegable" data-toggle="collapse" href="#creacionUsuario" role="button" aria-expanded="false" aria-controls="creacionUsuario">Añadir usuario</a>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="creacionUsuario">
                                <form action="crear-post.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="nombre">Usuario</label>
                                        <input class="form-control" type="text" name="nombre" id="nombre" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass">Contraseña</label>
                                        <input class="form-control" type="password" name="nombre" id="pass" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm-pass">Repita la contraseña</label>
                                        <input class="form-control" type="password" name="nombre" id="confirm-pass" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="rol">Rol</label>
                                        <select class="form-control" name="rol" id="rol">
                                            <option value="admin">Administrador</option>
                                            <option value="usuario">Usuario</option>
                                        </select>
                                    </div>
                                    <div class="form-group text-right">
                                        <button class="btn btn-cms" type="submit" name="submit">Crear usuario</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container c-listado c-listado--usuarios">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="c-listado-elemento usuario">   
                    <div class="row">
                        <div class="col-10">
                            <div class="nombre-user">Two Door Cinema Club</div>
                            <div class="rol-user">Admin</div>
                        </div>
                        <div class="col-2">
                            <div class="modificar modificar-post">
                                <a href="#" data-toggle="modal" data-target="#modificarCategoria"><i class="far fa-edit"></i> Editar </a>
                            </div>
                            <div class="eliminar eliminar-post">
                                <a href="eliminar-entrada.php"><i class="far fa-trash-alt"></i> Borrar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-listado-elemento usuario">   
                    <div class="row">
                        <div class="col-10">
                            <div class="nombre-user">Sam Pérez</div>
                            <div class="rol-user">User</div>
                        </div>
                        <div class="col-2">
                            <div class="modificar modificar-post">
                                <a href="#" data-toggle="modal" data-target="#modificarCategoria"><i class="far fa-edit"></i> Editar</a>
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

    <div class="modal fade" id="modificarCategoria" tabindex="-1" role="dialog" aria-labelledby="modificarCategoriaLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="modificarCategoriaLabel">Modificar usuario</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="form-container" class="container">
                <form action="crear-post.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="modificar-nombre">Usuario</label>
                            <input class="form-control" type="text" name="nombre" id="modificar-nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="modificar-pass">Contraseña</label>
                            <input class="form-control" type="text" name="nombre" id="modificar-pass" required>
                        </div>
                        <div class="form-group">
                            <label for="modificar-confirm-pass">Repita la contraseña</label>
                            <input class="form-control" type="text" name="nombre" id="modificar-confirm-pass" required>
                        </div>
                        <div class="form-group">
                            <label for="modificar-rol">Rol</label>
                            <select class="form-control" name="rol" id="modificar-rol">
                                <option value="admin">Administrador</option>
                                <option value="usuario">Usuario</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-cms" type="submit" name="submit">Modificar usuario</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

</body>
</html>