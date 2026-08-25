<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Tietosuojakäytäntö ᐉ ' . SITE_NAME;
$page_description = 'Miten ' . SITE_NAME . ' kerää, käyttää ja suojaa henkilötietojanne.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Oikeudelliset tiedot</span>
    <h1>Tietosuojakäytäntö</h1>
    <p class="etpy2">Miten <?= e(SITE_NAME) ?> kerää, käyttää ja suojaa henkilötietojanne.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Viimeksi päivitetty: tammikuu 2025</p>

    <h2>1. Johdanto</h2>
    <p><?= e(SITE_NAME) ?> (”me”, ”meidät”, ”meidän”) sitoutuu suojaamaan vierailijoiden ja asiakkaiden yksityisyyttä. Tämä tietosuojakäytäntö selittää, mitä henkilötietoja keräämme, miksi ja miten käsittelemme niitä, kun käytätte verkkosivustoamme ja palvelujamme.</p>

    <h2>2. Tiedot, joita keräämme</h2>
    <ul>
      <li><strong>Identiteettitiedot</strong> — nimi, syntymäaika, viranomaisen myöntämä henkilöllisyystodistus vahvistusta ja KYC/AML-vaatimustenmukaisuutta varten.</li>
      <li><strong>Yhteystiedot</strong> — sähköpostiosoite, puhelinnumero, postiosoite.</li>
      <li><strong>Taloudelliset tiedot</strong> — maksutiedot, tapahtumahistoria, tiedot varojen alkuperästä.</li>
      <li><strong>Tekniset tiedot</strong> — IP-osoite, selaimen tyyppi, laitetunnisteet, evästeet ja käyttöanalytiikka.</li>
    </ul>

    <h2>3. Miten käytämme tietojanne</h2>
    <ul>
      <li>Henkilöllisyyden vahvistamiseen ja sääntelyvelvoitteiden täyttämiseen.</li>
      <li>Alustan ja palvelujen tarjoamiseen, ylläpitoon ja parantamiseen.</li>
      <li>Maksujen käsittelyyn ja petollisen toiminnan havaitsemiseen.</li>
      <li>Yhteydenpitoon tilistänne, päivityksistä ja tukipyynnöistä.</li>
      <li>Markkinointiviestintään suostumuksellanne (voitte perua milloin tahansa).</li>
    </ul>

    <h2>4. Oikeusperuste</h2>
    <p>Käsittelemme henkilötietoja yhdellä tai useammalla seuraavista perusteista: sopimuksen täyttäminen, lakisääteinen velvoite, oikeutetut etumme tai suostumuksenne.</p>

    <h2>5. Jakaminen ja luovuttaminen</h2>
    <p>Voimme jakaa henkilötietoja säännellyille maksupalveluntarjoajille, KYC/AML-vahvistuskumppaneille, pilvi-infrastruktuurin tarjoajille, ammatillisille neuvonantajille ja toimivaltaisille viranomaisille, kun laki sitä vaatii. Emme myy henkilötietoja.</p>

    <h2>6. Kansainväliset siirrot</h2>
    <p>Kun henkilötietoja siirretään lainkäyttöalueenne ulkopuolelle, varmistamme asianmukaiset suojatoimet, mukaan lukien vakiosopimuslausekkeet.</p>

    <h2>7. Tietojen säilytys</h2>
    <p>Säilytämme henkilötietoja niin kauan kuin tarvitaan palveluihin sekä oikeudellisiin, sääntely- ja kirjanpitovaatimuksiin — yleensä vähintään viisi vuotta tilin sulkemisen jälkeen.</p>

    <h2>8. Oikeutenne</h2>
    <p>Sovellettavan lain mukaan voitte pyytää pääsyä, oikaisua, poistoa, rajoitusta tai siirrettävyyttä henkilötietoihinne ja voitte vastustaa tiettyä käsittelyä. Käyttäkää näitä oikeuksia alla olevaan osoitteeseen.</p>

    <h2>9. Evästeet</h2>
    <p>Käytämme välttämättömiä ja analytiikkaevästeitä sivuston toimintaan ja käytön ymmärtämiseen. Evästeitä hallitsette selaimen asetuksista.</p>

    <h2>10. Tietoturva</h2>
    <p>Sovellamme hallinnollisia, teknisiä ja fyysisiä suojauksia henkilötietojen suojaamiseksi luvattomalta pääsyltä, paljastamiselta, muuttamiselta tai tuhoamiselta. Mikään järjestelmä ei ole täysin turvallinen, emmekä voi taata ehdotonta tietoturvaa.</p>

    <h2>11. Muutokset</h2>
    <p>Voimme päivittää tätä käytäntöä ajoittain. Uusin versio on aina tällä sivulla päivityspäivämäärän kanssa.</p>

    <h2>12. Yhteystiedot</h2>
    <p>Tietosuojakysymyksiin tai oikeuksien käyttämiseen ottakaa yhteyttä <?= e(SITE_NAME) ?>-tietosuojatiimiin yhteystietosivulta.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Takaisin etusivulle</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
