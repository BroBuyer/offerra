<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Bruksvilkår');
$page_description = 'Read the terms and conditions for using the ' . SITE_NAME . ' trading platform and website.';
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
      <p>Ved å få tilgang til <?= e(SITE_NAME) ?> godtar du disse bruksvilkårene. Hvis du ikke godtar dem, ikke bruk tjenestene våre.</p>

      <h2>Egnethet</h2>
      <p>Du må være over 18 år og juridisk kompetent til å handle finansielle instrumenter i din jurisdiksjon.</p>

      <h2>Risikoadvarsel</h2>
      <p>Handel med kryptovaluta, forex, CFD-er og andre finansielle instrumenter medfører betydelig risiko for tap. Tidligere resultater garanterer ikke fremtidige resultater. Handle bare med kapital du har råd til å tape.</p>

      <h2>Kontoansvar</h2>
      <p>Du er ansvarlig for konfidensialiteten til innloggingsopplysningene dine og for all aktivitet som skjer via kontoen din.</p>

      <h2>Tjenestetilgjengelighet</h2>
      <p>Vi streber etter kontinuerlig tilgjengelighet, men kan ikke garantere uavbrutt tilgang. Vedlikehold, markedsforhold eller tekniske problemer kan påvirke tjenesten.</p>

      <h2>Ansvarsbegrensning</h2>
      <p><?= e(SITE_NAME) ?> er ikke ansvarlig for handelstap eller skade som følger av bruk av informasjon på dette nettstedet. Rådfør deg med og uavhengig finansrådgiver ved behov.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
