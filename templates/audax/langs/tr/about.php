<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ekip | ' . SITE_NAME . ' - Uzman ekibimiz';
$page_description = 'Arkasındaki ekiple tanış: ' . SITE_NAME . '.';
$page_canonical = page_url('about.php');
$active_page = 'about';
$page_css = ['team-mob.min.css', 'team-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <div class="content-wrap">
            <h1>Ekibimiz</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="CEO fotoğrafı" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Genel Müdür (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Ortak fotoğrafı" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Ortak ve İş Geliştirme Başkan Yardımcısı</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="CFO fotoğrafı" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Ortak ve Finans Direktörü (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Yönetici Ortak fotoğrafı" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Yönetici Ortak</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="CTO fotoğrafı" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Teknoloji Direktörü (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Ürün Direktörü fotoğrafı" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Ürün Direktörü</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Kripto desteği</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Müşteri hizmetleri ve destek</h3>
              <p>
                <?= e(SITE_NAME) ?> arkasındaki ekip deneyimli profesyonellerden oluşur. Amacımız
                kullanıcıların Bitcoin gibi kripto paraları güvenle satın alabileceği
                güvenli bir ortam oluşturmaktı. Ekibimizin profesyonel deneyimi <?= e(SITE_NAME) ?>'in
                güvenilir olduğunu doğrular. Soruların mı var? Kişisel hesap yöneticin hizmetinde.
              </p>
            </div>
            <div class="half right">
              <h3>Destek saatleri</h3>
              <p>
                Sorun veya sorularında <?= e(SITE_NAME) ?> müşteri hizmetleri
                7/24 hizmetinde. Hemen yanıt veremezsek ekibimiz en kısa sürede seninle
                iletişime geçer.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>Bize güveniyorlar</h2>
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
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
