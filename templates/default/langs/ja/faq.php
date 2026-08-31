<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('よくある質問');
$page_description = '取引、機能、セキュリティ、手数料、始め方についてのご案内 — ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>よくある質問</h1>
      <p class="lead">始める前に知っておきたいこと。</p>
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
              口座を開設し、メールを確認し、最低 <?= MIN_DEPOSIT ?> <?= CURRENCY ?> をご入金ください。チャート、ツール、オンボーディングガイドにすぐアクセスできます。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <?= e(SITE_NAME) ?> は安全で信頼できますか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              業界標準のSSL暗号化、二要素認証、確認済み決済事業者を使用しています。セキュリティはプラットフォームのすべての層に組み込まれています。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            手数料はいくらですか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              手数料は取引確定前に明示されます。入出金に隠れた料金はありません。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            自動取引は使えますか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              はい。リスク設定に合わせたAI支援ボットを構成するか、手動で取引できます。いつでも切り替え可能です。
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
              ダッシュボードから出金を申請してください。支払い方法により、処理は通常1〜3営業日です。
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
