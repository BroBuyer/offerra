<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ďakujeme ᐉ ' . SITE_NAME;
$page_description = 'Vašu požiadavku prijal tím ' . SITE_NAME . '.';
$page_canonical = page_url("Thanks.php");
$active_page = "Thanks";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
  <div class="ggh3sm" style="padding:80px 0">
    <div class="jfjcf">
      <div class="ibf0s54" aria-hidden="true">✓</div>
      <span class="vd7z9k">Správa prijatá</span>
      <h1>Ďakujeme — ozveme sa</h1>
      <p>Vašu požiadavku prijal tím <?= e(SITE_NAME) ?>. Špecialista sa čoskoro ozve a pomôže začať. Medzitým sa kľudne pozrite na platformu.</p>
      <div class="jv09m">
        <a class="qou73xg fi3abjs" href="<?= page_url() ?>">Späť na úvod</a>
        <a class="qou73xg ec2hno" href="<?= page_url() ?>#sor9s">Prezrieť platformu</a>
      </div>
    </div>
  </div>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
