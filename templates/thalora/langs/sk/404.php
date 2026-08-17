<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Stránka sa nenašla');
$page_description = 'Požadovaná stránka sa nenašla na ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="notfound-page">
    <div class="container-base" style="max-width: 560px;">
      <h1>Stránka sa nenašla</h1>
      <p>Tento odkaz neexistuje. Vráťte sa na úvodnú stránku alebo otvorte účet, aby ste začali.</p>
      <div class="flex items-center justify-center gap-4" style="margin-top: 1.5rem;">
        <a href="<?= page_url() ?>" class="btn btn-black">Späť na úvodnú stránku</a>
        <a href="<?= page_url('sign.php') ?>" class="btn btn-black">Otvoriť účet</a>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
