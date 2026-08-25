<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Tack ᐉ ' . SITE_NAME;
$page_description = 'Din förfrågan har tagits emot av teamet på ' . SITE_NAME . '.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Meddelandet har tagits emot</span>
      <h1>Tack — vi hör av oss</h1>
      <p>Din förfrågan har tagits emot av teamet på <?= e(SITE_NAME) ?>. En specialist hör av sig strax för att hjälpa dig att komma igång. Under tiden är du välkommen att utforska plattformen.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Tillbaka till startsidan</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">Utforska plattformen</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
