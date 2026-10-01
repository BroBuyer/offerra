<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Prijava ' . SITE_NAME;
$page_description = 'Odprite svoj račun z ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Začni zdaj</span>
    <h1>Odprite svoj račun</h1>
    <p class="kpnq92g">Nekaj ​​podrobnosti za začetek, nato pa strokovnjak prevzame delo. V tem koraku ni plačila.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Kaj se zgodi potem</h2>
    <ol class="nxlk2qu">
      <li><h3>Pošljete obrazec</h3><p>Traja nekaj minut in nič ne stane.</p></li>
      <li><h3>Kliče specialist</h3><p>Potrdijo vaše podatke, odgovorijo na vprašanja in pojasnijo naslednji korak. Brez pritiska za polog.</p></li>
      <li><h3>Preveriš in izbereš znesek</h3><p>Šele takrat se morebitni denar premakne in samo znesek, ki ga izberete.</p></li>
    </ol>
    <p class="jkkyl">Naložba vključuje tveganje, vključno z možno izgubo dela ali celotnega kapitala, ki ga vložite. Vrednost naložb se lahko zniža ali poveča, povrnjeno pa lahko dobite manj, kot ste prvotno vložili. Ne vlagajte denarja, ki si ga ne morete privoščiti izgubiti.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Začetek — <?= e(money_min()) ?> od</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">Pogosta vprašanja</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Kar potrebujete</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>E-poštni naslov, ki ste ga dejansko prebrali.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Telefonsko številko, da vas strokovnjak lahko pokliče.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Osebni dokument za kasnejši korak preverjanja.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Kaj se zgodi, ko pošljete obrazec</h2>
    <h3>Klic za preverjanje</h3>
    <p>Strokovnjak pokliče, da potrdi podatke, ki ste jih posredovali, odgovori na vprašanja in se dogovori, kakšen je smiseln začetni znesek za vas. Klic je pogovor, ne prodajni scenarij: račun, odprt na podlagi nerealnih pričakovanj, nikomur ne koristi.</p>
    <h4>Kako dolgo traja</h4>
    <p>Običajno en klic traja deset do petnajst minut. Če želite, da vas kličejo ob določeni uri, to navedite v obrazcu in ta čas se upošteva.</p>
    <h3>Razloženo preverjanje identitete</h3>
    <p>Pred prvim pologom boste morali predložiti osebni dokument s fotografijo in najnovejši dokument, ki prikazuje vaš naslov. To je ista zahteva, ki jo ima katera koli regulirana finančna storitev, in obstaja tako, da se lahko dvig vrne samo vam.</p>
    <h4>Kaj je sprejeto</h4>
    <p>Potni list ali osebna izkaznica ter račun za komunalne storitve ali bančni izpisek, izdan v zadnjih treh mesecih. Jasna fotografija, posneta s telefonom, je v redu.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Odprite svoj račun</h2>
      <p class="pt6joj">Začnite v nekaj minutah.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Začni zdaj';
  $form_class = 'leadform lead-form aurel-form';
  $form_variant = 'band';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
