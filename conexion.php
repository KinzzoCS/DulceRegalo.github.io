<?php
$host = 'localhost';     // Dirección del servidor de base de datos
$dbname = 'dr';  // Nombre de la base de datos
$username = 'root';   // Nombre de usuario de la base de datos
$password = ''; // Contraseña del usuario de la base de datos

// Crear una conexión con la base de datos
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>
