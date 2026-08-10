<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Yapay Zekâ İşlem Platformu');
$page_description = SITE_NAME . ' üzerinde kripto ve diğer piyasalarda işlem yapın — güvenli hesap, net fiyatlar, yararlı yapay zekâ araçları ve hızlı emir gerçekleştirmesi.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <div class="market-tape" aria-hidden="true">
    <div class="container market-tape-inner">
      <span class="tape-item"><strong>BTC</strong> <span class="tape-up" data-change="btc">—</span></span>
      <span class="tape-item"><strong>ETH</strong> <span class="tape-up" data-change="eth">—</span></span>
      <span class="tape-item"><strong>SOL</strong> <span class="tape-down" data-change="sol">—</span></span>
      <span class="tape-item"><strong>XRP</strong> <span class="tape-up" data-change="xrp">—</span></span>
      <span class="tape-item"><strong>Spreadler</strong> 0,1'den</span>
      <span class="tape-item"><strong>Hız</strong> 40 ms altında</span>
      <span class="tape-item"><strong>Piyasalar</strong> 7/24</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> Yapay zekâ destekli işlem platformu</div>
        <h1>Kripto ve diğer piyasalarda işlem yapın.<br><span class="text-accent"><?= e(SITE_NAME) ?> ile başlayın</span></h1>
        <p class="lead">
          Kripto ve çoklu varlık işlemleri için basit bir platform — güçlü güvenlik, net fiyatlar,
          yararlı yapay zekâ analizleri ve takip etmesi kolay bir arayüz.
        </p>
        <div class="hero-badges" aria-label="Platform öne çıkanları">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Güvenli şifreli bağlantı (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Müşteri desteği 7/24
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Hızlı emir gerçekleştirmesi
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Bugün başlayın — min. yatırım <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Hesap oluştur</span>
          <span class="live-pill">Güvenli</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = '2 dakikadan kısa sürede kaydolun';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Canlı piyasalar</p>
        <h2>Fiyatları gerçek zamanlı görün. Hazır olduğunuzda başlayın.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Bitcoin, Ethereum ve diğer ana çiftleri net bir piyasa panelinde takip edin —
          ardından hesabınızı açıp ilk işleminizi yapın.
        </p>
        <a href="sign.php" class="btn btn-primary">Piyasa erişimini aç</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Canlı piyasa fiyatları">
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

  <section class="platform-section" id="platform" aria-label="İşlem platformu önizlemesi">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Platform</p>
        <h2>Net grafikler.<br>İşleme hazır.</h2>
        <p class="lead">
          Canlı grafikler, kâr-zarar ve tek dokunuşla emirlerle mobil uyumlu bir işlem ekranı —
          ilk girişten itibaren anlaşılır.
        </p>
        <ul class="platform-points">
          <li>Canlı grafikler ve piyasa fiyatları</li>
          <li>Bir bakışta portföy bakiyesi</li>
          <li>2FA'lı güvenli hesap paneli</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Platformu aç</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Özellikler</p>
        <h2><?= e(SITE_NAME) ?> ile neler kazanırsınız</h2>
        <p class="lead">Güvenlik, hız ve net araçlar — kalabalık bir ekran olmadan.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Güçlü hesap güvenliği</h3>
            <p>SSL şifreleme, iki faktörlü giriş ve korumalı fon akışları paranızı ve verilerinizi daha güvende tutar.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>Yapay zekâ piyasa analizleri</h3>
            <p>Zamanlama ve trendleri işaret eden yararlı sinyaller — fiyatlar hızlı hareket ederken faydalı.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>İstediğinizde otomasyon</h3>
            <p>İsteğe bağlı işlem botları kurallarınızı gün boyu izleyebilir — kontrol sizde kalır.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Tek yerde birden fazla piyasa</h3>
            <p>Kripto, döviz, hisse ve emtialar tek basit platformda.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Hızlı emir işleme</h3>
            <p>Piyasalar yoğunken bile güvenilir emir yerleşimi için tasarlandı.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Temiz, basit düzen</h3>
            <p>Daha az görsel gürültü — grafik ve sonraki emir için daha fazla alan.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Başlarken</p>
        <h2>İlk işleminize beş adım</h2>
        <p class="lead">Kayıttan canlı piyasalara net bir yol.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Hesap açın</h3>
            <p>Bilgilerinizi gönderin ve platforma güvenli erişim alın.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>E-postayı onaylayın</h3>
            <p>Tam işlem ortamını açmak için adresinizi doğrulayın.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Fon ekleyin</h3>
            <p>Kart, banka havalesi veya e-cüzdan ile <?= MIN_DEPOSIT ?> <?= CURRENCY ?> tutarından itibaren yatırın.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Nasıl işlem yapacağınızı seçin</h3>
            <p>Manuel işlem yapın veya sizin koyduğunuz net limitlerle yapay zekâ destekli araçları kullanın.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Canlı işlem yapın</h3>
            <p>Yardıma ihtiyaç duyduğunuzda grafikler, araçlar ve 7/24 destek kullanın.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Şimdi başla</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Ödemeler</p>
      <h2 style="margin-bottom: 0.75rem;">Bildğiniz yöntemlerle yatırın</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Kartlar, cüzdanlar ve banka havaleleri — uçtan uca şifreli.</p>
      <?php
      $payment_context = 'hesap fonlama ve yatırımlar';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Altyapı</p>
        <h2>Altyapı ortakları</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Yorumlar</p>
        <h2>İşlemciler ne diyor</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Kayıt hızlıydı, ücretler netti, destek yanıtladı. Kalabileceğim bir platform gibi hissettiriyor.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Bağımsız işlemci</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Uygulamalar arasında gezinip burada kripto denedim — kurulum açıktı ve grafik düzeni sonunda mantıklı.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Kripto işlemcisi</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Emirler güvenilir geçiyor, koşullar sade dilde ve ekip ürünü biliyor. Sağlam bir platform.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Dijital varlık işlemcisi</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Yeni başlayan olarak gösterişten çok netlik istedim. Kayıt, ücretler ve takıldığında yardım — yeterliydi.</p>
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

  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">SSS</p>
        <h2>Hesabınıza para yatırmadan önce</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Nasıl başlarım?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Hesap oluşturun, kısa bir doğrulama tamamlayın ve <?= MIN_DEPOSIT ?> <?= CURRENCY ?> tutarından itibaren yatırın.
              Bu; grafikleri, araçları ve rehberli başlangıcı açar.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Param ve verilerim nasıl korunuyor?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              SSL şifreleme, iki faktörlü kimlik doğrulama ve sıkı veri politikaları altında güvenilir ödeme sağlayıcıları kullanırız.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Para çekme ne kadar sürer?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Ödemeleri panodan istediğiniz zaman talep edin. Çoğu yöntem 1–3 iş gününde tamamlanır; ücretler önceden gösterilir.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Önceden işlem deneyimi gerekir mi?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Hayır. Rehberli adımlar ve yapay zekâ destekli araçlar kendi hızınızda öğrenmenize yardım eder; 7/24 destek vardır.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Hangi piyasalar mevcut?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Kripto paralar, döviz, küresel hisseler ve emtialar — manuel veya otomatik — tek arayüzden.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Özet</p>
        <h2>Platforma bir bakış</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Yapay zekâ araçları</div>
          <div class="specs-value">Makine öğrenmesi içgörüleriyle piyasa analizi</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Fonlama</div>
          <div class="specs-value">Kartlar, banka havaleleri, PayPal, e-cüzdanlar</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Cihazlar</div>
          <div class="specs-value">Web, tablet, mobil — tamamen duyarlı</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Yapay zekâ sinyal kalitesi</div>
          <div class="specs-value">Desteklenen stratejilerde %85'e kadar*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Piyasalar</div>
          <div class="specs-value">Kripto, döviz, hisse, emtia</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Başlangıç</div>
          <div class="specs-value">Rehberli doğrulamayla hızlı kurulum</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Destek</div>
          <div class="specs-value">7/24 destek — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Bize ulaşın</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Derecelendirildi</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;"><?= e(SITE_NAME) ?> skor kartı</h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> yorum · <strong>1.842</strong> puana dayalı
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Daha net bir işlem yolu için hazır mısınız?</h2>
        <p class="lead">Canlı piyasalar, net ücretler ve kullanımı kolay bir platform isteyen işlemcilere katılın.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Hesap aç</span>
          <span class="live-pill">Ücretsiz</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Ücretsiz hesabınızı oluşturun';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
