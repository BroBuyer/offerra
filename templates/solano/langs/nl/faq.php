<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Veelgestelde vragen ' . SITE_NAME;
$page_description = 'Vragen, beantwoord — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Vragen</span>
    <h1>Vragen, duidelijk beantwoord</h1>
    <p class="kpnq92g">Wat mensen vragen voordat ze een account openen, en de antwoorden die wij telefonisch zouden geven.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Vragen over geld</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Is <?= e(SITE_NAME) ?> oplichting?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nee: <?= e(SITE_NAME) ?> werkt met verificatiecontroles, publiceert volledige voorwaarden en risicowaarschuwing, en opnames gaan altijd terug naar de oorspronkelijke betaalmethode. Toch brengt elke investering echt risico met zich mee en geen serieus platform belooft gegarandeerd rendement; wees wantrouwig tegenover iedereen die dat wel doet.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Wat kost het om een account te openen?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Een account openen is gratis. Geen registratie- of abonnementskosten; u stort alleen het bedrag dat u wilt investeren.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Hoe lang duren opnames?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Aanvragen worden op werkdagen verwerkt en teruggestort naar de methode waarmee u stortte. Bankoverschrijvingen duren langer dan kaarten of e-wallets.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Is er een minimumbedrag?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ja, en het is bewust laag, vanaf <?= e(money_min()) ?>, zodat u rustig kunt beginnen en later kunt opschalen. Het exacte bedrag wordt getoond voordat u iets bevestigt.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Veelgestelde vragen</h2>
    <div class="fjl4d">
      <details open><summary>Wat is de minimale storting om te beginnen?</summary><p>U kunt uw account openen en financieren met <?= e(money_min()) ?> minimum. U kunt meer fondsen toevoegen naarmate uw beleggingsplan vordert.</p></details>
      <details><summary>Hoe werken opnames?</summary><p>Vraag op elk moment een opname aan via uw dashboard. Fondsen worden teruggestort naar uw gekozen betaalmethode, met de gebruikelijke verwerkingstijden.</p></details>
      <details><summary>Is mijn geld veilig beschermd?</summary><p>Accounts zijn beschermd met professionele beveiligings- en identificatiestandaarden. Zoals bij elke investering loopt uw kapitaal risico en kunnen waarden stijgen of dalen.</p></details>
      <details><summary>Hoe lang duurt het voordat ik kan beginnen met beleggen?</summary><p>De meeste leden voltooien de registratie binnen enkele minuten. Zodra uw eerste storting is verwerkt, kunt u direct een plan activeren.</p></details>
      <details><summary>Zijn er verborgen kosten?</summary><p>Alle kosten worden transparant getoond voordat u zich committeert. U ziet altijd wat op uw plan van toepassing is, zonder verrassingen.</p></details>
      <details><summary>Wat is de minimumleeftijd om te registreren?</summary><p>U moet minimaal 18 jaar zijn om een account te openen en te beleggen. Verificatie kan worden gevraagd om uw leeftijd en identiteit te bevestigen.</p></details>
      <details><summary>Welke betaalmethoden worden geaccepteerd?</summary><p>Gangbare methoden zoals debet- en creditcards, bankoverschrijvingen, geselecteerde e-wallets en cryptocurrency worden geaccepteerd. De exacte opties worden getoond bij de stortingsstap.</p></details>
      <details><summary>Wanneer is de klantenservice beschikbaar?</summary><p>Ons supportteam is beschikbaar van maandag tot vrijdag, 9:00–18:00, en reageert op elke vraag binnen één werkdag.</p></details>
      <details><summary>Hoe worden belastingen op winst afgehandeld?</summary><p>Belasting op beleggingswinst hangt af van de regelgeving in uw land en is uw verantwoordelijkheid. Wij raden aan eigen administratie bij te houden en een gekwalificeerde belastingadviseur te raadplegen.</p></details>
      <details><summary>Wat is KYC-verificatie en waarom is het verplicht?</summary><p>KYC (Know Your Customer) is een standaard identiteitscontrole. Het helpt accounts veilig te houden en maakt deel uit van het openen van een beleggingsaccount.</p></details>
      <details><summary>Heb ik eerdere beleggingservaring nodig?</summary><p>Nee. Elk lid heeft een persoonlijke financieel analist die u bij elke stap begeleidt, dus u heeft geen voorkennis van de markten nodig.</p></details>
      <details><summary>Wie beheert mijn beleggingen?</summary><p>Een toegewijde financieel analist, ondersteund door AI-tools, werkend volgens uw doelen en risiconiveau. De analist combineert professionele ervaring met technologie — beslissingen blijven menselijk.</p></details>
      <details><summary>Voldoet het platform aan de regelgeving?</summary><p>Ja — het voldoet aan nationale financiële en cyberbeveiligingsstandaarden, met geïntegreerde accountbescherming en verificatie. Wij worden gereguleerd door de AFM.</p></details>
      <details><summary>Kan ik later meer fondsen toevoegen aan mijn account?</summary><p>Ja. U kunt uw account op elk moment aanvullen en uw plan met uw analist aanpassen naarmate uw doelen veranderen.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Account en beveiliging</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Hoe werkt inloggen bij <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">U logt in met uw geregistreerde e-mailadres en wachtwoord via de website of mobiele browser. Als u tweestapsverificatie hebt ingeschakeld, wordt om een extra code gevraagd; als u uw wachtwoord bent vergeten, kunt u het resetten vanaf het inlogscherm.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Waarom hebben jullie mijn identiteitsdocumenten nodig?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Verificatie is verplicht voordat een account fondsen kan verplaatsen. Het voorkomt ook dat iemand anders een account op uw naam opent.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Heb ik eerdere ervaring nodig?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nee. De meeste leden beginnen zonder enige ervaring. Een specialist begeleidt u in de eerste stappen en met een demobalance kunt u oefenen.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Kan ik het op mijn mobiel gebruiken?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ja, het platform werkt in de mobiele browser zonder dat u iets hoeft te installeren.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Begin — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Bericht verzenden</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
