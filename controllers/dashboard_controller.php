<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header('Location: ../controllers/login_controller.php');
    exit;
}

$usuario = $_SESSION['usuario'];
include '../views/dashboard_view.php';
