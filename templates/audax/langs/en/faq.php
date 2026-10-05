<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Frequently asked questions | ' . SITE_NAME . ' - FAQ';
$page_description = 'Frequently asked questions about ' . SITE_NAME . '.';
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
          <h1>Frequently asked questions</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2>What is <?= e(SITE_NAME) ?> and how does it work?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                Many people ask: &lsquo;What exactly is <?= e(SITE_NAME) ?>?&rsquo; It is an advanced
                trading platform powered by artificial intelligence (AI). Using <?= e(SITE_NAME) ?> AI is
                simple: register, deposit money into your account (min. <?= e(money_min()) ?>), and the platform
                starts trading. At any time you can deposit more money or withdraw it.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>What is the minimum deposit on <?= e(SITE_NAME) ?>?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                The minimum deposit is <?= e(money_min()) ?>. With this amount you can try the platform and
                start trading without large investments. If you wish, you can deposit additional
                funds or withdraw your profits at any time.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Which markets does <?= e(SITE_NAME) ?> trade on?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> is active on various financial markets, including cryptocurrencies
                (Bitcoin, Ethereum, XRP, Litecoin, Dash, and more), stocks, currencies (Forex), and
                other financial assets.
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>Is <?= e(SITE_NAME) ?> reliable?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                The question of whether <?= e(SITE_NAME) ?> is legitimate is entirely justified. We
                confirm: <?= e(SITE_NAME) ?> is a fully legal and reliable trading platform in <?= e(geo_country_name()) ?>. It
                is not a scam or fraud. The security of our users&rsquo; funds is our highest
                priority, and payouts are processed quickly (within 24&ndash;48 hours).
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2>How does <?= e(SITE_NAME) ?> work?</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?> uses advanced artificial intelligence (AI) to analyze markets in real
                time and identify profitable trading opportunities. Many positive experiences with
                <?= e(SITE_NAME) ?> that you can find online confirm the effectiveness of this approach.
                The system automatically manages your capital, so you can achieve potential returns
                even without deep market knowledge.
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>How can we help you?</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = 'Join Now';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
