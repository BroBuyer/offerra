<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Pagina non trovata');
$page_description = 'La pagina richiesta non è stata trovata su ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Pagina non trovata</h1>
      <p class="lead">Questo link non esiste. Torna alla home oppure apri un account per iniziare.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Vai alla home</a>
        <a href="sign.php" class="btn btn-ghost">Apri un account</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
