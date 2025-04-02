<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Entradas Registradas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .thumbnail-img { width: 80px; cursor: pointer; }
        .modal-img { max-width: 90%; max-height: 90%; display: block; margin: auto; }
    </style>
</head>
<body class="bg-light">

<div class="container mt-5">
    <h3 class="text-center mb-4">Entradas Registradas</h3>

    <table class="table table-bordered table-hover bg-white shadow-sm">
        <thead class="table-primary">
        <tr>
            <th>Tipo</th>
            <th>Monto</th>
            <th>Fecha</th>
            <th>Factura</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($entradas as $entrada): ?>
            <tr>
                <td><?= htmlspecialchars($entrada['tipo']) ?></td>
                <td>$<?= number_format($entrada['monto'], 2) ?></td>
                <td><?= $entrada['fecha'] ?></td>
                <td>
                    <?php if (!empty($entrada['factura_imagen'])): ?>
                        <img src="../<?= $entrada['factura_imagen'] ?>" class="thumbnail-img" onclick="mostrarImagen(this.src)">
                    <?php else: ?>
                        <span class="text-muted">No adjunta</span>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <div class="text-center">
        <a href="dashboard_controller.php" class="btn btn-outline-secondary mt-3">← Volver al dashboard</a>
    </div>
</div>

<!-- Modal de imagen -->
<div class="modal fade" id="modalFactura" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark border-0">
            <div class="modal-body text-center">
                <img id="imagenModal" class="modal-img">
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS + Modal -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function mostrarImagen(src) {
        const img = document.getElementById('imagenModal');
        img.src = src;
        new bootstrap.Modal(document.getElementById('modalFactura')).show();
    }
</script>

</body>
</html>
