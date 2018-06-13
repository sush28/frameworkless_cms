<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Entrada</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container-fluid c-header">
        <div class="row">
            <div class="col-12">
                <div class="c-cabecera">
                    <p class="titulo">Blog</p>
                </div>
            </div>
        </div>
    </div>

   <div class="container c-entrada">
        <div class="row">
            <!-- Bloque principal -->
            <div class="col-md-8">
                <div class="c-entrada-wrapper">
                    <div class="row">
                        <div class="col-md-12 c-blog-contenido">
                            <div class="c-blog-contenido-wrapper">
                                <div class="titulo-post">
                                    <h1>Nuevos conciertos anunciados</h1></div>
                                <div class="c-blog-imagen">
                                    <img src="" alt="">
                                </div>
                                <div class="datos-post">
                                    <div class="fecha">23 mayo 2012</div>
                                    <div class="autor"><a href="">Artista</a></div>
                                    <div class="categoria">Tour</div>  
                                </div>
                                <div class="desc-post"><p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. o sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos.</p></div>
                            </div>  
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12 c-blog-comentarios">
                            <div class="comentario">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="comentador">Nombre usuario</p>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="contenido-comentario">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Sidebar del blog -->
            <div class="col-md-4">
                <div class="c-blog-sidebar">
                    <div class="categorias">
                        <div class="row">
                            <div class="col-md-12 cat-titulo"><p>Categorías</p></div>
                            <div class="col-md-12 cat-listado">
                                <ul class="list-unstyled">
                                    <li class="cat"><a href="">Categoría</a></li>
                                    <li class="cat"><a href="">Categoría</a></li>
                                    <li class="cat"><a href="">Categoría</a></li>
                                    <li class="cat"><a href="">Categoría</a></li>
                                </ul>
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