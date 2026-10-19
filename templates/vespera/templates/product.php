<?php
require __DIR__ . '/../includes/header.php';
$p = $langData['product'];
?>
<section class="page-hero">
  <div class="container page-hero-inner">
    <h1 class="page-hero-h1"><?= e($p['title']) ?></h1>
    <p class="page-hero-desc"><?= e($p['lead']) ?></p>
  </div>
</section>
<section class="features-page">
  <div class="container">
    <div class="features-page-grid">
      <?php foreach ($p['items'] as $item): ?>
      <article class="feat-card glass-card">
        <span class="feat-tag"><?= e($item['tag']) ?></span>
        <h3 class="feat-title"><?= e($item['title']) ?></h3>
        <p class="feat-desc"><?= e($item['text']) ?></p>
        <ul class="feat-bullets">
          <?php foreach ($item['bullets'] as $b): ?>
          <li><?= e($b) ?></li>
          <?php endforeach; ?>
        </ul>
      </article>
      <?php endforeach; ?>
    </div>
    <div class="features-cta glass-card page-cta-inner">
      <h2><?= e($p['cta_title']) ?></h2>
      <a class="btn-primary" style="margin-top:1.25rem" href="<?= e(lang_path($lang, 'sign-up')) ?>"><?= e($p['cta_btn']) ?></a>
    </div>
  </div>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
