<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Page not found');
$page_description = 'The page you requested could not be found on ' . SITE_NAME . '.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="notfound-page">
    <div class="container-base" style="max-width: 560px;">
      <h1>Page not found</h1>
      <p>That link doesn’t exist. Head back home or open an account to get started.</p>
      <div class="flex items-center justify-center gap-4" style="margin-top: 1.5rem;">
        <a href="<?= page_url() ?>" class="btn btn-black">Go home</a>
        <a href="<?= page_url('sign.php') ?>" class="btn btn-black">Open account</a>
      </div>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
