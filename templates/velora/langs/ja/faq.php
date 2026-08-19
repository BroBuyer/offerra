<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = '資金拠出、セキュリティ、AIインサイト、始め方に関する回答 — ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';

$faq_chevron = '<svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>よくある質問</h1>
      <p class="lead">登録、安全性、プラットフォーム上でAIがどのように役立つかについての率直な回答です。</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            どのように始めればよいですか？
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              アカウントを作成し、短い本人確認を完了し、最低入金額は <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              チャート、ツール、案内付きオンボーディングは、その直後に利用できるようになります。隅のLisaとチャットすることもできます。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            AIは取引にどのように役立ちますか？
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> は、わかりやすい言葉で短い市場インサイトを提示します。行動するかどうかは、常にご自身で判断します。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            アカウントはどのように保護されていますか？
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              接続にはSSL暗号化を使用します。不要な権限を求めることはありません — ログイン情報は非公開に保ってください。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            隠れた手数料はありますか？
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              手数料は確認前に表示されます。規約に従っている場合、入出金で予期せぬ請求は発生しません。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            チャットウィジェットのLisaは誰ですか？
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisaはオンボーディングアシスタントです。短いクイズをご案内し、安全なアカウント申請の送信をサポートします。
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
