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
                <p><i class="fas fa-map-marker-alt"></i> Dirección: Estación La Junta 20, Felipe Pescador, 33814 Hidalgo del Parral, Chih.</p>
                <p><i class="fas fa-phone"></i> Teléfono: 672-xxx-xxxx</p>
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
                <a href="https://www.facebook.com/Dulceregaloparral?mibextid=ZbWKwL" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/_dulceregaloparral?igsh=ZjYyMGF1d2JiM3g=" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                <a href="https://www.tiktok.com/@dulceregaloparral?_t=8ooNuPkQnzB&_r=1" class="text-white me-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16"><path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/></svg></a>
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
