<?php
ob_start();
require './conexion.php';

$loginError = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql_user = "SELECT id, password FROM usuarios WHERE usuario = ?";
    $stmt_user = $conn->prepare($sql_user);
    
    if ($stmt_user) {
        $stmt_user->bind_param("s", $username);
        $stmt_user->execute();
        $stmt_user->store_result();
        $stmt_user->bind_result($id_user, $hashed_password_user);

        if ($stmt_user->num_rows == 1) {
            $stmt_user->fetch();
            if (password_verify($password, $hashed_password_user)) {
                session_start();
                $_SESSION['user_id'] = $id_user;
                $_SESSION['username'] = $username;

                header("Location: index_login.php");
                exit();
            } else {
                $loginError = "Nombre de usuario o contraseña incorrectos.";
            }
        } else {
            $loginError = "Nombre de usuario o contraseña incorrectos.";
        }

        $stmt_user->close();
    } else {
        die("Error en la consulta SQL.");
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Dulce Regalo</title>
</head>
<body style="background-color: lightgray;">
  <header>
    <nav class="py-2">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-between"> 
          <div class="col-6 d-flex align-items-center">
            <a href="./index.php"><img class="logobr" src="./img/icons/branddd.png" style="width: 64px;" alt="logo"></a>
            <p id="slogan" class="ms-3 mb-0" style="color: white; font-family:'Cute Lettering'; font-size:250%;">Regalos personalizados</p>
          </div>
          <div class="col-6 text-end">
            <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" style="border: none; background: none; color:white;">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
              <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </nav>
  </header>
<!-- Modal de Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" style="backdrop-filter: blur(5px); transition:0.5s">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="max-height: 90vh;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="loginModalLabel">Inicio de sesión</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body" style="width:auto;">
        <div class="row align-items-center" style="margin-bottom: 10px;">
          <div class="col-lg-4">
            <form method="post" action="">
              <div class="text-center">
                <!-- Contenedor para mostrar el mensaje de error -->
                <?php if (!empty($loginError)): ?>
                  <div class="alert alert-danger" role="alert">
                    <?php echo $loginError; ?>
                  </div>
                <?php endif; ?>
                <p class="text-start"><b>Usuario</b></p>
                <input type="text" name="username" style="border-radius: 5px; width:100%; border:solid 1px;"> <br> <br>
                <p class="text-start"><b>Contraseña</b></p>
                <input type="password" name="password" style="border-radius: 5px; width:100%; border:solid 1px;"> <br> <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-light visitar text-center" value="Cajas" style="background-color: rgb(188, 187, 187);">Iniciar sesión</button>
                    <p style="margin-bottom: 0px;">ó</p>
                    <a href="./registros.php" class="btn btn-light visitar text-center" style="margin: 5px; background-color: rgb(188, 187, 187);">Registrarse</a>
                </div>
              </div>
            </form>
          </div>
          <div class="col-8 mx-0 my-0">
              <p class="px-5 text-center" id="promos" style="font-size: 200%;">
                  "Frases bonitas al azar"
              </p>
          </div>
        </div>  
      </div>
    </div>
  </div>
</div> 

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function() {
    // Mostrar el modal si hay un error de login
    <?php if (!empty($loginError)): ?>
        $('#loginModal').modal('show');
    <?php endif; ?>

    // Mostrar el modal si el usuario ha sido registrado
    if (localStorage.getItem('registered') === 'true') {
        $('#loginModal').modal('show');
        localStorage.removeItem('registered');
    }
});
</script>
