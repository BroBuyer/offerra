<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Privacybeleid ᐉ ' . SITE_NAME;
$page_description = 'Hoe ' . SITE_NAME . ' uw persoonlijke gegevens verzamelt, gebruikt en beschermt.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Juridische informatie</span>
    <h1>Privacybeleid</h1>
    <p class="rmct9">Hoe <?= e(SITE_NAME) ?> uw persoonlijke gegevens verzamelt, gebruikt en beschermt.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Laatste update: januari 2025</p>

    <h2>1. Inleiding</h2>
    <p><?= e(SITE_NAME) ?> ("wij", "ons", "onze") zet zich in voor de privacy van bezoekers en klanten. Dit privacybeleid legt uit welke persoonsgegevens wij verzamelen, waarom wij dat doen en hoe wij die behandelen wanneer u onze website en diensten gebruikt.</p>

    <h2>2. Gegevens die wij verzamelen</h2>
    <ul>
      <li><strong>Identiteitsgegevens</strong> — naam, geboortedatum, officieel door de overheid uitgegeven identificatie voor identiteitsverificatie en naleving van KYC/AML-regelgeving.</li>
      <li><strong>Contactgegevens</strong> — e-mailadres, telefoonnummer, postadres.</li>
      <li><strong>Financiële gegevens</strong> — betalingsgegevens, transactiegeschiedenis, informatie over herkomst van fondsen.</li>
      <li><strong>Technische gegevens</strong> — IP-adres, browsertype, apparaat-ID's, cookies en gebruiksanalyse.</li>
    </ul>

    <h2>3. Hoe wij uw gegevens gebruiken</h2>
    <ul>
      <li>Om identiteit te verifiëren en aan regelgevingsverplichtingen te voldoen.</li>
      <li>Om ons platform en onze diensten te leveren, onderhouden en verbeteren.</li>
      <li>Om betalingen te verwerken en frauduleuze activiteiten te detecteren.</li>
      <li>Om met u te communiceren over uw account, updates en supportverzoeken.</li>
      <li>Om marketingcommunicatie te sturen wanneer u daarvoor toestemming heeft gegeven (u kunt zich op elk moment afmelden).</li>
    </ul>

    <h2>4. Rechtsgrond</h2>
    <p>Wij verwerken persoonsgegevens op basis van een of meer van de volgende rechtsgronden: uitvoering van een overeenkomst, naleving van een wettelijke verplichting, onze gerechtvaardigde belangen of uw toestemming.</p>

    <h2>5. Delen en openbaarmaking</h2>
    <p>Wij kunnen persoonsgegevens delen met gereguleerde betalingsproviders, KYC/AML-verificatiepartners, cloudinfrastructuurproviders, professionele adviseurs en bevoegde autoriteiten wanneer de wet dat vereist. Wij verkopen geen persoonsgegevens.</p>

    <h2>6. Internationale doorgifte</h2>
    <p>Wanneer persoonsgegevens buiten uw jurisdictie worden overgedragen, zorgen wij voor passende waarborgen, waaronder standaardcontractbepalingen.</p>

    <h2>7. Bewaring van gegevens</h2>
    <p>Wij bewaren persoonsgegevens zolang nodig om diensten te leveren en te voldoen aan wettelijke, regelgevings- en administratieve verplichtingen — doorgaans minimaal vijf jaar na sluiting van een account.</p>

    <h2>8. Uw rechten</h2>
    <p>Onder voorbehoud van toepasselijk recht kunt u verzoeken om inzage, rectificatie, verwijdering, beperking of overdraagbaarheid van uw persoonsgegevens, en bezwaar maken tegen bepaalde verwerkingen. Om deze rechten uit te oefenen, neem contact met ons op via het onderstaande adres.</p>

    <h2>9. Cookies</h2>
    <p>Wij gebruiken essentiële en analytische cookies om de site te laten functioneren en gebruik te begrijpen. U kunt cookies beheren via uw browserinstellingen.</p>

    <h2>10. Beveiliging</h2>
    <p>Wij passen administratieve, technische en fysieke maatregelen toe om persoonsgegevens te beschermen tegen ongeautoriseerde toegang, openbaarmaking, wijziging of vernietiging. Geen enkel systeem is perfect veilig en wij kunnen absolute beveiliging niet garanderen.</p>

    <h2>11. Wijzigingen</h2>
    <p>Wij kunnen dit beleid van tijd tot tijd bijwerken. De meest recente versie staat altijd op deze pagina met de bijgewerkte datum.</p>

    <h2>12. Contact</h2>
    <p>Voor privacyvragen of om uw rechten uit te oefenen, neem contact op met het gegevensbeschermingsteam van <?= e(SITE_NAME) ?> via onze contactpagina.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Terug naar de startpagina</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
