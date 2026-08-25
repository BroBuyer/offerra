<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Děkujeme ᐉ ' . SITE_NAME;
$page_description = 'Váš požadavek přijal tým ' . SITE_NAME . '.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Zpráva přijata</span>
      <h1>Děkujeme — ozveme se</h1>
      <p>Váš požadavek přijal tým <?= e(SITE_NAME) ?>. Specialista se brzy ozve a pomůže začít. Mezitím se klidně podívejte na platformu.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Zpět na úvod</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">Prohlédnout platformu</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
