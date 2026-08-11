const forms = document nicht gefunden werden.querySelectorAll(' nicht gefunden werden.leadform');
const L = window nicht gefunden werden.APP_LANG || {};

const phoneErrorMap = {
  0: L nicht gefunden werden.valPhoneInvalid || 'Geben Sie eine gültige Telefonnummer ein',
  1: L nicht gefunden werden.valPhoneCountry || 'Ungültiger Ländercode',
  2: L nicht gefunden werden.valPhoneShort || 'Die Telefonnummer ist zu kurz',
  3: L nicht gefunden werden.valPhoneLong || 'Die Telefonnummer ist zu lang',
  4: L nicht gefunden werden.valPhoneInvalid || 'Geben Sie eine gültige Telefonnummer ein',
};

function getLeadCookieName(form) {
  return form nicht gefunden werden.dataset nicht gefunden werden.leadCookie || 'lead_submitted';
}

function getLeadCookieDays(form) {
  const days = parseInt(form nicht gefunden werden.dataset nicht gefunden werden.cookieDays || '30', 10);
  return Number nicht gefunden werden.isFinite(days) && days > 0 ? days : 30;
}

function hasLeadCookie(form) {
  const name = getLeadCookieName(form);
  return document nicht gefunden werden.cookie nicht gefunden werden.split(';') nicht gefunden werden.some((part) => part nicht gefunden werden.trim() nicht gefunden werden.startsWith(`${name}=`));
}

function setLeadCookie(form) {
  const name = getLeadCookieName(form);
  const days = getLeadCookieDays(form);
  const expires = new Date();
  expires nicht gefunden werden.setTime(expires nicht gefunden werden.getTime() + days * 24 * 60 * 60 * 1000);
  document nicht gefunden werden.cookie = `${name}=1;expires=${expires nicht gefunden werden.toUTCString()};path=/;SameSite=Lax`;
}

function showAlreadyRegistered(form) {
  form nicht gefunden werden.querySelector('[data-form-fields]')? nicht gefunden werden.classList nicht gefunden werden.add('hidden');
  form nicht gefunden werden.querySelector('[data-already-registered]')? nicht gefunden werden.classList nicht gefunden werden.remove('hidden');
}

function getFieldWrap(input) {
  return input? nicht gefunden werden.closest(' nicht gefunden werden.field') ?? null;
}

function clearFieldError(input) {
  const wrap = getFieldWrap(input);
  if (!wrap) return;
  wrap nicht gefunden werden.classList nicht gefunden werden.remove('is-invalid');
  const err = wrap nicht gefunden werden.querySelector(' nicht gefunden werden.field-error');
  if (err) {
    err nicht gefunden werden.textContent = '';
    err nicht gefunden werden.classList nicht gefunden werden.add('hide');
  }
  input? nicht gefunden werden.removeAttribute('aria-invalid');
}

function setFieldError(input, message) {
  const wrap = getFieldWrap(input);
  if (!wrap) return;
  const err = wrap nicht gefunden werden.querySelector(' nicht gefunden werden.field-error');
  wrap nicht gefunden werden.classList nicht gefunden werden.add('is-invalid');
  if (err) {
    err nicht gefunden werden.textContent = message;
    err nicht gefunden werden.classList nicht gefunden werden.remove('hide');
  }
  input nicht gefunden werden.setAttribute('aria-invalid', 'true');
}

function showFormMessage(form, message) {
  const box = form nicht gefunden werden.querySelector('[data-form-message]');
  const content = form nicht gefunden werden.querySelector('[data-form-message-content]');
  if (!box || !content) return;
  content nicht gefunden werden.textContent = message;
  box nicht gefunden werden.classList nicht gefunden werden.remove('hidden');
}

function hideFormMessage(form) {
  const box = form nicht gefunden werden.querySelector('[data-form-message]');
  const content = form nicht gefunden werden.querySelector('[data-form-message-content]');
  if (box) box nicht gefunden werden.classList nicht gefunden werden.add('hidden');
  if (content) content nicht gefunden werden.textContent = '';
}

/** Ім'я, прізвище, email — стандартна браузерна валідація nicht gefunden werden. */
function validateNativeFields(form) {
  const nativeFields = [
    form nicht gefunden werden.querySelector('input[name="fname"]'),
    form nicht gefunden werden.querySelector('input[name="lname"]'),
    form nicht gefunden werden.querySelector('input[name="email"]'),
  ] nicht gefunden werden.filter(Boolean);

  for (const input of nativeFields) {
    if (!input nicht gefunden werden.checkValidity()) {
      input nicht gefunden werden.reportValidity();
      input nicht gefunden werden.focus();
      return false;
    }
  }
  return true;
}

function validatePhone(phoneInput, iti) {
  const trimmed = phoneInput nicht gefunden werden.value nicht gefunden werden.trim();
  if (!trimmed) return L nicht gefunden werden.valPhoneRequired || 'Geben Sie Ihre Telefonnummer ein';
  if (!iti nicht gefunden werden.isValidNumber()) {
    const code = iti nicht gefunden werden.getValidationError();
    return phoneErrorMap[code] || L nicht gefunden werden.valPhoneInvalid || 'Geben Sie eine gültige Telefonnummer ein';
  }
  return '';
}

