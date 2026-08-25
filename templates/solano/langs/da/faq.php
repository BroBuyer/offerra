<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ofte stillede spørgsmål ' . SITE_NAME;
$page_description = 'Spørgsmål, besvaret — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Spørgsmål</span>
    <h1>Spørgsmål, besvaret tydeligt</h1>
    <p class="kpnq92g">Det folk spørger om, før de åbner en konto, og svarene vi ville give over telefonen.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Spørgsmål om penge</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Er <?= e(SITE_NAME) ?> svindel?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nej: <?= e(SITE_NAME) ?> arbejder med verifikationskontroller, offentliggør fulde vilkår og risikooplysning, og udbetalinger går altid tilbage til den oprindelige betalingsmetode. Alligevel medfører enhver investering reel risiko, og ingen seriøs platform lover garanteret afkast; vær skeptisk over for alle, der gør det.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Hvad koster det at åbne en konto?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Det er gratis at åbne en konto. Ingen registrerings- eller abonnementsgebyrer; du indbetaler kun det beløb, du vælger at investere.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Hvor lang tid tager udbetalinger?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Anmodninger behandles på hverdage og returneres til den metode, du indbetalte med. Bankoverførsler tager længere end kort eller e-wallets.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Er der et minimumsbeløb?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ja, og det er bevidst lavt, fra <?= e(money_min()) ?>, så du kan starte langsomt og skalere senere. Det præcise beløb vises, før du bekræfter noget.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Ofte stillede spørgsmål</h2>
    <div class="fjl4d">
      <details open><summary>Hvad er minimumsindbetalingen for at komme i gang?</summary><p>Du kan åbne og finansiere din konto med <?= e(money_min()) ?> minimum. Du er fri til at tilføje flere midler, efterhånden som din investeringsplan skrider frem.</p></details>
      <details><summary>Hvordan fungerer udbetalinger?</summary><p>Anmod om udbetaling når som helst fra dit dashboard. Midler returneres til din valgte betalingsmetode med de sædvanlige behandlingstider.</p></details>
      <details><summary>Er mine penge sikkert beskyttet?</summary><p>Konti er beskyttet med professionelle sikkerheds- og identifikationsstandarder. Som ved enhver investering er din kapital udsat for risiko, og værdier kan stige eller falde.</p></details>
      <details><summary>Hvor lang tid tager det at begynde at investere?</summary><p>De fleste medlemmer fuldfører registreringen på få minutter. Når din første indbetaling er behandlet, kan du aktivere en plan med det samme.</p></details>
      <details><summary>Er der skjulte gebyrer?</summary><p>Alle omkostninger vises gennemsigtigt, før du forpligter dig. Du ser altid, hvad der gælder for din plan, uden overraskelser.</p></details>
      <details><summary>Hvad er minimumsalderen for at registrere sig?</summary><p>Du skal være mindst 18 år for at åbne en konto og investere. Verificering kan blive anmodet for at bekræfte din alder og identitet.</p></details>
      <details><summary>Hvilke betalingsmetoder accepteres?</summary><p>Almindelige metoder som debet- og kreditkort, bankoverførsler, udvalgte e-wallets og kryptovaluta accepteres. De præcise muligheder vises ved indbetalingstrinnet.</p></details>
      <details><summary>Hvornår er kundeservice tilgængelig?</summary><p>Vores supportteam er tilgængeligt mandag til fredag, 9:00–18:00, og svarer på hver henvendelse inden for én hverdag.</p></details>
      <details><summary>Hvordan håndteres skat på gevinster?</summary><p>Skat på investeringsgevinster afhænger af reglerne i dit land og er dit ansvar. Vi anbefaler at føre egne optegnelser og konsultere en kvalificeret skatterådgiver.</p></details>
      <details><summary>Hvad er KYC-verificering, og hvorfor er den obligatorisk?</summary><p>KYC (Know Your Customer) er en standard identitetskontrol. Den hjælper med at holde konti sikre og er en rutine del af at åbne en investeringskonto.</p></details>
      <details><summary>Har jeg brug for tidligere investeringserfaring?</summary><p>Nej. Hvert medlem har en personlig finansanalytiker, der guider dig i hvert trin, så du ikke behøver forudgående markedsviden.</p></details>
      <details><summary>Hvem administrerer mine investeringer?</summary><p>En dedikeret finansanalytiker, understøttet af AI-værktøjer, der arbejder efter dine mål og risikoniveau. Analytikeren kombinerer professionel erfaring med teknologi — beslutningerne forbliver menneskelige.</p></details>
      <details><summary>Overholder platformen reglerne?</summary><p>Ja — den overholder nationale finansielle og cybersikkerhedsstandarder med integreret kontobeskyttelse og verificering. Vi er reguleret af Finanstilsynet.</p></details>
      <details><summary>Kan jeg tilføje flere midler til min konto senere?</summary><p>Ja. Du kan genopfylde din konto når som helst og justere din plan med din analytiker, efterhånden som dine mål udvikler sig.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Konto og sikkerhed</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Hvordan fungerer login hos <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Du logger ind med din registrerede e-mail og adgangskode via websiden eller mobilbrowseren. Hvis du har aktiveret totrinsbekræftelse, bliver du bedt om en ekstra kode; hvis du glemmer adgangskoden, kan du nulstille den fra login-skærmen.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Hvorfor har I brug for mine identitetsdokumenter?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Verificering er obligatorisk, før en konto kan flytte midler. Det forhindrer også, at en anden åbner en konto i dit navn.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Har jeg brug for tidligere erfaring?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nej. De fleste medlemmer starter uden nogen erfaring. En specialist guider dig i de første trin, og med en demobalance kan du øve dig.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Kan jeg bruge det på mobilen?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ja, platformen fungerer i mobilbrowseren uden at du behøver installere noget.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Start — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Send besked</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
