<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Offre');
$page_description = 'Choisissez l\'offre ' . SITE_NAME . ' — commencez avec un dépôt minimum de ' . MIN_DEPOSIT . ' ' . CURRENCY . ' et débloquez l\'accès complet à la plateforme.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$schema_extra = ['breadcrumb' => [
  ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil', 'item' => page_url()],
  ['@type' => 'ListItem', 'position' => 2, 'name' => 'Offre', 'item' => page_url('offer.php')],
]];

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Offre</p>
      <h1>Obtenez le suivi de portefeuille — gratuit avec l'inscription</h1>
      <p class="lead">Commencez avec <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Évoluez quand vous êtes prêt.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Accès initial</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> dépôt minimum · Plateforme complète · Signaux IA · Assistance 24h/24</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Ce qui est inclus</div>
          <div class="specs-value">Graphiques en temps réel, trading multi-marchés, suivi de portefeuille, intégration guidée</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Financement</div>
          <div class="specs-value">Carte, virement bancaire, PayPal, portefeuilles électroniques</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Retraits</div>
          <div class="specs-value">À tout moment · 1–3 jours ouvrables · Frais affichés à l'avance</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Appareils</div>
          <div class="specs-value">Web, tablette, mobile — sans installation requise</div>
        </div>
      </div>

      <div class="form-card form-card-accent" style="max-width: 480px; margin-inline: auto;">
        <?php
        $form_id = 'offer-form';
        $form_heading = 'Profitez de votre offre maintenant';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
