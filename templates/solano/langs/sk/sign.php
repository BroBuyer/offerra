<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Registrácia ' . SITE_NAME;
$page_description = 'Otvorte účet u ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Začať teraz</span>
    <h1>Otvorte účet</h1>
    <p class="kpnq92g">Pár údajov na začiatok, potom to prevezme špecialista. V tomto kroku sa nič neplatí.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Čo nasleduje</h2>
    <ol class="nxlk2qu">
      <li><h3>Odošlete formulár</h3><p>Trvá to pár minút a nič to nestojí.</p></li>
      <li><h3>Špecialista zavolá</h3><p>Overí údaje, odpovie na otázky a vysvetlí ďalší krok. Žiadny tlak na vklad.</p></li>
      <li><h3>Overíte sa a zvolíte sumu</h3><p>Až potom sa pohnú peniaze, a len v sume, ktorú zvolíte.</p></li>
    </ol>
    <p class="jkkyl">Investovanie nesie riziko, vrátane možnej straty časti alebo všetkého kapitálu. Hodnota investícií môže klesať aj stúpať a môžete získať späť menej, ako ste vložili. Nemali by ste investovať peniaze, ktorých stratu si nemôžete dovoliť.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Začať — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">Časté otázky</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Čo budete potrebovať</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>E-mailová adresa, ktorú naozaj čítate.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Telefón, aby vás špecialista zastihol.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Doklad totožnosti na neskoršie overenie.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Čo sa stane po odoslaní formulára</h2>
    <h3>Overovací hovor</h3>
    <p>Špecialista zavolá, overí odoslané údaje, odpovie na otázky a dohodne rozumnú počiatočnú sumu. Hovor je rozhovor, nie predajný skript: účet otvorený na nereálnych očakávaniach nikomu nepomôže.</p>
    <h4>Ako dlho to trvá</h4>
    <p>Zvyčajne jeden hovor desať až pätnásť minút. Ak chcete zavolať v konkrétny čas, uveďte to vo formulári a čas dodržíme.</p>
    <h3>Overenie identity vysvetlené</h3>
    <p>Pred prvým vkladom budete požiadaní o doklad s fotkou a aktuálny doklad s adresou. Rovnakú požiadavku má každá regulovaná finančná služba — aby sa výber mohol vrátiť len vám.</p>
    <h4>Čo sa prijíma</h4>
    <p>Pas alebo občiansky preukaz a účet za energie alebo výpis z banky za posledné tri mesiace. Stačí ostrá fotka z telefónu.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Otvorte účet</h2>
      <p class="pt6joj">Začnite počas niekoľkých minút.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Začať teraz';
  $form_class = 'leadform lead-form solano-form';
  $form_variant = 'band';
  require __DIR__ . '/includes/form.php';
?>
    </div>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
