<?php
require __DIR__ . '/../includes/header.php';
$a = $langData['about'];
?>
<section class="page-hero">
  <div class="container page-hero-inner">
    <h1 class="page-hero-h1"><?= e($a['title']) ?></h1>
    <p class="page-hero-desc"><?= e($a['lead']) ?></p>
  </div>
</section>

<section class="about-story">
  <div class="container about-story-grid">
    <div class="about-story-text">
      <h2><?= e($a['story_title']) ?></h2>
      <p><?= e($a['story_p1']) ?></p>
      <p><?= e($a['story_p2']) ?></p>
      <p><?= e($a['story_p3']) ?></p>
    </div>
    <div class="about-story-stats">
      <?php foreach ($a['stats'] as $s): ?>
      <div class="about-stat-card glass-card">
        <div class="about-stat-val"><?= e($s['value']) ?></div>
        <div class="about-stat-label"><?= e($s['label']) ?></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="about-mission">
  <div class="container">
    <div class="about-mission-inner glass-card">
      <div class="about-mission-grid">
        <div class="about-mission-item">
          <h3><?= e($a['mission_title']) ?></h3>
          <p><?= e($a['mission']) ?></p>
        </div>
        <div class="about-mission-item">
          <h3><?= e($a['vision_title']) ?></h3>
          <p><?= e($a['vision']) ?></p>
        </div>
        <div class="about-mission-item">
          <h3><?= e($a['values_title']) ?></h3>
          <p><?= e($a['values']) ?></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2 style="text-align:center"><?= e($a['pillars_title']) ?></h2>
    <div class="about-pillars">
      <?php foreach ($a['pillars'] as $p): ?>
      <article class="about-pillar glass-card">
        <div class="about-pillar-num"><?= e($p['num']) ?></div>
        <h3><?= e($p['title']) ?></h3>
        <p><?= e($p['text']) ?></p>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="about-cta">
  <div class="container">
    <div class="about-cta-inner glass-card">
      <h2><?= e($a['cta_title']) ?></h2>
      <p style="margin:1rem auto 1.5rem;max-width:36rem"><?= e($a['cta_text']) ?></p>
      <a class="btn-primary" href="<?= e(lang_path($lang, 'home')) ?>#lead-form"><?= e($a['cta_btn']) ?></a>
    </div>
  </div>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
