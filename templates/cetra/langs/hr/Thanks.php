<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title_lead("Hvala");
$page_description = "Hvala" . ' — ' . SITE_NAME;
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="" width="30" height="30" />
      <?= e(SITE_NAME) ?>
    </a>
    <a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Otvorite svoj račun</a>
  </div>
</header>
<main>
  <section class="sec">
    <div class="shell" style="max-width:760px">
      <h1>Unutra ste.</h1>
      <div class="lede" style="margin-top:18px">
        <p>Hvala što ste se registrirali na <?= e(SITE_NAME) ?>. Naš tim će vas uskoro kontaktirati — držite telefon blizu.</p>
      </div>
      <p style="margin-top:28px"><a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Otvorite svoj račun</a></p>
    </div>
  </section>
</main>
<footer class="sec-sm" style="border-top:1px solid var(--border)">
  <div class="shell">
    <p>© <?= date('Y') ?> <?= e(SITE_NAME) ?>. Sva prava pridržana.</p>
    <p><a href="<?= page_url('privacy.php') ?>">Privatnost</a> · <a href="<?= page_url('conditions.php') ?>">Uvjeti</a></p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
