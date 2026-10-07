<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'チーム | ' . SITE_NAME . ' - 専門チーム';
$page_description = 'チームのご紹介：' . SITE_NAME . '.';
$page_canonical = page_url('about.php');
$active_page = 'about';
$page_css = ['team-mob.min.css', 'team-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <div class="content-wrap">
            <h1>私たちのチーム</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="CEOの写真" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>最高経営責任者（CEO）</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="パートナーの写真" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>パートナー兼事業開発担当バイスプレジデント</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="CFOの写真" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>パートナー兼最高財務責任者（CFO）</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="マネージングパートナーの写真" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>マネージングパートナー</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="CTOの写真" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>最高技術責任者（CTO）</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="プロダクトディレクターの写真" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>プロダクトディレクター</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>暗号資産サポート</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>カスタマーサービスとサポート</h3>
              <p>
                <?= e(SITE_NAME) ?>のチームは経験豊富な専門家で構成されています。目指したのは、
                ユーザーがBitcoinなどの暗号資産を安心して購入できる
                安全な環境です。チームの実務経験が、<?= e(SITE_NAME) ?>の
                信頼性を裏付けます。ご質問は、担当アカウントマネージャーが対応します。
              </p>
            </div>
            <div class="half right">
              <h3>サポート時間</h3>
              <p>
                問題やご質問がある場合、<?= e(SITE_NAME) ?>のカスタマーサービスが
                年中無休で対応します。すぐにお答えできない場合は、チームができる限り
                早くご連絡いたします。
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>ご信頼いただいている皆様</h2>
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
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
