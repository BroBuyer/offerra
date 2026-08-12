<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title_lead("Termos");
$page_description = "Termos" . ' — ' . SITE_NAME;
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="" width="30" height="30" />
      <?= e(SITE_NAME) ?>
    </a>
    <a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Abra sua conta</a>
  </div>
</header>
<main>
  <section class="sec">
    <div class="shell" style="max-width:760px">
      <h1>Termos de Utilização</h1>
      <div class="lede" style="margin-top:18px">
        <p>Ao acessar <?= e(SITE_NAME) ?> você concorda com estes termos. Investir envolve risco, incluindo possível perda de capital. Você deve ter pelo menos 18 anos.</p>
      </div>
      <p style="margin-top:28px"><a class="btn btn-primary" href="<?= page_url('sign.php') ?>">Abra sua conta</a></p>
    </div>
  </section>
</main>
<footer class="sec-sm" style="border-top:1px solid var(--border)">
  <div class="shell">
    <p>© <?= date('Y') ?> <?= e(SITE_NAME) ?>. Todos os direitos reservados.</p>
    <p><a href="<?= page_url('privacy.php') ?>">Privacidade</a> · <a href="<?= page_url('conditions.php') ?>">Termos</a></p>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
