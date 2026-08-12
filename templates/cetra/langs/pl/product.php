<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title_lead("Produkt");
$page_description = "Produkt" . ' — ' . SITE_NAME;
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
    <a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Otwórz swoje konto</a>
  </div>
</header>
<main>
  <section class="sec">
    <div class="shell" style="max-width:760px">
      <h1><?= e(SITE_NAME) ?> — platforma</h1>
      <div class="lede" style="margin-top:18px">
        <p>Silnik AI z analizą człowieka w czasie rzeczywistym. Handluj krypto, forexem i akcjami w tym samym panelu, z szybką egzekucją i wydzielonym kapitałem.</p>
      </div>
      <p style="margin-top:28px"><a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Otwórz swoje konto</a></p>
    </div>
  </section>
</main>
<footer class="sec-sm" style="border-top:1px solid var(--border)">
  <div class="shell">
    <p>© <?= date('Y') ?> <?= e(SITE_NAME) ?>. Wszelkie prawa zastrzeżone.</p>
    <p><a href="<?= page_url('privacy.php') ?>">Prywatność</a> · <a href="<?= page_url('conditions.php') ?>">Warunki</a></p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
