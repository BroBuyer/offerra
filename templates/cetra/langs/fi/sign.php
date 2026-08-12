<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title_lead("Rekisteröinti");
$page_description = "Rekisteröinti" . ' — ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="" width="30" height="30" />
      <?= e(SITE_NAME) ?>
    </a>
    <a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Avaa tilisi</a>
  </div>
</header>
<main>
  <section class="sec">
    <div class="shell" style="max-width:760px">
      <h1>Avaa tilisi</h1>
      <div class="lede" style="margin-top:18px">
        <?php $form_id="sign-form"; $form_heading="Aloita muutamassa minuutissa"; $form_submit="Haluan aloittaa"; require __DIR__."/includes/form.php"; ?>
      </div>
      <p style="margin-top:28px"><a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Avaa tilisi</a></p>
    </div>
  </section>
</main>
<footer class="sec-sm" style="border-top:1px solid var(--border)">
  <div class="shell">
    <p>© <?= date('Y') ?> <?= e(SITE_NAME) ?>. Kaikki oikeudet pidätetään.</p>
    <p><a href="<?= page_url('privacy.php') ?>">Tietosuoja</a> · <a href="<?= page_url('conditions.php') ?>">Ehdot</a></p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
