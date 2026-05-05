// Navbar scroll
window.addEventListener('scroll', () => {
  document.getElementById('navbar').classList.toggle('scrolled', scrollY > 50);
});

// Hamburger
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');
hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('open');
  mobileMenu.classList.toggle('open');
});
document.querySelectorAll('.mobile-link').forEach(link => {
  link.addEventListener('click', () => {
    hamburger.classList.remove('open');
    mobileMenu.classList.remove('open');
  });
});

// Reveal on scroll
const revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
const observer = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) { e.target.classList.add('visible'); observer.unobserve(e.target); }
  });
}, { threshold: 0.12 });
revealEls.forEach(el => observer.observe(el));

// Tab switcher
function showTab(id, btn) {
  document.querySelectorAll('.sol-content').forEach(el => el.classList.remove('active'));
  document.querySelectorAll('.sol-tab').forEach(el => el.classList.remove('active'));
  document.getElementById('tab-' + id).classList.add('active');
  btn.classList.add('active');
}

// FAQ accordion
function toggleFaq(btn) {
  const item = btn.closest('.faq-item');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.faq-item').forEach(el => el.classList.remove('open'));
  if (!isOpen) item.classList.add('open');
}

// Rack selector
const selectedRacks = new Set();
function toggleRack(el) {
  const name = el.dataset.name;
  el.classList.toggle('selected');
  if (el.classList.contains('selected')) selectedRacks.add(name);
  else selectedRacks.delete(name);
  document.getElementById('racksSelected').value = [...selectedRacks].join(', ');
}

// Form submit
function submitForm(e) {
  e.preventDefault();
  const form = e.target;
  const data = new FormData(form);

  // Build WhatsApp message
  const nombre = data.get('nombre') || '';
  const empresa = data.get('empresa') || '';
  const telefono = data.get('telefono') || '';
  const email = data.get('email') || '';
  const ciudad = data.get('ciudad') || '';
  const urgencia = data.get('urgencia') || '';
  const racks = document.getElementById('racksSelected').value || '';
  const espacio = data.get('espacio') || '';
  const mensaje = data.get('mensaje') || '';

  const waText = encodeURIComponent(
    `*Nueva solicitud de cotización desde el sitio web*\n\n` +
    `👤 Nombre: ${nombre}\n` +
    `🏢 Empresa: ${empresa || 'No especificada'}\n` +
    `📞 Teléfono: ${telefono}\n` +
    `✉️ Email: ${email}\n` +
    `📍 Ciudad: ${ciudad || 'No especificada'}\n` +
    `⏰ Urgencia: ${urgencia || 'No especificada'}\n` +
    `🏗️ Racks de interés: ${racks || 'No especificados'}\n` +
    `📐 Espacio: ${espacio || 'No especificado'}\n\n` +
    `💬 Detalle:\n${mensaje || 'Sin detalle adicional'}`
  );

  // Show success
  document.getElementById('formContent').style.display = 'none';
  document.getElementById('formSuccess').style.display = 'block';
  document.getElementById('formSuccess').innerHTML = `
    <div style="font-size:3rem;margin-bottom:1rem">🎉</div>
    <h3 style="color:var(--accent);font-size:2rem;margin-bottom:.5rem">¡Solicitud enviada!</h3>
    <p style="color:rgba(255,255,255,.7)">Un asesor te contactará en menos de 24 horas.</p>
    <div style="margin-top:1.5rem">
      <a href="https://wa.me/595984034538?text=${waText}" target="_blank" class="btn btn-accent" style="margin:0 auto">
        ✅ También enviá tu consulta por WhatsApp
      </a>
    </div>
  `;

  // Open WhatsApp automatically
  setTimeout(() => {
    window.open(`https://wa.me/595984034538?text=${waText}`, '_blank');
  }, 800);
}
