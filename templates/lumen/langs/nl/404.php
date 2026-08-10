<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Pagina niet gevonden');
$page_description = 'De gevraagde pagina is niet gevonden op ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Pagina niet gevonden</h1>
      <p class="lead">Die link bestaat niet. Ga terug naar home of open een account om te starten.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Naar home</a>
        <a href="sign.php" class="btn btn-ghost">Account openen</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
