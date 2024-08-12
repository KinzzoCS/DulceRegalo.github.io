<?php
include 'conexion.php';
session_start();

// Asegurar que el producto es siempre el ID 1
$id_producto = 1;

// Verificar si el usuario está autenticado
$usuario_actual_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $usuario_actual_id) {
    $comentario = trim($_POST['comentario']);
    
    if (!empty($comentario)) {
        // Insertar el comentario en la base de datos
        $sql = "INSERT INTO comentarios (texto, id_autor, id_producto, fecha_creacion) VALUES (?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sii', $comentario, $usuario_actual_id, $id_producto);
        $stmt->execute();
        $stmt->close();
    }
}

// Redirigir de vuelta a la página del producto
header('Location: product.php');
exit;
?>
