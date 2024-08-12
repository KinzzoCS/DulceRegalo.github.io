<?php include "header.php"; ?>
  <main>
    <!-- Seccion about -->
    <section class="py-5 mt-5">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <h1><span style="font-family:'Cute Lettering'; font-size: 300%;">Dulce regalo</span></h1>
          <h1><span style="color: rgb(135, 3, 62); font-size:70%;">Tu mejor opción para hacer feliz a esa persona especial &#128147; </span></h1>
        </div>
      </div>

      <div class="row pt-4">
        <div class="col text-end">
          <a href="https://wa.me/+526271047008" style="text-decoration: none; color: black;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-whatsapp me-3" viewBox="0 0 16 16"><path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/></svg>Contacto
        </a>
        </div>
        <div class="col">
          <button type="button" data-bs-toggle="modal" data-bs-target="#ubicaciondr" style="border: none; background: none;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-map me-3" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15.817.113A.5.5 0 0 1 16 .5v14a.5.5 0 0 1-.402.49l-5 1a.5.5 0 0 1-.196 0L5.5 15.01l-4.902.98A.5.5 0 0 1 0 15.5v-14a.5.5 0 0 1 .402-.49l5-1a.5.5 0 0 1 .196 0L10.5.99l4.902-.98a.5.5 0 0 1 .415.103M10 1.91l-4-.8v12.98l4 .8zm1 12.98 4-.8V1.11l-4 .8zm-6-.8V1.11l-4 .8v12.98z"/></svg>Ubicación</button>
        </div>
      </div>

      <!-- Ventana de ubicacion -->
      <div class="modal fade" id="ubicaciondr" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="height: 400px;">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Puedes encontrarnos aquí!</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3556.740220623579!2d-105.67312992632698!3d26.943448858772253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8694514b5f7f293d%3A0xd697db12973fcd38!2sEstaci%C3%B3n%20La%20Junta%2020%2C%20Felipe%20Pescador%2C%2033814%20Hidalgo%20del%20Parral%2C%20Chih.!5e0!3m2!1ses-419!2smx!4v1719592595460!5m2!1ses-419!2smx" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
      <!-- Seccion de productos -->
    <section>
      <h1 style="text-align: center;"><span style="font-family:'Cute Lettering'; font-size: 150%; font-weight: 300;">Nuestra selección de detalles y regalos.</span></h1><hr style="width: 80%; margin: auto;"> <br>
      <div class="container-fluid">
        <div class="row justify-content-center">
           <!-- Tajetas de texto --> 
          <div class="card column-lg-4 mt-2 mx-2" style="width: 16rem; background-color:  lightgray;">
             <!-- Mandar al link de producto --> 
            <form action="product.php" method="get">
                <div>
                  <img src="./img/covers/rosaseternas.jpg" style="margin-top: 10px; border-radius: 10px;" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Rosas Eternas</h5>
                    <p class="card-text">-Texto de venta aqui</p>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" class="btn btn-light visitar">Personalizar</button>
                  </div>
                </div>
            </form>
          </div>
          <div class="card column-lg-4 mt-2 mx-2" style="width: 16rem; background-color:  lightgray;">
            <form action="product.html" method="get">
                <div>
                  <img src="./img/covers/cajas.jpg" style="max-height: 251px; margin-top: 10px; border-radius: 10px;" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Cajas</h5>
                    <p class="card-text">-Texto de venta aqui</p>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#loginModal" class="btn btn-light visitar">Personalizar</button>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main> <br>
  <!-- Script para menu avanzado -->

 <!-- links de uso javascript --> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<?php include "footer.php"; ?>
