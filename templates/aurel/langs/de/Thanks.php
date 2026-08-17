<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Vielen Dank ᐉ ' . SITE_NAME;
$page_description = 'Ihre Anfrage hat das Team von ' . SITE_NAME . ' erhalten.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Nachricht erhalten</span>
      <h1>Vielen Dank — wir melden uns</h1>
      <p>Ihre Anfrage hat das Team von <?= e(SITE_NAME) ?> erhalten. Ein Spezialist meldet sich in Kürze, um Ihnen den Start zu erleichtern. Bis dahin können Sie die Plattform gern erkunden.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Zurück zur Startseite</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">Plattform erkunden</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
