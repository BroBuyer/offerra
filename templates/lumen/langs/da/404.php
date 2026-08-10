<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Siden blev ikke fundet');
$page_description = 'Siden, du anmodede om, kunne ikke findes på ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Siden blev ikke fundet</h1>
      <p class="lead">Det link findes ikke. Gå tilbage hjem, eller åbn en konto for at komme i gang.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Gå hjem</a>
        <a href="sign.php" class="btn btn-ghost">Åbn konto</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
