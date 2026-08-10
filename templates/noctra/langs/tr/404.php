<?php
declare(strict_types=1);

http_response_code(404);

require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Sayfa bulunamadı');
$page_description = 'İstediğiniz sayfa kullanılamıyor. Devam etmek için ' . SITE_NAME . ' ana sayfasına dönün.';
$page_canonical = page_url('404.php');
$active_page = '404';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="not-found">
    <div class="container">
      <div class="not-found-code" aria-hidden="true">404</div>
      <p class="eyebrow" style="justify-content: center;">Sayfa bulunamadı</p>
      <h1>Bu sayfa mevcut değil</h1>
      <p class="lead">
        Bağlantı eski veya yanlış yazılmış olabilir. Devam etmek için ana sayfaya dönün.
      </p>
      <div style="display:flex;gap:0.75rem;justify-content:center;flex-wrap:wrap;">
        <a href="<?= page_url() ?>" class="btn btn-primary">Ana sayfaya dön</a>
        <a href="contacts.php" class="btn btn-outline">Destekle iletişim</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
