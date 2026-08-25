<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Gebruiksvoorwaarden ᐉ ' . SITE_NAME;
$page_description = 'Gebruiksvoorwaarden van ' . SITE_NAME;
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Juridisch</span>
    <h1>Gebruiksvoorwaarden</h1>
    <p class="rmct9">De regels die gelden wanneer u <?= e(SITE_NAME) ?> bezoekt of gebruikt.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Laatste update: januari 2025</p>

    <h2>1. Acceptatie van de voorwaarden</h2>
    <p>Door de website en diensten van <?= e(SITE_NAME) ?> te bezoeken of te gebruiken, gaat u akkoord met deze gebruiksvoorwaarden. Als u niet akkoord gaat, gebruik de diensten dan niet.</p>

    <h2>2. Geschiktheid</h2>
    <p>U moet minimaal 18 jaar oud zijn (of de meerderjarigheidsleeftijd in uw jurisdictie) en juridisch in staat zijn een bindende overeenkomst aan te gaan. De diensten worden niet aangeboden aan inwoners van beperkte jurisdicties waar een dergelijk aanbod illegaal zou zijn.</p>

    <h2>3. Accountregistratie</h2>
    <p>U gaat ermee akkoord accurate, actuele en volledige informatie te verstrekken tijdens registratie en deze informatie bij te houden. U bent verantwoordelijk voor het vertrouwelijk houden van uw inloggegevens en voor alle activiteiten op uw account.</p>

    <h2>4. Diensten</h2>
    <p><?= e(SITE_NAME) ?> levert technologische tools en educatieve informatie over online beleggen. Wij zijn niet uw financieel adviseur. Niets op deze site vormt gepersonaliseerd beleggingsadvies, belastingadvies of een verzoek om enig financieel instrument te kopen of verkopen.</p>

    <h2>5. Kosten</h2>
    <p>Toepasselijke kosten, spreads en vergoedingen worden binnen het platform of in de toepasselijke kostentabel vermeld. U bent verantwoordelijk voor belastingen die voortvloeien uit uw activiteiten.</p>

    <h2>6. Verboden gedrag</h2>
    <ul>
      <li>De diensten gebruiken voor witwassen, terrorismefinanciering, marktmanipulatie of enig illegaal doel.</li>
      <li>Zich voordoen als een andere persoon of valse identiteitsinformatie verstrekken.</li>
      <li>Proberen enig deel van het platform te verstoren, compromitteren of reverse-engineeren.</li>
      <li>Geautomatiseerde tools gebruiken om toegang te krijgen tot de diensten op andere wijze dan uitdrukkelijk toegestaan.</li>
    </ul>

    <h2>7. Intellectueel eigendom</h2>
    <p>Alle content, merken, software en materialen op de website zijn eigendom van <?= e(SITE_NAME) ?> of haar licentiegevers en worden beschermd door toepasselijke intellectuele-eigendomsrechten. U krijgt een beperkte, niet-exclusieve, herroepbare licentie om de diensten te gebruiken voor het beoogde doel.</p>

    <h2>8. Diensten van derden</h2>
    <p>Het platform kan links bevatten naar of integreren met diensten van derden. Wij zijn niet verantwoordelijk voor die diensten of hun beschikbaarheid, nauwkeurigheid of content.</p>

    <h2>9. Disclaimers</h2>
    <p>De diensten worden geleverd "as is" en "as available" zonder enige garantie. Trading brengt aanzienlijk verliesrisico met zich mee. Raadpleeg onze <a href="<?= page_url('risk-disclosure.php') ?>" style="color:var(--accent)">Risicoverklaring</a> voor meer details.</p>

    <h2>10. Aansprakelijkheidsbeperking</h2>
    <p>Voor zover wettelijk toegestaan is <?= e(SITE_NAME) ?> niet aansprakelijk voor indirecte, incidentele, bijzondere, gevolg- of punitieve schade, noch voor enig verlies van winst of omzet, voortvloeiend uit uw gebruik van de diensten.</p>

    <h2>11. Vrijwaring</h2>
    <p>U stemt ermee in <?= e(SITE_NAME) ?>, haar dochterondernemingen en personeel te vrijwaren van claims of procedures voortvloeiend uit uw schending van deze voorwaarden of misbruik van de diensten.</p>

    <h2>12. Opschorting en beëindiging</h2>
    <p>Wij kunnen toegang tot de diensten op elk moment opschorten of beëindigen, met of zonder voorafgaande kennisgeving, als wij menen dat u deze voorwaarden of toepasselijk recht heeft geschonden.</p>

    <h2>13. Toepasselijk recht</h2>
    <p>Deze voorwaarden worden beheerst door het toepasselijke recht in de vestigingsplaats van <?= e(SITE_NAME) ?>, zonder rekening te houden met conflicterende rechtsregels.</p>

    <h2>14. Wijzigingen</h2>
    <p>Wij kunnen deze voorwaarden van tijd tot tijd wijzigen. Voortgezet gebruik van de diensten na wijzigingen geldt als acceptatie van de herziene voorwaarden.</p>

    <h2>15. Contact</h2>
    <p>Vragen over deze voorwaarden kunnen via onze contactpagina worden gestuurd.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Terug naar de startpagina</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
