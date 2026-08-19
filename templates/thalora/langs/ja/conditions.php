<?php
require_once __DIR__ . '/includes/config.php';

$page_title = '利用規約｜ユーザー契約 — ' . SITE_NAME;
$page_description = 'プラットフォーム規約、取引ルール、カスタマーサポート方針を ' . SITE_NAME . ' でご確認ください。';
$page_canonical = page_url("conditions.php");
$active_page = "terms";
$schema_extra = ['breadcrumb' => schema_breadcrumb('利用規約', 'conditions.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<div class="py-10 md:py-16">
        <div class="container-narrow grid gap-8 md:gap-12">
    <div class="grid gap-5 md:gap-7">
        <nav aria-label="パンくずリスト" class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg">
            <a href="<?= page_url() ?>" class="breadcrumb-item">ホーム</a>
            <span class="breadcrumb-item">利用規約</span>
        </nav>
        <h1>利用規約</h1>
    </div>
<div class="grid gap-6 md:gap-8">
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">1. はじめに</h2>
    <p>本サイトは、第三者の取引サービスに関する情報を提供します。続行することで、本規約およびプライバシーポリシーに同意したものとみなされます。規約は更新される場合があります。</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">2. ご利用資格</h2>
    <p>現地法令に従い、18歳以上であり、本規約を法的に承諾できる必要があります。不適切なプラットフォーム利用について、当社は責任を負いません。</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">3. アクセス制限</h2>
    <p>特定の地域や規制上の制限がある場合、アクセスが制限されることがあります。一部サービスは特定の場所ではご利用いただけません。</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">4. 適切な利用</h2>
    <p>違法行為、権利侵害、有害コンテンツの配布、自動ボットなど、本サイトの無断利用は禁止です。違反した場合、口座停止となることがあります。</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">5. 知的財産</h2>
    <p>すべてのコンテンツ、商標、知的財産は当社または関連会社に帰属します。サイト利用は個人用途です。コンテンツの複製や改変は認められません。</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">6. 免責事項</h2>
    <p>サービスおよび本サイトは「現状有姿」で提供されます。利用に起因する誤り、損失、損害について、当社は責任を負いません。</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">7. 第三者コンテンツ</h2>
    <p>第三者のコンテンツやリンクが含まれる場合がありますが、正確性や可用性は保証されません。ご自身でご確認ください。</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">8. 外部リンク</h2>
    <p>外部リンクは便宜のために提供します。これらのサイトを推奨・管理するものではなく、その内容について責任を負いません。</p>
  </div>
  <div class="grid gap-2 md:gap-4">
    <h2 class="h3">9. その他の条項</h2>
    <p>サービスおよび本規約は、当社の裁量で更新できます。本規約は完全な合意を構成します。権利を行使しないことは放棄を意味しません。</p>
  </div>
</div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
