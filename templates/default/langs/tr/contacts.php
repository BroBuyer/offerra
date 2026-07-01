<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Iletisim');
$page_description = SITE_NAME . ' destek ekibi veya islem uzmanlarimizla iletisime gecin. 7/24 yaninizdayiz.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Iletisim</p>
      <h1>Size yardim etmek icin buradayiz</h1>
      <p class="lead">Hesap, islem ve teknik konularda 7/24 profesyonel destek.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-posta destegi</h3>
          <p style="margin-bottom: 1rem;">Genel sorular ve hesap yardimi icin:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Yanit suresi</h3>
          <p>Taleplerin cogu birkac saat icinde yanitlanir. Acil islem taleplerine oncelik verilir.</p>
        </article>
        <article class="feature-card">
          <h3>Baslamaya hazir misiniz?</h3>
          <p style="margin-bottom: 1rem;">Dakikalar icinde hesap acin — telefon gorusmesi gerekmez.</p>
          <a href="sign.php" class="btn btn-primary">Hesap olustur</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
