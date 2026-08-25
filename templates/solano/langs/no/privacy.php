<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Personvernerklæring ᐉ ' . SITE_NAME;
$page_description = 'Hvordan ' . SITE_NAME . ' samler inn, bruker og beskytter dine personopplysninger.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Juridisk informasjon</span>
    <h1>Personvernerklæring</h1>
    <p class="etpy2">Hvordan <?= e(SITE_NAME) ?> samler inn, bruker og beskytter dine personopplysninger.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Sist oppdatert: januar 2025</p>

    <h2>1. Introduksjon</h2>
    <p><?= e(SITE_NAME) ?> («vi», «oss», «våre») forplikter seg til å beskytte personvernet til besøkende og kunder. Denne personvernerklæringen forklarer hvilke personopplysninger vi samler inn, hvorfor vi samler dem inn, og hvordan vi behandler dem når du bruker nettsiden og tjenestene våre.</p>

    <h2>2. Opplysninger vi samler inn</h2>
    <ul>
      <li><strong>Identitetsdata</strong> — navn, fødselsdato, offisiell statlig identifikasjon for identitetsverifisering og overholdelse av KYC/AML-regler.</li>
      <li><strong>Kontaktdata</strong> — e-postadresse, telefonnummer, postadresse.</li>
      <li><strong>Finansielle data</strong> — betalingsopplysninger, transaksjonshistorikk, opplysninger om midlenes opprinnelse.</li>
      <li><strong>Tekniske data</strong> — IP-adresse, nettlesertype, enhets-ID-er, informasjonskapsler og bruksanalyse.</li>
    </ul>

    <h2>3. Slik bruker vi dataene dine</h2>
    <ul>
      <li>For å verifisere identitet og oppfylle regulatoriske forpliktelser.</li>
      <li>For å levere, vedlikeholde og forbedre plattformen og tjenestene våre.</li>
      <li>For å behandle betalinger og oppdage svindelaktivitet.</li>
      <li>For å kommunisere med deg om kontoen din, oppdateringer og supporthenvendelser.</li>
      <li>For å sende markedsføringskommunikasjon når du har gitt samtykke (du kan når som helst melde deg av).</li>
    </ul>

    <h2>4. Rettsgrunnlag</h2>
    <p>Vi behandler personopplysninger på grunnlag av ett eller flere av følgende rettsgrunnlag: oppfyllelse av kontrakt, overholdelse av juridisk forpliktelse, våre legitime interesser eller ditt samtykke.</p>

    <h2>5. Deling og offentliggjøring</h2>
    <p>Vi kan dele personopplysninger med regulerte betalingsleverandører, KYC/AML-verifiseringspartnere, skyinfrastrukturleverandører, profesjonelle rådgivere og kompetente myndigheter når loven krever det. Vi selger ikke personopplysninger.</p>

    <h2>6. Internasjonale overføringer</h2>
    <p>Når personopplysninger overføres utenfor din jurisdiksjon, sikrer vi passende garantier, inkludert standardkontraktsklausuler.</p>

    <h2>7. Lagring av data</h2>
    <p>Vi lagrer personopplysninger så lenge det er nødvendig for å levere tjenester og oppfylle juridiske, regulatoriske og regnskapsmessige krav — typisk minst fem år etter at en konto er stengt.</p>

    <h2>8. Dine rettigheter</h2>
    <p>I henhold til gjeldende lov kan du be om innsyn, retting, sletting, begrensning eller dataportabilitet for dine personopplysninger, og du kan protestere mot visse behandlinger. For å utøve disse rettighetene, kontakt oss via adressen nedenfor.</p>

    <h2>9. Informasjonskapsler</h2>
    <p>Vi bruker nødvendige og analytiske informasjonskapsler for å drive siden og forstå bruk. Du kan administrere informasjonskapsler via nettleserinnstillingene dine.</p>

    <h2>10. Sikkerhet</h2>
    <p>Vi anvender administrative, tekniske og fysiske sikkerhetstiltak designet for å beskytte personopplysninger mot uautorisert tilgang, offentliggjøring, endring eller destruksjon. Intet system er perfekt sikkert, og vi kan ikke garantere absolutt sikkerhet.</p>

    <h2>11. Endringer</h2>
    <p>Vi kan oppdatere denne erklæringen fra tid til annen. Den nyeste versjonen vil alltid være tilgjengelig på denne siden med oppdatert dato.</p>

    <h2>12. Kontakt</h2>
    <p>For spørsmål om personvern eller for å utøve dine rettigheter, kontakt personvernteamet hos <?= e(SITE_NAME) ?> via kontaktsiden vår.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Tilbake til forsiden</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
