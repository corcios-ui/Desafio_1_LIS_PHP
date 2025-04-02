<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header('Location: ../controllers/login_controller.php');
    exit;
}
require_once '../Database.php';

$db = new Database();
$conn = $db->conectar();
$sql = "SELECT * FROM entradas WHERE usuario_id = ? ORDER BY fecha DESC";
$stmt = $conn->prepare($sql);
$stmt->execute([$_SESSION['usuario_id']]);
$entradas = $stmt->fetchAll(PDO::FETCH_ASSOC);

include '../views/ver_entradas_view.php';
