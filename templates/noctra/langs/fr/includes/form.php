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
    <p class="form-already-registered__title">Vous êtes déjà inscrit</p>
    <p class="form-already-registered__text">
      Votre demande auprès de <?= e(SITE_NAME) ?> a été reçue. Veuillez attendre l'appel de notre conseiller.
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
        <span class="field-label">Prénom</span>
        <input
          class="input"
          type="text"
          name="fname"
          placeholder="Jean"
          required
          pattern="[^\d]+"
          autocomplete="given-name"
        >
      </label>
      <label class="field" data-field="lname">
        <span class="field-label">Nom</span>
        <input
          class="input"
          type="text"
          name="lname"
          placeholder="Martin"
          required
          pattern="[^\d]+"
          autocomplete="family-name"
        >
      </label>
      <label class="field field-full" data-field="email">
        <span class="field-label">E-mail</span>
        <input class="input" type="email" name="email" placeholder="vous@email.com" required autocomplete="email" inputmode="email">
      </label>
      <label class="field field-full" data-field="phone">
        <span class="field-label">Téléphone</span>
        <input class="input" type="tel" name="fullphone" autocomplete="tel" inputmode="tel">
        <span class="field-error hide" role="alert" aria-live="polite"></span>
      </label>
    </div>

    <button type="submit" class="btn btn-primary btn-block submit">Créer un compte gratuit</button>

    <?php
    $payment_context = 'inscription de compte';
    $payment_compact = true;
    require __DIR__ . '/payment-icons.php';
    ?>

    <div class="form-message hidden" data-form-message role="alert">
      <p class="form-message-title" data-form-message-title></p>
      <div data-form-message-content></div>
    </div>

    <p class="form-legal">
      En envoyant vos informations, vous acceptez notre
      <a href="privacy.php">Politique de confidentialité</a> et nos
      <a href="conditions.php">Conditions d'utilisation</a>.
    </p>
  </div>
</form>
