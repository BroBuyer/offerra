<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Meld misbruk ᐉ ' . SITE_NAME;
$page_description = 'Meld misbruk — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Tillid og sikkerhed</span>
    <h1>Meld misbruk</h1>
    <p class="rmct9">Hjelp oss med at holde <?= e(SITE_NAME) ?> sikkert. Meld mistenkelig svindel, identitetstyveri eller misbruk af våre plattform eller brand.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>Hva du skal anmelde</h2>
    <p>Meld gjerne følgende til våre Trust & Safety-team:</p>
    <ul>
      <li>Phishing-e-posts, svindelnettsides eller falske apps, der udgiver sig for at være <?= e(SITE_NAME) ?>.</li>
      <li>Sosiale medier-kontoer, annoncer eller beskedkanaler, der misbruker våre navn, logo eller varemærker.</li>
      <li>Mistanker om kontovertagelse, uautoriseret adgang eller identitetstyveri.</li>
      <li>Mistænkelige betalingsforespørseler, "gjenopprettingsagenter" eller tredjeparter, der hævder at handle på våre vegne.</li>
      <li>Markedsmisbruk, hvitvaskingsbekymringer eller anden ulovlig aktivitet knyttet til våre tjenester.</li>
      <li>Krenkende, truende eller trakasserende oppførsel over for våre personale eller brukere.</li>
    </ul>

    <h2>Slik melder du</h2>
    <p>Send os en detaljeret rapport via en af kanalerne nedenfor. Inkluder om muligt:</p>
    <ul>
      <li>Dato og tidspunkt for hændelsen.</li>
      <li>URL'er, skjermbilder, beskedhoveder, afsenderadresser eller telefonnumre.</li>
      <li>Dine kontoopplysninger (hvis anmeldelsen vedrører kontoen din).</li>
      <li>Enhver anden kontekst, der kan hjelpe våre undersøgelse.</li>
    </ul>

    <div class="ziavo">
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>E-post Trust & Safety</b>
        <span>Brug kontaktsiden for at nå våre Trust & Safety-team. Anmeldelser klassificeres inden for én virkedag.</span>
      </div>
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Sikkerhetsopplysning</b>
        <span>For ansvarlig offentliggjøring af sikkerhetssårbarheter i våre systemer, kontakt os før du deler detaljer offentligt.</span>
      </div>
    </div>

    <h2>Hva skjer der derefter?</h2>
    <p>Vi gjennomgår hver melding. Afhængigt af problemet kan vi kontakte deg for mere information, koordinere med betalingsleverandører eller hostingplattforme for at fjerne svindelinnhold, eller henvise sager til myndigheter eller tilsynsmyndigheter. Vi behandler anmeldelser fortrolig og beskytter, hvor loven tillader det, innsenderens identitet.</p>

    <h2>Presserende saker</h2>
    <p>Hvis du mener du er offer for en forbrytelse, kontakt lokale myndigheter og informer oss. Hvis du mistenker, at kontoen din er kompromittert, skift passord med en gang og varsle oss umiddelbart.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Kontakt Trust & Safety</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Tilbake til forsiden</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
