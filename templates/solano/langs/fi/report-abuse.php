<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ilmoita väärinkäytöstä ᐉ ' . SITE_NAME;
$page_description = 'Ilmoita väärinkäytöstä — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Luottamus ja turvallisuus</span>
    <h1>Ilmoita väärinkäytöstä</h1>
    <p class="etpy2">Auttakaa meitä pitämään <?= e(SITE_NAME) ?> turvassa. Ilmoittakaa epäillystä petoksesta, tekeytymisestä tai alustamme tai merkkimme väärinkäytöstä.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>Mistä ilmoittaa</h2>
    <p>Ilmoittakaa Trust and Safety -tiimillemme mikä tahansa seuraavista:</p>
    <ul>
      <li>Tietojenkalastelusähköpostit, petolliset sivustot tai väärennetyt sovellukset, jotka tekeytyvät palveluksi <?= e(SITE_NAME) ?>.</li>
      <li>Some-tilit, mainokset tai viestintäkanavat, jotka väärinkäyttävät nimeämme, logoa tai tavaramerkkejä.</li>
      <li>Epäily tilin kaappauksesta, luvattomasta pääsystä tai identiteettivarkaudesta.</li>
      <li>Epäilyttävät maksupyynnöt, ”palautusagentit” tai kolmannet osapuolet, jotka väittävät toimivansa puolestamme.</li>
      <li>Markkinoiden väärinkäyttö, rahanpesuepäilyt tai mikä tahansa laiton toiminta, joka liittyy palveluihimme.</li>
      <li>Loukkaava, uhkaava tai häiritsevä käytös henkilöstöämme tai käyttäjiä kohtaan.</li>
    </ul>

    <h2>Miten ilmoittaa</h2>
    <p>Lähettäkää yksityiskohtainen ilmoitus mitä tahansa alla olevaa kanavaa pitkin. Jos voitte, liittäkää:</p>
    <ul>
      <li>Tapahtuman päivämäärä ja kellonaika.</li>
      <li>URL-osoitteet, kuvakaappaukset, viestien otsikot, lähettäjäosoitteet tai puhelinnumerot.</li>
      <li>Tilitietonne (jos ilmoitus koskee tiliänne).</li>
      <li>Muu konteksti, joka voi auttaa selvitystä.</li>
    </ul>

    <div class="ziavo">
      <div class="ws86ccr">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>Trust and Safety -sähköposti</b>
        <span>Tavoittakaa Trust and Safety -tiimi yhteystietosivulta. Ilmoitukset luokitellaan yhden arkipäivän kuluessa.</span>
      </div>
      <div class="ws86ccr">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Tietoturvailmoitus</b>
        <span>Vastuulliseen järjestelmiimme vaikuttavien haavoittuvuuksien ilmoittamiseen ottakaa meihin yhteyttä ennen kuin jaatte yksityiskohtia julkisesti.</span>
      </div>
    </div>

    <h2>Mitä seuraavaksi?</h2>
    <p>Tarkistamme jokaisen ilmoituksen. Asian luonteen mukaan voimme pyytää lisätietoja, tehdä yhteistyötä maksupalvelujen tai hosting-alustojen kanssa petollisen sisällön poistamiseksi tai ohjata asian viranomaisille. Käsittelemme ilmoitukset luottamuksellisesti ja suojaamme ilmoittajien henkilöllisyyden, kun laki sen sallii.</p>

    <h2>Kiireelliset asiat</h2>
    <p>Jos uskotte joutuneenne rikoksen uhriksi, ottakaa yhteyttä paikalliseen poliisiin ja kertokaa myös meille. Jos epäilette tilinne vaarantuneen, vaihtakaa salasana heti ja ilmoittakaa meille viipymättä.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Ota yhteyttä: Trust and Safety</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Takaisin etusivulle</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
