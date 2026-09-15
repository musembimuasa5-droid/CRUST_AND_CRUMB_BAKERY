const form = document.querySelector('[data-auth-page]');
const message = document.querySelector('[data-auth-page-message]');
const mode = form?.dataset.authPage;
const apiBase = window.location.pathname.includes('/public/') ? '../api' : 'api';
const endpoint = mode === 'register' ? `${apiBase}/auth/register.php` : `${apiBase}/auth/login.php`;

form?.addEventListener('submit', async event => {
  event.preventDefault();
  message.textContent = 'Connecting...';
  message.className = 'form-message';
  const payload = Object.fromEntries(new FormData(form));
  try {
    const response = await fetch(endpoint, { method: 'POST', headers: {'Content-Type': 'application/json'}, body: JSON.stringify(payload) });
    const result = await response.json();
    if (!response.ok || !result.success) throw new Error(result.message || 'Please check your details and try again.');
    message.textContent = mode === 'register' ? 'Account created. Taking you to sign in...' : 'Signed in successfully. Returning to the bakehouse...';
    message.classList.add('success');
    setTimeout(() => { window.location.href = mode === 'register' ? 'login.php' : './'; }, 700);
  } catch (error) {
    message.textContent = error.message;
    message.classList.add('error');
  }
});
