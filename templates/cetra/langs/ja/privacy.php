<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('プライバシーポリシー');
$page_description = '' . SITE_NAME . ' がお客様の個人データを収集、利用、保護する方法。';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="メイン">
      <a href="<?= page_url() ?>#platform">プラットフォーム</a>
      <a href="<?= page_url() ?>#how">仕組み</a>
      <a href="<?= page_url() ?>#markets">市場</a>
      <a href="<?= page_url() ?>#faq">よくある質問</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">始める</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">法的情報</span>
      <h1>プライバシーポリシー</h1>
      <p class="lede"><?= e(SITE_NAME) ?> がお客様の個人データを収集、利用、保護する方法。</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">最終更新：2025年1月</p>

      <h2>1. はじめに</h2>
      <p><?= e(SITE_NAME) ?>（「当社」「当方」）は、訪問者とお客様のプライバシー保護に取り組んでいます。本プライバシーポリシーは、ウェブサイトとサービスをご利用いただく際に、どのような個人データを収集するか、その理由、および処理方法を説明します。</p>

      <h2>2. 収集する情報</h2>
      <ul>
        <li>身元データ — 登録およびKYC/AML遵守のための氏名、生年月日、公的身分証明書。</li>
        <li>連絡先データ — メールアドレス、電話番号、郵便住所。</li>
        <li>金融データ — 支払い詳細、取引履歴、資金源に関する情報。</li>
        <li>技術データ — IPアドレス、ブラウザの種類、端末識別子、Cookieおよび利用分析。</li>
      </ul>

      <h2>3. データの利用方法</h2>
      <ul>
        <li>身元確認および規制上の義務の履行。</li>
        <li>プラットフォームとサービスの提供、維持、改善。</li>
        <li>支払い処理および不正行為の検知。</li>
        <li>口座、更新、サポート依頼についてのご連絡。</li>
        <li>同意いただいた場合のマーケティング配信（いつでも配信停止できます）。</li>
      </ul>

      <h2>4. 法的根拠</h2>
      <p>個人データは、契約の履行、法的義務の遵守、正当な利益、またはお客様の同意のうち、一つ以上の適法な根拠に基づいて処理します。</p>

      <h2>5. 共有と開示</h2>
      <p>規制された決済プロバイダー、KYC/AML確認パートナー、クラウドインフラ提供者、専門アドバイザー、および法令で求められる権限ある当局と個人データを共有する場合があります。個人データは販売しません。</p>

      <h2>6. 国際移転</h2>
      <p>個人データが管轄外へ移転される場合、標準契約条項を含む適切な保護措置を確保します。</p>

      <h2>7. データ保持</h2>
      <p>サービスの提供および法的・規制・会計上の要件を満たすために必要な期間、個人データを保持します — 通常、口座閉鎖後少なくとも5年間です。</p>

      <h2>8. お客様の権利</h2>
      <p>適用法に従い、個人データへのアクセス、訂正、消去、制限、ポータビリティを請求でき、特定の処理に異議を唱えることができます。これらの権利を行使するには、下記の連絡先までご連絡ください。</p>

      <h2>9. Cookie</h2>
      <p>サイト運営と利用状況の把握のため、必須および分析Cookieを使用します。ブラウザ設定でCookieを管理できます。</p>

      <h2>10. セキュリティ</h2>
      <p>不正アクセス、開示、改ざん、破壊から個人データを保護するため、管理的・技術的・物理的な対策を適用します。完全に安全なシステムはなく、絶対的なセキュリティを保証することはできません。</p>

      <h2>11. 変更</h2>
      <p>本ポリシーは随時更新する場合があります。最新版は常に本ページで、更新日とともにご確認いただけます。</p>

      <h2>12. お問い合わせ</h2>
      <p>プライバシーに関するご質問、または権利を行使される場合は、<?= e(SITE_NAME) ?> のデータ保護チームまで、当社の<a href="<?= page_url('contacts.php') ?>">お問い合わせページ</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← ホームへ戻る</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. 無断転載を禁じます ·
      <a href="<?= page_url('privacy.php') ?>">プライバシーポリシー</a> ·
      <a href="<?= page_url('conditions.php') ?>">利用規約</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
