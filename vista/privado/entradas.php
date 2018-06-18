<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Entradas | Gestor de contenido</title>
</head>
<body id="entradas">
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
                                <form action="index.php?apartado=privado&controlador=blog&accion=crear" method="post" enctype="multipart/form-data">
                                    <h2 class="text-center">Crear post</h2>
                                    <div class="row">
                                        <div class="col-xs-12 mx-auto">
                                            <div class="form-group">
                                                <label for="categoria">Categoría</label>
                                                <select class="form-control" id="categoria" name="categoria">
                                                    <?php
                                                        foreach($categorias as $key => $categoria) {
                                                            ?>
                                                                <option value="<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></option>
                                                            <?php
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
                                            <div class="form-group text-right">
                                                <input class="form-check-input" type="checkbox" value="publico" id="publico" name="publico">
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
    <?php
        foreach ($entradas as $key => $entrada) {
            ?>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="c-listado-elemento entrada">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="fecha-post"><?php echo $entrada->fecha; ?></div>
                                <div class="titulo-post"><?php echo $entrada->titulo; ?></div>
                                <div class="desc-post"><?php echo substr($entrada->contenido, 0, 200);?></div>
                            </div>
                            <div class="col-md-2">
                                <div class="moderar moderar-comentarios">
                                    <a href="#moderarComentarios<?php echo $entrada->id; ?>" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="moderarComentarios-<?php echo $entrada->id; ?>" class="boton-moderar"><i class="far fa-comment" aria-hidden="true"></i> Moderar</a>
                                </div>
                                <div class="modificar modificar-post">
                                    <a href="index.php?apartado=privado&controlador=blog&accion=obtenerEntradaComoJSON&id=<?php echo $entrada->id; ?>" data-toggle="modal" data-target="#modificarEntrada" class="boton-modificar"><i class="far fa-edit" aria-hidden="true"></i> Editar</a>
                                </div>
                                <div class="eliminar eliminar-post">
                                    <a href="index.php?apartado=privado&controlador=blog&accion=borrar&id=<?php echo $entrada->id; ?>" class="boton-eliminar"><i class="far fa-trash-alt" aria-hidden="true"></i> Borrar</a>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-end pt-5 c-moderacion-comentarios">
                            <div class="col-md-11">
                                <div class="collapse multi-collapse moderar-comentarios" id="moderarComentarios<?php echo $entrada->id; ?>">
                                    <div class="c-comentario">
                                        <div class="row comentario comentario-padre justify-content-end">
                                            <div class="col-md-10">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p class="comentador"><strong>Nombre usuario</strong></p>
                                                        <span class="fecha-hora">12-04-18 12:34</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p class="contenido-comentario">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="row">
                                                    <div class="eliminar eliminar-comentario">
                                                        <a href="index.php?apartado=privado&controlador=blog&accion=responderComentario&id=<?php echo $id; ?>&id_comentario=<?php echo $comentario['objeto']->id; ?>" class="boton-eliminar"><i class="far fa-trash-alt" aria-hidden="true"></i> Eliminar</a>
                                                    </div>
                                                    <div class="validar validar-comentario">
                                                        <form action="index.php?apartado=privado&controlador=blog&accion=crear" method="post">
                                                            <div class="form-group text-center">
                                                                <input class="form-check-input" type="checkbox" value="publico" id="publico" name="publico">
                                                                <label class="form-check-label" for="publico">Público</label>
                                                            </div>
                                                        </form>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row comentario comentario-hijo justify-content-end">
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p class="comentador"><strong>Nombre usuario</strong></p>
                                                        <span class="fecha-hora">12-04-18 12:34</span>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <p class="contenido-comentario">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="row">
                                                    <div class="eliminar eliminar-comentario">
                                                        <a href="index.php?apartado=privado&controlador=blog&accion=responderComentario&id=<?php echo $id; ?>&id_comentario=<?php echo $comentario['objeto']->id; ?>" class="boton-eliminar"><i class="far fa-trash-alt" aria-hidden="true"></i> Eliminar</a>
                                                    </div>
                                                    <div class="validar validar-comentario">
                                                        <form action="index.php?apartado=privado&controlador=blog&accion=crear" method="post">
                                                            <div class="form-group text-center">
                                                                <input class="form-check-input" type="checkbox" value="publico" id="publico" name="publico">
                                                                <label class="form-check-label" for="publico">Público</label>
                                                            </div>
                                                        </form>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    ?>
    </div>

    <div class="modal fade" id="modificarEntrada" tabindex="-1" role="dialog" aria-labelledby="modificarEntradaLabel" aria-hidden="true" data-backdrop="static">
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
                        <form action="index.php?apartado=privado&controlador=blog&accion=modificar" method="post" enctype="multipart/form-data" id="form-modificar">
                            <input type="hidden" id="id-entrada" name="id-entrada" />
                            <div class="row">
                                <div class="col-xs-12 mx-auto">
                                    <div class="form-group">
                                        <label for="modificar-categoria">Categoría</label>
                                        <select class="form-control" id="modificar-categoria" name="modificar-categoria">
                                            <?php
                                                foreach($categorias as $key => $categoria) {
                                                    ?>
                                                        <option value="<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="modificar-titulo">Título</label>
                                        <input class="form-control" type="text" name="modificar-titulo" id="modificar-titulo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="modificar-imagen">Imagen</label>
                                        <input class="form-control" type="file" name="modificar-imagen" id="modificar-imagen" required/>
                                        <small>El tamaño recomendado es de 900x300px.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="modificar-altimagen">Alt de la imagen</label>
                                        <input class="form-control" type="text" name="modificar-altimagen" id="modificar-altimagen"/>
                                        <small>Pequeña descripción que ayudará a las personas que no puedan ver la imagen o usen lector de pantalla.</small>

                                    </div>
                                    <div class="form-group">
                                        <label for="modificar-entrada">Entrada</label>
                                        <textarea class="form-control" name="modificar-entrada" id="modificar-entrada" required>                   
                                        </textarea>
                                    </div>
                                    <div class="form-group text-right">
                                        <input class="form-check-input" type="checkbox" value="publico" id="modificar-publico">
                                        <label class="form-check-label" for="modificar-publico">Público</label>
                                    </div>
                                </div>
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