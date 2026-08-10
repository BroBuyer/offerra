<?php
declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Página não encontrada');
$page_description = 'A página pedida não está disponível. Volte à ' . SITE_NAME . ' para continuar.';
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
      <p class="eyebrow" style="justify-content: center;">Página não encontrada</p>
      <h1>Esta página não existe</h1>
      <p class="lead">
        A ligação pode estar desatualizada ou ter sido escrita incorretamente. Volte à página inicial para continuar.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Voltar ao início</a>
        <a href="contacts.php" class="btn btn-outline">Contactar o suporte</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
