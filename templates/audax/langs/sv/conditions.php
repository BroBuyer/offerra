<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Användarvillkor | ' . SITE_NAME;
$page_description = 'Användarvillkor för plattformen ' . SITE_NAME . '.';
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
            <h1>Användarvillkor</h1>
            <p class="bold-title">1. Inledning</p>
            <p>1.1. Du måste godkänna dessa villkor för att använda våra tjänster.</p>
            <p>1.2. Dessa villkor utgör ett juridiskt bindande avtal.</p>
            <p>1.3. Fortsatt användning av webbplatsen innebär att du godkänner villkoren.</p>
            <p>
              1.4. Vid frågor kan du kontakta oss via
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Användningsrätt</p>
            <p>2.1. Du måste vara minst 18 år för att använda tjänsterna.</p>
            <p>2.1.1. Du måste bo i ett land där tjänsterna är lagliga.</p>
            <p>2.1.2. Du får inte finnas på en sanktionslista.</p>
            <p>2.1.3. Du måste ha rättslig handlingsförmåga för att ingå avtal.</p>
            <p>2.2. Vi ansvarar inte för användning av olämpliga personer.</p>
            <p class="bold-title">3. Användarkonto</p>
            <p>3.1. Du ansvarar för säkerheten på ditt konto.</p>
            <p>3.2. Dela inte ditt lösenord med tredje part.</p>
            <p class="bold-title">4. Förbjudna handlingar</p>
            <p>4.1. Användning av tjänsterna i olagliga syften är inte tillåten.</p>
            <p>4.1.1. Penningtvätt är strängt förbjuden.</p>
            <p>4.1.2. Bedrägeri anmäls till behöriga myndigheter.</p>
            <p>4.1.3. Användning av botar eller automationsprogram är inte tillåten.</p>
            <p>4.1.4. Varje försök att manipulera systemet utreds.</p>
            <p>4.1.5. Spridning av felaktig information är förbjuden.</p>
            <p>4.1.6. Försök att hindra utredningar är inte tillåtna.</p>
            <p>4.1.7. Hot mot andra användare är förbjudna.</p>
            <p>4.1.8. Varje olaglig handling kan leda till sanktioner.</p>
            <p>4.1.9. Försök att kringgå riktlinjer är inte tillåtna.</p>
            <p>4.1.10. Varje missbruk av systemet tas på allvar.</p>
            <p class="bold-title">5. Immateriella rättigheter</p>
            <p>5.1. Allt innehåll på webbplatsen är vårt immateriella skydd.</p>
            <p>5.2. Användare får inga rättigheter till webbplatsens innehåll.</p>
            <p>5.3. Innehåll får inte kopieras utan tillstånd.</p>
            <p>5.4. Tredje part får inte ändra innehåll.</p>
            <p class="bold-title">6. Ansvarsbegränsning</p>
            <p>6.1. Användning av tjänsterna sker på egen risk.</p>
            <p>6.2. Vi ansvarar inte för förluster till följd av användning av tjänsterna.</p>
            <p>6.3. Varje förlust till följd av användning av webbplatsen är användarens ansvar.</p>
            <p>6.4. Vi tar inte ansvar för skada orsakad av användning av webbplatsen.</p>
            <p>6.5. Tekniska problem är inte vårt ansvar.</p>
            <p class="bold-title">7. Information</p>
            <p>7.1. När du använder tjänsterna godkänner du att bli kontaktad.</p>
            <p>7.2. Information behandlas konfidentiellt.</p>
            <p>7.3. Användare rekommenderas att föra register.</p>
            <p class="bold-title">8. Länkar och ytterligare resurser</p>
            <p>8.1. Mer information finns i våra regler.</p>
            <p>8.2. Externa länkar innebär inte rekommendation.</p>
            <p>8.3. Vi rekommenderar att kontrollera källor före användning.</p>
            <p class="bold-title">9. Allmänna bestämmelser</p>
            <p>9.1. Vi förbehåller oss rätten att när som helst ändra tjänsterna.</p>
            <p>9.2. Villkoren kan ändras när som helst.</p>
            <p>9.3. När du använder tjänsterna godkänner du dessa villkor.</p>
            <p>9.4. Muntliga avtal är inte giltiga.</p>
            <p>9.5. Outnyttjade rättigheter anses inte vara avstådda.</p>
            <p>
              9.6. Om en bestämmelse förklaras ogiltig gäller övriga fortfarande.
            </p>
            <p>9.7. Tjänsterna kan drivas av externa leverantörer.</p>
            <p>
              9.8. Dessa villkor regleras av lagen <?= e(geo_in()) ?>. Alla tvister hänskjuts till
              behörig domstol <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
