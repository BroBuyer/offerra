<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ürün');
$page_description = SITE_NAME . ' işlem araçlarını keşfedin — gerçek zamanlı analiz, yapay zeka sinyalleri, çoklu piyasa erişimi ve otomatik stratejiler.';
$page_canonical = page_url('product.php');
$active_page = 'product';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Ana Sayfa', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Ürün', 'item' => page_url('product.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Ürün</p>
      <h1>Yatırımcılar için tasarlanmış dijital analiz</h1>
      <p class="lead">Tek platform. Her piyasa. Hızınıza ayak uyduran araçlar.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Gerçek zamanlı grafikler</h3>
          <p>Canlı fiyat akışları, gelişmiş göstergeler ve desteklenen tüm varlıklarda piyasa derinliği.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Yapay zeka sinyal motoru</h3>
          <p>Makine öğrenimi modelleri, net giriş ve çıkış bağlamıyla yüksek olasılıklı kurulumları vurgular.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Otomasyon paketi</h3>
          <p>Özelleştirilmiş risk parametreleriyle botlar yapılandırın — ayarlayıp izleyin veya paralelde manuel işlem yapın.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/><path d="M9 12l2 2 4-4"/></svg>
          </div>
          <h3>Risk kontrolleri</h3>
          <p>Her iş akışına entegre stop-loss, take-profit ve pozisyon boyutlandırma araçları.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg>
          </div>
          <h3>Portföy takipçisi</h3>
          <p>Kripto ve geleneksel piyasalar arasında pozisyonlar, K/Z ve dağılımın birleşik görünümü.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
          </div>
          <h3>Öğrenme merkezi</h3>
          <p>Yeni başlayanlar ve orta düzey yatırımcılar için rehberli eğitimler ve piyasa açıklamaları.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 3rem;">
        <a href="sign.php" class="btn btn-primary"><?= e(SITE_NAME) ?>'ı ücretsiz deneyin</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
