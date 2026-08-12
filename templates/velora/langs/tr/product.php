<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Platform hakkında');
$page_description = ' ile işlemin nasıl net kaldığını görün — ' . SITE_NAME . 'AI içgörüleri, düşük gecikmeli akışlar ve sakin bir çalışma alanı sayesinde.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Hakkımızda</p>
      <h1>Kurumsal AI mimarisi, erişilebilir hale getirildi</h1>
      <p class="lead">Kripto ve çoklu varlık işlemi için odaklanmış bir çalışma alanı — AI rehberliğinde, netlik için tasarlandı.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>Faydalı kalan AI</h2>
        <p class="lead">
          İçgörüler yardımcı olduklarında görünür — kısa, okunabilir ve harekete geçmesi kolay.
          Her işlemi her zaman kendiniz onaylarsınız.
        </p>
        <ul class="feature-bullets">
          <li>Sade dilde piyasa özetleri</li>
          <li>Yeni başlayanlar için önerilen izleme listeleri</li>
          <li>Pozisyon boyutlandırmadan önce hatırlatmalar</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Hesap aç</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
