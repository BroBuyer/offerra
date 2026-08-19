<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('利用規約');
$page_description = '利用条件： ' . SITE_NAME . ' の取引プラットフォームおよびウェブサイトを利用するための条件をお読みください。';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>利用規約</h1>
      <p class="lead">最終更新日: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>ご利用にあたって、 <?= e(SITE_NAME) ?> にアクセスすることにより、本利用規約に同意したものとみなされます。同意されない場合は、当社のサービスをご利用にならないでください。</p>

      <h2>ご利用資格</h2>
      <p>18歳以上であり、ご自身の管轄区域で金融商品を取引することが法的に認められている必要があります。</p>

      <h2>リスク開示</h2>
      <p>暗号資産、外国為替、CFD、その他の金融商品の取引には、大幅な損失リスクが伴います。過去の実績は将来の結果を保証するものではありません。失っても差し支えない資金のみで取引してください。</p>

      <h2>アカウントの責任</h2>
      <p>アカウント認証情報の機密保持、およびアカウント上のすべての活動について、お客様が責任を負います。</p>

      <h2>サービスの可用性</h2>
      <p>継続的な可用性に努めますが、中断のないアクセスを保証するものではありません。メンテナンス、市場状況、または技術的な問題により、サービスに影響が出る場合があります。</p>

      <h2>責任の制限</h2>
      <p><?= e(SITE_NAME) ?> は、本サイト上の情報の利用に起因する取引損失または損害について責任を負いません。適切な場合は、独立した財務アドバイスを求めてください。</p>

      <h2>お問い合わせ</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
