<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Privacybeleid');
$page_description = 'Ontdek hoe ' . SITE_NAME . ' uw persoonsgegevens verzamelt, gebruikt en beschermt.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Privacybeleid</h1>
      <p class="lead">Laatst bijgewerkt: <?= date('d-m-Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Dit Privacybeleid beschrijft hoe <?= e(SITE_NAME) ?> („wij”) persoonsgegevens verzamelt en verwerkt wanneer u onze website en diensten gebruikt.</p>

      <h2>Gegevens die we verzamelen</h2>
      <p>We kunnen verzamelen: naam, e-mailadres, telefoonnummer, woonland, IP-adres en informatie die u via formulieren of supportverzoeken verstrekt.</p>

      <h2>Hoe we uw gegevens gebruiken</h2>
      <ul>
        <li>Om uw account aan te maken en te beheren</li>
        <li>Om toegang tot het tradingplatform en klantenondersteuning te bieden</li>
        <li>Om te voldoen aan wettelijke en regelgevende verplichtingen</li>
        <li>Om onze diensten te verbeteren en fraude te voorkomen</li>
      </ul>

      <h2>Gegevensbeveiliging</h2>
      <p>We nemen technische en organisatorische maatregelen, waaronder SSL-versleuteling en toegangscontrole, om uw gegevens te beschermen.</p>

      <h2>Uw rechten</h2>
      <p>Afhankelijk van uw rechtsgebied kunt u rechten hebben op inzage, correctie of verwijdering van uw persoonsgegevens. Neem contact op met <?= e(SUPPORT_EMAIL) ?> om deze rechten uit te oefenen.</p>

      <h2>Contact</h2>
      <p>Vragen over dit beleid? Mail <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
