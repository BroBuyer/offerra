<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title_lead("Product");
$page_description = "Product" . ' — ' . SITE_NAME;
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
    <a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Open uw account</a>
  </div>
</header>
<main>
  <section class="sec">
    <div class="shell" style="max-width:760px">
      <h1><?= e(SITE_NAME) ?> — het platform</h1>
      <div class="lede" style="margin-top:18px">
        <p>AI-engine met menselijke analyse in realtime. Handel crypto, forex en aandelen in hetzelfde dashboard, met snelle uitvoering en gescheiden kapitaal.</p>
      </div>
      <p style="margin-top:28px"><a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Open uw account</a></p>
    </div>
  </section>
</main>
<footer class="sec-sm" style="border-top:1px solid var(--border)">
  <div class="shell">
    <p>© <?= date('Y') ?> <?= e(SITE_NAME) ?>. Alle rechten voorbehouden.</p>
    <p><a href="<?= page_url('privacy.php') ?>">Privacy</a> · <a href="<?= page_url('conditions.php') ?>">Voorwaarden</a></p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
