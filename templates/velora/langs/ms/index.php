<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Enjin Perdagangan AI Premium untuk Pasaran Global');
$page_description = SITE_NAME . ' — cara yang lebih pintar dan kemas untuk mengakses pasaran global dengan alat AI berstruktur untuk kripto, forex dan ekuiti.';
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
          <h1><?= e(SITE_NAME) ?>: cara yang lebih pintar dan kemas untuk mengakses <span class="text-accent">pasaran global</span></h1>

          <p class="hero-desc">
            Baharu dalam perdagangan? <?= e(SITE_NAME) ?> menawarkan alat berbantu AI yang berstruktur, direka untuk mengekalkan ketelusan perjalanan anda.
            Terokai kripto, forex dan ekuiti tanpa kekacauan teknikal.
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">Mula berdagang — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">Terokai ciri</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              Dilindungi oleh protokol SSL
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Laluan berpandu untuk pemula
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">Cipta akaun anda</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = 'Ambil masa kurang daripada 3 minit. Tiada yuran persediaan.';
            $form_submit = 'Cipta akaun percuma';
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
            <div class="stat-label">Aset boleh didagangkan</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Pantas</div>
            <div class="stat-label">Persediaan akaun</div>
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
            <div class="stat-label">Sokongan</div>
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
            <div class="stat-value">Selamat</div>
            <div class="stat-label">Pemprosesan data</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">Ruang kerja pintar</div>

          <h2 class="section-title">
            Carta profesional.<br>
            <span class="text-accent">Dibina untuk keputusan yang mudah.</span>
          </h2>

          <p class="section-subtitle">
            Tonton harga langsung dan bertindak daripada antara muka yang kemas, direka untuk mengurangkan beban kognitif dan perdagangan emosi.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Carta diperkaya AI secara masa nyata
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Sistem pelaksanaan pasaran dengan satu ketikan
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">Lihat ciri platform</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">Pelaksanaan segera tersedia</h4>
                <p>
                  Untuk merutekan pesanan ini segera dan meraih tahap harga aktif, aktifkan terminal selamat <?= e(SITE_NAME) ?> anda.
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  Cipta akaun selamat
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">Papan pemuka BTC / USD</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                LIVE
              </span>
            </div>

            <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>

            <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
              +0.15% Hari ini
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
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">Jual</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">Beli</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Keupayaan platform</div>
        <h2 class="section-title">Segala yang anda perlukan untuk berdagang dengan yakin di <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Keselamatan, kelajuan dan kecerdasan pasaran neural digabungkan dalam persembahan yang jelas</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Keselamatan gred bank</h3>
          <p>Penyulitan SSL, pemprosesan data yang selamat, dan seni bina akaun yang dilindungi sepenuhnya.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4"/>
              <path d="M12 8h.01"/>
            </svg>
          </div>
          <h3>Analisis pasaran AI</h3>
          <p>Pengiraan pembelajaran mesin masa nyata yang tertumpu pada meraih anjakan pasaran yang ditandai.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>Suapan kependaman rendah</h3>
          <p>Infrastruktur lincah yang tertumpu pada pemprosesan pesanan pantas semasa tempoh aktiviti tinggi.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">Aset masa nyata</div>
          <h2 class="section-title">Papan pemuka <?= e(SITE_NAME) ?> bersatu untuk metrik global</h2>
          <p class="section-subtitle">
            Jejaki pergerakan aset secara masa nyata, pantau momentum, dan gunakan analisis AI automatik untuk memetakan corak dengan pantas.
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>Kecekapan operasi:</strong>
              Perdagangan tradisional bermaksud memerhati ratusan penunjuk secara manual.
              <?= e(SITE_NAME) ?> algoritma memproses beribu-ribu perubahan harga setiap milisaat,
              menghasilkan model matematik yang jelas supaya anda dapat meraih pergerakan lebih awal.
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">Akses pasaran</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>Aset</span>
              <span style="text-align:right; padding-right:16px;">Harga</span>
              <span style="text-align:right;">Perubahan 24j</span>
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
        <div class="section-label">Proses pendaftaran</div>
        <h2 class="section-title"><?= e(SITE_NAME) ?> menjadikan permulaan bebas tekanan</h2>
        <p class="section-subtitle">Tiada pengalaman kripto sebelum ini? Panduan automatik kami membimbing anda melalui setiap langkah.</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Pendaftaran selamat</h3>
            <p>Masukkan butiran hubungan asas melalui sistem borang kami yang disulitkan tinggi.</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>Persediaan berpandu AI</h3>
            <p>Platform mempersembahkan pilihan antara muka yang disesuaikan dengan keutamaan anda.</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Pembiayaan selamat</h3>
            <p>Aktifkan julat perdagangan anda melalui saluran pembayaran standard yang boleh dipercayai.</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>Lancarkan isyarat</h3>
            <p>Mula berinteraksi dengan pasaran global menggunakan suapan data neural secara langsung.</p>
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
          <div class="section-label">Akses mudah alih</div>
          <h2 class="section-title">Portfolio anda, dalam poket anda</h2>
          <p class="section-subtitle">
            Enjin penuh <?= e(SITE_NAME) ?> dimampatkan menjadi pengalaman mudah alih yang pantas dan terasa natif.
            Jejaki aset, laksanakan dagangan, dan ikuti isyarat AI dari mana-mana.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Makluman tolak untuk pergerakan harga kritikal
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Log masuk biometrik dengan storan tempatan yang disulitkan
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Suite carta penuh yang dioptimumkan untuk sentuhan
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">Dapatkan pengalaman aplikasi</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Rangka kerja seimbang</div>
        <h2 class="section-title">Parameter operasi yang telus</h2>
        <p class="section-subtitle">
          Kami percaya pada kejujuran mutlak. Inilah yang membezakan sistem kami — dan di mana had industri biasanya berada.
        </p>
      </div>

      <div class="comparison-grid">
        <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>Kelebihan utama</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Papan pemuka minimalis yang ditala untuk kelajuan pelaksanaan institusi.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Analitik neural yang beroperasi 24/7 merentas aset.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Sifar margin transaksi tersembunyi atau yuran pengurusan mengejut.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Seni bina akaun kriptografi SSL secara langsung.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Integrasi berpandu yang mengambil masa minit, bukan hari.
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">Platform lain</div>
          <h3>Had industri yang biasa</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Papan pemuka yang sesak dan penuh iklan yang memperlahankan keputusan.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Laporan statik hujung hari berbanding analisis langsung yang berterusan.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Spread tersembunyi, yuran pengeluaran dan harga yang tidak jelas.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Infrastruktur lapuk yang dikongsi dengan perlindungan data yang tidak sekata.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Pengesahan perlahan dan penuh kertas kerja yang boleh mengambil masa berhari-hari.
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        Perbandingan mencerminkan corak lazim dalam perdagangan runcit dan bersifat ilustratif; tawaran pesaing berbeza.
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">Ciri teras platform secara ringkas</h2>
        <p class="section-subtitle">Semak parameter fungsi yang terbina dalam rangka kerja akses akaun anda.</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>Keupayaan</th>
              <th>Butiran fungsi</th>
              <th class="cap-table-center">Termasuk</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Rangka kerja perdagangan AI</strong></td>
              <td>Pemprosesan algoritma yang menyediakan pengiraan makro-struktur dinamik.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Termasuk">✓</span></td>
            </tr>
            <tr>
              <td><strong>Suapan tergabung</strong></td>
              <td>Carta disatukan masa nyata untuk indeks dan token global moden.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Termasuk">✓</span></td>
            </tr>
            <tr>
              <td><strong>Kestabilan merentas platform</strong></td>
              <td>Paparan responsif sepenuhnya pada mudah alih, desktop dan tablet.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Termasuk">✓</span></td>
            </tr>
            <tr>
              <td><strong>Liputan berbilang aset</strong></td>
              <td>Akses bersatu kepada kripto, forex dan indeks ekuiti dari satu lapisan akaun.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Termasuk">✓</span></td>
            </tr>
            <tr>
              <td><strong>Makluman risiko automatik</strong></td>
              <td>Pemberitahuan boleh dikonfigurasi yang menandai volatiliti luar biasa sebelum ia mengenai kedudukan.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Termasuk">✓</span></td>
            </tr>
            <tr>
              <td><strong>Peti data tersulit</strong></td>
              <td>Data peribadi dan akaun diasingkan di sebalik kawalan akses kriptografi berlapis.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Termasuk">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>Sokongan manusia 24/7</strong></td>
              <td>Pengendali teknikal secara langsung sedia menjawab soalan persediaan dengan segera.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Termasuk">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">Deposit</div>
      <h2 class="section-title">Biayai akaun anda dengan kaedah yang sudah anda kenali</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        Kad, e-dompet dan pindahan bank — semuanya dilindungi oleh penyulitan SSL 256-bit.
      </p>

      <ul class="payment-icons-list" role="list" aria-label="Kaedah deposit dan pembiayaan yang diterima">
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
          <span>Pindahan bank</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>Dilindungi SSL</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Infrastruktur yang boleh dipercayai</div>
        <h2 class="section-title">Dibina bersama rakan kongsi gred industri</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Maklum balas pengguna</div>
        <h2 class="section-title">Apa kata pedagang tentang <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Maklum balas jujur daripada komuniti pelbagai pasaran global kami.</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 daripada 5 bintang">★★★★★</div>
            <p class="review-text">
              Sebagai pemula, kripto menakutkan saya. <?= e(SITE_NAME) ?> menjadikan papan pemuka begitu intuitif sehingga saya berasa yakin dalam beberapa minit. Analisis AI sangat jelas.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>Pengendali runcit yang disahkan · UK</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 daripada 5 bintang">★★★★★</div>
            <p class="review-text">
              Antara muka yang kemas menjimatkan berjam-jam masa saya. Penapisan AI yang merapikan hingar pasaran kepada tren utama mengubah cara saya mengurus kedudukan harian.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>Penganalisis aset kripto · Kanada</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 daripada 5 bintang">★★★★★</div>
            <p class="review-text">
              Pelaksanaan kependaman rendah ditambah makluman pintar membolehkan saya menyesuaikan sasaran dengan pantas tanpa membuka berbilang program.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>Pengurus portfolio persendirian · Jerman</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 daripada 5 bintang">★★★★★</div>
            <p class="review-text">
              Sokongan membalas dalam dua minit semasa saya mengkonfigurasi pengesahan. Rangka kerja perkhidmatan gred institusi yang luar biasa.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>Pedagang algoritma · Perancis</p>
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
          <?= e(SITE_NAME) ?>: memperkasakan pedagang dengan seni bina AI institusi
        </h2>

        <p class="seo-intro">
          Interaksi aset moden menuntut kejelasan mutlak. Apabila rangka kerja data sesak dengan sepanduk promosi
          atau lapisan antara muka yang berat, prestasi pengguna merosot. <?= e(SITE_NAME) ?> menyelesaikan kerumitan sistemik dengan mengerahkan
          persekitaran teras yang elegan dan responsif, dioptimumkan untuk pelaksanaan strategik jangka panjang. Setiap modul platform,
          dari pendaftaran hingga pelaksanaan langsung, dibina berdasarkan prinsip yang sama: buang hingar supaya data asas
          dapat berbicara sendiri — tanpa mengorbankan kedalaman yang diharapkan peserta berpengalaman.
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>Aset perdagangan <span>kripto termaju</span></h3>
            <p>
              Kecairan rantaian blok berkembang dengan pantas, menjadikan infrastruktur kependaman rendah amat penting.
              <?= e(SITE_NAME) ?> menyambungkan nod tersuai ke pusat aset digital utama, menyediakan gelung maklum balas harga secara langsung.
              Metrik visual yang kemas menukar struktur berbilang rantaian yang kacau kepada saluran data yang teratur dan mudah dibaca.
            </p>
            <p>
              Selain suapan harga mentah, platform ini memberi konteks kepada anjakan volum dan kedalaman kecairan supaya lonjakan mengejut
              lebih mudah ditafsir — bukan sekadar isyarat reaktif. Ketekalan itu paling penting dalam sesi meruap, apabila
              alat yang berpecah-belah memperlahankan keputusan tepat pada masa kejelasan paling diperlukan.
            </p>
          </div>

          <div class="seo-block">
            <h3>Analisis pasaran <span>neural yang mendalam</span></h3>
            <p>
              Algoritma automatik menganalisis data pasaran masuk untuk mengira anjakan struktur merentas forex dan komoditi antarabangsa.
              <?= e(SITE_NAME) ?> menulenkan pengiraan kompleks kepada tren data yang jelas yang menyokong pertimbangan bebas, bukan menggantikannya.
            </p>
            <p>
              Kerana model berjalan secara berterusan dan bukan pada jadual tetap, perubahan momentum kelihatan semasa ia berlaku
              berbanding dalam ringkasan yang tertangguh. Hasilnya ialah lapisan penyelidikan yang menyokong pertimbangan bebas
              sementara keputusan akhir kekal di tangan pengguna.
            </p>
          </div>

          <div class="seo-block">
            <h3>Persediaan akaun <span>tanpa geseran</span></h3>
            <p>
              Pematuhan tidak semestinya rumit. Saluran pendaftaran berstruktur kami melindungi tetapan peribadi
              melalui proses pengesahan selamat yang direka untuk selesai dalam masa kurang daripada tiga minit dari mula hingga akses anda.
            </p>
            <p>
              Setiap medan dalam perjalanan menjelaskan mengapa ia diminta, supaya pemula tidak perlu meneka tujuan sesuatu
              langkah pengesahan. Setelah dihantar, semakan identiti tersulit berjalan di latar belakang sementara bahagian lain
              papan pemuka kekal boleh dilayari sepenuhnya.
            </p>
          </div>

          <div class="seo-block">
            <h3>Kawalan risiko <span>berkualiti institusi</span></h3>
            <p>
              Saiz kedudukan, had pendedahan dan penunjuk volatiliti automatik merapatkan alat meja profesional yang bersejarah
              kepada togol yang mudah — supaya peserta baharu mewarisi disiplin harian daripada pedagang berpengalaman.
            </p>
            <p>
              Makluman boleh dikonfigurasi mengikut aset, jadi perhatian hanya ditarik kepada pasaran yang benar-benar memerlukannya.
              Pendekatan tertumpu ini membantu mencegah keletihan makluman yang sering menyebabkan orang mengabaikan pemberitahuan
              pada platform yang kurang terpilih.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="faq">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Pusat sokongan</div>
        <h2 class="section-title">Soalan lazim</h2>
        <p class="section-subtitle">Jawapan prosedur segera tentang pendaftaran dan akses platform.</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span>Bagaimana saya bermula dengan <?= e(SITE_NAME) ?>?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              Isikan borang pendaftaran di atas, ikuti pendaftaran selamat kami langkah demi langkah,
              dan aktifkan tetapan akaun anda melalui sistem pemprosesan pembayaran berstruktur kami.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Adakah saya memerlukan pengalaman kripto lanjutan?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Tidak. <?= e(SITE_NAME) ?> menawarkan mod papan pemuka pemula, penjelasan analitik automatik,
              dan ruang kerja yang dipermudahkan untuk membantu pedagang baharu menavigasi dengan selamat.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Apakah keperluan minimum untuk berdagang?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Pengaktifan asas standard ialah <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Ini berfungsi sebagai modal perdagangan operasi dan kekal di bawah kawalan manual anda.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Adakah terdapat yuran operasi tersembunyi?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Tidak. <?= e(SITE_NAME) ?> beroperasi dengan ketelusan harga yang mutlak.
              Kami tidak mengenakan margin akses platform yang tidak dijangka atau pengiraan pengeluaran tersembunyi.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Bagaimana komponen kecerdasan AI berfungsi?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Sistem neural menilai penanda volatiliti statistik mendalam merentas pelbagai lapisan pasaran,
              menukar telemetri mentah kepada garis tren yang dipermudahkan untuk penilaian yang lebih mudah.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Adakah data peribadi saya dilindungi sepenuhnya?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Ya. Setiap saluran akaun diselindungi menggunakan perlindungan SSL yang selamat ditambah protokol kriptografi kukuh
              untuk mengasingkan sepenuhnya julat data peribadi.
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
          <h2>Sedia untuk merasai <?= e(SITE_NAME) ?> dengan kejelasan?</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            Sertai sistem moden yang dioptimumkan untuk operasi pantas, perlindungan data dan akses yang telus.
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">Cipta akaun anda</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = 'Cipta akaun percuma';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
