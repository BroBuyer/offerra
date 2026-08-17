<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Dziękujemy');
$page_description = 'Otrzymaliśmy wniosek o konto ' . SITE_NAME . '.';
$page_canonical = page_url('Thanks.php');
$active_page = 'thanks';
$noindex = true;

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>
<main class="flex grow flex-col overflow-hidden">
  <section class="thanks-page">
    <div class="container-base" style="max-width: 560px;">
      <div class="thanks-icon" aria-hidden="true">✓</div>
      <h1>Jesteś w środku.</h1>
      <p>Dziękujemy za rejestrację w <?= e(SITE_NAME) ?>. Nasz zespół wkrótce skontaktuje się, by dokończyć otwarcie konta — miej telefon pod ręką.</p>
    </div>
  </section>
</main>
<?php require_once __DIR__ . '/includes/footer.php'; ?>
