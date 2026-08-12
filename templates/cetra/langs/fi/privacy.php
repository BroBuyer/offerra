<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Tietosuojakäytäntö');
$page_description = 'Miten ' . SITE_NAME . ' kerää, käyttää ja suojaa henkilötietojasi.';
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
    <nav class="nav-links" aria-label="Etusivu">
      <a href="<?= page_url() ?>#platform">Alusta</a>
      <a href="<?= page_url() ?>#how">Miten se toimii</a>
      <a href="<?= page_url() ?>#markets">Markkinat</a>
      <a href="<?= page_url() ?>#faq">Usein kysytyt kysymykset</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Aloita</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Oikeudelliset tiedot</span>
      <h1>Tietosuojakäytäntö</h1>
      <p class="lede">Miten <?= e(SITE_NAME) ?> kerää, käyttää ja suojaa henkilötietojasi.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Viimeksi päivitetty: tammikuu 2025</p>

      <h2>1. Johdanto</h2>
      <p><?= e(SITE_NAME) ?> (”me”, ”meidän”) sitoutuu suojaamaan kävijöiden ja asiakkaiden yksityisyyttä. Tämä tietosuojakäytäntö selittää, mitä henkilötietoja keräämme, miksi ja miten käsittelemme niitä, kun käytät verkkosivustoamme ja palveluitamme.</p>

      <h2>2. Keräämämme tiedot</h2>
      <ul>
        <li>Henkilöllisyystiedot — nimi, syntymäaika, valtion myöntämät henkilöllisyysasiakirjat rekisteröintiä ja KYC/AML-vaatimustenmukaisuutta varten.</li>
        <li>Yhteystiedot — sähköpostiosoite, puhelinnumero, postiosoite.</li>
        <li>Taloustiedot — maksutiedot, tapahtumahistoria, tiedot varojen alkuperästä.</li>
        <li>Tekniset tiedot — IP-osoite, selaintyyppi, laitetunnisteet, evästeet ja käyttöanalytiikka.</li>
      </ul>

      <h2>3. Miten käytämme tietojasi</h2>
      <ul>
        <li>Henkilöllisyyden vahvistamiseen ja sääntelyvelvoitteiden täyttämiseen.</li>
        <li>Alustamme ja palveluidemme tarjoamiseen, ylläpitoon ja parantamiseen.</li>
        <li>Maksujen käsittelyyn ja petollisen toiminnan havaitsemiseen.</li>
        <li>Viestintään kanssasi tilistäsi, päivityksistä ja tukipyynnöistä.</li>
        <li>Markkinointiviestintään, kun olet antanut suostumuksen (voit peruuttaa milloin tahansa).</li>
      </ul>

      <h2>4. Oikeusperusta</h2>
      <p>Käsittelemme henkilötietoja yhden tai useamman seuraavista laillisista perusteista nojalla: sopimuksen täyttäminen, lakisääteisen velvoitteen noudattaminen, oikeutetut etumme tai suostumuksesi.</p>

      <h2>5. Jakaminen ja luovutus</h2>
      <p>Voimme jakaa henkilötietoja säänneltyjen maksupalveluntarjoajien, KYC/AML-vahvistuskumppaneiden, pilvi-infrastruktuurin tarjoajien, ammattineuvoajien ja toimivaltaisten viranomaisten kanssa lain niin vaatiessa. Emme myy henkilötietoja.</p>

      <h2>6. Kansainväliset siirrot</h2>
      <p>Kun henkilötietoja siirretään oikeudenkäyttöalueesi ulkopuolelle, varmistamme asianmukaiset takeet, mukaan lukien vakiosopimuslausekkeet.</p>

      <h2>7. Tietojen säilytys</h2>
      <p>Säilytämme henkilötietoja niin kauan kuin palveluiden tarjoaminen sekä oikeudelliset, sääntely- ja kirjanpitovaatimukset sitä edellyttävät — tyypillisesti vähintään viisi vuotta tilin sulkemisen jälkeen.</p>

      <h2>8. Oikeutesi</h2>
      <p>Sovellettavan lain mukaisesti voit pyytää henkilötietojesi saatavuutta, oikaisua, poistoa, rajoitusta tai siirrettävyyttä ja voit vastustaa tiettyä käsittelyä. Käyttääksesi näitä oikeuksia ota meihin yhteyttä alla olevaan osoitteeseen.</p>

      <h2>9. Evästeet</h2>
      <p>Käytämme välttämättömiä ja analyyttisiä evästeitä sivuston toimintaan ja käytön ymmärtämiseen. Voit hallita evästeitä selainasetuksissa.</p>

      <h2>10. Turvallisuus</h2>
      <p>Sovellamme hallinnollisia, teknisiä ja fyysisiä suojatoimia henkilötietojen suojaamiseksi luvattomalta käytöltä, luovutukselta, muuttamiselta tai tuhoamiselta. Mikään järjestelmä ei ole täysin turvallinen, emmekä voi taata absoluuttista turvallisuutta.</p>

      <h2>11. Muutokset</h2>
      <p>Voimme päivittää tätä käytäntöä ajoittain. Uusin versio on aina saatavilla tällä sivulla päivitettynä päivämääränä.</p>

      <h2>12. Yhteystiedot</h2>
      <p>Tietosuojakysymyksissä tai oikeuksiesi käyttämiseksi ota yhteyttä <?= e(SITE_NAME) ?>-tietosuojatiimiin <a href="<?= page_url('contacts.php') ?>">yhteystietosivun</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Takaisin etusivulle</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Kaikki oikeudet pidätetään ·
      <a href="<?= page_url('privacy.php') ?>">Tietosuoja</a> ·
      <a href="<?= page_url('conditions.php') ?>">Ehdot</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
