<?php
$title = "KIVIC e-commerce | SaaS para PYMES";
$page = "inicio";
include 'includes/header.php';
?>

<!-- HERO -->
<section class="hero" id="inicio">
  <div class="container">
    <div class="hero-content" data-aos="fade-up">
      <svg class="hero-logo" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
        <circle cx="50" cy="50" r="45" fill="none" stroke="#00d4ff" stroke-width="4"/>
        <path d="M30 40 L45 55 L55 45 L70 60" stroke="#00d4ff" stroke-width="4" fill="none"/>
        <circle cx="50" cy="50" r="18" fill="#00d4ff"/>
      </svg>
      <h1 class="hero-title" data-es="Transforma tu negocio con KIVIC" data-en="Transform your business with KIVIC">
        Transforma tu negocio con KIVIC
      </h1>
      <p class="hero-subtitle" data-es="Plataforma SaaS modular sin código para crear tiendas virtuales profesionales con hosting, dominio y chatbot incluidos." data-en="No-code modular SaaS platform to build professional online stores with hosting, domain, and chatbot included.">
        Plataforma SaaS modular sin código para crear tiendas virtuales profesionales con hosting, dominio y chatbot incluidos.
      </p>
     <!-- CTA BUTTON - MODAL DE REGISTRO -->
<button class="cta-button" onclick="openRegisterModal()" data-es="Prueba Gratis 30 días" data-en="Try Free for 30 Days">
  <p>Explora KIVIC durante 30 días sin costo <i class="fas fa-arrow-right"></i>
</button>
    </div>
  </div>
</section>

<!-- ¿QUIÉNES SOMOS? -->
<section class="container" id="quienes">
  <h2 class="section-title" data-es="¿QUIÉNES SOMOS?" data-en="WHO WE ARE?">¿QUIÉNES SOMOS?</h2>
  <div class="about-grid">
    <div class="card" data-aos="fade-right">
      <p class="justificado">
        Somos una empresa tecnológica especializada en soluciones SaaS para comercio electrónico, pensadas para emprendedores y PYMES que desean crecer sin depender de conocimientos técnicos.
      </p>
      <p class="justificado">
        <span class="highlight">¿Tienes un negocio físico o una idea digital?</span> Nosotros te ayudamos a convertirla en una tienda profesional, segura y escalable. <br>
        <span class="highlight">En KIVIC,</span> creemos que vender en línea no debería ser complicado.
      </p>
      <div class="cta-box" style="margin-top:2rem;">
        <p><strong>¿Listo para transformar tu negocio?</strong></p>
        <a href="contacto.php" class="btn-primary">Conversemos</a>
      </div>
    </div>
    <div class="card" data-aos="fade-left">
      <h3 data-es="MISIÓN" data-en="MISSION">MISIÓN</h3>
      <p class="justificado">
        Impulsamos la <strong>transformación digital</strong> de emprendedores mediante soluciones modulares de e-commerce que se adaptan a cada etapa de crecimiento.
      </p>
      <h3 data-es="VISIÓN" data-en="VISION" style="margin-top:1.8rem;">VISIÓN</h3>
      <p class="justificado">
        Para 2027, queremos ser la <strong>plataforma líder en Colombia</strong> en democratizar el comercio electrónico.
      </p>
    </div>
  </div>
</section>

<!-- OBJETIVO -->
<section class="container" id="objetivo">
  <h2 class="section-title" data-es="NUESTRO OBJETIVO" data-en="OUR GOAL">NUESTRO OBJETIVO</h2>
  <div class="card" data-aos="fade-up">
    <p>
      Facilitar la transición al comercio electrónico mediante una solución SaaS intuitiva que permite crear tiendas virtuales completas, seguras y listas para operar en minutos — sin código, con hosting, dominio y soporte incluido.
    </p>
  </div>
</section>

