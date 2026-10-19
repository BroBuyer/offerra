<?php
require __DIR__ . '/../includes/header.php';
$s = $langData['signup'];
$howto = $langData['howto'];
?>
<section class="page-hero">
  <div class="container page-hero-inner">
    <h1 class="page-hero-h1"><?= e($s['title']) ?></h1>
    <p class="page-hero-desc"><?= e($s['lead']) ?></p>
  </div>
</section>
<section class="signup-wrap">
  <div class="container signup-grid">
    <?php
      $formId = 'lead-form';
      $wrapId = 'lead-form-wrap';
      require __DIR__ . '/../includes/lead-form.php';
    ?>
    <div>
      <h2 style="font-size:1.35rem"><?= e($s['steps_title']) ?></h2>
      <ol class="howto-steps" style="margin-top:1rem">
        <?php foreach ($howto['steps'] as $step): ?>
        <li class="howto-step card">
          <h3><?= e($step['title']) ?></h3>
          <p><?= e($step['text']) ?></p>
        </li>
        <?php endforeach; ?>
      </ol>
    </div>
  </div>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
