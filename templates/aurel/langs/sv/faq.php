<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Vanliga frågor ' . SITE_NAME;
$page_description = 'Frågor, besvarade — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Frågor</span>
    <h1>Frågor, besvarade tydligt</h1>
    <p class="kpnq92g">Vad folk frågar innan de öppnar ett konto — och svaren vi skulle ge dig i telefon.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Frågor om pengarna</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Är <?= e(SITE_NAME) ?> en bluff?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nej: <?= e(SITE_NAME) ?> arbetar med verifieringskontroller, publicerar villkor och riskinformation i sin helhet, och uttag går alltid tillbaka till den ursprungliga betalningsmetoden. Samtidigt bär varje investering verklig risk och ingen seriös plattform lovar garanterad avkastning — var försiktig med den som gör det.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Vad kostar det att öppna ett konto?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Att öppna ett konto är gratis. Ingen registreringsavgift och inget abonnemang; du sätter bara in det belopp du väljer att investera.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Hur lång tid tar uttag?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Förfrågningar behandlas på arbetsdagar och går tillbaka till den metod du satte in med. Banköverföringar tar längre tid än kort eller e-plånböcker.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Finns det ett minsta belopp?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ja, och det är medvetet lågt, från <?= e(money_min()) ?>, så att du kan börja smått och lägga till mer senare. Den exakta siffran visas innan du bekräftar något.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Vanliga frågor</h2>
    <div class="fjl4d">
      <details open><summary>Vilken är minsta insättning för att komma igång?</summary><p>Du kan öppna och sätta in på ditt konto från <?= e(money_min()) ?> som minimum. Du kan lägga till mer när din investeringsplan utvecklas.</p></details>
      <details><summary>Hur fungerar uttag?</summary><p>Begär ett uttag när som helst från översikten. Medlen går tillbaka till den betalningsmetod du valt, med vanliga handläggningstider.</p></details>
      <details><summary>Förvaras mina pengar säkert?</summary><p>Konton skyddas med säkerhet på professionell nivå och identitetskontroller. Som vid varje investering är kapitalet i risk och värden kan både sjunka och stiga.</p></details>
      <details><summary>Hur lång tid tar det att börja investera?</summary><p>De flesta medlemmar slutför registreringen på några minuter. När din första insättning är behandlad kan du aktivera ett upplägg direkt.</p></details>
      <details><summary>Finns det dolda avgifter?</summary><p>Alla kostnader visas transparent innan du förbinder dig. Du ser alltid vad som gäller för ditt upplägg — utan överraskningar.</p></details>
      <details><summary>Vilken är lägsta ålder för att registrera sig?</summary><p>Du måste vara minst 18 år för att öppna ett konto och investera. Verifiering kan begäras för att bekräfta din ålder och identitet.</p></details>
      <details><summary>Vilka betalningsmetoder accepteras?</summary><p>Vanliga metoder som debit- och kreditkort, banköverföringar, utvalda e-plånböcker och kryptovalutor accepteras. De exakta alternativen visas vid insättningen.</p></details>
      <details><summary>När är kundsupporten tillgänglig?</summary><p>Vårt supportteam finns tillgängligt måndag till fredag, 9:00–18:00, och åtar sig att svara på varje förfrågan inom en arbetsdag.</p></details>
      <details><summary>Hur hanteras skatt på vinster?</summary><p>Skatt på investeringsvinster beror på reglerna i ditt land och är ditt ansvar. Vi rekommenderar att du för egna underlag och talar med en kvalificerad skatterådgivare.</p></details>
      <details><summary>Vad är KYC-verifiering och varför krävs den?</summary><p>KYC (Know Your Customer) är en standardkontroll av din identitet. Den hjälper till att hålla konton säkra och är en rutin när du öppnar ett investeringskonto.</p></details>
      <details><summary>Behöver jag tidigare investeringserfarenhet?</summary><p>Nej. Varje medlem har en personlig finansanalytiker som guidar dig i varje steg, så du behöver ingen tidigare kunskap om marknaderna.</p></details>
      <details><summary>Vem förvaltar mina investeringar?</summary><p>En dedikerad finansanalytiker, stödd av AI-verktyg, utifrån dina mål och din risknivå. Analytikern kombinerar yrkeskunskap med teknik — besluten förblir mänskliga.</p></details>
      <details><summary>Uppfyller plattformen regulatoriska krav?</summary><p>Ja — den uppfyller nationella finans- och cybersäkerhetskrav, med inbyggt kontoskydd och verifiering.</p></details>
      <details><summary>Kan jag lägga till mer pengar på kontot senare?</summary><p>Ja. Du kan fylla på kontot när som helst och justera upplägget med din analytiker när dina mål ändras.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Konto och säkerhet</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Hur fungerar inloggning på <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Du loggar in med din registrerade e-post och ditt lösenord från webbplatsen eller en mobil webbläsare. Om du har slagit på tvåstegsverifiering får du ange en extra kod; om du glömmer lösenordet kan du återställa det från själva inloggningsskärmen.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Varför behöver ni mina identitetshandlingar?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Verifiering krävs innan ett konto kan flytta medel. Den hindrar också att någon annan öppnar ett konto i ditt namn.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Behöver jag tidigare erfarenhet?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Nej. De flesta medlemmar börjar utan. En specialist går igenom de första stegen med dig, och ett demosaldo låter dig öva.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Kan jag använda det i telefonen?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ja, plattformen fungerar i en mobil webbläsare utan något att installera.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Börja — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Skicka ett meddelande</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