<!-- SERVICIOS -->
<section class="container" id="servicios">
  <h2 class="section-title" data-es="NUESTROS SERVICIOS" data-en="OUR SERVICES">NUESTROS SERVICIOS</h2>
  <div class="features-grid">
    <div class="feature-card card" data-aos="fade-up">
      <div class="feature-icon"><i class="fas fa-layer-group"></i></div>
      <h4>Activación por Etapas</h4>
      <p>Inicia con catálogo y carrito, luego escala con chatbot, CRM, analíticas y más.</p>
    </div>
    <div class="feature-card card" data-aos="fade-up" data-aos-delay="100">
      <div class="feature-icon"><i class="fas fa-scroll"></i></div>
      <h4>Narrativa Institucional</h4>
      <p>Espacio dedicado para contar tu historia, valores y conectar emocionalmente con tus clientes.</p>
    </div>
    <div class="feature-card card" data-aos="fade-up" data-aos-delay="200">
      <div class="feature-icon"><i class="fas fa-robot"></i></div>
      <h4>Chatbot Inteligente</h4>
      <p>Entrenado para responder sobre productos, envíos, promociones y atención 24/7.</p>
    </div>
    <div class="feature-card card" data-aos="fade-up" data-aos-delay="300">
      <div class="feature-icon"><i class="fas fa-globe"></i></div>
      <h4>Hosting y Dominio</h4>
      <p>Incluidos y gestionados. Sin contratos externos ni complicaciones técnicas.</p>
    </div>
    <div class="feature-card card" data-aos="fade-up" data-aos-delay="400">
      <div class="feature-icon"><i class="fas fa-tools"></i></div>
      <h4>Panel Sin Código</h4>
      <p>Interfaz visual intuitiva para editar, personalizar y lanzar tu tienda en minutos.</p>
    </div>
    <div class="feature-card card" data-aos="fade-up" data-aos-delay="500">
      <div class="feature-icon"><i class="fas fa-boxes"></i></div>
      <h4>Gestión de Productos e Inventario</h4>
      <p>Control total de stock, variantes, precios y carga masiva vía Excel o CSV.</p>
    </div>
    <div class="feature-card card" data-aos="fade-up" data-aos-delay="600">
      <div class="feature-icon"><i class="fas fa-credit-card"></i></div>
      <h4>Pasarelas de Pago Integradas</h4>
      <p>PayU, Mercado Pago, Stripe, Wompi. Pagos con tarjeta, transferencia o contra entrega.</p>
    </div>
    <div class="feature-card card" data-aos="fade-up" data-aos-delay="700">
      <div class="feature-icon"><i class="fas fa-headset"></i></div>
      <h4>Soporte Técnico y Capacitación</h4>
      <p>Guías paso a paso, asistencia por chat/correo y formación para tu equipo.</p>
    </div>
    <div class="feature-card card" data-aos="fade-up" data-aos-delay="800">
      <div class="feature-icon"><i class="fas fa-cogs"></i></div>
      <h4>Servicios Complementarios</h4>
      <p>Branding, SEO, email marketing, integración con redes sociales y más.</p>
    </div>
  </div>
</section>

<!-- PROVEEDORES -->
<section class="container" id="proveedores">
  <h2 class="section-title" data-es="NUESTROS PROVEEDORES" data-en="OUR PROVIDERS">NUESTROS PROVEEDORES</h2>
  <div class="features-grid">
    <div class="feature-card card" data-aos="fade-up">
      <div class="feature-icon"><i class="fas fa-server"></i></div>
      <h4>Hostinger, GoDaddy, Namecheap</h4>
      <p>Infraestructura de hosting y dominios</p>
    </div>
    <div class="feature-card card" data-aos="fade-up" data-aos-delay="100">
      <div class="feature-icon"><i class="fas fa-credit-card"></i></div>
      <h4>PayU, Mercado Pago, Wompi</h4>
      <p>Pasarelas de pago seguras</p>
    </div>
    <div class="feature-card card" data-aos="fade-up" data-aos-delay="200">
      <div class="feature-icon"><i class="fas fa-code"></i></div>
      <h4>Laravel, Python</h4>
      <p>Desarrollo backend propio</p>
    </div>
    <div class="feature-card card" data-aos="fade-up" data-aos-delay="300">
      <div class="feature-icon"><i class="fas fa-palette"></i></div>
      <h4>Figma, Canva</h4>
      <p>Diseño y branding</p>
    </div>
    <div class="feature-card card" data-aos="fade-up" data-aos-delay="400">
      <div class="feature-icon"><i class="fas fa-bullhorn"></i></div>
      <h4>Meta Ads, Google Ads</h4>
      <p>Publicidad digital</p>
    </div>
    <div class="feature-card card" data-aos="fade-up" data-aos-delay="500">
      <div class="feature-icon"><i class="fas fa-comments"></i></div>
      <h4>Chatbot & CRM</h4>
      <p>Integración con WhatsApp, Messenger y correo automatizado</p>
    </div>
  </div>
</section>

