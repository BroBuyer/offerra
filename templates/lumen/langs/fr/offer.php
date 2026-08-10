<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Tarifs');
$page_description = 'Démarrez sur ' . SITE_NAME . ' dès ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — financement transparent et accès complet à la plateforme.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Tarifs</p>
      <h1>Commencer dès <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Un point d’entrée simple. Accès complet après financement — insights IA et marchés en direct inclus.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 520px;">
      <div class="page-panel">
        <h2 style="font-size: 1.4rem;">Accès au compte</h2>
        <p class="prose">
          Dépôt minimum <strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong>.
          Graphiques, outils et guidance IA se débloquent une fois le compte alimenté.
        </p>
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Créer votre compte';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
