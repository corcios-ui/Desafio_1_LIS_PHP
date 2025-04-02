<?php
$host = 'localhost';          // o 127.0.0.1
$usuario = 'root';            // Cambialo si es diferente
$contrasena = '1234567890';             // Cambialo si tu usuario tiene contraseña
$base_de_datos = 'finanzas_app';

try {
    $conn = new PDO("mysql:host=$host;dbname=$base_de_datos", $usuario, $contrasena);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Conexión establecida correctamente a MariaDB.";
} catch (PDOException $e) {
    echo "❌ Error al conectar: " . $e->getMessage();
}
?>
<?php
