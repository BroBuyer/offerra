<?php
require_once __DIR__ . '/config.php';

/**
 * Lead form. The markup keeps the audax classes so the pack CSS still applies;
 * everything Offerra needs (action, hidden fields, token) is added around it.
 *
 * Callers set $form_id, $form_wrap_class, $form_field_classes and $form_submit
 * to reproduce the placement they replaced.
 */
$form_id = $form_id ?? 'lead-form';
$form_wrap_class = $form_wrap_class ?? 'newRegForm';
$form_field_classes = $form_field_classes ?? [];
$form_submit = $form_submit ?? 'Registracija';
$form_phone_id = $form_phone_id ?? $form_id . '-phone';

$phone_country = form_visitor_phone_country();
$allowed_countries = form_allowed_countries();
$lead_cookie = site_slug() . '_lead';

$field_class = static fn (int $i): string => trim((string) ($form_field_classes[$i] ?? ''));
?>
<form
  class="lead-form"
  name="form"
  method="post"
  id="<?= e($form_id) ?>"
  action="<?= asset('integration/send.php') ?>"
  data-form
  data-leadform
  data-lead-cookie="<?= e($lead_cookie) ?>"
  data-cookie-days="<?= (int) FORM_LEAD_COOKIE_DAYS ?>"
>
  <div class="form-already-registered hidden" data-already-registered>
    <p class="form-already-registered__title">Že si registriran</p>
    <p class="form-already-registered__text">
      Tvoja zahteva za <?= e(SITE_NAME) ?> je sprejeta. Počakaj klic našega svetovalca.
    </p>
  </div>

  <div data-form-fields>
    <input type="hidden" name="language" value="<?= e(SITE_LANG) ?>" />
    <input type="hidden" name="phone_country" value="<?= e($phone_country) ?>" />
    <input type="hidden" name="only_countries" value='<?= e(json_encode($allowed_countries)) ?>' />
<?php if (($keitaro_subid = keitaro_subid()) !== ''): ?>
    <input type="hidden" name="subid" value="<?= e($keitaro_subid) ?>" />
<?php endif; ?>
    <input type="hidden" name="form_token" value="" autocomplete="off" />

    <div class="form-preloader hidden" aria-hidden="true"><div class="spinner"></div></div>

    <div class="<?= e($form_wrap_class) ?>">
      <div class="<?= e($field_class(0)) ?>">
        <input
          aria-label="Ime"
          data-rule="name|required"
          type="text"
          placeholder="Ime"
          name="first_name"
          autocomplete="given-name"
          value=""
          required
        />
        <span class="field-error hide" role="alert" aria-live="polite"></span>
      </div>
      <div class="<?= e($field_class(1)) ?>">
        <input
          aria-label="Priimek"
          data-rule="lastname|required"
          type="text"
          placeholder="Priimek"
          name="last_name"
          autocomplete="family-name"
          value=""
          required
        />
        <span class="field-error hide" role="alert" aria-live="polite"></span>
      </div>
      <div class="<?= e($field_class(2)) ?>">
        <input
          aria-label="E-pošta"
          data-rule="required|email"
          type="email"
          placeholder="E-pošta"
          name="email"
          autocomplete="email"
          value=""
          required
        />
        <span class="field-error hide" role="alert" aria-live="polite"></span>
      </div>
      <div class="<?= e($field_class(3)) ?>">
        <input
          aria-label="Mobilni telefon"
          data-rule="required|phone"
          type="tel"
          id="<?= e($form_phone_id) ?>"
          placeholder="Mobilni telefon"
          name="phone"
          autocomplete="tel"
          value=""
        />
        <span class="field-error hide" role="alert" aria-live="polite"></span>
      </div>
      <div class="<?= e($field_class(4)) ?>">
        <input value="<?= e($form_submit) ?>" type="submit" />
      </div>
    </div>

    <div class="form-message hidden" data-form-message role="alert">
      <p class="form-message-title" data-form-message-title></p>
      <div data-form-message-content></div>
    </div>
  </div>
</form>
<?php
unset($form_id, $form_wrap_class, $form_field_classes, $form_submit, $form_phone_id, $field_class);
?>
