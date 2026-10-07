<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Naudojimo sąlygos | ' . SITE_NAME;
$page_description = 'Naudojimo sąlygos platformai ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text">-->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Naudojimo sąlygos</h1>
            <p class="bold-title">1. Įvadas</p>
            <p>1.1. Norint naudotis mūsų paslaugomis, būtina sutikti su šiomis sąlygomis.</p>
            <p>1.2. Šios sąlygos sudaro teisiškai įpareigojantį susitarimą.</p>
            <p>1.3. Tolesnis svetainės naudojimas reiškia sąlygų priėmimą.</p>
            <p>
              1.4. Klausimais galite susisiekti su mumis
              <a href="mailto:legal@<?= e(site_domain()) ?>">legal@<?= e(site_domain()) ?></a>.
            </p>
            <p class="bold-title">2. Naudojimosi teisė</p>
            <p>2.1. Paslaugomis gali naudotis tik asmenys nuo 18 metų.</p>
            <p>2.1.1. Turite gyventi šalyje, kurioje paslaugos teisėtos.</p>
            <p>2.1.2. Negalite būti sankcijų sąraše.</p>
            <p>2.1.3. Turite turėti teisinį veiksnumą sudaryti sutartis.</p>
            <p>2.2. Neatsakome už netinkamų asmenų naudojimąsi.</p>
            <p class="bold-title">3. Naudotojo paskyra</p>
            <p>3.1. Esate atsakingi už savo paskyros saugumą.</p>
            <p>3.2. Nesidalinkite slaptažodžiu su trečiosiomis šalimis.</p>
            <p class="bold-title">4. Draudžiama veikla</p>
            <p>4.1. Paslaugų naudojimas neteisėtiems tikslams neleidžiamas.</p>
            <p>4.1.1. Pinigų plovimas griežtai draudžiamas.</p>
            <p>4.1.2. Apie sukčiavimą bus pranešta kompetentingoms institucijoms.</p>
            <p>4.1.3. Botų ar automatizavimo programinės įrangos naudojimas neleidžiamas.</p>
            <p>4.1.4. Bet koks bandymas manipuliuoti sistema bus tiriamas.</p>
            <p>4.1.5. Neteisingos informacijos skleidimas draudžiamas.</p>
            <p>4.1.6. Bandymas trukdyti tyrimams neleidžiamas.</p>
            <p>4.1.7. Grasinimai kitiems naudotojams draudžiami.</p>
            <p>4.1.8. Bet kokia neteisėta veikla bus baudžiama.</p>
            <p>4.1.9. Bandymas apeiti taisykles neleidžiamas.</p>
            <p>4.1.10. Bet koks sistemos piktnaudžiavimas vertinamas rimtai.</p>
            <p class="bold-title">5. Intelektinė nuosavybė</p>
            <p>5.1. Visas svetainės turinys yra mūsų intelektinė nuosavybė.</p>
            <p>5.2. Naudotojai neįgyja teisių į svetainės turinį.</p>
            <p>5.3. Turinio negalima kopijuoti be leidimo.</p>
            <p>5.4. Trečiosios šalys negali keisti turinio.</p>
            <p class="bold-title">6. Atsakomybės apribojimas</p>
            <p>6.1. Paslaugomis naudojatės savo rizika.</p>
            <p>6.2. Neatsakome už nuostolius, kylančius dėl paslaugų naudojimo.</p>
            <p>6.3. Bet koks nuostolis dėl svetainės naudojimo yra naudotojo atsakomybė.</p>
            <p>6.4. Neprisiimame atsakomybės už žalą, kilusią dėl svetainės naudojimo.</p>
            <p>6.5. Techninės problemos nėra mūsų atsakomybė.</p>
            <p class="bold-title">7. Informacija</p>
            <p>7.1. Naudodamiesi paslaugomis sutinkate, kad su jumis būtų susisiekta.</p>
            <p>7.2. Informacija tvarkoma konfidencialiai.</p>
            <p>7.3. Naudotojams rekomenduojama saugoti dokumentus.</p>
            <p class="bold-title">8. Nuorodos ir papildomi šaltiniai</p>
            <p>8.1. Daugiau informacijos rasite mūsų taisyklėse.</p>
            <p>8.2. Išorinės nuorodos nėra rekomendacija.</p>
            <p>8.3. Rekomenduojame patikrinti šaltinius prieš naudojant.</p>
            <p class="bold-title">9. Bendrosios nuostatos</p>
            <p>9.1. Pasilaikome teisę keisti paslaugas bet kuriuo metu.</p>
            <p>9.2. Sąlygos gali keistis bet kada.</p>
            <p>9.3. Naudodamiesi paslaugomis sutinkate su šiomis sąlygomis.</p>
            <p>9.4. Žodiniai susitarimai negalioja.</p>
            <p>9.5. Neįgyvendintos teisės nelaikomos atsisakytomis.</p>
            <p>
              9.6. Jei nuostata pripažįstama negaliojančia, kitos nuostatos lieka galioti.
            </p>
            <p>9.7. Paslaugas gali valdyti išorės teikėjai.</p>
            <p>
              9.8. Šioms sąlygoms taikoma teisė <?= e(geo_in()) ?>. Visi ginčai teikiami
              kompetentingam teismui <?= e(geo_in()) ?>.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
