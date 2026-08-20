<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Lapa nav atrasta');
$page_description = 'Pieprasītā lapa nav atrasta vietnē ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="notfound-page">
    <div class="container-base" style="max-width: 560px;">
      <h1>Lapa nav atrasta</h1>
      <p>Šī saite neeksistē. Atgriezieties sākumlapā vai atveriet kontu, lai sāktu.</p>
      <div class="flex items-center justify-center gap-4" style="margin-top: 1.5rem;">
        <a href="<?= page_url() ?>" class="btn btn-black">Uz sākumlapu</a>
        <a href="<?= page_url('sign.php') ?>" class="btn btn-black">Atvērt kontu</a>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
