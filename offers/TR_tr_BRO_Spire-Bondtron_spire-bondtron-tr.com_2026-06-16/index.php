<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('İşlem platformu');
$page_description = 'Kripto, forex ve küresel pazarlarla ' . SITE_NAME . ' üzerinde işlem yapın. Gerçek zamanlı analiz, yapay zeka destekli sinyaller ve hız ile netlik için tasarlanmış bir platform.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <!-- Hero -->
  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-content">
        <p class="eyebrow">Yapay zeka destekli işlem platformu</p>
        <h1>Daha akıllı işlem yapın.<br><span class="text-accent">Daha hızlı hareket edin.</span></h1>
        <p class="lead">
          Kripto ve çoklu piyasa işlemleri için yeni bir standart. Gelişmiş güvenlik, şeffaf komisyonlar,
          yapay zeka destekli içgörüler ve sade bir arayüz.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL korumalı
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            7/24 destek
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Hızlı işlem
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">İşlem yapmaya başlayın — min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Hesabınızı 2 dakikada açın';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Platform istatistikleri">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Mevcut para birimi</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Doğrulanmış kullanıcı</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">İşlem hacmi</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Desteklenen ülke</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="İşlem platformu önizlemesi">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">İşlem platformu</p>
        <h2>Profesyonel grafikler.<br>Mobil için optimize edildi.</h2>
        <p class="lead">
          Modern bir borsa gibi sade arayüz — gerçek zamanlı BTC/USDT verileri, portföy takibi
          ve tek dokunuşla işlem. İlk girişten itibaren güvenle hareket etmeniz için tasarlandı.
        </p>
        <ul class="platform-points">
          <li>Gerçek zamanlı mum grafikleri</li>
          <li>Portföy ve K/Z bir bakışta</li>
          <li>Güvenli hesap paneli</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Platformu deneyin</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Neden <?= e(SITE_NAME) ?></p>
        <h2>Güvenle işlem yapmak için ihtiyacınız olan her şey</h2>
        <p class="lead">Güvenlik, hız ve zeka — modern yatırımcılar için tasarlanmış sade bir platformda bir araya geliyor.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Banka düzeyinde güvenlik</h3>
          <p>SSL şifreleme, 2FA ve güvenli fon yönetimi verilerinizi ve sermayenizi her adımda korur.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Yapay zeka piyasa sinyalleri</h3>
          <p>Gerçek zamanlı doğru içgörüler; fırsatları belirlemenize ve daha hızlı, bilinçli kararlar almanıza yardımcı olur.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Otomatik işlem</h3>
          <p>Yapay zeka destekli botlar stratejileri verimli şekilde 7/24 yürütür; kontrol her zaman sizde kalır.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Çoklu piyasa erişimi</h3>
          <p>Kripto, forex, hisse senetleri ve emtialarda tek arayüzden işlem yapın.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Düşük gecikmeli işlem</h3>
          <p>Yoğun anlarda bile istikrarlı emir yürütme için optimize edilmiş altyapı.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Sade arayüz</h3>
          <p>Dikkat dağıtmayan minimal tasarım: daha az gezinme, daha fazla strateji odağı.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Canlı piyasalar</p>
        <h2>Bitcoin, Ethereum ve daha fazlasında işlem yapın</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Gerçek zamanlı fiyatlar, gelişmiş göstergeler ve ilgilendiğiniz piyasalara profesyonel bir bakış.
        </p>
        <a href="sign.php" class="btn btn-primary">Piyasalara erişin</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Gerçek zamanlı piyasa fiyatları">
        <div class="exchange-panel-header">
          <span>Piyasalar</span>
          <span class="live-dot">Canlı</span>
        </div>
        <div class="ticker-list" data-ticker-list>
          <div class="ticker-row">
            <div><div class="ticker-symbol">BTC</div><div class="ticker-pair">BTC/USD</div></div>
            <div class="ticker-price" data-price="btc">—</div>
            <div class="ticker-change up" data-change="btc">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">ETH</div><div class="ticker-pair">ETH/USD</div></div>
            <div class="ticker-price" data-price="eth">—</div>
            <div class="ticker-change up" data-change="eth">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">SOL</div><div class="ticker-pair">SOL/USD</div></div>
            <div class="ticker-price" data-price="sol">—</div>
            <div class="ticker-change down" data-change="sol">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">XRP</div><div class="ticker-pair">XRP/USD</div></div>
            <div class="ticker-price" data-price="xrp">—</div>
            <div class="ticker-change up" data-change="xrp">—</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- How it works -->
  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Nasıl başlanır</p>
        <h2>Kayıttan ilk işleme birkaç dakikada</h2>
        <p class="lead">Rehberli bir süreç — karmaşıklık yok, belirsizlik yok.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Hesabınızı oluşturun</h3>
          <p>Bilgilerinizle kayıt olun ve platforma anında güvenli erişim kazanın.</p>
        </article>
        <article class="step-card">
          <h3>E-postanızı doğrulayın</h3>
          <p>Platforma tam erişim için e-posta adresinizi onaylayın.</p>
        </article>
        <article class="step-card">
          <h3>Hesabınızı fonlayın</h3>
          <p>Havale, kart veya e-cüzdan ile minimum <?= MIN_DEPOSIT ?> <?= CURRENCY ?> yatırın.</p>
        </article>
        <article class="step-card">
          <h3>Stratejinizi belirleyin</h3>
          <p>Risk seviyesi ve tercihlerinizi tanımlayın — manuel veya yapay zeka destekli otomasyon.</p>
        </article>
        <article class="step-card">
          <h3>İşlem yapmaya başlayın</h3>
          <p>Canlı grafikler, araçlar ve ihtiyaç duyduğunuzda destekle piyasaya girin.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Hesabı şimdi açın</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Yatırımlar</p>
      <h2 style="margin-bottom: 0.75rem;">Bildiğiniz yöntemlerle yatırım yapın</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kartlar, e-cüzdanlar ve havale — SSL şifreleme ile korunur.</p>
      <?php
      $payment_context = 'yatırım ve hesap fonlama';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Güvenilir altyapı</p>
        <h2>Sektör lideri ortaklarla inşa edildi</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Yorumlar</p>
        <h2>Yatırımcılar ne diyor</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Kayıt çok hızlıydı, komisyonlar şeffaf ve destek gerçekten yanıt veriyor. Akıcı ve güvenilir bir deneyim — kullanmaya devam ettiğim bir platform.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Bağımsız yatırımcı</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Sonunda kripto işlemini burada denedim — pişman değilim. Hızlı kurulum ve net açıklamalar. Özellikle yeni başlayanlar için iyi bir seçim.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Kripto meraklısı</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Stabil ve güvenilir. Hesap açmak kolay, şartlar net ve ekip yetkin. Şaşırtıcı derecede rahat bir işlem deneyimi.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Dijital varlık operatörü</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">İşlem yapmak artık daha karmaşık hissettirmiyor. Basit kayıt, net komisyonlar ve gerektiğinde destek. Yeni başlayan biri olarak gerçekten fark yaratıyor.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Bireysel yatırımcı</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">SSS</p>
        <h2>Sık sorulan sorular</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Nasıl başlayabilirim?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Temel bilgilerinizle hesap oluşturun, kısa bir doğrulama adımını tamamlayın ve minimum <?= MIN_DEPOSIT ?> <?= CURRENCY ?> yatırın. Canlı grafikler, işlem araçları ve rehberli başlangıç dahil platforma tam erişim kazanırsınız.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Param ve verilerim güvende mi?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              SSL şifreleme, iki faktörlü kimlik doğrulama ve güvenilir sağlayıcılar aracılığıyla güvenli süreçler kullanıyoruz. Kişisel verileriniz her düzeyde katı güvenlik politikalarıyla yönetilir.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kârlarımı ne zaman çekebilirim?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Hesap alanınızdan istediğiniz zaman çekim talep edebilirsiniz. İşlem genellikle 1–3 iş günü sürer. Ücretler ve süreler her zaman önceden gösterilir — sürpriz yok.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            İşlem deneyimi gerekli mi?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kesinlikle hayır. Rehberli başlangıç, basit eğitimler ve yapay zeka destekli araçlar kendi hızınızda öğrenmenize yardımcı olur. İster yeni başlayan ister deneyimli olun, 7/24 destek mevcuttur.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hangi piyasalarda işlem yapabilirim?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kripto paralar, forex, küresel hisse senetleri ve emtialara tek arayüzden erişin. Gerçek zamanlı veriler, entegre analiz ve manuel veya otomatik strateji desteği.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Platform specs -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Platform</p>
        <h2>Temel özellikler bir bakışta</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Yapay zeka işlem motoru</div>
          <div class="specs-value">Makine öğrenimine dayalı gelişmiş piyasa analizi</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Yatırım yöntemleri</div>
          <div class="specs-value">Kart, havale, PayPal, e-cüzdan</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Cihaz erişimi</div>
          <div class="specs-value">Web, tablet ve mobil — tamamen duyarlı</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Sinyal doğruluğu</div>
          <div class="specs-value">Desteklenen yapay zeka stratejilerinde %85'e kadar</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Piyasalar</div>
          <div class="specs-value">Kripto, forex, hisse senetleri, emtialar</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Başlangıç</div>
          <div class="specs-value">Rehberli doğrulama ile hızlı kurulum</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Destek</div>
          <div class="specs-value">Profesyonel 7/24 destek — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Bize ulaşın</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Güvenilir</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Yeni başlayanlar için tasarlanmış bir platform</h3>
          <p style="margin-top: 0.5rem; color: var(--text-muted); max-width: 42rem;">
            Rehberli başlangıç, özel destek ve daha güvenle işlem yapmanız için net araçlar.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Netlik için tasarlanmış bir platformda işlem yapmaya hazır mısınız?</h2>
        <p class="lead">Dijital varlıkları güvenle alan, satan ve yöneten bireysel yatırımcılara ve işletmelere katılın.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Ücretsiz hesabınızı oluşturun';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
