<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contact');
$page_description = 'Contactez l\'assistance de ' . SITE_NAME . ' ou notre équipe commerciale. Nous sommes disponibles 24h/24.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contact</p>
      <h1>Nous sommes là pour vous aider</h1>
      <p class="lead">Assistance professionnelle 24 heures sur 24 pour les questions de compte, de trading et techniques.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Assistance par e-mail</h3>
          <p style="margin-bottom: 1rem;">Pour les questions générales et l'assistance compte :</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Délai de réponse</h3>
          <p>La plupart des demandes reçoivent une réponse en quelques heures. Les questions urgentes de trading sont prioritaires.</p>
        </article>
        <article class="feature-card">
          <h3>Prêt à commencer ?</h3>
          <p style="margin-bottom: 1rem;">Ouvrez un compte en quelques minutes — aucun appel requis.</p>
          <a href="sign.php" class="btn btn-primary">Créer un compte</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
