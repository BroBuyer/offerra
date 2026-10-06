<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Gebruiksvoorwaarden | ' . SITE_NAME;
$page_description = 'Gebruiksvoorwaarden van het platform ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text">-->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Gebruiksvoorwaarden</h1>
            <p class="bold-title">1. Inleiding</p>
            <p>1.1. Aanvaarding van deze voorwaarden is vereist om onze diensten te gebruiken.</p>
            <p>1.2. Deze voorwaarden vormen een juridisch bindende overeenkomst.</p>
            <p>1.3. Voortgezet gebruik van de website geldt als aanvaarding van de voorwaarden.</p>
            <p>
              1.4. Voor vragen kun je ons bereiken via
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Gebruiksrecht</p>
            <p>2.1. Je moet minstens 18 jaar zijn om de diensten te gebruiken.</p>
            <p>2.1.1. Je moet wonen in een land waar de diensten rechtmatig zijn.</p>
            <p>2.1.2. Je mag niet op een sanctielijst staan.</p>
            <p>2.1.3. Je moet handelingsbekwaam zijn.</p>
            <p>2.2. Voor gebruik door ongeschikte personen zijn wij niet verantwoordelijk.</p>
            <p class="bold-title">3. Gebruikersaccount</p>
            <p>3.1. Je bent verantwoordelijk voor de beveiliging van je account.</p>
            <p>3.2. Deel je wachtwoord niet met derden.</p>
            <p class="bold-title">4. Verboden handelingen</p>
            <p>4.1. Gebruik van de diensten voor onrechtmatige doeleinden is niet toegestaan.</p>
            <p>4.1.1. Witwassen is strikt verboden.</p>
            <p>4.1.2. Fraude wordt gemeld bij de bevoegde autoriteiten.</p>
            <p>4.1.3. Het gebruik van bots of automatiseringssoftware is niet toegestaan.</p>
            <p>4.1.4. Elke poging om het systeem te manipuleren wordt onderzocht.</p>
            <p>4.1.5. Het verspreiden van onjuiste informatie is verboden.</p>
            <p>4.1.6. Pogingen om onderzoek te belemmeren zijn niet toegestaan.</p>
            <p>4.1.7. Bedreigingen aan andere gebruikers zijn verboden.</p>
            <p>4.1.8. Elke onrechtmatige handeling wordt bestraft.</p>
            <p>4.1.9. Pogingen om richtlijnen te omzeilen zijn niet toegestaan.</p>
            <p>4.1.10. Elk misbruik van het systeem wordt serieus genomen.</p>
            <p class="bold-title">5. Intellectuele eigendom</p>
            <p>5.1. Alle inhoud van de website is ons intellectuele eigendom.</p>
            <p>5.2. Gebruikers verwerven geen rechten op website-inhoud.</p>
            <p>5.3. Inhoud mag niet zonder toestemming worden gekopieerd.</p>
            <p>5.4. Derden mogen inhoud niet wijzigen.</p>
            <p class="bold-title">6. Aansprakelijkheidsbeperking</p>
            <p>6.1. Gebruik van de diensten is op eigen risico.</p>
            <p>6.2. Voor verlies door gebruik van de diensten zijn wij niet verantwoordelijk.</p>
            <p>6.3. Elke schade door gebruik van de website is de verantwoordelijkheid van de gebruiker.</p>
            <p>6.4. Voor schade door gebruik van de website aanvaarden wij geen aansprakelijkheid.</p>
            <p>6.5. Technische problemen vallen niet onder onze verantwoordelijkheid.</p>
            <p class="bold-title">7. Informatie</p>
            <p>7.1. Door de diensten te gebruiken ga je akkoord met contactopname.</p>
            <p>7.2. Informatie wordt vertrouwelijk behandeld.</p>
            <p>7.3. Gebruikers wordt aangeraden bewijsstukken te bewaren.</p>
            <p class="bold-title">8. Links en extra bronnen</p>
            <p>8.1. Meer informatie vind je in onze richtlijnen.</p>
            <p>8.2. Externe links zijn geen aanbeveling.</p>
            <p>8.3. We raden aan bronnen te controleren vóór gebruik.</p>
            <p class="bold-title">9. Algemene bepalingen</p>
            <p>9.1. Wij behouden ons het recht voor de diensten op elk moment te wijzigen.</p>
            <p>9.2. De voorwaarden kunnen op elk moment wijzigen.</p>
            <p>9.3. Door de diensten te gebruiken aanvaard je deze voorwaarden.</p>
            <p>9.4. Mondelinge afspraken zijn niet geldig.</p>
            <p>9.5. Niet-uitgeoefende rechten gelden niet als vervallen.</p>
            <p>
              9.6. Als een bepaling ongeldig wordt verklaard, blijven de overige bepalingen van kracht.
            </p>
            <p>9.7. De diensten kunnen door externe aanbieders worden beheerd.</p>
            <p>
              9.8. Op deze voorwaarden is het recht <?= e(geo_in()) ?> van toepassing. Alle geschillen worden voorgelegd aan de
              bevoegde rechter <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
