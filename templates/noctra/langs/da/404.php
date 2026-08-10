<?php
declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Siden blev ikke fundet');
$page_description = 'Den ønskede side er ikke tilgængelig. Gå tilbage til ' . SITE_NAME . ' for at fortsætte handlen.';
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
      <p class="eyebrow" style="justify-content: center;">Siden blev ikke fundet</p>
      <h1>Denne side findes ikke</h1>
      <p class="lead">
        Linket kan være forældet eller indtastet forkert. Gå tilbage til forsiden for at fortsætte.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Tilbage til forsiden</a>
        <a href="contacts.php" class="btn btn-outline">Kontakt support</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
