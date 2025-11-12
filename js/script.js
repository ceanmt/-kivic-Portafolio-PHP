// Inicialización de AOS
AOS.init({ duration: 800, once: true });

// Navbar scroll
window.addEventListener('scroll', () => {
  document.getElementById('navbar').classList.toggle('scrolled', window.scrollY > 50);
});

// Cambio de idioma
function setLang(lang) {
  document.querySelectorAll('[data-es]').forEach(el => {
    const key = lang === 'es' ? 'data-es' : 'data-en';
    const text = el.getAttribute(key);
    if (text) el.textContent = text;
  });
  document.querySelectorAll('.lang-toggle button').forEach(btn => {
    btn.classList.toggle('active', btn.getAttribute('onclick').includes(lang));
  });
}

// Drawer móvil
function toggleDrawer() {
  document.getElementById('drawer').classList.toggle('open');
}

// FAQ Accordion
function toggleAccordion(el) {
  el.classList.toggle('active');
  const content = el.nextElementSibling;
  content.style.maxHeight = content.style.maxHeight ? null : content.scrollHeight + 20 + "px";
}

// Modo Oscuro
function toggleTheme() {
  const body = document.body;
  const current = body.getAttribute('data-theme');
  const newTheme = current === 'dark' ? 'light' : 'dark';
  body.setAttribute('data-theme', newTheme);
  const icon = document.querySelector('.theme-toggle i');
  icon.classList.toggle('fa-moon');
  icon.classList.toggle('fa-sun');
  localStorage.setItem('theme', newTheme);
}

// Cargar tema guardado
window.addEventListener('load', () => {
  const saved = localStorage.getItem('theme') || 'light';
  document.body.setAttribute('data-theme', saved);
  const icon = document.querySelector('.theme-toggle i');
  icon.classList.add(saved === 'dark' ? 'fa-sun' : 'fa-moon');
});

// WhatsApp
function toggleWhatsApp() {
  document.getElementById('whatsappModal').classList.toggle('open');
}

function sendWhatsApp() {
  const input = document.getElementById('whatsappInput');
  const msg = input.value.trim();
  if (!msg) return;
  const phone = "573142542855";
  const url = `https://wa.me/${phone}?text=${encodeURIComponent(msg)}`;
  window.open(url, '_blank');
  input.value = '';
  toggleWhatsApp();
}

// Scroll horizontal socios
const teamScroll = document.getElementById('teamScroll');
const scrollHint = document.querySelector('.scroll-hint');
if (teamScroll && scrollHint) {
  teamScroll.addEventListener('scroll', () => {
    if (teamScroll.scrollLeft > 50) {
      scrollHint.style.opacity = '0';
      scrollHint.style.pointerEvents = 'none';
    }
  });
  teamScroll.addEventListener('mouseenter', () => {
    if (teamScroll.scrollLeft === 0) {
      scrollHint.style.opacity = '0.8';
    }
  });
}
// ABRIR Y CERRAR MODAL DE REGISTRO
function openRegisterModal() {
  document.getElementById('registerModal').classList.add('open');
  document.body.style.overflow = 'hidden'; // Evita scroll
}

function closeRegisterModal() {
  document.getElementById('registerModal').classList.remove('open');
  document.body.style.overflow = 'auto';
}

// Cerrar al hacer clic fuera del modal
window.addEventListener('click', (e) => {
  const modal = document.getElementById('registerModal');
  if (e.target === modal) {
    closeRegisterModal();
  }
});
// MODAL DE RESEÑA
function openReviewModal() {
  document.getElementById('reviewModal').classList.add('open');
  document.body.style.overflow = 'hidden';
}

function closeReviewModal() {
  document.getElementById('reviewModal').classList.remove('open');
  document.body.style.overflow = 'auto';
}

window.addEventListener('click', (e) => {
  const modal = document.getElementById('reviewModal');
  if (e.target === modal) closeReviewModal();
});

// ESTRELLAS
let selectedRating = 0;
document.getElementById('reviewStars').addEventListener('click', (e) => {
  if (e.target.tagName === 'I') {
    selectedRating = e.target.getAttribute('data-value');
    document.querySelectorAll('#reviewStars i').forEach((star, i) => {
      star.classList.toggle('filled', i < selectedRating);
    });
  }
});

// ENVIAR RESEÑA
document.getElementById('reviewForm').addEventListener('submit', async (e) => {
  e.preventDefault();

  const name = document.getElementById('reviewName').value.trim();
  const business = document.getElementById('reviewBusiness').value.trim();
  const text = document.getElementById('reviewText').value.trim();

  if (!name || !text || selectedRating === 0) {
    alert('Completa todos los campos y selecciona una calificación.');
    return;
  }

  const recommend = selectedRating >= 4 ? 'yes' : 'no';
  const recommendText = recommend === 'yes' ? 'Recomendada' : 'No recomendada';

  try {
    const response = await fetch('enviar-resena.php', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        nombre: name,
        negocio: business,
        texto: text,
        calificacion: selectedRating,
        recomendada: recommendText
      })
    });

    if (response.ok) {
      const reviewHTML = `
        <div class="review-item" data-aos="fade-up">
          <div class="review-header">
            <div>
              <span class="review-author">${name}</span>
              ${business ? `<span class="review-business">– ${business}</span>` : ''}
            </div>
            <span class="review-recommend ${recommend}">${recommendText}</span>
          </div>
          <div class="review-stars">
            ${Array(5).fill().map((_, i) => 
              `<i class="fas fa-star${i < selectedRating ? '' : '-o'}"></i>`
            ).join('')}
          </div>
          <p class="review-text">"${text}"</p>
        </div>
      `;

      document.getElementById('reviewsList').insertAdjacentHTML('afterbegin', reviewHTML);
      AOS.refresh();
      closeReviewModal();

      e.target.reset();
      selectedRating = 0;
      document.querySelectorAll('#reviewStars i').forEach(star => star.classList.remove('filled'));

      alert('¡Gracias! Tu reseña fue enviada y publicada.');
    } else {
      throw new Error();
    }
  } catch (err) {
    alert('Error al enviar. Intenta de nuevo.');
  }
});