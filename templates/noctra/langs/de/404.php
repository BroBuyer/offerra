<?php
declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Seite nicht gefunden');
$page_description = 'Die angeforderte Seite ist nicht verfügbar. Kehren Sie zu ' . SITE_NAME . ' zurück, um weiterzumachen.';
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
      <p class="eyebrow" style="justify-content: center;">Seite nicht gefunden</p>
      <h1>Diese Seite existiert nicht</h1>
      <p class="lead">
        Der Link ist möglicherweise veraltet oder falsch eingegeben. Kehren Sie zur Startseite zurück, um fortzufahren.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Zur Startseite</a>
        <a href="contacts.php" class="btn btn-outline">Support kontaktieren</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
