<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Dziękujemy');
$page_description = 'Twoje zgłoszenie konta ' . SITE_NAME . ' zostało przyjęte.';
$page_canonical = page_url('Thanks.php');
$active_page = 'thanks';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="thanks-page">
    <div class="container" style="max-width: 520px;">
      <div class="thanks-icon" aria-hidden="true">✓</div>
      <h1>Jesteś z nami.</h1>
      <p class="lead thanks-lead">
        Dziękujemy za rejestrację w <?= e(SITE_NAME) ?>.
        Nasz zespół wkrótce się odezwie, aby dokończyć konfigurację konta — trzymaj telefon pod ręką.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
