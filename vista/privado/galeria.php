<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Galería | Gestor de contenido</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <div class="container c-formulario c-formulario--categoria">
        <header class="header-cms">
            <div class="row">
                <div class="col-12">
                    <h1>Galería</h1>
                </div>
            </div>
        </header>
        <div class="c-desplegable">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-desplegable" data-toggle="collapse" href="#creacionImagen" role="button" aria-expanded="false" aria-controls="creacionImagen">Añadir imagen</a>
                    <div class="row">
                        <div class="col-12">
                            <div class="collapse multi-collapse" id="creacionImagen">
                                <form action="index.php?apartado=privado&controlador=galeria&accion=crear" method="post" enctype="multipart/form-data">
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
                                            <div class="form-group text-right">
                                                <button class="btn btn-cms" type="submit" name="submit">Añadir imagen</button>
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

    <section class="container c-galeria">
        <div class="row text-center text-lg-left">
        <?php
        foreach ($imagenes as $key => $imagen) {
            ?>
            <div class="col-lg-3 col-md-4 col-xs-6 c-galeria-item">
                <div class="col-12 imagen">
                    <img class="img-fluid" src="almacenamiento/galeria/<?php echo $imagen['imagen']; ?>" alt="<?php echo $imagen['altimagen']; ?>">
                </div>
                <div class="col-12">
                    <div class="borrar">
                        <a href="eliminar-entrada.php"><i class="far fa-trash-alt"></i> Borrar</a>     
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </section>



    <?php include 'includes/footer.php'; ?>
</body>
</html>