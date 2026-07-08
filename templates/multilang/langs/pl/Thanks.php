<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Dziękujemy');
$page_description = 'Otrzymaliśmy Twoje zgłoszenie o konto na ' . SITE_NAME . '.';
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
      <h1>Gotowe!</h1>
      <p class="lead thanks-lead">
        Dziękujemy za rejestrację w <?= e(SITE_NAME) ?>.
        Nasz zespół wkrótce się z Tobą skontaktuje, aby dokończyć konfigurację konta. Miej telefon pod ręką.
      </p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
