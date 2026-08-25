<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Köszönjük ᐉ ' . SITE_NAME;
$page_description = 'Kérelmét a(z) ' . SITE_NAME . ' csapata megkapta.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Üzenet megérkezett</span>
      <h1>Köszönjük — hamarosan jelentkezünk</h1>
      <p>Kérelmét a(z) <?= e(SITE_NAME) ?> csapata megkapta. Egy szakértő hamarosan felveszi Önnel a kapcsolatot a kezdéshez. Közben bátran nézze meg a platformot.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Vissza a kezdőlapra</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">A platform felfedezése</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
