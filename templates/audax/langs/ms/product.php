<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Produk | ' . SITE_NAME . ' - Platform dagangan AI';
$page_description = SITE_NAME . ' : platform AI termaju untuk mata wang kripto ' . geo_in() . '.';
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
              Dengan <?= e(SITE_NAME) ?> kamu boleh guna analitik digital untuk pacu pertumbuhan kekayaan yang kukuh
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Berkat kecerdasan buatan bertaraf tinggi dan algoritma termaju kami, <?= e(SITE_NAME) ?>
              sentiasa analisis pasaran global. Ini membolehkan platform kami mengenal pasti dengan pantas
              peluang paling menguntungkan. Sekarang masanya untuk langkah ke arah kejayaan bersama
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Mula sekarang</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Kami platform dagangan digital serba lengkap kamu</h2>
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
                <h3>Pengurusan mata wang kripto</h3>
                <p>Urus semua aset digital kamu di satu tempat dengan mudah.</p>
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
                <h3>Akses maklumat tentang semua aset kamu dari satu platform dan antara muka</h3>
                <p>Optimumkan pengurusan kewangan kamu dengan gambaran yang jelas.</p>
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
                <h3>Pasaran modal</h3>
                <p>Sentiasa mendahului pasaran dengan data dan pandangan masa nyata.</p>
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
                <h3>Akses mudah alih</h3>
                <p>
                  Laman mudah alih kami yang dioptimumkan sepenuhnya membolehkan kamu jejak portfolio bila-bila masa, di mana-mana.
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
                <h3>Statistik langsung</h3>
                <p>
                  Jejak pulangan dan analitik kamu dengan ketepatan tinggi, setiap saat
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
              Muat turun aplikasi hari ini dan urus kewangan kamu secara masa nyata dari telefon pintar.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Daftar</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Terokai analitik AI termaju platform <?= e(SITE_NAME) ?> dan antara muka dagangan aset
            yang intuitif <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Ciri 1" />
              </div>
              <div class="text">
                <h4>Portfolio</h4>
                <p>
                  Perkukuh profil kewangan kamu dengan strategi dagangan kami yang terbukti dan
                  inovatif.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Ciri 2" />
              </div>
              <div class="text">
                <h4>Analisis kripto</h4>
                <p>
                  Manfaatkan generasi terbaharu kecerdasan buatan <?= e(SITE_NAME) ?> dan
                  algoritma pembelajaran mesin termajunya untuk kenal pasti peluang menguntungkan dengan pantas.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Ciri 3" />
              </div>
              <div class="text">
                <h4>Pembelian mudah</h4>
                <p>
                  Kami tawarkan ciri termaju dan sokongan untuk cara mudah dan intuitif berdagang
                  mata wang kripto. Tiada yuran tersembunyi dan pelaksanaan sangat pantas. Ini
                  peluang kamu untuk maksimumkan keuntungan dagangan dengan kuasa AI!
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Ciri 4" />
              </div>
              <div class="text">
                <h4>Aset digital</h4>
                <p>
                  Ambil peluang untuk maksimumkan keuntungan daripada dagangan aset, sama ada
                  mata wang kripto atau aset lain. Bina portfolio terpelbagai dengan perisian kami
                  dan algoritma pembelajaran mesin. Sekarang masanya untuk ambil langkah itu dan mula
                  perjalanan berdagang kamu!
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
