<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Rejestracja');
$page_description = 'Utwórz konto ' . SITE_NAME . ' i zacznij inwestować z jasnymi wskazówkami AI.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Zacznij</p>
      <h1>Otwórz konto inwestycyjne</h1>
      <p class="lead">Minimalna wpłata <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Rynki na żywo po krótkiej weryfikacji.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Wprowadź swoje dane';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
