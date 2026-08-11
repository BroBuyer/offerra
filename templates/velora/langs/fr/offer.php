<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Tarification');
$page_description = 'Commencez sur ' . SITE_NAME . ' dès ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — un financement transparent et un accès complet à la plateforme.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Tarification</p>
      <h1>Commencez avec <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Un point d’entrée simple. Accès complet à la plateforme après financement — y compris les insights IA et les marchés en direct.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Accès au compte</h2>
        <p class="prose" style="margin-bottom:18px">
          Dépôt minimum <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Les graphiques, les outils et les conseils IA se débloquent une fois votre compte financé.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Créez votre compte';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
