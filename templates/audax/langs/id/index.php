<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Investasi AI cerdas ' . geo_in();
$page_description = 'Perdagangan otomatis ' . geo_in() . '. Mulai dengan ' . money_min() . ' memakai teknologi AI kami. Aman, transparan, dan mudah.';
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
              <h1>Platform <?= e(SITE_NAME) ?></h1>
              <p>
                Apa yang membuat <?= e(SITE_NAME) ?> unik? Ini peluang kamu untuk berinvestasi lebih cerdas
                <?= e(geo_in()) ?>. Platform trading bertenaga AI kami yang terpercaya membantu kamu membuat keputusan yang tepat
                dan kelola risiko dengan yakin. Temukan kemungkinan AI <?= e(SITE_NAME) ?>.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Dinilai 4,7 bintang oleh lebih dari 2.804 pengguna yang puas</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Dinilai 4,7 dari 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Daftar di <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Daftar';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Dengan memasukkan informasi pribadi kamu dan mengklik tombol "Daftar", kamu
                    mengonfirmasi bahwa kamu setuju dengan
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">Kebijakan Privasi</a> dan
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">Syarat Penggunaan</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Metode pembayaran" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Dinilai 4,7 bintang oleh lebih dari 2.804 pengguna yang puas</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Dinilai 4,7 dari 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Kalkulator keuntungan">
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
          <h2 class="calc-widget__title">Hitung kemungkinan keuntungan</h2>
          <p class="calc-widget__subtitle">
            Pilih jumlah dan durasi investasi untuk lihat potensi keuntungan kamu
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Setoran kamu:</label>
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
                <label class="calc-widget__label" for="calc-days">Periode investasi:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>hari</span>
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
                  <span>Dari 1 hari</span>
                  <span>Hingga 3 bulan</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Kamu bisa dapat</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Keuntungan</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Pendapatan</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Minta perhitungan pribadi
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Tutup">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Tinggalkan kontak kamu dan spesialis kami akan menghubungi kamu
              secepatnya.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Daftar';
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
                Akses kamu <?= e(geo_from()) ?> ke platform trading kripto terkemuka dunia.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Ikon kartu 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> memakai kecerdasan buatan dan pembelajaran mesin canggih untuk
                    mengidentifikasi peluang baru di pasar keuangan.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Ikon kartu 2" />
                </div>
                <div class="text">
                  <p>
                    Investor aset kripto <?= e(geo_in()) ?> mendapat akses ke bursa terbesar di
                    sektor ini dan bisa berdagang mata uang terkemuka seperti Bitcoin dan Ethereum, serta
                    berbagai altcoin dan stablecoin.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Mitra terpercaya kami</h2>
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

      <section class="advantages cards-img">
        <div class="container">
          <h2>Mengapa pilih <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Ikon keunggulan 1" />
              </div>
              <div class="text">
                <h3>Keamanan <?= e(geo_in()) ?></h3>
                <p>
                  Sebagai platform terpercaya, kami utamakan keamanan. Kami pakai SSL,
                  enkripsi tingkat bank, dan 2FA agar <?= e(SITE_NAME) ?> andal dan data kamu
                  terlindungi.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Ikon keunggulan 2" />
              </div>
              <div class="text">
                <h3>Algoritma AI yang kuat</h3>
                <p>
                  Bot fleksibel kami memakai strategi AI canggih dan menjalankannya sendiri. Kamu
                  atur pendekatan dan tetap kendali penuh atas tingkat risiko, pasar, dan tujuan, supaya
                  kamu bisa fokus pada gambaran besar.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Ikon keunggulan 3" />
              </div>
              <div class="text">
                <h3>Biaya transparan. Tanpa biaya tersembunyi.</h3>
                <p>
                  Semua biaya kami transparan, dan kami tidak pernah menagih investor <?= e(geo_in()) ?> untuk memakai
                  <?= e(SITE_NAME) ?>. Uang yang kamu setor untuk berdagang sepenuhnya milik kamu dan kamu bisa pakai
                  sesuai keinginan. Kami tidak menahan apa pun. Mulai dengan hanya <?= e(money_min()) ?> dan tetap kendali penuh
                  atas investasi kamu.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Ikon keunggulan 4" />
              </div>
              <div class="text">
                <h3>Antarmuka yang intuitif</h3>
                <p>
                  Dasbor kami yang intuitif dan sederhana menggabungkan fungsi, kecanggihan, dan
                  kemudahan pakai untuk pemula dan trader berpengalaman.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Bagaimana <?= e(SITE_NAME) ?> bekerja?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikon daftar 1" />
              <p>
                Perangkat lunak eksklusif kami memantau beberapa platform trading sekaligus dan
                mengidentifikasi selisih harga yang bisa dimanfaatkan.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikon daftar 2" />
              <p>
                <?= e(SITE_NAME) ?> beli murah di satu pasar dan jual lebih mahal di pasar lain,
                memanfaatkan peluang arbitrase. Pendekatan ini bisa menghasilkan keuntungan dengan
                mengumpulkan imbal hasil dari perubahan harga kecil.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikon daftar 3" />
              <p>Lihat bagaimana <?= e(SITE_NAME) ?> bisa tingkatkan pengalaman berdagang kamu.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Daftar di <?= e(SITE_NAME) ?> dan mari bentuk masa depan keuangan <?= e(geo_in()) ?> bersama!
              </h2>
              <p>
                <?= e(SITE_NAME) ?> tawarkan berbagai alat untuk berdagang aset kripto <?= e(geo_in()) ?>. Platform ini
                mengintegrasikan platform bursa global utama dan beri akses ke banyak
                mata uang kripto, dari yang terkemuka seperti Bitcoin hingga yang lain seperti XRP. Selain itu, kamu
                bisa untung dari fluktuasi harga.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Daftar';
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
              <h3>Budi, 37, Jakarta</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Rating 1"
                />
              </div>
              <p class="review-text">
                Saya mulai dengan <?= e(money_min()) ?>, dan sekarang saya tarik <?= e(currency_symbol() . '2,000') ?> per bulan!
              </p>
            </div>
            <div class="review">
              <h3>Sari, 42, Surabaya</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Rating 2"
                />
              </div>
              <p class="review-text">Platform sederhana, semuanya transparan dan praktis.</p>
            </div>
            <div class="review">
              <h3>Andi, 45, Bandung</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Rating 3"
                />
              </div>
              <p class="review-text">Solusi terbaik untuk penghasilan pasif.</p>
            </div>
            <div class="review">
              <h3>Dewi, 34, Yogyakarta</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Rating 4"
                />
              </div>
              <p class="review-text">Keuntungan stabil, meski sedang liburan.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Penawaran mata uang kripto di <?= e(SITE_NAME) ?></h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Manfaat 1"
                />
                <h3>Kunci trading kripto</h3>
                <p>
                  Perangkat lunak canggih kami menjadi fondasi sistem trading kami. Dirancang
                  untuk memanfaatkan selisih harga kecil antar bursa mata uang kripto
                  utama.
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
                  alt="Manfaat 2"
                />
                <h3>Perdagangan aset global</h3>
                <p>
                  Harga saham dan aset lain terus berfluktuasi; <?= e(SITE_NAME) ?> sediakan
                  alat untuk bereaksi cepat terhadap pergerakan pasar dan tingkatkan peluang imbal hasil
                  yang solid.
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
                  alt="Manfaat 3"
                />
                <h3>Trading forex</h3>
                <p>
                  Nilai tukar terus berubah dan ciptakan peluang trading. <?= e(SITE_NAME) ?>
                  bantu kamu untung bahkan dari pergerakan terkecil di pasar mata uang.
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
                  alt="Manfaat 4"
                />
                <h3><?= e(SITE_NAME) ?> dan Bitcoin</h3>
                <p>
                  Bitcoin tetap pemimpin pasar dan mata uang kripto paling terlihat serta
                  stabil secara finansial. Dengan mengenali dan merespons volatilitas pasar secara sistematis,
                  <?= e(SITE_NAME) ?> memudahkan kamu capai imbal hasil yang konsisten.
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
              <h2>Informasi platform</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Privasi</h3>
                  <p><?= e(SITE_NAME) ?> mematuhi regulasi privasi yang berlaku <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Aset</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash, dan mata uang kripto utama lainnya.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Jenis platform</h3>
                  <p>
                    <?= e(SITE_NAME) ?> tawarkan investor <?= e(geo_in()) ?> peluang untuk untung dari
                    fluktuasi harga mata uang kripto utama, termasuk altcoin seperti XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Negara</h3>
                  <p>Platform kami tersedia secara global, termasuk <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Opsi deposit</h3>
                  <p>Kartu kredit, PayPal, dan transfer bank.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Biaya</h3>
                  <p>Akses ke <?= e(SITE_NAME) ?> gratis <?= e(geo_from()) ?>.</p>
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
              <h2>Apakah <?= e(SITE_NAME) ?> terpercaya?</h2>
              <p>
                <?= e(SITE_NAME) ?> bekerja sama dengan broker kelas satu yang sangat terpercaya dan
                berpengalaman. Kami terapkan langkah keamanan tingkat bank, seperti enkripsi TLS/SSL
                dan verifikasi dua faktor (2FA), untuk melindungi aset dan data kamu. Struktur
                harga kami sepenuhnya transparan, tanpa biaya tersembunyi. Kami mematuhi
                regulasi yang berlaku.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Grafik keandalan" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Sistem kecerdasan buatan dan pembelajaran mesin kami menghasilkan analisis pasar real-time
                dan tawarkan wawasan trading praktis untuk mengoptimalkan hasil kamu.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Copy Trading</h3>
                  <p>
                    Trader terbaik ada alasannya. Dengan <?= e(SITE_NAME) ?> kamu bisa ikuti
                    dan salin trade mereka untuk manfaatkan pengalaman dan strategi mereka.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Saham fraksional</h3>
                  <p>
                    Dengan mengembangkan portofolio, kamu bisa akses aset berkualitas tinggi meski dengan
                    modal terbatas.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Materi edukasi</h3>
                  <p>
                    Untuk tingkatkan skill trading kamu, kami tawarkan materi edukasi: tutorial,
                    webinar, dan panduan.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Aplikasi seluler</h3>
                  <p>Berdagang kapan saja, di mana saja.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Dukungan 24/7</h3>
                  <p>Layanan pelanggan kami tersedia 24 jam sehari, 7 hari seminggu.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Trading bertenaga AI</h3>
                  <p>
                    Berkat algoritma kecerdasan buatan dan pembelajaran mesin canggih kami,
                    <?= e(SITE_NAME) ?> terus menganalisis data pasar terbaru. Ini memungkinkan peluang pasar
                    dengan potensi imbal hasil tertinggi diidentifikasi dengan cepat.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Strategi yang bisa disesuaikan</h3>
                  <p>
                    Setelah kamu tentukan profil risiko dan tujuan investasi, kamu bisa pakai untuk
                    perbaiki strategi trading kamu di platform multi-aset kami.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Akses ke berbagai aset</h3>
                  <p>
                    Meskipun kami spesialis mata uang kripto, kami juga dukung perdagangan
                    mata uang, saham, sekuritas lain, dan komoditas.
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
              <h2>Kamu bisa berdagang dari rumah, analisis pasar, dan lacak posisi kamu.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Daftar';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Kamu bisa berdagang dari rumah, analisis pasar, dan lacak posisi kamu.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Daftar sekarang" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
