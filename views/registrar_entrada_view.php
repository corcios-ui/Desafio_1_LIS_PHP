<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Entrada</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center mb-4">Registrar Entrada</h3>

                    <?php if (!empty($mensaje)): ?>
                        <div class="alert alert-success text-center"><?= $mensaje ?></div>
                    <?php endif; ?>

                    <form method="POST" enctype="multipart/form-data" action="">
                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo de entrada</label>
                            <input type="text" name="tipo" class="form-control" id="tipo" required>
                        </div>

                        <div class="mb-3">
                            <label for="monto" class="form-label">Monto</label>
                            <input type="number" name="monto" step="0.01" class="form-control" id="monto" required>
                        </div>

                        <div class="mb-3">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input type="date" name="fecha" class="form-control" id="fecha" required>
                        </div>

                        <div class="mb-3">
                            <label for="factura" class="form-label">Factura (imagen)</label>
                            <input type="file" name="factura" class="form-control" id="factura" accept="image/*">
                        </div>

                        <button type="submit" class="btn btn-success w-100">Registrar Entrada</button>
                    </form>
                </div>
            </div>
            <p class="text-center mt-3">
                <a href="dashboard_controller.php" class="btn btn-link">← Volver al dashboard</a>
            </p>
        </div>
    </div>
</div>

</body>
</html>
