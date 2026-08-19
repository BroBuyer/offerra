<?php
require_once __DIR__ . '/config.php';
$chat_phone_country = form_visitor_phone_country();
$chat_allowed = form_allowed_countries();
$chat_lead_cookie = site_slug() . '_lead';
?>
<div class="lisa-chat" id="lisaChat" data-lisa-chat>
  <button type="button" class="lisa-fab" id="chat-toggle-btn" aria-label="Lisaとチャットを開く" aria-expanded="false">
    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
      <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
    </svg>
    <span class="lisa-fab__dot" id="chat-noti-dot" aria-hidden="true">1</span>
  </button>

  <div class="lisa-panel" id="chat-window" hidden>
    <div class="lisa-panel__head">
      <div class="lisa-panel__identity">
        <div class="lisa-avatar">
          <img src="<?= asset('static/img/lisa.png') ?>" width="42" height="42" alt="Lisa">
          <span class="lisa-avatar__online" aria-hidden="true"></span>
        </div>
        <div>
          <h4>Lisa</h4>
          <p>オンボーディングアシスタント</p>
        </div>
      </div>
      <button type="button" class="lisa-panel__close" id="chat-close-btn" aria-label="チャットを閉じる">
        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
      </button>
    </div>

    <div class="lisa-body">
    <div class="lisa-messages" id="chat-messages" role="log" aria-live="polite"></div>

    <div class="lisa-typing" id="typing-indicator" hidden>Lisaが入力中…</div>

    <div class="lisa-controls" id="chat-controls"></div>

    <div class="lisa-form-wrap" id="chat-form-wrap" hidden>
      <form
        name="form"
        method="post"
        id="cq-isolated-form"
        class="leadform lead-form lisa-leadform"
        action="<?= asset('integration/send.php') ?>"
        data-form
        data-lead-cookie="<?= e($chat_lead_cookie) ?>"
        data-cookie-days="<?= (int) FORM_LEAD_COOKIE_DAYS ?>"
      >
        <div class="form-already-registered hidden" data-already-registered>
          <p class="form-already-registered__title">すでに登録済みです</p>
          <p class="form-already-registered__text">担当マネージャーからのお電話をお待ちください。</p>
        </div>
        <div data-form-fields>
          <input type="hidden" name="language" value="<?= e(SITE_LANG) ?>">
          <input type="hidden" name="phone_country" value="<?= e($chat_phone_country) ?>">
          <input type="hidden" name="only_countries" value='<?= e(json_encode($chat_allowed)) ?>'>
<?php if (($keitaro_subid = keitaro_subid()) !== ''): ?>
          <input type="hidden" name="subid" value="<?= e($keitaro_subid) ?>">
<?php endif; ?>
          <input type="hidden" name="form_token" value="" autocomplete="off">
          <div class="form-preloader hidden" aria-hidden="true"><div class="spinner"></div></div>

          <label class="field" data-field="fname">
            <span class="field-label">名</span>
            <input class="input" type="text" name="fname" id="cq-field-fname" required pattern="[^\d]+" autocomplete="given-name">
          </label>
          <label class="field" data-field="lname">
            <span class="field-label">姓</span>
            <input class="input" type="text" name="lname" id="cq-field-lname" required pattern="[^\d]+" autocomplete="family-name">
          </label>
          <label class="field" data-field="email">
            <span class="field-label">メールアドレス</span>
            <input class="input" type="email" name="email" id="cq-field-email" required autocomplete="email">
          </label>
          <label class="field" data-field="phone">
            <span class="field-label">電話番号</span>
            <input class="input" type="tel" name="fullphone" id="cq-field-phone" autocomplete="tel">
            <span class="field-error hide" role="alert"></span>
          </label>

          <button type="submit" class="btn btn-primary btn-block submit" id="cq-custom-submit-btn">無料アカウントを作成</button>
          <div class="form-message hidden" data-form-message role="alert">
            <p class="form-message-title" data-form-message-title></p>
            <div data-form-message-content></div>
          </div>
          <p class="form-legal">送信することで、当社の <a href="conditions.php">規約</a>.</p>
        </div>
      </form>
    </div>
    </div>
  </div>
</div>
