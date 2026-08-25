<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kiitos ᐉ ' . SITE_NAME;
$page_description = 'Pyyntönne on vastaanottanut ' . SITE_NAME . '-tiimi.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Viesti vastaanotettu</span>
      <h1>Kiitos — otamme yhteyttä</h1>
      <p>Pyyntönne on vastaanottanut <?= e(SITE_NAME) ?>-tiimi. Asiantuntija ottaa pian yhteyttä ja auttaa alkuun. Sillä välin voitte tutustua alustaan.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Takaisin etusivulle</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">Tutustu alustaan</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
