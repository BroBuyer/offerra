<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Objava rizika ᐉ ' . SITE_NAME;
$page_description = 'Objava rizika — ' . SITE_NAME;
$page_canonical = page_url("risk-disclosure.php");
$active_page = "risk";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Važno</span>
    <h1>Objava rizika</h1>
    <p class="rmct9">Molimo pažljivo pročitajte ovo upozorenje prije korištenja <?= e(SITE_NAME) ?> ili bilo koje povezane usluge.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Zadnje ažuriranje: siječanj 2025.</p>

    <div class="ntr9c">
      <strong>Ulaganje uključuje rizike.</strong> Vrijednost ulaganja može pasti kao i porasti. Možete izgubiti dio ili cijeli uloženi kapital. <strong>Prošli prinos nije pokazatelj budućih rezultata.</strong> Uložite samo novac koji si možete priuštiti izgubiti.
    </div>

    <h2>1. Opće upozorenje</h2>
    <p>Trgovanje i ulaganje u financijske instrumente, kriptovalute i drugu digitalnu imovinu uključuje visoku razinu rizika i možda nije prikladno za sve ulagače. Prije odluke o korištenju <?= e(SITE_NAME) ?> pažljivo razmotrite svoje investicijske ciljeve, razinu iskustva i toleranciju na rizik.</p>

    <h2>2. Tržišni rizik</h2>
    <p>Cijene financijskih instrumenata i digitalne imovine mogu značajno fluktuirati u kratkim razdobljima zbog tržišnih uvjeta, makroekonomskih događaja, regulatornih promjena, uvjeta likvidnosti i drugih čimbenika izvan naše kontrole. Gubitci mogu premašiti početne depozite kod proizvoda s polugom.</p>

    <h2>3. Volatilnost digitalne imovine</h2>
    <p>Kriptovalute i druga digitalna imovina posebno su volatilni. Njihovu vrijednost mogu utjecati mrežni događaji, forkovi, prekidi burzi, hakiranje ili iznenadni gubitak povjerenja. Nema jamstva da će bilo koja digitalna imovina zadržati određenu vrijednost ili ostati trgovanja.</p>

    <h2>4. Rizik poluge</h2>
    <p>Kad je poluga dostupna, pojačava i dobitke i gubitke. Relativno mali tržišni potez može uzrokovati proporcionalno veći pomak u vrijednosti vaše pozicije i može rezultirati potpunim gubitkom sredstava ili iznosima koji premašuju depozit.</p>

    <h2>5. Rizik tehnologije i izvršenja</h2>
    <p>Online platforme za trgovanje mogu biti pogođene prekidima poput kvarova sustava, kašnjenja, problema s povezivošću i cyber napada. To može spriječiti izvršenje naloga po traženim cijenama ili uopće.</p>

    <h2>6. Bez investicijskog savjetovanja</h2>
    <p>Informacije koje pruža <?= e(SITE_NAME) ?>, uključujući signale generirane umjetnom inteligencijom, prikaze, edukaciju ili analize, služe isključivo u informativne svrhe i ne predstavljaju personalizirano investicijsko savjetovanje, preporuku niti poziv na kupnju ili prodaju bilo kojeg financijskog instrumenta. Vi ste isključivo odgovorni za vlastite investicijske odluke.</p>

    <h2>7. Prošli prinos</h2>
    <p><strong>Prošli prinos nije pouzdan pokazatelj budućeg prinosa.</strong> Backtestovi, simulacije, prinosi modela i hipotetski rezultati imaju inherentna ograničenja i ne odražavaju stvarne rezultate trgovanja.</p>

    <h2>8. Regulatorna i porezna razmatranja</h2>
    <p>Regulatorni tretman financijskih instrumenata i digitalne imovine razlikuje se po jurisdikcijama i evoluirat. Odgovorni ste razumjeti i poštovati zakone koji se na vas odnose, uključujući porezne obveze proizašle iz vaših aktivnosti.</p>

    <h2>9. Potražite neovisni savjet</h2>
    <p>Ako imate sumnji o prikladnosti bilo kojeg proizvoda ili usluge ponuđene putem <?= e(SITE_NAME) ?>, prije nastavka potražite neovisni profesionalni savjet.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Natrag na početnu stranicu</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
