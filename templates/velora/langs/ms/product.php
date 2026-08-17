<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Tentang platform');
$page_description = 'Lihat bagaimana ' . SITE_NAME . ' mengekalkan perdagangan yang jelas dengan cerapan AI, suapan kependaman rendah dan ruang kerja yang tenang.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Tentang</p>
      <h1>Seni bina AI institusi, dijadikan mudah didekati</h1>
      <p class="lead">Ruang kerja tertumpu untuk perdagangan kripto dan berbilang aset — berpandu AI, direka untuk kejelasan.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>AI yang kekal berguna</h2>
        <p class="lead">
          Cerapan muncul apabila ia membantu — ringkas, mudah dibaca dan mudah ditindaklanjuti.
          Anda sentiasa mengesahkan setiap dagangan sendiri.
        </p>
        <ul class="feature-bullets">
          <li>Ringkasan pasaran dalam bahasa mudah</li>
          <li>Senarai pantau cadangan untuk pemula</li>
          <li>Peringatan sebelum anda menentukan saiz kedudukan</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Buka akaun</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
