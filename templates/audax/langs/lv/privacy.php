<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Privātuma politika | ' . SITE_NAME;
$page_description = 'Privātuma politika ' . SITE_NAME . '.';
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
            <h1>Privātuma politika</h1>
            <p>
              Jūsu personas dati un aktīvi mums ir ārkārtīgi svarīgi. Mēs esam pilnībā
              apņēmušies tos aizsargāt.
            </p>
            <p>
              <?= e(SITE_NAME) ?> vāc un glabā datus, kas nepieciešami jūsu darījumiem. Kā
              tie tiek vākti un glabāti, aprakstīts tālākajā privātuma politikā.
            </p>
            <p>Mūsu politika balstās uz šādiem principiem:</p>
            <p class="circle">
              Lai nodrošinātu maksimālu caurspīdīgumu par procesiem, kā vācam un
              glabājam jūsu personas datus:
            </p>
            <p>
              Mēs vēlamies, lai jūs saprastu, kā vācam un apstrādājam datus, lai varētu pieņemt
              informētus lēmumus. Šajā vietnē piemērojam skaidras datu apstrādes
              procedūras. Politika detalizēti apraksta metodes, ar kurām sniedzam
              skaidru un konkrētu informāciju par datu izmantošanu. Kontrole ir jūsu rokās.
            </p>
            <p>
              Mēs jūs informēsim nekavējoties, kad to uzskatīsim par nepieciešamu. Caurspīdīgums mums ir
              būtisks.
            </p>
            <p>
              Mūsu speciālistu komanda vienmēr ir pieejama, lai atbildētu uz jautājumiem par jebkuru
              mūsu procesu aspektu, tostarp pienākumiem saskaņā ar tiesībām <?= e(geo_in()) ?> un ES
              noteikumiem. Sazinieties ar mums:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Cita personas datu izmantošana no mūsu puses nav atļauta, izņemot kā paredzēts
              privātuma politikā.
            </p>
            <p>
              Personas datus varam apstrādāt šādiem mērķiem, tostarp nodrošinot pareizu
              <?= e(SITE_NAME) ?> pakalpojumu darbību un lietotāju savienošanu ar trešo personu
              tirdzniecības platformām. Apstrāde var būt nepieciešama arī vietnes funkciju un pakalpojumu
              uzturēšanai un uzlabošanai; mūsu tiesību aizsardzībai un juridisko un citu
              pienākumu izpildei. Visbeidzot, dati pēc vajadzības tiek izmantoti administratīvām
              un citām biznesa funkcijām saistībā ar jums sniegtajiem pakalpojumiem.
            </p>
            <p>
              Lai piedāvātu kvalitatīvākus, jūsu vajadzībām pielāgotus pakalpojumus, <?= e(SITE_NAME) ?>
              izmanto personas datus.
            </p>
            <p class="circle">
              Lai izmantotu nepieciešamos rīkus jūsu personas datu aizsardzībai un
              tiesību nodrošināšanai saistībā ar tiem:
            </p>
            <p>
              Jebkurā laikā varat ar mums sazināties un iegūt piekļuvi visiem saviem datiem. Tos varam arī
              pēc vajadzības mainīt vai dzēst. Turklāt apstrādājam pieprasījumus nodot šos
              datus jums vai jūsu norādītai trešajai personai. Šo pakalpojumu piedāvājam, lai jūs varētu
              pilnībā īstenot privātuma un kontroles tiesības.
            </p>
            <p class="circle">Aizsargājiet savus personas datus:</p>
            <p>
              Mūsu drošības sistēmas ir augstas kvalitātes un ietver bankas līmeņa pasākumus. Lai gan
              absolūta aizsardzība nav garantēta, mēs apņemamies sistēmas nepārtraukti uzturēt
              augstā līmenī un stiprināt jau ieviestos pasākumus.
            </p>
            <p>
              Mums ir visaptveroša privātuma politika un pirmās klases drošības sistēmas.
            </p>
            <p class="bold-title">1. Piemērošanas joma</p>
            <p>
              Šī politika apraksta procedūras, kā vācam, apstrādājam un izpaužam visus
              fizisko personu datus.
            </p>
            <p>
              Politikas noteikumi attiecas uz visām fiziskajām personām, kuras var identificēt vai ir
              identificētas. Īpaši uz katru fizisko personu, ko var identificēt saistībā ar
              mums uzticētajiem datiem, kuriem mums ir piekļuve un/vai kurus varam apvienot.
            </p>
            <p>
              Datu apstrāde privātuma politikas izpratnē jo īpaši ietver personas datu
              glabāšanu, pārvaldību un organizēšanu.
            </p>
            <p>
              Mēs nevācam un nemēģinām vākt informāciju par personām, kas jaunākas par 18
              gadiem. Personas, kas jaunākas par 18 gadiem, arī nedrīkst izmantot mūsu platformu nekādiem
              mērķiem. Ja konstatējam, ka lietotājs ir jaunāks par 18 gadiem, šos datus dzēšam nekavējoties.
            </p>
            <p class="bold-title">2. Kādus personas datus vācam?</p>
            <p>
              Reģistrējoties vācam personas datus, kas nepieciešami pakalpojumu izmantošanai. Ja nepieciešams,
              varam pieprasīt arī datus pārbaudei, piemēram, lai
              apstiprinātu konta īpašumtiesības. Lai uzlabotu un uzturētu pakalpojumu
              kvalitāti, vācam un analizējam informāciju par platformas un
              saistīto trešo personu pakalpojumu izmantošanu.
            </p>
            <p class="bold-title">
              3. Nekādos apstākļos jums nav pienākuma sniegt uzņēmumam personas datus.
            </p>
            <p>
              Lai gan jums nav pienākuma sniegt datus, lēmums to nedarīt
              var ierobežot pakalpojumu sniegšanu. Tas var arī novest pie
              ierobežojumiem platformas izmantošanā.
            </p>
            <p class="bold-title">
              4. Kādus personas datus vācam? Apmeklējot vietni, varam vākt šādus
              personas datus:
            </p>
            <p>
              Mēs nevācam datus, kas jūs tieši identificē. Cita starpā reģistrējam
              konta aktivitāti, IP adreses, kā arī piekļuves datumus un laikus. Uzturēšanai,
              drošībai un atbalstam glabājam sistēmas kļūdu ziņojumus, pārlūkprogrammas informāciju un
              ierīces veidu, no kuras piesakāties. Reģistrējam arī kontā iestatīto valodu.
            </p>
            <p>
              Attiecībā uz personas datiem vācam un glabājam tikai informāciju,
              ko sniedzat, savienojoties ar trešās personas tirdzniecības platformu, izmantojot mūsu pakalpojumus.
            </p>
            <p>
              Personas dati, ko esat sniedzis trešo personu platformām, var ietvert:
              vārdu un uzvārdu, adresi, tālruņa numuru un e-pastu.
            </p>
            <p class="bold-title">
              5. Kāpēc uzņēmumam vajadzīgi mani dati un vai apstrāde ir likumīga?
            </p>
            <p>
              Uzņēmums vāc, glabā un apstrādā jūsu personas datus tikai
              politikā paredzētajiem mērķiem. Visa minētā izmantošana un apstrāde atbilst
              piemērojamajām tiesībām <?= e(geo_in()) ?> un ES noteikumiem.
            </p>
            <p>
              Uzņēmums pārvaldīs, apstrādās vai nodos jūsu datus tikai saskaņā ar
              piemērojamajiem noteikumiem <?= e(geo_in()) ?>. Attiecīgās juridiskās pamatojumi ir uzskaitīti tālāk:
            </p>
            <p class="circle">
              Jūs esat devis piekrišanu, ka uzņēmums glabā un apstrādā jūsu personas datus.
              Sniedzot datus uzņēmumam, jūs pilnvarojat mūs tos nodot attiecīgajai
              trešās personas tirdzniecības platformai. Turklāt esat devis piekrišanu
              personas datu apstrādei vienam vai vairākiem mērķiem.
            </p>
            <p class="circle">
              Lai uzlabotu pakalpojumus, iesniegtu vai aizstāvētu prasības un aizsargātu leģitīmās
              interesēs, cita starpā uzņēmumam var būt nepieciešams glabāt un
              apstrādāt jūsu personas datus.
            </p>
            <p class="circle">Juridisko pienākumu izpildei datu apstrāde ir nepieciešama.</p>
            <p>
              Ja vēlaties uzzināt vairāk par apstrādi, kas uzņēmumam ir jāveic,
              droši rakstiet mums e-pastā.
            </p>
            <p>
              Tālāk ir konkrētie mērķi un juridiskais pamats, kas mums
              ļauj apstrādāt jūsu personas datus.
            </p>
            <p class="green">Mērķis</p>
            <p class="green">Juridiskais pamats</p>
            <p>
              1. Lai atvieglotu piekļuvi digitālajai tirdzniecībai un — tikai pēc jūsu pieprasījuma —
              dalāmies ar personas datiem ar trešo personu platformām. Jūsu datus var vākt
              un kopīgot ar trešajām personām tikai pēc jūsu pieprasījuma un pēc jūsu ieskatiem.
            </p>
            <p>
              Jūs esat devis piekrišanu personas datu apstrādei vienam vai vairākiem mērķiem.
            </p>
            <p>
              2. Sniedziet mums nepieciešamo informāciju, lai varētu ātri un
              efektīvi atbildēt uz jūsu pieprasījumiem, bažām un jautājumiem par pakalpojumiem.
            </p>
            <p>
              Uzņēmuma vai norādītas trešās personas leģitīmo interešu īstenošanai
              personas datu apstrāde ir nepieciešama.
            </p>
            <p>
              3. Juridisko un administratīvo pienākumu izpildei personas datu apstrāde ir nepieciešama.
            </p>
            <p>Juridisko pienākumu izpildei mums jāapstrādā noteikti personas dati.</p>
            <p>
              4. Lai uzlabotu pakalpojumus, mums vajadzīgi anonimizēti dati un jāuzrauga izmantošana,
              tostarp kļūdu ziņojumi.
            </p>
            <p>
              Uzņēmuma un ārējo pakalpojumu sniedzēju leģitīmo interešu aizsardzībai
              personas datu apstrāde un glabāšana ir nepieciešama.
            </p>
            <p>5. Tas ir nepieciešams, lai novērstu krāpšanu un pakalpojuma ļaunprātīgu izmantošanu.</p>
            <p>
              Lai nodrošinātu uzņēmuma un trešo personu pakalpojumu sniedzēju leģitīmās intereses,
              processing and storage of personal data is necessary.
            </p>
            <p>
              6. Pakalpojuma prasības mums uzliek pienākumu uzraudzīt un apstrādāt datus
              biznesa attīstībai, stratēģiskiem lēmumiem, uzraudzībai, atbilstībai un
              citām biznesa darbībām.
            </p>
            <p>
              Lai aizsargātu uzņēmuma un ārējo pakalpojumu sniedzēju leģitīmās intereses
              personas datu apstrāde un glabāšana ir nepieciešama.
            </p>
            <p>
              7. Izmantojam statistikas un datu analīzes rīkus, lai atbalstītu lēmumus plašā
              pakalpojumu spektrā un stratēģiskajā plānošanā.
            </p>
            <p>
              Uzņēmuma un mūsu ārējo pakalpojumu sniedzēju leģitīmo interešu aizsardzībai
              personas datu apstrāde un glabāšana ir nepieciešama.
            </p>
            <p>
              8. Ciktāl nepieciešams, lai aizsargātu uzņēmuma un trešo personu pakalpojumu sniedzēju
              tiesības, īpašumu un intereses, saskaņā ar visiem vietējiem likumiem un
              piemērojamajiem noteikumiem, līgumiem un mūsu pašu noteikumiem, varam apstrādāt
              personas datus. Šāda apstrāde notiek tikai saskaņā ar nepieciešamajām un
              noteiktajām procedūrām.
            </p>
            <p>
              Uzņēmuma un katra ārējā
              pakalpojumu sniedzēja leģitīmo interešu aizsardzībai personas datu apstrāde un glabāšana ir nepieciešama.
            </p>
            <p class="bold-title">6. Personas datu kopīgošana ar trešajām personām</p>
            <p>
              IP adrešu glabāšanai un apstrādei, aptaujām un lietošanas analīzei
              un saistītiem pakalpojumiem uzņēmums var kopīgot anonimizētus datus ar
              ārējiem pakalpojumu sniedzējiem.
            </p>
            <p>
              Pēc jūsu pieprasījuma dalāmies ar dažiem sniegtajiem personas datiem ar ārējiem
              pakalpojumu sniedzējiem. Tādā gadījumā apstrādei piemērojama šī
              uzņēmuma privātuma politika. Tas var ietvert dažādas digitālās tirdzniecības platformas.
            </p>
            <p>
              Lai uzlabotu klientu atbalstu un kopumā optimizētu pakalpojumus,
              uzņēmums var kopīgot personas datus ar saistītajiem uzņēmumiem un biznesa partneriem.
            </p>
            <p>
              Kad to prasa likums vai lai aizsargātu uzņēmuma un saistīto
              trešo personu tiesības un īpašumu, varam kopīgot datus ar kompetentajām juridiskajām vai uzraudzības iestādēm.
            </p>
            <p>
              Kritisku biznesa operāciju, piemēram, uzņēmuma pārdošanas,
              investīciju piesaistes vai kredīta pieteikuma ietvaros attiecīgos datus var
              kopīgot likumīgi un atbilstoši. Tas attiecas arī uz apvienošanos, pārstrukturēšanu,
              konsolidāciju vai uzņēmuma maksātnespēju saskaņā ar likumu.
            </p>
            <p class="bold-title">7. Sīkdatnes un trešo personu pakalpojumi</p>
            <p>
              Vietnes analīzei un sadarbībā ar reklāmas aģentūrām sīkdatnes un citas
              līdzīgas tehnoloģijas var izmantot saskaņā ar likumu un parasto praksi.
            </p>
            <p>
              Sīkdatnes — mazi teksta faili, kas tiek saglabāti ierīcē, apmeklējot vietni — izmanto, lai
              vāktu informāciju par pārlūkošanas uzvedību, preferencēm un citiem datiem. To
              mērķis ir personalizēt un uzlabot pieredzi. Tās palīdz atcerēties jūsu
              iestatījumus un preferences un attiecīgi pielāgot piedāvājumu. Tās izmanto arī
              vietnes analīzei un statistikai plānošanai.
            </p>
            <p>
              Vietne parasti izmanto divu veidu sīkdatnes: sesijas sīkdatnes, kas tiek saglabātas
              tikai pārlūkprogrammas sesijas laikā un dzēstas, to aizverot;
              un pastāvīgās, kas paliek arī pēc sesijas. Šīs otrās
              ļauj vietnei jūs atpazīt kā atgriezušos apmeklētāju un atvieglo lietošanu.
            </p>
            <p class="bold-title">Sīkdatņu veidi:</p>
            <p>Sīkdatnes var izmantot pēc vajadzības atkarībā no mērķa:</p>
            <p class="green">Sīkdatnes veids</p>
            <p>Šīs sīkdatnes ir stingri nepieciešamas</p>
            <p class="green">Mērķis</p>
            <p>
              Sīkdatnes izmanto, lai jūs atpazītu kā klientu, lai varētu sniegt informāciju,
              iestatījumus un pakalpojumus, ko esat pieprasījis.
              Tās arī atvieglo navigāciju un piekļuvi vietnei.
            </p>
            <p>
              Sīkdatnes izmantojam, lai ierīce varētu lejupielādēt un atskaņot saturu. Tās arī
              dod piekļuvi būtiskām funkcijām un atgriešanos iepriekš apmeklētajās lapās.
            </p>
            <p class="green">Papildu informācija</p>
            <p>
              Lai piekļuve būtu ātra un vienkārša, sīkdatnes glabā un apstrādā noteiktus
              personas datus, piemēram, lietotājvārdu un pēdējās piekļuves datumu, ja lūdzat vietnei
              jūs atcerēties, piesakoties.
            </p>
            <p>Sesijas sīkdatnes tiek dzēstas, aizverot pārlūkprogrammu.</p>
            <p class="green">Sīkdatnes veids</p>
            <p>Funkcionālās sīkdatnes</p>
            <p class="green">Mērķis</p>
            <p>
              Pateicoties sīkdatnēm, varam droši saglabāt un piemērot jūsu iestatījumus un preferences.
              Tās arī ļauj jūs atpazīt nākamajā apmeklējumā.
            </p>
            <p class="green">Papildu informācija</p>
            <p>
              Pastāvīgās sīkdatnes paliek pēc pārlūkprogrammas sesijas un ir aktīvas līdz
              derīguma termiņam.
            </p>
            <p class="green">Sīkdatnes veids</p>
            <p>Veiktspējas sīkdatnes</p>
            <p class="green">Mērķis</p>
            <p>
              Lai uzlabotu pakalpojumus, vācam statistiku ar sīkdatnēm. Tās
              sniedz informāciju par vietnes veiktspēju un tās izmantošanu.
            </p>
            <p class="green">Papildu informācija</p>
            <p>
              Visa ar sīkdatnēm saglabātā informācija ir anonīma un neļauj identificēt personas.
            </p>
            <p>
              Sesijas sīkdatnes tiek dzēstas, aizverot pārlūkprogrammu, bet pastāvīgās
              paliek aktīvas līdz termiņam vai nenoteikti, ja tās manuāli neizdzēšat.
            </p>
            <p>Sīkdatņu bloķēšana vai dzēšana</p>
            <p>
              Ja vēlaties noņemt vai bloķēt sīkdatnes, dariet to
              pārlūkprogrammas iestatījumos. Tālākās saites satur detalizētas instrukcijas populārākajām pārlūkprogrammām.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Sīkdatņu bloķēšana var izraisīt, ka dažas vietnes funkcijas nedarbojas, kā paredzēts.
            </p>
            <p class="bold-title">Cik ilgi glabājam personas datus</p>
            <p>
              Personas datus glabājam tikai tik ilgi, cik tas ir stingri nepieciešams vajadzīgajiem
              procesiem, kā norādīts citās šīs politikas sadaļās. Ilgāka glabāšana iespējama, ja
              to prasa vietējie noteikumi vai uzņēmuma iekšējā politika.
            </p>
            <p>
              Jūsu personas dati pēc jūsu pieprasījuma un pēc jūsu ieskatiem tiek kopīgoti ar trešo personu
              tirdzniecības platformām 12 mēnešus. Pēc šī perioda beigām un ar jūsu
              piekrišanu dati tiek kopīgoti vēl 12 mēnešus.
            </p>
            <p>
              Mūsu procedūras paredz regulāru visu personas datu izvērtēšanu, lai noteiktu, vai
              tie joprojām ir nepieciešami.
            </p>
            <p class="bold-title">
              9. Personas datu nosūtīšana uz trešajām valstīm vai starptautiskām organizācijām
            </p>
            <p>
              Kad tas nepieciešams pakalpojumiem un/vai drošības apsvērumu dēļ, varam nosūtīt
              personas datus uz citām valstīm (ārpus jūsējās) un starptautiskām organizācijām
              saskaņā ar visaptverošiem drošības protokoliem. Datu aizsardzības pasākumus piemērojam
              augstā līmenī, lai aizsargātu informāciju un nodrošinātu piekļuvi tiesiskās aizsardzības līdzekļiem
              un likumīgajām tiesībām vienmēr.
            </p>
            <p>
              Eiropas Ekonomikas zonā (EEZ) visiem iedzīvotājiem ir datu aizsardzība un garantijas.
            </p>
            <p class="circle">
              Nosūtīšana vienmēr notiek ES jurisdikcijā un uzraudzībā, saskaņā ar
              datu aizsardzības standartiem un protokoliem, kas paredzēti Regulas
              (ES) 2016/679 45. panta 3. punktā, 2016. gada 27. aprīlī
              (&ldquo;VDAR&rdquo;).
            </p>
            <p class="circle">
              Jebkura datu nosūtīšana starp publiskām iestādēm notiek saskaņā ar
              46. panta 2. punktu. Tā ir juridiski saistoša un izpildāma vienošanās.
            </p>
            <p class="circle">
              Eiropas Komisijas standarta līguma klauzulas saskaņā ar VDAR 46. panta 2. punkta c) apakšpunktu nosaka
              nosūtīšanas nosacījumus, un šāda nosūtīšana notiek saskaņā ar
              tām. Noteikumus varat skatīt
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Vairāk par konkrētajiem drošības pasākumiem, ko uzņēmums veicis, lai
              aizsargātu personas datus nosūtīšanas laikā uz trešajām valstīm, varat nosūtīt pieprasījumu
              e-pastā uz <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Personas datu aizsardzība</p>
            <p>
              Personas datus aizsargā augstākā līmeņa tehniski un organizatoriski
              pasākumi saskaņā ar atsauces procedūrām. Šīs procedūras efektīvi
              novērš datu iznīcināšanu nelikumīgu vai neparedzētu notikumu dēļ, kā arī
              to zudumu vai grozīšanu.
            </p>
            <p>
              Lai gan piemērojam vislielāko iespējamo rūpību un procedūras, kas atbilst visstingrākajiem
              datu aizsardzības standartiem un likumam, nekādos apstākļos nav garantēts,
              ka personas dati ir bez kļūdām. Tāpēc neuzņemamies atbildību, ja
              personas dati cieš nejaušus, nemateriālus vai izrietošus zaudējumus vai izpaušanu.
              Tas ietver situācijas ārpus mūsu kontroles, piemēram, izpaušanu pārraides
              kļūdu, trešo personu nesankcionētas piekļuves vai līdzīgu iemeslu dēļ.
            </p>
            <p>
              Kad saņemam juridiski saistošus uzraudzības iestāžu vai citu
              valsts iestāžu ar likumā noteiktām pilnvarām pieprasījumus, mums var būt pienākums nodot
              jūsu personas datus šīm iestādēm. Pēc nodošanas uz juridiska pienākuma pamata mums nav
              kontroles pār to, kā šīs iestādes apstrādā, glabā vai aizsargā jūsu datus.
            </p>
            <p>
              Viss, kas tiek pārraidīts internetā, tostarp personas dati, nes noteiktu
              pārtveršanas risku un nav 100 % drošs. Uzņēmums nevar garantēt
              tiešsaistē nosūtīto datu drošību.
            </p>
            <p class="bold-title">11. Saites uz trešo personu vietnēm</p>
            <p>
              Šajā vietnē atradīsiet saites uz trešo personu lietotnēm un vietnēm. Ņemiet vērā,
              ka tās nav saistītas ar uzņēmumu un nav tā kontrolē, un mūsu
              privātuma politika uz tām neattiecas. Tās darbojas pēc savām
              procedūrām un prioritātēm, vācot un apstrādājot personas datus, tāpēc
              neuzņemamies atbildību par šīm darbībām. Izmantojiet tās pēc saviem ieskatiem.
            </p>
            <p>
              Vienmēr pārbaudiet uzņēmuma vai pakalpojuma privātuma politiku, apmeklējot to vietni
              pirms personas datu sniegšanas. Pārbaudiet, vai to vākšanas, izmantošanas un
              apstrādes noteikumi atbilst jūsu vēlmēm. Ja nolemjat dalīties ar datiem, dariet to
              tieši pie pakalpojumu sniedzēja.
            </p>
            <p class="bold-title">12. Politikas atjauninājumi</p>
            <p>
              Mēs paturam tiesības jebkurā laikā atjaunināt vai mainīt šo politiku. Mēs jūs informēsim
              par izmaiņām vietnē un attiecīgajos kanālos. Atjauninātā privātuma
              politikas versija tiks publicēta vietnē, un pārskatītā politika stājas spēkā
              nekavējoties pēc publicēšanas, ja nav norādīts citādi.
            </p>
            <p class="bold-title">13. Jūsu tiesības attiecībā uz personas datiem</p>
            <p>
              Jums ir kontrole un pēdējais vārds par visu savu personas datu izmantošanu. Tas
              ietver precizitātes pārbaudi, kļūdu labošanu un tiesības uz dzēšanu vai
              mūsu apstrādes ierobežošanu — gan apjoma, gan rakstura ziņā.
            </p>
            <p>EEZ iedzīvotāji šajā lapā atradīs viņiem aktuālo informāciju:</p>
            <p>
              Jūsu personas datus aizsargā šeit aprakstītās tiesības. Nosūtot e-pastu uz
              tālāk norādīto adresi, šīs tiesības varat īstenot nekavējoties.
            </p>
            <p>Piekļuve savām tiesībām</p>
            <p>
              Ja sniegtie personas dati ir precīzi, tiem varat piekļūt jebkurā laikā. Visi
              personas dati, ko apstrādājam, mums ir pieejami un tātad pārbaudāmi.
            </p>
            <p>
              Jebkurā laikā varat pieprasīt personas datus pārbaudei, un tie jums tiks
              sniegti elektroniskā formā. Ja pieprasāt papildu kopijas
              apstrādātajiem datiem papildus jau sniegtajai kopijai, var tikt iekasēta saprātīga maksa.
            </p>
            <p>
              Likumā un privātuma politikā atzītās tiesības nedrīkst ietekmēt trešo
              personu tiesības. Uzņēmums patur tiesības atteikt vai ierobežot piekļuvi personas datiem,
              ja tas pārkāpj trešo personu tiesības un brīvības.
            </p>
            <p>Tiesības labot kļūdas</p>
            <p>
              Jebkura kļūda personas datos, vai nu izlaiduma, vai neprecīzas informācijas dēļ,
              var tikt labota no jūsu vai uzņēmuma puses, lai apstrāde būtu pareiza.
            </p>
            <p>Tiesības uz datu dzēšanu</p>
            <p>
              Jums ir tiesības pieprasīt personas datu dzēšanu šādos
              gadījumos: 1) ja tie apstrādāti bez piekrišanas vai ārpus likuma robežām; 2)
              pēc jūsu pieprasījuma, ja vēlaties tos dzēst un uzņēmumam nav juridiska pienākuma
              tos glabāt; 3) ja iebilstat pret apstrādi vai atsaucat piekrišanu, pat ja tā ir
              likumīga un balstīta uz mūsu vai trešo personu interesēm; un 4) ja likums
              mums uzliek pienākumu tos dzēst.
            </p>
            <p>
              Tiesības uz dzēšanu nepiemēro, ja tam pretī stāv ES vai
              dalībvalsts tiesību akti. Tās nepiemēro arī tad, ja dati vajadzīgi prasību
              iesniegšanai vai aizstāvībai.
            </p>
            <p>Tiesības ierobežot datu apstrādi</p>
            <p>
              Jums ir tiesības pieprasīt personas datu apstrādes ierobežošanu, ja uzskatāt,
              ka tajos ir neprecizitātes.
            </p>
            <p>
              Ja pieprasāt personas datu izmantošanas ierobežošanu, mēs ierobežosim apstrādi, izņemot
              šādos gadījumos: 1) ja tam pretī stāv Eiropas Savienības vai kādas tās
              dalībvalsts tiesības; 2) ar jūsu piekrišanu, ja tas nepieciešams prasību
              aizstāvībai vai iesniegšanai; 3) citas fiziskas personas tiesību aizsardzībai.
            </p>
            <p>Tiesības uz datu pārnesamību</p>
            <p>
              Jums ir tiesības piekļūt un kontrolēt sniegtos personas datus tiktāl,
              ciktāl esat devis piekrišanu to vākšanai un ja apstrāde
              notiek automatizētās sistēmās.
            </p>
            <p>
              Jums ir tiesības pieprasīt visu personas datu nosūtīšanu citam uzņēmumam vai
              organizācijai, ciktāl tas ir tehniski iespējams. Šīs tiesības neietekmē
              tiesības uz datu dzēšanu. Tās nepiemēro, ja to īstenošana pārkāptu
              citas fiziskas personas tiesības vai brīvības.
            </p>
            <p>Tiesības iebilst pret datu apstrādi</p>
            <p>
              Neskarot uzņēmuma tiesības īstenot mūsu leģitīmās intereses vai
              trešās personas, kas darbojas kā pakalpojumu sniedzējs, intereses, jums ir tiesības iebilst pret
              apstrādi un pieprasīt tās izbeigšanu. Šīs tiesības nepiemēro, ja ir steidzama
              juridiska nepieciešamība turpināt apstrādi — vai nu lai aizstāvētos pret prasībām, vai lai tās
              iesniegtu. Šādos gadījumos varam turpināt jūsu datu apstrādi.
            </p>
            <p>
              Jebkurā laikā varat iebilst pret personas datu apstrādi tiešā mārketinga nolūkos.
            </p>
            <p>
              Tiesības atsaukt piekrišanu
            </p>
            <p>
              Piekrišanu personas datu apstrādei varat atsaukt jebkurā laikā
              ar tūlītēju spēku. Atsaukšanai nav atpakaļejoša spēka uz apstrādi,
              kas veikta pirms atsaukšanas.
            </p>
            <p>
              Ja esat neapmierināts jebkāda iemesla dēļ, jums ir tiesības iesniegt sūdzību
              juridiskai, uzraudzības vai citai kontroles iestādei.
            </p>
            <p>
              Ja uzskatāt, ka jūsu tiesības un brīvības saistībā ar personas datu apstrādi
              ir pārkāptas, ES dalībvalstīm ir uzraudzības un kontroles
              iestādes šim nolūkam. Šīm iestādēm varat iesniegt sūdzību, ja to uzskatāt par lietderīgu.
            </p>
            <p>
              13. punkts apraksta situācijas, kurās jūsu tiesības attiecībā uz personas datiem var tikt
              ierobežotas ar Eiropas Savienības vai dalībvalstu tiesībām.
            </p>
            <p>
              Kad saņemam jūsu pieprasījumu par personas datiem un to apstrādi, mēs sniegsim
              piekļuvi pieprasītajai informācijai, kā norādīts šīs politikas 13. punktā.
              Šo termiņu varam pagarināt līdz diviem mēnešiem atkarībā no pieprasījuma apjoma
              un tā rakstura. Ja nepieciešams, informēsim jūs par pagarinājumu
              viena mēneša laikā no pieprasījuma saņemšanas.
            </p>
            <p>
              Pieprasīto informāciju nosūtīsim elektroniski un bez maksas, ja vien tas
              nav pretrunā likumam vai 13. punkta noteikumiem. Mēs paturam tiesības
              iekasēt saprātīgu maksu vai atteikt pieprasījumu, ja tas uzskatāms par nepamatotu, pārmērīgu vai atkārtotu.
            </p>
            <p>
              Mēs paturam tiesības pieprasīt papildu identitātes pārbaudi, ja ir
              pamats šaubīties par personu, kas iesniedz pieprasījumu par personas datiem, lai
              aizsargātu un nodrošinātu datu drošību.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
