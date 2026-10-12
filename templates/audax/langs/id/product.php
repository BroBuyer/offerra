<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Produk | ' . SITE_NAME . ' - Platform trading AI';
$page_description = SITE_NAME . ' : platform AI canggih untuk mata uang kripto ' . geo_in() . '.';
$page_canonical = page_url('product.php');
$active_page = 'product';
$page_css = ['produkt-mob.min.css', 'produkt-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <div class="content-wrap">
            <h1>
              Dengan <?= e(SITE_NAME) ?> kamu bisa pakai analitik digital untuk dorong pertumbuhan kekayaan yang kuat
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Berkat kecerdasan buatan kelas atas dan algoritma canggih kami, <?= e(SITE_NAME) ?>
              terus menganalisis pasar global. Ini memungkinkan platform kami mengidentifikasi dengan cepat
              peluang paling menguntungkan. Sekarang saatnya ambil langkah menuju sukses bersama
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Mulai sekarang</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Kami platform trading digital all-in-one kamu</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Manfaat 1"
                  />
                </div>
                <h3>Pengelolaan mata uang kripto</h3>
                <p>Kelola semua aset digital kamu di satu tempat dengan mudah.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-2.svg') ?>"
                    width="100"
                    height="100"
                    alt="Manfaat 2"
                  />
                </div>
                <h3>Akses informasi semua aset kamu dari satu platform dan antarmuka</h3>
                <p>Optimalkan pengelolaan keuangan kamu dengan gambaran yang jelas.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-3.svg') ?>"
                    width="100"
                    height="100"
                    alt="Manfaat 3"
                  />
                </div>
                <h3>Pasar modal</h3>
                <p>Selalu di depan pasar dengan data dan wawasan real-time.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-4.svg') ?>"
                    width="100"
                    height="100"
                    alt="Manfaat 4"
                  />
                </div>
                <h3>Akses seluler</h3>
                <p>
                  Situs seluler kami yang sepenuhnya dioptimalkan memungkinkan kamu lacak portofolio kapan saja, di mana saja.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-5.svg') ?>"
                    width="100"
                    height="100"
                    alt="Manfaat 5"
                  />
                </div>
                <h3>Statistik live</h3>
                <p>
                  Lacak imbal hasil dan analitik kamu dengan presisi tinggi, setiap detik
                  hari.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="row">
            <h2>
              Unduh aplikasi hari ini dan kelola keuangan kamu secara real-time dari smartphone.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Daftar</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Temukan analitik AI canggih platform <?= e(SITE_NAME) ?> dan antarmuka trading aset
            yang intuitif <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Fitur 1" />
              </div>
              <div class="text">
                <h4>Portofolio</h4>
                <p>
                  Perkuat profil keuangan kamu dengan strategi trading kami yang terbukti dan
                  inovatif.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Fitur 2" />
              </div>
              <div class="text">
                <h4>Analisis kripto</h4>
                <p>
                  Manfaatkan generasi terbaru kecerdasan buatan <?= e(SITE_NAME) ?> dan
                  algoritma pembelajaran mesin canggihnya untuk mengidentifikasi peluang menguntungkan dengan cepat.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Fitur 3" />
              </div>
              <div class="text">
                <h4>Pembelian mudah</h4>
                <p>
                  Kami tawarkan fitur canggih dan dukungan untuk cara mudah dan intuitif berdagang
                  mata uang kripto. Tanpa biaya tersembunyi dan eksekusi super cepat. Ini
                  peluang kamu untuk maksimalkan keuntungan trading dengan kekuatan AI!
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Fitur 4" />
              </div>
              <div class="text">
                <h4>Aset digital</h4>
                <p>
                  Ambil peluang untuk maksimalkan keuntungan dari perdagangan aset, baik
                  mata uang kripto maupun aset lain. Bangun portofolio terdiversifikasi dengan perangkat lunak kami
                  dan algoritma pembelajaran mesin. Sekarang saatnya ambil langkah itu dan mulai
                  perjalanan berdagang kamu!
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
