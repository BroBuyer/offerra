<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Yapay zekâ ile akıllı yatırım ' . geo_in();
$page_description = geo_in() . ' otomatik işlem. Yapay zekâ teknolojimizle ' . money_min() . ' ile başla. Güvenli, şeffaf ve kolay.';
$page_canonical = page_url();
$active_page = 'home';
$page_css = ['home-mob.min.css', 'home-desk.min.css', 'calculator.css', 'tinyslider.min.css'];
$page_js = ['tinyslider.min.js', 'index.min.js', 'calculator.js'];
$page_has_form = true;
// Keep the slider's span proportional to the offer's minimum instead of a fixed $10,000.
$calc_deposit_max = max(10000, (int) MIN_DEPOSIT * 40);
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero hero-v_2">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h1><?= e(SITE_NAME) ?> platformu</h1>
              <p>
                <?= e(SITE_NAME) ?>'i benzersiz kılan nedir? Daha akıllı yatırım yapma fırsatın
                <?= e(geo_in()) ?>. Güvenilir yapay zekâ destekli işlem platformumuz bilinçli kararlar almana yardımcı olur
                ve riski güvenle yönetmeni sağlar. <?= e(SITE_NAME) ?> yapay zekâsının olanaklarını keşfet.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>2.804'ten fazla memnun kullanıcının verdiği 4,7 yıldız puanı</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="5 üzerinden 4,7 puan"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2><?= e(SITE_NAME) ?>'e kayıt ol</h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Hemen kayıt ol';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Bilgilerini girip «Hemen kayıt ol» düğmesine tıkladığında
                    kabul ettiğini onaylarsın:
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">Gizlilik Politikası</a> ile
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">Kullanım Koşulları</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Ödeme yöntemleri" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>2.804'ten fazla memnun kullanıcının verdiği 4,7 yıldız puanı</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="5 üzerinden 4,7 puan"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Kâr hesaplayıcı">
        <div
          class="calc-widget is-ltr"
          dir="ltr"
          id="calculator"
          data-calc-root
          data-currency="<?= e(currency_symbol()) ?>"
          data-locale="<?= e(site_locale()) ?>"
          style="
            --calc-accent: #c2410c;
            --calc-cta-bg: #ee6129;
            --calc-cta-text-color: #ffffff;
            --calc-track: #d9deef;
            --calc-radius: 18px;
            --calc-title-color: #1a1a1a;
            --calc-subtitle-color: #555;
            --calc-label-color: #555;
            --calc-value-color: #555;
            --calc-minmax-color: #555;
            --calc-result-bg: #ee6129;
            --calc-result-title-color: #e9e4e3;
            --calc-result-value-color: #ffffff;
            --calc-result-label-color: #e9e4e3;
          "
        >
          <h2 class="calc-widget__title">Olası kârı hesapla</h2>
          <p class="calc-widget__subtitle">
            Potansiyelini görmek için ne kadar ve ne kadar süre yatırım yapacağını seç
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Yatırımın:</label>
                <div class="calc-widget__value"><span data-calc="deposit_value"><?= e(money_min()) ?></span></div>
                <input
                  id="calc-deposit"
                  class="calc-widget__range"
                  type="range"
                  data-calc="deposit"
                  min="<?= (int) MIN_DEPOSIT ?>"
                  max="<?= (int) $calc_deposit_max ?>"
                  step="1"
                  value="<?= (int) MIN_DEPOSIT ?>"
                />
                <div class="calc-widget__minmax">
                  <span data-calc="deposit_min"><?= e(money_min()) ?></span>
                  <span data-calc="deposit_max"><?= e(currency_symbol() . number_format($calc_deposit_max)) ?></span>
                </div>
              </div>
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-days">Yatırım süresi:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>gün</span>
                </div>
                <input
                  id="calc-days"
                  class="calc-widget__range"
                  type="range"
                  data-calc="days"
                  min="1"
                  max="90"
                  step="1"
                  value="45"
                />
                <div class="calc-widget__minmax">
                  <span>1 günden itibaren</span>
                  <span>En fazla 3 ay</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Kazanabilirsin</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Getiri</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Gelir</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Kişisel hesaplama iste
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Kapat">
              &times;
            </button>
            <h3 class="calc-modal__title">
              İletişim bilgilerini bırak, uzmanlarımızdan biri seninle
              en kısa sürede iletişime geçsin.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Hemen kayıt ol';
  $form_phone_id = 'calc-phone';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
      <section class="cards-img">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                <?= e(geo_from()) ?> dünyanın önde gelen kripto işlem platformlarına erişimin.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Kart simgesi 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> gelişmiş yapay zekâ ve makine öğrenimini
                    finans piyasalarında yeni fırsatları bulmak için kullanır.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Kart simgesi 2" />
                </div>
                <div class="text">
                  <p>
                    <?= e(geo_in()) ?> kripto yatırımcıları sektörün en büyük borsalarına
                    erişir; Bitcoin ve Ethereum gibi önde gelen coinlerin yanı sıra
                    geniş altcoin ve stablecoin yelpazesinde işlem yapabilir.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Güvenilir ortaklarımız</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Crypto.com logosu" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Binance logosu" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="CoinDesk logosu" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="TradingView logosu" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Deloitte logosu" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Ledger logosu" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Decrypt logosu" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Nansen logosu" />
          </div>
        </div>
      </section>

      <section class="advantages cards-img">
        <div class="container">
          <h2>Neden <?= e(geo_in()) ?> <?= e(SITE_NAME) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Avantaj simgesi 1" />
              </div>
              <div class="text">
                <h3><?= e(geo_in()) ?> güvenlik</h3>
                <p>
                  Saygın bir platform olarak güvenliği en üstte tutuyoruz. SSL,
                  banka düzeyinde şifreleme ve 2FA ile <?= e(SITE_NAME) ?>'in güvenilir olmasını ve verilerinin
                  korunmasını sağlıyoruz.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Avantaj simgesi 2" />
              </div>
              <div class="text">
                <h3>Güçlü yapay zekâ algoritmaları</h3>
                <p>
                  Uyarlanabilir botlarımız gelişmiş yapay zekâ stratejileri kullanır ve bunları özerk uygular. Sen
                  yaklaşımı belirler, risk seviyesi, piyasalar ve hedefler üzerinde tam kontrolü elinde tutarsın; böylece
                  büyük resme odaklanabilirsin.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Avantaj simgesi 3" />
              </div>
              <div class="text">
                <h3>Şeffaf ücretler. Gizli maliyet yok.</h3>
                <p>
                  Tüm ücretlerimiz şeffaftır; <?= e(geo_in()) ?> yatırımcılardan <?= e(SITE_NAME) ?>
                  kullanımı için asla ücret almayız. İşlem için yatırdığın para tamamen senindir; istediğin gibi
                  kullanabilirsin. Hiçbir şeyi bizde tutmuyoruz. Sadece <?= e(money_min()) ?> ile başla ve yatırımların üzerinde
                  tam kontrolü koru.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Avantaj simgesi 4" />
              </div>
              <div class="text">
                <h3>Sezgisel arayüz</h3>
                <p>
                  Sezgisel ve sade panelimiz işlevsellik, gelişmişlik ve
                  kullanım kolaylığını bir araya getirir — yeni başlayanlar ve deneyimli trader'lar için.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2><?= e(SITE_NAME) ?> nasıl çalışır?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Liste simgesi 1" />
              <p>
                Özel yazılımımız aynı anda birden fazla işlem platformunu izler ve
                değerlendirilebilecek fiyat farklarını tespit eder.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Liste simgesi 2" />
              <p>
                <?= e(SITE_NAME) ?> bir pazarda ucuza alır, diğerinde daha yüksek fiyata satar;
                arbitraj fırsatlarından yararlanır. Bu yaklaşım, küçük fiyat hareketlerinden
                getiri biriktirerek kâr sağlayabilir.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Liste simgesi 3" />
              <p><?= e(SITE_NAME) ?>'in işlem deneyimini nasıl geliştirebileceğini gör.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                <?= e(SITE_NAME) ?>'e kayıt ol — <?= e(geo_in()) ?> finansın geleceğini birlikte şekillendirelim!
              </h2>
              <p>
                <?= e(SITE_NAME) ?> <?= e(geo_in()) ?> kripto varlık işlemi için geniş araç seti sunar. Platform
                büyük küresel borsaları entegre eder ve çok sayıda
                kripto paraya erişim sağlar — Bitcoin gibi liderlerden XRP gibi diğerlerine. Ayrıca
                fiyat dalgalanmalarından kâr etmeni sağlar.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Hemen kayıt ol';
  $form_phone_id = 'UhZgSohZrA';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>

      <section class="reviews">
        <div class="container">
          <div class="reviews-wrap">
            <div class="review">
              <h3>Mehmet, 37, İstanbul</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Puan 1"
                />
              </div>
              <p class="review-text">
                <?= e(money_min()) ?> ile başladım, şimdi ayda <?= e(currency_symbol() . '2,000') ?> çekiyorum!
              </p>
            </div>
            <div class="review">
              <h3>Ayşe, 42, Ankara</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Puan 2"
                />
              </div>
              <p class="review-text">Basit platform: her şey şeffaf ve pratik.</p>
            </div>
            <div class="review">
              <h3>Can, 45, İzmir</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Puan 3"
                />
              </div>
              <p class="review-text">Pasif gelir için en iyi çözüm.</p>
            </div>
            <div class="review">
              <h3>Elif, 34, Bursa</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Puan 4"
                />
              </div>
              <p class="review-text">Tatildeyken bile istikrarlı kâr.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2><?= e(SITE_NAME) ?> kripto para seçenekleri</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Fayda 1"
                />
                <h3>Kripto işlemin anahtarı</h3>
                <p>
                  Son teknoloji yazılımımız işlem sistemimizin temelini oluşturur ve
                  büyük kripto borsaları arasındaki küçük fiyat farklarını değerlendirmek için
                  tasarlanmıştır.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben2.svg') ?>"
                  width="100"
                  height="100"
                  alt="Fayda 2"
                />
                <h3>Küresel varlık işlemi</h3>
                <p>
                  Hisse fiyatları ve diğer varlıklar sürekli hareket eder; <?= e(SITE_NAME) ?>
                  borsa hareketlerine hızlı tepki vermen ve sağlam getiri şansını artırman için
                  gerekli araçları sunar.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben3.svg') ?>"
                  width="100"
                  height="100"
                  alt="Fayda 3"
                />
                <h3>Forex işlemi</h3>
                <p>
                  Döviz kurları sürekli değişir ve işlem fırsatları yaratır. <?= e(SITE_NAME) ?>
                  döviz piyasasındaki en küçük hareketlerden bile kâr etmeni sağlar.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben4.svg') ?>"
                  width="100"
                  height="100"
                  alt="Fayda 4"
                />
                <h3><?= e(SITE_NAME) ?> ve Bitcoin</h3>
                <p>
                  Bitcoin pazar lideri olmaya devam ediyor; en görünür ve finansal olarak en istikrarlı
                  kripto para. Piyasa oynaklığını sistematik tanıyıp buna yanıt vererek
                  <?= e(SITE_NAME) ?> tutarlı getiri elde etmeyi kolaylaştırır.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>Platform bilgisi</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Gizlilik</h3>
                  <p><?= e(SITE_NAME) ?> <?= e(geo_in()) ?> geçerli gizlilik düzenlemelerine uyar.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Varlıklar</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash ve diğer önde gelen kripto paralar.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Platform türü</h3>
                  <p>
                    <?= e(SITE_NAME) ?> <?= e(geo_in()) ?> yatırımcılara XRP gibi altcoinler dahil önde gelen kripto paraların
                    fiyat dalgalanmalarından kâr etme fırsatı sunar.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Ülkeler</h3>
                  <p>Platformumuz dünya genelinde, <?= e(geo_in()) ?> dahil kullanılabilir.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Yatırma seçenekleri</h3>
                  <p>Kredi kartı, PayPal ve banka havalesi.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Maliyetler</h3>
                  <p><?= e(SITE_NAME) ?>'e erişim <?= e(geo_from()) ?> ücretsizdir.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta sec">
        <div class="container">
          <div class="content-wrap">
            <div class="half left bg-elem">
              <h2><?= e(SITE_NAME) ?> güvenilir mi?</h2>
              <p>
                <?= e(SITE_NAME) ?> olağanüstü güvenilir ve
                son derece deneyimli birinci sınıf aracı kurumlarla çalışır. Varlıklarını ve verilerini korumak için TLS/SSL
                şifreleme ve iki faktörlü kimlik doğrulama (2FA) gibi banka düzeyinde güvenlik önlemleri uygularız. Fiyatlandırmamız
                tamamen şeffaftır; gizli maliyet yoktur. Geçerli
                mevzuata uyarız.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Güvenilirlik grafiği" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Yapay zekâ ve makine öğrenimi sistemlerimiz gerçek zamanlı piyasa analizi
                üretir ve sonuçlarını optimize etmek için pratik işlem içgörüleri sunar.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Kopya işlem</h3>
                  <p>
                    En iyi trader'lar bir nedenden en iyidir. <?= e(SITE_NAME) ?> ile onları takip edebilir
                    ve deneyimlerinden ve stratejilerinden yararlanmak için işlemlerini kopyalayabilirsin.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Hisse parçaları</h3>
                  <p>
                    Portföyünü genişleterek sınırlı sermayeyle bile
                    kaliteli varlıklara erişebilirsin.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Eğitim kaynakları</h3>
                  <p>
                    İşlem becerilerini geliştirmek için eğitim kaynakları sunuyoruz: eğitimler,
                    webinarlar ve rehberler.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Mobil uygulama</h3>
                  <p>İstediğin zaman, istediğin yerde işlem yap.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>7/24 destek</h3>
                  <p>Müşteri hizmetlerimiz haftanın 7 günü, günün 24 saati hizmetinde.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Yapay zekâ destekli işlem</h3>
                  <p>
                    Gelişmiş yapay zekâ ve makine öğrenimi algoritmalarımız sayesinde
                    <?= e(SITE_NAME) ?> en güncel piyasa verilerini sürekli analiz eder. Böylece en yüksek getiri potansiyeline sahip
                    piyasa fırsatları hızla tespit edilir.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Özelleştirilebilir stratejiler</h3>
                  <p>
                    Risk profilini ve yatırım hedeflerini belirledikten sonra bunları
                    çok varlıklı platformumuzda işlem stratejini geliştirmek için kullanabilirsin.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Çeşitli varlıklara erişim</h3>
                  <p>
                    Kripto paralarda uzmanlaşmış olsak da ayrıca
                    döviz, hisse, diğer menkul kıymetler ve emtia işlemini destekliyoruz.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="register last">
        <div class="container">
          <div class="content-wrap bg">
            <div class="half left">
              <h2>Evden işlem yapabilir, piyasaları analiz edebilir ve pozisyonlarını takip edebilirsin.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Hemen kayıt ol';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Evden işlem yapabilir, piyasaları analiz edebilir ve pozisyonlarını takip edebilirsin.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Hemen kayıt ol" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
