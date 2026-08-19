<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'About ' . SITE_NAME . ' | 取引プラットフォームの包括的なインサイト';
$page_description = '安全な取引体験に向けた ' . SITE_NAME . ' の使命、技術、取り組みをご覧ください。';
$page_canonical = page_url("about.php");
$active_page = "about";
$schema_extra = ['breadcrumb' => schema_breadcrumb('会社概要', 'about.php')];


require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
<!-- breadcrumbs -->
      <div class="pt-5">
        <div class="container-base">
          <nav
            aria-label="パンくずリスト"
            class="flex flex-wrap items-center text-sm text-gray-500 md:text-lg"
          >
            <a href="<?= page_url() ?>" class="breadcrumb-item">ホーム</a>
            <span class="breadcrumb-item">私たちについて</span>
          </nav>
        </div>
      </div>
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 md:gap-10">
          <h1>私たちの姿勢</h1>
                      <p class="lead">プラットフォーム、機能、責任ある取引。</p>
                    <div class="grid gap-4 md:gap-6 max-w-3xl">
            <p><?= e(SITE_NAME) ?> は、市場アクセスと分析ツールを、ひとつの洗練されたプラットフォームに統合します。</p>
            <p>強固なセキュリティ対策と、透明でわかりやすいプロセスに重点を置いています。</p>
            <p>取引にはリスクがあり、収益は保証できない点をご了承ください。</p>
            <p>導入はわかりやすいです。口座を登録し、メールを確認し、最低 <?= e(money_min()) ?> をご入金後、ダッシュボードへアクセスできます。手動とアシストモードを切り替え、限度額とリスクをプロフィールに合わせて管理できます。</p>            <p>口座、支払い、出金、プラットフォーム機能に関するご質問にはサポートが対応します。個別の投資助言は行いません。進行中の取引で緊急の場合は、口座メールとダッシュボードの状況をお知らせください。</p>            <p>初心者にも経験者にもわかりやすい環境です。一方にチュートリアルと初期案内、他方に高度な操作とパフォーマンス追跡があります。私たちが測る <?= e(SITE_NAME) ?> の基準は、攻撃的な宣伝ではなく体験の質です。ご登録前に、よくあるご質問、規約、プライバシーポリシーで、リスク、出金時期、口座要件をご確認ください。</p>            <p>At <?= e(SITE_NAME) ?> では、ガイド付きワークフロー、モニタリングツール、透明な口座・支払いプロセスに焦点を当てた運用サポートをご利用いただけます。特定の市場成果をお約束するものではありません。</p>            <p>
              <a class="btn" href="<?= page_url('sign.php') ?>">本日登録</a>
            </p>
          </div>
        </div>
      </div>
      <!-- support -->
      <div class="py-8 md:py-10">
        <div class="container-base grid gap-6 lg:grid-cols-2">
          <div
            class="border-primary rounded-custom relative flex flex-col justify-between gap-6 overflow-hidden lg:border lg:p-8"
          >
            <h2>本日はどのようにお手伝いできますか？</h2>
          </div>
        






<?php
  $form_id = "lead-form-about";
  $form_heading = null;
  $form_submit = 'アカウントを作成';
  require __DIR__ . '/includes/form.php';
?>

            </div>
      </div>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
