<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title_lead("FAQ");
$page_description = "FAQ" . ' — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="" width="30" height="30" />
      <?= e(SITE_NAME) ?>
    </a>
    <a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Deschide-ți contul</a>
  </div>
</header>
<main>
  <section class="sec">
    <div class="shell" style="max-width:760px">
      <h1>Întrebări frecvente</h1>
      <div class="lede" style="margin-top:18px">
        <p>Întrebări despre depuneri, retrageri, securitate și onboarding. Deschide-ți contul și un specialist te ajută la primul pas.</p>
      </div>
      <p style="margin-top:28px"><a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Deschide-ți contul</a></p>
    </div>
  </section>
</main>
<footer class="sec-sm" style="border-top:1px solid var(--border)">
  <div class="shell">
    <p>© <?= date('Y') ?> <?= e(SITE_NAME) ?>. Toate drepturile rezervate.</p>
    <p><a href="<?= page_url('privacy.php') ?>">Confidențialitate</a> · <a href="<?= page_url('conditions.php') ?>">Termeni</a></p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
