<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Pogoji uporabe');
$page_description = 'Pravila, ki veljajo, ko dostopate ali uporabljate ' . SITE_NAME . '.';
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
    <nav class="nav-links" aria-label="Glavni">
      <a href="<?= page_url() ?>#platform">Platforma</a>
      <a href="<?= page_url() ?>#how">Kako deluje</a>
      <a href="<?= page_url() ?>#markets">Trgi</a>
      <a href="<?= page_url() ?>#faq">Pogosto zastavljena vprašanja</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Začnite</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Legal</span>
      <h1>Pogoji uporabe</h1>
      <p class="lede">Pravila, ki veljajo, ko dostopate ali uporabljate <?= e(SITE_NAME) ?>.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Zadnja posodobitev: januar 2025</p>

      <h2>1. Sprejemanje pogojev</h2>
      <p>Z dostopom ali uporabo spletnega mesta in storitev <?= e(SITE_NAME) ?> se strinjate, da vas zavezujejo ti pogoji uporabe. Če se ne strinjate, ne uporabljajte storitev.</p>

      <h2>2. Upravičenost</h2>
      <p>Biti morate stari najmanj 18 let (ali polnoletnost v vaši jurisdikciji) in imeti pravno sposobnost za sklenitev zavezujoče pogodbe. Storitve niso na voljo prebivalcem omejenih jurisdikcij, kjer bi bila takšna ponudba nezakonita.</p>

      <h2>3. Registracija računa</h2>
      <p>Strinjate se, da boste med registracijo zagotovili točne, aktualne in popolne podatke ter jih posodabljali. Odgovorni ste za ohranjanje zaupnosti svojih poverilnic in za vse dejavnosti v vašem računu.</p>

      <h2>4. Storitve</h2>
      <p><?= e(SITE_NAME) ?> ponuja tehnološka orodja in izobraževalne informacije v zvezi s spletnimi naložbami. Nismo vaš finančni svetovalec. Nič na tem spletnem mestu ne predstavlja prilagojenega naložbenega nasveta, davčnega svetovanja ali nagovarjanja k nakupu ali prodaji katerega koli finančnega instrumenta.</p>

      <h2>5. Pristojbine</h2>
      <p>Veljavni stroški, razmiki in provizije so razkriti na platformi ali v ustreznem razporedu nadomestil. Odgovorni ste za vse davke, ki izhajajo iz vaših dejavnosti.</p>

      <h2>6. Prepovedano ravnanje</h2>
      <ul>
        <li>Uporaba storitev za pranje denarja, financiranje terorizma, tržno manipulacijo ali kakršne koli nezakonite namene.</li>
        <li>Lažno predstavljanje druge osebe ali posredovanje lažnih podatkov o identiteti.</li>
        <li>Poskus vmešavanja, ogrožanja ali obratnega inženiringa katerega koli dela platforme.</li>
        <li>Uporaba avtomatiziranih orodij za dostop do storitev, razen kot je izrecno dovoljeno.</li>
      </ul>

      <h2>7. Intelektualna lastnina</h2>
      <p>Vsa vsebina, blagovne znamke, programska oprema in gradiva na spletnem mestu so last <?= e(SITE_NAME) ?> ali njegovih dajalcev licence in so zaščiteni z veljavno zakonodajo o intelektualni lastnini. Podeljena vam je omejena, neizključna, preklicna licenca za uporabo storitev za predvideni namen.</p>

      <h2>8. Storitve tretjih oseb</h2>
      <p>Platforma lahko vsebuje povezave do storitev tretjih oseb ali jih integrira. Ne odgovarjamo za takšne storitve, njihovo razpoložljivost, točnost ali vsebino.</p>

      <h2>9. Zavrnitve odgovornosti</h2>
      <p>Storitve so na voljo »kot so« in »kot so na voljo« brez kakršnih koli jamstev. Trgovanje vključuje veliko tveganje izgube. Oglejte si naše <a href="<?= page_url('conditions.php') ?>">Razkritje tveganja</a>za podrobnosti.</p>

      <h2>10. Omejitev odgovornosti</h2>
      <p>V največjem obsegu, ki ga dovoljuje zakonodaja, <?= e(SITE_NAME) ?> ni odgovoren za kakršno koli posredno, naključno, posebno, posledično ali kazensko škodo ali kakršno koli izgubo dobička ali prihodka, ki izhaja iz vaše uporabe storitev.</p>

      <h2>11. Odškodnina</h2>
      <p>Strinjate se, da boste <?= e(SITE_NAME) ?>, njegove podružnice in osebje odškodovali in odškodovali od kakršnih koli zahtevkov ali zahtev, ki izhajajo iz vaše kršitve teh pogojev ali zlorabe storitev.</p>

      <h2>12. Začasna prekinitev in odpoved</h2>
      <p>Kadar koli lahko začasno prekinemo ali prekinemo dostop do storitev, z obvestilom ali brez njega, če menimo, da ste kršili te pogoje ali veljavno zakonodajo.</p>

      <h2>13. Veljavno pravo</h2>
      <p>Te pogoje urejajo zakoni, ki veljajo na sedežu <?= e(SITE_NAME) ?>, ne glede na načela kolizije zakonov.</p>

      <h2>14. Spremembe</h2>
      <p>Te pogoje lahko občasno spremenimo. Nadaljnja uporaba storitev po spremembah pomeni sprejetje spremenjenih pogojev.</p>

      <h2>15. Kontakt</h2>
      <p>Vprašanja o teh pogojih lahko pošljete prek naše<a href="<?= page_url('contacts.php') ?>">kontaktna stran</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Nazaj na dom</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Vse pravice pridržane ·
      <a href="<?= page_url('privacy.php') ?>">Zasebnost</a> ·
      <a href="<?= page_url('conditions.php') ?>">Pogoji</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
