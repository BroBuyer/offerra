<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Misbruik melden ᐉ ' . SITE_NAME;
$page_description = 'Misbruik melden — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Vertrouwen en veiligheid</span>
    <h1>Misbruik melden</h1>
    <p class="rmct9">Help ons <?= e(SITE_NAME) ?> veilig te houden. Meld verdachte fraude, identiteitsfraude of misbruik van ons platform of merk.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>Wat te melden</h2>
    <p>Meld alstublieft een van het volgende aan ons Trust & Safety-team:</p>
    <ul>
      <li>Phishing-e-mails, frauduleuze websites of nep-apps die zich voordoen als <?= e(SITE_NAME) ?>.</li>
      <li>Socialmedia-accounts, advertenties of messagingkanalen die misbruik maken van onze naam, logo of merken.</li>
      <li>Vermoeden van accountovername, ongeautoriseerde toegang of identiteitsdiefstal.</li>
      <li>Verdachte betalingsverzoeken, "recovery agents" of derden die beweren namens ons te handelen.</li>
      <li>Marktmisbruik, zorgen over witwassen of andere illegale activiteit gekoppeld aan onze diensten.</li>
      <li>Beledigend, bedreigend of intimiderend gedrag jegens ons personeel of gebruikers.</li>
    </ul>

    <h2>Hoe te melden</h2>
    <p>Stuur ons een gedetailleerd rapport via een van de kanalen hieronder. Voeg indien mogelijk toe:</p>
    <ul>
      <li>Datum en tijd van het incident.</li>
      <li>URL's, screenshots, message headers, afzenderadressen of telefoonnummers.</li>
      <li>Uw accountgegevens (als de melding uw account betreft).</li>
      <li>Elke andere context die ons onderzoek kan helpen.</li>
    </ul>

    <div class="ziavo">
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>E-mail Trust & Safety</b>
        <span>Gebruik de contactpagina om contact op te nemen met ons Trust & Safety-team. Meldingen worden binnen één werkdag geclassificeerd.</span>
      </div>
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Security disclosure</b>
        <span>Voor responsible disclosure van beveiligingskwetsbaarheden in onze systemen, neem contact met ons op voordat u details publiek deelt.</span>
      </div>
    </div>

    <h2>Wat gebeurt er daarna?</h2>
    <p>Wij beoordelen elke melding. Afhankelijk van de aard kunnen wij contact opnemen voor meer informatie, coördineren met betalingsproviders of hostingplatforms om frauduleuze content te verwijderen, of zaken doorverwijzen naar handhavingsinstanties of toezichthouders. Wij behandelen meldingen vertrouwelijk en beschermen waar wettelijk mogelijk de identiteit van melders.</p>

    <h2>Dringende zaken</h2>
    <p>Als u denkt slachtoffer te zijn van een misdrijf, neem contact op met de lokale politie én informeer ons. Als u vermoedt dat uw account is gecompromitteerd, wijzig direct uw wachtwoord en meld het ons meteen.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Neem contact op met Trust & Safety</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Terug naar de startpagina</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
