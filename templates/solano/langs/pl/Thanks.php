<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Dziękujemy ᐉ ' . SITE_NAME;
$page_description = 'Państwa zgłoszenie otrzymał zespół ' . SITE_NAME . '.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Wiadomość otrzymana</span>
      <h1>Dziękujemy — skontaktujemy się</h1>
      <p>Państwa zgłoszenie otrzymał zespół <?= e(SITE_NAME) ?>. Specjalista wkrótce się odezwie i pomoże zacząć. Tymczasem można spokojnie poznać platformę.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Powrót na stronę główną</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">Poznaj platformę</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
