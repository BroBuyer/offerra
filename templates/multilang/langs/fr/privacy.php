<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Politique de confidentialité');
$page_description = 'Découvrez comment ' . SITE_NAME . ' collecte, utilise et protège vos données personnelles.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Politique de confidentialité</h1>
      <p class="lead">Dernière mise à jour : <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Cette Politique de confidentialité décrit comment <?= e(SITE_NAME) ?> (« nous ») collecte et traite les informations personnelles lorsque vous utilisez notre site et nos services.</p>

      <h2>Informations que nous collectons</h2>
      <p>Nous pouvons collecter : nom, adresse e-mail, numéro de téléphone, pays de résidence, adresse IP et informations que vous fournissez via des formulaires ou des demandes d'assistance.</p>

      <h2>Comment nous utilisons vos informations</h2>
      <ul>
        <li>Pour créer et gérer votre compte</li>
        <li>Pour fournir l'accès à la plateforme de trading et l'assistance client</li>
        <li>Pour respecter les obligations légales et réglementaires</li>
        <li>Pour améliorer nos services et prévenir la fraude</li>
      </ul>

      <h2>Sécurité des données</h2>
      <p>Nous mettons en œuvre des mesures techniques et organisationnelles, notamment le chiffrement SSL et des contrôles d'accès, pour protéger vos données.</p>

      <h2>Vos droits</h2>
      <p>Selon votre juridiction, vous pouvez avoir le droit d'accéder, de corriger ou de supprimer vos données personnelles. Contactez <?= e(SUPPORT_EMAIL) ?> pour exercer ces droits.</p>

      <h2>Contact</h2>
      <p>Des questions sur cette politique ? Envoyez un e-mail à <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
