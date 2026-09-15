const form = document.querySelector('[data-auth-page]');
const message = document.querySelector('[data-auth-page-message]');
const mode = form?.dataset.authPage;
const apiBase = window.location.pathname.includes('/public/') ? '../api' : 'api';
const endpoint = mode === 'register' ? `${apiBase}/auth/register.php` : `${apiBase}/auth/login.php`;
const passwordToggle = document.querySelector('[data-password-toggle]');
const passwordInput = document.querySelector('#login-password');
const rememberEmail = document.querySelector('[data-remember]');
const emailInput = document.querySelector('#login-email');

if (emailInput && localStorage.getItem('cc-login-email')) {
  emailInput.value = localStorage.getItem('cc-login-email');
  if (rememberEmail) rememberEmail.checked = true;
}

passwordToggle?.addEventListener('click', () => {
  const visible = passwordInput.type === 'text';
  passwordInput.type = visible ? 'password' : 'text';
  passwordToggle.textContent = visible ? 'Show' : 'Hide';
  passwordToggle.setAttribute('aria-label', visible ? 'Show password' : 'Hide password');
});

form?.addEventListener('submit', async event => {
  event.preventDefault();
  message.textContent = 'Connecting...';
  message.className = 'form-message';
  const payload = Object.fromEntries(new FormData(form));
  if (mode === 'login' && emailInput) {
    rememberEmail?.checked ? localStorage.setItem('cc-login-email', emailInput.value) : localStorage.removeItem('cc-login-email');
  }
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
