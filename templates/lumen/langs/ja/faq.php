<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('よくある質問');
$page_description = SITE_NAME . 'での入金、セキュリティ、AIインサイト、始め方についての回答。';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">よくある質問</p>
      <h1>口座に入金する前に</h1>
      <p class="lead">アクセス、安全性、プラットフォームでのAIの役割についての率直な回答。</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            始め方は？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              口座を作成し、短い本人確認を完了し、<?= MIN_DEPOSIT ?> <?= CURRENCY ?> から入金します。その後すぐにライブチャートと取引ツールが利用できます。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            AIは取引をどう助けますか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?>は平易な言葉で短い市場インサイトを表示します。行動するかどうかは常にご自身で決めます。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            口座はどう保護されますか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              接続はSSL暗号化を使用します。不要な権限は求めません — ログイン情報は非公開に保ってください。
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            隠れた手数料はありますか？
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              手数料は確定前に表示されます。条件に従う限り、入出金にサプライズ料金はありません。
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
