<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Hinnoittelu');
$page_description = 'Aloita palvelussa ' . SITE_NAME . ' alkaen ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — läpinäkyvä rahoitus ja täysi alustan käyttöoikeus.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Hinnoittelu</p>
      <h1>Aloita alkaen <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Yksi yksinkertainen sisäänkäynti. Täysi alustan käyttöoikeus rahoituksen jälkeen — mukaan lukien tekoälynäkemykset ja live-markkinat.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Tilin käyttöoikeus</h2>
        <p class="prose" style="margin-bottom:18px">
          Vähimmäistalletus <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Kaaviot, työkalut ja tekoälyohjaus avautuvat, kun tilisi on rahoitettu.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Luo tilisi';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
