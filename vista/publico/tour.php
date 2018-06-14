<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Tour | Two Door Cinema Club</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container-fluid c-header c-header--tour align-items-center">
        <div class="row h-100">
            <div class="col-12 h-100">
                <div class="c-cabecera justify-content-center h-100">
                    <h1 class="titulo text-center">Tour</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container c-tour">
        <div class="row concierto">
            <div class="col-sm-6 col-md-3">
                <div class="fecha">20/05/18</div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="arena">Wizink Center</div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="ciudad">Madrid, España</div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="disponibilidad">Vendido</div>
            </div>
        </div>
    </div>

    <div class="container c-pidetour">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="c-pidetour-container">
                    <div class="col-12">
                        <p class="lead">¿No hay ningún concierto en tu ciudad?</p>
                        <p>Dinos a dónde quiéres que vayamos.</p>
                    </div>
                    <div class="col-12">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="ciudad">Ciudad</label>
                                    <input class="form-control" type="text" name="ciudad" id="ciudad" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-basico" type="submit" name="submit">Enviar</button>
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
