<?php
include './conexion.php';

// Preparar y enlazar
$stmt = $conn->prepare("INSERT INTO usuarios (nombre, direccion, numero, correo, usuario, password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $nombre, $direccion, $telefono, $email, $usuario, $password_hashed);

// Establecer parámetros y ejecutar
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$password_hashed = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt->execute();

// Confirmar el registro
if ($stmt->affected_rows > 0) {
    echo "<script>
            localStorage.setItem('registered', 'true');
            window.location.href = 'index.php';
          </script>";
} else {
    echo "Error al registrar el usuario.";
}

// Cerrar conexiones
$stmt->close();
$conn->close();
?>
