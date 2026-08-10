<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Stránka nenájdená');
$page_description = 'Požadovaná stránka na ' . SITE_NAME . ' nebola nájdená.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Stránka nenájdená</h1>
      <p class="lead">Tento odkaz neexistuje. Vráťte sa domov alebo otvorte účet a začnite.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Späť domov</a>
        <a href="sign.php" class="btn btn-ghost">Otvoriť účet</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
