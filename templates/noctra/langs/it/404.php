<?php
declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Pagina non trovata');
$page_description = 'La pagina richiesta non è disponibile. Torna su ' . SITE_NAME . ' per continuare a fare trading.';
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
      <p class="eyebrow" style="justify-content: center;">Pagina non trovata</p>
      <h1>Questa pagina non esiste</h1>
      <p class="lead">
        Il link potrebbe essere obsoleto o digitato male. Torna alla home per continuare.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Torna alla home</a>
        <a href="contacts.php" class="btn btn-outline">Contatta il supporto</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
