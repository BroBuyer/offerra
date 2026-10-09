<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Rapportera missbruk | ' . SITE_NAME;
$page_description = 'Rapportera missbruk eller misstänkt aktivitet på ' . SITE_NAME . '.';
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
            <h1>Rapportera missbruk</h1>
            <p class="bold-title">1. Rapportering av missbruk</p>
            <p>
              1.1. Om du har stött på olämpligt innehåll på vår webbplats, rapportera det till
              oss via kontaktformuläret.
            </p>
            <p>Kontakta oss: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. I det här avsnittet kan du lämna information om missbruk eller innehåll
              som bryter mot våra regler.
            </p>
            <p>
              1.3. Din rapport är viktig för oss. Ange konkreta uppgifter så att vi kan
              undersöka händelsen ordentligt.
            </p>
            <p>När du skickar in en rapport godkänner du också vår integritetspolicy.</p>
            <p class="bold-title">2. Vem kan rapportera</p>
            <p>
              2.1. Om du har blivit utsatt för missbruk eller har sett olämpligt beteende har du
              rätt att rapportera det.
            </p>
            <p>2.1.1. Du måste vara minst 18 år för att skicka in en rapport.</p>
            <p>2.1.2. Rapporten ska vara sanningsenlig och baserad på fakta.</p>
            <p>2.1.3. Användning av rapporteringsformuläret måste vara laglig i ditt land.</p>
            <p>2.2. Vi ansvarar inte för falska eller illvilliga rapporter.</p>
            <p class="bold-title">3. Rapporteringsförfarande</p>
            <p>3.1. Vi förbehåller oss rätten att utreda alla rapporter om missbruk.</p>
            <p>3.2. Om en rapport bedöms som berättigad vidtar vi nödvändiga åtgärder.</p>
            <p class="bold-title">4. Förbjudna handlingar vid rapportering</p>
            <p>4.1. Användning av formuläret i illvilliga syften är inte tillåten.</p>
            <p>4.1.1. Falska eller vilseledande rapporter är inte tillåtna.</p>
            <p>4.1.2. Det är inte tillåtet att trakassera andra användare via rapporteringssystemet.</p>
            <p>4.1.3. Användning av botar eller automatisering för att skicka rapporter är förbjuden.</p>
            <p>4.1.4. Varje försök att manipulera rapporteringssystemet utreds.</p>
            <p>4.1.5. Användning av systemet för att sprida felaktig information är förbjuden.</p>
            <p>4.1.6. Försök att hindra en utredning är inte tillåtna.</p>
            <p>4.1.7. Användning av systemet för hot är inte tillåten.</p>
            <p>4.1.8. Varje olaglig handling i samband med rapportering kan leda till sanktioner.</p>
            <p>4.1.9. Försök att kringgå rapporteringsreglerna är inte tillåtna.</p>
            <p>4.1.10. Varje missbruk av rapporteringssystemet tas på allvar.</p>
            <p class="bold-title">5. Immateriella rättigheter vid rapportering</p>
            <p>
              5.1. Innehåll du skickar in när du rapporterar missbruk ger dig inga äganderättigheter.
            </p>
            <p>5.2. Genom att skicka in en rapport får användare inga rättigheter till webbplatsens innehåll.</p>
            <p>5.3. Rapporter används enbart för utredningsändamål.</p>
            <p>5.4. Tredje part får inte kopiera eller ändra rapporter.</p>
            <p class="bold-title">6. Ansvarsbegränsning vid rapportering</p>
            <p>6.1. När du skickar in en rapport tar du ansvar för innehållet.</p>
            <p>6.2. Vi ansvarar inte för följder av inskickade rapporter.</p>
            <p>6.3. Varje förlust till följd av en rapport är användarens ansvar.</p>
            <p>6.4. Vi tar inte ansvar för skada orsakad av rapporter.</p>
            <p>
              6.5. Tekniska problem med rapporteringssystemet är inte vårt ansvar.
            </p>
            <p class="bold-title">7. Information om rapporteringsförfarandet</p>
            <p>
              7.1. När du använder rapporteringssystemet godkänner du att vi kan kontakta dig för mer information.
            </p>
            <p>7.2. Rapporter behandlas konfidentiellt.</p>
            <p>7.3. Användare rekommenderas att spara en kopia av sina rapporter.</p>
            <p class="bold-title">8. Fler länkar och resurser</p>
            <p>8.1. Mer om hur du rapporterar missbruk finns i våra regler.</p>
            <p>8.2. Länkar till externa källor innebär inte att vi rekommenderar dem.</p>
            <p>8.3. Vi rekommenderar att du kontrollerar varje källa innan du använder den.</p>
            <p class="bold-title">9. Allmänna bestämmelser om rapporter</p>
            <p>
              9.1. Vi förbehåller oss rätten att ändra, avbryta eller avsluta rapporteringsförfarandet
              när som helst.
            </p>
            <p>
              9.2. Villkoren för detta förfarande kan ändras när som helst. Fortsatt användning av
              rapporteringstjänsten efter sådana ändringar innebär att du godkänner de nya villkoren.
            </p>
            <p>9.3. Genom att skicka in en rapport godkänner användaren dessa villkor fullt ut.</p>
            <p>
              9.4. Varje avtal eller uttalande, skriftligt eller muntligt, som inte faller under de
              specifika punkterna i dessa villkor är ogiltigt och binder ingen av parterna.
            </p>
            <p>
              9.5. En rättighet enligt dessa villkor som inte utövas — vare sig på grund av samtycke,
              försummelse eller oförmåga — anses vara avstådd. Delvis eller fullständig utövning av en rättighet
              utesluter eller begränsar inte senare utövning.
            </p>
            <p>
              9.6. Om en behörig domstol förklarar en bestämmelse i dessa villkor ogiltig ska den
              anses ogiltig. Resten av villkoren gäller dock fortfarande fullt ut.
            </p>
            <p>
              9.7. Det erkänns att dessa villkor gör det möjligt för tredje part att driva webbplatsen,
              och att de kan överlåta rättigheter och skyldigheter. Användaren får inte överlåta
              sina rättigheter och skyldigheter till en annan part.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
