<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('よくある質問');
$page_description = SITE_NAME . ' の入金、セキュリティ、手数料、始め方についてのご案内。';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>入金の前に</h1>
      <p class="lead">アクセス、安全性、プラットフォームの仕組みについて、率直にお答えします。</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            始め方を教えてください。
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              口座を開設し、メールを確認し、<?= MIN_DEPOSIT ?> <?= CURRENCY ?> からご入金ください。チャート、ツール、オンボーディングはすぐに利用できます。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <?= e(SITE_NAME) ?> はどう保護されていますか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              SSL暗号化、二要素認証、確認済み決済事業者が、すべての口座操作の基盤です。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            手数料は？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              確定前に手数料が表示されます。入出金に予期せぬ料金はありません。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            取引を自動化できますか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              はい。リスク上限付きのAI支援ボットを設定するか、完全手動のままいつでも切り替えられます。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            出金の流れは？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              ダッシュボードから申請してください。多くの方法は支払い手段により1〜3営業日で着金します。
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">ほかにご質問はありますか？</p>
        <a href="contacts.php" class="btn btn-outline">サポートに問い合わせる</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
