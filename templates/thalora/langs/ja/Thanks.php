<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('ありがとうございます');
$page_description = 'ご依頼の ' . SITE_NAME . ' 口座リクエストを受け付けました。';
$page_canonical = page_url('Thanks.php');
$active_page = 'thanks';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="thanks-page">
    <div class="container-base" style="max-width: 560px;">
      <div class="thanks-icon" aria-hidden="true">✓</div>
      <h1>ご登録ありがとうございます。</h1>
      <p>ご登録ありがとうございます。 <?= e(SITE_NAME) ?> 口座開設を完了するため、担当者よりまもなくご連絡します。電話を近くにお持ちください。</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
