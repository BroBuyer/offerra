<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Politika zasebnosti | ' . SITE_NAME;
$page_description = 'Politika zasebnosti za ' . SITE_NAME . '.';
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
            <h1>Politika zasebnosti</h1>
            <p>
              Tvoji osebni podatki in imetje so nam izjemno pomembni. V celoti smo
              zavezani k njihovi zaščiti.
            </p>
            <p>
              <?= e(SITE_NAME) ?> zbira in hrani podatke, potrebne za tvoje posle. Kako
              se zbirajo in hranijo, opisuje naslednja politika zasebnosti.
            </p>
            <p>Naša politika temelji na naslednjih načelih:</p>
            <p class="circle">
              Z namenom največje preglednosti procesov zbiranja in
              hrambe tvojih osebnih podatkov:
            </p>
            <p>
              Želimo, da razumeš, kako zbiramo in obdelujemo podatke, da lahko sprejemaš
              informirane odločitve. Na tem spletnem mestu uporabljamo jasne postopke obdelave
              podatkov. Politika podrobno opisuje metode, s katerimi ti dajemo
              jasne in konkretne informacije o uporabi podatkov. Nadzor je tvoj.
            </p>
            <p>
              Obvestili te bomo takoj, ko to štejemo za potrebno. Preglednost nam je
              ključna.
            </p>
            <p>
              Naša strokovna ekipa je vedno na voljo za odgovore na vprašanja o katerem koli vidiku
              naših procesov, vključno z obveznostmi po pravu <?= e(geo_in()) ?> in predpisih
              EU. Kontaktiraš nas lahko na:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Druga uporaba osebnih podatkov z naše strani ni dovoljena, razen kot je predvideno v
              politiki zasebnosti.
            </p>
            <p>
              Osebne podatke lahko obdelujemo za naslednje namene, vključno z zagotavljanjem pravilnega
              delovanja storitev <?= e(SITE_NAME) ?> in povezovanjem uporabnikov s trgovalnimi platformami
              tretjih oseb. Obdelava je lahko potrebna tudi za vzdrževanje in izboljšanje
              funkcij in storitev spletnega mesta; zaščito naših pravic ter izpolnjevanje pravnih in drugih
              obveznosti. Na koncu podatki služijo, po potrebi, administrativnim
              in drugim poslovnim funkcijam, povezanim s storitvami, ki se ti zagotavljajo kot stranki.
            </p>
            <p>
              Da bi ponujali kakovostnejše storitve, prilagojene tvojim željam in potrebam, <?= e(SITE_NAME) ?>
              uporablja osebne podatke.
            </p>
            <p class="circle">
              Z namenom uporabe nujnih orodij za zaščito osebnih podatkov in tvojih
              pravic v zvezi z njimi:
            </p>
            <p>
              Kadarkoli nas lahko kontaktiraš in dobiš dostop do vseh svojih podatkov. Lahko jih tudi
              po potrebi spremenimo ali izbrišemo. Poleg tega obdelujemo zahteve za prenos teh
              podatkov tebi ali tretji osebi, ki jo določiš. To storitev ponujamo, da lahko
              v celoti uveljavljaš pravice do zasebnosti in nadzora.
            </p>
            <p class="circle">Zaščiti svoje osebne podatke:</p>
            <p>
              Naši varnostni sistemi so visoke kakovosti in vključujejo ukrepe na bančni ravni. Čeprav
              absolutna zaščita ni zagotovljena, se zavezujemo sisteme nenehno vzdrževati
              na visoki ravni in krepiti že uvedene ukrepe.
            </p>
            <p>
              Imamo celovito politiko zasebnosti in vrhunske varnostne sisteme.
            </p>
            <p class="bold-title">1. Področje uporabe</p>
            <p>
              Ta politika opisuje postopke zbiranja, obdelave in razkritja vseh
              podatkov fizičnih oseb.
            </p>
            <p>
              Določbe politike veljajo za vse fizične osebe, ki jih je mogoče identificirati ali so
              identificirane. Posebej za vsako fizično osebo, ki jo je mogoče identificirati v zvezi s
              podatki, ki so nam zaupani, do katerih imamo dostop in/ali ki jih lahko kombiniramo.
            </p>
            <p>
              Obdelava podatkov v smislu politike zasebnosti zlasti vključuje shranjevanje,
              upravljanje in organizacijo osebnih podatkov.
            </p>
            <p>
              Ne zbiramo in ne poskušamo zbirati informacij o osebah, mlajših od 18
              let. Osebe, mlajše od 18 let, tudi ne smejo uporabljati naše platforme v noben
              namen. Če ugotovimo, da ima uporabnik manj kot 18 let, bomo te podatke takoj izbrisali.
            </p>
            <p class="bold-title">2. Katere osebne podatke zbiramo?</p>
            <p>
              Ob registraciji zbiramo osebne podatke, potrebne za uporabo storitev. Po potrebi
              lahko zahtevamo tudi podatke za preverjanje, npr. da
              potrdimo lastništvo računa. Da izboljšamo in ohranimo kakovost
              storitev, zbiramo in analiziramo informacije o uporabi platforme in
              povezanih storitev tretjih oseb.
            </p>
            <p class="bold-title">
              3. V nobenem primeru nisi dolžan podjetju dajati osebnih podatkov.
            </p>
            <p>
              Čeprav nam podatkov ni treba dajati, lahko odločitev, da tega ne storiš,
              omeji zagotavljanje storitev. Lahko tudi vodi do
              omejitev pri uporabi platforme.
            </p>
            <p class="bold-title">
              4. Katere osebne podatke zbiramo? Z obiskom spletnega mesta lahko zbiramo naslednje
              osebne podatke:
            </p>
            <p>
              Ne zbiramo podatkov, ki te neposredno identificirajo. Med drugim beležimo
              aktivnost računa, IP naslove ter datume in ure dostopa. Za vzdrževanje,
              varnost in podporo shranjujemo poročila o sistemskih napakah, podatke o brskalniku in vrsto
              naprave, s katere se prijavljaš. Beležimo tudi jezik, nastavljen na računu.
            </p>
            <p>
              Glede osebnih podatkov zbiramo in shranjujemo izključno informacije,
              podane ob povezavi s trgovalno platformo tretje osebe prek naših storitev.
            </p>
            <p>
              Osebni podatki, predani platformam tretjih oseb, lahko vključujejo:
              ime in priimek, naslov, telefonsko številko in e-pošto.
            </p>
            <p class="bold-title">
              5. Zakaj podjetje potrebuje moje podatke in je obdelava zakonita?
            </p>
            <p>
              Podjetje zbira, hrani in obdeluje tvoje osebne podatke izključno za
              namene, predvidene v politiki. Vse navedene uporabe in obdelava so v skladu z
              veljavnim pravom <?= e(geo_in()) ?> in predpisi EU.
            </p>
            <p>
              Podjetje bo upravljalo, obdelovalo ali prenašalo tvoje podatke samo v skladu z
              veljavnimi predpisi <?= e(geo_in()) ?>. Relevantne pravne podlage so navedene spodaj:
            </p>
            <p class="circle">
              Dal si privolitev za shranjevanje in obdelavo osebnih podatkov s strani
              podjetja. S predajo podatkov podjetju nas pooblaščaš, da jih posredujemo ustrezni
              trgovalni platformi tretje osebe. Poleg tega si dal privolitev za
              obdelavo osebnih podatkov za enega ali več namenov.
            </p>
            <p class="circle">
              Da izboljšamo storitve, uveljavimo ali branimo zahtevke ter zaščitimo legitimne
              interese, mora podjetje med drugim morda shranjevati in
              obdelovati tvoje osebne podatke.
            </p>
            <p class="circle">Za izpolnjevanje pravnih obveznosti je obdelava podatkov nujna.</p>
            <p>
              Če želiš izvedeti več o obdelavi, ki jo mora podjetje
              izvajati, nam prosto piši po e-pošti.
            </p>
            <p>
              Spodaj so konkretni nameni in pravna podlaga, ki nas
              pooblašča za obdelavo tvojih osebnih podatkov.
            </p>
            <p class="green">Namen</p>
            <p class="green">Pravna podlaga</p>
            <p>
              1. Da olajšamo dostop do digitalnega trgovanja in — izključno na tvojo zahtevo —
              delimo osebne podatke s platformami tretjih oseb. Tvoji podatki se lahko zbirajo
              in delijo s tretjimi osebami izključno na tvojo zahtevo in po tvoji presoji.
            </p>
            <p>
              Dal si privolitev za obdelavo osebnih podatkov za enega ali več namenov.
            </p>
            <p>
              2. Daj nam potrebne informacije, da lahko hitro in
              učinkovito odgovorimo na tvoje zahteve, skrbi in vprašanja o storitvah.
            </p>
            <p>
              Za uresničevanje legitimnih interesov podjetja ali navedene tretje osebe
              je obdelava osebnih podatkov nujna.
            </p>
            <p>
              3. Za izpolnjevanje pravnih in administrativnih obveznosti je obdelava osebnih podatkov nujna.
            </p>
            <p>Za izpolnjevanje pravnih obveznosti moramo obdelovati določene osebne podatke.</p>
            <p>
              4. Da izboljšamo storitve, potrebujemo anonimizirane podatke in moramo spremljati uporabo,
              vključno s poročili o napakah.
            </p>
            <p>
              Za zaščito legitimnih interesov podjetja in zunanjih ponudnikov
              storitev sta obdelava in hramba osebnih podatkov nujni.
            </p>
            <p>5. To je nujno za preprečevanje prevar in zlorabe storitve.</p>
            <p>
              Za zagotovitev legitimnih interesov podjetja in ponudnikov storitev tretjih oseb
              processing and storage of personal data is necessary.
            </p>
            <p>
              6. Zahteve storitve nas zavezujejo spremljati in obdelovati podatke za
              poslovni razvoj, strateške odločitve, nadzor, skladnost s predpisi in
              druge poslovne dejavnosti.
            </p>
            <p>
              Z namenom zaščite legitimnih interesov podjetja in zunanjih ponudnikov
              storitev sta obdelava in hramba osebnih podatkov nujni.
            </p>
            <p>
              7. Uporabljamo statistična in analitična orodja za podporo odločitvam v širokem
              spektru storitev in pri strateškem načrtovanju.
            </p>
            <p>
              Za zaščito legitimnih interesov podjetja in naših zunanjih ponudnikov
              storitev sta obdelava in hramba osebnih podatkov nujni.
            </p>
            <p>
              8. V meri, nujni za zaščito pravic, premoženja in interesov
              podjetja in ponudnikov storitev tretjih oseb, v skladu z lokalnimi zakoni in
              veljavnimi predpisi, pogodbami in lastnimi pogoji, lahko obdelujemo
              osebne podatke. Taka obdelava poteka izključno po nujnih in
              določenih postopkih.
            </p>
            <p>
              Za zaščito legitimnih interesov podjetja in vsakega zunanjega
              ponudnika storitev sta obdelava in hramba osebnih podatkov nujni.
            </p>
            <p class="bold-title">6. Deljenje osebnih podatkov s tretjimi osebami</p>
            <p>
              Za shranjevanje in obdelavo IP naslovov, ankete in analizo uporabe
              ter povezane storitve lahko podjetje deli anonimizirane podatke
              z zunanjimi ponudniki storitev.
            </p>
            <p>
              Na tvojo zahtevo delimo nekatere dane osebne podatke z zunanjimi
              ponudniki storitev. V tem primeru obdelava podleže politiki zasebnosti
              tega podjetja. To lahko vključuje različne digitalne trgovalne platforme.
            </p>
            <p>
              Z namenom izboljšanja podpore strankam in splošne optimizacije storitev
              lahko podjetje deli osebne podatke s povezanimi družbami in poslovnimi partnerji.
            </p>
            <p>
              Kadar to zahteva zakon ali za zaščito pravic in premoženja podjetja ter povezanih
              tretjih oseb, lahko podatke delimo s pristojnimi pravnimi ali nadzornimi organi.
            </p>
            <p>
              V okviru ključnih poslovnih operacij, kot je prodaja podjetja,
              pridobitev naložbe ali zahteva za kredit, se lahko relevantni podatki
              delijo zakonito in primerno. To velja tudi za združitve, prestrukturiranja,
              konsolidacije ali insolventnost podjetja v skladu z zakonom.
            </p>
            <p class="bold-title">7. Piškotki in storitve tretjih oseb</p>
            <p>
              Za analizo spletnega mesta in v sodelovanju z oglaševalskimi agencijami se piškotki in druge
              podobne tehnologije lahko uporabljajo v skladu z zakonom in običajno prakso.
            </p>
            <p>
              Piškotki — majhne besedilne datoteke, shranjene na napravi ob obisku strani — služijo
              zbiranju informacij o obnašanju na spletu, preferencah in drugih podatkih. Njihov
              namen je personalizacija in izboljšanje izkušnje. Pomagajo si zapomniti tvoje
              nastavitve in preference ter prilagoditi ponudbo. Služijo tudi
              analizi strani in statistiki za načrtovanje.
            </p>
            <p>
              Stran praviloma uporablja dve vrsti piškotkov: sejne, shranjene
              samo med sejo brskalnika in izbrisane ob zaprtju;
              in trajne, ki ostanejo tudi po seji. Ti drugi
              omogočajo strani, da te prepozna kot povratnega obiskovalca in olajšajo uporabo.
            </p>
            <p class="bold-title">Vrste piškotkov:</p>
            <p>Piškotki se lahko uporabljajo po potrebi glede na namen:</p>
            <p class="green">Vrsta piškotka</p>
            <p>Ti piškotki so strogo nujni</p>
            <p class="green">Namen</p>
            <p>
              Piškotki služijo, da te prepoznamo kot stranko, da lahko zagotovimo informacije,
              nastavitve in storitve, ki si jih zahteval.
              Olajšajo tudi navigacijo in dostop do spletnega mesta.
            </p>
            <p>
              Piškotke uporabljamo, da lahko naprava prenaša in predvaja vsebino. Omogočajo tudi
              dostop do nujnih funkcij in vrnitev na predhodno obiskane strani.
            </p>
            <p class="green">Dodatne informacije</p>
            <p>
              Da bi bil dostop hiter in preprost, piškotki shranjujejo in obdelujejo določene
              osebne podatke, npr. uporabniško ime in datum zadnjega dostopa, če zahtevaš, da te
              stran zapomni ob prijavi.
            </p>
            <p>Sejni piškotki se izbrišejo ob zaprtju brskalnika.</p>
            <p class="green">Vrsta piškotka</p>
            <p>Funkcionalni piškotki</p>
            <p class="green">Namen</p>
            <p>
              Zahvaljujoč piškotkom lahko varno shranimo in uporabimo tvoje nastavitve in preference.
              Omogočajo nam tudi, da te prepoznamo ob naslednjem obisku.
            </p>
            <p class="green">Dodatne informacije</p>
            <p>
              Trajni piškotki ostanejo po seji brskalnika in so aktivni do
              datuma poteka.
            </p>
            <p class="green">Vrsta piškotka</p>
            <p>Piškotki učinkovitosti</p>
            <p class="green">Namen</p>
            <p>
              Da izboljšamo storitve, zbiramo statistiko s piškotki. Ti
              nam dajejo informacije o učinkovitosti strani in njeni uporabi.
            </p>
            <p class="green">Dodatne informacije</p>
            <p>
              Vse informacije, shranjene s piškotki, so anonimne in ne omogočajo identifikacije oseb.
            </p>
            <p>
              Sejni piškotki se izbrišejo ob zaprtju brskalnika, trajni pa
              ostanejo aktivni do poteka ali nedoločeno, razen če jih ročno izbrišeš.
            </p>
            <p>Blokiranje ali brisanje piškotkov</p>
            <p>
              Če želiš odstraniti ali blokirati piškotke, to stori v
              nastavitvah brskalnika. Naslednje povezave vsebujejo podrobna navodila za najbolj priljubljene brskalnike.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Blokiranje piškotkov lahko povzroči, da nekatere funkcije strani ne delujejo, kot je predvideno.
            </p>
            <p class="bold-title">Kako dolgo hranimo osebne podatke</p>
            <p>
              Osebne podatke hranimo le toliko časa, kolikor je strogo nujno za potrebne
              procese, kot je navedeno v drugih delih te politike. Daljša hramba je možna, če
              to zahtevajo lokalni predpisi ali notranja pravila podjetja.
            </p>
            <p>
              Tvoji osebni podatki se na tvojo zahtevo in po tvoji presoji delijo s trgovalnimi platformami
              tretjih oseb 12 mesecev. Po izteku tega obdobja in s tvojo
              privolitvijo se podatki delijo še 12 mesecev.
            </p>
            <p>
              Naši postopki predvidevajo redno oceno vseh osebnih podatkov, da ugotovimo, ali so
              še potrebni.
            </p>
            <p class="bold-title">
              9. Prenos osebnih podatkov v tretje države ali mednarodnim organizacijam
            </p>
            <p>
              Kadar je to potrebno za storitve in/ali iz varnostnih razlogov, lahko prenašamo
              osebne podatke v druge države (izven tvoje) in mednarodnim organizacijam
              po celovitih varnostnih protokolih. Ukrepe varstva podatkov uporabljamo na
              visoki ravni, da zaščitimo informacije in zagotovimo dostop do pravnih sredstev
              in zakonskih pravic v vsakem trenutku.
            </p>
            <p>
              V Evropskem gospodarskem prostoru (EGP) imajo vsi prebivalci varstvo podatkov in jamstva.
            </p>
            <p class="circle">
              Prenosi vedno potekajo pod jurisdikcijo in nadzorom EU, v skladu
              s standardi in protokoli varstva podatkov iz člena 45(3) Uredbe
              (EU) 2016/679 Evropskega parlamenta in Sveta z dne 27. aprila 2016
              (&ldquo;GDPR&rdquo;).
            </p>
            <p class="circle">
              Vsak prenos podatkov med javnimi organi poteka po členu
              46(2). To je pravno zavezujoč in izvršljiv sporazum.
            </p>
            <p class="circle">
              Standardne pogodbene klavzule Evropske komisije po členu 46.2.c GDPR določajo
              pogoje prenosa, taki prenosi pa potekajo v skladu z
              njimi. Določbe lahko vidiš na
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Več o konkretnih varnostnih ukrepih, ki jih je podjetje sprejelo, da
              zaščiti osebne podatke pri prenosu v tretje države, lahko pošlješ zahtevo
              po e-pošti na <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Varstvo osebnih podatkov</p>
            <p>
              Osebne podatke ščitijo tehnični in organizacijski ukrepi najvišje
              ravni, uporabljeni po referenčnih postopkih. Ti postopki učinkovito
              preprečujejo uničenje podatkov zaradi nezakonitih ali nepredvidenih dogodkov ter
              njihovo izgubo ali spremembo.
            </p>
            <p>
              Čeprav uporabljamo največjo možno skrb in postopke, ki izpolnjujejo najstrožje
              standarde varstva podatkov in zakon, v nobenih okoliščinah ni zagotovljeno,
              da so osebni podatki brez napake. Zato ne sprejemamo odgovornosti, če
              osebni podatki utrpijo naključno, nematerialno ali posledično škodo ali razkritje.
              To vključuje situacije izven našega nadzora, npr. razkritje zaradi napak prenosa,
              nepooblaščenega dostopa tretjih oseb ali podobnih vzrokov.
            </p>
            <p>
              Ko prejmemo pravno zavezujoče zahteve nadzornih organov ali drugih
              organov z zakonskimi pooblastili, smo lahko dolžni posredovati tvoje osebne
              podatke tem organom. Po posredovanju na podlagi zakonske obveznosti nimamo
              vpliva na to, kako ti organi obdelujejo, hranijo ali ščitijo tvoje podatke.
            </p>
            <p>
              Vse, kar se prenaša po internetu, vključno z osebnimi podatki, nosi določeno
              tveganje prestrezanja in ni 100 % varno. Podjetje ne more jamčiti
              varnosti podatkov, poslanih na spletu.
            </p>
            <p class="bold-title">11. Povezave na spletna mesta tretjih oseb</p>
            <p>
              Na tem spletnem mestu najdeš povezave na aplikacije in strani tretjih oseb. Upoštevaj,
              da niso povezane s podjetjem niti pod njegovim nadzorom in da naša
              politika zasebnosti zanje ne velja. Delujejo po lastnih
              postopkih in prednostih pri zbiranju in obdelavi osebnih podatkov, zato
              ne sprejemamo odgovornosti za te dejavnosti. Uporabljaj jih po lastni presoji.
            </p>
            <p>
              Vedno preveri politiko zasebnosti podjetja ali storitve, ko obiščeš njihovo stran
              pred predajo osebnih podatkov. Preveri, ali njihova pravila zbiranja, uporabe in
              obdelave ustrezajo tvojim željam. Če deliš podatke, to stori
              neposredno pri ponudniku storitve.
            </p>
            <p class="bold-title">12. Posodobitve politike</p>
            <p>
              Pridržujemo si pravico kadarkoli posodobiti ali spremeniti to politiko. Obvestili te bomo
              o spremembah prek strani in relevantnih kanalov. Posodobljena različica politike
              zasebnosti bo objavljena na strani, spremenjena politika pa začne veljati
              takoj ob objavi, razen če ni navedeno drugače.
            </p>
            <p class="bold-title">13. Tvoje pravice v zvezi z osebnimi podatki</p>
            <p>
              Imaš nadzor in zadnjo besedo o uporabi vseh svojih osebnih podatkov. To vključuje
              preverjanje točnosti, popravljanje napak ter pravico do izbrisa ali
              omejitve naše obdelave — tako po obsegu kot po naravi.
            </p>
            <p>Prebivalci EGP na tej strani najdejo informacije, relevantne zanje:</p>
            <p>
              Tvoje osebne podatke ščitijo tukaj opisane pravice. S pošiljanjem e-pošte na
              naslov spodaj lahko te pravice uveljaviš takoj.
            </p>
            <p>Dostop do svojih pravic</p>
            <p>
              Če so dani osebni podatki točni, jim lahko dostopaš kadarkoli. Vsi
              osebni podatki, ki jih obdelujemo, so nam na voljo, torej preverljivi.
            </p>
            <p>
              Kadarkoli lahko zahtevaš osebne podatke za preverjanje in ti bodo
              na voljo v elektronski obliki. Če zahtevaš dodatne kopije
              obdelanih podatkov nad že dano kopijo, se lahko zaračuna razumna pristojbina.
            </p>
            <p>
              Pravice, priznane z zakonom in politiko zasebnosti, ne smejo vplivati na pravice tretjih
              oseb. Podjetje si pridržuje pravico zavrniti ali omejiti dostop do osebnih podatkov,
              če to krši pravice in svoboščine tretjih oseb.
            </p>
            <p>Pravica do popravka</p>
            <p>
              Vsaka napaka v osebnih podatkih, bodisi zaradi opustitve bodisi napačne informacije,
              se lahko popravi od tebe ali podjetja, da je obdelava pravilna.
            </p>
            <p>Pravica do izbrisa podatkov</p>
            <p>
              Imaš pravico zahtevati izbris osebnih podatkov v naslednjih
              okoliščinah: 1) če so bili obdelani brez privolitve ali izven zakonskih meja; 2)
              na tvojo zahtevo, če jih želiš izbrisati, podjetje pa nima zakonske obveznosti
              jih hraniti; 3) če nasprotuješ obdelavi ali umakneš privolitev, tudi če je
              zakonita in utemeljena na naših ali tujih interesih; in 4) če nam zakon
              nalaga izbris.
            </p>
            <p>
              Pravica do izbrisa se ne uporablja, če ji nasprotujejo pravne obveznosti EU ali
              države članice. Ne uporablja se niti, če so podatki potrebni za uveljavljanje ali
              obrambo zahtevkov.
            </p>
            <p>Pravica do omejitve obdelave</p>
            <p>
              Imaš pravico zahtevati omejitev obdelave osebnih podatkov, če meniš,
              da vsebujejo netočnosti.
            </p>
            <p>
              Če zahtevaš omejitev uporabe osebnih podatkov, bomo omejili obdelavo, razen v
              naslednjih primerih: 1) če temu nasprotuje pravo Evropske unije ali ene od njenih
              držav članic; 2) s tvojo privolitvijo, če je to potrebno za obrambo ali uveljavljanje
              zahtevkov; 3) za zaščito pravic druge fizične osebe.
            </p>
            <p>Pravica do prenosljivosti podatkov</p>
            <p>
              Imaš pravico do dostopa in nadzora danih osebnih podatkov v meri,
              v kateri si dal privolitev za njihovo zbiranje in če se obdelava
              izvaja v avtomatiziranih sistemih.
            </p>
            <p>
              Imaš pravico zahtevati prenos vseh osebnih podatkov drugemu podjetju ali
              organizaciji, kolikor je to tehnično mogoče. Ta pravica ne vpliva na
              pravico do izbrisa podatkov. Ne uporablja se, če bi njeno uveljavljanje kršilo pravice
              ali svoboščine druge fizične osebe.
            </p>
            <p>Pravica do ugovora obdelavi</p>
            <p>
              Brez poseganja v pravico podjetja do uresničevanja legitimnih interesov ali
              interesov tretje osebe, ki deluje kot ponudnik, imaš pravico ugovarjati
              obdelavi in zahtevati njeno prenehanje. Ta pravica se ne uporablja, če obstaja nujna
              pravna potreba po nadaljevanju obdelave — bodisi za obrambo pred zahtevki bodisi za njihovo
              uveljavljanje. V takih primerih lahko nadaljujemo obdelavo tvojih podatkov.
            </p>
            <p>
              Kadarkoli lahko ugovarjaš obdelavi osebnih podatkov za namene neposrednega trženja.
            </p>
            <p>
              Pravica do preklica privolitve
            </p>
            <p>
              Privolitev za obdelavo osebnih podatkov lahko prekličeš kadarkoli,
              s takojšnjim učinkom. Preklic ne deluje nazaj na obdelavo,
              opravljeno pred preklicem.
            </p>
            <p>
              Če si iz kateregakoli razloga nezadovoljen, imaš pravico vložiti pritožbo
              pri pravnem, nadzornem ali drugem kontrolnem organu.
            </p>
            <p>
              Če meniš, da so tvoje pravice in svoboščine v zvezi z obdelavo osebnih podatkov
              kršene, imajo države članice EU nadzorne in kontrolne
              organe v ta namen. Tem organom lahko vložiš pritožbo, če to šteješ za primerno.
            </p>
            <p>
              Točka 13 opisuje situacije, v katerih so tvoje pravice v zvezi z osebnimi podatki lahko
              omejene s pravom Evropske unije ali držav članic.
            </p>
            <p>
              Ko prejmemo tvojo zahtevo v zvezi z osebnimi podatki in njihovo obdelavo, ti bomo dali
              dostop do zahtevanih informacij, kot je navedeno v točki 13 te politike.
              Ta rok lahko podaljšamo do dveh mesecev glede na obseg zahteve
              in naravo poizvedbe. Po potrebi te bomo obvestili o podaljšanju
              v enem mesecu od prejema zahteve.
            </p>
            <p>
              Zahtevane informacije bomo poslali elektronsko in brezplačno, razen če to
              ni v nasprotju z zakonom ali določbami točke 13. Pridržujemo si pravico
              zaračunati razumno pristojbino ali zavrniti zahtevo, če se šteje za neutemeljeno, pretirano ali ponavljajočo.
            </p>
            <p>
              Pridržujemo si pravico zahtevati dodatno preverjanje identitete, če obstaja
              utemeljen sum o osebi, ki vlaga zahtevo za osebne podatke, da
              zaščitimo in zagotovimo varnost podatkov.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
