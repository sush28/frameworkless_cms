<!DOCTYPE html>
<html lang="es">
<head>
    <?php include 'includes/head.php'; ?>
    <title>Tour | Coldplay</title>
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <div class="container-fluid c-header">
        <div class="row">
            <div class="col-12">
                <div class="c-cabecera">
                    <h1 class="titulo my-5">Tour</h1>
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
        <div class="row">
            <div class="col-md-7">
                <p class="lead">¿Estás cansado de que no vayamos a tu ciudad?</p>
                <p>Dinos a qué ciudad quieres que vayamos.</p>
                <div>
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input class="form-control" type="text" name="nombre" id="nombre" required>
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




    <?php include 'includes/footer.php'; ?>
</body>
</html>
