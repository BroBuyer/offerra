<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Hvala ᐉ ' . SITE_NAME;
$page_description = 'Vašo zahtevo je prejela ekipa ' . SITE_NAME . '.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Sporočilo prejeto</span>
      <h1>Hvala - oglasili se bomo</h1>
      <p>Vašo zahtevo je prejela ekipa <?= e(SITE_NAME) ?>. Kmalu vas bo kontaktiral strokovnjak, ki vam bo pomagal začeti. Medtem lahko raziščete platformo.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Nazaj domov</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">Raziščite platformo</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
