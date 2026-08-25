<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'O nás ' . SITE_NAME;
$page_description = 'Jeden účet, jasný přehled o kapitálu — ' . SITE_NAME;
$page_canonical = page_url("about.php");
$active_page = "about";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/AboutPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Platforma</span>
    <h1>Jeden účet, jasný přehled o všem</h1>
    <p class="kpnq92g"><?= e(SITE_NAME) ?> spojuje zůstatek, strategii i výkon do jednoho transparentního panelu, aby každé rozhodnutí bylo informované a každé číslo na očích.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Lidé za vaším účtem</h2>
    <p>Za rozhraním jsou analytici, kteří denně studují trhy, inženýři, kteří drží platformu v chodu, a specialisté podpory, kteří odpovídají ve vašem jazyce.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Tržní analytici, kteří podmínky posuzují denně, ne jednou za čtvrtletí.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Inženýři k dispozici pro platformu, s nepřetržitým monitoringem.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Specialisté podpory na onboarding, ověření a výběry.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>04</b><i></i></div>
    <h2>Regulace, riziko a co neslibujeme</h2>
    <p>Investování nese riziko a žádná platforma ho neodstraní. Platforma může být jasná: zveřejnit podmínky, držet klientské peníze u regulovaných partnerů a zdokumentovat výběry.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Ověření identity, než se na účtu pohnou prostředky.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Výběry se vrací stejnou metodou jako vklad.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Podmínky, upozornění na rizika a zásady ochrany soukromí zveřejněné v plném znění.</span></li>
    </ul>
    <p class="jkkyl">Investování nese riziko, včetně možné ztráty části nebo veškerého kapitálu. Hodnota investic může klesat i stoupat a můžete získat zpět méně, než jste vložili. Neměli byste investovat peníze, jejichž ztrátu si nemůžete dovolit.</p>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Začít — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Odeslat zprávu</a>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Jak platforma vznikla</h2>
    <ol class="nxlk2qu">
      <li><h3>Výchozí bod</h3><p>Malá skupina analytiků a inženýrů pořád slýchala totéž: nástroje existují, ale nikdo je nevysvětlí.</p></li>
      <li><h3>První funkční verze</h3><p>První verze dělala jedno: ukázat zůstatek a pozici srozumitelně. Všechno ostatní šlo pryč, dokud to nebylo jasné.</p></li>
      <li><h3>Lidská stránka</h3><p>Automatizace odpovídá na co a kdy; lidé na proč. Specialisté podpory přibyli, aby se každý člen měl koho zeptat.</p></li>
      <li><h3>Otevření dalším trhům</h3><p>Místní platební metody, jazyky a hodiny podpory.</p></li>
      <li><h3>Kde jsme teď</h3><p>Stejné principy ve větším měřítku: transparentní čísla, lidi, které zastihnete, žádná překvapení v malém tisku.</p></li>
    </ol>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Proč tu jsme</h2>
    <p>Většina lidí, kteří chtějí investovat, nikdy nezačne, protože každá cesta vypadá navržená pro někoho, kdo už zná slovník. Postavili jsme opak: jeden účet, jasný jazyk a specialista, se kterým opravdu mluvíte.</p>
    <p>Žádný žargon tam, kde stačí obyčejná věta, žádné poplatky, které se objeví až po pohybu peněz, a žádné sliby výnosů, které nikdo poctivě negarantuje.</p>
    <div class="luvxe">
      <div class="mvuhd"><b class="lfu72qs">33.000</b><span>Aktivní uživatelé</span></div>
      <div class="mvuhd"><b class="lfu72qs">€0,6B</b><span>Obchodovaný objem</span></div>
      <div class="mvuhd"><b class="lfu72qs">24/7</b><span>Podpora</span></div>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
