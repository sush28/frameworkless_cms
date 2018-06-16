<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Videos | Two Door Cinema Club</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <header class="container-fluid c-header c-header--videos align-items-center">
        <div class="row h-100">
            <div class="col-md-12 h-100 c-cabecera-wrapper">
                <div class="c-cabecera justify-content-center h-100">
                    <h1 class="titulo text-center">Música</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container c-video">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <iframe class="video-1" width="560" height="315" src="https://www.youtube.com/embed/sKyK1Mme9Sc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>            
            </div>
        </div>
    </div>

    <div class="container c-spotify">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 order-md-last">
                <h2 class="titular"><span class="a">Escucha </span><span class="b">nuestros</span><span class="c"> grandes </span><span class="d">éxitos</span></h2>
            </div>
            <div class="col-md-6 col-lg-4 order-md-first">
                <iframe src="https://open.spotify.com/embed/artist/536BYVgOnRky0xjsPT96zl" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>
            </div>  
        </div>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>

