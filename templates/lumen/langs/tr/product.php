<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Platform');
$page_description = SITE_NAME . '’in yapay zekâ içgörüleri, net fiyatlandırma ve sakin bir işlem alanı ile yatırımı nasıl basit tuttuğunu görün.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Platform</p>
      <h1>İhtiyacınız olan her şey. İhtiyacınız olmayan hiçbir şey.</h1>
      <p class="lead">Kripto ve çoklu varlık yatırımı için odaklı bir çalışma alanı — yapay zekâ rehberliğinde, netlik için tasarlandı.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>Arka planda kalan yapay zekâ</h2>
        <p class="lead">
          İçgörüler yardımcı olduklarında görünür — kısa, okunabilir ve uygulanması kolay. Her işlemi her zaman siz onaylarsınız.
        </p>
        <ul class="feature-list">
          <li>Sade dille piyasa özetleri</li>
          <li>Yeni başlayanlar için önerilen izleme listeleri</li>
          <li>Pozisyon boyutlandırmadan önce hatırlatmalar</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Hesap aç</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
