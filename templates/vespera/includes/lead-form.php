<?php
/** Shared lead / registration form (home, contact, sign-up). */
/** @var array $langData */
/** @var string $lang */
$h = $langData['hero'];
$already = $langData['form'] ?? [];
$privacyUrl = lang_path($lang, 'privacy');
$termsUrl = lang_path($lang, 'terms');
$legalHtml = str_replace(
    ['{privacy}', '{terms}'],
    [e($privacyUrl), e($termsUrl)],
    $h['legal']
);
$formId = $formId ?? 'lead-form';
$wrapId = $wrapId ?? 'lead-form-wrap';
$phoneCountry = function_exists('form_visitor_phone_country')
    ? form_visitor_phone_country()
    : ($phoneCountry ?? 'gb');
$allowedCountries = function_exists('form_allowed_countries') ? form_allowed_countries() : [];
$leadCookie = function_exists('site_slug') ? site_slug() . '_lead' : 'vespera_lead';
$cookieDays = defined('FORM_LEAD_COOKIE_DAYS') ? (int) FORM_LEAD_COOKIE_DAYS : 30;
$keitaroSubid = function_exists('keitaro_subid') ? keitaro_subid() : '';
?>
<div class="lead-form card" id="<?= e($wrapId) ?>">
  <form id="<?= e($formId) ?>" class="js-lead-form leadform" action="<?= e(public_url('integration/send.php')) ?>" method="post" novalidate
    data-ok="<?= e($h['form_ok']) ?>"
    data-err="<?= e($h['form_err']) ?>"
    data-lead-cookie="<?= e($leadCookie) ?>"
    data-cookie-days="<?= $cookieDays ?>">
    <div class="form-already-registered hidden" data-already-registered>
      <p class="form-already-registered__title"><?= e($already['already_title'] ?? 'You are already registered') ?></p>
      <p class="form-already-registered__text"><?= e($already['already_text'] ?? 'Your request has been received. Please wait for a call from our adviser.') ?></p>
    </div>
    <div data-form-fields>
      <input type="hidden" name="language" value="<?= e($lang) ?>">
      <input type="hidden" name="phone_country" value="<?= e($phoneCountry) ?>">
      <input type="hidden" name="only_countries" value='<?= e(json_encode($allowedCountries)) ?>'>
      <?php if ($keitaroSubid !== ''): ?>
      <input type="hidden" name="subid" value="<?= e($keitaroSubid) ?>">
      <?php endif; ?>
      <input type="hidden" name="form_token" value="" autocomplete="off">
      <div class="form-preloader hidden" aria-hidden="true"><div class="spinner"></div></div>
      <div class="form-stack">
        <div class="field">
          <label for="<?= e($formId) ?>-first_name"><?= e($h['first_name']) ?></label>
          <input id="<?= e($formId) ?>-first_name" name="first_name" type="text" required autocomplete="given-name" placeholder="<?= e($h['first_name']) ?>">
          <span class="field-error hide" role="alert" aria-live="polite"></span>
        </div>
        <div class="field">
          <label for="<?= e($formId) ?>-last_name"><?= e($h['last_name']) ?></label>
          <input id="<?= e($formId) ?>-last_name" name="last_name" type="text" required autocomplete="family-name" placeholder="<?= e($h['last_name']) ?>">
          <span class="field-error hide" role="alert" aria-live="polite"></span>
        </div>
        <div class="field">
          <label for="<?= e($formId) ?>-email"><?= e($h['email']) ?></label>
          <input id="<?= e($formId) ?>-email" name="email" type="email" required autocomplete="email" placeholder="<?= e($h['email']) ?>">
          <span class="field-error hide" role="alert" aria-live="polite"></span>
        </div>
        <div class="field">
          <label for="<?= e($formId) ?>-phone"><?= e($h['phone']) ?></label>
          <input id="<?= e($formId) ?>-phone" name="fullphone" type="tel" required autocomplete="tel" class="js-phone-input">
          <span class="field-error hide" role="alert" aria-live="polite"></span>
        </div>
      </div>
      <div class="honeypot" aria-hidden="true">
        <input type="text" name="company_url" tabindex="-1" autocomplete="off">
        <input type="text" name="website" tabindex="-1" autocomplete="off">
      </div>
      <button class="btn-primary block btn-pill" type="submit"><?= e($h['submit']) ?></button>
      <p class="form-legal"><?= $legalHtml ?></p>
      <div class="form-msg hidden" data-form-message role="status">
        <span data-form-message-content></span>
      </div>
      <div class="payment-row" aria-label="Payment methods">
        <span class="pay-badge visa" title="Visa">VISA</span>
        <span class="pay-badge mc" title="Mastercard" aria-label="Mastercard">
          <span class="mc-dot mc-dot--r"></span><span class="mc-dot mc-dot--o"></span>
        </span>
        <span class="pay-badge pp" title="PayPal">PayPal</span>
        <span class="pay-secure" title="<?= e($h['secure']) ?>">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" aria-hidden="true"><rect x="5" y="11" width="14" height="10" rx="2" stroke="currentColor" stroke-width="2"/><path d="M8 11V8a4 4 0 0 1 8 0v3" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
          <?= e($h['secure']) ?>
        </span>
      </div>
    </div>
  </form>
</div>
