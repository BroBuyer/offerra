<?php
declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Pagina niet gevonden');
$page_description = 'De opgevraagde pagina is niet beschikbaar. Ga terug naar ' . SITE_NAME . ' om verder te gaan.';
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
      <p class="eyebrow" style="justify-content: center;">Pagina niet gevonden</p>
      <h1>Deze pagina bestaat niet</h1>
      <p class="lead">
        De link is mogelijk verouderd of verkeerd getypt. Ga terug naar de startpagina om verder te gaan.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Terug naar home</a>
        <a href="contacts.php" class="btn btn-outline">Contact support</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
