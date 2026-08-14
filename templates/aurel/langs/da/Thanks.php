<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Tak ᐉ ' . SITE_NAME;
$page_description = 'Din anmodning er modtaget af teamet hos ' . SITE_NAME . '.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Besked modtaget</span>
      <h1>Tak — vi kontakter dig</h1>
      <p>Din anmodning er modtaget af teamet hos <?= e(SITE_NAME) ?>. En specialist kontakter dig snart for at hjælpe dig i gang. Du er velkommen til at udforske platformen i mellemtiden.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Tilbage til forsiden</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">Udforsk platformen</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
