<?php
require_once '../modelo/database.php';

$dataBase = new DataBase();
$prueba = $dataBase->conexion();
if ($prueba) {
    // La conexión fue exitosa
    echo "Conexión exitosa";
} else {
    // Ocurrió un error en la conexión
    echo "Error en la conexión";
}

?>