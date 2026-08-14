<?php
require_once __DIR__ . '/config.php';

$form_id = $form_id ?? 'lead-form';
$form_heading = $form_heading ?? null;
$form_submit = $form_submit ?? 'Kom i gang nå';
$form_variant = $form_variant ?? 'band';
$form_class = trim(($form_class ?? 'leadform lead-form aurel-form') . ($form_variant === 'stack' ? ' aurel-stack' : ''));
$form_subtitle = $form_subtitle ?? null;
$phone_country = form_visitor_phone_country();
$allowed_countries = form_allowed_countries();
$lead_cookie = site_slug() . '_lead';
$is_stack = $form_variant === 'stack';
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
    <p class="form-already-registered__title">Du er allerede registrert</p>
    <p class="form-already-registered__text">
      Din forespørsel hos <?= e(SITE_NAME) ?> er mottatt. Vent på en samtale fra våre rådgiver.
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
      <p class="pt6joj"><?= e($form_subtitle) ?></p>
    <?php endif; ?>

<?php if ($is_stack): ?>
    <div class="xdzqh">
      <div class="wxts7 field" data-field="fname">
        <label class="field-label" for="<?= e($form_id) ?>-fname">Navn</label>
        <input class="wnzxg input" id="<?= e($form_id) ?>-fname" type="text" name="fname" placeholder="Navn" required pattern="[^\d]+" autocomplete="given-name">
      </div>
      <div class="wxts7 field" data-field="lname">
        <label class="field-label" for="<?= e($form_id) ?>-lname">Apellidos</label>
        <input class="wnzxg input" id="<?= e($form_id) ?>-lname" type="text" name="lname" placeholder="Apellidos" required pattern="[^\d]+" autocomplete="family-name">
      </div>
    </div>
    <div class="wxts7 field" data-field="email">
      <label class="field-label" for="<?= e($form_id) ?>-email">E-post</label>
      <input class="wnzxg input" id="<?= e($form_id) ?>-email" type="email" name="email" placeholder="E-post" required autocomplete="email" inputmode="email">
    </div>
    <div class="wxts7 field" data-field="phone">
      <label class="field-label" for="<?= e($form_id) ?>-phone">Telefon</label>
      <input class="wnzxg input" id="<?= e($form_id) ?>-phone" type="tel" name="fullphone" placeholder="412 34 567" autocomplete="tel" inputmode="tel">
      <span class="field-error hide" role="alert" aria-live="polite"></span>
    </div>
<?php else: ?>
    <div class="nc427f">
      <div class="wxts7 field" data-field="fname">
        <label class="field-label" for="<?= e($form_id) ?>-fname">Navn</label>
        <input class="wnzxg input" id="<?= e($form_id) ?>-fname" type="text" name="fname" placeholder="Navn" required pattern="[^\d]+" autocomplete="given-name">
      </div>
      <div class="wxts7 field" data-field="lname">
        <label class="field-label" for="<?= e($form_id) ?>-lname">Apellidos</label>
        <input class="wnzxg input" id="<?= e($form_id) ?>-lname" type="text" name="lname" placeholder="Apellidos" required pattern="[^\d]+" autocomplete="family-name">
      </div>
      <div class="wxts7 field" data-field="email">
        <label class="field-label" for="<?= e($form_id) ?>-email">E-post</label>
        <input class="wnzxg input" id="<?= e($form_id) ?>-email" type="email" name="email" placeholder="E-post" required autocomplete="email" inputmode="email">
      </div>
      <div class="wxts7 field" data-field="phone">
        <label class="field-label" for="<?= e($form_id) ?>-phone">Telefon</label>
        <input class="wnzxg input" id="<?= e($form_id) ?>-phone" type="tel" name="fullphone" placeholder="412 34 567" autocomplete="tel" inputmode="tel">
        <span class="field-error hide" role="alert" aria-live="polite"></span>
      </div>
    </div>
<?php endif; ?>

    <button type="submit" class="qou73xg fi3abjs submit"><?= e($form_submit) ?></button>

    <div class="nmpf6" aria-label="Aksepterte betalingsmetoder">
      <svg class="ajr3je" role="img" aria-label="Visa" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>
      <svg class="ajr3je" role="img" aria-label="Mastercard" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>
      <svg class="ajr3je" role="img" aria-label="PayPal" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>
      <svg class="ajr3je" role="img" aria-label="Apple Pay" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>
      <svg class="ajr3je" role="img" aria-label="Bankoverføring" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>
      <svg class="ajr3je kw4ijl" role="img" aria-label="Sikker" viewBox="0 0 512 512"><use href="#i-shield-halved"/></svg>
    </div>

    <div class="form-message hidden" data-form-message role="alert">
      <p class="form-message-title" data-form-message-title></p>
      <div data-form-message-content></div>
    </div>

    <p class="ac7ftax">
      Ved å fortsette godtar du personvernerklæringen og bruksvilkårene.
      <a href="<?= page_url('privacy.php') ?>">Privacidad</a>
      y
      <a href="<?= page_url('conditions.php') ?>">Bruksvilkår</a>.
    </p>
  </div>
</form>
<?php
unset($form_id, $form_heading, $form_submit, $form_class, $form_subtitle, $form_variant, $is_stack);
?>
