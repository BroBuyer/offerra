<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Privacybeleid');
$page_description = 'Hoe ' . SITE_NAME . ' uw persoonsgegevens verzamelt, gebruikt en beschermt.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Hoofd">
      <a href="<?= page_url() ?>#platform">Platform</a>
      <a href="<?= page_url() ?>#how">Hoe het werkt</a>
      <a href="<?= page_url() ?>#markets">Markten</a>
      <a href="<?= page_url() ?>#faq">Veelgestelde vragen</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Beginnen</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Juridische informatie</span>
      <h1>Privacybeleid</h1>
      <p class="lede">Hoe <?= e(SITE_NAME) ?> uw persoonsgegevens verzamelt, gebruikt en beschermt.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Laatst bijgewerkt: januari 2025</p>

      <h2>1. Inleiding</h2>
      <p><?= e(SITE_NAME) ?> („wij”, „onze”, „ons”) zet zich in om de privacy van bezoekers en klanten te beschermen. Dit Privacybeleid legt uit welke persoonsgegevens we verzamelen, waarom en hoe we ze verwerken wanneer u onze website en diensten gebruikt.</p>

      <h2>2. Informatie die we verzamelen</h2>
      <ul>
        <li>Identiteitsgegevens — naam, geboortedatum, door de overheid uitgegeven identiteitsdocumenten voor registratie en KYC/AML-compliance.</li>
        <li>Contactgegevens — e-mailadres, telefoonnummer, postadres.</li>
        <li>Financiële gegevens — betalingsgegevens, transactiegeschiedenis, informatie over de herkomst van middelen.</li>
        <li>Technische gegevens — IP-adres, browsertype, apparaat-ID's, cookies en gebruiksanalyses.</li>
      </ul>

      <h2>3. Hoe we uw gegevens gebruiken</h2>
      <ul>
        <li>Om identiteit te verifiëren en aan regelgevende verplichtingen te voldoen.</li>
        <li>Om ons platform en onze diensten te leveren, te onderhouden en te verbeteren.</li>
        <li>Om betalingen te verwerken en frauduleuze activiteiten te detecteren.</li>
        <li>Om met u te communiceren over uw account, updates en supportverzoeken.</li>
        <li>Om marketingcommunicatie te sturen wanneer u toestemming heeft gegeven (u kunt zich altijd afmelden).</li>
      </ul>

      <h2>4. Rechtsgrond</h2>
      <p>We verwerken persoonsgegevens op basis van een of meer van de volgende rechtmatige gronden: uitvoering van een overeenkomst, naleving van een wettelijke verplichting, onze legitieme belangen, of uw toestemming.</p>

      <h2>5. Delen en openbaarmaking</h2>
      <p>We kunnen persoonsgegevens delen met gereguleerde betalingsproviders, KYC/AML-verificatiepartners, cloudinfrastructuurproviders, professionele adviseurs en bevoegde autoriteiten wanneer de wet dat vereist. We verkopen geen persoonsgegevens.</p>

      <h2>6. Internationale doorgiften</h2>
      <p>Wanneer persoonsgegevens buiten uw rechtsgebied worden doorgegeven, zorgen we voor passende waarborgen, inclusief standaardcontractbepalingen.</p>

      <h2>7. Gegevensbewaring</h2>
      <p>We bewaren persoonsgegevens zolang nodig om diensten te leveren en te voldoen aan wettelijke, regelgevende en boekhoudkundige eisen — typisch minstens vijf jaar na sluiting van het account.</p>

      <h2>8. Uw rechten</h2>
      <p>Onder voorbehoud van toepasselijk recht kunt u toegang, correctie, wissen, beperking of overdraagbaarheid van uw persoonsgegevens verzoeken, en bezwaar maken tegen bepaalde verwerking. Om deze rechten uit te oefenen, neem contact met ons op via het onderstaande adres.</p>

      <h2>9. Cookies</h2>
      <p>We gebruiken essentiële en analytische cookies om de site te laten werken en gebruik te begrijpen. U kunt cookies beheren via uw browserinstellingen.</p>

      <h2>10. Beveiliging</h2>
      <p>We passen administratieve, technische en fysieke waarborgen toe die zijn ontworpen om persoonsgegevens te beschermen tegen ongeautoriseerde toegang, openbaarmaking, wijziging of vernietiging. Geen enkel systeem is perfect veilig, en we kunnen absolute veiligheid niet garanderen.</p>

      <h2>11. Wijzigingen</h2>
      <p>We kunnen dit Beleid van tijd tot tijd bijwerken. De nieuwste versie is altijd beschikbaar op deze pagina met de bijgewerkte datum.</p>

      <h2>12. Contact</h2>
      <p>Voor privacyvragen of om uw rechten uit te oefenen, neem contact op met het team Gegevensbescherming van <?= e(SITE_NAME) ?> via onze <a href="<?= page_url('contacts.php') ?>">contactpagina</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Terug naar home</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Alle rechten voorbehouden ·
      <a href="<?= page_url('privacy.php') ?>">Privacy</a> ·
      <a href="<?= page_url('conditions.php') ?>">Voorwaarden</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
