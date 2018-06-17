<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Galería | Two Door Cinema Club</title>
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <header class="container-fluid c-header c-header--galeria align-items-center">
        <div class="row h-100">
            <div class="col-12 h-100 c-cabecera-wrapper">
                <div class="c-cabecera justify-content-center h-100">
                    <h1 class="titulo text-center">Galería</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="container c-galeria">
        <div class="row text-center text-lg-left">
        <?php
        foreach ($imagenes as $key => $imagen) {
            ?>
            <div class="col-lg-3 col-md-4 col-xs-6 c-galeria-item">
                <a href="almacenamiento/galeria/<?php echo $imagen->imagen; ?>" class="d-block mb-4" data-lightbox="galeria">
                    <div class="mask">
                        <img class="img-fluid" src="almacenamiento/galeria/<?php echo $imagen->imagen; ?>" alt="<?php echo $imagen->altimagen; ?>">
                    </div>  
                </a>
            </div>

        <?php
            }
            ?>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
</body>
</html>