<!-- SELLOS -->
<section class="container" id="sellos">
  <h2 class="section-title" data-es="SELLOS DE GARANTÍA" data-en="GUARANTEE SEALS">SELLOS DE GARANTÍA</h2>
  <div class="grid-3">
    <div class="badge-item card" data-aos="fade-up"><i class="fas fa-gavel"></i><div><strong>Ley 527 de 1999</strong><br>Comercio Electrónico</div></div>
    <div class="badge-item card" data-aos="fade-up" data-aos-delay="100"><i class="fas fa-shield-alt"></i><div><strong>Ley 1581 de 2012</strong><br>Protección de Datos</div></div>
    <div class="badge-item card" data-aos="fade-up" data-aos-delay="200"><i class="fas fa-certificate"></i><div><strong>ISO 9001</strong><br>Gestión de Calidad</div></div>
    <div class="badge-item card" data-aos="fade-up" data-aos-delay="300"><i class="fas fa-lock"></i><div><strong>ISO 27001</strong><br>Seguridad de la Información</div></div>
  </div>
</section>

<!-- CLIENTES -->
<section class="container" id="clientes">
  <h2 class="section-title" data-es="NUESTROS CLIENTES" data-en="OUR CLIENTS">NUESTROS CLIENTES</h2>
  <div class="grid-3">
    <div class="client-item card" data-aos="fade-up"><h4>Tienda Moda Joven</h4><p>Calarcá, Quindío</p></div>
    <div class="client-item card" data-aos="fade-up" data-aos-delay="100"><h4>Artesanías del Eje</h4><p>Pereira, Risaralda</p></div>
    <div class="client-item card" data-aos="fade-up" data-aos-delay="200"><h4>Café Orgánico</h4><p>Armenia, Quindío</p></div>
  </div>
</section>


<!-- SECCIÓN DE RESEÑAS: MODAL + LISTA -->
<section class="container" id="reseñas">
  <h2 class="section-title" data-es="RESEÑAS" data-en="GUARANTEE SEALS">RESEÑAS</h2>
<div class="reviews-section" data-aos="fade-up" data-aos-delay="100">
  <!-- TÍTULO Y DESCRIPCIÓN -->
  <h1 class="section-title" data-es="RESEÑA" data-en="REVIEW">TU OPINIÓN TRANSFORMA</h1>
  <p class="justificado">
    En KIVIC, cada reseña es una oportunidad para mejorar, crecer y construir soluciones más útiles para emprendedores como tú.
    Cuéntanos tu experiencia: lo que te gustó, lo que podemos mejorar y lo que te gustaría ver. Tu voz impulsa nuestra evolución.
  </p>

  <!-- BOTÓN QUE ABRE EL MODAL -->
  <div class="review-trigger">
    <button class="btn-primary" onclick="openReviewModal()">
      Enviar Reseña
    </button>
  </div>

  <!-- LISTA DE RESEÑAS (PUBLICADAS) -->
  <div class="reviews-list" id="reviewsList">
    <!-- Las reseñas se insertan aquí dinámicamente -->
  </div>
</div>

<!-- MODAL DE RESEÑA -->
<div class="modal-overlay" id="reviewModal">
  <div class="modal-content review-modal">
    <div class="modal-header">
      <h3>Deja tu reseña sobre KIVIC</h3>
      <span class="modal-close" onclick="closeReviewModal()">×</span>
    </div>
    <form id="reviewForm" class="review-form">
      <div class="form-group">
        <input type="text" id="reviewName" placeholder="Tu nombre *" required>
      </div>
      <div class="form-group">
        <input type="text" id="reviewBusiness" placeholder="Nombre de tu negocio (opcional)">
      </div>
      <div class="form-group">
        <textarea id="reviewText" rows="4" placeholder="Cuéntanos tu experiencia..." required></textarea>
      </div>
      <div class="form-group">
        <label>Calificación:</label>
        <div class="stars" id="reviewStars">
          <i class="far fa-star" data-value="1"></i>
          <i class="far fa-star" data-value="2"></i>
          <i class="far fa-star" data-value="3"></i>
          <i class="far fa-star" data-value="4"></i>
          <i class="far fa-star" data-value="5"></i>
        </div>
      </div>
      <button type="submit" class="btn-register">
        Enviar reseña
      </button>
      <p class="terms">
        Tu reseña será publicada y enviada a nuestro equipo.
      </p>
    </form>
  </div>
