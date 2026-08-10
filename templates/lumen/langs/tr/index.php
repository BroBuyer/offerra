<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Yapay zekâ yatırım platformu');
$page_description = 'Yapay zekâ destekli basit bir yatırım platformu — net piyasalar, rehberli kararlar ve ' . SITE_NAME . ' üzerinde hızlı hesap açılışı.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Giriş">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Netlikle yatırım yapın.<br><span class="text-accent">Yapay zekâ basit tutsun.</span></h1>
        <p class="lead">
          Piyasaları sade dille açıklayan, yararlı yapay zekâ içgörülerini öne çıkaran ve gereksiz karmaşa olmadan emir vermenize yardımcı olan modern bir yatırım platformu.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Başlangıç <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Nasıl çalıştığını görün</a>
        </div>
      </div>

      <div class="hero-lumen__visual">
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="how">
    <div class="container">
      <div class="section-intro" data-reveal>
        <p class="eyebrow">Yeni başlayanlar için</p>
        <h2>Üç adım. Sonra işlemdesiniz.</h2>
        <p class="lead">Terminal jargonu yok — kayıttan ilk pozisyona net bir yol.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Hesabınızı açın</h3>
          <p>Birkaç bilgi yeter. Doğrulama kısa ve rehberlidir.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Güvenle fonlayın</h3>
          <p>Güvenilir ödeme yöntemleriyle <?= MIN_DEPOSIT ?> <?= CURRENCY ?> tutarından başlayarak yatırın.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Yapay zekâ yardımıyla işlem yapın</h3>
          <p>Sade dille yazılmış içgörüleri izleyin ve hazır olduğunuzda emir verin.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">Gerçekten yararlı yapay zekâ</p>
        <h2>Gerçekten anlayabileceğiniz sinyaller</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> piyasa gürültüsünü kısa, okunabilir ipuçlarına dönüştürür — daha az tahmin, daha çok karar.
        </p>
        <ul class="feature-list">
          <li>Net al / tut / izle işaretleri</li>
          <li>Onaydan önce risk hatırlatmaları</li>
          <li>Baskı altında sakin kalan bir arayüz</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Platformu deneyin</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Örnek içgörü">
        <p class="insight-panel__label">Canlı içgörü</p>
        <p class="insight-panel__title">BTC / USD · istikrarlı momentum</p>
        <p class="insight-panel__body">
          Volatilite sakinleşiyor. Yapay zekâ, boyutu artırmadan önce bir sonraki seansı izlemenizi önerir — her emirde kontrol sizdedir.
        </p>
        <div class="insight-panel__meta">
          <span>Yüksek güven</span>
          <span>Az önce güncellendi</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Başlayın</p>
        <h2><?= e(SITE_NAME) ?> hesabınızı oluşturun</h2>
        <p class="lead lead-light">
          Premium hisseden ve basit kalan bir platforma katılın — ilk günden yapay zekâ rehberliği dahil.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = '2 dakikadan kısa sürede açın';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Güvenilir altyapı</p>
        <h2>Altyapı ortakları</h2>
        <p class="lead">Ödemeler ve piyasa erişimi köklü sağlayıcılar aracılığıyla.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">SSS</p>
        <h2>Hızlı yanıtlar</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            İşlem deneyimine ihtiyacım var mı?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Hayır. <?= e(SITE_NAME) ?> ilk kez yatırım yapanlar için tasarlandı — yapay zekâ ipuçları sade dille yazılır.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Minimum yatırım tutarı nedir?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= MIN_DEPOSIT ?> <?= CURRENCY ?> tutarından başlayabilirsiniz. Ücretler onaydan önce görünür kalır.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Destek mevcut mu?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Evet — ekibimiz fonlama ve hesap kurulumu için günün her saati yardımcı olur.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Tam SSS’yi okuyun →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
