const forms = document.querySelectorAll('.leadform');

const phoneErrorMap = {
  0: 'Saisissez un numéro de téléphone valide',
  1: 'Indicatif pays invalide',
  2: 'Le numéro de téléphone est trop court',
  3: 'Le numéro de téléphone est trop long',
  4: 'Saisissez un numéro de téléphone valide',
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

/** Ім'я, прізвище, email — стандартна браузерна валідація. */
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
  if (!trimmed) return 'Saisissez votre numéro de téléphone';
  if (!iti.isValidNumber()) {
    const code = iti.getValidationError();
    return phoneErrorMap[code] || 'Saisissez un numéro de téléphone valide';
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

  const singleCountry = onlyCountries.length === 1;

  const iti = window.intlTelInput(phone, {
    utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.12/build/js/utils.js',
    separateDialCode: true,
    initialCountry: singleCountry ? onlyCountries[0] : phoneCountry,
    onlyCountries: onlyCountries.length ? onlyCountries : undefined,
    allowDropdown: !singleCountry,
  });

  if (singleCountry) {
    phone.closest('.iti')?.classList.add('iti--single-country');
  }

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
        showFormMessage(form, data.error || 'Une erreur s\'est produite. Réessayez plus tard.');
        return;
      }

      setLeadCookie(form);

      const thanks = getThanksPageUrl(form.action, data.thank_you_url || 'Thanks.php');

      window.location.href = thanks.href;
    } catch (err) {
      console.error(err);
      showFormMessage(form, 'Erreur de connexion. Vérifiez votre connexion Internet et réessayez.');
    } finally {
      preloader?.classList.add('hidden');
    }
  });
}

forms.forEach(setupFormValidation);
