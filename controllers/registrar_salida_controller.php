<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header('Location: ../controllers/login_controller.php');
    exit;
}
require_once '../Database.php';

$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tipo = $_POST['tipo'] ?? '';
    $monto = $_POST['monto'] ?? 0;
    $fecha = $_POST['fecha'] ?? '';
    $factura_imagen = '';

    if (!empty($_FILES['factura']['name'])) {
        $target_dir = "../facturas/";
        if (!is_dir($target_dir)) mkdir($target_dir);
        $factura_imagen = $target_dir . time() . '_' . basename($_FILES['factura']['name']);
        move_uploaded_file($_FILES['factura']['tmp_name'], $factura_imagen);
        $factura_imagen = str_replace('../', '', $factura_imagen); // ruta relativa
    }

    $db = new Database();
    $conn = $db->conectar();
    $sql = "INSERT INTO salidas (tipo, monto, fecha, factura_imagen, usuario_id) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$tipo, $monto, $fecha, $factura_imagen, $_SESSION['usuario_id']]);

    $mensaje = "Salida registrada exitosamente.";
}

include '../views/registrar_salida_view.php';
