<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Platform');
$page_description = 'Lihat bagaimana ' . SITE_NAME . ' mengekalkan pelaburan yang mudah dengan insight AI, harga yang jelas dan ruang kerja dagangan yang tenang.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Platform</p>
      <h1>Semua yang anda perlukan. Tiada yang tidak perlu.</h1>
      <p class="lead">Ruang kerja tertumpu untuk pelaburan kripto dan berbilang aset — berpandukan AI, direka untuk kejelasan.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>AI yang kekal di latar belakang</h2>
        <p class="lead">
          Insight muncul apabila ia membantu — pendek, mudah dibaca dan mudah ditindak. Anda sentiasa sahkan setiap dagangan sendiri.
        </p>
        <ul class="feature-list">
          <li>Ringkasan pasaran dalam bahasa mudah</li>
          <li>Senarai pantau cadangan untuk pemula</li>
          <li>Peringatan sebelum anda saizkan posisi</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Buka akaun</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