</div>
</section>

  <!-- FAQ -->
  <div class="faq" data-aos="fade-up" data-aos-delay="200">
    <h2 class="section-title" data-es="PREGUNTAS FRECUENTES" data-en="FREQUENTLY ASKED QUESTIONS">PREGUNTAS FRECUENTES</h2>

    <!-- 7 PREGUNTAS FAQ -->
    <div class="faq-item">
      <div class="faq-header" onclick="toggleAccordion(this)">
        <span>¿Necesito saber programación para usar KIVIC?</span>
      </div>
      <div class="faq-content">
        <p>No. Todo se gestiona desde un panel visual intuitivo. No se requiere código ni conocimientos técnicos.</p>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-header" onclick="toggleAccordion(this)">
        <span>¿Qué incluye el plan básico?</span>
      </div>
      <div class="faq-content">
        <p>Catálogo de productos, carrito de compras, hosting, dominio .com, SSL y soporte por chat.</p>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-header" onclick="toggleAccordion(this)">
        <span>¿Puedo personalizar el diseño de mi tienda?</span>
      </div>
      <div class="faq-content">
        <p>Sí. Puedes editar colores, tipografías, imágenes y secciones desde el panel visual sin necesidad de código. También puedes integrar tu logo y narrativa institucional.</p>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-header" onclick="toggleAccordion(this)">
        <span>¿Qué pasarelas de pago están disponibles?</span>
      </div>
      <div class="faq-content">
        <p>Actualmente puedes integrar PayU, Mercado Pago, Stripe y Wompi. Todas permiten pagos con tarjeta, transferencia o contra entrega.</p>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-header" onclick="toggleAccordion(this)">
        <span>¿Cómo gestiono mi inventario?</span>
      </div>
      <div class="faq-content">
        <p>Desde el panel sin código puedes controlar stock, variantes, precios y realizar carga masiva de productos vía Excel o CSV.</p>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-header" onclick="toggleAccordion(this)">
        <span>¿La plataforma incluye soporte técnico?</span>
      </div>
      <div class="faq-content">
        <p>Sí. Ofrecemos asistencia por chat y correo, además de guías paso a paso y capacitación para tu equipo.</p>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-header" onclick="toggleAccordion(this)">
        <span>¿Puedo contar mi historia como marca?</span>
      </div>
      <div class="faq-content">
        <p>Claro. KIVIC incluye una sección de narrativa institucional donde puedes compartir tu misión, visión, valores y conectar emocionalmente con tus clientes.</p>
      </div>
    </div>
  </div>
</section>
  <div class="banner" data-aos="fade-up" data-aos-delay="100">
    <h3>
      Prueba KIVIC GRATIS por 30 días<br>
      <strong>Transforma tu negocio físico en una tienda virtual profesional</strong>
    </h3>
    <form action="contacto.php" method="POST">
      <input type="email" name="email" placeholder="Ingresa tu correo" required>
      <button type="submit"><i class="fas fa-arrow-right"></i></button>
    </form>
  </div>

  <div class="faq" data-aos="fade-up" data-aos-delay="200">
    <h2 class="section-title" data-es="PREGUNTAS FRECUENTES" data-en="FREQUENTLY ASKED QUESTIONS">PREGUNTAS FRECUENTES</h2>
    <!-- FAQ items aquí (mismo que antes) -->
    <div class="faq-item">
      <div class="faq-header" onclick="toggleAccordion(this)">
        <span>¿Qué es KIVIC?</span>
      </div>
      <div class="faq-content">
        <p>KIVIC es una plataforma SaaS modular sin código que permite crear tiendas virtuales completas con hosting, dominio, chatbot, pasarelas de pago y soporte técnico incluidos.</p>
      </div>
    </div>
    <div class="faq-item">
  <div class="faq-header" onclick="toggleAccordion(this)">
    <span>¿Necesito saber programación para usar KIVIC?</span>
  </div>
  <div class="faq-content">
    <p>No. Todo se gestiona desde un panel visual intuitivo. No se requiere código ni conocimientos técnicos.</p>
  </div>
</div>

<div class="faq-item">
  <div class="faq-header" onclick="toggleAccordion(this)">
    <span>¿Qué incluye el plan básico?</span>
  </div>
  <div class="faq-content">
    <p>Catálogo de productos, carrito de compras, hosting, dominio .com, SSL y soporte por chat.</p>
  </div>
</div>

