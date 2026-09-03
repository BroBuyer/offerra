<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Privatlivspolitik');
$page_description = 'Les hvordan ' . SITE_NAME . ' samler inn, bruker og beskytter personopplysningene dine.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Privatlivspolitik</h1>
      <p class="lead">Sist oppdatert: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Denne personvernerklæringen beskriver hvordan <?= e(SITE_NAME) ?> («vi») samler inn og behandler personopplysninger når du bruker nettstedet og tjenestene våre.</p>

      <h2>Hvilken informasjon vi samler inn</h2>
      <p>Vi kan samle inn: navn, e-postadresse, telefonnummer, bostedsland, IP-adresse og informasjon du oppgir via skjemaer eller supporthenvendelser.</p>

      <h2>Hvordan vi bruker informasjonen din</h2>
      <ul>
        <li>For å opprette og administrere kontoen din</li>
        <li>For å gi tilgang til handelsplattformen og kundestøtte</li>
        <li>For å oppfylle juridiske og regulatoriske forpliktelser</li>
        <li>For å forbedre tjenestene våre og forhindre svindel</li>
      </ul>

      <h2>Datasikkerhet</h2>
      <p>Vi iverksetter tekniske og organisatoriske tiltak, inkludert SSL-kryptering og tilgangskontroll, for å beskytte dataene dine.</p>

      <h2>Dine rettigheter</h2>
      <p>Avhengig av jurisdiksjonen din kan du ha rett til innsyn, retting eller sletting av personopplysninger. Kontakt os via <?= e(SUPPORT_EMAIL) ?> for å utøve disse rettighetene.</p>

      <h2>Kontakt</h2>
      <p>Spørsmål om denne policyen? Kontakt os via <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
