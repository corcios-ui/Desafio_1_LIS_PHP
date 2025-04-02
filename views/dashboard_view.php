<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Finanzas App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Finanzas App</a>
        <div class="d-flex">
            <span class="navbar-text text-white me-3">Hola, <?= htmlspecialchars($usuario) ?>!</span>
            <a href="../index.php" class="btn btn-outline-light">Cerrar sesión</a>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h3 class="text-center mb-4">Menú Principal</h3>
    <div class="list-group shadow-sm">
        <a href="../controllers/registrar_entrada_controller.php" class="list-group-item list-group-item-action">1. Registrar entrada</a>
        <a href="../controllers/registrar_salida_controller.php" class="list-group-item list-group-item-action">2. Registrar salida</a>
        <a href="../controllers/ver_entradas_controller.php" class="list-group-item list-group-item-action">3. Ver entradas</a>
        <a href="../controllers/ver_salidas_controller.php" class="list-group-item list-group-item-action">4. Ver salidas</a>
        <a href="../controllers/balance_controller.php" class="list-group-item list-group-item-action">5. Mostrar balance</a>
    </div>
</div>

</body>
</html>
