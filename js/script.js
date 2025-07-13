// ✅ /js/script.js — Πλήρης, διορθωμένος κώδικας

document.addEventListener('DOMContentLoaded', () => {
  const htmlEl = document.documentElement;

  // 🕒 Ενημέρωση έτους στο footer
  const yearSpan = document.getElementById('displayYear');
  if (yearSpan) yearSpan.textContent = new Date().getFullYear();

  // 🎨 Φόρτωση αποθηκευμένου theme (ή default "midnight")
  const themeSelFooter = document.getElementById('theme-dropdown-footer');
  const savedTheme = localStorage.getItem('theme') || 'midnight';
  htmlEl.setAttribute('data-theme', savedTheme);
  if (themeSelFooter) themeSelFooter.value = savedTheme;

  // 🌗 Theme toggle από το κουμπί του header
  document.getElementById('theme-toggle')?.addEventListener('click', () => {
    const current = htmlEl.getAttribute('data-theme') || 'midnight';
    const next = current === 'midnight' ? 'light' : current === 'light' ? 'charcoal' : 'midnight';
    htmlEl.setAttribute('data-theme', next);
    localStorage.setItem('theme', next);
    if (themeSelFooter) themeSelFooter.value = next;
  });

  // 🎛️ Εναλλαγή theme από dropdown στο footer
  themeSelFooter?.addEventListener('change', (e) => {
    const sel = e.target.value;
    htmlEl.setAttribute('data-theme', sel);
    localStorage.setItem('theme', sel);
  });

  // 📱 ✅ Mobile menu toggle (διόρθωση για dynamic DOM)
  document
    .getElementById('mobile-menu-button')
    ?.addEventListener('click', () => {
      document.getElementById('mobile-menu')?.classList.toggle('hidden');
    });

  // 🔐 Login modal λειτουργίες
  const loginModal = document.getElementById('login-modal');
  const openBtn = document.getElementById('open-login-modal');
  const openBtnMobile = document.getElementById('mobile-login-button');
  const closeBtn = document.getElementById('close-login-modal');
  const cancelBtn = document.getElementById('cancel-button');
  const form = document.getElementById('login-form');
  const usernameField = document.getElementById('username');
  const passwordField = document.getElementById('password');
  const rememberCheckbox = document.getElementById('remember-me');

  function openLoginModal() {
    if (!loginModal) return;
    loginModal.classList.remove('hidden', 'opacity-0', 'pointer-events-none');
    loginModal.classList.add('flex', 'opacity-100');
    const remembered = localStorage.getItem('remembered-username');
    if (remembered && usernameField && rememberCheckbox) {
      usernameField.value = remembered;
      rememberCheckbox.checked = true;
    }
  }

  function closeLoginModal() {
    if (!loginModal) return;
    loginModal.classList.replace('opacity-100', 'opacity-0');
    loginModal.classList.add('pointer-events-none');
    setTimeout(() => {
      loginModal.classList.replace('flex', 'hidden');
      if (usernameField) usernameField.value = '';
      if (passwordField) passwordField.value = '';
      if (rememberCheckbox) rememberCheckbox.checked = false;
    }, 300);
  }

  // 🔐 Ενεργοποίηση modal από κουμπιά
  openBtn?.addEventListener('click', openLoginModal);
  openBtnMobile?.addEventListener('click', openLoginModal);
  closeBtn?.addEventListener('click', closeLoginModal);
  cancelBtn?.addEventListener('click', closeLoginModal);

  // 🔐 Κλείσιμο modal αν γίνει click εκτός
  loginModal?.addEventListener('click', (e) => {
    if (e.target === loginModal) closeLoginModal();
  });

  // 🔐 Κλείσιμο modal με ESC
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closeLoginModal();
  });

  // 🔐 Υποβολή login form
  form?.addEventListener('submit', async (e) => {
    e.preventDefault();
    const user = usernameField?.value.trim() || '';
    const pass = passwordField?.value.trim() || '';
    const rem = rememberCheckbox?.checked;

    if (!user || !pass) {
      alert('Συμπλήρωσε όλα τα πεδία.');
      return;
    }

    const res = await fetch('/api/login', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({ username: user, password: pass })
    });

    const data = await res.json();
    if (data.success) {
      alert('Επιτυχής σύνδεση!');
      if (rem) localStorage.setItem('remembered-username', user);
      else localStorage.removeItem('remembered-username');
      closeLoginModal();
    } else {
      alert('Λάθος στοιχεία.');
    }
  });

  // 🔐 Επιτρέπει εξωτερικό κλείσιμο του modal
  window.closeLoginModal = closeLoginModal;

  // 🖼️ Εναλλαγή logos γίνεται μόνο από CSS (logo-light / logo-dark)
});
