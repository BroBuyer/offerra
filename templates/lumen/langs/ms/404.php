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

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Halaman tidak dijumpai</h1>
      <p class="lead">Pautan itu tidak wujud. Kembali ke laman utama atau buka akaun untuk bermula.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Kembali ke laman utama</a>
        <a href="sign.php" class="btn btn-ghost">Buka akaun</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
