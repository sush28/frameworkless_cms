<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Tour | Two Door Cinema Club</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <header class="container-fluid c-header c-header--tour align-items-center">
        <div class="row h-100">
            <div class="col-12 h-100 c-cabecera-wrapper">
                <div class="c-cabecera justify-content-center h-100">
                    <h1 class="titulo text-center">Tour</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="container c-tour">
        <div class="row titulo">
            <div class="col-md-12">
                <h2 class="text-center">Gira GAMESHOW</h2>
            </div>
        </div>
        <div class="row conciertos justify-content-center">
            <div class="col-md-12">
                <div class="row concierto">
                    <div class="col-sm-12 align-items-center concierto-fila">
                        <p class="fecha">20/05/18</p>
                        <p class="arena">Wizink Center</p>
                        <p class="ciudad">Madrid, España</p>
                        <p class="disponibilidad">Vendido</p>
                    </div>
                </div>
                <div class="row concierto">
                    <div class="col-sm-12 align-items-center concierto-fila">
                        <p class="fecha">20/05/18</p>
                        <p class="arena">Wizink Center</p>
                        <p class="ciudad">Madrid, España</p>
                        <p class="disponibilidad">Vendido</p>
                    </div>
                </div>
                <div class="row concierto">
                    <div class="col-sm-12 align-items-center concierto-fila">
                        <p class="fecha">20/05/18</p>
                        <p class="arena">Wizink Center</p>
                        <p class="ciudad">Madrid, España</p>
                        <p class="disponibilidad">Vendido</p>
                    </div>
                </div>
                <div class="row concierto">
                    <div class="col-sm-12 align-items-center concierto-fila">
                        <p class="fecha">20/05/18</p>
                        <p class="arena">Wizink Center</p>
                        <p class="ciudad">Madrid, España</p>
                        <p class="disponibilidad">Vendido</p>
                    </div>
                </div>
                <div class="row concierto">
                    <div class="col-sm-12 align-items-center concierto-fila">
                        <p class="fecha">20/05/18</p>
                        <p class="arena">Wizink Center</p>
                        <p class="ciudad">Madrid, España</p>
                        <p class="disponibilidad">Vendido</p>
                    </div>
                </div>
            </div>            
        </div>
    </section>


    <div class="container c-pidetour">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row c-pidetour-container">
                    <div class="col-md-12">
                        <p class="lead">¿No hay ningún concierto en tu ciudad?</p>
                        <p class="subtitulo">Dinos a dónde quieres que vayamos.</p>
                    </div>
                    <div class="col-md-12 c-pidetour-form">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="ciudad" class="sr-only">Ciudad</label>
                                        <input class="form-control" type="text" name="ciudad" id="ciudad" placeholder="Introduce tu ciudad" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <button class="btn btn-basico btn-block" type="submit" name="submit">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php include 'includes/footer.php'; ?>
</body>
</html>
