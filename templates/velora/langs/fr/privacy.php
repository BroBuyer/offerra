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
      <p class="lead">Last updated: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>La présente politique de confidentialité explique comment <?= e(SITE_NAME) ?> (« nous ») collecte et traite vos informations personnelles lorsque vous utilisez notre site web et nos services.</p>

      <h2>Informations que nous collectons</h2>
      <p>Nous pouvons collecter : le nom, l’adresse e-mail, le numéro de téléphone, le pays de résidence, l’adresse IP et les informations que vous fournissez via des formulaires ou des demandes d’assistance.</p>

      <h2>Comment nous utilisons vos informations</h2>
      <ul>
        <li>Pour créer et gérer votre compte</li>
        <li>Pour fournir l’accès à la plateforme de trading et le support client</li>
        <li>Pour respecter les obligations légales et réglementaires</li>
        <li>Pour améliorer nos services et prévenir la fraude</li>
      </ul>

      <h2>Sécurité des données</h2>
      <p>Nous mettons en œuvre des mesures techniques et organisationnelles, notamment le chiffrement SSL et des contrôles d’accès, pour protéger vos données.</p>

      <h2>Vos droits</h2>
      <p>Selon votre juridiction, vous pouvez disposer de droits pour accéder à vos données personnelles, les corriger ou les supprimer. Contactez <?= e(SUPPORT_EMAIL) ?> pour exercer ces droits.</p>

      <h2>Contact</h2>
      <p>Des questions concernant cette politique ? Écrivez à <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
