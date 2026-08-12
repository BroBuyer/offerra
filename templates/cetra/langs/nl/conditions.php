<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Gebruiksvoorwaarden');
$page_description = 'De regels die gelden wanneer u ' . SITE_NAME . ' opent of gebruikt.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
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
      <span class="eyebrow">Legal</span>
      <h1>Gebruiksvoorwaarden</h1>
      <p class="lede">De regels die gelden wanneer u <?= e(SITE_NAME) ?> opent of gebruikt.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Laatst bijgewerkt: januari 2025</p>

      <h2>1. Aanvaarding van de Voorwaarden</h2>
      <p>Door de website en diensten van <?= e(SITE_NAME) ?> te openen of te gebruiken, stemt u ermee in gebonden te zijn aan deze Gebruiksvoorwaarden. Als u niet akkoord gaat, gebruik de diensten dan niet.</p>

      <h2>2. Geschiktheid</h2>
      <p>U moet minstens 18 jaar oud zijn (of de meerderjarigheidsleeftijd in uw rechtsgebied) en rechtsbekwaamheid hebben om een bindende overeenkomst aan te gaan. De diensten worden niet aangeboden aan inwoners van beperkte rechtsgebieden waar een dergelijk aanbod illegaal zou zijn.</p>

      <h2>3. Accountregistratie</h2>
      <p>U stemt ermee in tijdens de registratie accurate, actuele en volledige informatie te verstrekken en deze bij te houden. U bent verantwoordelijk voor de vertrouwelijkheid van uw inloggegevens en voor alle activiteiten op uw account.</p>

      <h2>4. Diensten</h2>
      <p><?= e(SITE_NAME) ?> biedt technologische tools en educatieve informatie met betrekking tot online beleggen. Wij zijn niet uw financiële adviseur. Niets op deze site vormt gepersonaliseerd beleggingsadvies, belastingadvies of een uitnodiging tot koop of verkoop van een financieel instrument.</p>

      <h2>5. Kosten</h2>
      <p>Toepasselijke kosten, spreads en commissies worden op het platform of in het toepasselijke tariefschema bekendgemaakt. U bent verantwoordelijk voor belastingen die voortvloeien uit uw activiteiten.</p>

      <h2>6. Verboden gedrag</h2>
      <ul>
        <li>De diensten gebruiken voor witwassen, terrorismefinanciering, marktmanipulatie of enig illegaal doel.</li>
        <li>Zich voordoen als een andere persoon of valse identiteitsgegevens verstrekken.</li>
        <li>Proberen te interfereren met, te compromitteren of reverse-engineeren van enig deel van het platform.</li>
        <li>Geautomatiseerde tools gebruiken om de diensten anders te benaderen dan uitdrukkelijk toegestaan.</li>
      </ul>

      <h2>7. Intellectueel eigendom</h2>
      <p>Alle content, merken, software en materialen op de site zijn eigendom van <?= e(SITE_NAME) ?> of haar licentiegevers en beschermd door toepasselijke wetten inzake intellectueel eigendom. U krijgt een beperkte, niet-exclusieve, herroepbare licentie om de diensten te gebruiken voor hun beoogde doel.</p>

      <h2>8. Diensten van derden</h2>
      <p>Het platform kan links naar of integraties van diensten van derden bevatten. Wij zijn niet verantwoordelijk voor dergelijke diensten, hun beschikbaarheid, nauwkeurigheid of inhoud.</p>

      <h2>9. Disclaimer</h2>
      <p>De diensten worden geleverd „zoals ze zijn” en „zoals beschikbaar” zonder garanties van welke aard dan ook. Handelen brengt een aanzienlijk risico op verlies met zich mee. Zie onze <a href="<?= page_url('conditions.php') ?>">Risicodisclosure</a> voor details.</p>

      <h2>10. Beperking van aansprakelijkheid</h2>
      <p>Voor zover wettelijk toegestaan is <?= e(SITE_NAME) ?> niet aansprakelijk voor indirecte, incidentele, speciale, gevolg- of punitieve schade, of enig verlies van winst of omzet, voortvloeiend uit uw gebruik van de diensten.</p>

      <h2>11. Vrijwaring</h2>
      <p>U stemt ermee in <?= e(SITE_NAME) ?>, haar affiliates en personeel te vrijwaren van elke claim of eis voortvloeiend uit uw schending van deze Voorwaarden of uw misbruik van de diensten.</p>

      <h2>12. Opschorting en beëindiging</h2>
      <p>We kunnen de toegang tot de diensten op elk moment opschorten of beëindigen, met of zonder voorafgaande kennisgeving, als we van mening zijn dat u deze Voorwaarden of toepasselijk recht heeft geschonden.</p>

      <h2>13. Toepasselijk recht</h2>
      <p>Deze Voorwaarden worden beheerst door de wetten die van toepassing zijn op de zetel van <?= e(SITE_NAME) ?>, zonder aanzien van conflicterende rechtsregels.</p>

      <h2>14. Wijzigingen</h2>
      <p>We kunnen deze Voorwaarden van tijd tot tijd wijzigen. Voortgezet gebruik van de diensten na wijzigingen geldt als aanvaarding van de herziene Voorwaarden.</p>

      <h2>15. Contact</h2>
      <p>Vragen over deze Voorwaarden kunnen worden gestuurd via onze <a href="<?= page_url('contacts.php') ?>">contactpagina</a>.</p>

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
