<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Vilkår for brug');
$page_description = 'Læs vilkårene for brug af ' . SITE_NAME . '-handelsplatformen og websitet.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Vilkår for brug</h1>
      <p class="lead">Senest opdateret: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Ved at tilgå <?= e(SITE_NAME) ?> accepterer du disse vilkår for brug. Hvis du ikke er enig, bedes du ikke bruge vores tjenester.</p>

      <h2>Berettigelse</h2>
      <p>Du skal være mindst 18 år og lovligt have tilladelse til at handle finansielle instrumenter i din jurisdiktion.</p>

      <h2>Risikooplysning</h2>
      <p>Handel med kryptovalutaer, forex, CFD'er og andre finansielle instrumenter indebærer betydelig risiko for tab. Tidligere resultater garanterer ikke fremtidige. Handl kun med kapital, du har råd til at tabe.</p>

      <h2>Kontoansvar</h2>
      <p>Du er ansvarlig for at holde dine kontologin fortrolige og for al aktivitet under din konto.</p>

      <h2>Tjenestetilgængelighed</h2>
      <p>Vi tilstræber kontinuerlig tilgængelighed, men garanterer ikke uafbrudt adgang. Vedligeholdelse, markedsforhold eller tekniske problemer kan påvirke tjenesten.</p>

      <h2>Ansvarsbegrænsning</h2>
      <p><?= e(SITE_NAME) ?> er ikke ansvarlig for handelstab eller skader som følge af brug af oplysninger på dette site. Søg uafhængig finansiel rådgivning, hvor det er relevant.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
