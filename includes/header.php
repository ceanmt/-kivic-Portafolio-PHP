<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $title ?? 'KIVIC'; ?></title>
  <meta name="description" content="Plataforma SaaS modular sin código para crear tiendas virtuales profesionales con hosting, dominio y chatbot incluidos.">

  <!-- Fuentes -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">

  <!-- Iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" />

  <!-- Animaciones -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="css/styles.css">
</head>
<body data-theme="light">

  <!-- DRAWER TOGGLE -->
  <div class="drawer-toggle" onclick="toggleDrawer()">
    <i class="fas fa-bars"></i>
  </div>

  <!-- DRAWER MÓVIL -->
  <div class="drawer" id="drawer">
    <div class="drawer-header">
      <h3>KIVIC</h3>
      <div class="drawer-close" onclick="toggleDrawer()">X</div>
    </div>
    <div class="drawer-nav">
      <a href="index.php#inicio" onclick="toggleDrawer()">Inicio</a>
      <a href="index.php#quienes" onclick="toggleDrawer()">¿Quiénes Somos?</a>
      <a href="index.php#objetivo" onclick="toggleDrawer()">Objetivo</a>
      <a href="index.php#servicios" onclick="toggleDrawer()">Servicios</a>
      <a href="index.php#proveedores" onclick="toggleDrawer()">Proveedores</a>
      <a href="index.php#sellos" onclick="toggleDrawer()">Sellos</a>
      <a href="index.php#clientes" onclick="toggleDrawer()">Clientes</a>
      <a href="index.php#testimonio" onclick="toggleDrawer()">Testimonio</a>
      <a href="contacto.php" onclick="toggleDrawer()">Contacto</a>
      <a href="index.php#socios" onclick="toggleDrawer()">Socios</a>
    </div>
  </div>

  <!-- NAVBAR -->
  <nav class="navbar" id="navbar">
    <div class="container nav-container">
      <div class="logo-nav">
        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
          <circle cx="50" cy="50" r="45" fill="none" stroke="#00d4ff" stroke-width="4"/>
          <path d="M30 40 L45 55 L55 45 L70 60" stroke="#00d4ff" stroke-width="4" fill="none"/>
          <circle cx="50" cy="50" r="18" fill="#00d4ff"/>
        </svg>
        PORTAFOLIO KIVIC E-COMMERCE
      </div>
      <div class="nav-links">
        <a href="index.php#inicio">Inicio</a>
        <a href="index.php#servicios">Servicios</a>
        <a href="index.php#clientes">Clientes</a>
        <a href="contacto.php">Contacto</a>
        <a href="index.php#testimonio">FAQ</a>
      </div>
      <div style="display: flex; align-items: center; gap: 1rem;">
        <div class="lang-toggle">
          <button class="active" onclick="setLang('es')">ES</button>
          <button onclick="setLang('en')">EN</button>
        </div>
        <button class="theme-toggle" onclick="toggleTheme()" title="Cambiar tema">
          <i class="fas fa-moon"></i>
        </button>
      </div>
    </div>
  </nav>

  <!-- WHATSAPP FLOAT -->
  <div class="whatsapp-float" onclick="toggleWhatsApp()">
    <i class="fab fa-whatsapp"></i>
  </div>

  <!-- WHATSAPP MODAL -->
  <div class="whatsapp-modal" id="whatsappModal">
    <div class="whatsapp-header">
      <img src="https://cdn-icons-png.flaticon.com/512/9485/9485982.png" alt="Soporte">
      <div>
        <div style="font-weight:600;">Soporte KIVIC</div>
        <small>Respuesta en menos de 2 min</small>
      </div>
    </div>
    <div class="whatsapp-body">
      <div class="whatsapp-message">
        ¡Hola! ¿En qué puedo ayudarte hoy? Estoy aquí para resolver tus dudas sobre KIVIC.
      </div>
    </div>
    <div class="whatsapp-input">
      <input type="text" placeholder="Escribe un mensaje..." id="whatsappInput" onkeypress="if(event.key==='Enter') sendWhatsApp()">
      <button onclick="sendWhatsApp()">
        <i class="fas fa-paper-plane"></i>
      </button>
    </div>
  </div>