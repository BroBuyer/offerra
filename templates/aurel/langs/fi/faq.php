<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'UKK ' . SITE_NAME;
$page_description = 'Kysymyksiä, vastauksia — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Kysymykset</span>
    <h1>Kysymyksiä, vastattu selkeästi</h1>
    <p class="kpnq92g">Mitä ihmiset kysyvät ennen tilin avaamista — ja vastaukset, jotka antaisimme myös puhelimessa.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Kysymyksiä rahasta</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Onko <?= e(SITE_NAME) ?> huijaus?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ei: <?= e(SITE_NAME) ?> toimii vahvistustarkistuksin, julkaisee ehdot ja riskitiedotteen kokonaan, ja nostot palaavat aina alkuperäiselle maksutavalle. Jokainen sijoitus kantaa kuitenkin todellisen riskin, eikä yksikään vakava alusta lupaa taattuja tuottoja — olkaa varuillanne niiden suhteen, jotka niin tekevät.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Mitä tilin avaaminen maksaa?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Tilin avaaminen on maksutonta. Ei rekisteröintimaksua eikä tilausta; talletatte vain summan, jonka päätätte sijoittaa.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Kuinka kauan nostot kestävät?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Pyynnöt käsitellään arkipäivinä ja palautetaan talletustavallenne. Tilisiirrot kestävät pidempään kuin kortit tai e-lompakot.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Onko vähimmäissummaa?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Kyllä, ja se on tarkoituksella matala, alkaen <?= e(money_min()) ?>, jotta voitte aloittaa pienellä ja lisätä myöhemmin. Tarkka summa näkyy ennen kuin vahvistatte mitään.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Usein kysytyt kysymykset</h2>
    <div class="fjl4d">
      <details open><summary>Mikä on vähimmäistalletus aloitukseen?</summary><p>Voitte avata tilin ja tallettaa alkaen <?= e(money_min()) ?> vähintään. Voitte lisätä varoja vapaasti, kun sijoitussuunnitelma etenee.</p></details>
      <details><summary>Miten nostot toimivat?</summary><p>Pyytäkää nostoa milloin tahansa koontinäytöltä. Varat palautuvat valitsemallenne maksutavalle tavanomaisissa käsittelyajoissa.</p></details>
      <details><summary>Säilytetäänkö rahani turvallisesti?</summary><p>Tilejä suojaa ammattitason tietoturva ja henkilöllisyyden tarkistus. Kuten kaikessa sijoittamisessa, pääoma on riskissä ja arvot voivat laskea tai nousta.</p></details>
      <details><summary>Kuinka kauan sijoittamisen aloittaminen kestää?</summary><p>Useimmat jäsenet viimeistelevät rekisteröinnin muutamassa minuutissa. Kun ensimmäinen talletus on käsitelty, voitte aktivoida suunnitelman heti.</p></details>
      <details><summary>Onko piilotettuja kuluja?</summary><p>Kaikki kulut näkyvät läpinäkyvästi ennen sitoutumista. Näette aina, mitä suunnitelmaanne sovelletaan — ilman yllätyksiä.</p></details>
      <details><summary>Mikä on vähimmäisikä rekisteröitymiseen?</summary><p>Teidän on oltava vähintään 18-vuotiaita avataksenne tilin ja sijoittaaksenne. Vahvistusta voidaan pyytää iän ja henkilöllisyyden varmistamiseksi.</p></details>
      <details><summary>Mitkä maksutavat hyväksytään?</summary><p>Hyväksymme tavanomaiset tavat: debit- ja luottokortit, tilisiirrot, valitut e-lompakot ja kryptovaluutat. Tarkat vaihtoehdot näkyvät talletusvaiheessa.</p></details>
      <details><summary>Milloin asiakastuki on tavoitettavissa?</summary><p>Tukitiimi on tavoitettavissa maanantaista perjantaihin klo 9.00–18.00 ja sitoutuu vastaamaan jokaiseen tiedusteluun yhden arkipäivän kuluessa.</p></details>
      <details><summary>Miten voittojen verot hoidetaan?</summary><p>Sijoitusvoittojen verot riippuvat maanne säännöistä ja ovat teidän vastuullanne. Suosittelemme pitämään omia kirjanpitoja ja keskustelemaan pätevän veroneuvojan kanssa.</p></details>
      <details><summary>Mitä KYC-vahvistus on ja miksi sitä vaaditaan?</summary><p>KYC (Know Your Customer) on henkilöllisyyden vakiotarkistus. Se auttaa pitämään tilit turvassa ja on rutiiniosa sijoitustilin avaamista.</p></details>
      <details><summary>Tarvitsenko aiempaa sijoituskokemusta?</summary><p>Ei. Jokaisella jäsenellä on henkilökohtainen rahoitusanalyytikko, joka ohjaa teitä jokaisessa vaiheessa, joten aiempaa markkinatuntemusta ei tarvita.</p></details>
      <details><summary>Kuka hallinnoi sijoituksiani?</summary><p>Oma rahoitusanalyytikko tekoälytyökalujen tukemana, tavoitteidenne ja riskitasonne mukaan. Analyytikko yhdistää asiantuntemuksen ja teknologian — päätökset pysyvät inhimillisinä.</p></details>
      <details><summary>Täyttääkö alusta sääntelystandardit?</summary><p>Kyllä — se täyttää kansalliset rahoitus- ja kyberturvastandardit, ja tilisuoja sekä vahvistus on rakennettu sisään.</p></details>
      <details><summary>Voinko lisätä varoja tilille myöhemmin?</summary><p>Kyllä. Voitte täydentää tiliä milloin tahansa ja säätää suunnitelmaa analyytikon kanssa, kun tavoitteet kehittyvät.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Tili ja tietoturva</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Miten kirjautuminen toimii palvelussa <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Kirjaudutte rekisteröidyllä sähköpostilla ja salasanalla verkkosivulta tai mobiiliselaimesta. Jos kaksivaiheinen vahvistus on päällä, teiltä pyydetään lisäkoodi; jos unohdatte salasanan, voitte nollata sen kirjautumisnäytöltä.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Miksi tarvitaan henkilöllisyysasiakirjani?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Vahvistus vaaditaan, ennen kuin tili voi siirtää varoja. Se myös estää, ettei kukaan avaa tiliä teidän nimissänne.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Tarvitsenko aiempaa kokemusta?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Ei. Useimmat jäsenet aloittavat ilman sitä. Asiantuntija opastaa ensimmäiset vaiheet, ja demosaldo antaa harjoitella.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Voinko käyttää sitä puhelimella?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Kyllä, alusta toimii mobiiliselaimessa, ei asennettavaa.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Aloita — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Lähetä viesti</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
