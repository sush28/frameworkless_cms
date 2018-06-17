<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Entrada | Two Door Cinema Club</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <header class="container-fluid c-header c-header--entrada align-items-center">
        <div class="row h-100 justify-content-center">
            <div class="col-md-6 h-100 c-cabecera-wrapper">
                <div class="c-cabecera">
                    <h1 class="titulo">Título entrada</h1>
                </div>
            </div>
        </div>
    </header>
    
    <?php include 'includes/nav-categorias.php'; ?>

    <div class="container c-entrada">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12 c-blog-contenido">
                        <div class="datos-post">
                            <div class="fecha"><span><?php echo $entrada->fecha; ?></span></div>
                            <div class="autor"><span>· Por</span> <a href=""><?php echo $entrada->id_usuario; ?></a></div>
                            <div class="categoria"><span><?php echo $entrada->tituloCategoria; ?></span></div>
                        </div>
                        <div>
                            <img class="img-fluid" src="almacenamiento/blog/<?php echo $entrada->imagen; ?>" />
                        </div>
                        <div class="contenido-post">
                            <?php echo $entrada->contenido; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container c-entrada-comentarios">
        <div class="row justify-content-center">
                <div class="col-md-6 c-comentarios-wrapper">
                    <div class="row">
                        <div class="col-md-12 c-comentarios">
                            <h2 class="titulo">Comentarios</h2>
                            <div class="c-comentario">
                                <div class="row comentario comentario-padre">
                                    <div class="col-md-12">
                                        <p class="comentador">Nombre usuario</p>
                                        <span class="fecha-hora">12-04-18 12:34</span>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="contenido-comentario">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    </div>
                                </div>
                                <div class="row comentario comentario-hijo">
                                    <div class="col-md-12">
                                        <p class="comentador">Nombre usuario</p>
                                        <span class="fecha-hora">12-04-18 12:34</span>
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
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

</body>
</html>