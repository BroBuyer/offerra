<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Cenas ' . SITE_NAME;
$page_description = 'Vienkāršas un caurspīdīgas cenas — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Pricing</span>
    <h1>Vienkāršas un caurspīdīgas cenas.</h1>
    <p class="kpnq92g">Sākt ar <?= e(SITE_NAME) ?> ir bezmaksas. Nav slēptu komisiju par konta atvēršanu, un iemaksājat tikai to, ko izvēlaties ieguldīt: platforma un rīki ir iekļauti.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Kur var rasties izmaksas</h2>
    <p>Tās ir vienīgās vietas, kur nauda atstāj atlikumu kaut kam citam, nevis jūsu izvēlētajam ieguldījumam.</p>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Pozīcija</th><th scope="col">Ieturēšanas veicējs</th><th scope="col">Piezīme</th></tr></thead>
      <tbody>
        <tr><td>Konta atvēršana</td><td>—</td><td>Bezmaksas.</td></tr>
        <tr><td>Piekļuve platformai</td><td>—</td><td>Iekļauts, bez abonementa.</td></tr>
        <tr><td>Tirgus spreds</td><td>Brokeris</td><td>Parastā starpība starp pirkšanas un pārdošanas cenu.</td></tr>
        <tr><td>Tīkla / bankas komisija</td><td>Maksājumu sniedzējs</td><td>Atkarīgs no izvēlētās metodes.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">Kapitāls ir riskam pakļauts. Ieguldiet tikai to, ko varat atļauties zaudēt.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Atveriet kontu</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Kas ir iekļauts</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Bezmaksas konta izveide: bez reģistrācijas un licences maksām.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Nav slēptu maksu par iemaksām, izņemšanām vai konta uzturēšanu.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Var piemērot tikai standarta brokera spredus vai tīkla izmaksas.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Sāciet no minimālās iemaksas un skalojiet savā tempā.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Kā skaitļi izskatās praksē</h2>
    <h3>Pirmā iemaksa soli pa solim</h3>
    <p>Pirmā iemaksa ir viss izmaksu attēls vienā vietā: summa, ko nosūtāt, spreds konversijā un nekas cits, līdz izlemjat tirgot. Nav mēneša konta maksas un nav maksas par to, ka atlikumu atstājat, kā ir.</p>
    <h4>Kas notiek tajā pašā dienā</h4>
    <p>Atlikums parādās pēc maksājuma ieskaitīšanas, un speciālists ar jums iziet plānu, pirms kaut kas tiek atvērts. Nekas netiek ievietots automātiski jūsu vārdā.</p>
    <h3>Izņemšanas un cik tās maksā</h3>
    <p>Izņemšanas atgriežas metodē, ar kuru nauda ienāca: tas ir prasība, ne preferencē, lai konts paliktu jūsu. Apstrāde no mūsu puses ir bezmaksas; vienīgā ieturēšana var būt no jūsu bankas vai kartes izdevēja.</p>
    <h4>Termiņi, ar kuriem varat rēķināties</h4>
    <p>Pieprasījumi darba dienā tiek izskatīti tajā pašā dienā. Atgriešanas uz karti parasti trīs līdz piecas darba dienas, pārskaitījumi — divas.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
