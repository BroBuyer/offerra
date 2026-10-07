<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'サービス | ' . SITE_NAME . ' - AI取引プラットフォーム';
$page_description = SITE_NAME . ' : ' . geo_in() . 'の暗号資産向け先進AIプラットフォーム。';
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
              <?= e(SITE_NAME) ?>なら、デジタル分析を活用して<?= e(geo_in()) ?>着実な資産形成を目指せます
            </h1>
            <p>
              最高水準の人工知能と高度なアルゴリズムにより、<?= e(SITE_NAME) ?>は
              世界市場を継続的に分析します。これによりプラットフォームは
              収益性の高い機会を素早く見極めます。成功への一歩を踏み出すなら今です。
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">今すぐ始める</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>デジタル取引のオールインワンプラットフォーム</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="メリット 1"
                  />
                </div>
                <h3>暗号資産管理</h3>
                <p>すべてのデジタル資産を一か所で簡単に管理できます。</p>
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
                    alt="メリット 2"
                  />
                </div>
                <h3>ひとつのプラットフォームと画面から、すべての資産情報を確認</h3>
                <p>わかりやすい一覧で資金管理を最適化できます。</p>
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
                    alt="メリット 3"
                  />
                </div>
                <h3>資本市場</h3>
                <p>リアルタイムのデータとインサイトで、常に市場の先を行けます。</p>
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
                    alt="メリット 4"
                  />
                </div>
                <h3>モバイルアクセス</h3>
                <p>
                  最適化されたモバイルサイトで、ポートフォリオをいつでもどこでも確認できます。
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
                    alt="メリット 5"
                  />
                </div>
                <h3>ライブ統計</h3>
                <p>
                  リターンと分析を高い精度で、一日のあらゆる瞬間に
                  追跡できます。
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
              今すぐアプリをダウンロードし、スマートフォンからリアルタイムで資金を管理しましょう。
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">登録</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            <?= e(SITE_NAME) ?>プラットフォームの先端AI分析と、直感的な資産取引
            インターフェースを<?= e(geo_in()) ?>ご体験ください。
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="機能 1" />
              </div>
              <div class="text">
                <h4>ポートフォリオ</h4>
                <p>
                  実績ある革新的な取引戦略で、
                  財務プロフィールを強化できます。
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="機能 2" />
              </div>
              <div class="text">
                <h4>暗号資産分析</h4>
                <p>
                  最新世代の<?= e(SITE_NAME) ?>人工知能と高度な
                  機械学習アルゴリズムで、収益機会を素早く見極められます。
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="機能 3" />
              </div>
              <div class="text">
                <h4>かんたん購入</h4>
                <p>
                  暗号資産をシンプルかつ直感的に取引できるよう、高度な機能とサポートを提供します。
                  隠れた手数料はなく、執行は超高速です。これが
                  AIの力で取引利益を最大化する機会です。
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="機能 4" />
              </div>
              <div class="text">
                <h4>デジタル資産</h4>
                <p>
                  暗号資産でもその他の資産でも、取引利益を最大化する機会をつかみましょう。
                  当社のソフトウェアと機械学習アルゴリズムで、分散ポートフォリオを構築できます。
                  踏み出すなら今です。取引の
                  第一歩を始めましょう。
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
