const forms = document.querySelectorAll('.leadform');

const phoneErrorMap = {
  0: 'Bitte geben Sie eine gültige Telefonnummer ein',
  1: 'Ungültige Ländervorwahl',
  2: 'Die Telefonnummer ist zu kurz',
  3: 'Die Telefonnummer ist zu lang',
  4: 'Bitte geben Sie eine gültige Telefonnummer ein',
};

function getLeadCookieName(form) {
  return form.dataset.leadCookie || 'lead_submitted';
}

function getLeadCookieDays(form) {
  const days = parseInt(form.dataset.cookieDays || '30', 10);
  return Number.isFinite(days) && days > 0 ? days : 30;
}

function hasLeadCookie(form) {
  const name = getLeadCookieName(form);
  return document.cookie.split(';').some((part) => part.trim().startsWith(`${name}=`));
}

function setLeadCookie(form) {
  const name = getLeadCookieName(form);
  const days = getLeadCookieDays(form);
  const expires = new Date();
  expires.setTime(expires.getTime() + days * 24 * 60 * 60 * 1000);
  document.cookie = `${name}=1;expires=${expires.toUTCString()};path=/;SameSite=Lax`;
}

function showAlreadyRegistered(form) {
  form.querySelector('[data-form-fields]')?.classList.add('hidden');
  form.querySelector('[data-already-registered]')?.classList.remove('hidden');
}

function getFieldWrap(input) {
  return input?.closest('.field') ?? null;
}

function clearFieldError(input) {
  const wrap = getFieldWrap(input);
  if (!wrap) return;
  wrap.classList.remove('is-invalid');
  const err = wrap.querySelector('.field-error');
  if (err) {
    err.textContent = '';
    err.classList.add('hide');
  }
  input?.removeAttribute('aria-invalid');
}

function setFieldError(input, message) {
  const wrap = getFieldWrap(input);
  if (!wrap) return;
  const err = wrap.querySelector('.field-error');
  wrap.classList.add('is-invalid');
  if (err) {
    err.textContent = message;
    err.classList.remove('hide');
  }
  input.setAttribute('aria-invalid', 'true');
}

function showFormMessage(form, message) {
  const box = form.querySelector('[data-form-message]');
  const content = form.querySelector('[data-form-message-content]');
  if (!box || !content) return;
  content.textContent = message;
  box.classList.remove('hidden');
}

function hideFormMessage(form) {
  const box = form.querySelector('[data-form-message]');
  const content = form.querySelector('[data-form-message-content]');
  if (box) box.classList.add('hidden');
  if (content) content.textContent = '';
}

/** Vorname, Nachname, E-Mail — native Browser-Validierung. */
function validateNativeFields(form) {
  const nativeFields = [
    form.querySelector('input[name="fname"]'),
    form.querySelector('input[name="lname"]'),
    form.querySelector('input[name="email"]'),
  ].filter(Boolean);

  for (const input of nativeFields) {
    if (!input.checkValidity()) {
      input.reportValidity();
      input.focus();
      return false;
    }
  }
  return true;
}

function validatePhone(phoneInput, iti) {
  const trimmed = phoneInput.value.trim();
  if (!trimmed) return 'Bitte geben Sie Ihre Telefonnummer ein';
  if (!iti.isValidNumber()) {
    const code = iti.getValidationError();
    return phoneErrorMap[code] || 'Bitte geben Sie eine gültige Telefonnummer ein';
  }
  return '';
}

function focusInvalidField(input) {
  if (!input) return;
  input.focus({ preventScroll: false });
  input.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

function getThanksPageUrl(formAction, thankYouFile = 'Thanks.php') {
  const url = new URL(formAction, window.location.href);
  url.pathname = url.pathname.replace(/\/integration\/send\.php$/i, `/${thankYouFile}`);
  url.search = '';
  url.hash = '';
  return url;
}

function setupFormValidation(form) {
  if (hasLeadCookie(form)) {
    showAlreadyRegistered(form);
    return;
  }

  const phone = form.querySelector('input[name="fullphone"]');
  const preloader = form.querySelector('.form-preloader');
  const phoneCountry = form.querySelector('input[name="phone_country"]')?.value || 'pt';

  let onlyCountries = [];
  try {
    onlyCountries = JSON.parse(form.querySelector('input[name="only_countries"]')?.value || '[]');
  } catch (_) {}

  if (!phone || !window.intlTelInput) return;

  const iti = window.intlTelInput(phone, {
    utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/utils.js',
    separateDialCode: true,
    initialCountry: phoneCountry,
    onlyCountries: onlyCountries.length ? onlyCountries : undefined,
  });

  phone.addEventListener('input', () => {
    clearFieldError(phone);
    hideFormMessage(form);
  });

  phone.addEventListener('blur', () => {
    const raw = phone.value.trim();
    if (raw.startsWith('+')) {
      iti.setNumber(raw);
    }
    const msg = validatePhone(phone, iti);
    if (msg) setFieldError(phone, msg);
    else clearFieldError(phone);
  });

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    hideFormMessage(form);

    if (!validateNativeFields(form)) return;

    clearFieldError(phone);
    const phoneError = validatePhone(phone, iti);
    if (phoneError) {
      setFieldError(phone, phoneError);
      focusInvalidField(phone);
      return;
    }

    preloader?.classList.remove('hidden');

    const fullPhone = iti.getNumber();
    const formData = new FormData(form);
    formData.set('fullphone', fullPhone);
    const language = form.querySelector('input[name="language"]')?.value || 'en';

    try {
      const res = await fetch(form.action, { method: 'POST', body: formData });
      const data = await res.json();

      if (!data.ok) {
        showFormMessage(form, data.error || 'Es ist ein Fehler aufgetreten. Bitte versuchen Sie es später erneut.');
        return;
      }

      setLeadCookie(form);

      const thanks = getThanksPageUrl(form.action, data.thank_you_url || 'Thanks.php');

      window.location.href = thanks.href;
    } catch (err) {
      console.error(err);
      showFormMessage(form, 'Verbindungsfehler. Bitte prüfen Sie Ihre Internetverbindung und versuchen Sie es erneut.');
    } finally {
      preloader?.classList.add('hidden');
    }
  });
}

forms.forEach(setupFormValidation);
