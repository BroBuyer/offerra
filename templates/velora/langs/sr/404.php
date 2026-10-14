<?php
declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Stranica nije pronađena');
$page_description = 'Tražena stranica nije dostupna. Vratite se na ' . SITE_NAME . ' za nastavak trgovanja.';
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
      <p class="eyebrow" style="justify-content: center;">Stranica nije pronađena</p>
      <h1>Ova stranica ne postoji</h1>
      <p class="lead">
        Poveznica može biti zastarjela ili pogrešno upisana. Vratite se na početnu stranicu za nastavak.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Natrag na početnu</a>
        <a href="contacts.php" class="btn btn-outline">Kontaktirajte podršku</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
