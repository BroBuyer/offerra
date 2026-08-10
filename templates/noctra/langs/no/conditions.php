<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Bruksvilkår');
$page_description = 'Les vilkårene for bruk av ' . SITE_NAME . '-handelsplattformen og nettstedet.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Bruksvilkår</h1>
      <p class="lead">Sist oppdatert: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Ved å bruke <?= e(SITE_NAME) ?> godtar du disse bruksvilkårene. Hvis du ikke er enig, må du ikke bruke tjenestene våre.</p>

      <h2>Kvalifikasjon</h2>
      <p>Du må være minst 18 år og lovlig tillatt å handle finansielle instrumenter i din jurisdiksjon.</p>

      <h2>Risikoopplysning</h2>
      <p>Handel med kryptovalutaer, forex, CFD-er og andre finansielle instrumenter innebærer betydelig risiko for tap. Tidligere resultater garanterer ikke fremtidige. Handle bare med kapital du har råd til å tape.</p>

      <h2>Kontoansvar</h2>
      <p>Du er ansvarlig for å holde kontopåloggingsdetaljene dine konfidensielle og for all aktivitet under kontoen din.</p>

      <h2>Tjenestetilgjengelighet</h2>
      <p>Vi streber etter kontinuerlig tilgjengelighet, men garanterer ikke uavbrutt tilgang. Vedlikehold, markedsforhold eller tekniske problemer kan påvirke tjenesten.</p>

      <h2>Ansvarsbegrensning</h2>
      <p><?= e(SITE_NAME) ?> er ikke ansvarlig for handelstap eller skader som følge av bruk av informasjon på dette nettstedet. Søk uavhengig finansiell rådgivning der det er relevant.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
