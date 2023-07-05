<?php

class DataBase{

    private $host;
    private $dbname;
    private $username;
    private $password;
    private $connection;
    
    public function __construct(){
        $this->host = 'localhost';
        $this->dbname = 'consultoriomd';
        $this->username = 'root';
        $this->password = '';
    }

    public function conexion(){

        try {
            $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->connection;
            echo "Conexión exitosa a la base de datos";

        } catch (PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            exit;
        }
    }
}

// $database = new Database();
// $database->conexion();

// if ($database) {
//     echo "Conexión exitosa a la base de datos.";
//     // Aquí puedes realizar más acciones con la conexión establecida
// } else {
//     echo "Error al conectar a la base de datos.";
// }

?>