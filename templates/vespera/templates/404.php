<?php
require __DIR__ . '/../includes/header.php';
$err = $langData['404'];
?>
<section class="error-page">
  <div class="container">
    <h1><?= e($err['title']) ?></h1>
    <p><?= e($err['text']) ?></p>
    <a class="btn-primary" href="<?= e(lang_path($lang, 'home')) ?>"><?= e($err['cta']) ?></a>
  </div>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
