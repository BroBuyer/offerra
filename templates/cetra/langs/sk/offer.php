<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title_lead("Ceny");
$page_description = "Ceny" . ' — ' . SITE_NAME;
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="" width="30" height="30" />
      <?= e(SITE_NAME) ?>
    </a>
    <a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Otvorte si účet</a>
  </div>
</header>
<main>
  <section class="sec">
    <div class="shell" style="max-width:760px">
      <h1>Začnite od <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?></h1>
      <div class="lede" style="margin-top:18px">
        <p>Plný prístup k platforme po minimálnom vklade. Bez skrytých poplatkov — náklady sú zobrazené transparentne.</p>
      </div>
      <p style="margin-top:28px"><a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Otvorte si účet</a></p>
    </div>
  </section>
</main>
<footer class="sec-sm" style="border-top:1px solid var(--border)">
  <div class="shell">
    <p>© <?= date('Y') ?> <?= e(SITE_NAME) ?>. Všetky práva vyhradené.</p>
    <p><a href="<?= page_url('privacy.php') ?>">Súkromie</a> · <a href="<?= page_url('conditions.php') ?>">Podmienky</a></p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
