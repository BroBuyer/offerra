<?php
require __DIR__ . '/../includes/header.php';
$c = $langData['contact'];
$office = $langData['office'];
$offices = $office['list'] ?? [];
?>
<section class="page-hero">
  <div class="container page-hero-inner">
    <h1 class="page-hero-h1"><?= e($c['title']) ?></h1>
    <p class="page-hero-desc"><?= e($c['lead']) ?></p>
  </div>
</section>
<section class="section" style="padding-top:0">
  <div class="container contact-top">
    <div class="contact-lead">
      <?php
        $formId = 'lead-form';
        $wrapId = 'lead-form-wrap';
        require __DIR__ . '/../includes/lead-form.php';
      ?>
    </div>
    <div class="contact-channels">
      <?php foreach ($c['channels'] as $ch):
        $href = $ch['href'];
        if ($href === 'faq') {
            $href = lang_path($lang, 'faq');
        }
      ?>
      <article class="cg-card glass-card">
        <h3><?= e($ch['title']) ?></h3>
        <p><?= e($ch['text']) ?></p>
        <a class="cg-link" href="<?= e($href) ?>"<?= str_starts_with($href, 'http') ? ' target="_blank" rel="noopener"' : '' ?>><?= e($ch['link']) ?></a>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<section class="section" style="padding-top:0">
  <div class="container">
    <div class="offices-intro">
      <div class="section-eyebrow"><?= e($office['eyebrow']) ?></div>
      <h2><?= e($office['world_title']) ?></h2>
      <p class="section-lead"><?= e($office['world_lead']) ?></p>
    </div>

    <div class="offices-grid">
      <?php foreach ($offices as $loc): ?>
      <article class="office-card card">
        <div class="office-map">
          <iframe title="<?= e($loc['city']) ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            src="<?= e($loc['map']) ?>"></iframe>
        </div>
        <div class="office-body">
          <div class="office-badge"><?= e($loc['badge']) ?></div>
          <h3><?= e($loc['city']) ?></h3>
          <div class="office-rows" style="margin-top:1rem">
            <div>
              <div class="office-row-label"><?= e($office['address_label']) ?></div>
              <div class="office-row-val"><?= e($loc['address']) ?></div>
            </div>
            <?php if (!empty($loc['building'])): ?>
            <div>
              <div class="office-row-label"><?= e($office['building_label']) ?></div>
              <div class="office-row-val"><?= e($loc['building']) ?></div>
            </div>
            <?php endif; ?>
            <div>
              <div class="office-row-label"><?= e($office['phone_label']) ?></div>
              <div class="office-row-val"><a href="<?= e($loc['phone_href']) ?>"><?= e($loc['phone']) ?></a></div>
            </div>
            <div>
              <div class="office-row-label"><?= e($office['hours_label']) ?></div>
              <div class="office-row-val"><?= e($loc['hours']) ?></div>
            </div>
            <div>
              <div class="office-row-label"><?= e($office['email_label']) ?></div>
              <div class="office-row-val"><a href="mailto:<?= e($office['email']) ?>"><?= e($office['email']) ?></a></div>
            </div>
          </div>
          <a class="btn-outline" style="margin-top:1.25rem" href="<?= e($loc['directions']) ?>" target="_blank" rel="noopener"><?= e($office['directions']) ?></a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
