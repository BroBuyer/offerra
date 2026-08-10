<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Page introuvable');
$page_description = 'La page demandée est introuvable sur ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Page introuvable</h1>
      <p class="lead">Ce lien n’existe pas. Retournez à l’accueil ou ouvrez un compte pour commencer.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Retour à l’accueil</a>
        <a href="sign.php" class="btn btn-ghost">Ouvrir un compte</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
