<?php 
require "conexion.php";
include "header.php"; 
session_start();

// Obtener el ID del producto desde la URL
$id_producto = 1;

// Obtener el ID del usuario actual desde la sesión
$usuario_actual_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

// Consultar los comentarios para el producto específico usando mysqli
$sql = "SELECT c.id_comentario, c.texto, c.id_autor, u.nombre AS nombre_autor
        FROM comentarios c
        JOIN usuarios u ON c.id_autor = u.id
        WHERE c.id_producto = ?
        ORDER BY c.fecha_creacion DESC";

$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id_producto);
$stmt->execute();
$result = $stmt->get_result();
$comentarios = $result->fetch_all(MYSQLI_ASSOC);

// Obtener el ID del usuario actual desde la sesión
$usuario_actual_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

// Consultar los comentarios para el producto específico usando mysqli
$sql = "SELECT c.id_comentario, c.texto, c.id_autor, u.nombre AS nombre_autor
        FROM comentarios c
        JOIN usuarios u ON c.id_autor = u.id
        WHERE c.id_producto = ?
        ORDER BY c.fecha_creacion DESC";

$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $id_producto);
$stmt->execute();
$result = $stmt->get_result();
$comentarios = $result->fetch_all(MYSQLI_ASSOC);
?>
    <style>
        .canvas-container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 100%; /* Ratio 1:1 para mantener cuadrado */
        }
        #productoFinal {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }
    </style>
     <!-- encabezado --> 
    <main class="py-3 mt-5">
        <div class="container-fluid">
            <h1 class="mt-2" style="text-align: center;"><span style="font-family:'Cute Lettering'; font-size: 150%; font-weight: 300;">Personaliza tu regalo:</span></h1> <hr style="width: 80%; margin: auto;"> <br>
            <div class="row px-2">
                 <!-- lg=resoluciones grandes md=resoluciones medias --> 
                <div class="vista col-lg-4 col-md-4 order-md-first">
                    <div class="canvas-container">
                        <canvas id="productoFinal"></canvas>
                    </div>
                </div>
                 <!-- Cuadro de opciones --> 
                <div class="personalizar col-lg-8 col-md-8 order-sm-first order-first" style="background-color: rgb(187,187,187); font-weight: bold; border-radius: 10px;">
                    <form>
                         <!-- Cantidad --> 
                        <div class="mb-3">
                            <label for="cantidad" class="form-label">Cantidad de rosas:</label> <br>
                            <input type="radio" id="cantidad12" name="cantidad" value="12" onchange="mostrarProducto()">12
                            <input type="radio" id="cantidad24" name="cantidad" value="24" checked onchange="mostrarProducto()">24
                            <input type="radio" id="cantidad50" name="cantidad" value="50" onchange="mostrarProducto()">50
                        </div>
                        <div>
                             <!-- Colores --> 
                            <label for="color" class="form-label">Color:</label> <br>
                            <input class="oculto" type="radio" id="colorBlanco" name="color" value="cl" onchange="mostrarProducto()" checked>
                            <label id="circulo" for="colorBlanco" style="display: inline-block; width: 20px; height: 20px; background-color: #FFFFFF; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorAzul" name="color" value="az" onchange="mostrarProducto()">
                            <label id="circulo" for="colorAzul" style="display: inline-block; width: 20px; height: 20px; background-color: #0833a2; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorVerde" name="color" value="vd" onchange="mostrarProducto()">
                            <label id="circulo" for="colorVerde" style="display: inline-block; width: 20px; height: 20px; background-color: #006341; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorRojo" name="color" value="rj" onchange="mostrarProducto()">
                            <label id="circulo" for="colorRojo" style="display: inline-block; width: 20px; height: 20px; background-color: #ff0000; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorAmarillo" name="color" value="am" onchange="mostrarProducto()">
                            <label id="circulo" for="colorAmarillo" style="display: inline-block; width: 20px; height: 20px; background-color: #ffff00; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorAzulcielo" name="color" value="azcie" onchange="mostrarProducto()">
                            <label id="circulo" for="colorAzulcielo" style="display: inline-block; width: 20px; height: 20px; background-color: #0cb7f2; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorAzulturquesa" name="color" value="aztur" onchange="mostrarProducto()">
                            <label id="circulo" for="colorAzulturquesa" style="display: inline-block; width: 20px; height: 20px; background-color: #5DC1B9; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorCafe" name="color" value="caf" onchange="mostrarProducto()">
                            <label id="circulo" for="colorCafe" style="display: inline-block; width: 20px; height: 20px; background-color: #8d4925; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorDorado" name="color" value="d" onchange="mostrarProducto()">
                            <label id="circulo" for="colorDorado" style="display: inline-block; width: 20px; height: 20px; background-color: #efb810; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorLila" name="color" value="lil" onchange="mostrarProducto()">
                            <label id="circulo" for="colorLila" style="display: inline-block; width: 20px; height: 20px; background-color: #b695c0; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorMorado" name="color" value="mor" onchange="mostrarProducto()">
                            <label id="circulo" for="colorMorado" style="display: inline-block; width: 20px; height: 20px; background-color: #a349a4; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorNegro" name="color" value="n" onchange="mostrarProducto()">
                            <label id="circulo" for="colorNegro" style="display: inline-block; width: 20px; height: 20px; background-color: #000000; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorNaranja" name="color" value="na" onchange="mostrarProducto()">
                            <label id="circulo" for="colorNaranja" style="display: inline-block; width: 20px; height: 20px; background-color: #ff8000; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorPerla" name="color" value="perl" onchange="mostrarProducto()">
                            <label id="circulo" for="colorPerla" style="display: inline-block; width: 20px; height: 20px; background-color: #eae6ca; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorPlateado" name="color" value="pl" onchange="mostrarProducto()">
                            <label id="circulo" for="colorPlateado" style="display: inline-block; width: 20px; height: 20px; background-color: #C0C0C0; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorRosafucsia" name="color" value="rosfiu" onchange="mostrarProducto()">
                            <label id="circulo" for="colorRosafucsia" style="display: inline-block; width: 20px; height: 20px; background-color: #D9027D; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorRosamexicano" name="color" value="rosmex" onchange="mostrarProducto()">
                            <label id="circulo" for="colorRosamexicano" style="display: inline-block; width: 20px; height: 20px; background-color: #F50087; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorRosapalo" name="color" value="rospal" onchange="mostrarProducto()">
                            <label id="circulo" for="colorRosapalo" style="display: inline-block; width: 20px; height: 20px; background-color: #e3aaaa; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorRosapastel" name="color" value="rospas" onchange="mostrarProducto()">
                            <label id="circulo" for="colorRosapastel" style="display: inline-block; width: 20px; height: 20px; background-color: #ffd1dc; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorVino" name="color" value="vi" onchange="mostrarProducto()">
                            <label id="circulo" for="colorVino" style="display: inline-block; width: 20px; height: 20px; background-color: #56070c; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorVerdelima" name="color" value="vlim" onchange="mostrarProducto()">
                            <label id="circulo" for="colorVerdelima" style="display: inline-block; width: 20px; height: 20px; background-color: #85ff00; border-radius: 50%; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="colorVerdeoliva" name="color" value="vol" onchange="mostrarProducto()">
                            <label id="circulo" for="colorVerdeoliva" style="display: inline-block; width: 20px; height: 20px; background-color: #86895d; border-radius: 50%; cursor: pointer;"></label>
                        </div>
                        <div>
                             <!-- Estilo papel --> 
                            <label for="papel" class="form-label">Papel del ramo:</label> <br>
                            <input class="oculto" type="radio" id="papelNormal" name="papel" value="cl-pp" onchange="mostrarProducto()" checked>
                            <label id="circulo" for="papelNormal" style="display: inline-block; width: 20px; height: 20px; background-color: lightgrey; border: 1px solid grey; cursor: pointer;"></label>
                            <input class="oculto" type="radio" id="papelPremium" name="papel" value="premium" onchange="mostrarProducto()">
                            <label id="circulo" for="papelPremium" style="display: inline-block; width: 20px; height: 20px; background-color: gold; border: 1px solid grey; cursor: pointer;"></label>
                        </div>
                        <button type="submit" class="btn btn-light visitar" style="font-weight: bold;">Ordenar</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Sección de comentarios -->
        <div class="container mt-4">
            <!-- Formulario de comentario -->
            <div class="mb-4">
                <h5>Deja tu comentario</h5>
                <form action="add_comment.php" method="POST">
                    <div class="mb-3">
                        <textarea class="form-control" name="comentario" rows="3" placeholder="Escribe tu comentario aquí" required></textarea>
                        <input type="hidden" name="id_producto" value="1">
                    </div>
                    <button type="submit" class="btn btn-light visitar">Enviar</button>
                </form>
            </div>

            <!-- Comentarios listados -->
            <div id="comentarios-lista">
                <!-- Comentarios generados dinámicamente por PHP -->
                <?php foreach ($comentarios as $comentario): ?>
                    <div class="cardd mb-3">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo htmlspecialchars($comentario['nombre_autor']); ?></h6>
                            <p class="card-text"><?php echo htmlspecialchars($comentario['texto']); ?></p>
                            <?php if ($comentario['id_autor'] == $usuario_actual_id): ?>
                                <form action="delete_comment.php" method="POST" class="d-inline">
                                    <input type="hidden" name="id_comentario" value="<?php echo htmlspecialchars($comentario['id_comentario']); ?>">
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    </main>
    
    <script>
         <!-- Variables a considerar por la opcion mostrarProducto --> 
        function mostrarProducto() {
            var cantidad = document.querySelector('input[name="cantidad"]:checked').value;
            var color = document.querySelector('input[name="color"]:checked').value;
            var fondoImgSrc = './img/prods/re/bgpd.jpg';
            var productoImgSrc = `./img/prods/re/${cantidad}-${color}.png`;
            var papel = document.querySelector('input[name="papel"]:checked').value;
            var papelImgSrc= `./img/prods/re/${cantidad}-${papel}.png`;

            var canvas = document.getElementById('productoFinal');
            var ctx = canvas.getContext('2d');

            /*creacion de los 3 objetos y ensamble uno arriba de otro*/
            var fondoImg = new Image();
            var papelImg = new Image();
            var productoImg = new Image();
            console.log(papelImgSrc);
            fondoImg.onload = function() {
                canvas.width = fondoImg.width;
                canvas.height = fondoImg.height;
                
                ctx.drawImage(fondoImg, 0, 0);

                papelImg.onload = function() {
                    ctx.drawImage(papelImg, 0, 0, canvas.width, canvas.height);

                    productoImg.onload = function() {
                        ctx.drawImage(productoImg, 0, 0, canvas.width, canvas.height);
                    }
                    
                    productoImg.src = productoImgSrc;
                };

                papelImg.src = papelImgSrc;
            };

            fondoImg.src = fondoImgSrc;
        }

        window.onload = function() {
            mostrarProducto();
        };

        window.onresize = function() {
            mostrarProducto();
        };
    </script>
    <script>
        document.getElementById('mostrar').addEventListener('click', function(event) {
          event.preventDefault();
          var loginMenu = document.getElementById('login');
          if (loginMenu.classList.contains('show')) {
              loginMenu.classList.remove('show');
          } else {
              loginMenu.classList.add('show');
          }
        });
    </script>

<?php include 'footer.php'; ?>
