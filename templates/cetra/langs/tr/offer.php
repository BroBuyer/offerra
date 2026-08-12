<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title_lead("Fiyatlar");
$page_description = "Fiyatlar" . ' — ' . SITE_NAME;
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
    <a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Hesabınızı açın</a>
  </div>
</header>
<main>
  <section class="sec">
    <div class="shell" style="max-width:760px">
      <h1>Şundan başlayın: <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?></h1>
      <div class="lede" style="margin-top:18px">
        <p>Minimum yatırımdan sonra tam platform erişimi. Gizli ücret yok — maliyetler şeffaf gösterilir.</p>
      </div>
      <p style="margin-top:28px"><a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Hesabınızı açın</a></p>
    </div>
  </section>
</main>
<footer class="sec-sm" style="border-top:1px solid var(--border)">
  <div class="shell">
    <p>© <?= date('Y') ?> <?= e(SITE_NAME) ?>. Tüm hakları saklıdır.</p>
    <p><a href="<?= page_url('privacy.php') ?>">Gizlilik</a> · <a href="<?= page_url('conditions.php') ?>">Şartlar</a></p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
