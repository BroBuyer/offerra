<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Par mums ' . SITE_NAME;
$page_description = 'Viens konts, skaidrs pārskats par kapitālu — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Platforma</span>
    <h1>Viens konts, skaidrs pārskats par visu</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> apvieno atlikumu, stratēģiju un rezultātus vienā caurspīdīgā panelī, lai katrs lēmums būtu informēts un katrs skaitlis redzams.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Cilvēki aiz jūsu konta</h2>
    <p>Aiz saskarnes ir analītiķi, kas katru dienu pēta tirgus, inženieri, kas uztur platformu, un atbalsta speciālisti, kas atbild jūsu valodā.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Tirgus analītiķi, kas apstākļus vērtē katru dienu, nevis reizi ceturksnī.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Inženieri platformai, ar nepārtrauktu monitoringu.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Atbalsta speciālisti onboardingam, verifikācijai un izņemšanām.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Regulācija, risks un ko nesolām</h2>
    <p>Ieguldīšana ietver risku, un neviena platforma to nenovērš. Platforma var būt skaidra: publicēt noteikumus, turēt klientu naudu pie regulētiem partneriem un dokumentēt izņemšanas.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Identitātes verifikācija, pirms kontā kustas līdzekļi.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Izņemšanas atgriežas tajā pašā metodē kā iemaksa.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Noteikumi, risku informācija un privātuma politika publicēti pilnā apjomā.</span></li>
    </ul>
    <p class="jkkyl">Ieguldīšana ietver risku, tostarp iespējamu daļas vai visa kapitāla zaudējumu. Ieguldījumu vērtība var kristies un celties, un jūs varat atgūt mazāk, nekā sākotnēji ieguldījāt. Nevajadzētu ieguldīt naudu, kuras zaudējumu nevarat atļauties.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Sākt — <?= e(money_min()) ?> no</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Nosūtīt ziņojumu</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Kā platforma tika veidota</h2>
    <ol class="nxlk2qu">
      <li><h3>Sākuma punkts</h3><p>Neliela analītiķu un inženieru grupa arvien dzirdēja to pašu: rīki pastāv, bet neviens tos neizskaidro.</p></li>
      <li><h3>Pirmā funkcionējošā versija</h3><p>Pirmā versija darīja vienu: rādīja atlikumu un pozīciju saprotami. Viss pārējais tika noņemts, līdz tas bija skaidrs.</p></li>
      <li><h3>Cilvēciskā puse</h3><p>Automatizācija atbild uz ko un kad; cilvēki uz kāpēc. Atbalsta speciālisti tika pievienoti, lai katram dalībniekam būtu, kam jautāt.</p></li>
      <li><h3>Atvēršana vairāk tirgiem</h3><p>Vietējās maksājumu metodes, valodas un atbalsta stundas.</p></li>
      <li><h3>Kur esam tagad</h3><p>Tie paši principi lielākā mērogā: caurspīdīgi skaitļi, cilvēki, kurus sasniedzat, nekādu pārsteigumu sīkajā drukā.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Kāpēc esam šeit</h2>
    <p>Lielākā daļa cilvēku, kas vēlas ieguldīt, nekad nesāk, jo katrs ceļš izskatās veidots kādam, kas jau zina vārdnīcu. Mēs uzbūvējām pretējo: viens konts, skaidra valoda un speciālists, ar kuru patiešām runājat.</p>
    <p>Nekāda žargona tur, kur pietiek ar vienkāršu teikumu, nekādu komisiju, kas parādās tikai pēc naudas kustības, un nekādu ienesīguma solījumu, ko neviens godīgi negarantē.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Aktīvie lietotāji</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>Tirdzniecības apjoms</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Atbalsts</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
