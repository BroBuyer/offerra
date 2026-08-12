<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Stránka nenájdená');
$page_description = 'Požadovanú stránku nie je možné nájsť na ' . SITE_NAME . '.';
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
      <p class="lead">Tento odkaz neexistuje. Vráťte sa domov alebo si otvorte účet a začnite.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Domov</a>
        <a href="sign.php" class="btn btn-ghost">Otvoriť účet</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
