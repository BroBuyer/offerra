<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Tak ᐉ ' . SITE_NAME;
$page_description = 'Forespørselen din er mottatt av teamet hos ' . SITE_NAME . '.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Melding mottatt</span>
      <h1>Tak — vi kontakter deg</h1>
      <p>Forespørselen din er mottatt av teamet hos <?= e(SITE_NAME) ?>. En spesialist kontakter deg snart for å hjelpe deg i gang. Du er velkommen til å utforske plattformen i mellomtiden.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Tilbake til forsiden</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">Utforsk plattformen</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
