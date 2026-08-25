<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Användarvillkor ᐉ ' . SITE_NAME;
$page_description = 'Användarvillkor för ' . SITE_NAME;
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Juridik</span>
    <h1>Användarvillkor</h1>
    <p class="etpy2">Reglerna som gäller när du besöker eller använder <?= e(SITE_NAME) ?>.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Senast uppdaterad: januari 2025</p>

    <h2>1. Godkännande av villkor</h2>
    <p>Genom att besöka eller använda webbplatsen och tjänsterna hos <?= e(SITE_NAME) ?> godkänner du att vara bunden av dessa användarvillkor. Om du inte godkänner, använd inte tjänsterna.</p>

    <h2>2. Behörighet</h2>
    <p>Du måste vara minst 18 år (eller myndig i din jurisdiktion) och juridiskt kapabel att ingå ett bindande avtal. Tjänsterna erbjuds inte till invånare i begränsade jurisdiktioner där ett sådant erbjudande skulle vara olagligt.</p>

    <h2>3. Kontoregistrering</h2>
    <p>Du samtycker till att lämna korrekta, aktuella och fullständiga uppgifter vid registreringen och att hålla dem uppdaterade. Du ansvarar för att hålla dina inloggningsuppgifter konfidentiella och för all aktivitet på ditt konto.</p>

    <h2>4. Tjänster</h2>
    <p><?= e(SITE_NAME) ?> tillhandahåller tekniska verktyg och utbildningsinformation om investeringar online. Vi är inte din finansiella rådgivare. Ingenting på den här sajten utgör personlig investeringsrådgivning, skatterådgivning eller en uppmaning att köpa eller sälja något finansiellt instrument.</p>

    <h2>5. Avgifter</h2>
    <p>Tillämpliga avgifter, spreadar och provisioner redovisas på plattformen eller i tillämplig prislista. Du ansvarar för skatt som uppstår från din verksamhet.</p>

    <h2>6. Otillåtet beteende</h2>
    <ul>
      <li>Att använda tjänsterna för penningtvätt, finansiering av terrorism, marknadsmanipulation eller något olagligt syfte.</li>
      <li>Att utge sig för att vara en annan person eller lämna falska identitetsuppgifter.</li>
      <li>Att försöka störa, kompromettera eller reverse-engineera någon del av plattformen.</li>
      <li>Att använda automatiserade verktyg för att komma åt tjänsterna på annat sätt än vad som uttryckligen tillåts.</li>
    </ul>

    <h2>7. Immateriella rättigheter</h2>
    <p>Allt innehåll, varumärken, programvara och material på webbplatsen tillhör <?= e(SITE_NAME) ?> eller dess licensgivare och skyddas av tillämplig immaterialrätt. Du beviljas en begränsad, icke-exklusiv, återkallelig licens att använda tjänsterna för deras avsedda ändamål.</p>

    <h2>8. Tredjepartstjänster</h2>
    <p>Plattformen kan innehålla länkar till eller integrera med tredjepartstjänster. Vi ansvarar inte för sådana tjänster, inte heller för deras tillgänglighet, riktighet eller innehåll.</p>

    <h2>9. Ansvarsfriskrivningar</h2>
    <p>Tjänsterna tillhandahålls ”i befintligt skick” och ”i den mån de är tillgängliga” utan garantier av något slag. Handel innebär en väsentlig risk för förlust. Se vår <a href="<?= page_url('risk-disclosure.php') ?>" style="color:var(--accent)">Riskinformation</a> för mer information.</p>

    <h2>10. Ansvarsbegränsning</h2>
    <p>I den utsträckning lagen tillåter ska <?= e(SITE_NAME) ?> inte ansvara för indirekta, tillfälliga, särskilda, följd- eller straffskador, eller förlust av vinst eller intäkter, som uppstår från din användning av tjänsterna.</p>

    <h2>11. Skadeersättning</h2>
    <p>Du samtycker till att hålla <?= e(SITE_NAME) ?>, dess närstående bolag och personal skadeslösa från varje krav som uppstår från ditt brott mot dessa villkor eller ditt missbruk av tjänsterna.</p>

    <h2>12. Avstängning och uppsägning</h2>
    <p>Vi kan stänga av eller avsluta åtkomsten till tjänsterna när som helst, med eller utan meddelande, om vi anser att du har brutit mot dessa villkor eller tillämplig lag.</p>

    <h2>13. Tillämplig lag</h2>
    <p>Dessa villkor styrs av de lagar som gäller vid sätet för <?= e(SITE_NAME) ?>, utan hänsyn till lagvalsregler.</p>

    <h2>14. Ändringar</h2>
    <p>Vi kan ändra dessa villkor då och då. Fortsatt användning av tjänsterna efter ändringar innebär godkännande av de reviderade villkoren.</p>

    <h2>15. Kontakt</h2>
    <p>Frågor om dessa villkor kan skickas via vår kontaktsida.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Tillbaka till startsidan</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
