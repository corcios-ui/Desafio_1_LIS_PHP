<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Balance Mensual</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap y librerías JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

    <style>
        body {
            background-color: #f9f9f9;
        }
        #graficoBalance {
            max-width: 300px;
            max-height: 300px;
        }
        .section-title {
            border-bottom: 2px solid #0d6efd;
            padding-bottom: 6px;
            margin-bottom: 20px;
        }
        .total-row {
            background-color: #f1f1f1;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container bg-white shadow-sm p-4 mt-4 rounded" id="reporte">
    <h2 class="text-center text-primary mb-4">Reporte de Balance Mensual</h2>

    <div class="row mb-4">
        <div class="col-md-6">
            <h5 class="section-title">Entradas</h5>
            <table class="table table-bordered table-sm">
                <thead class="table-success text-center">
                <tr><th>Tipo</th><th>Monto</th></tr>
                </thead>
                <tbody>
                <?php foreach ($entradas as $e): ?>
                    <tr>
                        <td><?= htmlspecialchars($e['tipo']) ?></td>
                        <td class="text-end">$<?= number_format($e['monto'], 2) ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr class="total-row"><td>Total</td><td class="text-end">$<?= number_format($total_entradas, 2) ?></td></tr>
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <h5 class="section-title">Salidas</h5>
            <table class="table table-bordered table-sm">
                <thead class="table-danger text-center">
                <tr><th>Tipo</th><th>Monto</th></tr>
                </thead>
                <tbody>
                <?php foreach ($salidas as $s): ?>
                    <tr>
                        <td><?= htmlspecialchars($s['tipo']) ?></td>
                        <td class="text-end">$<?= number_format($s['monto'], 2) ?></td>
                    </tr>
                <?php endforeach; ?>
                <tr class="total-row"><td>Total</td><td class="text-end">$<?= number_format($total_salidas, 2) ?></td></tr>
                </tbody>
            </table>
        </div>
    </div>

    <p class="text-center fs-5 fw-semibold">Balance Final:
        <span class="<?= $balance >= 0 ? 'text-success' : 'text-danger' ?>">
            $<?= number_format($balance, 2) ?>
        </span>
    </p>

    <h5 class="text-center section-title mt-4">Gráfico de Entradas vs Salidas</h5>
    <div class="d-flex justify-content-center mb-3">
        <canvas id="graficoBalance" width="300" height="300"></canvas>
    </div>
</div>

<div class="text-center mb-5">
    <button class="btn btn-outline-primary me-2" onclick="descargarPDF()">📥 Descargar reporte en PDF</button>
    <a href="dashboard_controller.php" class="btn btn-outline-secondary">← Volver al dashboard</a>
</div>

<script>
    const chart = new Chart(document.getElementById('graficoBalance'), {
        type: 'pie',
        data: {
            labels: ['Entradas', 'Salidas'],
            datasets: [{
                data: [<?= $total_entradas ?>, <?= $total_salidas ?>],
                backgroundColor: ['#198754', '#dc3545']
            }]
        },
        options: {
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    });

    async function descargarPDF() {
        const { jsPDF } = window.jspdf;
        const canvas = await html2canvas(document.querySelector("#reporte"), { scale: 2 });
        const imgData = canvas.toDataURL("image/png");
        const pdf = new jsPDF("p", "mm", "a4");

        const width = 190;
        const height = (canvas.height * width) / canvas.width;

        pdf.addImage(imgData, "PNG", 10, 10, width, height);
        pdf.save("reporte_balance.pdf");
    }
</script>

</body>
</html>