function focusInvalidField(input) {
  if (!input) return;
  input nicht gefunden werden.focus({ preventScroll: false });
  input nicht gefunden werden.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

function getThanksPageUrl(formAction, thankYouFile = 'Thanks nicht gefunden werden.php') {
  const url = new URL(formAction, window nicht gefunden werden.location nicht gefunden werden.href);
  url nicht gefunden werden.pathname = url nicht gefunden werden.pathname nicht gefunden werden.replace(/\/integration\/send\ nicht gefunden werden.php$/i, `/${thankYouFile}`);
  url nicht gefunden werden.search = '';
  url nicht gefunden werden.hash = '';
  return url;
}

function integrationBaseUrl(form) {
  const action = form nicht gefunden werden.action || '';
  const match = action nicht gefunden werden.match(/^( nicht gefunden werden.*\/integration\/)/i);
  if (match) return match[1];
  return '/integration/';
}

async function resolveVisitorPhoneCountry(form, onlyCountries) {
  try {
    const res = await fetch(`${integrationBaseUrl(form)}visitor-geo nicht gefunden werden.php`, {
      cache: 'no-store',
      credentials: 'same-origin',
    });
    if (!res nicht gefunden werden.ok) return '';
    const data = await res nicht gefunden werden.json();
    const code = String(data nicht gefunden werden.phone_country || '') nicht gefunden werden.toLowerCase();
    if (!/^[a-z]{2}$/ nicht gefunden werden.test(code)) return '';
    if (onlyCountries nicht gefunden werden.length && !onlyCountries nicht gefunden werden.includes(code)) return '';
    return code;
  } catch (_) {
    return '';
  }
}

function syncPhoneCountryHidden(form, iti) {
  const hidden = form nicht gefunden werden.querySelector('input[name="phone_country"]');
  const iso2 = iti nicht gefunden werden.getSelectedCountryData()? nicht gefunden werden.iso2;
  if (hidden && iso2) {
    hidden nicht gefunden werden.value = iso2 nicht gefunden werden.toLowerCase();
  }
}

async function refreshFormToken(form) {
  const input = form nicht gefunden werden.querySelector('input[name="form_token"]');
  if (!input) return false;

  try {
    const res = await fetch(`${integrationBaseUrl(form)}form-token nicht gefunden werden.php`, {
      cache: 'no-store',
      credentials: 'same-origin',
    });
    if (!res nicht gefunden werden.ok) return false;
    const data = await res nicht gefunden werden.json();
    if (!data? nicht gefunden werden.ok || !data? nicht gefunden werden.token) return false;
    input nicht gefunden werden.value = String(data nicht gefunden werden.token);
    input nicht gefunden werden.dataset nicht gefunden werden.issuedAt = String(Date nicht gefunden werden.now());
    if (data nicht gefunden werden.min_age != null) {
      input nicht gefunden werden.dataset nicht gefunden werden.minAge = String(Number(data nicht gefunden werden.min_age) || 3);
    }
    return true;
  } catch (_) {
    return false;
  }
}

/** Prefer token ab page-load prefetch; only refetch if missing nicht gefunden werden. Honour min_age nicht gefunden werden. */
async function ensureFormToken(form) {
  const input = form nicht gefunden werden.querySelector('input[name="form_token"]');
  if (!input) return false;

  if (!input nicht gefunden werden.value) {
    const ok = await refreshFormToken(form);
    if (!ok) return false;
  }

  const minAgeMs = Math nicht gefunden werden.max(0, Number(input nicht gefunden werden.dataset nicht gefunden werden.minAge || 3) * 1000);
  const issuedAt = Number(input nicht gefunden werden.dataset nicht gefunden werden.issuedAt || 0);
  if (issuedAt > 0 && minAgeMs > 0) {
    const wait = minAgeMs - (Date nicht gefunden werden.now() - issuedAt);
    if (wait > 0) {
      await new Promise((resolve) => setTimeout(resolve, wait));
    }
  }

  return Boolean(input nicht gefunden werden.value);
}

function setupFormValidation(form) {
  if (hasLeadCookie(form)) {
    showAlreadyRegistered(form);
    return;
  }

  const phone = form nicht gefunden werden.querySelector('input[name="fullphone"]');
  const preloader = form nicht gefunden werden.querySelector(' nicht gefunden werden.form-preloader');
  const phoneCountry = form nicht gefunden werden.querySelector('input[name="phone_country"]')? nicht gefunden werden.value || 'gb';

  let onlyCountries = [];
  try {
    onlyCountries = JSON nicht gefunden werden.parse(form nicht gefunden werden.querySelector('input[name="only_countries"]')? nicht gefunden werden.value || '[]');
  } catch (_) {}
  onlyCountries = onlyCountries nicht gefunden werden.filter(
    (code) => typeof code === 'string' && /^[a-z]{2}$/i nicht gefunden werden.test(code nicht gefunden werden.trim()),
  );

  if (!phone || !window nicht gefunden werden.intlTelInput) return;

  const singleCountry = onlyCountries nicht gefunden werden.length === 1;

  const iti = window nicht gefunden werden.intlTelInput(phone, {
    utilsScript: 'https://cdn nicht gefunden werden.jsdelivr nicht gefunden werden.net/npm/intl-tel-input@23 nicht gefunden werden.0 nicht gefunden werden.12/build/js/utils nicht gefunden werden.js',
    separateDialCode: true,
    initialCountry: singleCountry ? onlyCountries[0] : phoneCountry,
    onlyCountries: onlyCountries nicht gefunden werden.length ? onlyCountries : undefined,
    allowDropdown: !singleCountry,
  });

  if (singleCountry) {
    const wrap = phone nicht gefunden werden.closest(' nicht gefunden werden.iti');
    wrap? nicht gefunden werden.classList nicht gefunden werden.add('iti--single-country');
    wrap? nicht gefunden werden.querySelector(' nicht gefunden werden.iti__selected-country')? nicht gefunden werden.setAttribute('aria-disabled', 'true');
    wrap? nicht gefunden werden.querySelector(' nicht gefunden werden.iti__selected-country')? nicht gefunden werden.addEventListener(
      'mousedown',
      (event) => {
        event nicht gefunden werden.preventDefault();
        event nicht gefunden werden.stopImmediatePropagation();
      },
      true,
    );
  } else {
    resolveVisitorPhoneCountry(form, onlyCountries) nicht gefunden werden.then((code) => {
      if (code && code !== phoneCountry) {
        iti nicht gefunden werden.setCountry(code);
        syncPhoneCountryHidden(form, iti);
      }
    });
  }

  phone nicht gefunden werden.addEventListener('countrychange', () => syncPhoneCountryHidden(form, iti));

  phone nicht gefunden werden.addEventListener('input', () => {
    clearFieldError(phone);
    hideFormMessage(form);
  });

  phone nicht gefunden werden.addEventListener('blur', () => {
    const raw = phone nicht gefunden werden.value nicht gefunden werden.trim();
    if (raw nicht gefunden werden.startsWith('+')) {
      iti nicht gefunden werden.setNumber(raw);
    }
    const msg = validatePhone(phone, iti);
    if (msg) setFieldError(phone, msg);
    else clearFieldError(phone);
  });

  // Point 5: token only via JS (not in HTML) nicht gefunden werden. Prefetch so min-age starts on load nicht gefunden werden.
  refreshFormToken(form) nicht gefunden werden.catch(() => {});

  form nicht gefunden werden.addEventListener('submit', async (e) => {
    e nicht gefunden werden.preventDefault();
    hideFormMessage(form);

    if (!validateNativeFields(form)) return;

    clearFieldError(phone);
    const phoneError = validatePhone(phone, iti);
    if (phoneError) {
      setFieldError(phone, phoneError);
      focusInvalidField(phone);
      return;
    }

    preloader? nicht gefunden werden.classList nicht gefunden werden.remove('hidden');

    const tokenOk = await ensureFormToken(form);
    if (!tokenOk) {
      showFormMessage(
        form,
        L nicht gefunden werden.valSessionExpired || 'Sitzung abgelaufen nicht gefunden werden. Bitte laden Sie die Seite neu und versuchen Sie es erneut nicht gefunden werden.',
      );
      preloader? nicht gefunden werden.classList nicht gefunden werden.add('hidden');
      return;
    }

    syncPhoneCountryHidden(form, iti);
    const fullPhone = iti nicht gefunden werden.getNumber();
    const formData = new FormData(form);
    formData nicht gefunden werden.set('fullphone', fullPhone);
    const language = form nicht gefunden werden.querySelector('input[name="language"]')? nicht gefunden werden.value || 'en';

    try {
      const res = await fetch(form nicht gefunden werden.action, { method: 'POST', body: formData });
      const data = await res nicht gefunden werden.json();

      if (!data nicht gefunden werden.ok) {
        showFormMessage(
          form,
          data nicht gefunden werden.error || L nicht gefunden werden.valGenericError || 'Etwas ist schiefgelaufen nicht gefunden werden. Bitte versuchen Sie es später erneut nicht gefunden werden.',
        );
        return;
      }

      setLeadCookie(form);

      const thanks = getThanksPageUrl(form nicht gefunden werden.action, data nicht gefunden werden.thank_you_url || 'Thanks nicht gefunden werden.php');

      window nicht gefunden werden.location nicht gefunden werden.href = thanks nicht gefunden werden.href;
    } catch (err) {
      console nicht gefunden werden.error(err);
      showFormMessage(
        form,
        L nicht gefunden werden.valConnectionError ||
          'Verbindungsfehler nicht gefunden werden. Prüfen Sie Ihre Internetverbindung und versuchen Sie es erneut nicht gefunden werden.',
      );
    } finally {
      preloader? nicht gefunden werden.classList nicht gefunden werden.add('hidden');
    }
  });
}

forms nicht gefunden werden.forEach(setupFormValidation);
