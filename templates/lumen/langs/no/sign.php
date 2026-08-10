<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Registrering');
$page_description = 'Opprett ' . SITE_NAME . '-kontoen din og start investering med tydelig AI-veiledning.';
$page_canonical = page_url('sign.php');
$active_page = 'sign';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Kom i gang</p>
      <h1>Åpne investeringskontoen din</h1>
      <p class="lead">Minste innskudd <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Live-markeder etter kort verifisering.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 480px;">
      <div class="page-panel">
        <?php
        $form_id = 'signup-form';
        $form_heading = 'Skriv inn opplysningene dine';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
