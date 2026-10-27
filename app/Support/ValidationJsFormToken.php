<?php

namespace App\Support;

/**
 * Lang-pack validation.js is copied as-is so phone/error strings stay localized.
 * Older packs never fetched form-token.php, so send.php silently dropped the lead.
 */
class ValidationJsFormToken
{
    public static function needsPatch(string $js): bool
    {
        return ! str_contains($js, 'form-token.php');
    }

    public static function ensure(string $js): string
    {
        if (! self::needsPatch($js)) {
            return $js;
        }

        $out = $js;

        if (! str_contains($out, 'function refreshFormToken')) {
            $needle = 'function setupFormValidation(form) {';
            if (! str_contains($out, $needle)) {
                return $js;
            }
            $out = str_replace($needle, self::helpers().$needle, $out);
        }

        if (! str_contains($out, 'resolveVisitorPhoneCountry(form, onlyCountries).then')) {
            $closer = "      true,\n    );\n  }\n\n  phone.addEventListener('input'";
            if (str_contains($out, $closer)) {
                $out = str_replace($closer, "      true,\n    );\n".self::visitorCountryBlock()."\n  phone.addEventListener('input'", $out);
            }
        }

        if (! str_contains($out, 'refreshFormToken(form).catch')) {
            $submit = "  form.addEventListener('submit', async (e) => {";
            if (str_contains($out, $submit)) {
                $out = str_replace(
                    $submit,
                    "  refreshFormToken(form).catch(() => {});\n\n".$submit,
                    $out,
                );
            }
        }

        if (! str_contains($out, 'const tokenOk = await ensureFormToken')) {
            $out = preg_replace_callback(
                "/    preloader\?\.classList\.remove\('hidden'\);\n\n    const (full\\w+) = iti\.getNumber\(\);/",
                static function (array $match): string {
                    return self::submitGate($match[1]);
                },
                $out,
                1,
            ) ?? $out;
        }

        return $out;
    }

    private static function helpers(): string
    {
        return <<<'JS'
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

JS;
    }

    private static function visitorCountryBlock(): string
    {
        return <<<'JS'
  } else {
    resolveVisitorPhoneCountry(form, onlyCountries).then((code) => {
      if (code && code !== phoneCountry) {
        iti.setCountry(code);
        syncPhoneCountryHidden(form, iti);
      }
    });
  }

  phone.addEventListener('countrychange', () => syncPhoneCountryHidden(form, iti));

JS;
    }

    private static function submitGate(string $phoneVar = 'fullPhone'): string
    {
        return <<<JS
    preloader?.classList.remove('hidden');

    const tokenOk = await ensureFormToken(form);
    if (!tokenOk) {
      showFormMessage(form, 'Session expired. Please reload the page and try again.');
      preloader?.classList.add('hidden');
      return;
    }

    syncPhoneCountryHidden(form, iti);
    const {$phoneVar} = iti.getNumber();
JS;
    }
}
