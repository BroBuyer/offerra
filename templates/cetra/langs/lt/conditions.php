<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Naudojimo sąlygos');
$page_description = 'Taisyklės, taikomos, kai pasiekiate arba naudojate ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
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
      <span class="eyebrow">Legal</span>
      <h1>Naudojimo sąlygos</h1>
      <p class="lede">Taisyklės, taikomos, kai pasiekiate arba naudojate <?= e(SITE_NAME) ?>.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Paskutinį kartą atnaujinta: 2025 m. sausio mėn</p>

      <h2>1. Sąlygų priėmimas</h2>
      <p>Prisijungdami arba naudodami <?= e(SITE_NAME) ?> svetainę ir paslaugas, sutinkate laikytis šių naudojimo sąlygų. Jei nesutinkate, nesinaudokite paslaugomis.</p>

      <h2>2. Tinkamumas</h2>
      <p>Turite būti bent 18 metų amžiaus (arba pilnametystės pagal savo jurisdikciją) ir turėti veiksnumą, kad galėtumėte sudaryti įpareigojančią sutartį. Paslaugos nesiūlomos ribotos jurisdikcijos gyventojams, kur toks pasiūlymas būtų neteisėtas.</p>

      <h2>3. Sąskaitos registracija</h2>
      <p>Jūs sutinkate registracijos metu pateikti tikslią, naujausią ir išsamią informaciją ir šią informaciją nuolat atnaujinti. Jūs esate atsakingi už savo kredencialų konfidencialumo palaikymą ir už visą veiklą savo paskyroje.</p>

      <h2>4. Paslaugos</h2>
      <p><?= e(SITE_NAME) ?> teikia technologines priemones ir mokomąją informaciją, susijusią su investavimu internetu. Mes nesame jūsų finansų patarėjai. Niekas šioje svetainėje nėra asmeninis patarimas dėl investavimo, mokesčių konsultacijos ar raginimas pirkti ar parduoti bet kokią finansinę priemonę.</p>

      <h2>5. Mokesčiai</h2>
      <p>Taikomi mokesčiai, skirtumai ir komisiniai atskleidžiami platformoje arba taikomame mokesčių tvarkaraštyje. Jūs esate atsakingas už visus mokesčius, atsirandančius dėl jūsų veiklos.</p>

      <h2>6. Draudžiamas elgesys</h2>
      <ul>
        <li>Paslaugų naudojimas pinigų plovimui, teroristų finansavimui, manipuliavimui rinka ar bet kokiais neteisėtais tikslais.</li>
        <li>Apsimetinėti kitu asmeniu arba pateikti klaidingą tapatybės informaciją.</li>
        <li>Bandymas trukdyti, pažeisti ar pakeisti bet kurią platformos dalį.</li>
        <li>Automatinių įrankių naudojimas paslaugoms pasiekti kitaip, nei aiškiai leidžiama.</li>
      </ul>

      <h2>7. Intelektinė nuosavybė</h2>
      <p>Visas svetainėje esantis turinys, prekių ženklai, programinė įranga ir medžiaga yra <?= e(SITE_NAME) ?> arba jo licencijos išdavėjų nuosavybė ir yra saugomi pagal galiojančius intelektinės nuosavybės įstatymus. Jums suteikiama ribota, neišskirtinė, atšaukiama licencija naudotis paslaugomis pagal numatytą paskirtį.</p>

      <h2>8. Trečiųjų šalių paslaugos</h2>
      <p>Platformoje gali būti nuorodų į trečiųjų šalių paslaugas arba jos gali būti integruotos. Mes neatsakome už tokias paslaugas, jų prieinamumą, tikslumą ar turinį.</p>

      <h2>9. Atsisakymas</h2>
      <p>Paslaugos teikiamos „tokios, kokios yra“ ir „kaip prieinamos“ be jokių garantijų. Prekyba susijusi su didele nuostolių rizika. Žiūrėkite mūsų <a href="<?= page_url('conditions.php') ?>">Rizikos atskleidimas</a>dėl detalių.</p>

      <h2>10. Atsakomybės ribojimas</h2>
      <p>Tiek, kiek leidžia įstatymai, <?= e(SITE_NAME) ?> nėra atsakinga už jokią netiesioginę, atsitiktinę, specialią, pasekminę ar baudžiamąją žalą arba bet kokį pelno ar pajamų praradimą, atsiradusį jums naudojantis paslaugomis.</p>

      <h2>11. Žalos atlyginimas</h2>
      <p>Jūs sutinkate atlyginti žalą <?= e(SITE_NAME) ?>, su juo susijusias įmones ir darbuotojus nuo bet kokių pretenzijų ar reikalavimų, kylančių dėl šių Sąlygų pažeidimo arba netinkamo paslaugų naudojimo.</p>

      <h2>12. Sustabdymas ir nutraukimas</h2>
      <p>Galime sustabdyti arba nutraukti prieigą prie paslaugų bet kuriuo metu, įspėję arba be įspėjimo, jei manome, kad pažeidėte šias Sąlygas arba taikomus įstatymus.</p>

      <h2>13. Taikanti teisė</h2>
      <p>Šias sąlygas reglamentuoja <?= e(SITE_NAME) ?> buveinėje taikomi įstatymai, neatsižvelgiant į įstatymų kolizijos principus.</p>

      <h2>14. Pakeitimai</h2>
      <p>Kartkartėmis galime keisti šias sąlygas. Tolesnis naudojimasis paslaugomis po pakeitimų reiškia sutikimą su peržiūrėtomis sąlygomis.</p>

      <h2>15. Susisiekite</h2>
      <p>Klausimus apie šias sąlygas galite siųsti per mūsų<a href="<?= page_url('contacts.php') ?>">kontaktinis puslapis</a>.</p>

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
