<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header('Location: ../controllers/login_controller.php');
    exit;
}
require_once '../Database.php';

$db = new Database();
$conn = $db->conectar();

// Entradas
$stmt = $conn->prepare("SELECT * FROM entradas WHERE usuario_id = ?");
$stmt->execute([$_SESSION['usuario_id']]);
$entradas = $stmt->fetchAll(PDO::FETCH_ASSOC);
$total_entradas = array_sum(array_column($entradas, 'monto'));

// Salidas
$stmt = $conn->prepare("SELECT * FROM salidas WHERE usuario_id = ?");
$stmt->execute([$_SESSION['usuario_id']]);
$salidas = $stmt->fetchAll(PDO::FETCH_ASSOC);
$total_salidas = array_sum(array_column($salidas, 'monto'));

$balance = $total_entradas - $total_salidas;

include '../views/balance_view.php';
