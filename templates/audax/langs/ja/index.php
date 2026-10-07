<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — AIで賢く投資 ' . geo_in();
$page_description = geo_in() . 'の自動取引。AI技術で ' . money_min() . ' から始められます。安全・透明・シンプル。';
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
              <h1><?= e(SITE_NAME) ?>プラットフォーム</h1>
              <p>
                <?= e(SITE_NAME) ?>の強みは何でしょうか。<?= e(geo_in()) ?>、より賢い投資を始める機会です。 信頼できるAI取引プラットフォームが、根拠のある判断を支え、
                リスクを自信を持って管理できます。<?= e(SITE_NAME) ?>のAIが開く可能性をご覧ください。
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>満足した2,804名以上のユーザーから4.7の評価</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="5点満点中4.7"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2><?= e(SITE_NAME) ?>に登録する</h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = '今すぐ登録';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    お客様情報をご入力のうえ「今すぐ登録」をクリックすると、
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">プライバシーポリシー</a>および
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">利用規約</a>に同意したものとみなされます。
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="お支払い方法" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>満足した2,804名以上のユーザーから4.7の評価</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="5点満点中4.7"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="利益シミュレーター">
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
          <h2 class="calc-widget__title">想定利益を計算する</h2>
          <p class="calc-widget__subtitle">
            金額と期間を選んで、想定利益を確認できます
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">ご入金額：</label>
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
                <label class="calc-widget__label" for="calc-days">運用期間：</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>日</span>
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
                  <span>最短1日</span>
                  <span>最長3か月</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">獲得見込み</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">利回り</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">収益</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            個別シミュレーションを依頼する
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="閉じる">
              &times;
            </button>
            <h3 class="calc-modal__title">
              ご連絡先を残していただければ、担当者ができる限り
              早くご連絡いたします。
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = '今すぐ登録';
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
                <?= e(geo_from()) ?>、世界の主要暗号資産取引所へアクセスできます。
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="カードアイコン 1" />
                </div>
                <div class="text">
                  <p>
                    <?= e(SITE_NAME) ?>は高度な人工知能と機械学習を用いて、
                    金融市場の新たな機会を見極めます。
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="カードアイコン 2" />
                </div>
                <div class="text">
                  <p>
                    <?= e(geo_in()) ?>の暗号資産投資家は、業界を代表する大手取引所へアクセスし、
                    BitcoinやEthereumなどの主要通貨に加え、
                    幅広いアルトコインとステーブルコインを取引できます。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>提携パートナー</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Crypto.comロゴ" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Binanceロゴ" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="CoinDeskロゴ" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="TradingViewロゴ" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Deloitteロゴ" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Ledgerロゴ" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Decryptロゴ" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Nansenロゴ" />
          </div>
        </div>
      </section>

      <section class="advantages cards-img">
        <div class="container">
          <h2><?= e(geo_in()) ?><?= e(SITE_NAME) ?>を選ぶ理由</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="メリットアイコン 1" />
              </div>
              <div class="text">
                <h3><?= e(geo_in()) ?>のセキュリティ</h3>
                <p>
                  信頼されるプラットフォームとして、セキュリティを最優先しています。SSL、
                  銀行水準の暗号化、2FAにより、<?= e(SITE_NAME) ?>の信頼性とお客様のデータを
                  守ります。
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="メリットアイコン 2" />
              </div>
              <div class="text">
                <h3>強力なAIアルゴリズム</h3>
                <p>
                  柔軟なボットが高度なAI戦略を自律的に実行します。お客様が
                  方針を決め、リスク・市場・目標を完全に管理できるため、
                  全体像に集中できます。
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="メリットアイコン 3" />
              </div>
              <div class="text">
                <h3>手数料は明示。隠れた費用はありません。</h3>
                <p>
                  手数料はすべて明示しており、<?= e(geo_in()) ?>の投資家が
                  <?= e(SITE_NAME) ?>を利用しても追加料金はかかりません。お預け入れの資金はすべてお客様のものであり、
                  自由にご利用いただけます。当社が取り分を残すことはありません。<?= e(money_min()) ?>から始め、
                  投資を完全に管理できます。
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="メリットアイコン 4" />
              </div>
              <div class="text">
                <h3>わかりやすい操作画面</h3>
                <p>
                  直感的でシンプルなダッシュボードは、機能性と洗練、
                  使いやすさを両立し、初心者にも経験者にも適しています。
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2><?= e(SITE_NAME) ?>の仕組み</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="リストアイコン 1" />
              <p>
                独自ソフトウェアが複数の取引所を同時に監視し、
                活用できる価格差を見つけます。
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="リストアイコン 2" />
              <p>
                <?= e(SITE_NAME) ?>は一方の市場で安く買い、別の市場で高く売り、
                裁定取引の機会を活用します。この手法は、
                小さな価格変動からの利益を積み上げることで収益を生み出せます。
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="リストアイコン 3" />
              <p><?= e(SITE_NAME) ?>が取引体験をどう高めるかをご覧ください。</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                <?= e(SITE_NAME) ?>に登録して、<?= e(geo_in()) ?>金融の未来を一緒につくりましょう。
              </h2>
              <p>
                <?= e(SITE_NAME) ?>は<?= e(geo_in()) ?>暗号資産取引向けの多彩なツールを提供します。
                世界の主要取引所を連携し、多数の
                暗号資産へアクセスできます。Bitcoinなどの主要銘柄からXRPまで。さらに、
                価格変動からの収益も狙えます。
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = '今すぐ登録';
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
              <h3>翔太, 37, 東京</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="評価 1"
                />
              </div>
              <p class="review-text">
                <?= e(money_min()) ?>から始め、今では毎月<?= e(currency_symbol() . '2,000') ?>を出金しています。
              </p>
            </div>
            <div class="review">
              <h3>美咲, 42, 大阪</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="評価 2"
                />
              </div>
              <p class="review-text">シンプルなプラットフォームで、すべてが透明で実用的です。</p>
            </div>
            <div class="review">
              <h3>健一, 45, 名古屋</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="評価 3"
                />
              </div>
              <p class="review-text">パッシブインカムに最適な選択肢です。</p>
            </div>
            <div class="review">
              <h3>結衣, 34, 福岡</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="評価 4"
                />
              </div>
              <p class="review-text">休暇中でも安定した収益です。</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2><?= e(SITE_NAME) ?>の暗号資産ラインアップ</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="メリット 1"
                />
                <h3>暗号資産取引の鍵</h3>
                <p>
                  最先端のソフトウェアが取引システムの基盤です。
                  主要暗号資産取引所間の小さな価格差を
                  活用するよう設計されています。
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
                  alt="メリット 2"
                />
                <h3>グローバル資産取引</h3>
                <p>
                  株価やその他の資産は常に変動します。<?= e(SITE_NAME) ?>は、
                  相場の動きに素早く対応し、着実なリターンの可能性を高める
                  ツールを提供します。
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
                  alt="メリット 3"
                />
                <h3>外国為替取引</h3>
                <p>
                  為替レートは常に変動し、取引機会を生み出します。<?= e(SITE_NAME) ?>は
                  為替市場のわずかな動きからも利益を狙えるよう支援します。
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
                  alt="メリット 4"
                />
                <h3><?= e(SITE_NAME) ?>とBitcoin</h3>
                <p>
                  Bitcoinは引き続き市場のリーダーであり、最も認知され、財務的にも安定した
                  暗号資産です。市場の変動を体系的に捉え、対応することで、
                  <?= e(SITE_NAME) ?>は安定したリターンを目指しやすくします。
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
              <h2>プラットフォーム情報</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>プライバシー</h3>
                  <p><?= e(SITE_NAME) ?>は<?= e(geo_in()) ?>適用されるプライバシー規制を遵守します。</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>取扱資産</h3>
                  <p>Bitcoin、Ethereum、XRP、Litecoin、Dash、その他の主要暗号資産。</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>プラットフォーム種別</h3>
                  <p>
                    <?= e(SITE_NAME) ?>は<?= e(geo_in()) ?>の投資家に、主要暗号資産の価格変動から
                    収益を得る機会を提供します。XRPなどのアルトコインも含みます。
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>対象国</h3>
                  <p>本プラットフォームは<?= e(geo_in()) ?>を含め、世界でご利用いただけます。</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>入金方法</h3>
                  <p>クレジットカード、PayPal、銀行振込。</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>費用</h3>
                  <p><?= e(geo_from()) ?><?= e(SITE_NAME) ?>へのアクセスは無料です。</p>
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
              <h2><?= e(SITE_NAME) ?>は信頼できますか？</h2>
              <p>
                <?= e(SITE_NAME) ?>は、信頼性と経験に優れた一流ブローカーと提携しています。
                TLS/SSL暗号化や二要素認証（2FA）など、銀行水準のセキュリティ対策を導入し、
                お客様の資産とデータを保護します。料金体系は
                完全に透明で、隠れた費用はありません。適用される
                規制を遵守しています。
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="信頼性チャート" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                人工知能と機械学習のシステムがリアルタイムの市場分析を行い、
                成果を高める実践的な取引インサイトを提供します。
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>コピー取引</h3>
                  <p>
                    優れたトレーダーには理由があります。<?= e(SITE_NAME) ?>では、その取引を
                    フォローしてコピーし、経験と戦略を活かせます。
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>端株</h3>
                  <p>
                    ポートフォリオを広げれば、限られた資金でも
                    優良資産へアクセスできます。
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>学習コンテンツ</h3>
                  <p>
                    取引スキル向上のため、チュートリアル、
                    ウェビナー、ガイドをご用意しています。
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>モバイルアプリ</h3>
                  <p>いつでも、どこでも取引。</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>年中無休サポート</h3>
                  <p>カスタマーサービスは24時間365日対応しています。</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>AI取引</h3>
                  <p>
                    高度な人工知能と機械学習アルゴリズムにより、
                    <?= e(SITE_NAME) ?>は最新の市場データを継続的に分析します。これにより、
                    リターンが見込める市場機会を素早く見極められます。
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>カスタム戦略</h3>
                  <p>
                    リスク許容度と投資目標を決めたら、マルチアセットプラットフォーム上で
                    取引戦略を磨き上げられます。
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>多様な資産へのアクセス</h3>
                  <p>
                    暗号資産を中心としつつ、通貨、株式、その他の有価証券、
                    コモディティの取引もサポートします。
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
              <h2>ご自宅から取引し、市場を分析し、ポジションを追跡できます。</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = '今すぐ登録';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>ご自宅から取引し、市場を分析し、ポジションを追跡できます。</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="今すぐ登録" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
