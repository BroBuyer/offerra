<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registreren');
$page_description = 'Maak uw ' . SITE_NAME . '-account en begin met beleggen met heldere AI-begeleiding.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Aan de slag</p>
      <h1>Open uw beleggingsaccount</h1>
      <p class="lead">Minimale storting <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Live markten na een korte verificatie.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Vul uw gegevens in';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
