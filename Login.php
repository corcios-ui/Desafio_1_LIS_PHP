<?php
require_once 'Database.php';

class Login {
    private $conn;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->conectar();
    }

    public function autenticar($usuario, $contrasena) {
        $sql = "SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':usuario', $usuario);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $usuario_data = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($contrasena, $usuario_data['contrasena'])) {
                return $usuario_data['id'];
            }
        }

        return false;
    }
}
?>
