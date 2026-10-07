<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'キャンペーン | ' . SITE_NAME . ' - はじめの一歩';
$page_description = SITE_NAME . 'で取引を始める。今すぐ無料登録。';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$page_css = ['angebot-mob.min.css', 'angebot-desk.min.css'];
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
              本日<?= e(SITE_NAME) ?>で口座を開設しましょう。ポートフォリオダッシュボードは
              すぐに使えます。
            </h1>
            <p>
              5分以内に無料口座を開設し、入金して取引を
              始められます。今日が、堅実な将来の資産形成を始める機会です。
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">登録</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>ご利用の流れ</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="口座開設アイコン" />
                <h3>口座開設</h3>
                <p>
                  数秒で口座を開設できます。取引ツールと、
                  待ち受ける機会へすぐにアクセスできます。
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="入金アイコン" />
                <h3>ご入金</h3>
                <p>ご入金いただければ、すぐに取引を始められます。</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="売買アイコン" />
                <h3>売買を開始</h3>
                <p>
                  自信を持ってポートフォリオを強化しましょう。迷わず
                  市場へ踏み出してください。
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>お見逃しなく。成果を出している何千ものトレーダーに加わりましょう。</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>残高の継続更新とリアルタイムの利益で、ポートフォリオを追跡できます。</h3>
            </div>
            <div class="half right">
              <p>
                <?= e(SITE_NAME) ?>による取引パターンと常時更新データの
                詳細分析で、細部まで見逃しません。残高、利益、価格変動など
                主要な統計をすべて確認できます。これらの強力なツールで
                リターンを最大化し、根拠ある戦略的な投資判断ができます。未来は
                今です。今日始めましょう。
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">今すぐ始める</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
