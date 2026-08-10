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

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Página não encontrada</h1>
      <p class="lead">Essa ligação não existe. Volte ao início ou abra uma conta para começar.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Ir para o início</a>
        <a href="sign.php" class="btn btn-ghost">Abrir conta</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
