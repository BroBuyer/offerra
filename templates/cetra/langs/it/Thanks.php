<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title_lead("Grazie");
$page_description = "Grazie" . ' — ' . SITE_NAME;
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
    <a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Apri il tuo account</a>
  </div>
</header>
<main>
  <section class="sec">
    <div class="shell" style="max-width:760px">
      <h1>Sei dentro.</h1>
      <div class="lede" style="margin-top:18px">
        <p>Grazie per esserti registrato su <?= e(SITE_NAME) ?>. Il nostro team ti contatterà a breve — tieni il telefono a portata di mano.</p>
      </div>
      <p style="margin-top:28px"><a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Apri il tuo account</a></p>
    </div>
  </section>
</main>
<footer class="sec-sm" style="border-top:1px solid var(--border)">
  <div class="shell">
    <p>© <?= date('Y') ?> <?= e(SITE_NAME) ?>. Tutti i diritti riservati.</p>
    <p><a href="<?= page_url('privacy.php') ?>">Privacy</a> · <a href="<?= page_url('conditions.php') ?>">Termini</a></p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
