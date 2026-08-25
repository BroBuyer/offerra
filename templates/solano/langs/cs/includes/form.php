<?php
require_once __DIR__ . '/config.php';

$form_id = $form_id ?? 'lead-form';
$form_heading = $form_heading ?? null;
$form_submit = $form_submit ?? 'Začít nyní';
$form_variant = $form_variant ?? 'stack';
$form_class = trim(($form_class ?? 'leadform lead-form solano-form') . ($form_variant === 'stack' ? ' solano-stack' : ''));
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
    <p class="form-already-registered__title">Již jste registrováni</p>
    <p class="form-already-registered__text">
      Vaši žádost u <?= e(SITE_NAME) ?> jsme obdrželi. Počkejte prosím na hovor od našeho poradce.
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
      <p class="amrqy"><?= e($form_subtitle) ?></p>
    <?php endif; ?>

<?php if ($is_stack): ?>
    <div class="rtjqp">
      <div class="jn406 field" data-field="fname">
        <label class="field-label" for="<?= e($form_id) ?>-fname">Jméno</label>
        <input class="cm9aayi input" id="<?= e($form_id) ?>-fname" type="text" name="fname" placeholder="Jméno" required pattern="[^\d]+" autocomplete="given-name">
      </div>
      <div class="jn406 field" data-field="lname">
        <label class="field-label" for="<?= e($form_id) ?>-lname">Příjmení</label>
        <input class="cm9aayi input" id="<?= e($form_id) ?>-lname" type="text" name="lname" placeholder="Příjmení" required pattern="[^\d]+" autocomplete="family-name">
      </div>
    </div>
    <div class="jn406 field" data-field="email">
      <label class="field-label" for="<?= e($form_id) ?>-email">E-mail</label>
      <input class="cm9aayi input" id="<?= e($form_id) ?>-email" type="email" name="email" placeholder="E-mail" required autocomplete="email" inputmode="email">
    </div>
    <div class="jn406 field" data-field="phone">
      <label class="field-label" for="<?= e($form_id) ?>-phone">Telefon</label>
      <input class="cm9aayi input" id="<?= e($form_id) ?>-phone" type="tel" name="fullphone" placeholder="7123 456789" autocomplete="tel" inputmode="tel">
      <span class="field-error hide" role="alert" aria-live="polite"></span>
    </div>
<?php else: ?>
    <div class="rtjqp">
      <div class="jn406 field" data-field="fname">
        <label class="field-label" for="<?= e($form_id) ?>-fname">Jméno</label>
        <input class="cm9aayi input" id="<?= e($form_id) ?>-fname" type="text" name="fname" placeholder="Jméno" required pattern="[^\d]+" autocomplete="given-name">
      </div>
      <div class="jn406 field" data-field="lname">
        <label class="field-label" for="<?= e($form_id) ?>-lname">Příjmení</label>
        <input class="cm9aayi input" id="<?= e($form_id) ?>-lname" type="text" name="lname" placeholder="Příjmení" required pattern="[^\d]+" autocomplete="family-name">
      </div>
      <div class="jn406 field" data-field="email">
        <label class="field-label" for="<?= e($form_id) ?>-email">E-mail</label>
        <input class="cm9aayi input" id="<?= e($form_id) ?>-email" type="email" name="email" placeholder="E-mail" required autocomplete="email" inputmode="email">
      </div>
      <div class="jn406 field" data-field="phone">
        <label class="field-label" for="<?= e($form_id) ?>-phone">Telefon</label>
        <input class="cm9aayi input" id="<?= e($form_id) ?>-phone" type="tel" name="fullphone" placeholder="7123 456789" autocomplete="tel" inputmode="tel">
        <span class="field-error hide" role="alert" aria-live="polite"></span>
      </div>
    </div>
<?php endif; ?>

    <button type="submit" class="rs0voj6 ggca24u submit" style="width:100%;justify-content:center"><?= e($form_submit) ?></button>

    <div class="payrow" aria-label="Přijímané platební metody">
      <svg class="fai" role="img" aria-label="Visa" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>
      <svg class="fai" role="img" aria-label="Mastercard" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>
      <svg class="fai" role="img" aria-label="PayPal" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>
      <svg class="fai" role="img" aria-label="Apple Pay" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>
      <svg class="fai" role="img" aria-label="Bankovní převod" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>
      <svg class="fai pay-ok" role="img" aria-label="Zabezpečeno" viewBox="0 0 512 512"><use href="#i-shield-halved"/></svg>
    </div>

    <div class="form-message hidden" data-form-message role="alert">
      <p class="form-message-title" data-form-message-title></p>
      <div data-form-message-content></div>
    </div>

    <p class="jvrey">
      Pokračováním přijímáte zásady ochrany soukromí a podmínky používání.
      <a href="<?= page_url('privacy.php') ?>">Soukromí</a>
      a
      <a href="<?= page_url('conditions.php') ?>">Podmínky používání</a>.
    </p>
  </div>
</form>
<?php
unset($form_id, $form_heading, $form_submit, $form_class, $form_subtitle, $form_variant, $is_stack);
?>
