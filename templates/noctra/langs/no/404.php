<?php
declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Siden ble ikke funnet');
$page_description = 'Siden du ba om er utilgjengelig. Gå tilbake til ' . SITE_NAME . ' for å fortsette handelen.';
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
      <p class="eyebrow" style="justify-content: center;">Siden ble ikke funnet</p>
      <h1>Denne siden finnes ikke</h1>
      <p class="lead">
        Lenken kan være utdatert eller feilskrevet. Gå tilbake til forsiden for å fortsette.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Tilbake til forsiden</a>
        <a href="contacts.php" class="btn btn-outline">Kontakt support</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
