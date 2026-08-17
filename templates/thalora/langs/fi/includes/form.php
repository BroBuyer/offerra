<?php
require_once __DIR__ . '/config.php';

$form_id = $form_id ?? 'lead-form';
$form_heading = $form_heading ?? null;
$form_submit = $form_submit ?? 'Luo tili';
$form_class = trim($form_class ?? 'leadform lead-form apx-lead-form js-lead-form apx-lead-form--geo1661');
$phone_country = form_visitor_phone_country();
$allowed_countries = form_allowed_countries();
$lead_cookie = site_slug() . '_lead';
$wrap_hidden = !empty($form_hidden);
?>
<div class="apx-lead lead-form-wrap apx-lead-wrap--geo1661<?= $wrap_hidden ? '' : '' ?>" dir="ltr"<?php if ($wrap_hidden): ?> id="cq-form-card" hidden inert style="display:none !important;"<?php endif; ?>>
<form
  name="form"
  method="post"
  id="<?= e($form_id) ?>"
  class="<?= e($form_class) ?>"
  action="<?= asset('integration/send.php') ?>"
  data-form
  data-lead-cookie="<?= e($lead_cookie) ?>"
  data-cookie-days="<?= (int) FORM_LEAD_COOKIE_DAYS ?>"
>
  <div class="form-already-registered hidden" data-already-registered>
    <div class="form-already-registered__icon" aria-hidden="true">✓</div>
    <p class="form-already-registered__title">Olet jo rekisteröitynyt</p>
    <p class="form-already-registered__text">
      Pyyntösi palveluun <?= e(SITE_NAME) ?> on vastaanotettu. Odota puhelua neuvonantajaltamme.
    </p>
  </div>

  <div data-form-fields>
    <input type="hidden" name="language" value="<?= e(SITE_LANG) ?>">
    <input type="hidden" name="phone_country" value="<?= e($phone_country) ?>">
    <input type="hidden" name="only_countries" value='<?= e(json_encode($allowed_countries)) ?>'>
<?php if (($keitaro_subid = keitaro_subid()) !== ''): ?>
    <input type="hidden" name="subid" value="<?= e($keitaro_subid) ?>">
<?php endif; ?>
    <input type="hidden" name="form_token" value="" autocomplete="off">

    <div class="form-preloader hidden" aria-hidden="true">
      <div class="spinner"></div>
    </div>

    <?php if ($form_heading): ?>
      <p class="form-heading"><?= e($form_heading) ?></p>
    <?php endif; ?>

    <div class="apx-lead-row lead-form-row">
      <label class="apx-lead-field field" data-field="fname">
        <span class="field-label">Etunimi</span>
        <input class="input" type="text" name="fname" placeholder="Etunimi" required pattern="[^\d]+" autocomplete="given-name" minlength="2" maxlength="50" inputmode="text" autocapitalize="words" spellcheck="false" title="Käytä vain kirjaimia (ei numeroita tai symboleita)">
        <span class="field-error hide" role="alert" aria-live="polite"></span>
      </label>
    </div>
    <div class="apx-lead-row lead-form-row">
      <label class="apx-lead-field field" data-field="lname">
        <span class="field-label">Sukunimi</span>
        <input class="input" type="text" name="lname" placeholder="Sukunimi" required pattern="[^\d]+" autocomplete="family-name" minlength="2" maxlength="50" inputmode="text" autocapitalize="words" spellcheck="false" title="Käytä vain kirjaimia (ei numeroita tai symboleita)">
        <span class="field-error hide" role="alert" aria-live="polite"></span>
      </label>
    </div>
    <label class="apx-lead-field field" data-field="email">
      <span class="field-label">Sähköpostiosoite</span>
      <input class="input" type="email" name="email" placeholder="Sähköpostiosoite" required autocomplete="email" inputmode="email">
      <span class="field-error hide" role="alert" aria-live="polite"></span>
    </label>
    <label class="apx-lead-field apx-lead-field--phone lead-form-field lead-form-field--phone field" data-field="phone">
      <span class="field-label">Puhelinnumero</span>
      <input class="input" type="tel" name="fullphone" autocomplete="tel" inputmode="tel">
      <span class="field-error hide" role="alert" aria-live="polite"></span>
    </label>

    <button type="submit" class="submit"><?= e($form_submit) ?></button>

    <div class="form-message hidden" data-form-message role="alert">
      <p class="form-message-title" data-form-message-title></p>
      <div data-form-message-content></div>
    </div>

    <p class="apx-lead-consent">
      Lähettämällä tietosi hyväksyt <a href="<?= page_url('privacy.php') ?>">tietosuojakäytännön</a> ja <a href="<?= page_url('conditions.php') ?>">käyttöehdot</a>.
    </p>
    <div class="apx-lead-badges" aria-hidden="true">
      <img src="<?= asset('static/img/svg/payment-1.svg') ?>" alt="Visa">
      <img src="<?= asset('static/img/svg/payment-2.svg') ?>" alt="Mastercard">
      <img src="<?= asset('static/img/svg/payment-3.svg') ?>" alt="PayPal">
      <img src="<?= asset('static/img/svg/payment-4.svg') ?>" alt="Turvallinen maksu">
    </div>
  </div>
</form>
</div>
<?php
unset($form_id, $form_heading, $form_submit, $form_class, $form_hidden, $wrap_hidden);
?>
