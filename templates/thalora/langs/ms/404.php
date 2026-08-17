<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Halaman tidak dijumpai');
$page_description = 'Halaman yang anda minta tidak dijumpai di ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="notfound-page">
    <div class="container-base" style="max-width: 560px;">
      <h1>Halaman tidak dijumpai</h1>
      <p>Pautan itu tidak wujud. Kembali ke laman utama atau buka akaun untuk bermula.</p>
      <div class="flex items-center justify-center gap-4" style="margin-top: 1.5rem;">
        <a href="<?= page_url() ?>" class="btn btn-black">Kembali ke laman utama</a>
        <a href="<?= page_url('sign.php') ?>" class="btn btn-black">Buka akaun</a>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
