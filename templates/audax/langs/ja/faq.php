<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'よくある質問 | ' . SITE_NAME . ' - FAQ';
$page_description = 'よくある質問：' . SITE_NAME . '.';
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
          <h1>よくある質問</h1>
          <div class="faqs-wrap">
            <article class="faq">
              <div class="question">
                <h2><?= e(SITE_NAME) ?>とは何ですか。どのように機能しますか。</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                「<?= e(SITE_NAME) ?>とは具体的に何ですか」とよく聞かれます。人工知能（AI）を活用した
                先進的な取引プラットフォームです。<?= e(SITE_NAME) ?>のAIの使い方は
                シンプルです。登録し、口座に入金（最低<?= e(money_min()) ?>）すれば、プラットフォームが
                取引を開始します。追加入金や出金はいつでも可能です。
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2><?= e(SITE_NAME) ?>の最低入金額はいくらですか。</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                最低入金額は<?= e(money_min()) ?>です。この金額でプラットフォームを試し、
                大きな資金がなくても取引を始められます。ご希望に応じて、いつでも追加
                入金や利益の出金が可能です。
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2><?= e(SITE_NAME) ?>はどの市場で取引しますか。</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?>は、暗号資産（Bitcoin、Ethereum、XRP、Litecoin、Dashなど）、
                株式、通貨（外国為替）、その他の金融資産など、さまざまな金融市場で
                活動しています。
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2><?= e(SITE_NAME) ?>は信頼できますか？</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?>が正当かどうかという疑問は当然です。当社は
                確認します。<?= e(SITE_NAME) ?>は<?= e(geo_in()) ?>完全に適法で信頼できる取引プラットフォームです。
                詐欺ではありません。ユーザー資金の安全は最優先事項であり、
                出金は迅速に処理されます（24&ndash;48時間以内）。
              </p>
            </article>
            <article class="faq">
              <div class="question">
                <h2><?= e(SITE_NAME) ?>の仕組み</h2>
                <span class="arrow"
                  ><img src="<?= asset('static/images/lang-arrow.svg') ?>" width="12px" height="7px" alt=""
                /></span>
              </div>
              <p class="answer" style="display: none">
                <?= e(SITE_NAME) ?>は高度な人工知能（AI）で市場をリアルタイムに分析し、
                収益が見込める取引機会を見極めます。オンラインで確認できる
                <?= e(SITE_NAME) ?>の多くの好評な体験談が、この手法の有効性を裏付けています。
                システムが資金を自動管理するため、深い市場知識がなくても
                潜在的なリターンを目指せます。
              </p>
            </article>
          </div>
        </div>
      </section>

      <section class="register no-bg" id="form">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>どのようにお手伝いできますか。</h2>
            </div>
            <div id="registration-form" class="leadform bg-elem">
              <?php
  $form_id = 'WkaAJg';
  $form_wrap_class = 'LPdKdAq newRegForm';
  $form_field_classes = ['NxswdkBN IIidsgHFo', 'NxswdkBN IIidsgHFo', 'NxswdkBN goEjtnDw', 'NxswdkBN NUPoCp', 'NxswdkBN fsUIiNNMa'];
  $form_submit = '今すぐ登録';
  $form_phone_id = 'LkqnyQV';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
