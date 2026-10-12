<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Soalan lazim | ' . SITE_NAME . ' - FAQ';
$page_description = 'Soalan lazim tentang ' . SITE_NAME . '.';
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
          <h1>Soalan lazim</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>Apa itu <?= e(SITE_NAME) ?> dan bagaimana ia berfungsi?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Ramai bertanya: &lsquo;Apa sebenarnya <?= e(SITE_NAME) ?>?&rsquo; Ia ialah platform dagangan
                termaju berkuasa kecerdasan buatan (AI). Menggunakan AI <?= e(SITE_NAME) ?> adalah
                mudah: daftar, depositkan wang ke akaun kamu (min. <?= e(money_min()) ?>), dan platform
                mula berdagang. Bila-bila masa kamu boleh deposit lebih banyak wang atau keluarkannya.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Berapakah deposit minimum di <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Deposit minimum ialah <?= e(money_min()) ?>. Dengan jumlah ini kamu boleh cuba platform dan
                mula berdagang tanpa pelaburan besar. Jika mahu, kamu boleh deposit tambahan
                atau keluarkan keuntungan kamu bila-bila masa.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Pasaran manakah <?= e(SITE_NAME) ?> berdagang?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> aktif di pelbagai pasaran kewangan, termasuk mata wang kripto
                (Bitcoin, Ethereum, XRP, Litecoin, Dash dan lain-lain), saham, mata wang (Forex) dan
                aset kewangan yang lain.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Adakah <?= e(SITE_NAME) ?> boleh dipercayai?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Soalan sama ada <?= e(SITE_NAME) ?> sah adalah wajar. Kami
                sahkan: <?= e(SITE_NAME) ?> ialah platform dagangan yang sah sepenuhnya dan boleh dipercayai <?= e(geo_in()) ?>. Ia
                bukan penipuan. Keselamatan wang pengguna kami ialah keutamaan
                tertinggi kami, dan pengeluaran diproses dengan pantas (dalam 24&ndash;48 jam).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Bagaimana <?= e(SITE_NAME) ?> berfungsi?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> menggunakan kecerdasan buatan (AI) termaju untuk analisis pasaran secara masa
                nyata dan kenal pasti peluang dagangan yang menguntungkan. Banyak pengalaman positif dengan
                <?= e(SITE_NAME) ?> yang kamu boleh jumpa dalam talian mengesahkan keberkesanan pendekatan ini.
                Sistem mengurus modal kamu secara automatik, jadi kamu boleh capai pulangan berpotensi
                walaupun tanpa pengetahuan pasaran yang mendalam.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Bagaimana kami boleh bantu kamu?</h2>
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
