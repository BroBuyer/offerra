<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('プライバシーポリシー');
$page_description = '個人データの取扱い： ' . SITE_NAME . ' が個人データを収集、利用、保護する方法をご確認ください。';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>プライバシーポリシー</h1>
      <p class="lead">最終更新日: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>本プライバシーポリシーは、 <?= e(SITE_NAME) ?> （「当社」）が、本ウェブサイトおよびサービスをご利用の際に個人情報を収集・処理する方法を説明します。</p>

      <h2>収集する情報</h2>
      <p>氏名、メールアドレス、電話番号、居住国、IPアドレス、およびフォームやサポートリクエストを通じてご提供いただく情報を収集する場合があります。</p>

      <h2>情報の利用方法</h2>
      <ul>
        <li>アカウントの作成および管理のため</li>
        <li>取引プラットフォームへのアクセスおよびカスタマーサポートの提供のため</li>
        <li>法的および規制上の義務を遵守するため</li>
        <li>サービスの改善および不正防止のため</li>
      </ul>

      <h2>データセキュリティ</h2>
      <p>お客様のデータを保護するため、SSL暗号化およびアクセス制御を含む技術的・組織的対策を実施します。</p>

      <h2>お客様の権利</h2>
      <p>管轄区域によっては、個人データへのアクセス、訂正、または削除の権利がある場合があります。権利を行使するには <?= e(SUPPORT_EMAIL) ?> までご連絡ください。</p>

      <h2>お問い合わせ</h2>
      <p>本ポリシーに関するご質問は、 <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
