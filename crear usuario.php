
<?php
require_once 'Database.php';

$db = new Database();
$conn = $db->conectar();

$usuario = 'admin';
$contrasena = password_hash('admin123', PASSWORD_DEFAULT); // Contraseña encriptada

$sql = "INSERT INTO usuarios (usuario, contrasena) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$usuario, $contrasena]);

echo "Usuario creado correctamente.";
?>
