<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Ceny ' . SITE_NAME;
$page_description = 'Jednoduché a transparentní ceny — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Pricing</span>
    <h1>Jednoduché a transparentní ceny.</h1>
    <p class="kpnq92g">Začít s <?= e(SITE_NAME) ?> je zdarma. Žádné skryté poplatky za otevření účtu a vkládáte jen to, co se rozhodnete investovat: platforma a nástroje jsou v ceně.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Kde se mohou objevit náklady</h2>
    <p>To jsou jediná místa, kde peníze opouštějí zůstatek kvůli něčemu jinému než zvolené investici.</p>
    <div class="ltouuo" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Položka</th><th scope="col">Účtuje</th><th scope="col">Poznámka</th></tr></thead>
      <tbody>
        <tr><td>Otevření účtu</td><td>—</td><td>Zdarma.</td></tr>
        <tr><td>Přístup k platformě</td><td>—</td><td>V ceně, bez předplatného.</td></tr>
        <tr><td>Tržní spread</td><td>Broker</td><td>Obvyklý rozdíl mezi nákupní a prodejní cenou.</td></tr>
        <tr><td>Síťový / bankovní poplatek</td><td>Poskytovatel plateb</td><td>Závisí na zvolené metodě.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">Kapitál je v riziku. Investujte jen to, co si můžete dovolit ztratit.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Otevřete účet</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Co je v ceně</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Založení účtu zdarma: bez registračních a licenčních poplatků.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Žádné skryté poplatky za vklady, výběry ani vedení účtu.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Mohou platit jen standardní spread brokera nebo síťové náklady.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Začněte od minimálního vkladu a škálujte vlastním tempem.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Jak čísla vypadají v praxi</h2>
    <h3>První vklad krok za krokem</h3>
    <p>První vklad je celý obraz nákladů na jednom místě: částka, kterou pošlete, spread při konverzi a nic dalšího, dokud se nerozhodnete obchodovat. Žádný měsíční poplatek za účet a žádný poplatek za to, že zůstatek necháte být.</p>
    <h4>Co se stane tentýž den</h4>
    <p>Zůstatek se objeví po připsání platby a specialista s vámi projde plán, než se cokoli otevře. Nic se nezadává automaticky vaším jménem.</p>
    <h3>Výběry a co stojí</h3>
    <p>Výběry se vrací metodou, kterou peníze přišly: to je požadavek, ne preference, aby účet zůstal váš. Zpracování je z naší strany zdarma; jediná srážka může být od vaší banky nebo vydavatele karty.</p>
    <h4>Termíny, se kterými můžete počítat</h4>
    <p>Žádosti v pracovní den se posuzují tentýž den. Návraty na kartu obvykle do tří až pěti pracovních dnů, převody do dvou.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
