<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ziņot par ļaunprātīgu izmantošanu ᐉ ' . SITE_NAME;
$page_description = 'Ziņot par ļaunprātīgu izmantošanu — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Uzticība un drošība</span>
    <h1>Ziņot par ļaunprātīgu izmantošanu</h1>
    <p class="rmct9">Palīdziet mums uzturēt <?= e(SITE_NAME) ?> drošu. Ziņojiet par aizdomām par krāpniecību, uzdošanos par mums vai platformas vai zīmola ļaunprātīgu izmantošanu.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>Par ko ziņot</h2>
    <p>Lūdzu, ziņojiet Trust and Safety komandai par jebkuru no sekojošā:</p>
    <ul>
      <li>Pikšķerēšanas e-pasti, krāpnieciskas vietnes vai viltotas lietotnes, kas uzdodas par <?= e(SITE_NAME) ?>.</li>
      <li>Sociālo mediju konti, reklāmas vai ziņojumu kanāli, kas ļaunprātīgi izmanto mūsu vārdu, logotipu vai preču zīmes.</li>
      <li>Aizdomas par konta pārņemšanu, neatļautu piekļuvi vai identitātes zādzību.</li>
      <li>Aizdomīgi maksājumu pieprasījumi, „recovery aģenti” vai trešās personas, kas apgalvo, ka rīkojas mūsu vārdā.</li>
      <li>Tirgus ļaunprātīga izmantošana, bažas par naudas atmazgāšanu vai jebkāda nelikumīga darbība, kas saistīta ar mūsu pakalpojumiem.</li>
      <li>Apvainojoša, draudoša vai uzmācīga uzvedība pret darbiniekiem vai lietotājiem.</li>
    </ul>

    <h2>Kā ziņot</h2>
    <p>Nosūtiet detalizētu ziņojumu caur jebkuru no kanāliem zemāk. Ja iespējams, iekļaujiet:</p>
    <ul>
      <li>Incidenta datums un laiks.</li>
      <li>URL, ekrānuzņēmumi, ziņojumu galvenes, sūtītāja adreses vai tālruņa numuri.</li>
      <li>Konta informācija (ja ziņojums attiecas uz jūsu kontu).</li>
      <li>Jebkurš cits konteksts, kas palīdzēs izmeklēšanā.</li>
    </ul>

    <div class="ziavo">
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>Trust and Safety e-pasts</b>
        <span>Trust and Safety komandu sasniedziet caur kontaktu lapu. Ziņojumus šķirojam vienas darba dienas laikā.</span>
      </div>
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Drošības ievainojamības ziņojums</b>
        <span>Atbildīgai mūsu sistēmu ievainojamību izpaušanai sazinieties ar mums, pirms detaļas publiskojat.</span>
      </div>
    </div>

    <h2>Kas notiek tālāk?</h2>
    <p>Katru ziņojumu izskatām. Atkarībā no rakstura varam lūgt papildu informāciju, sadarboties ar maksājumu sniedzējiem vai hostingu, lai noņemtu krāpniecisku saturu, vai nodot lietu tiesībsargājošajām iestādēm. Ziņojumus uzskatām par konfidenciāliem un, kur likums atļauj, aizsargājam ziņotāju identitāti.</p>

    <h2>Steidzami jautājumi</h2>
    <p>Ja uzskatāt, ka esat nozieguma upuris, sazinieties ar vietējo policiju un vienlaikus ar mums. Ja ir aizdomas par konta kompromitēšanu, nekavējoties mainiet paroli un nekavējoties mūs informējiet.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Sazināties ar Trust and Safety</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Atpakaļ uz sākumu</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
