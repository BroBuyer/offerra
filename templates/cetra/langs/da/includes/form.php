<?php
require_once __DIR__ . '/config.php';

$form_id = $form_id ?? 'lead-form';
$form_heading = $form_heading ?? null;
$form_submit = $form_submit ?? 'Opret en gratis konto';
$form_class = $form_class ?? 'leadform lead-form';
$form_subtitle = $form_subtitle ?? null;
$phone_country = form_visitor_phone_country();
$allowed_countries = form_allowed_countries();
$lead_cookie = site_slug() . '_lead';
?>
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
    <p class="form-already-registered__title">Allerede registreret</p>
    <p class="form-already-registered__text">
      Din anmodning hos <?= e(SITE_NAME) ?> er modtaget. Vent venligst på et opkald fra vores rådgiver.
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
      <h3 class="form-card-title"><?= e($form_heading) ?></h3>
    <?php endif; ?>
    <?php if ($form_subtitle): ?>
      <p class="form-subtitle"><?= e($form_subtitle) ?></p>
    <?php endif; ?>

    <div class="form-grid">
      <label class="field" data-field="fname">
        <span class="field-label">Fornavn</span>
        <input class="input" type="text" name="fname" placeholder="Fornavn" required pattern="[^\d]+" autocomplete="given-name">
      </label>
      <label class="field" data-field="lname">
        <span class="field-label">Efternavn</span>
        <input class="input" type="text" name="lname" placeholder="Efternavn" required pattern="[^\d]+" autocomplete="family-name">
      </label>
      <label class="field field-full" data-field="email">
        <span class="field-label">E-mail</span>
        <input class="input" type="email" name="email" placeholder="E-mailadresse" required autocomplete="email" inputmode="email">
      </label>
      <label class="field field-full" data-field="phone">
        <span class="field-label">Telefon</span>
        <input class="input" type="tel" name="fullphone" placeholder="20 12 34 56" autocomplete="tel" inputmode="tel">
        <span class="field-error hide" role="alert" aria-live="polite"></span>
      </label>
    </div>

    <button type="submit" class="btn btn-primary btn-block submit"><?= e($form_submit) ?></button>

    <div class="pay-row" aria-label="Accepterede betalingsmetoder">
      <svg class="fai" role="img" aria-label="Visa" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>
      <svg class="fai" role="img" aria-label="Mastercard" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>
      <svg class="fai" role="img" aria-label="PayPal" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>
      <svg class="fai" role="img" aria-label="Apple Pay" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>
      <svg class="fai" role="img" aria-label="Google Pay" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>
      <svg class="fai" role="img" aria-label="Bankoverførsel" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>
      <svg class="fai pay-ok" role="img" aria-label="Sikker" viewBox="0 0 512 512"><use href="#i-shield-halved"/></svg>
    </div>

    <div class="form-message hidden" data-form-message role="alert">
      <p class="form-message-title" data-form-message-title></p>
      <div data-form-message-content></div>
    </div>

    <p class="lead-consent form-legal">
      Ved at fortsætte accepterer du vores vilkår og privatlivspolitik.
      <a href="<?= page_url('privacy.php') ?>">Privatliv</a>
      &amp;
      <a href="<?= page_url('conditions.php') ?>">Vilkår for brug</a>.
    </p>
  </div>
</form>
<?php
unset($form_id, $form_heading, $form_submit, $form_class, $form_subtitle);
?>
