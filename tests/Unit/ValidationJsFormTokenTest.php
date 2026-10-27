<?php

namespace Tests\Unit;

use App\Support\ValidationJsFormToken;
use Tests\TestCase;

class ValidationJsFormTokenTest extends TestCase
{
    public function test_stale_lang_pack_gets_form_token_fetch(): void
    {
        $stale = <<<'JS'
function getThanksPageUrl(formAction, thankYouFile = 'Thanks.php') {
  return formAction;
}

function setupFormValidation(form) {
  if (singleCountry) {
    wrap?.querySelector('.iti__selected-country')?.addEventListener(
      'mousedown',
      (event) => {
        event.preventDefault();
        event.stopImmediatePropagation();
      },
      true,
    );
  }

  phone.addEventListener('input', () => {
    clearFieldError(phone);
  });

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    preloader?.classList.remove('hidden');

    const fullPhone = iti.getNumber();
    const formData = new FormData(form);
    formData.set('fullphone', fullPhone);
  });
}
JS;

        $patched = ValidationJsFormToken::ensure($stale);

        $this->assertStringContainsString('form-token.php', $patched);
        $this->assertStringContainsString('refreshFormToken(form)', $patched);
        $this->assertStringContainsString('ensureFormToken(form)', $patched);
        $this->assertStringContainsString('syncPhoneCountryHidden(form, iti)', $patched);
    }

    public function test_already_patched_file_is_left_alone(): void
    {
        $current = file_get_contents(base_path('templates/default/langs/tr/integration/validation.js'));

        $this->assertIsString($current);
        $this->assertFalse(ValidationJsFormToken::needsPatch($current));
        $this->assertSame($current, ValidationJsFormToken::ensure($current));
    }

    public function test_default_pro_tr_pack_has_form_token(): void
    {
        $current = file_get_contents(base_path('templates/default-pro/langs/tr/integration/validation.js'));

        $this->assertIsString($current);
        $this->assertFalse(ValidationJsFormToken::needsPatch($current));
        $this->assertStringContainsString('const tokenOk = await ensureFormToken', $current);
    }
}
