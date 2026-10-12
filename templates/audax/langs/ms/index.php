<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Pelaburan AI pintar ' . geo_in();
$page_description = 'Dagangan automatik ' . geo_in() . '. Mula dengan ' . money_min() . ' menggunakan teknologi AI kami. Selamat, telus dan mudah.';
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
                Apa yang membezakan <?= e(SITE_NAME) ?>? Ini peluang kamu untuk melabur lebih bijak
                <?= e(geo_in()) ?>. Platform dagangan berkuasa AI kami yang boleh dipercayai membantu kamu membuat keputusan yang tepat
                dan urus risiko dengan yakin. Terokai kemungkinan AI <?= e(SITE_NAME) ?>.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Dinilai 4.7 bintang oleh lebih 2,804 pengguna yang berpuas hati</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Dinilai 4.7 daripada 5"
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
                    Dengan memasukkan maklumat peribadi kamu dan mengklik butang "Daftar", kamu
                    mengesahkan bahawa kamu bersetuju dengan
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">Dasar Privasi</a> dan
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">Syarat Penggunaan</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Kaedah pembayaran" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Dinilai 4.7 bintang oleh lebih 2,804 pengguna yang berpuas hati</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Dinilai 4.7 daripada 5"
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
          <h2 class="calc-widget__title">Kira keuntungan yang mungkin</h2>
          <p class="calc-widget__subtitle">
            Pilih jumlah dan tempoh pelaburan untuk lihat potensi keuntungan kamu
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">Deposit kamu:</label>
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
                <label class="calc-widget__label" for="calc-days">Tempoh pelaburan:</label>
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
                  <span>Sehingga 3 bulan</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Kamu boleh peroleh</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Keuntungan</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Hasil</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Minta pengiraan peribadi
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
              Tinggalkan butiran hubungan kamu dan pakar kami akan menghubungi kamu
              secepat mungkin.
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
                Akses kamu <?= e(geo_from()) ?> ke platform dagangan kripto terkemuka dunia.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Ikon kad 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?> menggunakan kecerdasan buatan dan pembelajaran mesin termaju untuk
                    mengenal pasti peluang baharu di pasaran kewangan.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Ikon kad 2" />
                </div>
                <div class="text">
                  <p>
                    Pelabur aset kripto <?= e(geo_in()) ?> mendapat akses ke bursa terbesar dalam
                    sektor ini dan boleh berdagang mata wang terkemuka seperti Bitcoin dan Ethereum, serta
                    pelbagai altcoin dan stablecoin.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Rakan kongsi dipercayai kami</h2>
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
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Ikon kelebihan 1" />
              </div>
              <div class="text">
                <h3>Keselamatan <?= e(geo_in()) ?></h3>
                <p>
                  Sebagai platform yang bereputasi, kami utamakan keselamatan. Kami guna SSL,
                  penyulitan tahap bank dan 2FA supaya <?= e(SITE_NAME) ?> boleh dipercayai dan data kamu
                  dilindungi.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Ikon kelebihan 2" />
              </div>
              <div class="text">
                <h3>Algoritma AI yang berkuasa</h3>
                <p>
                  Bot kami yang mudah suai guna strategi AI termaju dan laksanakannya sendiri. Kamu
                  tetapkan pendekatan dan kekal kawal penuh tahap risiko, pasaran dan matlamat, supaya
                  kamu boleh fokus pada gambaran besar.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Ikon kelebihan 3" />
              </div>
              <div class="text">
                <h3>Yuran telus. Tiada kos tersembunyi.</h3>
                <p>
                  Semua yuran kami telus, dan kami tidak pernah caj pelabur <?= e(geo_in()) ?> untuk guna
                  <?= e(SITE_NAME) ?>. Wang yang kamu deposit untuk berdagang adalah milik kamu sepenuhnya dan kamu boleh guna
                  seperti yang kamu mahu. Kami tidak tahan apa-apa. Mula dengan hanya <?= e(money_min()) ?> dan kekal kawal penuh
                  ke atas pelaburan kamu.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Ikon kelebihan 4" />
              </div>
              <div class="text">
                <h3>Antara muka yang intuitif</h3>
                <p>
                  Papan pemuka kami yang intuitif dan ringkas menggabungkan fungsi, kecanggihan dan
                  kemudahan guna untuk pemula dan pedagang berpengalaman.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Bagaimana <?= e(SITE_NAME) ?> berfungsi?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikon senarai 1" />
              <p>
                Perisian eksklusif kami memantau pelbagai platform dagangan serentak dan
                mengenal pasti perbezaan harga yang boleh dimanfaatkan.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikon senarai 2" />
              <p>
                <?= e(SITE_NAME) ?> beli murah di satu pasaran dan jual lebih mahal di pasaran lain,
                dengan memanfaatkan peluang arbitrage. Pendekatan ini boleh jana keuntungan dengan
                mengumpul pulangan daripada perubahan harga kecil.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ikon senarai 3" />
              <p>Lihat bagaimana <?= e(SITE_NAME) ?> boleh tingkatkan pengalaman berdagang kamu.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Daftar di <?= e(SITE_NAME) ?> dan jom bentuk masa depan kewangan <?= e(geo_in()) ?> bersama!
              </h2>
              <p>
                <?= e(SITE_NAME) ?> tawarkan pelbagai alat untuk berdagang aset kripto <?= e(geo_in()) ?>. Ia
                mengintegrasikan platform bursa global utama dan beri akses ke pelbagai
                mata wang kripto, dari yang terkemuka seperti Bitcoin hingga yang lain seperti XRP. Selain itu, ia
                membolehkan kamu untung daripada turun naik harga.
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
              <h3>Ahmad, 37, Kuala Lumpur</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Penilaian 1"
                />
              </div>
              <p class="review-text">
                Saya mula dengan <?= e(money_min()) ?>, dan kini saya keluarkan <?= e(currency_symbol() . '2,000') ?> sebulan!
              </p>
            </div>
            <div class="review">
              <h3>Siti, 42, Pulau Pinang</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Penilaian 2"
                />
              </div>
              <p class="review-text">Platform mudah, semuanya telus dan praktikal.</p>
            </div>
            <div class="review">
              <h3>Amir, 45, Johor Bahru</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Penilaian 3"
                />
              </div>
              <p class="review-text">Penyelesaian terbaik untuk pendapatan pasif.</p>
            </div>
            <div class="review">
              <h3>Nur, 34, Melaka</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Penilaian 4"
                />
              </div>
              <p class="review-text">Keuntungan stabil, walaupun semasa cuti.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Tawaran mata wang kripto di <?= e(SITE_NAME) ?></h2>
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
                <h3>Kunci dagangan kripto</h3>
                <p>
                  Perisian canggih kami menjadi asas sistem dagangan kami. Ia
                  direka untuk manfaatkan perbezaan harga kecil antara bursa mata wang kripto
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
                <h3>Dagangan aset global</h3>
                <p>
                  Harga saham dan aset lain sentiasa berubah; <?= e(SITE_NAME) ?> sediakan
                  alat untuk bertindak pantas terhadap pergerakan pasaran dan tingkatkan peluang pulangan
                  yang kukuh.
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
                <h3>Dagangan forex</h3>
                <p>
                  Kadar pertukaran sentiasa berubah dan cipta peluang dagangan. <?= e(SITE_NAME) ?>
                  membantu kamu untung walaupun daripada pergerakan terkecil di pasaran mata wang.
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
                  Bitcoin kekal sebagai peneraju pasaran dan mata wang kripto yang paling ketara serta
                  stabil dari segi kewangan. Dengan mengenal pasti dan bertindak balas secara sistematik terhadap turun naik pasaran,
                  <?= e(SITE_NAME) ?> memudahkan kamu capai pulangan yang konsisten.
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
              <h2>Maklumat platform</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Privasi</h3>
                  <p><?= e(SITE_NAME) ?> mematuhi peraturan privasi yang berkenaan <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Aset</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash dan mata wang kripto utama yang lain.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Jenis platform</h3>
                  <p>
                    <?= e(SITE_NAME) ?> tawarkan pelabur <?= e(geo_in()) ?> peluang untuk untung daripada
                    turun naik harga mata wang kripto utama, termasuk altcoin seperti XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Negara</h3>
                  <p>Platform kami tersedia di seluruh dunia, termasuk <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Pilihan deposit</h3>
                  <p>Kad kredit, PayPal dan pindahan bank.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Kos</h3>
                  <p>Akses ke <?= e(SITE_NAME) ?> adalah percuma <?= e(geo_from()) ?>.</p>
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
              <h2>Adakah <?= e(SITE_NAME) ?> boleh dipercayai?</h2>
              <p>
                <?= e(SITE_NAME) ?> bekerjasama dengan broker bertaraf tinggi yang sangat boleh dipercayai dan
                berpengalaman. Kami laksana langkah keselamatan tahap bank, seperti penyulitan TLS/SSL
                dan pengesahan dua faktor (2FA), untuk lindungi aset dan data kamu. Struktur
                harga kami sepenuhnya telus, tanpa kos tersembunyi. Kami mematuhi
                peraturan yang berkenaan.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Carta kebolehpercayaan" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Sistem kecerdasan buatan dan pembelajaran mesin kami jana analisis pasaran masa nyata
                dan tawarkan pandangan dagangan praktikal untuk optimumkan keputusan kamu.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Copy Trading</h3>
                  <p>
                    Pedagang terbaik adalah terbaik atas sebab tertentu. Dengan <?= e(SITE_NAME) ?> kamu boleh ikut
                    dan salin dagangan mereka untuk manfaatkan pengalaman dan strategi mereka.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Saham pecahan</h3>
                  <p>
                    Dengan kembangkan portfolio kamu, kamu boleh akses aset berkualiti tinggi walaupun dengan
                    modal terhad.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Sumber pendidikan</h3>
                  <p>
                    Untuk tingkatkan kemahiran berdagang kamu, kami tawarkan sumber pendidikan: tutorial,
                    webinar dan panduan.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Aplikasi mudah alih</h3>
                  <p>Berdagang bila-bila masa, di mana-mana.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Sokongan 24/7</h3>
                  <p>Perkhidmatan pelanggan kami tersedia 24 jam sehari, 7 hari seminggu.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Dagangan berkuasa AI</h3>
                  <p>
                    Berkat algoritma kecerdasan buatan dan pembelajaran mesin termaju kami,
                    <?= e(SITE_NAME) ?> sentiasa analisis data pasaran terkini. Ini membolehkan peluang pasaran
                    dengan potensi pulangan tertinggi dikenal pasti dengan pantas.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Strategi boleh suai</h3>
                  <p>
                    Setelah kamu tetapkan profil risiko dan matlamat pelaburan, kamu boleh guna ia untuk
                    perbaiki strategi dagangan kamu di platform pelbagai aset kami.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Akses ke pelbagai aset</h3>
                  <p>
                    Walaupun kami khusus dalam mata wang kripto, kami juga sokong dagangan
                    mata wang, saham, sekuriti lain dan komoditi.
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
              <h2>Kamu boleh berdagang dari rumah, analisis pasaran dan jejak kedudukan kamu.</h2>
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
              <h2>Kamu boleh berdagang dari rumah, analisis pasaran dan jejak kedudukan kamu.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Daftar sekarang" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
