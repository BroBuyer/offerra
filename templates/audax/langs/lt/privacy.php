<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Privatumo politika | ' . SITE_NAME;
$page_description = 'Privatumo politika ' . SITE_NAME . '.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
$page_css = ['policy.min.css', 'legal-mob.min.css', 'legal-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="terms">
        <div class="container">
          <div class="text">
            <h1>Privatumo politika</h1>
            <p>
              Jūsų asmens duomenys ir turtas mums ypač svarbūs. Mes visapusiškai
              įsipareigojame juos saugoti.
            </p>
            <p>
              <?= e(SITE_NAME) ?> renka ir saugo būtinus duomenis jūsų prekybos operacijoms. Kaip
              šie duomenys renkami ir saugomi, aprašoma toliau pateiktoje privatumo politikoje.
            </p>
            <p>Mūsų politika grindžiama šiais principais:</p>
            <p class="circle">
              Siekdami didžiausio skaidrumo dėl mūsų procesų, susijusių su asmens duomenų rinkimu ir
              saugojimu:
            </p>
            <p>
              Mūsų tikslas — kad suprastumėte, kaip renkame ir tvarkome jūsų duomenis, kad galėtumėte priimti
              pagrįstus sprendimus. Taikome aiškias duomenų tvarkymo gaires ir procesus šioje
              svetainėje. Politika detaliai aprašo metodus, kuriais teikiame
              aiškią ir konkrečią informaciją apie duomenų naudojimą. Kontrolė jūsų rankose.
            </p>
            <p>
              Pranešime jums nedelsdami, kai manysime, kad to reikia. Skaidrumas mums
              yra esminis.
            </p>
            <p>
              Mūsų specialistų komanda visada pasiruošusi atsakyti į visus klausimus apie bet kurį
              mūsų procesų aspektą, įskaitant pareigas pagal teisę <?= e(geo_in()) ?> ir ES
              reglamentus. Galite susisiekti su mumis:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Kitas asmens duomenų naudojimas iš mūsų pusės neleidžiamas, išskyrus kaip numatyta
              privatumo politikoje.
            </p>
            <p>
              Asmens duomenis galime tvarkyti šiais tikslais, įskaitant tinkamą
              <?= e(SITE_NAME) ?> paslaugų veikimą ir naudotojų sujungimą su trečiųjų šalių
              prekybos platformomis. Tvarkymas taip pat gali būti reikalingas svetainės funkcijoms ir paslaugoms
              palaikyti ir gerinti; mūsų teisėms ginti ir teisinėms bei kitoms
              pareigoms vykdyti. Galiausiai šie duomenys, kai reikia, naudojami administracinėms
              ir kitoms verslo funkcijoms, susijusioms su jums teikiamomis paslaugomis.
            </p>
            <p>
              Kad galėtume teikti kokybiškesnes, jūsų poreikiams pritaikytas paslaugas, <?= e(SITE_NAME) ?>
              naudoja asmens duomenis.
            </p>
            <p class="circle">
              Siekdami naudoti būtinas priemones jūsų asmens duomenims apsaugoti ir teisėms
              su jais susijusioms užtikrinti:
            </p>
            <p>
              Bet kada galite su mumis susisiekti ir gauti prieigą prie visų savo asmens duomenų. Taip pat galime
              juos prireikus pakeisti ar ištrinti. Be to, tvarkome prašymus perduoti tuos
              duomenis jums arba jūsų nurodytai trečiajai šaliai. Šią paslaugą teikiame, kad galėtumėte
              visapusiškai įgyvendinti privatumo ir kontrolės teises.
            </p>
            <p class="circle">Saugokite savo asmens duomenis:</p>
            <p>
              Mūsų saugumo sistemos atitinka aukštą standartą ir apima bankinio lygio priemones. Nors
              absoliučios apsaugos negalima garantuoti, įsipareigojame nuolat palaikyti sistemas
              aukštame lygyje ir stiprinti jau įdiegtas priemones.
            </p>
            <p>
              Turime išsamias privatumo taisykles ir aukščiausios klasės saugumo sistemas.
            </p>
            <p class="bold-title">1. Taikymo sritis</p>
            <p>
              Ši politika aprašo mūsų procedūras, kaip renkame, tvarkome ir atskleidžiame visus
              fizinių asmenų duomenis.
            </p>
            <p>
              Mūsų politikos nuostatos taikomos visiems fiziniams asmenims, kurie gali būti identifikuoti arba yra
              identifikuoti. Ypač kiekvienam fiziniam asmeniui, kurį galima identifikuoti pagal
              mums patikėtus duomenis, prie kurių turime prieigą ir/ar kuriuos galime derinti.
            </p>
            <p>
              Duomenų tvarkymas, kaip apibrėžta privatumo politikoje, visų pirma apima asmens duomenų
              saugojimą, valdymą ir organizavimą.
            </p>
            <p>
              Nerenkame ir nesiekiame rinkti informacijos apie jaunesnius nei 18 metų
              asmenis. Jaunesni nei 18 metų asmenys taip pat negali naudotis mūsų platforma jokiais
              tikslais. Jei nustatome, kad naudotojas jaunesnis nei 18 metų, tuos duomenis ištriname nedelsdami.
            </p>
            <p class="bold-title">2. Kokius asmens duomenis renkame?</p>
            <p>
              Registruojantis renkame asmens duomenis, reikalingus paslaugoms naudoti. Prireikus
              galime paprašyti duomenų patvirtinimui, pavyzdžiui, kad
              patvirtintume paskyros nuosavybę. Kad gerintume ir palaikytume paslaugų kokybę,
              renkame ir analizuojame informaciją apie jūsų naudojimąsi platforma ir
              susijusiomis trečiųjų šalių paslaugomis.
            </p>
            <p class="bold-title">
              3. Jokiomis aplinkybėmis nesate įpareigoti teikti asmens duomenų įmonei.
            </p>
            <p>
              Nors nesate įpareigoti mums teikti duomenų, sprendimas to nedaryti
              gali apriboti paslaugų teikimą. Tai taip pat gali lemti
              apribojimus naudojantis platforma.
            </p>
            <p class="bold-title">
              4. Kokius asmens duomenis renkame? Apsilankę svetainėje galime rinkti šiuos
              asmens duomenis:
            </p>
            <p>
              Nerenkame duomenų, kurie jus tiesiogiai identifikuoja. Registruojame, be kita ko,
              paskyros veiklą, IP adresus bei prieigos datas ir laiką. Priežiūrai,
              saugumui ir palaikymui saugome sistemos klaidų pranešimus, naršyklės informaciją ir
              įrenginio tipą, kuriuo jungiatės prie paskyros. Taip pat fiksuojame paskyroje nustatytą kalbą.
            </p>
            <p>
              Kalbant apie asmens duomenis, renkame ir saugome tik informaciją,
              kurią pateikiate jungdamiesi prie trečiosios šalies prekybos platformos per mūsų paslaugas.
            </p>
            <p>
              Asmens duomenys, kuriuos pateikėte trečiųjų šalių platformoms, gali apimti:
              vardą ir pavardę, adresą, telefono numerį ir el. pašto adresą.
            </p>
            <p class="bold-title">
              5. Kodėl įmonei reikia mano asmens duomenų ir ar tvarkymas teisėtas?
            </p>
            <p>
              Įmonė renka, saugo ir tvarko jūsų asmens duomenis tik
              politikoje nurodytais tikslais. Visas aprašytas naudojimas ir tvarkymas atitinka
              galiojančią teisę <?= e(geo_in()) ?> ir ES reglamentus.
            </p>
            <p>
              Įmonė jūsų duomenis valdys, tvarkys ar perduos tik pagal
              galiojančias taisykles <?= e(geo_in()) ?>. Atitinkami teisiniai pagrindai nurodyti žemiau:
            </p>
            <p class="circle">
              Davėte sutikimą, kad įmonė saugotų ir tvarkytų jūsų asmens duomenis.
              Pateikdami duomenis įmonei, įgaliojate mus juos perduoti atitinkamai
              trečiosios šalies prekybos platformai. Be to, davėte sutikimą
              tvarkyti asmens duomenis vienu ar keliais tikslais.
            </p>
            <p class="circle">
              Paslaugoms gerinti, teisės reikalavimams reikšti ar gintis ir teisėtiems
              interesams ginti, be kita ko, įmonei gali būti būtina saugoti ir
              tvarkyti jūsų asmens duomenis.
            </p>
            <p class="circle">Teisinėms pareigoms vykdyti duomenų tvarkymas būtinas.</p>
            <p>
              Jei norite daugiau sužinoti apie tvarkymą, kurį įmonė privalo
              atlikti, drąsiai rašykite mums el. paštu.
            </p>
            <p>
              Žemiau rasite konkrečius tikslus ir teisinį pagrindą, kuris mus
              įgalioja tvarkyti jūsų asmens duomenis.
            </p>
            <p class="green">Tikslas</p>
            <p class="green">Teisinis pagrindas</p>
            <p>
              1. Kad palengvintume jūsų prieigą prie skaitmeninės prekybos ir — tik jūsų prašymu —
              dalysimės asmens duomenimis su trečiųjų šalių platformomis. Jūsų duomenys gali būti renkami
              ir dalijami su trečiosiomis šalimis tik jūsų prašymu ir jūsų nuožiūra.
            </p>
            <p>
              Davėte sutikimą tvarkyti asmens duomenis vienu ar keliais tikslais.
            </p>
            <p>
              2. Pateikite mums reikiamą informaciją, kad galėtume greitai ir
              veiksmingai atsakyti į jūsų prašymus, rūpesčius ir klausimus apie paslaugas.
            </p>
            <p>
              Įmonės ar nurodytos trečiosios šalies teisėtiems interesams siekti
              asmens duomenų tvarkymas būtinas.
            </p>
            <p>
              3. Teisinėms ir administracinėms pareigoms vykdyti asmens duomenų tvarkymas būtinas.
            </p>
            <p>Teisinėms pareigoms vykdyti privalome tvarkyti tam tikrus asmens duomenis.</p>
            <p>
              4. Paslaugoms gerinti mums reikia anonimizuotų duomenų ir turime stebėti naudojimą,
              įskaitant klaidų pranešimus.
            </p>
            <p>
              Įmonės ir išorės paslaugų teikėjų teisėtiems interesams apsaugoti
              asmens duomenų tvarkymas ir saugojimas būtinas.
            </p>
            <p>5. Tai būtina siekiant užkirsti kelią sukčiavimui ir paslaugos piktnaudžiavimui.</p>
            <p>
              Kad užtikrintume įmonės ir trečiųjų šalių paslaugų teikėjų teisėtus interesus,
              asmens duomenų tvarkymas ir saugojimas būtinas.
            </p>
            <p>
              6. Paslaugos reikalavimai įpareigoja mus stebėti ir tvarkyti duomenis
              verslo plėtrai, strateginiams sprendimams, stebėsenai, atitikčiai ir
              kitai verslo veiklai.
            </p>
            <p>
              Siekdami apsaugoti įmonės ir išorės paslaugų teikėjų teisėtus interesus
              asmens duomenų tvarkymas ir saugojimas būtinas.
            </p>
            <p>
              7. Naudojame statistikos ir duomenų analizės įrankius sprendimams palaikyti plačiame
              paslaugų spektre ir strateginiame planavime.
            </p>
            <p>
              Įmonės ir mūsų išorės paslaugų teikėjų teisėtiems interesams apsaugoti
              asmens duomenų tvarkymas ir saugojimas būtinas.
            </p>
            <p>
              8. Tiek, kiek būtina įmonės ir trečiųjų šalių paslaugų teikėjų teisėms, turtui ir interesams
              apsaugoti ir pagal visus vietos įstatymus bei
              taikomus reglamentus, sutartis ir mūsų pačių sąlygas, galime tvarkyti
              asmens duomenis. Toks tvarkymas vyksta tik pagal būtinas ir
              nustatytas procedūras.
            </p>
            <p>
              Įmonės ir kiekvieno trečiosios šalies paslaugų
              teikėjo teisėtiems interesams apsaugoti asmens duomenų tvarkymas ir saugojimas būtinas.
            </p>
            <p class="bold-title">6. Asmens duomenų dalijimasis su trečiosiomis šalimis</p>
            <p>
              IP adresų saugojimui ir tvarkymui, apklausoms ir naudojimo analizei
              bei susijusioms paslaugoms įmonė gali dalytis anonimizuotais duomenimis su
              išorės paslaugų teikėjais.
            </p>
            <p>
              Jūsų prašymu dalysimės tam tikrais jūsų pateiktais asmens duomenimis su išorės
              paslaugų teikėjais. Tokiu atveju duomenų tvarkymui taikoma tos
              įmonės privatumo politika. Tai gali apimti įvairias skaitmenines prekybos platformas.
            </p>
            <p>
              Siekdami gerinti klientų aptarnavimą ir apskritai optimizuoti paslaugas,
              įmonė gali dalytis asmens duomenimis su susijusiomis įmonėmis ir verslo partneriais.
            </p>
            <p>
              Kai to reikalauja teisė arba siekiant apsaugoti įmonės ir susijusių
              trečiųjų šalių teises ir turtą, galime dalytis duomenimis su kompetentingomis teisminėmis ar priežiūros institucijomis.
            </p>
            <p>
              Kritinių verslo operacijų, pavyzdžiui, įmonės pardavimo,
              investicijų pritraukimo ar kredito paraiškos, kontekste atitinkami duomenys gali būti
              teisėtai ir tinkamai perduodami. Tai taip pat taikoma susijungimams, restruktūrizavimui,
              konsolidacijai ar įmonės nemokumui pagal įstatymus.
            </p>
            <p class="bold-title">7. Slapukai ir trečiųjų šalių paslaugos</p>
            <p>
              Svetainės analizei ir bendradarbiaujant su reklamos agentūromis slapukai ir kitos
              panašios technologijos gali būti naudojamos pagal įstatymus ir įprastą praktiką.
            </p>
            <p>
              Slapukai — maži tekstiniai failai, saugomi įrenginyje apsilankius svetainėje — naudojami
              rinkti informaciją apie naršymo elgesį, pageidavimus ir kitus duomenis. Jų
              tikslas — suasmeninti ir pagerinti naudojimo patirtį. Jie padeda prisiminti jūsų
              nustatymus ir pageidavimus bei atitinkamai pritaikyti pasiūlą. Jie taip pat
              naudojami svetainės analizei ir statistikai planavimui.
            </p>
            <p>
              Svetainė paprastai naudoja dviejų tipų slapukus: seanso slapukus, kurie saugomi
              tik naršyklės seanso metu ir ištrinami uždarius naršyklę;
              ir nuolatinius slapukus, kurie lieka naršyklėje ir pasibaigus seansui. Pastarieji
              leidžia svetainei atpažinti jus kaip grįžtantį lankytoją ir palengvina naudojimą.
            </p>
            <p class="bold-title">Slapukų tipai:</p>
            <p>Slapukai gali būti naudojami pagal poreikį priklausomai nuo tikslo:</p>
            <p class="green">Slapuko tipas</p>
            <p>Šie slapukai yra būtini</p>
            <p class="green">Tikslas</p>
            <p>
              Slapukai naudojami jus atpažinti kaip klientą, kad galėtume pateikti informaciją,
              nustatymus ir paslaugas, kurių prašėte.
              Jie taip pat palengvina naršymą svetainėje ir prieigą prie jos.
            </p>
            <p>
              Slapukus naudojame, kad įrenginys galėtų atsisiųsti ir atkurti turinį. Jie taip pat
              suteikia prieigą prie būtinų funkcijų ir grįžimą į anksčiau lankytus puslapius.
            </p>
            <p class="green">Papildoma informacija</p>
            <p>
              Kad prieiga prie svetainės būtų greita ir paprasta, slapukai saugo ir tvarko tam tikrus
              asmens duomenis, pavyzdžiui, naudotojo vardą ir paskutinės prieigos datą, jei paprašote svetainės
              jus prisiminti prisijungiant.
            </p>
            <p>Seanso slapukai ištrinami uždarius naršyklę.</p>
            <p class="green">Slapuko tipas</p>
            <p>Funkciniai slapukai</p>
            <p class="green">Tikslas</p>
            <p>
              Slapukais galime saugiai saugoti ir taikyti jūsų nustatymus bei pageidavimus.
              Jie taip pat leidžia jus atpažinti, kai vėl apsilankote svetainėje.
            </p>
            <p class="green">Papildoma informacija</p>
            <p>
              Nuolatiniai slapukai lieka po naršyklės seanso ir galioja iki
              galiojimo datos.
            </p>
            <p class="green">Slapuko tipas</p>
            <p>Našumo slapukai</p>
            <p class="green">Tikslas</p>
            <p>
              Paslaugoms gerinti renkame statistiką slapukais. Šie slapukai
              suteikia informacijos apie svetainės našumą ir naudojimą.
            </p>
            <p class="green">Papildoma informacija</p>
            <p>
              Visa per slapukus saugoma informacija yra anoniminė ir neleidžia identifikuoti asmenų.
            </p>
            <p>
              Seanso slapukai ištrinami uždarius naršyklę, o nuolatiniai slapukai
              lieka aktyvūs iki galiojimo datos arba neribotai, nebent juos ištrinate rankiniu būdu.
            </p>
            <p>Slapukų blokavimas ar ištrynimas</p>
            <p>
              Jei norite pašalinti ar blokuoti slapukus, tai turite padaryti
              naršyklės nustatymuose. Toliau pateiktose nuorodose rasite detalias instrukcijas populiariausioms naršyklėms.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Slapukų blokavimas gali lemti, kad kai kurios svetainės funkcijos neveiks kaip numatyta.
            </p>
            <p class="bold-title">Kiek laiko saugome asmens duomenis</p>
            <p>
              Asmens duomenys saugomi tik tiek, kiek būtina reikiamiems
              procesams, kaip nurodyta kitose šios politikos dalyse. Ilgesnis saugojimas galimas, jei
              to reikalauja vietos įstatymai, taisyklės ar vidaus politika.
            </p>
            <p>
              Asmens duomenimis jūsų prašymu ir jūsų nuožiūra dalijamasi su trečiųjų šalių
              prekybos platformomis 12 mėnesių. Pasibaigus šiam laikotarpiui ir su jūsų
              sutikimu tais duomenimis dalijamasi dar 12 mėnesių.
            </p>
            <p>
              Mūsų procedūros numato reguliarų visų asmens duomenų vertinimą, ar
              jie vis dar reikalingi.
            </p>
            <p class="bold-title">
              9. Asmens duomenų perdavimas trečiosioms šalims ar tarptautinėms organizacijoms
            </p>
            <p>
              Kai to reikia paslaugoms ir/ar saugumo sumetimais, galime perduoti
              asmens duomenis į kitas šalis (ne jūsų) ir tarptautinėms organizacijoms
              taikant išsamius saugumo protokolus. Taikome aukšto lygio
              duomenų apsaugos priemones, kad apsaugotume informaciją ir užtikrintume prieigą prie teisės gynimo priemonių
              ir įstatyminių teisių visada.
            </p>
            <p>
              Europos ekonominėje erdvėje (EEE) visiems gyventojams taikoma duomenų apsauga ir garantijos.
            </p>
            <p class="circle">
              Duomenų perdavimai visada vyksta pagal ES jurisdikciją ir priežiūrą, laikantis
              duomenų apsaugos standartų ir protokolų, numatytų Reglamento
              (ES) 2016/679 45 straipsnio 3 dalyje, 2016 m. balandžio 27 d.
              (&ldquo;BDAR&rdquo;).
            </p>
            <p class="circle">
              Bet koks duomenų perdavimas tarp viešųjų institucijų vyksta pagal
              46 straipsnio 2 dalį. Tai teisiškai įpareigojantis ir vykdytinas susitarimas.
            </p>
            <p class="circle">
              Europos Komisijos standartinės sutarčių sąlygos pagal BDAR 46 straipsnio 2 dalies c punktą nustato
              perdavimo sąlygas, ir tokie perdavimai vyksta pagal
              jas. Nuostatas galite peržiūrėti
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Daugiau apie konkrečias saugumo priemones, kurių įmonė ėmėsi
              asmens duomenims apsaugoti perduodant į trečiąsias šalis, galite siųsti prašymą
              el. paštu <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Asmens duomenų apsauga</p>
            <p>
              Asmens duomenys saugomi aukščiausio lygio techninėmis ir organizacinėmis
              priemonėmis pagal pamatines procedūras. Šios procedūros veiksmingos
              siekiant užkirsti kelią duomenų sunaikinimui dėl neteisėtų ar nenumatytų įvykių, taip pat
              jų praradimui ar pakeitimui.
            </p>
            <p>
              Nors taikome didžiausią įmanomą rūpestingumą ir procedūras, atitinkančias griežčiausius
              duomenų apsaugos standartus ir teisę, jokiomis aplinkybėmis negalima garantuoti,
              kad asmens duomenys yra be klaidų. Todėl negalime prisiimti atsakomybės, jei
              asmens duomenys patiria atsitiktinę, nematerialią ar pasekminę žalą ar atskleidimą.
              Tai apima situacijas, kurių nekontroliuojame, pavyzdžiui, atskleidimą dėl perdavimo
              klaidų, trečiųjų šalių neteisėtos prieigos ar panašių priežasčių.
            </p>
            <p>
              Gavę teisiškai įpareigojančius priežiūros institucijų ar kitų
              valdžios institucijų, turinčių įstatyminę kompetenciją, prašymus, galime būti įpareigoti perduoti
              jūsų asmens duomenis toms institucijoms. Perdavę pagal teisinę pareigą, nebeturime
              įtakos, kaip tos institucijos tvarko, saugo ar apsaugo jūsų duomenis.
            </p>
            <p>
              Viskas, kas perduodama internetu, įskaitant asmens duomenis, kelia tam tikrą
              perėmimo riziką ir nėra 100 % saugu. Įmonė negali garantuoti
              internetu siunčiamų duomenų saugumo.
            </p>
            <p class="bold-title">11. Nuorodos į trečiųjų šalių svetaines</p>
            <p>
              Šioje svetainėje rasite nuorodų į trečiųjų šalių programas ir svetaines. Atkreipkite dėmesį,
              kad jos nesusijusios su įmone ir nėra jos kontroliuojamos, o mūsų
              privatumo politika toms trečiosioms šalims netaikoma. Jos veikia pagal savo
              procedūras ir prioritetus rinkdamos ir tvarkydamos asmens duomenis, todėl
              neprisiimame atsakomybės už tą veiklą. Naudokitės jomis savo nuožiūra.
            </p>
            <p>
              Visada patikrinkite įmonės ar paslaugos privatumo politiką apsilankę jų svetainėje
              prieš pateikdami asmens duomenis. Įsitikinkite, ar jų rinkimo, naudojimo ir
              tvarkymo taisyklės atitinka jūsų pageidavimus. Jei nusprendžiate dalytis duomenimis, darykite tai
              tiesiogiai pas teikėją.
            </p>
            <p class="bold-title">12. Politikos atnaujinimai</p>
            <p>
              Pasilaikome teisę bet kada atnaujinti ar keisti šią politiką. Informuosime jus
              apie pakeitimus per svetainę ir atitinkamus kanalus. Atnaujinta privatumo
              politikos versija skelbiama svetainėje, ir peržiūrėta politika įsigalioja
              iš karto po paskelbimo, jei nenurodyta kitaip.
            </p>
            <p class="bold-title">13. Jūsų teisės dėl asmens duomenų</p>
            <p>
              Jūs turite kontrolę ir paskutinį žodį dėl visų savo asmens duomenų naudojimo. Tai
              apima tikslumo tikrinimą, klaidų taisymą ir teisę į ištrynimą ar
              mūsų duomenų tvarkymo apribojimą — tiek apimtimi, tiek pobūdžiu.
            </p>
            <p>EEE gyventojai šioje puslapyje ras jiems aktualią informaciją:</p>
            <p>
              Jūsų asmens duomenis saugo čia aprašytos teisės. Išsiuntę el. laišką
              toliau nurodytu adresu galite iš karto įgyvendinti tas teises.
            </p>
            <p>Prieiga prie savo teisių</p>
            <p>
              Jei pateikti asmens duomenys tikslūs, galite prie jų prieiti bet kada. Visi
              mūsų tvarkomi asmens duomenys mums prieinami ir todėl patikrinami.
            </p>
            <p>
              Bet kada galite paprašyti asmens duomenų patikrai, ir jie bus pateikti
              jums elektronine forma. Jei prašote papildomų jau pateiktos
              kopijos egzempliorių, gali būti taikomas pagrįstas mokestis.
            </p>
            <p>
              Įstatyme ir privatumo politikoje pripažintos teisės neturi pažeisti trečiųjų
              šalių teisių. Įmonė pasilaiko teisę atsisakyti ar apriboti prieigą prie asmens duomenų,
              jei tai pažeistų trečiųjų šalių teises ir laisves.
            </p>
            <p>Teisė ištaisyti klaidas</p>
            <p>
              Bet kokia klaida asmens duomenyse, ar dėl praleidimo, ar dėl netikslios informacijos,
              gali būti ištaisyta jūsų ar įmonės, kad tvarkymas būtų tinkamas.
            </p>
            <p>Teisė į duomenų ištrynimą</p>
            <p>
              Turite teisę prašyti ištrinti asmens duomenis šiais
              atvejais: 1) jei jie tvarkyti be jūsų sutikimo ar už teisinių ribų; 2)
              jūsų prašymu, jei norite juos ištrinti ir įmonė neturi teisinės pareigos
              jų saugoti; 3) jei prieštaraujate tvarkymui ar nebeteikiate sutikimo, net jei jis
              teisėtas ir pagrįstas mūsų ar trečiųjų šalių interesais; ir 4) jei įstatymas
              mus įpareigoja juos ištrinti.
            </p>
            <p>
              Teisė į ištrynimą netaikoma, jei tam prieštarauja ES ar
              valstybės narės teisės aktai. Ji taip pat netaikoma, jei duomenys reikalingi teisės reikalavimams
              reikšti ar gintis.
            </p>
            <p>Teisė apriboti duomenų tvarkymą</p>
            <p>
              Turite teisę prašyti apriboti asmens duomenų tvarkymą, jei manote,
              kad juose yra netikslumų.
            </p>
            <p>
              Jei prašote apriboti asmens duomenų naudojimą, apribosime tvarkymą, išskyrus
              šiuos atvejus: 1) jei taikoma Europos Sąjungos ar vienos iš jos
              valstybių narių teisė tam prieštarauja; 2) su jūsų sutikimu, jei būtina gintis ar reikšti
              teisės reikalavimus; 3) kito fizinio asmens teisėms apsaugoti.
            </p>
            <p>Teisė į duomenų perkeliamumą</p>
            <p>
              Turite teisę prieiti ir kontroliuoti pateiktus asmens duomenis tiek,
              kiek davėte sutikimą juos rinkti ir jei tvarkymas
              vyksta automatizuotomis sistemomis.
            </p>
            <p>
              Turite teisę prašyti visų asmens duomenų perdavimo kitai įmonei ar
              organizacijai, kiek tai techniškai įmanoma. Ši teisė nepaveikia
              teisės į duomenų ištrynimą. Ji netaikoma, jei įgyvendinimas pažeidžia kito fizinio asmens
              teises ar laisves.
            </p>
            <p>Teisė nesutikti su duomenų tvarkymu</p>
            <p>
              Nepažeidžiant įmonės teisės siekti teisėtų interesų ar
              trečiosios šalies, veikiančios kaip paslaugų teikėja, interesų, turite teisę nesutikti su
              tvarkymu ir prašyti jį nutraukti. Ši teisė netaikoma, jei yra skubus
              teisinis poreikis tęsti tvarkymą — ar gintis nuo teisės reikalavimų, ar juos
              reikšti. Tokiais atvejais galime tęsti asmens duomenų tvarkymą.
            </p>
            <p>
              Bet kada galite nesutikti, kad asmens duomenys būtų tvarkomi tiesioginei rinkodarai.
            </p>
            <p>
              Teisė atšaukti sutikimą
            </p>
            <p>
              Sutikimą tvarkyti asmens duomenis galite atšaukti bet kada,
              su nedelsiamu poveikiu. Toks atšaukimas neturi grįžtamosios galios tvarkymui,
              atliktam iki atšaukimo.
            </p>
            <p>
              Jei dėl kokios nors priežasties esate nepatenkinti, turite teisę pateikti skundą
              teisinei, priežiūros ar kitai kontrolės institucijai.
            </p>
            <p>
              Jei manote, kad jūsų teisės ir laisvės, susijusios su asmens duomenų tvarkymu,
              buvo pažeistos, Europos Sąjungos valstybės narės turi priežiūros ir kontrolės
              institucijas tam tikslui. Galite kreiptis į tas institucijas, jei manote, kad tai tikslinga.
            </p>
            <p>
              13 skyrius aprašo situacijas, kuriose jūsų teisės dėl asmens duomenų gali būti
              apribotos Europos Sąjungos ar valstybių narių teisės aktais.
            </p>
            <p>
              Gavę jūsų prašymą dėl asmens duomenų ir jų tvarkymo, suteiksime
              prieigą prie prašomos informacijos, kaip nurodyta šios politikos 13 skyriuje.
              Šį terminą galime pratęsti iki dviejų mėnesių priklausomai nuo prašymo apimties
              ir jo pobūdžio. Prireikus apie pratęsimą pranešime
              per vieną mėnesį nuo prašymo gavimo.
            </p>
            <p>
              Prašomą informaciją atsiųsime elektroniniu būdu ir nemokamai, nebent
              tai prieštarauja teisei ar 13 skyriaus nuostatoms. Pasilaikome teisę
              taikyti pagrįstą mokestį arba atmesti prašymą, jei jis laikomas nepagrįstu, perteklinu ar pasikartojančiu.
            </p>
            <p>
              Pasilaikome teisę prašyti papildomo tapatybės patvirtinimo, jei yra
              pagrįstų abejonių dėl asmens, teikiančio prašymą dėl asmens duomenų, kad
              apsaugotume ir užtikrintume duomenų saugumą.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
