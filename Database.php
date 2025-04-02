<?php
class Database {
    private $host = 'localhost';
    private $db_name = 'finanzas_app';
    private $username = 'root'; // Cambiar si es necesario
    private $password = '1234567890';     // Cambiar si es necesario
    private $conn;

    public function conectar() {
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->exec("set names utf8mb4");
        } catch (PDOException $exception) {
            die("Error de conexión: " . $exception->getMessage());
        }

        return $this->conn;
    }
}
?>
