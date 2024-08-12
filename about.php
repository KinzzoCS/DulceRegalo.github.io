<?php include "header.php"; ?>
  <main>
    <!-- Texto area superior -->
    <section class="py-5 mt-5">
      <!-- py=espaciado vertica mt=margen superior -->
       <!-- Establecimiento del modo responsive -->
      <div class="d-flex flex-column flex-md-row align-items-center justify-content-around text-container">
        <div class="bienvenida py-3" style="width: 30%; padding: auto;">
          <h1><span style="font-family:'Cute Lettering'; font-size: 260%;">Dulce Regalo.</span></h1>
          <h5><span style="color: rgb(135, 3, 62);">Tu mejor opción para hacer feliz a esa persona especial &#128147;</h5>
        </div>
        <!-- Pagina de contacto -->
        <div class="contacto flex-lg-column align-self-lg-center justify-content-lg-center" style="width: auto;">
          <div class="py-2">
            <a href="https://www.facebook.com/Dulceregaloparral/" style="text-decoration: none; color: black;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat me-3" viewBox="0 0 16 16"><path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/></svg>Contacto</a>
          </div>
          <div class="py-2">
            <button type="button" data-bs-toggle="modal" data-bs-target="#ubicaciondr" style="border: none; background: none;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-map me-3" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z"/></svg>Ubicación</button>
            <!-- Ventana de ubicacion -->
            <div class="modal fade" id="ubicaciondr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content" style="height: 400px;">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¡Puedes encontrarnos aquí!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3556.740220623579!2d-105.67312992632698!3d26.943448858772253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8694514b5f7f293d%3A0xd697db12973fcd38!2sEstaci%C3%B3n%20La%20Junta%2020%2C%20Felipe%20Pescador%2C%2033814%20Hidalgo%20del%20Parral%2C%20Chih.!5e0!3m2!1ses-419!2smx!4v1719592595460!5m2!1ses-419!2smx" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      <!-- Seccion de productos -->
    <section>
      <h1 style="text-align: center;"><span style="font-family:'Cute Lettering'; font-size: 150%; font-weight: 300;">¿Qué es dulce regalo? </span></h1> <hr style="width: 80%; margin: auto;">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-4 mt-2" style="font-size: 120%;">
            <p style="text-align: justify;">Dulce Regalo es una empresa dedicada a la venta y personalizacion de diferentes articulos que van desde rosas eternas hasta cajas decoradas.</p>
            <p style="text-align: justify;">Entre las posibilidades a elegir estan la seleccion de colores; diferentes accesorios como mariposas, chocolates, etc; asi como la opcion de agregar una nota a gusto.</p>
          </div>
          <!-- Estilo del carrusel -->
          <div class="col-lg-6 mt-2">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="./img/covers/promo.jpg" class="img-fluid rounded" style="height: 350px; width: 100%;" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/covers/promo1.jpg" class="img-fluid rounded" style="height: 350px; width: 100%;" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="./img/covers/promo2.jpg" class="img-fluid rounded" style="height: 350px; width: 100%;" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
        <!-- Texto inferior -->
        <h1 class="mt-2" style="text-align: center;"><span style="font-family:'Cute Lettering'; font-size: 150%; font-weight: 300;">Te interesa <span style="color:  rgb(135, 3, 62);">diseñar</span> tu propio regalo?</span></h1> <hr style="width: 80%; margin: auto;">
        <div class="container mx-lg-5" style="text-align: center;"> <br>
          <!-- Redireccion a aplicacion web --> 
            <p class="py-2">Visita dulce regalo aqui</p><a class="visitar" href="./index.php" style="margin-top: 10px; text-decoration: none; color: black; border: 3px solid; border-radius: 10px; border-color:  rgb(188, 187, 187); padding: 10px; background-color: rgb(188, 187, 187);">Dulce Regalo</a> 
        </div>
      </div>
    </section>
  </main> <br>
  
<!-- footer.php -->
    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<!-- Cambio de promos -->    
<script>
  const frases = [
    '"Los regalos más únicos que encontrarás en cualquier lugar. ¡Siempre satisfecho con mis compras!"',
    '"Cada detalle está perfectamente personalizado. Ideal para sorprender a tus seres queridos."',
    '"Un servicio excelente y regalos que siempre alegran el día. ¡Altamente recomendado!"',
    '"Los productos personalizados aquí son de la mejor calidad. ¡Nunca me decepcionan!"',
    '"Encuentra el regalo perfecto para cada ocasión. ¡Una experiencia de compra fantástica!"',
    '"Regalos personalizados que hacen sonreír a cualquiera. ¡Una opción maravillosa para cada celebración!"',
    '"Cada compra es una sorpresa agradable. ¡La personalización es simplemente excelente!"'
  ];

  let frase_elegida = 0;
  const frase_p = document.getElementById('promos');

  function cambiarfrase() {
    frase_p.classList.add('deslizarpromo');
    
    // Esperar a que la animación termine antes de cambiar la frase
    frase_p.addEventListener('animationend', () => {
      frase_elegida = (frase_elegida + 1) % frases.length;
      frase_p.textContent = frases[frase_elegida];
      
      // Reiniciar la animación
      frase_p.classList.remove('deslizarpromo');
      
      // Forzar una reflujo para reiniciar la animación
      void frase_p.offsetWidth;
    }, { once: true });
  }

  // Inicializar con la primera frase
  frase_p.textContent = frases[frase_elegida];

  // Llamar a la función cambiarfrase cada 5 segundos
  setInterval(cambiarfrase, 5000);
</script>
</body>
<footer class="bg-dark text-white pt-4 pb-4 mt-auto">
    <div class="container">
        <div class="row">
            <!-- Información de contacto -->
            <div class="col-md-4">
                <h5>Contacto</h5>
                <p><i class="fas fa-map-marker-alt"></i> Dirección: C. García Salinas 3710-A, Las Granjas</p>
                <p><i class="fas fa-phone"></i> Teléfono: 614 197 2422</p>
                <p><i class="fas fa-envelope"></i> Email: info@centropsicologia.com</p>
            </div>
            <!-- Enlaces rápidos -->
            <div class="col-md-4">
                <h5>Enlaces rápidos</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-white">Inicio</a></li>
                    <li><a href="about.php" class="text-white">Acerca de</a></li>
                </ul>
            </div>
            <!-- Redes sociales -->
            <div class="col-md-4">
                <h5>Redes Sociales</h5>
                <a href="https://www.facebook.com/share/aj231yzN8jWGANae/?mibextid=qi2Omg" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/psidep_cuu/?utm_source=qr&igsh=MWIwZGszMm5kcHZteA%3D%3D&fbclid=IwY2xjawEfGXpleHRuA2FlbQIxMAABHSAK772yJpaqhUsydUUdXT4nm44A5zR-7O-e-OBHe1lxkN3X1R42GUcSwA_aem_usxmLeKyjviiC43oBS-MMA" class="text-white me-3"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="text-center py-3 mt-4" style="background-color:rgb(135, 3, 62);">
        <p class="mb-0">&copy; 2024 Dulce Regalo. Todos los derechos reservados.</p>
    </div>
</footer>

<!-- Bootstrap 5 y Font Awesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha3/js/bootstrap.bundle.min.js"></script>
</html>

