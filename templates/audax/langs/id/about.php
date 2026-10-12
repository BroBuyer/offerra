<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Tim | ' . SITE_NAME . ' - Tim ahli kami';
$page_description = 'Kenali tim di balik ' . SITE_NAME . '.';
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
            <h1>Tim kami</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="Foto CEO" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Chief Executive Officer (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Foto mitra" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Mitra dan Wakil Presiden Pengembangan Bisnis</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="Foto CFO" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Mitra dan Chief Financial Officer (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Foto Managing Partner" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Managing Partner</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="Foto CTO" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Chief Technology Officer (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Foto Direktur Produk" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Direktur Produk</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Dukungan mata uang kripto</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Layanan pelanggan dan dukungan</h3>
              <p>
                Tim di balik <?= e(SITE_NAME) ?> terdiri dari profesional berpengalaman. Tujuan kami adalah
                ciptakan lingkungan aman di mana pengguna bisa beli mata uang kripto seperti
                Bitcoin dengan aman. Pengalaman profesional tim kami mengonfirmasi bahwa <?= e(SITE_NAME) ?>
                terpercaya. Ada pertanyaan? Manajer akun pribadi kamu siap membantu.
              </p>
            </div>
            <div class="half right">
              <h3>Jam dukungan</h3>
              <p>
                Jika ada masalah atau pertanyaan, layanan pelanggan <?= e(SITE_NAME) ?> tersedia untuk kamu
                24/7. Jika kami tidak bisa jawab segera, tim kami akan menghubungi kamu
                secepatnya.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>Mereka percaya pada kami</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Logo Crypto.com" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Logo Binance" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="Logo CoinDesk" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="Logo TradingView" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Logo Deloitte" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Logo Ledger" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Logo Decrypt" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Logo Nansen" />
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
