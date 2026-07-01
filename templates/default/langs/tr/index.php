<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Yapay zeka islem platformu');
$page_description = SITE_NAME . ' ile kripto, forex ve kuresel piyasalarda islem yapin. Gercek zamanli analiz, yapay zeka destekli sinyaller ve hiz ile netlik icin tasarlanmis bir platform.';
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
        <p class="eyebrow">Yapay zeka islem platformu</p>
        <h1>Daha akilli islem yapin.<br><span class="text-accent">Daha hizli tepki verin.</span></h1>
        <p class="lead">
          Kripto ve coklu piyasa islemlerinde yeni standart. Gelismis guvenlik, seffaf ucretler,
          yapay zeka odakli icgoruler ve sizi yavaslatmayan bir arayuz.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL ile guvenli
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            7/24 destek
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Hizli emir gerceklesmesi
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Isleme baslayin — min. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = '2 dakikada hesap acin';
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
        <div class="stat-label">Kullanilabilir varliklar</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Dogrulanmis kullanici</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Islem hacmi</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Desteklenen ulke</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Islem platformu genel gorunumu">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Islem platformu</p>
        <h2>Profesyonel grafikler.<br>Mobil uyumlu deneyim.</h2>
        <p class="lead">
          Modern borsa deneyiminden ilham alan temiz bir arayuz — gercek zamanli BTC/USDT verileri, portfoy yonetimi
          ve tek tikla islem. Ilk giristen itibaren guven vermesi icin tasarlandi.
        </p>
        <ul class="platform-points">
          <li>Gercek zamanli mum grafikler</li>
          <li>Portfoy ve P/L tek bakista</li>
          <li>Guvenli hesap paneli</li>
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
        <h2>Kendinden emin islem icin ihtiyaciniz olan her sey</h2>
        <p class="lead">Guvenlik, hiz ve zeka — modern traderlar icin tasarlanmis sade bir platformda.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Banka seviyesinde guvenlik</h3>
          <p>SSL sifreleme, 2FA ve guvenli fon yonetimi; verilerinizi ve sermayenizi her adimda korur.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Yapay zeka piyasa sinyalleri</h3>
          <p>Gercek zamanli ve isabetli icgoruler firsatlari daha hizli gormenize ve veriye dayali karar almaniza yardim eder.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Otomatik islem</h3>
          <p>Yapay zeka destekli botlar 7/24 strateji uygularken kontrol her zaman sizde kalir.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Coklu piyasa erisimi</h3>
          <p>Kripto, forex, hisse ve emtia islemlerini tek bir birlesik ortamdan yonetin.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Dusuk gecikmeli emir iletimi</h3>
          <p>Yuksek volatilite anlarinda bile stabil emir gerceklesmesi icin optimize edilmis altyapi.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Sade arayuz</h3>
          <p>Minimal tasarim dikkat dagitici unsurlari azaltir; odaginiz navigasyon degil strateji olur.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Gercek zamanli piyasalar</p>
        <h2>Bitcoin, Ethereum ve daha fazlasinda islem yapin</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Gercek zamanli fiyatlar, gelismis gostergeler ve takip ettiginiz piyasalarin profesyonel gorunumu.
        </p>
        <a href="sign.php" class="btn btn-primary">Piyasalara giris yapin</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Gercek zamanli piyasa fiyatlari">
        <div class="exchange-panel-header">
          <span>Piyasalar</span>
          <span class="live-dot">Live</span>
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
        <p class="eyebrow">Nasil baslanir</p>
        <h2>Kayittan ilk isleme dakikalar icinde gecin</h2>
        <p class="lead">Gereksiz karmasa olmadan net bir baslangic sureci.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Hesap olusturun</h3>
          <p>Bilgilerinizle kayit olun ve platforma guvenli erisimi aninda aktif edin.</p>
        </article>
        <article class="step-card">
          <h3>E-postanizi dogrulayin</h3>
          <p>Adresinizi onaylayin ve tam islem ortamının kilidini acin.</p>
        </article>
        <article class="step-card">
          <h3>Fon yatirin</h3>
          <p>Banka havalesi, kart veya e-cuzdan ile en az <?= MIN_DEPOSIT ?> <?= CURRENCY ?> yatirin.</p>
        </article>
        <article class="step-card">
          <h3>Stratejinizi belirleyin</h3>
          <p>Risk seviyenizi ve tercihlerinizi manuel ya da yapay zeka destekli otomasyonla ayarlayin.</p>
        </article>
        <article class="step-card">
          <h3>Isleme baslayin</h3>
          <p>Gercek zamanli grafikler, araclar ve ihtiyaciniz oldugunda hazir destekle piyasaya girin.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Hemen hesap acin</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Yatirimlar</p>
      <h2 style="margin-bottom: 0.75rem;">Guvendiginiz odeme yontemleriyle fonlayin</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kartlar, e-cuzdanlar ve banka havaleleri — SSL sifreleme ile korunur.</p>
      <?php
      $payment_context = 'yatirim ve hesap fonlama';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Guvenilir altyapi</p>
        <h2>Sektorun onde gelen ortaklariyla kuruldu</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Yorumlar</p>
        <h2>Traderlar ne diyor?</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Kayit sadece dakikalar surdu, ucretler tamamen seffaf ve destek ekibi gercekten hizli. Akici ve guvenilir bir deneyim — devam etmekten memnun oldugum bir platform.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Bagimsiz trader</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Kripto islemlerini ilk kez burada denedim ve kararimdan cok memnunum. Kurulum hizli, her adim net aciklanmis. Ozellikle baslangic icin harika bir tercih.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Kripto meraklisi</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Stabil ve guvenilir bir altyapi. Hesap acilisi kolay, kosullar net ve ekip son derece profesyonel. Bekledigimden cok daha konforlu bir islem deneyimi.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Dijital varlik operatoru</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Islem yapmak artik karmasik hissettirmiyor. Kayit kolay, ucretler acik ve ihtiyac oldugunda destek hazir. Yeni baslayanlar icin gercekten buyuk fark yaratıyor.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Bireysel yatirimci</div>
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
        <p class="eyebrow">FAQ</p>
        <h2>Sikca sorulan sorular</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Nasil baslayabilirim?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Temel bilgilerinizle hesap acin, kisa dogrulamayi tamamlayin ve en az <?= MIN_DEPOSIT ?> <?= CURRENCY ?> yatirin. Gercek zamanli grafikler, islem araclari ve destekli baslangic dahil tum platforma erisim kazanin.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Param ve verilerim guvende mi?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              SSL sifreleme, iki asamali dogrulama ve guvenilir saglayicilar uzerinden guvenli islem altyapisi kullaniyoruz. Kisisel verileriniz tum asamalarda siki guvenlik standartlarina gore islenir.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kazanclarimi ne zaman cekebilirim?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Panelinizden istediginiz zaman cekim talebi olusturabilirsiniz. Isleme alma genellikle 1-3 is gunu surer. Ucretler ve sureler her zaman onceden net sekilde belirtilir.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Islem deneyimi gerekli mi?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Hayir. Destekli baslangic, anlasilir rehberler ve yapay zeka destekli araclar kendi temponuzda ilerlemenizi saglar. Yeni baslayan ya da deneyimli olmaniz fark etmez, destek 7/24 hizmet verir.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hangi piyasalarda islem yapabilirim?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Tek arayuzden kripto, forex, kuresel hisseler ve emtia piyasalarina erisin. Gercek zamanli veriler, entegre analizler ve manuel ile otomatik stratejilere destek.
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
        <h2>Temel yetenekler tek bakista</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Yapay zeka islem motoru</div>
          <div class="specs-value">Makine ogrenimi ile gelismis piyasa analizi</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Fonlama yontemleri</div>
          <div class="specs-value">Odeme kartlari, banka havaleleri, PayPal, e-cuzdanlar</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Cihaz erisimi</div>
          <div class="specs-value">Web, tablet ve mobil — tamamen duyarli tasarim</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Sinyal dogrulugu</div>
          <div class="specs-value">Desteklenen yapay zeka stratejilerinde %85'e kadar</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Piyasalar</div>
          <div class="specs-value">Kripto, forex, hisse, emtia</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Baslangic sureci</div>
          <div class="specs-value">Destekli dogrulamayla hizli hesap kurulumu</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Destek</div>
          <div class="specs-value">7/24 profesyonel destek — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Bize ulasin</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Guvenilir</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> puani</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> yorum · <strong>1&nbsp;842</strong> degerlendirmeye dayali
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Netlik icin tasarlanmis bir platformda isleme hazir misiniz?</h2>
        <p class="lead">Dijital varliklari guvenle alip satan ve yoneten bireysel traderlar ile kurumlara siz de katilin.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Ucretsiz hesap olusturun';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
