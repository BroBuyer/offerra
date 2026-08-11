<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('À propos de la plateforme');
$page_description = 'Découvrez comment ' . SITE_NAME . ' rend le trading plus clair grâce aux insights IA, des flux à faible latence et un espace de travail apaisé.';
$page_canonical = page_url('product.php');
$active_page = 'product';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">À propos</p>
      <h1>Une architecture IA institutionnelle, rendue accessible</h1>
      <p class="lead">Un espace de travail concentré pour le trading crypto et multi-actifs — guidé par l’IA, conçu pour plus de clarté.</p>
    </div>
  </section>

  <section class="section">
    <div class="container split-2">
      <div data-reveal>
        <h2>Une IA qui reste utile</h2>
        <p class="lead">
          Les insights apparaissent quand cela vous aide — courts, lisibles et faciles à utiliser.
          Vous confirmez chaque transaction vous-même.
        </p>
        <ul class="feature-bullets">
          <li>Des résumés de marché en langage simple</li>
          <li>Des listes de suivi recommandées pour les débutants</li>
          <li>Des rappels avant de dimensionner une position</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Ouvrir un compte</a>
      </div>
      <div class="phone-showcase" data-reveal>
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
