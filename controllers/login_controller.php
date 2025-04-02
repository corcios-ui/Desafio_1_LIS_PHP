<?php
session_start();
require_once '../Login.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $contrasena = $_POST['contrasena'] ?? '';

    $login = new Login();
    $usuario_id = $login->autenticar($usuario, $contrasena);

    if ($usuario_id) {
        $_SESSION['usuario_id'] = $usuario_id;
        $_SESSION['usuario'] = $usuario;
        header('Location: ../controllers/dashboard_controller.php');
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos.";
    }
}

include '../views/login_view.php';
