<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Registrace ' . SITE_NAME;
$page_description = 'Otevřete účet u ' . SITE_NAME;
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Začít nyní</span>
    <h1>Otevřete účet</h1>
    <p class="kpnq92g">Pár údajů na začátek, pak to převezme specialista. V tomto kroku se nic neplatí.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Co následuje</h2>
    <ol class="nxlk2qu">
      <li><h3>Odešlete formulář</h3><p>Trvá to pár minut a nic to nestojí.</p></li>
      <li><h3>Specialista zavolá</h3><p>Ověří údaje, odpoví na otázky a vysvětlí další krok. Žádný tlak na vklad.</p></li>
      <li><h3>Ověříte se a zvolíte částku</h3><p>Teprve pak se pohnou peníze, a jen v částce, kterou zvolíte.</p></li>
    </ol>
    <p class="jkkyl">Investování nese riziko, včetně možné ztráty části nebo veškerého kapitálu. Hodnota investic může klesat i stoupat a můžete získat zpět méně, než jste vložili. Neměli byste investovat peníze, jejichž ztrátu si nemůžete dovolit.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Začít — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">Časté dotazy</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Co budete potřebovat</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>E-mailová adresa, kterou opravdu čtete.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Telefon, aby vás specialista zastihl.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Doklad totožnosti pro pozdější ověření.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Co se stane po odeslání formuláře</h2>
    <h3>Ověřovací hovor</h3>
    <p>Specialista zavolá, ověří odeslané údaje, odpoví na otázky a dohodne rozumnou počáteční částku. Hovor je rozhovor, ne prodejní skript: účet otevřený na nereálných očekáváních nikomu nepomůže.</p>
    <h4>Jak dlouho to trvá</h4>
    <p>Obvykle jeden hovor deset až patnáct minut. Pokud chcete zavolat v konkrétní čas, uveďte to ve formuláři a čas dodržíme.</p>
    <h3>Ověření identity vysvětlené</h3>
    <p>Před prvním vkladem budete požádáni o doklad s fotkou a aktuální doklad s adresou. Stejný požadavek má každá regulovaná finanční služba — aby se výběr mohl vrátit jen vám.</p>
    <h4>Co se přijímá</h4>
    <p>Pas nebo občanský průkaz a účet za energie nebo výpis z banky za poslední tři měsíce. Stačí ostrá fotka z telefonu.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Otevřete účet</h2>
      <p class="pt6joj">Začněte během několika minut.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Začít nyní';
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
