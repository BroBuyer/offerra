<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Pertanyaan umum | ' . SITE_NAME . ' - FAQ';
$page_description = 'Pertanyaan umum tentang ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';
$page_css = ['faq-mob.min.css', 'faq-desk.min.css'];
$page_js = ['faq.min.js'];
$page_has_form = true;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <h1>Pertanyaan umum</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Apa itu <?= e(SITE_NAME) ?> dan bagaimana cara kerjanya?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Banyak yang bertanya: &lsquo;Apa sebenarnya <?= e(SITE_NAME) ?>?&rsquo; Ini platform trading
                canggih bertenaga kecerdasan buatan (AI). Memakai AI <?= e(SITE_NAME) ?>
                mudah: daftar, setor uang ke akun kamu (min. <?= e(money_min()) ?>), dan platform
                mulai berdagang. Kapan saja kamu bisa setor lebih banyak atau tarik.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Berapa deposit minimum di <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Deposit minimum adalah <?= e(money_min()) ?>. Dengan jumlah ini kamu bisa coba platform dan
                mulai berdagang tanpa investasi besar. Kalau mau, kamu bisa setor tambahan
                atau tarik keuntungan kamu kapan saja.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Di pasar mana <?= e(SITE_NAME) ?> berdagang?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> aktif di berbagai pasar keuangan, termasuk mata uang kripto
                (Bitcoin, Ethereum, XRP, Litecoin, Dash, dan lainnya), saham, mata uang (Forex), dan
                aset keuangan lainnya.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Apakah <?= e(SITE_NAME) ?> terpercaya?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Pertanyaan apakah <?= e(SITE_NAME) ?> legal adalah wajar. Kami
                konfirmasi: <?= e(SITE_NAME) ?> adalah platform trading yang sepenuhnya legal dan terpercaya <?= e(geo_in()) ?>. Ini
                bukan scam atau penipuan. Keamanan dana pengguna kami adalah prioritas
                tertinggi kami, dan pencairan diproses dengan cepat (dalam 24&ndash;48 jam).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Bagaimana <?= e(SITE_NAME) ?> bekerja?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> memakai kecerdasan buatan (AI) canggih untuk menganalisis pasar secara real-
                time dan mengidentifikasi peluang trading yang menguntungkan. Banyak pengalaman positif dengan
                <?= e(SITE_NAME) ?> yang bisa kamu temukan online mengonfirmasi efektivitas pendekatan ini.
                Sistem mengelola modal kamu secara otomatis, jadi kamu bisa capai imbal hasil potensial
                meski tanpa pengetahuan pasar yang mendalam.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Bagaimana kami bisa bantu kamu?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Daftar';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
