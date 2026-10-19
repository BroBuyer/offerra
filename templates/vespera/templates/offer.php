<?php
require __DIR__ . '/../includes/header.php';
$o = $langData['offer'];
?>
<section class="page-hero">
  <div class="container page-hero-inner">
    <h1 class="page-hero-h1"><?= e($o['title']) ?></h1>
    <p class="page-hero-desc"><?= e($o['lead']) ?></p>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="offer-grid">
      <?php foreach ($o['items'] as $item): ?>
      <article class="offer-card glass-card">
        <h3><?= e($item['title']) ?></h3>
        <p style="margin-top:.5rem"><?= e($item['text']) ?></p>
      </article>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center">
      <a class="btn-primary lg" href="<?= e(lang_path($lang, 'home')) ?>#lead-form"><?= e($o['cta_btn']) ?></a>
    </div>
  </div>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
