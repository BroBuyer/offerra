<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Plateforme');
$page_description = 'Découvrez comment ' . SITE_NAME . ' simplifie l’investissement avec des insights IA, des tarifs clairs et un espace de trading serein.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Plateforme</p>
      <h1>Tout ce qu’il vous faut. Rien de superflu.</h1>
      <p class="lead">Un espace concentré pour l’investissement crypto et multi-actifs — guidé par l’IA, conçu pour la clarté.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-lumen">
      <div>
        <h2>Une IA qui reste en arrière-plan</h2>
        <p class="lead">
          Les insights apparaissent quand ils aident — courts, lisibles et actionnables. Vous confirmez toujours chaque trade vous-même.
        </p>
        <ul class="feature-list">
          <li>Résumés de marché en langage clair</li>
          <li>Listes de suivi suggérées pour débutants</li>
          <li>Rappels avant de dimensionner une position</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Ouvrir un compte</a>
      </div>
      <div>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
