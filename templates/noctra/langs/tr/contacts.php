<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('İletişim');
$page_description = SITE_NAME . ' desteğiyle iletişim — hesap, işlem ve teknik yardım 7/24.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">İletişim</p>
      <h1>Destekle konuşun</h1>
      <p class="lead">Hesap, işlem ve teknik sorular — günün her saati.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>E-posta desteği</h3>
          <p style="margin-bottom: 1rem;">Hesap ve genel talepler için:</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Yanıt süresi</h3>
          <p>Çoğu talep birkaç saat içinde çözülür. Canlı işlem sorunlarına öncelik verilir.</p>
        </article>
        <article class="feature-card">
          <h3>Kendiniz mi ilerlemek istersiniz?</h3>
          <p style="margin-bottom: 1rem;">Dakikalar içinde hesap açın — arama gerekmez.</p>
          <a href="sign.php" class="btn btn-primary">Hesap oluştur</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
