<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Prijavi zlorabo ᐉ ' . SITE_NAME;
$page_description = 'Prijavi zlorabo — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Zaupanje in varnost</span>
    <h1>Prijavite zlorabo</h1>
    <p class="rmct9">Pomagajte nam ohraniti <?= e(SITE_NAME) ?> varno. Prijavite sum goljufije, lažnega predstavljanja ali zlorabe naše platforme ali blagovne znamke.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>Kaj prijaviti</h2>
    <p>Naši ekipi za zaupanje in varnost prijavite kar koli od naslednjega:</p>
    <ul>
      <li>E-poštna sporočila z lažnim predstavljanjem, goljufiva spletna mesta ali lažne aplikacije, ki se pretvarjajo, da so <?= e(SITE_NAME) ?>.</li>
      <li>Računi družbenih medijev, oglasi ali kanali za sporočanje, ki zlorabljajo naše ime, logotip ali blagovne znamke.</li>
      <li>Sum prevzema računa, nepooblaščenega dostopa ali kraje identitete.</li>
      <li>Sumljive zahteve za plačilo, »agenti za izterjavo« ali tretje osebe, ki trdijo, da delujejo v našem imenu.</li>
      <li>Zloraba trga, pomisleki glede pranja denarja ali kakršne koli nezakonite dejavnosti, povezane z našimi storitvami.</li>
      <li>Žaljivo, grozilno ali nadlegovalno vedenje do našega osebja ali uporabnikov.</li>
    </ul>

    <h2>Kako poročati</h2>
    <p>Pošljite nam podrobno poročilo prek katerega koli od spodnjih kanalov. Če lahko, vključite:</p>
    <ul>
      <li>Datum in čas dogodka.</li>
      <li>URL-ji, posnetki zaslona, ​​glave sporočil, naslovi pošiljateljev ali telefonske številke.</li>
      <li>Podatki o vašem računu (če se poročilo nanaša na vaš račun).</li>
      <li>Kakršen koli drug kontekst, ki nam lahko pomaga pri preiskavi.</li>
    </ul>

    <div class="ziavo">
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>E-pošta za zaupanje in varnost</b>
        <span>Uporabite stran za stik, da stopite v stik z našo ekipo za zaupanje in varnost. Poročila se triažirajo v enem delovnem dnevu.</span>
      </div>
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Varnostno razkritje</b>
        <span>Za odgovorno razkritje varnostnih ranljivosti, ki vplivajo na naše sisteme, se obrnite na nas, preden podrobnosti delite z javnostjo.</span>
      </div>
    </div>

    <h2>Kaj se zgodi potem?</h2>
    <p>Vsako poročilo pregledamo. Glede na naravo težave se lahko obrnemo na vas za več informacij, sodelujemo s ponudniki plačil ali platformami za gostovanje, da odstranimo goljufivo vsebino, ali zadeve predamo organom pregona ali regulatorjem. Prijave obravnavamo zaupno in, kjer je zakonsko mogoče, varujemo identiteto poročevalcev.</p>

    <h2>Nujne zadeve</h2>
    <p>Če menite, da ste bili žrtev kaznivega dejanja, se obrnite na lokalne organe kazenskega pregona in nas obvestite. Če sumite, da je bil vaš račun ogrožen, nemudoma spremenite geslo in nas takoj obvestite.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Obrnite se na Zaupanje in varnost</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Nazaj na dom</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
