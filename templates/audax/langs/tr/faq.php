<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Sık sorulan sorular | ' . SITE_NAME . ' - FAQ';
$page_description = 'Hakkında sık sorulan sorular: ' . SITE_NAME . '.';
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
          <h1>Sık sorulan sorular</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2><?= e(SITE_NAME) ?> nedir ve nasıl çalışır?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Birçok kişi soruyor: «<?= e(SITE_NAME) ?> tam olarak nedir?» Yapay zekâ (AI) destekli gelişmiş bir
                işlem platformudur. <?= e(SITE_NAME) ?> yapay zekâsını kullanmak
                basit: kayıt ol, hesabına para yatır (min. <?= e(money_min()) ?>), platform
                işleme başlar. İstediğin zaman daha fazla yatırabilir veya çekebilirsin.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2><?= e(SITE_NAME) ?>'de minimum yatırım nedir?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Minimum yatırım <?= e(money_min()) ?>. Bu tutarla platformu deneyebilir ve
                büyük sermaye olmadan işleme başlayabilirsin. İstersen istediğin zaman ek para
                yatırabilir veya kârını çekebilirsin.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2><?= e(SITE_NAME) ?> hangi piyasalarda işlem yapar?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> kripto paralar dahil çeşitli finans piyasalarında aktiftir
                (Bitcoin, Ethereum, XRP, Litecoin, Dash ve daha fazlası), hisseler, dövizler (Forex) ve
                diğer finansal varlıklar.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2><?= e(SITE_NAME) ?> güvenilir mi?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?>'in güvenilir olup olmadığı sorusu tamamen haklı. Biz
                doğruluyoruz: <?= e(SITE_NAME) ?> <?= e(geo_in()) ?> tamamen yasal ve güvenilir bir işlem platformudur.
                Dolandırıcılık değildir. Kullanıcılarımızın fonlarının güvenliği en yüksek
                önceliğimizdir; ödemeler hızla işlenir (24&ndash;48 saat içinde).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2><?= e(SITE_NAME) ?> nasıl çalışır?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> piyasaları gerçek zamanlı analiz etmek ve kârlı işlem fırsatlarını tespit etmek için
                gelişmiş yapay zekâ (AI) kullanır. Çevrimiçi bulabileceğin birçok olumlu <?= e(SITE_NAME) ?> deneyimi
                bu yaklaşımın etkinliğini doğrular.
                Sistem sermayeni otomatik yönetir; derin piyasa bilgisi olmadan bile potansiyel getiri
                hedefleyebilirsin.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>Sana nasıl yardımcı olabiliriz?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Hemen kayıt ol';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
