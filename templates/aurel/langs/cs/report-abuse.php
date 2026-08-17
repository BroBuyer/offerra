<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Nahlásit zneužití ᐉ ' . SITE_NAME;
$page_description = 'Nahlásit zneužití — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Důvěra a bezpečnost</span>
    <h1>Nahlásit zneužití</h1>
    <p class="rmct9">Pomozte nám udržet <?= e(SITE_NAME) ?> v bezpečí. Nahlaste podezření na podvod, vydávání se za nás nebo zneužití platformy či značky.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>Co nahlásit</h2>
    <p>Nahlaste týmu Trust and Safety kterékoli z následujícího:</p>
    <ul>
      <li>Phishingové e-maily, podvodné weby nebo falešné aplikace vydávající se za <?= e(SITE_NAME) ?>.</li>
      <li>Účty na sociálních sítích, reklamy nebo kanály, které zneužívají naše jméno, logo nebo ochranné známky.</li>
      <li>Podezření na převzetí účtu, neoprávněný přístup nebo krádež identity.</li>
      <li>Podezřelé žádosti o platbu, „recovery agenty“ nebo třetí strany, které tvrdí, že jednají naším jménem.</li>
      <li>Tržní zneužití, obavy z praní peněz nebo jakákoli nezákonná činnost spojená s našimi službami.</li>
      <li>Urážlivé, výhružné nebo obtěžující chování vůči zaměstnancům nebo uživatelům.</li>
    </ul>

    <h2>Jak nahlásit</h2>
    <p>Pošlete podrobnou zprávu kterýmkoli z kanálů níže. Pokud můžete, uveďte:</p>
    <ul>
      <li>Datum a čas incidentu.</li>
      <li>URL, snímky obrazovky, hlavičky zpráv, adresy odesílatele nebo telefonní čísla.</li>
      <li>Údaje k účtu (pokud se zpráva týká vašeho účtu).</li>
      <li>Jakýkoli další kontext, který pomůže šetření.</li>
    </ul>

    <div class="ziavo">
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>E-mail Trust and Safety</b>
        <span>Tým Trust and Safety zastihnete přes kontaktní stránku. Hlášení třídíme do jednoho pracovního dne.</span>
      </div>
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Nahlášení zranitelnosti</b>
        <span>Pro odpovědné nahlášení zranitelností našich systémů nás kontaktujte dřív, než detaily zveřejníte.</span>
      </div>
    </div>

    <h2>Co následuje?</h2>
    <p>Každé hlášení posoudíme. Podle povahy můžeme požádat o další informace, spolupracovat s poskytovateli plateb nebo hostingem na odstranění podvodného obsahu, nebo věc předat orgánům. Hlášení bereme důvěrně a kde to zákon dovolí, chráníme identitu oznamovatelů.</p>

    <h2>Naléhavé záležitosti</h2>
    <p>Pokud se domníváte, že jste obětí trestného činu, kontaktujte místní policii a zároveň nás. Pokud máte podezření na kompromitaci účtu, ihned změňte heslo a ihned nás informujte.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Kontaktovat Trust and Safety</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Zpět na úvod</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
