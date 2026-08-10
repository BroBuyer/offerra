<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Sayfa bulunamadı');
$page_description = 'İstediğiniz sayfa ' . SITE_NAME . ' üzerinde bulunamadı.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <h1>Sayfa bulunamadı</h1>
      <p class="lead">Bu bağlantı mevcut değil. Ana sayfaya dönün veya başlamak için hesap açın.</p>
      <div class="hero-actions" style="justify-content: center;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Ana sayfaya git</a>
        <a href="sign.php" class="btn btn-ghost">Hesap aç</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
