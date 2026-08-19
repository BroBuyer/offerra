<?php
require_once __DIR__ . '/config.php';

$form_id = $form_id ?? 'lead-form';
$form_heading = $form_heading ?? null;
$form_submit = $form_submit ?? '無料アカウントを作成';
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
    <p class="form-already-registered__title">すでに登録済みです</p>
    <p class="form-already-registered__text">
      お客様の <?= e(SITE_NAME) ?> へのご依頼を受け付けました。担当マネージャーからのお電話をお待ちください。
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
        <span class="field-label">名</span>
        <input class="input" type="text" name="fname" placeholder="名" required pattern="[^\d]+" autocomplete="given-name">
      </label>
      <label class="field" data-field="lname">
        <span class="field-label">姓</span>
        <input class="input" type="text" name="lname" placeholder="姓" required pattern="[^\d]+" autocomplete="family-name">
      </label>
      <label class="field field-full" data-field="email">
        <span class="field-label">メール</span>
        <input class="input" type="email" name="email" placeholder="メールアドレス" required autocomplete="email" inputmode="email">
      </label>
      <label class="field field-full" data-field="phone">
        <span class="field-label">電話</span>
        <input class="input" type="tel" name="fullphone" placeholder="90-1234-5678" autocomplete="tel" inputmode="tel">
        <span class="field-error hide" role="alert" aria-live="polite"></span>
      </label>
    </div>

    <button type="submit" class="btn btn-primary btn-block submit"><?= e($form_submit) ?></button>

    <div class="pay-row" aria-label="ご利用いただける支払い方法">
      <svg class="fai" role="img" aria-label="Visa" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>
      <svg class="fai" role="img" aria-label="Mastercard" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>
      <svg class="fai" role="img" aria-label="PayPal" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>
      <svg class="fai" role="img" aria-label="Apple Pay" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>
      <svg class="fai" role="img" aria-label="Google Pay" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>
      <svg class="fai" role="img" aria-label="銀行振込" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>
      <svg class="fai pay-ok" role="img" aria-label="安全" viewBox="0 0 512 512"><use href="#i-shield-halved"/></svg>
    </div>

    <div class="form-message hidden" data-form-message role="alert">
      <p class="form-message-title" data-form-message-title></p>
      <div data-form-message-content></div>
    </div>

    <p class="lead-consent form-legal">
      続行すると、利用規約とプライバシーポリシーに同意したことになります。
      <a href="<?= page_url('privacy.php') ?>">プライバシーポリシー</a>
      &amp;
      <a href="<?= page_url('conditions.php') ?>">利用規約</a>.
    </p>
  </div>
</form>
<?php
unset($form_id, $form_heading, $form_submit, $form_class, $form_subtitle);
?>
