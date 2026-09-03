<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('プライバシーポリシー');
$page_description = 'Learn how ' . SITE_NAME . ' collects, uses, and protects your personal data.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>プライバシーポリシー</h1>
      <p class="lead">最終更新： <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>本プライバシーポリシーは、 <?= e(SITE_NAME) ?> （「当社」）がウェブサイトおよびサービスのご利用時に個人情報を収集・処理する方法を説明します。</p>

      <h2>収集する情報</h2>
      <p>氏名、メールアドレス、電話番号、居住国、IPアドレス、フォームやサポート依頼でご提供いただく情報を収集する場合があります。</p>

      <h2>情報の利用目的</h2>
      <ul>
        <li>口座の作成および管理のため</li>
        <li>取引プラットフォームへのアクセスおよびカスタマーサポートの提供のため</li>
        <li>法令および規制上の義務を果たすため</li>
        <li>サービスの改善および不正防止のため</li>
      </ul>

      <h2>データの安全性</h2>
      <p>SSL暗号化やアクセス制御など、技術的・組織的な対策でデータを保護します。</p>

      <h2>お客様の権利</h2>
      <p>お住まいの法域により、個人データへのアクセス、訂正、削除の権利がある場合があります。権利行使は <?= e(SUPPORT_EMAIL) ?> までご連絡ください。</p>

      <h2>お問い合わせ</h2>
      <p>本ポリシーに関するご質問はメールで： <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
