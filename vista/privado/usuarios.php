<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Usuarios | Gestor de contenido</title>
</head>
<body id="usuarios">
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
                                <form action="index.php?apartado=privado&controlador=usuarios&accion=crear" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="user">Usuario</label>
                                        <input class="form-control" type="text" name="user" id="user" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass">Contraseña</label>
                                        <input class="form-control" type="password" name="pass" id="pass" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm-pass">Repita la contraseña</label>
                                        <input class="form-control" type="password" name="confirm-pass" id="confirm-pass" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="rol">Rol</label>
                                        <select class="form-control" name="rol" id="rol">
                                            <option value="admin">Administrador</option>
                                            <option value="usuario">Usuario</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="autor">Nombre de autor del blog</label>
                                        <input class="form-control" type="text" name="autor" id="autor" required>
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
            <div class="col-md-9 col-lg-7">
            <?php
            foreach ($usuarios as $key => $usuario) {
                ?>
                <div class="c-listado-elemento usuario">   
                    <div class="row">
                        <div class="col-md-9 p-1">
                            <div class="nombre-user h5"><?php echo $usuario->user; ?></div>
                            <div class="rol-user"><strong>Rol:</strong> <?php echo $usuario->rol; ?></div>
                            <div class="autor-user"><strong>Nombre de autor:</strong> <?php echo $usuario->autor; ?></div>
                        </div>
                        <div class="col-md-3 p-1">
                            <div class="modificar modificar-post">
                                <a href="index.php?apartado=privado&controlador=usuarios&accion=obtenerUsuarioComoJSON&id=<?php echo $usuario->id; ?>" data-toggle="modal" data-target="#modificarCategoria" class="boton-modificar"><i class="far fa-edit"></i> Editar </a>
                            </div>
                            <div class="eliminar eliminar-post">
                                <a href="index.php?apartado=privado&controlador=usuarios&accion=borrar&id=<?php echo $usuario->id; ?>" class="boton-eliminar"><i class="far fa-trash-alt"></i> Borrar</a>
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

    <div class="modal fade" id="modificarUsuario" tabindex="-1" role="dialog" aria-labelledby="modificarUsuarioLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="modificarUsuarioLabel">Modificar usuario</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="form-container" class="container">
                        <form action="index.php?apartado=privado&controlador=usuarios&accion=modificar" method="post" enctype="multipart/form-data" id="form-modificar">
                            <input type="hidden" id="id-usuario" name="id-usuario" />
                            <div class="form-group">
                                <label for="modificar-user">Usuario</label>
                                <input class="form-control" type="text" name="modificar-user" id="modificar-user" required>
                            </div>
                            <div class="form-group">
                                <label for="modificar-pass">Contraseña</label>
                                <input class="form-control" type="pass" name="modificar-pass" id="modificar-pass" required>
                            </div>
                            <div class="form-group">
                                <label for="modificar-confirm-pass">Repita la contraseña</label>
                                <input class="form-control" type="pass" name="modificar-confirm-pass" id="modificar-confirm-pass" required>
                            </div>
                            <div class="form-group">
                                <label for="modificar-rol">Rol</label>
                                <select class="form-control" name="modificar-rol" id="modificar-rol">
                                    <option value="admin">Administrador</option>
                                    <option value="usuario">Usuario</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="modificar-autor">Nombre de autor del blog</label>
                                <input class="form-control" type="text" name="modificar-autor" id="modificar-autor" required>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary boton-cerrar" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="submit-modificar">Modificar entrada</button>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

</body>
</html>