<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Teşekkürler ᐉ ' . SITE_NAME;
$page_description = 'Talebinizi ' . SITE_NAME . ' ekibi aldı.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Mesaj alındı</span>
      <h1>Teşekkürler — sizinle iletişime geçeceğiz</h1>
      <p>Talebinizi <?= e(SITE_NAME) ?> ekibi aldı. Bir uzman başlamanıza yardımcı olmak için kısa süre içinde sizinle iletişime geçecektir. Bu arada platformu keşfetmekten çekinmeyin.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Ana sayfaya dön</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">Platformu keşfedin</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
