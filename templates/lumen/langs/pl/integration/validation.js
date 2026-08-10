const forms = document.querySelectorAll('.leadform');

const phoneErrorMap = {
  0: 'Wprowadź prawidłowy numer telefonu',
  1: 'Nieprawidłowy kod kraju',
  2: 'Numer telefonu jest za krótki',
  3: 'Numer telefonu jest za długi',
  4: 'Wprowadź prawidłowy numer telefonu',
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

/** Imię, nazwisko, e-mail — natywna walidacja przeglądarki. */
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
  if (!trimmed) return 'Wprowadź swój numer telefonu';
  if (!iti.isValidNumber()) {
    const code = iti.getValidationError();
    return phoneErrorMap[code] || 'Wprowadź prawidłowy numer telefonu';
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

function integrationBaseUrl(form) {
  const action = form.action || '';
  const match = action.match(/^(.*\/integration\/)/i);
  if (match) return match[1];
  return '/integration/';
}

async function resolveVisitorPhoneCountry(form, onlyCountries) {
  try {
    const res = await fetch(`${integrationBaseUrl(form)}visitor-geo.php`, {
      cache: 'no-store',
      credentials: 'same-origin',
    });
    if (!res.ok) return '';
    const data = await res.json();
    const code = String(data.phone_country || '').toLowerCase();
    if (!/^[a-z]{2}$/.test(code)) return '';
    if (onlyCountries.length && !onlyCountries.includes(code)) return '';
    return code;
  } catch (_) {
    return '';
  }
}

function syncPhoneCountryHidden(form, iti) {
  const hidden = form.querySelector('input[name="phone_country"]');
  const iso2 = iti.getSelectedCountryData()?.iso2;
  if (hidden && iso2) {
    hidden.value = iso2.toLowerCase();
  }
}

async function refreshFormToken(form) {
  const input = form.querySelector('input[name="form_token"]');
  if (!input) return false;

  try {
    const res = await fetch(`${integrationBaseUrl(form)}form-token.php`, {
      cache: 'no-store',
      credentials: 'same-origin',
    });
    if (!res.ok) return false;
    const data = await res.json();
    if (!data?.ok || !data?.token) return false;
    input.value = String(data.token);
    input.dataset.issuedAt = String(Date.now());
    if (data.min_age != null) {
      input.dataset.minAge = String(Number(data.min_age) || 3);
    }
    return true;
  } catch (_) {
    return false;
  }
}

/** Prefer token from page-load prefetch; only refetch if missing. Honour min_age. */
async function ensureFormToken(form) {
  const input = form.querySelector('input[name="form_token"]');
  if (!input) return false;

  if (!input.value) {
    const ok = await refreshFormToken(form);
    if (!ok) return false;
  }

  const minAgeMs = Math.max(0, Number(input.dataset.minAge || 3) * 1000);
  const issuedAt = Number(input.dataset.issuedAt || 0);
  if (issuedAt > 0 && minAgeMs > 0) {
    const wait = minAgeMs - (Date.now() - issuedAt);
    if (wait > 0) {
      await new Promise((resolve) => setTimeout(resolve, wait));
    }
  }

  return Boolean(input.value);
}

function setupFormValidation(form) {
  if (hasLeadCookie(form)) {
    showAlreadyRegistered(form);
    return;
  }

  const phone = form.querySelector('input[name="fullphone"]');
  const preloader = form.querySelector('.form-preloader');
  const phoneCountry = form.querySelector('input[name="phone_country"]')?.value || 'gb';

  let onlyCountries = [];
  try {
    onlyCountries = JSON.parse(form.querySelector('input[name="only_countries"]')?.value || '[]');
  } catch (_) {}
  onlyCountries = onlyCountries.filter(
    (code) => typeof code === 'string' && /^[a-z]{2}$/i.test(code.trim()),
  );

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
    const wrap = phone.closest('.iti');
    wrap?.classList.add('iti--single-country');
    wrap?.querySelector('.iti__selected-country')?.setAttribute('aria-disabled', 'true');
    wrap?.querySelector('.iti__selected-country')?.addEventListener(
      'mousedown',
      (event) => {
        event.preventDefault();
        event.stopImmediatePropagation();
      },
      true,
    );
  } else {
    resolveVisitorPhoneCountry(form, onlyCountries).then((code) => {
      if (code && code !== phoneCountry) {
        iti.setCountry(code);
        syncPhoneCountryHidden(form, iti);
      }
    });
  }

  phone.addEventListener('countrychange', () => syncPhoneCountryHidden(form, iti));

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

  // Point 5: token only via JS (not in HTML). Prefetch so min-age starts on load.
  refreshFormToken(form).catch(() => {});

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

    const tokenOk = await ensureFormToken(form);
    if (!tokenOk) {
      showFormMessage(form, 'Sesja wygasła. Odśwież stronę i spróbuj ponownie.');
      preloader?.classList.add('hidden');
      return;
    }

    syncPhoneCountryHidden(form, iti);
    const fullPhone = iti.getNumber();
    const formData = new FormData(form);
    formData.set('fullphone', fullPhone);
    const language = form.querySelector('input[name="language"]')?.value || 'en';

    try {
      const res = await fetch(form.action, { method: 'POST', body: formData });
      const data = await res.json();

      if (!data.ok) {
        showFormMessage(form, data.error || 'Wystąpił błąd. Spróbuj ponownie później.');
        return;
      }

      setLeadCookie(form);

      const thanks = getThanksPageUrl(form.action, data.thank_you_url || 'Thanks.php');

      window.location.href = thanks.href;
    } catch (err) {
      console.error(err);
      showFormMessage(form, 'Błąd połączenia. Sprawdź połączenie internetowe i spróbuj ponownie.');
    } finally {
      preloader?.classList.add('hidden');
    }
  });
}

forms.forEach(setupFormValidation);
