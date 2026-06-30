<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Vilkår');
$page_description = 'Læs vilkår og betingelser for brug af webstedet og platformen hos ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Vilkår og betingelser</h1>
      <p class="lead">Senest opdateret: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Ved at tilgå <?= e(SITE_NAME) ?> accepterer du disse vilkår. Hvis du ikke accepterer dem, bør du ikke bruge vores tjenester.</p>

      <h2>Berettigelse</h2>
      <p>Du skal være mindst 18 år og have lovlig ret til at handle finansielle instrumenter i din jurisdiktion.</p>

      <h2>Risikoadvarsel</h2>
      <p>Handel med kryptovaluta, forex, CFD’er og andre finansielle instrumenter indebærer en betydelig risiko for tab. Tidligere resultater er ingen garanti for fremtidige resultater. Handl kun for kapital, som du har råd til at tabe.</p>

      <h2>Kontoansvar</h2>
      <p>Du er ansvarlig for at holde dine loginoplysninger fortrolige og for alle aktiviteter, der udføres via din konto.</p>

      <h2>Tilgængelighed</h2>
      <p>Vi tilstræber høj oppetid, men kan ikke garantere uafbrudt adgang. Vedligeholdelse, markedsforhold eller tekniske problemer kan påvirke tilgængeligheden.</p>

      <h2>Ansvarsbegrænsning</h2>
      <p><?= e(SITE_NAME) ?> er ikke ansvarlig for handelstab eller skader, der opstår ved brug af oplysningerne på dette website. Søg om nødvendigt uafhængig finansiel rådgivning.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
