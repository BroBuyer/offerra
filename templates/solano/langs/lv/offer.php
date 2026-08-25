<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Kāpēc mēs ' . SITE_NAME;
$page_description = 'Kāpēc cilvēki sāk ar ' . SITE_NAME;
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Kāpēc šī platforma</span>
    <h1>Kāpēc cilvēki sāk šeit</h1>
    <p class="kpnq92g">Nav pārdošanas pitch: konkrēti, pārbaudāmi iemesli — un arī tas, kas derēs ne visiem.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Bez izklājlapām. Bez pārblīvētiem ekrāniem. Bez šaubām pēdējā brīdī</h2>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Platforma</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Tradicionālais brokeris</th><th scope="col">Tirdzniecība pašam</th></tr></thead>
      <tbody>
        <tr><td>MI rīkojumu izpilde</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">ierobežotas stundas</td><td style="color:var(--muted)">ar roku</td></tr>
        <tr><td>Segums 24/7 visos tirgos</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">dokumentācija</td><td style="color:var(--muted)">Paši</td></tr>
        <tr><td>Rīkojumu maršrutēšana zem sekundes</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">tikai pēc tarifa</td><td style="color:var(--muted)">ar roku</td></tr>
        <tr><td>Vairāku valūtu pārskati</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">ierobežotas stundas</td><td style="color:var(--muted)">Paši</td></tr>
        <tr><td>Konta atvēršana bez papīriem</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">dokumentācija</td><td style="color:var(--muted)">ar roku</td></tr>
        <tr><td>Arbitrāža starp biržām</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">tikai pēc tarifa</td><td style="color:var(--muted)">Paši</td></tr>
        <tr><td>Personīgais menedžeris</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">ierobežotas stundas</td><td style="color:var(--muted)">ar roku</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Ko iegūstat, ko „dari pats” iestatījums nedod</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Izpilde zem sekundes katrā pievienotajā tirgū.</b> <?= e(SITE_NAME) ?> uztur pastāvīgus zema latentuma API savienojumus ar katru atbalstīto biržu. Kad modelis ģenerē signālu, rīkojums tiek nosūtīts, izpildīts un ierakstīts panelī pirms nākamā tikša.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Darbojas 24/7, katrā tirgus sesijā.</b> Kriptovalūta neatpūšas, un arī <?= e(SITE_NAME) ?> ne. Dzinējs analizē pārus arī nedēļas nogalēs un svētkos, lai iespēja netiktu palaista garām.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Vairāku valūtu pārskati.</b> Katrs atlikums, katrs darījums un katra izņemšana tiek rādīta vietējā valūtā. Nekādu slēptu konversijas soļu.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Nošķirts kapitāls.</b> Jūsu līdzekļi paliek jūsu kontā. <?= e(SITE_NAME) ?> tos nekad netur: dzinējam ir tikai atļauja sūtīt rīkojumus.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Bankas līmeņa drošība.</b> TLS šifrēšana visā platformā, divpakāpju verifikācija pēc noklusējuma un ceturkšņa infrastruktūras auditi no trešajām personām. Darījumu kvītis ķēdē.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Trīs aktīvu klases, viena platforma.</b> Lielākā daļa mazumtirdzniecības platformu ierobežo jūs ar vienu tirgu. <?= e(SITE_NAME) ?> tirgo kriptovalūtas, kotētās akcijas un galvenos valūtu pārus no viena paneļa.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Iepriekš iestatīti riska limiti katrā pozīcijā.</b> Stop-loss, maksimāli pieņemamais zaudējums un kapitāla alokācijas griesti tiek iestatīti pēc aktīvu klases. Dzinējs automātiski aizver darījumu, kas pārsniedz slieksni, un notikums tiek ierakstīts audita vēsturē.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Kam tas, visticamāk, nav paredzēts</h2>
    <p>Tiešums taupa laiku. Ja kaut kas no sekojošā jūs raksturo, cita ceļa būs labāka.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Vēlaties garantētu ienesīgumu. Neviena godīga platforma to nepiedāvā, un mēs arī ne.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Vēlaties ieguldīt naudu, bez kuras nevarat iztikt.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Tirgojat profesionālā apjomā ar pašu izpildes infrastruktūru.</span></li>
    </ul>
    <p class="jkkyl">Ieguldīšana ietver risku, tostarp iespējamu daļas vai visa kapitāla zaudējumu. Ieguldījumu vērtība var kristies un celties, un jūs varat atgūt mazāk, nekā sākotnēji ieguldījāt. Nevajadzētu ieguldīt naudu, kuras zaudējumu nevarat atļauties.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Sākt — <?= e(money_min()) ?> no</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
