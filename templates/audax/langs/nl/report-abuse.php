<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Misbruik melden | ' . SITE_NAME;
$page_description = 'Meld misbruik of verdachte activiteit op ' . SITE_NAME . '.';
$page_canonical = page_url('report-abuse.php');
$active_page = 'report-abuse';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text"> -->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Misbruik melden</h1>
            <p class="bold-title">1. Misbruik melden</p>
            <p>
              1.1. Als je op onze website ongepaste inhoud tegenkomt, meld het ons dan
              via ons contactformulier.
            </p>
            <p>Contact: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. In dit onderdeel kun je misbruik of inhoud beschrijven
              die in strijd is met onze richtlijnen.
            </p>
            <p>
              1.3. Je melding is belangrijk. Geef concrete details zodat we
              het voorval zorgvuldig kunnen onderzoeken.
            </p>
            <p>Door een melding te versturen ga je ook akkoord met ons privacybeleid.</p>
            <p class="bold-title">2. Wie mag melden</p>
            <p>
              2.1. Als je slachtoffer bent van misbruik of ongepast gedrag opmerkt, heb je
              het recht om het te melden.
            </p>
            <p>2.1.1. Je moet minstens 18 jaar zijn om een melding te doen.</p>
            <p>2.1.2. De melding moet waarheidsgetrouw en op feiten gebaseerd zijn.</p>
            <p>2.1.3. Het gebruik van het meldformulier moet in jouw land rechtmatig zijn.</p>
            <p>2.2. Voor valse of kwaadwillige meldingen zijn wij niet verantwoordelijk.</p>
            <p class="bold-title">3. Meldprocedure</p>
            <p>3.1. Wij behouden ons het recht voor alle meldingen van misbruik te onderzoeken.</p>
            <p>3.2. Als een melding gegrond blijkt, nemen we de nodige maatregelen.</p>
            <p class="bold-title">4. Verboden handelingen bij meldingen</p>
            <p>4.1. Gebruik van het formulier voor kwaadwillige doeleinden is niet toegestaan.</p>
            <p>4.1.1. Valse of misleidende meldingen zijn niet toegestaan.</p>
            <p>4.1.2. Andere gebruikers lastigvallen via het meldsysteem is niet toegestaan.</p>
            <p>4.1.3. Het gebruik van bots of automatisering om meldingen te versturen is verboden.</p>
            <p>4.1.4. Elke poging om het meldsysteem te manipuleren wordt onderzocht.</p>
            <p>4.1.5. Gebruik van het systeem om onjuiste informatie te verspreiden is verboden.</p>
            <p>4.1.6. Pogingen om een onderzoek te belemmeren zijn niet toegestaan.</p>
            <p>4.1.7. Gebruik van het systeem voor bedreigingen is niet toegestaan.</p>
            <p>4.1.8. Elke onrechtmatige handeling in verband met meldingen wordt bestraft.</p>
            <p>4.1.9. Pogingen om meldregels te omzeilen zijn niet toegestaan.</p>
            <p>4.1.10. Elk misbruik van het meldsysteem wordt serieus genomen.</p>
            <p class="bold-title">5. Intellectuele eigendom bij meldingen</p>
            <p>
              5.1. Inhoud die je bij een melding van misbruik meestuurt, geeft je geen eigendomsrechten.
            </p>
            <p>5.2. Door een melding verwerven gebruikers geen rechten op website-inhoud.</p>
            <p>5.3. Meldingen worden uitsluitend voor onderzoek gebruikt.</p>
            <p>5.4. Derden mogen meldingen niet kopiëren of wijzigen.</p>
            <p class="bold-title">6. Aansprakelijkheidsbeperking bij meldingen</p>
            <p>6.1. Door een melding te versturen aanvaard je de verantwoordelijkheid voor de inhoud.</p>
            <p>6.2. Voor gevolgen van ingediende meldingen zijn wij niet verantwoordelijk.</p>
            <p>6.3. Elke schade uit een melding is de verantwoordelijkheid van de gebruiker.</p>
            <p>6.4. Voor schade door meldingen aanvaarden wij geen aansprakelijkheid.</p>
            <p>
              6.5. Technische problemen van het meldsysteem vallen niet onder onze verantwoordelijkheid.
            </p>
            <p class="bold-title">7. Informatie over de meldprocedure</p>
            <p>
              7.1. Door het meldsysteem te gebruiken ga je akkoord dat we je om meer informatie mogen vragen.
            </p>
            <p>7.2. Meldingen worden vertrouwelijk behandeld.</p>
            <p>7.3. Gebruikers wordt aangeraden een kopie van hun meldingen te bewaren.</p>
            <p class="bold-title">8. Extra links en bronnen</p>
            <p>8.1. Meer over het melden van misbruik vind je in onze richtlijnen.</p>
            <p>8.2. Links naar externe bronnen zijn geen aanbeveling van ons.</p>
            <p>8.3. We raden je aan elke bron te controleren voordat je die gebruikt.</p>
            <p class="bold-title">9. Algemene bepalingen over meldingen</p>
            <p>
              9.1. Wij behouden ons het recht voor de meldprocedure te wijzigen, op te schorten of te beëindigen
              op elk moment.
            </p>
            <p>
              9.2. De voorwaarden van deze procedure kunnen op elk moment wijzigen. Voortgezet gebruik van
              de meldservice na zulke wijzigingen geldt als aanvaarding van de nieuwe voorwaarden.
            </p>
            <p>9.3. Door een melding te versturen aanvaardt de gebruiker deze voorwaarden volledig.</p>
            <p>
              9.4. Elke overeenkomst of verklaring, schriftelijk of mondeling, die niet onder de
              specifieke punten van deze voorwaarden valt, is juridisch ongeldig en bindt geen van de partijen.
            </p>
            <p>
              9.5. Een door deze voorwaarden verleend recht dat niet wordt uitgeoefend — of dat nu door toestemming,
              nalatigheid of onvermogen komt — geldt als vervallen. Gedeeltelijke of volledige uitoefening van een recht
              sluit latere uitoefening niet uit en beperkt die niet.
            </p>
            <p>
              9.6. Als een bevoegde rechter een bepaling van deze voorwaarden nietig verklaart, geldt die
              als nietig. De rest van de voorwaarden blijft echter volledig van kracht.
            </p>
            <p>
              9.7. Erkend wordt dat deze voorwaarden het beheer van de website door derden mogelijk maken,
              die hun rechten en plichten mogen overdragen. De gebruiker mag
              zijn rechten en plichten niet aan een andere partij overdragen.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
