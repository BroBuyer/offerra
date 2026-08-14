<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ofte stilte spørsmål ' . SITE_NAME;
$page_description = 'Spørsmål, besvart — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Spørgsmål</span>
    <h1>Spørsmål, besvart tydeligt</h1>
    <p class="kpnq92g">Det folk spør om, før de åpner en konto, og svarene vi ville give over telefonen.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Spørsmål om pengerr</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Er <?= e(SITE_NAME) ?> svindel?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nei: <?= e(SITE_NAME) ?> jobber med verifiseringskontroller, offentliggjør fullstendige vilkår og risikoopplysning, og utbetalinger går altid tilbake til den oprindelige betalingsmetode. Alligevel medfører enhver investering reel risiko, og ingen seriøs plattform lover garanteret avkastning; vær skeptisk til alle som gjør det.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Hva koster det at åpne en konto?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Det er gratis at åpne en konto. Ingen registrerings- eller abonnementsgebyrer; du setter inn kun det beløp, du velger å investere.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Hvor lang tid tar utbetalinger?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Forespørseler behandles på virkedage og returneres til metode, du indbetalte med. Bankoverførsler tar lengre end kort eller e-lommebøker.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Er der et minimumsbeløp?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ja, og det er bevisst lavt, fra <?= e(money_min()) ?>, så du kan starte forsiktig og skalere senere. Det præcise beløp vises, før du bekræfter noget.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Ofte stilte spørsmål</h2>
    <div class="fjl4d">
      <details open><summary>Hva er minimumsinnskudden for at komme i gang?</summary><p>Du kan åpne og finansiere kontoen din med <?= e(money_min()) ?> minimum. Du står fritt til til at legge til flere midler, efterhånden som investeringen dinsplan skrider frem.</p></details>
      <details><summary>Hvordan fungerer utbetalinger?</summary><p>Be om utbetaling når som helst fra ditt dashbord. Midler returneres til din valgte betalingsmetode med vanlige behandlingstider.</p></details>
      <details><summary>Er mine penger sikkert beskyttet?</summary><p>Kontoer er beskyttet med profesjonelle sikkerheds- og identifikationsstandarder. Som ved enhver investering er kapitalen din udsat for risiko, og værdier kan stige eller falde.</p></details>
      <details><summary>Hvor lang tid tar det at begynde at investere?</summary><p>De fleste medlemmer fullfører registreringen på få minutter. Når din første innskudd er behandlet, kan du aktivere en plan med en gang.</p></details>
      <details><summary>Er det skjulte gebyrer?</summary><p>Alle omkostninger vises gjennomsiktig, før du forpligter deg. Du ser alltid, hvad der gælder for planen din, uten overraskelser.</p></details>
      <details><summary>Hva er minimumsalderen for at registrere sig?</summary><p>Du må være minst 18 år for at åpne en konto og investere. Verifisering kan blive anmodet for at bekræfte alderen din og identitet.</p></details>
      <details><summary>Hvilke betalingsmetoder aksepteres?</summary><p>Almindelige metoder som debet- og kredittkort, bankoverførsler, udvalgte e-lommebøker og kryptovaluta accepteres. De præcise muligheder vises ved innskuddstrinnet.</p></details>
      <details><summary>Hvornår er kundeservice tilgjengelig?</summary><p>Våre supportteam er tilgjengeligt mandag til fredag, 9:00–18:00, og svarer på hver henvendelse inden for én virkedag.</p></details>
      <details><summary>Hvordan håndteres skatt på gevinster?</summary><p>Skatt på investeringsgevinster avhenger av reglene i landet ditt og er ditt ansvar. Vi anbefaler å føre egne notater og konsultere en kvalifisert skatterådgiver.</p></details>
      <details><summary>Hva er KYC-verifisering, og hvorfor er den obligatorisk?</summary><p>KYC (Know Your Customer) er en standard identitetskontrol. Den hjelper med at holde kontoer sikre og er en rutine del af at åbne en investeringskonto.</p></details>
      <details><summary>Trenger jeg tidligere investeringserfaring?</summary><p>Nei. Hvert medlem har en personlig finansanalytiker, der guider deg i hvert trinnnn, så du ikke trenger tidligere markedskunnskap.</p></details>
      <details><summary>Hvem forvalter investeringene mine?</summary><p>En dedikert finansanalytiker, støttet av AI-verktøy, der jobber efter målene dine og risikonivå. Analytikeren kombinerer professionel erfaring med teknologi — beslutningerne forbliver menneskelige.</p></details>
      <details><summary>Overholder plattformen reglene?</summary><p>Ja — den overholder nasjonale finansielle og cybersikkerhetsstandarder med integrert kontobeskyttelse og verifisering. Vi er regulert av Finanstilsynet.</p></details>
      <details><summary>Kan jeg legge til flere midler til min konto senere?</summary><p>Ja. Du kan fylle på kontoen din når som helst og justere planen din med analytikeren din, efterhånden som målene dine udvikler sig.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Konto og sikkerhet</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Hvordan fungerer innlogging hos <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Du logger inn med din registrerede e-post og passord via nettsiden eller mobilnettleseren. Hvis du har aktiveret totrinnsbekreftelse, bliver du bedt om en ekstra kode; hvis du glemmer passordn, kan du tilbakestille den fra login-skjermern.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Hvorfor trenger dere mine identitetsdokumenter?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Verifisering er obligatorisk før en konto kan flytte midler. Det forhindrer også at noen andre åpner en konto i ditt navn.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Trenger jeg tidligere erfaring?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nei. De fleste medlemmer starter uten erfaring. En spesialist veileder deg i de første trinnene, og med en demosaldo kan du øve deg.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Kan jeg bruke det på mobilen?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ja, plattformen fungerer i mobilnettleseren uten at du trenger å installere noe.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Start — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Send melding</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
