<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Zona fan | Two Door Cinema Club</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container">
        <div class="c-desplegable">
            <div class="row">
                <div class="col-md-12">
                    <a class="btn btn-desplegable" data-toggle="collapse" href="#creacionEntrada" role="button" aria-expanded="false" aria-controls="creacionEntrada">Sube tu contenido</a>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="creacionEntrada">
                                <form action="crear-post.php" method="post" enctype="multipart/form-data">
                                    <h2 class="text-center">Elige entre imagen o texto.</h2>
                                    <div class="row">
                                        <div class="col-xs-12 mx-auto">
                                            <div class="form-group">
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="radioTexto" name="radioTexto" class="custom-control-input">
                                                    <label class="custom-control-label" for="radioTexto">Texto</label>
                                                </div>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" id="radioImagen" name="radioImagen" class="custom-control-input">
                                                    <label class="custom-control-label" for="radioImagen">Imagen</label>
                                                </div>
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
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="grid">
                    <div class="grid-sizer"></div>
                    <div class="grid-item">
                        <div class="image-wrapper">
                            <a href="../../assets/images/zona-fan/fan1.jpg" data-lightbox="zona-fan">
                                <img class="img-fluid" src="../../assets/images/zona-fan/fan1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="image-wrapper">
                            <a href="../../assets/images/zona-fan/fan2.jpg" data-lightbox="zona-fan">
                                <img class="img-fluid" src="../../assets/images/zona-fan/fan2.jpg" alt="">
                            </a>                        
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="image-wrapper">
                            <a href="../../assets/images/zona-fan/fan3.jpg" data-lightbox="zona-fan">
                                <img class="img-fluid" src="../../assets/images/zona-fan/fan3.jpg" alt="">
                            </a>                        
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="image-wrapper">
                            <a href="../../assets/images/zona-fan/fan4.jpg" data-lightbox="zona-fan">
                                <img class="img-fluid" src="../../assets/images/zona-fan/fan4.jpg" alt="">
                            </a>                        
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="image-wrapper">
                            <a href="../../assets/images/zona-fan/fan1.jpg" data-lightbox="zona-fan">
                                <img class="img-fluid" src="../../assets/images/zona-fan/fan1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="image-wrapper">
                            <a href="../../assets/images/zona-fan/fan2.jpg" data-lightbox="zona-fan">
                                <img class="img-fluid" src="../../assets/images/zona-fan/fan2.jpg" alt="">
                            </a>                        
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="image-wrapper">
                            <a href="../../assets/images/zona-fan/fan3.jpg" data-lightbox="zona-fan">
                                <img class="img-fluid" src="../../assets/images/zona-fan/fan3.jpg" alt="">
                            </a>                        
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="image-wrapper">
                            <a href="../../assets/images/zona-fan/fan4.jpg" data-lightbox="zona-fan">
                                <img class="img-fluid" src="../../assets/images/zona-fan/fan4.jpg" alt="">
                            </a>                        
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="image-wrapper">
                            <a href=".texto" data-lightbox="zona-fan">
                                <p class="texto">Hola me gustan mucho las patatas fritas y las aceitunas</p>
                            </a>                        
                        </div>
                    </div>
                    
                    <div class="grid-item grid-item--width2"></div>
                </div>
            </div> 
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>