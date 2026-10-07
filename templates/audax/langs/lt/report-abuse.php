<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Pranešti apie piktnaudžiavimą | ' . SITE_NAME;
$page_description = 'Praneškite apie piktnaudžiavimą ar įtartiną veiklą ' . SITE_NAME . '.';
$page_canonical = page_url('report-abuse.php');
$active_page = 'report-abuse';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <!-- <section class="content-text"> -->
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Pranešti apie piktnaudžiavimą</h1>
            <p class="bold-title">1. Pranešimas apie piktnaudžiavimą</p>
            <p>
              1.1. Jei svetainėje pastebėjote netinkamą turinį, praneškite
              mums per kontaktų formą.
            </p>
            <p>Susisiekite su mumis: <a href="mailto:abuse@<?= e(site_domain()) ?>">abuse@<?= e(site_domain()) ?></a></p>
            <p>
              1.2. Šioje dalyje galite pateikti informaciją apie piktnaudžiavimą ar turinį,
              kuris pažeidžia mūsų taisykles.
            </p>
            <p>
              1.3. Jūsų pranešimas mums svarbus. Pateikite konkrečias detales, kad galėtume
              tinkamai ištirti atvejį.
            </p>
            <p>Pateikdami pranešimą taip pat sutinkate su mūsų privatumo politika.</p>
            <p class="bold-title">2. Kas gali pranešti</p>
            <p>
              2.1. Jei tapote piktnaudžiavimo auka arba pastebėjote netinkamą elgesį, turite
              teisę apie tai pranešti.
            </p>
            <p>2.1.1. Pranešimą teikti gali tik asmenys nuo 18 metų.</p>
            <p>2.1.2. Pranešimas turi būti teisingas ir pagrįstas faktais.</p>
            <p>2.1.3. Pranešimo formos naudojimas turi būti teisėtas jūsų šalyje.</p>
            <p>2.2. Mes neatsakome už melagingus ar piktavališkus pranešimus.</p>
            <p class="bold-title">3. Pranešimo tvarka</p>
            <p>3.1. Pasilaikome teisę tirti visus pranešimus apie piktnaudžiavimą.</p>
            <p>3.2. Jei pranešimas pripažįstamas pagrįstu, imamės reikiamų priemonių.</p>
            <p class="bold-title">4. Draudžiami veiksmai pranešant</p>
            <p>4.1. Formos naudojimas piktavališkais tikslais neleidžiamas.</p>
            <p>4.1.1. Melagingi ar klaidinantys pranešimai neleidžiami.</p>
            <p>4.1.2. Draudžiama priekabiauti prie kitų naudotojų per pranešimų sistemą.</p>
            <p>4.1.3. Botų ar automatizavimo naudojimas pranešimams teikti draudžiamas.</p>
            <p>4.1.4. Bet koks bandymas manipuliuoti pranešimų sistema bus tiriamas.</p>
            <p>4.1.5. Sistemos naudojimas neteisingai informacijai skleisti draudžiamas.</p>
            <p>4.1.6. Bandymas trukdyti tyrimui neleidžiamas.</p>
            <p>4.1.7. Sistemos naudojimas grasinimams neleidžiamas.</p>
            <p>4.1.8. Bet kokia neteisėta veikla, susijusi su pranešimais, bus baudžiama.</p>
            <p>4.1.9. Bandymas apeiti pranešimų taisykles neleidžiamas.</p>
            <p>4.1.10. Bet koks pranešimų sistemos piktnaudžiavimas vertinamas rimtai.</p>
            <p class="bold-title">5. Intelektinė nuosavybė pranešant</p>
            <p>
              5.1. Turinys, kurį pateikiate pranešdami apie piktnaudžiavimą, nesuteikia jums nuosavybės teisių.
            </p>
            <p>5.2. Pateikdami pranešimą naudotojai neįgyja teisių į svetainės turinį.</p>
            <p>5.3. Pranešimai naudojami tik tyrimo tikslais.</p>
            <p>5.4. Trečiosios šalys negali kopijuoti ar keisti pranešimų.</p>
            <p class="bold-title">6. Atsakomybės apribojimas pranešant</p>
            <p>6.1. Pateikdami pranešimą prisiimate atsakomybę už jo turinį.</p>
            <p>6.2. Mes neatsakome už pateiktų pranešimų pasekmes.</p>
            <p>6.3. Bet koks nuostolis dėl pranešimo yra naudotojo atsakomybė.</p>
            <p>6.4. Neprisiimame atsakomybės už žalą, kilusią dėl pranešimų.</p>
            <p>
              6.5. Techninės pranešimų sistemos problemos nėra mūsų atsakomybė.
            </p>
            <p class="bold-title">7. Informacija apie pranešimo tvarką</p>
            <p>
              7.1. Naudodamiesi pranešimų sistema sutinkate, kad galime su jumis susisiekti dėl papildomos informacijos.
            </p>
            <p>7.2. Pranešimai tvarkomi konfidencialiai.</p>
            <p>7.3. Naudotojams rekomenduojama pasilikti pranešimų kopiją.</p>
            <p class="bold-title">8. Papildomos nuorodos ir šaltiniai</p>
            <p>8.1. Daugiau apie pranešimą apie piktnaudžiavimą rasite mūsų taisyklėse.</p>
            <p>8.2. Nuorodos į išorinius šaltinius nėra mūsų rekomendacija.</p>
            <p>8.3. Rekomenduojame patikrinti kiekvieną šaltinį prieš jį naudojant.</p>
            <p class="bold-title">9. Bendrosios nuostatos dėl pranešimų</p>
            <p>
              9.1. Pasilaikome teisę keisti, sustabdyti ar nutraukti pranešimo tvarką
              bet kuriuo metu.
            </p>
            <p>
              9.2. Šios tvarkos sąlygos gali keistis bet kada. Tolesnis
              pranešimų paslaugos naudojimas po tokių pakeitimų reiškia naujų sąlygų priėmimą.
            </p>
            <p>9.3. Pateikdamas pranešimą naudotojas visapusiškai sutinka su šiomis sąlygomis.</p>
            <p>
              9.4. Bet koks susitarimas ar pareiškimas, rašytinis ar žodinis, kuris nepatenka į
              šiuos konkrečius punktus, teisiškai negalioja ir neįpareigoja nė vienos šalies.
            </p>
            <p>
              9.5. Šiose sąlygose suteikta teisė, kuria nesinaudojama — dėl sutikimo,
              nerūpestingumo ar negalėjimo — laikoma atsisakyta. Dalinis ar visapusiškas teisės įgyvendinimas
              neatmeta ir neriboja vėlesnio jos įgyvendinimo.
            </p>
            <p>
              9.6. Jei kompetentingas teismas pripažįsta šių sąlygų nuostatą negaliojančia, ji
              laikoma negaliojančia. Likusios sąlygos vis tiek galioja visapusiškai.
            </p>
            <p>
              9.7. Pripažįstama, kad šios sąlygos leidžia trečiosioms šalims valdyti svetainę
              ir perleisti teises bei pareigas. Naudotojas negali perleisti
              savo teisių ir pareigų kitai šaliai.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
