<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Contact');
$page_description = 'Contactez le support ' . SITE_NAME . ' — nous aidons pour le financement, la vérification et le démarrage.';
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
      <p class="lead">Questions sur votre compte, vos dépôts ou les outils IA — contactez-nous à tout moment.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 560px;">
      <div class="page-panel">
        <h2 style="font-size: 1.3rem;">Support</h2>
        <p class="prose">Écrivez-nous à <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a>. Le délai de réponse typique est de quelques heures.</p>
        <a href="sign.php" class="btn btn-primary">Ouvrir un compte</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
