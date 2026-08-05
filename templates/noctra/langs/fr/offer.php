<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Offre');
$page_description = 'Ouvrez ' . SITE_NAME . ' avec un minimum de ' . MIN_DEPOSIT . ' ' . CURRENCY . ' — accès complet à la plateforme, analyses IA et assistance 24/7.';
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
      <h1>Accès à la plateforme dès <?= MIN_DEPOSIT ?> <?= CURRENCY ?></h1>
      <p class="lead">Toutes les fonctionnalités dès le premier jour — graphiques, signaux et assistance inclus.</p>
    </div>
  </section>

  <section class="section">
    <div class="container" style="max-width: 900px; margin-inline: auto;">
      <div class="specs-table" style="margin-bottom: 2rem;">
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Offre de départ</div>
          <div class="specs-value"><strong><?= MIN_DEPOSIT ?> <?= CURRENCY ?></strong> minimum · Plateforme complète · Analyses IA · Assistance 24/7</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Inclus</div>
          <div class="specs-value">Marchés en direct, trading multi-actifs, vue portefeuille, prise en main guidée</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Financement</div>
          <div class="specs-value">Carte, virement bancaire, PayPal, portefeuilles électroniques</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Retraits</div>
          <div class="specs-value">À tout moment · 1–3 jours ouvrés · Frais indiqués à l'avance</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Appareils</div>
          <div class="specs-value">Web, tablette, mobile — aucune installation requise</div>
        </div>
      </div>

      <div class="board-card" style="max-width: 480px; margin-inline: auto;">
        <div class="board-card-head">
          <span>Commencer</span>
          <span class="live-pill">Ouvert</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'offer-form';
          $form_heading = 'Inscrivez-vous pour débloquer l\'offre';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
