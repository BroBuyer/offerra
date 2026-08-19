<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'プライバシー概要｜データ保護 — ' . SITE_NAME;
$page_description = '詳細なプライバシーポリシーで、 ' . SITE_NAME . ' がデータを保護する方法をご確認ください。';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
$schema_extra = ['breadcrumb' => schema_breadcrumb('プライバシーポリシー', 'privacy.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
          <div class="grid gap-5 md:gap-7">
<nav
  aria-label="パンくずリスト"
  class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
>
  <a href="<?= page_url() ?>" class="breadcrumb-item">ホーム</a>
  <span class="breadcrumb-item">プライバシーポリシー</span>
</nav>
<h1>プライバシー保護への取り組み</h1>
          </div>
<div class="grid gap-6 md:gap-8">
  <!-- INTRO -->
  <div class="grid gap-2">
    <p class="text-sm">最終更新日：08.07.2026</p>
    <p>At <?= e(SITE_NAME) ?> （「当社」）では、お客様の個人データの保護を最優先としています。本声明では、情報の収集、利用、保護の方法を説明します。</p>
  </div>
  <!-- PRINCIPLES -->
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">データ取り扱いの透明性</p>
    <p>
      データの取り扱いについて、オープンであることを目指しています。お問い合わせ先      <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>
    </p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">データの利用目的</p>
    <p>サービス提供、プラットフォーム改善、法的義務の遵守のために、お客様の情報を利用します。</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">お客様のデータへのアクセス</p>
    <p>個人データへのアクセス、訂正、削除は、いつでもご請求いただけます。</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <p class="h3 disc">セキュリティ対策</p>
    <p>強固なセキュリティ対策を講じていますが、個人データの絶対的な保護をお約束することはできません。</p>
  </div>
  <!-- SECTIONS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. 収集する情報</h2>
    <p>IPアドレス、端末情報、ブラウザの種類、お客様が直接提供するデータなどを収集します。</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. 処理の根拠</h2>
    <p>データの取り扱いは、お客様の同意、正当な利益、適用法令の遵守に基づきます。</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. データの共有</h2>
    <p>法令で求められる場合、信頼できるパートナー、サービス提供者、法執行機関と詳細を共有することがあります。</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. Cookieの利用</h2>
    <p>Cookieはサイト機能とユーザー分析を支えますが、ご希望であれば無効にできます。</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. データの保持期間</h2>
    <p>情報は、記載の目的を果たすために必要な期間のみ保持します。</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. 国際的なデータ移転</h2>
    <p>適切な保護措置のもと、データが国境を越えて移転される場合があります。</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. 他サイトへのリンク</h2>
    <p>当プラットフォーム経由でリンクされた外部サイトやその慣行について、責任を負いません。</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. 本ポリシーの更新</h2>
    <p>本プライバシーポリシーは随時更新される場合があります。</p>
  </div>
  <!-- RIGHTS -->
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">お客様の法的権利</h2>
    <p>アクセス、訂正、消去、処理の制限、個人情報の移転、同意の撤回、必要に応じた苦情申立ての権利があります。</p>
  </div>
</div>
          </div>
        </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
