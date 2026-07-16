<?php
require_once __DIR__ . '/config.php';

$form_id = $form_id ?? 'lead-form';
$form_heading = $form_heading ?? null;
$phone_country = form_visitor_phone_country();
$allowed_countries = form_allowed_countries();
$lead_cookie = site_slug() . '_lead';
?>
<form
  name="form"
  method="post"
  id="<?= e($form_id) ?>"
  class="leadform lead-form"
  action="<?= asset('integration/send.php') ?>"
  data-form
  data-lead-cookie="<?= e($lead_cookie) ?>"
  data-cookie-days="<?= (int) FORM_LEAD_COOKIE_DAYS ?>"
>
  <div class="form-already-registered hidden" data-already-registered>
    <div class="form-already-registered__icon" aria-hidden="true">✓</div>
    <p class="form-already-registered__title">Sei gia registrato</p>
    <p class="form-already-registered__text">
      Abbiamo ricevuto la tua richiesta su <?= e(SITE_NAME) ?>. Riceverai presto una chiamata da un nostro specialista.
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

    <div class="form-grid">
      <label class="field" data-field="fname">
        <span class="field-label">Nome</span>
        <input
          class="input"
          type="text"
          name="fname"
          placeholder="Mario"
          required
          pattern="[^\d]+"
          autocomplete="given-name"
        >
      </label>
      <label class="field" data-field="lname">
        <span class="field-label">Cognome</span>
        <input
          class="input"
          type="text"
          name="lname"
          placeholder="Rossi"
          required
          pattern="[^\d]+"
          autocomplete="family-name"
        >
      </label>
      <label class="field field-full" data-field="email">
        <span class="field-label">Email</span>
        <input class="input" type="email" name="email" placeholder="you@email.com" required autocomplete="email" inputmode="email">
      </label>
      <label class="field field-full" data-field="phone">
        <span class="field-label">Telefono</span>
        <input class="input" type="tel" name="fullphone" autocomplete="tel" inputmode="tel">
        <span class="field-error hide" role="alert" aria-live="polite"></span>
      </label>
    </div>

    <button type="submit" class="btn btn-primary btn-block submit">Crea account gratuito</button>

    <?php
    $payment_context = 'registrazione account';
    $payment_compact = true;
    require __DIR__ . '/payment-icons.php';
    ?>

    <div class="form-message hidden" data-form-message role="alert">
      <p class="form-message-title" data-form-message-title></p>
      <div data-form-message-content></div>
    </div>

    <p class="form-legal">
      Inviando i tuoi dati, accetti la nostra
      <a href="privacy.php">Informativa sulla privacy</a> e i nostri
      <a href="conditions.php">Termini di utilizzo</a>.
    </p>
  </div>
</form>
