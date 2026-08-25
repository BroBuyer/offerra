<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Uvjeti korištenja ᐉ ' . SITE_NAME;
$page_description = 'Uvjeti korištenja za ' . SITE_NAME;
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Pravno</span>
    <h1>Uvjeti korištenja</h1>
    <p class="etpy2">Pravila koja se primjenjuju kada pristupate ili koristite <?= e(SITE_NAME) ?>.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Zadnje ažuriranje: siječanj 2025.</p>

    <h2>1. Prihvaćanje uvjeta</h2>
    <p>Pristupom ili korištenjem web stranice i usluga <?= e(SITE_NAME) ?> prihvaćate ove uvjete korištenja. Ako se ne slažete, ne koristite usluge.</p>

    <h2>2. Podobnost</h2>
    <p>Morate imati najmanje 18 godina (ili dob punoljetnosti u svojoj jurisdikciji) i biti pravno sposobni sklopiti obvezujući ugovor. Usluge se ne nude stanovnicima ograničenih jurisdikcija gdje bi takva ponuda bila protuzakonita.</p>

    <h2>3. Registracija računa</h2>
    <p>Suglasni ste pružiti točne, aktualne i potpune podatke tijekom registracije i održavati ih ažuriranima. Odgovorni ste za povjerljivost svojih vjerodajnica i za sve aktivnosti na računu.</p>

    <h2>4. Usluge</h2>
    <p><?= e(SITE_NAME) ?> pruža tehnološke alate i edukativne informacije o online ulaganju. Nismo vaš financijski savjetnik. Ništa na ovoj stranici ne predstavlja personalizirano investicijsko savjetovanje, porezni savjet niti poziv na kupnju ili prodaju bilo kojeg financijskog instrumenta.</p>

    <h2>5. Naknade</h2>
    <p>Primjenjive naknade, spreadovi i provizije objavljuju se unutar platforme ili u odgovarajućoj tablici naknada. Odgovorni ste za sve poreze proizašle iz vaših aktivnosti.</p>

    <h2>6. Zabranjeno ponašanje</h2>
    <ul>
      <li>Korištenje usluga za pranje novca, financiranje terorizma, manipulaciju tržištem ili bilo koju ilegalnu svrhu.</li>
      <li>Lažno predstavljanje ili pružanje lažnih identifikacijskih podataka.</li>
      <li>Pokušaj ometanja, kompromitiranja ili reverse inženjeringa bilo kojeg dijela platforme.</li>
      <li>Korištenje automatiziranih alata za pristup uslugama na način koji nije izričito dopušten.</li>
    </ul>

    <h2>7. Intelektualno vlasništvo</h2>
    <p>Sav sadržaj, zaštitni znakovi, softver i materijali na web stranici vlasništvo su <?= e(SITE_NAME) ?> ili njezinih davatelja licencije i zaštićeni su primjenjivim zakonima o intelektualnom vlasništvu. Dobivate ograničenu, neisključivu i opozivu licencu za korištenje usluga u predviđenu svrhu.</p>

    <h2>8. Usluge trećih strana</h2>
    <p>Platforma može sadržavati poveznice ili integracije s uslugama trećih strana. Nismo odgovorni za te usluge niti za njihovu dostupnost, točnost ili sadržaj.</p>

    <h2>9. Odricanja od odgovornosti</h2>
    <p>Usluge se pružaju „kakve jesu" i „prema dostupnosti" bez ikakvih jamstava. Trgovanje uključuje značajan rizik gubitka. Pogledajte našu <a href="<?= page_url('risk-disclosure.php') ?>" style="color:var(--accent)">objavu rizika</a> za više detalja.</p>

    <h2>10. Ograničenje odgovornosti</h2>
    <p>U najvećoj mjeri dopuštenoj zakonom <?= e(SITE_NAME) ?> ne odgovara za neizravne, slučajne, posebne, posljedične ili kaznene štete, niti za gubitak dobiti ili prihoda proizašao iz korištenja usluga.</p>

    <h2>11. Odšteta</h2>
    <p>Suglasni ste obeštetiti i zaštititi <?= e(SITE_NAME) ?>, njezine podružnice i osoblje od svih potraživanja ili postupaka proizašlih iz vašeg kršenja ovih uvjeta ili zlouporabe usluga.</p>

    <h2>12. Suspenzija i raskid</h2>
    <p>Pristup uslugama možemo suspendirati ili prekinuti u bilo kojem trenutku, s ili bez prethodne obavijesti, ako smatramo da ste prekršili ove uvjete ili primjenjivi zakon.</p>

    <h2>13. Mjerodavno pravo</h2>
    <p>Ovi uvjeti uređeni su primjenjivim zakonima u sjedištu <?= e(SITE_NAME) ?>, bez obzira na načela sukoba zakona.</p>

    <h2>14. Promjene</h2>
    <p>Ove uvjete možemo povremeno izmijeniti. Nastavak korištenja usluga nakon promjena smatra se prihvaćanjem revidiranih uvjeta.</p>

    <h2>15. Kontakt</h2>
    <p>Pitanja o ovim uvjetima možete poslati putem naše stranice za kontakt.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Natrag na početnu stranicu</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
