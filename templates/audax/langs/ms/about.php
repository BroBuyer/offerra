<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Pasukan | ' . SITE_NAME . ' - Pasukan pakar kami';
$page_description = 'Kenali pasukan di sebalik ' . SITE_NAME . '.';
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
            <h1>Pasukan kami</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="Foto CEO" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Ketua Pegawai Eksekutif (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Foto rakan kongsi" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Rakan kongsi dan Naib Presiden Pembangunan Perniagaan</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="Foto CFO" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Rakan kongsi dan Ketua Pegawai Kewangan (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Foto rakan pengurusan" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Rakan pengurusan</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="Foto CTO" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Ketua Pegawai Teknologi (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Foto Pengarah Produk" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Pengarah Produk</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Sokongan mata wang kripto</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Perkhidmatan pelanggan dan sokongan</h3>
              <p>
                Pasukan di sebalik <?= e(SITE_NAME) ?> terdiri daripada profesional berpengalaman. Matlamat kami ialah
                cipta persekitaran selamat di mana pengguna boleh beli mata wang kripto seperti
                Bitcoin dengan selamat. Pengalaman profesional pasukan kami mengesahkan bahawa <?= e(SITE_NAME) ?>
                boleh dipercayai. Ada soalan? Pengurus akaun peribadi kamu sedia membantu.
              </p>
            </div>
            <div class="half right">
              <h3>Waktu sokongan</h3>
              <p>
                Jika ada masalah atau soalan, perkhidmatan pelanggan <?= e(SITE_NAME) ?> tersedia untuk kamu
                24/7. Jika kami tidak dapat jawab segera, pasukan kami akan menghubungi kamu
                secepat mungkin.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>Mereka mempercayai kami</h2>
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
