<?php
declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Page introuvable');
$page_description = 'La page demandée est indisponible. Retournez sur ' . SITE_NAME . ' pour continuer à trader.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="not-found">
    <div class="container">
      <div class="not-found-code" aria-hidden="true">404</div>
      <p class="eyebrow" style="justify-content: center;">Page introuvable</p>
      <h1>Cette page n'existe pas</h1>
      <p class="lead">
        Le lien est peut-être obsolète ou mal saisi. Retournez à l'accueil pour continuer.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Retour à l'accueil</a>
        <a href="contacts.php" class="btn btn-outline">Contacter l'assistance</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
