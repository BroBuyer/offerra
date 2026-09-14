<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Privatumo politika');
$page_description = 'Kaip ' . SITE_NAME . ' renka, naudoja ir saugo jūsų asmeninius duomenis.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Pagrindinis">
      <a href="<?= page_url() ?>#platform">Platforma</a>
      <a href="<?= page_url() ?>#how">Kaip tai veikia</a>
      <a href="<?= page_url() ?>#markets">Rinkos</a>
      <a href="<?= page_url() ?>#faq">Dažnai užduodami klausimai</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Pradėkite</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Teisinė informacija</span>
      <h1>Privatumo politika</h1>
      <p class="lede">Kaip <?= e(SITE_NAME) ?> renka, naudoja ir saugo jūsų asmeninius duomenis.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Paskutinį kartą atnaujinta: 2025 m. sausio mėn</p>

      <h2>1. Įvadas</h2>
      <p><?= e(SITE_NAME) ?> („mes“, „mūsų“, „mūsų“) yra įsipareigojusi saugoti lankytojų ir klientų privatumą. Šioje privatumo politikoje paaiškinama, kokius asmens duomenis renkame, kodėl juos renkame ir kaip juos tvarkome, kai naudojatės mūsų svetaine ir paslaugomis.</p>

      <h2>2. Informacija, kurią renkame</h2>
      <ul>
        <li>Asmens duomenys – vardas, pavardė, gimimo data, vyriausybės išduoti registracijos dokumentai ir KYC/AML atitiktis.</li>
        <li>Kontaktiniai duomenys – elektroninio pašto adresas, telefono numeris, pašto adresas.</li>
        <li>Finansiniai duomenys – mokėjimo duomenys, operacijų istorija, informacija apie lėšų šaltinį.</li>
        <li>Techniniai duomenys – IP adresas, naršyklės tipas, įrenginio identifikatoriai, slapukai ir naudojimo analizė.</li>
      </ul>

      <h2>3. Kaip naudojame jūsų duomenis</h2>
      <ul>
        <li>Patvirtinti tapatybę ir laikytis reglamentavimo įsipareigojimų.</li>
        <li>Teikti, prižiūrėti ir tobulinti mūsų platformą ir paslaugas.</li>
        <li>Apdoroti mokėjimus ir aptikti nesąžiningą veiklą.</li>
        <li>Norėdami susisiekti su jumis apie jūsų paskyrą, atnaujinimus ir palaikymo užklausas.</li>
        <li>Siųsti rinkodaros pranešimus, kai sutikote (galite bet kada atsisakyti prenumeratos).</li>
      </ul>

      <h2>4. Teisinis pagrindas</h2>
      <p>Asmens duomenis tvarkome remdamiesi vienu ar keliais iš šių teisėtų pagrindų: sutarties vykdymas, teisinės pareigos laikymasis, mūsų teisėti interesai arba Jūsų sutikimas.</p>

      <h2>5. Dalijimasis ir atskleidimas</h2>
      <p>Galime dalytis asmens duomenimis su reguliuojamais mokėjimo teikėjais, KYC/AML patvirtinimo partneriais, debesų infrastruktūros teikėjais, profesionaliais patarėjais ir kompetentingomis institucijomis, kai to reikalauja įstatymai. Mes neparduodame asmens duomenų.</p>

      <h2>6. Tarptautiniai pervedimai</h2>
      <p>Kai asmens duomenys perduodami už jūsų jurisdikcijos ribų, užtikriname, kad būtų taikomos tinkamos apsaugos priemonės, įskaitant standartines sutarties sąlygas.</p>

      <h2>7. Duomenų saugojimas</h2>
      <p>Asmens duomenis saugome tiek, kiek reikia, kad galėtume teikti paslaugas ir įvykdyti teisinius, reguliavimo ir apskaitos reikalavimus – paprastai mažiausiai penkerius metus nuo paskyros uždarymo.</p>

      <h2>8. Jūsų teisės</h2>
      <p>Vadovaudamiesi galiojančiais teisės aktais, galite prašyti prieigos, pataisyti, ištrinti, apriboti arba perkelti savo asmens duomenis, taip pat galite prieštarauti tam tikram tvarkymui. Norėdami pasinaudoti šiomis teisėmis, susisiekite su mumis žemiau nurodytu adresu.</p>

      <h2>9. Slapukai</h2>
      <p>Svetainės veikimui ir naudojimo supratimui naudojame esminius ir analitinius slapukus. Slapukus galite valdyti savo naršyklės nustatymuose.</p>

      <h2>10. Saugumas</h2>
      <p>Taikome administracines, technines ir fizines apsaugos priemones, skirtas apsaugoti asmens duomenis nuo neteisėtos prieigos, atskleidimo, pakeitimo ar sunaikinimo. Jokia sistema nėra visiškai saugi, ir mes negalime garantuoti visiško saugumo.</p>

      <h2>11. Pakeitimai</h2>
      <p>Retkarčiais galime atnaujinti šią politiką. Naujausia versija visada bus pasiekiama šiame puslapyje su atnaujinta data.</p>

      <h2>12. Susisiekite</h2>
      <p>Jei turite klausimų dėl privatumo arba norite pasinaudoti savo teisėmis, susisiekite su <?= e(SITE_NAME) ?> duomenų apsaugos komanda per mūsų<a href="<?= page_url('contacts.php') ?>">kontaktinis puslapis</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Grįžti į namus</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Visos teisės saugomos ·
      <a href="<?= page_url('privacy.php') ?>">Privatumas</a> ·
      <a href="<?= page_url('conditions.php') ?>">Sąlygos</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
