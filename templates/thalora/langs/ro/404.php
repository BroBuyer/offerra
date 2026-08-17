<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Pagina nu a fost găsită');
$page_description = 'Pagina solicitată nu a fost găsită pe ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="notfound-page">
    <div class="container-base" style="max-width: 560px;">
      <h1>Pagina nu a fost găsită</h1>
      <p>Acest link nu există. Reveniți acasă sau deschideți un cont pentru a începe.</p>
      <div class="flex items-center justify-center gap-4" style="margin-top: 1.5rem;">
        <a href="<?= page_url() ?>" class="btn btn-black">Înapoi acasă</a>
        <a href="<?= page_url('sign.php') ?>" class="btn btn-black">Deschideți cont</a>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
