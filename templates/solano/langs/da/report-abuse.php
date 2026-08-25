<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Anmeld misbrug ᐉ ' . SITE_NAME;
$page_description = 'Anmeld misbrug — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Tillid og sikkerhed</span>
    <h1>Anmeld misbrug</h1>
    <p class="etpy2">Hjælp os med at holde <?= e(SITE_NAME) ?> sikkert. Anmeld mistænkelig svindel, identitetstyveri eller misbrug af vores platform eller brand.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>Hvad du skal anmelde</h2>
    <p>Anmeld venligst følgende til vores Trust & Safety-team:</p>
    <ul>
      <li>Phishing-e-mails, svindelwebsites eller falske apps, der udgiver sig for at være <?= e(SITE_NAME) ?>.</li>
      <li>Sociale medier-konti, annoncer eller beskedkanaler, der misbruger vores navn, logo eller varemærker.</li>
      <li>Mistænke om kontovertagelse, uautoriseret adgang eller identitetstyveri.</li>
      <li>Mistænkelige betalingsanmodninger, "recovery agents" eller tredjeparter, der hævder at handle på vores vegne.</li>
      <li>Markedsmisbrug, hvidvask-bekymringer eller anden ulovlig aktivitet knyttet til vores tjenester.</li>
      <li>Krænkende, truende eller chikanerende adfærd over for vores personale eller brugere.</li>
    </ul>

    <h2>Sådan anmelder du</h2>
    <p>Send os en detaljeret rapport via en af kanalerne nedenfor. Inkluder om muligt:</p>
    <ul>
      <li>Dato og tidspunkt for hændelsen.</li>
      <li>URL'er, screenshots, beskedhoveder, afsenderadresser eller telefonnumre.</li>
      <li>Dine kontooplysninger (hvis anmeldelsen vedrører din konto).</li>
      <li>Enhver anden kontekst, der kan hjælpe vores undersøgelse.</li>
    </ul>

    <div class="ziavo">
      <div class="ws86ccr">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>E-mail Trust & Safety</b>
        <span>Brug kontaktsiden for at nå vores Trust & Safety-team. Anmeldelser klassificeres inden for én hverdag.</span>
      </div>
      <div class="ws86ccr">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Sikkerhedsoplysning</b>
        <span>For ansvarlig offentliggørelse af sikkerhedssårbarheder i vores systemer, kontakt os før du deler detaljer offentligt.</span>
      </div>
    </div>

    <h2>Hvad sker der derefter?</h2>
    <p>Vi gennemgår hver anmeldelse. Afhængigt af problemet kan vi kontakte dig for mere information, koordinere med betalingsudbydere eller hostingplatforme for at fjerne svindelindhold, eller henvise sager til myndigheder eller tilsynsmyndigheder. Vi behandler anmeldelser fortroligt og beskytter, hvor loven tillader det, anmelderens identitet.</p>

    <h2>Presserende sager</h2>
    <p>Hvis du mener, du er offer for en forbrydelse, kontakt lokale myndigheder og informer os. Hvis du mistænker, at din konto er kompromitteret, skift adgangskode med det samme og underret os straks.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Kontakt Trust & Safety</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Tilbage til forsiden</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
