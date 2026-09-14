<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title_lead("Puslapis nerastas");
$page_description = "Puslapis nerastas" . ' — ' . SITE_NAME;
$page_canonical = page_url("404.php");
$active_page = "404";
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="" width="30" height="30" />
      <?= e(SITE_NAME) ?>
    </a>
    <a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Atidarykite paskyrą</a>
  </div>
</header>
<main>
  <section class="sec">
    <div class="shell" style="max-width:760px">
      <h1>Puslapis nerastas</h1>
      <div class="lede" style="margin-top:18px">
        <p>Tos nuorodos nėra.<a href="<?= page_url() ?>">Grįžti į namus</a>.</p>
      </div>
      <p style="margin-top:28px"><a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Atidarykite paskyrą</a></p>
    </div>
  </section>
</main>
<footer class="sec-sm" style="border-top:1px solid var(--border)">
  <div class="shell">
    <p>© <?= date('Y') ?> <?= e(SITE_NAME) ?>. Visos teisės saugomos.</p>
    <p><a href="<?= page_url('privacy.php') ?>">Privatumas</a> · <a href="<?= page_url('conditions.php') ?>">Sąlygos</a></p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
