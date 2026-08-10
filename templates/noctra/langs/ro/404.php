<?php
declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Pagina nu a fost găsită');
$page_description = 'Pagina solicitată nu este disponibilă. Revino la ' . SITE_NAME . ' pentru a continua tradingul.';
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
      <p class="eyebrow" style="justify-content: center;">Pagina nu a fost găsită</p>
      <h1>Această pagină nu există</h1>
      <p class="lead">
        Linkul poate fi învechit sau greșit. Revino la pagina principală pentru a continua.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Înapoi acasă</a>
        <a href="contacts.php" class="btn btn-outline">Contactează suportul</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
