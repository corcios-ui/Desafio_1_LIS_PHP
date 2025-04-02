<?php
$host = 'localhost';          
$usuario = 'root';            
$contrasena = '1234567890';             
$base_de_datos = 'finanzas_app';

try {
    $conn = new PDO("mysql:host=$host;dbname=$base_de_datos", $usuario, $contrasena);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexión establecida correctamente a MariaDB.";
} catch (PDOException $e) {
    echo "Error al conectar: " . $e->getMessage();
}
?>
<?php
