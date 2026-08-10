<?php
declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Nie znaleziono strony');
$page_description = 'Żądana strona jest niedostępna. Wróć do ' . SITE_NAME . ', aby kontynuować.';
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
      <p class="eyebrow" style="justify-content: center;">Nie znaleziono strony</p>
      <h1>Ta strona nie istnieje</h1>
      <p class="lead">
        Link może być nieaktualny lub wpisany błędnie. Wróć na stronę główną, aby kontynuować.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Wróć na stronę główną</a>
        <a href="contacts.php" class="btn btn-outline">Kontakt z pomocą</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
