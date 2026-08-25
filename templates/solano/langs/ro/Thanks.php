<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Vă mulțumim ᐉ ' . SITE_NAME;
$page_description = 'Solicitarea dumneavoastră a fost primită de echipa ' . SITE_NAME . '.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Mesaj primit</span>
      <h1>Vă mulțumim — vă vom contacta</h1>
      <p>Solicitarea dumneavoastră a fost primită de echipa <?= e(SITE_NAME) ?>. Un specialist vă va contacta în scurt timp pentru a vă ajuta să începeți. Între timp, explorați platforma în voie.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Înapoi acasă</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">Explorați platforma</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
