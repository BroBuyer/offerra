<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Página não encontrada');
$page_description = 'A página pedida não foi encontrada em ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="notfound-page">
    <div class="container-base" style="max-width: 560px;">
      <h1>Página não encontrada</h1>
      <p>Essa ligação não existe. Volta ao início ou abre uma conta para começares.</p>
      <div class="flex items-center justify-center gap-4" style="margin-top: 1.5rem;">
        <a href="<?= page_url() ?>" class="btn btn-black">Voltar ao início</a>
        <a href="<?= page_url('sign.php') ?>" class="btn btn-black">Abrir conta</a>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
