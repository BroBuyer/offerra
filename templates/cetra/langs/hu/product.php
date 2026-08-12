<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title_lead("Termék");
$page_description = "Termék" . ' — ' . SITE_NAME;
$page_canonical = page_url("product.php");
$active_page = "product";
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="" width="30" height="30" />
      <?= e(SITE_NAME) ?>
    </a>
    <a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Nyissa meg fiókját</a>
  </div>
</header>
<main>
  <section class="sec">
    <div class="shell" style="max-width:760px">
      <h1><?= e(SITE_NAME) ?> — a platform</h1>
      <div class="lede" style="margin-top:18px">
        <p>MI-motor valós idejű emberi elemzéssel. Kereskedjen kriptóval, forexszel és részvényekkel ugyanazon a vezérlőpulton, gyors végrehajtással és elkülönített tőkével.</p>
      </div>
      <p style="margin-top:28px"><a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Nyissa meg fiókját</a></p>
    </div>
  </section>
</main>
<footer class="sec-sm" style="border-top:1px solid var(--border)">
  <div class="shell">
    <p>© <?= date('Y') ?> <?= e(SITE_NAME) ?>. Minden jog fenntartva.</p>
    <p><a href="<?= page_url('privacy.php') ?>">Adatvédelem</a> · <a href="<?= page_url('conditions.php') ?>">Feltételek</a></p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
