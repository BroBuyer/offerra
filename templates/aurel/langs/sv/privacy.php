<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Integritetspolicy ᐉ ' . SITE_NAME;
$page_description = 'Hur ' . SITE_NAME . ' samlar in, använder och skyddar dina personuppgifter.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Juridisk information</span>
    <h1>Integritetspolicy</h1>
    <p class="rmct9">Hur <?= e(SITE_NAME) ?> samlar in, använder och skyddar dina personuppgifter.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Senast uppdaterad: januari 2025</p>

    <h2>1. Inledning</h2>
    <p><?= e(SITE_NAME) ?> (”vi”, ”oss”, ”vår”) förbinder sig att skydda besökares och kunders integritet. Den här integritetspolicyn förklarar vilka personuppgifter vi samlar in, varför vi samlar in dem och hur vi behandlar dem när du använder vår webbplats och våra tjänster.</p>

    <h2>2. Uppgifter vi samlar in</h2>
    <ul>
      <li><strong>Identitetsuppgifter</strong> — namn, födelsedatum, myndighetsutfärdad identitetshandling för identitetsverifiering och KYC/AML-efterlevnad.</li>
      <li><strong>Kontaktuppgifter</strong> — e-postadress, telefonnummer, postadress.</li>
      <li><strong>Finansiella uppgifter</strong> — betalningsuppgifter, transaktionshistorik, information om medlens ursprung.</li>
      <li><strong>Tekniska uppgifter</strong> — IP-adress, webbläsartyp, enhetsidentifierare, cookies och användningsanalys.</li>
    </ul>

    <h2>3. Hur vi använder dina uppgifter</h2>
    <ul>
      <li>För att verifiera identitet och uppfylla regulatoriska skyldigheter.</li>
      <li>För att tillhandahålla, underhålla och förbättra vår plattform och våra tjänster.</li>
      <li>För att behandla betalningar och upptäcka bedrägerier.</li>
      <li>För att kommunicera med dig om ditt konto, uppdateringar och supportärenden.</li>
      <li>För att skicka marknadsföring när du har samtyckt (du kan avanmäla dig när som helst).</li>
    </ul>

    <h2>4. Rättslig grund</h2>
    <p>Vi behandlar personuppgifter på en eller flera av följande rättsliga grunder: fullgörande av avtal, efterlevnad av en rättslig förpliktelse, våra berättigade intressen eller ditt samtycke.</p>

    <h2>5. Delning och utlämnande</h2>
    <p>Vi kan dela personuppgifter med reglerade betalleverantörer, KYC/AML-verifieringspartners, molninfrastrukturleverantörer, professionella rådgivare och behöriga myndigheter när lagen kräver det. Vi säljer inte personuppgifter.</p>

    <h2>6. Internationella överföringar</h2>
    <p>När personuppgifter överförs utanför din jurisdiktion ser vi till att lämpliga skyddsåtgärder finns, inklusive standardavtalsklausuler.</p>

    <h2>7. Lagring av uppgifter</h2>
    <p>Vi lagrar personuppgifter så länge det behövs för att tillhandahålla tjänster och uppfylla rättsliga, regulatoriska och bokföringsmässiga krav — vanligtvis minst fem år efter att ett konto har stängts.</p>

    <h2>8. Dina rättigheter</h2>
    <p>Enligt tillämplig lag kan du begära tillgång, rättelse, radering, begränsning eller portabilitet av dina personuppgifter, och du kan invända mot viss behandling. För att utöva dessa rättigheter, kontakta oss på adressen nedan.</p>

    <h2>9. Cookies</h2>
    <p>Vi använder nödvändiga och analytiska cookies för att driva sajten och förstå användningen. Du kan hantera cookies i webbläsarens inställningar.</p>

    <h2>10. Säkerhet</h2>
    <p>Vi tillämpar administrativa, tekniska och fysiska skyddsåtgärder mot obehörig åtkomst, utlämnande, ändring eller förstörelse av personuppgifter. Inget system är helt säkert, och vi kan inte garantera absolut säkerhet.</p>

    <h2>11. Ändringar</h2>
    <p>Vi kan uppdatera den här policyn då och då. Den senaste versionen finns alltid på den här sidan med uppdateringsdatumet.</p>

    <h2>12. Kontakt</h2>
    <p>För integritetsfrågor eller för att utöva dina rättigheter, kontakta <?= e(SITE_NAME) ?>:s dataskyddsteam via vår kontaktsida.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Tillbaka till startsidan</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
