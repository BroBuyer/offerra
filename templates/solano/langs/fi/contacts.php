<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Yhteystiedot ' . SITE_NAME . ' ᐉ Olemme täällä auttamassa';
$page_description = 'Onko teillä kysymys palvelusta ' . SITE_NAME . ' tai tilistänne?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Yhteystiedot</span>
    <h1>Olemme täällä auttamassa</h1>
    <p class="kpnq92g">Onko teillä kysymys palvelusta <?= e(SITE_NAME) ?> tai tilistänne? Tukitiimi auttaa mielellään. Kirjoittakaa meille, niin vastaamme niin pian kuin voimme.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Ennen kuin kirjoitatte meille</h2>
    <p>Useimpiin kysymyksiin on jo vastaus sivustolla, ja tarkistaminen ensin on yleensä nopeampaa kuin vastauksen odottaminen.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">UKK</a> — kulut, nostot, vahvistus ja vähimmäissummat.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Näin se toimii</a> — mitä tapahtuu rekisteröitymisen jälkeen, vaiheittain.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Hinnat</a> — mikä on maksutonta ja missä kulu voi ilmaantua.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Aloita — <?= e(money_min()) ?> min.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Miten otatte meihin yhteyttä</h2>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Kanava</th><th scope="col">Paras kun</th><th scope="col">Vastaus</th></tr></thead>
      <tbody>
        <tr><td>Sähköpostituki — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Kysymykset tilistä, vahvistuksesta, nostoista</td><td>Vastaamme yleensä yhden arkipäivän kuluessa.</td></tr>
        <tr><td>Soittopyyntö</td><td>Kaikki, mikä selittyy paremmin puhelimessa</td><td>Tukiajat: maanantaista perjantaihin klo 9.00–18.00</td></tr>
        <tr><td>Väärinkäytösilmoitus — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/report-abuse</a></td><td>Tekeytyminen meiksi, merkin väärinkäyttö, epäilyttävät viestit</td><td>Käsitellään vastaanoton yhteydessä</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Mitä odottaa, kun otatte yhteyttä</h2>
    <h3>Mikä kanava valita</h3>
    <p>Sähköposti on oikea valinta kaikkeen, jossa on liite: henkilöllisyystarkistukset, nostokyselyt, kysymykset tiliotteesta. Soittopyyntölomake on muuhun, koska useimmat tilikysymykset ratkeavat nopeammin kahden minuutin keskustelussa kuin neljässä viestissä.</p>
    <h4>Tukiaikojen ulkopuolella</h4>
    <p>Illalla tai viikonloppuna lähetetyt viestit jäävät jonoon ja niihin vastataan heti seuraavana arkipäivänä saapumisjärjestyksessä.</p>
    <h3>Yksityiskohdat, jotka kannattaa mainita</h3>
    <p>Rekisteröity sähköposti ja likimääräinen päivämäärä riittävät tilin löytämiseen. Älkää koskaan lähettäkö salasanaa, koko kortin numeroa tai kertakoodia: kukaan tiimistämme ei koskaan pyydä niitä teiltä.</p>
    <h4>Jos jokin ei näytä oikealta</h4>
    <p>Ilmoittakaa siitä samana päivänä. Kaikki, johon liittyy maksu, jota ette tunnista, käsitellään heti, tavallisen jonon ohi.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
