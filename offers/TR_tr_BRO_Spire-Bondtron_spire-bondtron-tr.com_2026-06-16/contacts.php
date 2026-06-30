<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('İletişim');
$page_description = SITE_NAME . ' destek ekibi veya ekibimizle iletişime geçin. 7/24 hizmetinizdeyiz.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">İletişim</p>
      <h1>Yardımcı olmak için buradayız</h1>
      <p class="lead">Hesap, işlem ve teknik konularda 7/24 profesyonel destek.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-posta desteği</h3>
          <p style="margin-bottom: 1rem;">Genel talepler ve hesap desteği için:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Yanıt süreleri</h3>
          <p>Taleplerin çoğu birkaç saat içinde yanıtlanır. İşlemle ilgili acil durumlar önceliklidir.</p>
        </article>
        <article class="feature-card">
          <h3>Başlamaya hazır mısınız?</h3>
          <p style="margin-bottom: 1rem;">Birkaç dakikada hesap açın — arama yapmanıza gerek yok.</p>
          <a href="sign.php" class="btn btn-primary">Hesap oluşturun</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
