  <!-- FOOTER -->
  <footer class="footer-compact">
    <div class="container footer-inner">
      <div class="footer-text">
        <p>
          © 2025 KIVIC |
          <span class="footer-address">Calarcá, Quindío, Colombia</span> |
          <a href="https://www.kivic.com" target="_blank">kivic.com</a>
        </p>
      </div>
      <div class="social-links">
        <a href="https://facebook.com/kivic.ecommerce" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://instagram.com/kivic.ecommerce" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="https://wa.me/573142542855" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        <a href="https://tiktok.com/@kivic.ecommerce" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
        <a href="https://youtube.com/@kivic" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </footer>

  <!-- SCRIPTS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/script.js"></script>
  <!-- MODAL DE REGISTRO -->
<div class="modal-overlay" id="registerModal">
  <div class="modal-content">
    <div class="modal-header">
      <h3>Registro Gratuito - 30 Días</h3>
      <span class="modal-close" onclick="closeRegisterModal()">×</span>
    </div>
    <form id="registerForm" action="registro.php" method="POST">
      <div class="form-group">
        <label>Nombre completo *</label>
        <input type="text" name="nombre" required placeholder="Ej: Juan Pérez">
      </div>
      <div class="form-group">
        <label>Correo electrónico *</label>
        <input type="email" name="email" required placeholder="tucorreo@ejemplo.com">
      </div>
      <div class="form-group">
        <label>Teléfono *</label>
        <input type="tel" name="telefono" required placeholder="+57 300 123 4567">
      </div>
      <div class="form-group">
        <label>Nombre de tu negocio</label>
        <input type="text" name="negocio" placeholder="Ej: Mi Tienda Online">
      </div>
      <button type="submit" class="btn-register">
        Crear mi tienda GRATIS <i class="fas fa-check"></i>
      </button>
      <p class="terms">
        Al registrarte, aceptas nuestros <a href="#">Términos</a> y <a href="#">Política de Privacidad</a>.
      </p>
    </form>
  </div>
</div>
</body>
</html>