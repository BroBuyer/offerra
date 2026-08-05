<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contact');
$page_description = 'Contactez l\'assistance ' . SITE_NAME . ' — aide compte, trading et technique disponible 24/7.';
$page_canonical = page_url('contacts.php');
$active_page = 'contacts';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Contact</p>
      <h1>Parlez à l'assistance</h1>
      <p class="lead">Questions sur le compte, le trading et la technique — prises en charge à toute heure.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 640px; margin-inline: auto;">
      <div class="features-grid" style="grid-template-columns: 1fr;">
        <article class="feature-card">
          <h3>Assistance par e-mail</h3>
          <p style="margin-bottom: 1rem;">Pour les demandes liées au compte et générales :</p>
          <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" class="btn btn-outline"><?= e(SUPPORT_EMAIL) ?></a>
        </article>
        <article class="feature-card">
          <h3>Délai de réponse</h3>
          <p>La plupart des tickets sont traités en quelques heures. Les problèmes de trading en direct sont prioritaires.</p>
        </article>
        <article class="feature-card">
          <h3>Vous préférez faire seul ?</h3>
          <p style="margin-bottom: 1rem;">Ouvrez un compte en quelques minutes — sans appel.</p>
          <a href="sign.php" class="btn btn-primary">Créer un compte</a>
        </article>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