<div class="faq-item">
  <div class="faq-header" onclick="toggleAccordion(this)">
    <span>¿Puedo personalizar el diseño de mi tienda?</span>
  </div>
  <div class="faq-content">
    <p>Sí. Puedes editar colores, tipografías, imágenes y secciones desde el panel visual sin necesidad de código. También puedes integrar tu logo y narrativa institucional.</p>
  </div>
</div>

<div class="faq-item">
  <div class="faq-header" onclick="toggleAccordion(this)">
    <span>¿Qué pasarelas de pago están disponibles?</span>
  </div>
  <div class="faq-content">
    <p>Actualmente puedes integrar PayU, Mercado Pago, Stripe y Wompi. Todas permiten pagos con tarjeta, transferencia o contra entrega.</p>
  </div>
</div>

<div class="faq-item">
  <div class="faq-header" onclick="toggleAccordion(this)">
    <span>¿Cómo gestiono mi inventario?</span>
  </div>
  <div class="faq-content">
    <p>Desde el panel sin código puedes controlar stock, variantes, precios y realizar carga masiva de productos vía Excel o CSV.</p>
  </div>
</div>

<div class="faq-item">
  <div class="faq-header" onclick="toggleAccordion(this)">
    <span>¿La plataforma incluye soporte técnico?</span>
  </div>
  <div class="faq-content">
    <p>Sí. Ofrecemos asistencia por chat y correo, además de guías paso a paso y capacitación para tu equipo.</p>
  </div>
</div>

<div class="faq-item">
  <div class="faq-header" onclick="toggleAccordion(this)">
    <span>¿Puedo contar mi historia como marca?</span>
  </div>
  <div class="faq-content">
    <p>Claro. KIVIC incluye una sección de narrativa institucional donde puedes compartir tu misión, visión, valores y conectar emocionalmente con tus clientes.</p>
  </div>
</div>
    <!-- ... más preguntas ... -->
  </div>
</section>

<!-- CONTACTO -->
<section class="container" id="contacto">
  <h2 class="section-title" data-es="CONTÁCTANOS" data-en="CONTACT US">CONTÁCTANOS</h2>
  <div class="contact-grid">
    <div class="contact-item" data-aos="fade-up">
      <i class="fas fa-phone"></i>
      <div>+57 314 254 2855</div>
    </div>
    <div class="contact-item" data-aos="fade-up" data-aos-delay="100">
      <i class="fas fa-envelope"></i>
      <div>contacto@kivic.com</div>
    </div>
    <div class="contact-item" data-aos="fade-up" data-aos-delay="200">
      <i class="fas fa-map-marker-alt"></i>
      <div>Calarcá, Quindío – Colombia</div>
    </div>
    <div class="contact-item" data-aos="fade-up" data-aos-delay="300">
      <i class="fab fa-instagram"></i>
      <div>@kivic.ecommerce</div>
    </div>
  </div>
</section>

<!-- SOCIOS -->
<section class="container" id="socios">
  <h2 class="section-title" data-es="SOCIOS ESTRATÉGICOS" data-en="STRATEGIC PARTNERS">SOCIOS ESTRATÉGICOS</h2>
  <div class="team-scroll-container">
    <div class="team-scroll" id="teamScroll">
      <div class="team-card" data-aos="fade-up">
        <img src="assets/img/equipo/victor.jpg" alt="Víctor A. Gutiérrez L." class="team-img">
        <div class="team-info">
          <h4>Víctor A. Gutiérrez L.</h4>
          <p>Desarrollador Backend</p>
        </div>
      </div>
      <div class="team-card" data-aos="fade-up" data-aos-delay="100">
        <img src="assets/img/equipo/karen.jpg" alt="Karen P. Regino M." class="team-img">
        <div class="team-info">
          <h4>Karen P. Regino M.</h4>
          <p>Diseñadora UX/UI</p>
        </div>
      </div>
      <div class="team-card" data-aos="fade-up" data-aos-delay="200">
        <img src="assets/img/equipo/cesar.jpg" alt="César A. Muñoz T." class="team-img">
        <div class="team-info">
          <h4>César A. Muñoz T.</h4>
          <p>Desarrollador Frontend</p>
        </div>
      </div>
      <div class="team-scroll-spacer"></div>
    </div>
  </div>
  <div class="scroll-hint">
    <i class="fas fa-chevron-left"></i>
    <span data-es="Desliza para ver más" data-en="Swipe to see more">Desliza para ver más</span>
    <i class="fas fa-chevron-right"></i>
  </div>
</section>

<?php include 'includes/footer.php'; ?>