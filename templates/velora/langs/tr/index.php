<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Küresel piyasalar için premium AI işlem motoru');
$page_description = SITE_NAME . ' — kripto, forex ve hisse senetleri için yapılandırılmış AI araçlarıyla küresel piyasalara daha akıllı ve daha sade erişim.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-section" id="signup">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content">
          <h1><?= e(SITE_NAME) ?>: daha akıllı ve daha sade bir şekilde erişin <span class="text-accent">küresel piyasalara</span></h1>

          <p class="hero-desc">
            İşlem yapmaya yeni misiniz? <?= e(SITE_NAME) ?>, yolculuğunuzu şeffaf tutmak için tasarlanmış yapılandırılmış AI destekli araçlar sunar.
            Teknik kaos olmadan kripto, forex ve hisse senetlerini keşfedin.
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">İşlem yapmaya başla — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">Özellikleri keşfet</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              SSL protokolü ile korunur
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Yeni başlayanlar için rehberli yol
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">Hesabınızı oluşturun</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = '3 dakikadan kısa sürer. Kurulum ücreti yok.';
            $form_submit = 'Ücretsiz hesap oluştur';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="stats-bar">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M3 3v18h18"/>
              <path d="m18.7 8-5.1 5.2-2.8-2.7L7 14.3"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">80+</div>
            <div class="stat-label">İşlem yapılabilir varlıklar</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Hızlı</div>
            <div class="stat-label">Hesap kurulumu</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">24/7</div>
            <div class="stat-label">Destek</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Güvenli</div>
            <div class="stat-label">Veri işleme</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">Akıllı çalışma alanı</div>

          <h2 class="section-title">
            Profesyonel grafikler.<br>
            <span class="text-accent">Basit kararlar için tasarlandı.</span>
          </h2>

          <p class="section-subtitle">
            Canlı fiyatları izleyin ve bilişsel yükü ve duygusal işlemi azaltmak için tasarlanmış sade bir arayüzden harekete geçin.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Gerçek zamanlı AI destekli grafikler
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Tek dokunuşla piyasa yürütme sistemi
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">Platform özelliklerini gör</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">Anında yürütme mevcut</h4>
                <p>
                  Bu emri hemen yönlendirmek ve aktif fiyat seviyesini yakalamak için güvenli <?= e(SITE_NAME) ?> terminalinizi etkinleştirin.
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  Güvenli hesap oluştur
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">BTC / USD panosu</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                CANLI
              </span>
            </div>

            <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>

            <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
              +0.15% Bugün
            </div>

            <div class="mockup-chart mockup-chart-placeholder" id="mockupChart">
              <div class="chart-track" id="mockupChartTrack">
                <div class="chart-bar" style="height: 60%;"></div>
                <div class="chart-bar" style="height: 55%;"></div>
                <div class="chart-bar" style="height: 65%;"></div>
                <div class="chart-bar" style="height: 70%;"></div>
                <div class="chart-bar" style="height: 85%;"></div>
                <div class="chart-bar" style="height: 80%;"></div>
                <div class="chart-bar" style="height: 75%;"></div>
              </div>
            </div>

            <div class="mockup-actions">
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">Sat</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">Al</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Platform yetenekleri</div>
        <h2 class="section-title"> ile güvenle işlem yapmak için ihtiyacınız olan her şey <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Güvenlik, hız ve sinirsel piyasa zekası net bir sunumda bir arada</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Banka düzeyinde güvenlik</h3>
          <p>SSL şifreleme, güvenli veri işleme ve tamamen korunan hesap mimarisi.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4"/>
              <path d="M12 8h.01"/>
            </svg>
          </div>
          <h3>AI piyasa analizi</h3>
          <p>Belirgin piyasa kaymalarını yakalamaya odaklanan gerçek zamanlı makine öğrenimi hesaplamaları.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>Düşük gecikmeli akışlar</h3>
          <p>Yoğun dönemlerde hızlı emir işleme odaklı çevik altyapı.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">Gerçek zamanlı varlıklar</div>
          <h2 class="section-title">Küresel metrikler için birleşik <?= e(SITE_NAME) ?> panosu</h2>
          <p class="section-subtitle">
            Varlık hareketlerini gerçek zamanlı takip edin, momentumu izleyin ve kalıpları hızla haritalamak için otomatik AI analizi kullanın.
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>Operasyonel verimlilik:</strong>
              Geleneksel işlem, yüzlerce göstergenin manuel izlenmesi demektir.
              <?= e(SITE_NAME) ?> algoritmaları her milisaniyede binlerce fiyat değişimini işler,
              hareketleri erken yakalamanız için net matematiksel modeller üretir.
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">Piyasalara eriş</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>Varlık</span>
              <span style="text-align:right; padding-right:16px;">Fiyat</span>
              <span style="text-align:right;">24 saat değişim</span>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">BTC</span>
                <span class="asset-fullname">Bitcoin</span>
              </div>
              <div class="asset-price" id="t-btc-p">$67,420.50</div>
              <div class="asset-change trend-up" id="t-btc-c">+0.15%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">ETH</span>
                <span class="asset-fullname">Ethereum</span>
              </div>
              <div class="asset-price" id="t-eth-p">$3,450.25</div>
              <div class="asset-change trend-up" id="t-eth-c">+2.10%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">SOL</span>
                <span class="asset-fullname">Solana</span>
              </div>
              <div class="asset-price" id="t-sol-p">$184.80</div>
              <div class="asset-change trend-down" id="t-sol-c">-0.65%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">BNB</span>
                <span class="asset-fullname">BNB Chain</span>
              </div>
              <div class="asset-price" id="t-bnb-p">$582.40</div>
              <div class="asset-change trend-up" id="t-bnb-c">+1.05%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">XRP</span>
                <span class="asset-fullname">Ripple</span>
              </div>
              <div class="asset-price" id="t-xrp-p">$0.5920</div>
              <div class="asset-change trend-down" id="t-xrp-c">-1.42%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">ADA</span>
                <span class="asset-fullname">Cardano</span>
              </div>
              <div class="asset-price" id="t-ada-p">$0.4850</div>
              <div class="asset-change trend-up" id="t-ada-c">+0.88%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">DOT</span>
                <span class="asset-fullname">Polkadot</span>
              </div>
              <div class="asset-price" id="t-dot-p">$6.75</div>
              <div class="asset-change trend-down" id="t-dot-c">-0.12%</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="onboarding">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Katılım süreci</div>
        <h2 class="section-title"><?= e(SITE_NAME) ?> ile başlamak stressiz</h2>
        <p class="section-subtitle">Kripto deneyiminiz yok mu? Otomatik rehberimiz sizi her adımda yönlendirir.</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Güvenli kayıt</h3>
            <p>Güçlü şifreli form sistemimiz aracılığıyla temel iletişim bilgilerinizi girin.</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>AI rehberli kurulum</h3>
            <p>Platform, tercihlerinize göre uyarlanmış arayüz seçenekleri sunar.</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Güvenli fonlama</h3>
            <p>Standart, güvenilir ödeme kanallarıyla işlem aralığınızı etkinleştirin.</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>Sinyalleri devreye al</h3>
            <p>Canlı sinirsel veri akışlarıyla küresel piyasalarla etkileşime başlayın.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="mobile-app">
    <div class="container">
      <div class="app-promo-grid">
        <div class="app-promo-visual">
          <div class="app-glow"></div>
          <?php
          $as_phone = true;
          require __DIR__ . '/includes/platform-image.php';
          ?>
        </div>

        <div>
          <div class="section-label">Mobil erişim</div>
          <h2 class="section-title">Portföyünüz cebinizde</h2>
          <p class="section-subtitle">
            Tam <?= e(SITE_NAME) ?> motoru, hızlı ve yerel hissi veren mobil deneyime sıkıştırıldı.
            Varlıkları takip edin, işlem yapın ve AI sinyallerini her yerden izleyin.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Kritik fiyat hareketleri için push uyarıları
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Şifreli yerel depolama ile biyometrik giriş
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Dokunmatik için optimize edilmiş tam grafik paketi
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">Uygulama deneyimini edinin</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Dengeli çerçeve</div>
        <h2 class="section-title">Şeffaf operasyon parametreleri</h2>
        <p class="section-subtitle">
          Mutlak dürüstlüğe inanıyoruz. Sistemimizi ayıran özellikler — ve sektör sınırlarının genelde nerede olduğu — burada.
        </p>
      </div>

      <div class="comparison-grid">
        <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>Temel avantajlar</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Kurumsal yürütme hızına göre ayarlanmış minimalist pano.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Varlıklar genelinde 7/24 çalışan sinirsel analitik.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Gizli işlem marjları veya sürpriz yönetim ücretleri yok.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Doğrudan SSL kriptografik hesap mimarisi.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Günler değil, dakikalar süren rehberli entegrasyon.
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">Diğer platformlar</div>
          <h3>Yaygın sektör sınırları</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Kararları yavaşlatan kalabalık, reklam ağırlıklı panolar.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Sürekli canlı analiz yerine statik gün sonu raporları.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Gizli spreadler, çekim ücretleri ve belirsiz fiyatlandırma.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Düzensiz veri koruması olan paylaşımlı eski altyapı.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Günler sürebilen yavaş, evrak yoğun doğrulama.
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        Karşılaştırma perakende işlemdeki tipik kalıpları yansıtır ve örnektir; rakip teklifleri değişir.
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">Platformun temel özellikleri bir bakışta</h2>
        <p class="section-subtitle">Hesap erişim çerçevenize entegre edilmiş işlevsel parametreleri inceleyin.</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>Yetenek</th>
              <th>İşlevsel detay</th>
              <th class="cap-table-center">Dahil</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>AI işlem çerçevesi</strong></td>
              <td>Dinamik makro yapısal hesaplamalar sağlayan algoritmik işleme.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Dahil">✓</span></td>
            </tr>
            <tr>
              <td><strong>Toplanmış akışlar</strong></td>
              <td>Modern küresel endeksler ve tokenler için gerçek zamanlı birleştirilmiş grafikler.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Dahil">✓</span></td>
            </tr>
            <tr>
              <td><strong>Platformlar arası kararlılık</strong></td>
              <td>Mobil, masaüstü ve tabletlerde tam duyarlı görüntüleme.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Dahil">✓</span></td>
            </tr>
            <tr>
              <td><strong>Çoklu varlık kapsamı</strong></td>
              <td>Tek hesap katmanından kripto, forex ve hisse endekslerine birleşik erişim.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Dahil">✓</span></td>
            </tr>
            <tr>
              <td><strong>Otomatik risk uyarıları</strong></td>
              <td>Pozisyonlara yansımadan önce olağandışı volatiliteyi işaretleyen yapılandırılabilir bildirimler.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Dahil">✓</span></td>
            </tr>
            <tr>
              <td><strong>Şifreli veri kasası</strong></td>
              <td>Kişisel ve hesap verileri katmanlı kriptografik erişim kontrollerinin arkasında izole edilir.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Dahil">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>7/24 insan desteği</strong></td>
              <td>Kurulum sorularını hemen yanıtlamaya hazır canlı teknik operatörler.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Dahil">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">Yatırımlar</div>
      <h2 class="section-title">Hesabınızı bildiğiniz yöntemlerle fonlayın</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        Kartlar, e-cüzdanlar ve banka transferleri — hepsi 256 bit SSL şifreleme ile korunur.
      </p>

      <ul class="payment-icons-list" role="list" aria-label="Kabul edilen yatırım ve fonlama yöntemleri">
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <rect x="2" y="5" width="20" height="14" rx="2.5"/>
            <path d="M2 10h20"/>
          </svg>
          <span>Visa</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <circle cx="9" cy="12" r="6"/>
            <circle cx="15" cy="12" r="6"/>
          </svg>
          <span>Mastercard</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M6 3h9a5 5 0 0 1 0 10H9l-1 8H4z"/>
          </svg>
          <span>PayPal</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2a5 5 0 0 0-5 5v3H5a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-2V7a5 5 0 0 0-5-5z"/>
          </svg>
          <span>Apple Pay</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 8v8M8 12h8"/>
          </svg>
          <span>Google Pay</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <rect x="3" y="10" width="18" height="9" rx="1"/>
            <path d="M3 10 12 4l9 6"/>
            <path d="M7 10v9M12 10v9M17 10v9"/>
          </svg>
          <span>Banka transferi</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>SSL korumalı</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Güvenilir altyapı</div>
        <h2 class="section-title">Sektör düzeyinde ortaklarla inşa edildi</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Kullanıcı geri bildirimi</div>
        <h2 class="section-title"> hakkında yatırımcılar ne diyor?<?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Küresel çoklu piyasa topluluğumuzdan dürüst geri bildirimler.</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 üzerinden 5 yıldız">★★★★★</div>
            <p class="review-text">
              Yeni başlayan biri olarak kripto beni korkutuyordu. <?= e(SITE_NAME) ?> panoyu o kadar sezgisel yaptı ki dakikalar içinde kendimi güvende hissettim. AI analizi kristal netliğinde.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>Doğrulanmış perakende yatırımcı · UK</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 üzerinden 5 yıldız">★★★★★</div>
            <p class="review-text">
              Sade arayüz bana saatler kazandırıyor. Piyasa gürültüsünü ana trendlere filtreleyen AI, günlük pozisyonlarımı yönetme şeklimi değiştirdi.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>Kripto varlık analisti · Kanada</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 üzerinden 5 yıldız">★★★★★</div>
            <p class="review-text">
              Düşük gecikmeli yürütme ve akıllı uyarılar, birden fazla program açmadan hedefleri anında ayarlamamı sağlıyor.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>Özel portföy yöneticisi · Almanya</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 üzerinden 5 yıldız">★★★★★</div>
            <p class="review-text">
              Doğrulamayı yapılandırırken destek iki dakikada yanıt verdi. Olağanüstü kurumsal düzeyde hizmet çerçevesi.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>Algoritmik yatırımcı · Fransa</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="seo-content">
        <h2 style="font-size: 38px; margin-bottom: 28px; font-weight: 800;">
          <?= e(SITE_NAME) ?>: yatırımcıları kurumsal AI mimarisiyle güçlendirir
        </h2>

        <p class="seo-intro">
          Modern varlık etkileşimi mutlak netlik gerektirir. Veri çerçeveleri promosyon afişleriyle dolu olduğunda
          veya ağır arayüz katmanları varken kullanıcı performansı düşer. <?= e(SITE_NAME) ?>, sistemik karmaşıklığı
          uzun vadeli stratejik yürütmeye optimize edilmiş zarif, duyarlı bir çekirdek ortam dağıtarak çözer. Her platform modülü,
          katılımdan canlı yürütmeye kadar aynı ilkeye dayanır: gürültüyü kaldırın ki altta yatan veri
          kendi başına konuşabilsin — deneyimli katılımcıların beklediği derinlikten ödün vermeden.
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>Gelişmiş <span>kripto işlem varlıkları</span></h3>
            <p>
              Blockchain likiditesi hızla gelişir; düşük gecikmeli altyapı kritik hale gelir.
              <?= e(SITE_NAME) ?>, özel düğümleri büyük dijital varlık platformlarına bağlar ve canlı fiyat geri bildirim döngüleri sağlar.
              Net görsel metrikler, kaotik çok zincirli yapıları düzenli, okunabilir veri kanallarına dönüştürür.
            </p>
            <p>
              Ham fiyat akışlarının ötesinde platform, hacim kaymalarını ve likidite derinliğini bağlama oturtur; ani sıçramalar
              yalnızca reaktif sinyaller değil, daha kolay yorumlanabilir hale gelir. Bu tutarlılık, parçalı araçların netliğe en çok ihtiyaç duyulduğu
              volatil oturumlarda en önemlidir — tam o anda kararları yavaşlatırlar.
            </p>
          </div>

          <div class="seo-block">
            <h3>Derin <span>sinirsel piyasa analizi</span></h3>
            <p>
              Otomatik algoritmalar, forex ve uluslararası emtialarda yapısal kaymaları hesaplamak için gelen piyasa verilerini analiz eder.
              <?= e(SITE_NAME) ?>, karmaşık hesaplamaları bağımsız yargıyı destekleyen net veri trendlerine damıtır, yerine geçmez.
            </p>
            <p>
              Modeller sabit bir program yerine sürekli çalıştığından momentum değişiklikleri gecikmeli özet yerine
              oldukları anda görünür. Sonuç, bağımsız yargıyı destekleyen ve nihai kararı
              kullanıcının elinde bırakan bir araştırma katmanıdır.
            </p>
          </div>

          <div class="seo-block">
            <h3>Sorunsuz <span>hesap kurulumu</span></h3>
            <p>
              Uyumluluk karmaşık olmak zorunda değildir. Yapılandırılmış kayıt hattımız özel ayarları korur
              başlangıçtan terminal erişimine kadar üç dakikanın altında sürmesi tasarlanmış güvenli doğrulama süreçleriyle.
            </p>
            <p>
              Yolculuktaki her alan neden sorulduğunu açıklar; yeni başlayanlar bir
              doğrulama adımının amacını tahmin etmek zorunda kalmaz. Gönderildikten sonra şifreli kimlik kontrolleri arka planda çalışırken
              panonun geri kalanı tamamen gezilebilir kalır.
            </p>
          </div>

          <div class="seo-block">
            <h3>Kurumsal kalitede <span>risk kontrolleri</span></h3>
            <p>
              Pozisyon boyutu, maruziyet limitleri ve otomatik volatilite göstergeleri, tarihsel olarak profesyonel masa araçlarını
              basit anahtarlara indirger — böylece yeni katılımcılar deneyimli yatırımcılardan günlük disiplini devralır.
            </p>
            <p>
              Uyarılar varlığa göre yapılandırılabilir; dikkat yalnızca gerçekten hak eden piyasalara çekilir.
              Bu odaklı yaklaşım, insanların bildirimleri görmezden gelmesine yol açan uyarı yorgunluğunu önlemeye yardımcı olur
              daha az seçici platformlarda.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="faq">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Destek merkezi</div>
        <h2 class="section-title">Sık sorulan sorular</h2>
        <p class="section-subtitle">Kayıt ve platform erişimi hakkında anında prosedürel yanıtlar.</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span> ile nasıl başlarım<?= e(SITE_NAME) ?>?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              Yukarıdaki kayıt formunu doldurun, güvenli adım adım katılım sürecimizi izleyin
              ve hesap ayarlarınızı yapılandırılmış ödeme işleme sistemimizle etkinleştirin.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Gelişmiş kripto deneyimine ihtiyacım var mı?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Hayır. <?= e(SITE_NAME) ?>, yeni başlayan pano modu, otomatik analitik açıklamalar
              ve yeni yatırımcıların güvenle ilerlemesine yardımcı olan sadeleştirilmiş çalışma alanları sunar.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>İşlem yapmak için minimum gereksinim nedir?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Standart temel aktivasyon <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Operasyonel işlem sermayesi olarak hizmet eder ve manuel kontrolünüzde kalır.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Gizli operasyonel ücretler var mı?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Hayır. <?= e(SITE_NAME) ?> mutlak fiyat şeffaflığıyla çalışır.
              Beklenmedik platform erişim marjları veya gizli çekim hesaplamaları uygulamayız.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>AI zeka bileşeni nasıl çalışır?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Sinirsel sistemler, birden fazla piyasa katmanında derin istatistiksel volatilite işaretlerini değerlendirir
              ve ham telemetriyi daha kolay değerlendirme için sadeleştirilmiş trend çizgilerine dönüştürür.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Kişisel verilerim tamamen korunuyor mu?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Evet. Her hesap hattı, özel veri aralıklarını tamamen izole etmek için güvenli SSL koruması ve sağlam kriptografik protokollerle maskelenir.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="final-cta" style="background-color:#0F172A;">
    <div class="container">
      <div class="final-cta-grid">
        <div class="final-cta-content">
          <h2> netliğini deneyimlemeye hazır mısınız<?= e(SITE_NAME) ?>?</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            Hızlı operasyonlar, veri koruması ve şeffaf erişim için optimize edilmiş modern bir sisteme katılın.
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">Hesabınızı oluşturun</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = 'Ücretsiz hesap oluştur';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
