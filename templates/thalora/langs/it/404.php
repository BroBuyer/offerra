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
<main class="flex grow flex-col overflow-hidden">
  <section class="notfound-page">
    <div class="container-base" style="max-width: 560px;">
      <h1>Pagina non trovata</h1>
      <p>Questo link non esiste. Torna alla home o apri un conto per iniziare.</p>
      <div class="flex items-center justify-center gap-4" style="margin-top: 1.5rem;">
        <a href="<?= page_url() ?>" class="btn btn-black">Torna alla home</a>
        <a href="<?= page_url('sign.php') ?>" class="btn btn-black">Apri un conto</a>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
