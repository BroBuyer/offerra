<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('利用規約');
$page_description = SITE_NAME . ' の取引プラットフォームおよびウェブサイトの利用条件をお読みください。';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>利用規約</h1>
      <p class="lead">最終更新： <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p><?= e(SITE_NAME) ?> にアクセスすることで、本利用規約に同意したものとみなされます。同意できない場合はサービスをご利用にならないでください。</p>

      <h2>ご利用資格</h2>
      <p>18歳以上であり、お住まいの法域で金融商品の取引が法的に認められている必要があります。</p>

      <h2>リスク開示</h2>
      <p>暗号資産、外国為替、CFDその他の金融商品の取引には、大きな損失リスクが伴います。過去の実績は将来の結果を保証しません。失っても差し支えない資金のみで取引してください。</p>

      <h2>口座に関する責任</h2>
      <p>口座認証情報の機密保持、および口座上のすべての行為についてお客様が責任を負います。</p>

      <h2>サービスの可用性</h2>
      <p>継続的な提供に努めますが、中断のないアクセスは保証しません。メンテナンス、市場状況、技術的問題によりサービスに影響が出る場合があります。</p>

      <h2>責任の制限</h2>
      <p><?= e(SITE_NAME) ?> は、本サイトの情報の利用から生じる取引損失または損害について責任を負いません。必要に応じて独立した金融助言を求めてください。</p>

      <h2>お問い合わせ</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
