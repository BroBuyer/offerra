<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Cennik');
$page_description = 'Zacznij na ' . SITE_NAME . ' od ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — przejrzyste finansowanie i pełny dostęp do platformy.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Cennik</p>
      <h1>Zacznij od <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Jeden prosty start. Pełny dostęp po wpłacie — w tym wnioski AI i rynki na żywo.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Dostęp do konta</h2>
        <p class="prose">
          Minimalna wpłata <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Wykresy, narzędzia i wskazówki AI odblokowują się po zasileniu konta.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Utwórz konto';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
