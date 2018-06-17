<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Blog | Two Door Cinema Club</title>
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <header class="container-fluid c-header c-header--blog align-items-center">
        <div class="row h-100">
            <div class="col-12 h-100 c-cabecera-wrapper">
                <div class="c-cabecera justify-content-center h-100">
                    <h1 class="titulo text-center">Blog</h1>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light" id="MenuCategorias">
      <div class="container">
           <ul class="navbar-nav mx-auto list-inline">
            <li class="nav-item list-inline-item">
                <a class="nav-link" href="#">Noticias</a>
            </li>
            <li class="nav-item list-inline-item">
              <a class="nav-link" href="#">Conciertos</a>
            </li>
            <li class="nav-item list-inline-item">
              <a class="nav-link" href="#">Lanzamientos</a>
            </li>
            <li class="nav-item list-inline-item">
              <a class="nav-link" href="#">Eventos</a>
            </li>
            <li class="nav-item list-inline-item">
              <a class="nav-link" href="#">Personal</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <section class="container c-blog">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                <?php
                foreach ($entradas as $key => $entrada) {
                ?>
                    <article class="col-md-12 col-lg-4 c-blog-post">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 col-lg-12 c-blog-imagen">
                                <img src="almacenamiento/blog/<?php echo $entrada->imagen; ?>" alt="" class="img-fluid">
                            </div>
                            <div class="col-sm-12 col-md-8 col-lg-12 c-blog-contenido">
                                <div class="categoria"><i class="fas fa-bullseye"></i><?php echo $entrada->tituloCategoria; ?></div>
                                <div class="titulo"><a href=""><?php echo $entrada->titulo; ?></a></div>
                                <div class="contenido"><?php echo substr($entrada->contenido, 0, 300); ?></div>
                            </div>
                        </div> 
                    </article>
                <?php
                }
                ?>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>

<!--
    http://via.placeholder.com/360x200
    -->