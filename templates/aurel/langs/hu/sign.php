<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Regisztráció — ' . SITE_NAME;
$page_description = 'Nyissa meg a fiókját a(z) ' . SITE_NAME . ' platformon';
$page_canonical = page_url("sign.php");
$active_page = "sign";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Kezdés most</span>
    <h1>Nyissa meg a fiókját</h1>
    <p class="kpnq92g">Néhány adat a kezdéshez, aztán egy szakértő viszi tovább. Ezen a lépésen nincs fizetés.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Mi következik</h2>
    <ol class="nxlk2qu">
      <li><h3>Elküldi az űrlapot</h3><p>Néhány perc, és semmibe sem kerül.</p></li>
      <li><h3>Egy szakértő hívja</h3><p>Megerősítik az adatait, válaszolnak, és elmagyarázzák a következő lépést. Nincs nyomás a befizetésre.</p></li>
      <li><h3>Ellenőrzi magát, és választ egy összeget</h3><p>Csak akkor mozdul pénz, és csak az az összeg, amelyet Ön választ.</p></li>
    </ol>
    <p class="jkkyl">A befektetés kockázattal jár, beleértve a befektetett tőke egy részének vagy egészének esetleges elvesztését. A befektetések értéke csökkenhet és növekedhet is, és kevesebbet kaphat vissza, mint amennyit eredetileg betett. Ne fektessen be olyan pénzt, amelynek elvesztését nem engedheti meg magának.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Kezdés — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('faq.php') ?>">GYIK</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Amire szüksége lesz</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Egy e-mail-cím, amelyet valóban olvas.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Egy telefonszám, hogy a szakértő elérje Önt.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Egy személyazonosító okmány a későbbi ellenőrzéshez.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Mi történik az űrlap elküldése után</h2>
    <h3>Az ellenőrző hívás</h3>
    <p>Egy szakértő hívja, hogy megerősítse a beküldött adatokat, válaszoljon, és megállapodjon egy ésszerű kezdő összegben. A hívás beszélgetés, nem eladási szkript: az irreális elvárásokra nyitott fiók senkinek sem hasznos.</p>
    <h4>Mennyi ideig tart</h4>
    <p>Általában egy tíz–tizenöt perces hívás. Ha adott időpontban szeretné, írja az űrlapra, és azt betartjuk.</p>
    <h3>A személyazonosság-ellenőrzés elmagyarázva</h3>
    <p>Az első befizetés előtt fényképes igazolványt és friss, címet tartalmazó dokumentumot kérünk. Ugyanez a követelmény minden szabályozott pénzügyi szolgáltatásnál — hogy a kifizetés csak Önnek térhessen vissza.</p>
    <h4>Mit fogadunk el</h4>
    <p>Útlevél vagy személyi igazolvány, valamint közüzemi számla vagy bankkivonat az elmúlt három hónapból. Egy tiszta, telefonnal készített fotó elég.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="hu2v3" id="nl3qm8">
      <h2>Nyissa meg a fiókját</h2>
      <p class="pt6joj">Kezdjen néhány perc alatt.</p>
<?php
  $form_id = 'sign-form';
  $form_submit = 'Kezdés most';
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
