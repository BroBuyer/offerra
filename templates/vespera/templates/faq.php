<?php
require __DIR__ . '/../includes/header.php';
$faq = $langData['faq'];
$notes = $faq['page_notes'] ?? [];
?>
<section class="page-hero">
  <div class="container page-hero-inner">
    <h1 class="page-hero-h1"><?= e($faq['title']) ?></h1>
    <p class="page-hero-desc"><?= e($faq['subtitle']) ?></p>
  </div>
</section>
<section class="faq-page-section">
  <div class="container">
    <?php if ($notes): ?>
    <div class="faq-page-notes">
      <?php foreach ($notes as $note): ?>
      <p><?= e($note) ?></p>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <div class="section-eyebrow"><?= e($faq['eyebrow']) ?></div>
    <h2 class="faq-page-list-title"><?= e($faq['title']) ?></h2>
    <p class="section-lead"><?= e($faq['subtitle']) ?></p>

    <div class="faq-list" style="margin-top:1.5rem">
      <?php foreach ($faq['items'] as $item): ?>
      <div class="faq-item">
        <button type="button"><?= e($item['q']) ?></button>
        <div class="faq-a"><?= e($item['a']) ?></div>
      </div>
      <?php endforeach; ?>
    </div>

    <div style="text-align:center;margin-top:2rem">
      <a class="btn-primary" href="<?= e(lang_path($lang, 'contact')) ?>"><?= e($langData['nav']['contact']) ?></a>
    </div>
  </div>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
