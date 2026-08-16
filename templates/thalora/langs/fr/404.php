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
<main class="flex grow flex-col overflow-hidden">
  <section class="notfound-page">
    <div class="container-base" style="max-width: 560px;">
      <h1>Page introuvable</h1>
      <p>Ce lien n’existe pas. Revenez à l’accueil ou ouvrez un compte pour commencer.</p>
      <div class="flex items-center justify-center gap-4" style="margin-top: 1.5rem;">
        <a href="<?= page_url() ?>" class="btn btn-black">Retour à l’accueil</a>
        <a href="<?= page_url('sign.php') ?>" class="btn btn-black">Ouvrir un compte</a>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
