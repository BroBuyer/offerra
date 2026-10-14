<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Pravila privatnosti | ' . SITE_NAME;
$page_description = 'Pravila privatnosti za ' . SITE_NAME . '.';
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
            <h1>Pravila privatnosti</h1>
            <p>
              Tvoji lični podaci i imovina iznimno su nam važni. U potpunosti smo
              predani njihovoj zaštiti.
            </p>
            <p>
              <?= e(SITE_NAME) ?> prikuplja i pohranjuje podatke potrebne za tvoje trgovine. Kako
              se prikupljaju i pohranjuju opisuju sledeća pravila privatnosti.
            </p>
            <p>Naša pravila temelje se na sledećim načelima:</p>
            <p class="circle">
              S ciljem maksimalne transparentnosti procesa prikupljanja i
              pohranjivanja tvojih ličnih podataka:
            </p>
            <p>
              Želimo da razumiješ kako prikupljamo i obrađujemo podatke kako bi mogao donositi
              informirane odluke. Na ovoj web-stranici primjenjujemo jasne postupke obrade
              podataka. Pravila detaljno opisuju metode kojima ti dajemo
              jasne i konkretne informacije o korišćenju podataka. Kontrola je tvoja.
            </p>
            <p>
              Obavijestit ćemo te odmah kad to smatramo potrebnim. Transparentnost nam je
              ključna.
            </p>
            <p>
              Naš stručni tim uvek je dostupan da odgovori na pitanja o bilo kojem aspektu
              naših procesa, uključujući obveze prema pravu <?= e(geo_in()) ?> i propisima
              EU-a. Možeš nas kontaktirati na:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Drugo korišćenje ličnih podataka s naše strane nije dopušteno, osim kako je predviđeno u
              pravilima privatnosti.
            </p>
            <p>
              Osobne podatke možemo obrađivati u sledeće svrhe, uključujući osiguranje pravilnog
              rada usluga <?= e(SITE_NAME) ?> i povezivanje korisnika s trgovačkim platformama
              trećih strana. Obrada može biti potrebna i za održavanje i poboljšanje
              značajki i usluga web-stranice; zaštitu naših prava te ispunjavanje pravnih i drugih
              obveza. Na kraju podaci služe, prema potrebi, administrativnim
              i drugim poslovnim funkcijama povezanim s uslugama koje ti se pružaju kao klijentu.
            </p>
            <p>
              Kako bismo nudili kvalitetnije usluge prilagođene tvojim preferencijama i potrebama, <?= e(SITE_NAME) ?>
              koristi lične podatke.
            </p>
            <p class="circle">
              S ciljem korišćenja nužnih alata za zaštitu ličnih podataka i tvojih
              prava u vezi s njima:
            </p>
            <p>
              U bilo koj trenutku možeš nas kontaktirati i dobiti pristup svim svojim podacima. Možemo ih i
              po potrebi izmijeniti ili izbrisati. Osim toga obrađujemo zahtjeve za prenos tih
              podataka tebi ili trećoj strani koju odrediš. Tu uslugu nudimo kako bi mogao
              u potpunosti ostvariti prava na privatnost i kontrolu.
            </p>
            <p class="circle">Zaštiti svoje lične podatke:</p>
            <p>
              Naši sigurnosni sistemi visoke su kvalitete i uključuju mjere na bankarskoj razini. Iako
              apsolutna zaštita nije zajamčena, obvezujemo se sisteme kontinuirano održavati
              na visokoj razini i jačati već uvedene mjere.
            </p>
            <p>
              Imamo sveobuhvatna pravila privatnosti i vrhunske sigurnosne sisteme.
            </p>
            <p class="bold-title">1. Područje primjene</p>
            <p>
              Ova pravila opisuju postupke prikupljanja, obrade i objavljivanja svih
              podataka fizičkih osoba.
            </p>
            <p>
              Odredbe pravila odnose se na sve fizičke osobe koje se mogu identificirati ili su
              identificirane. Posebno na svaku fizičku osobu koja se može identificirati u vezi s
              podacima koji su nam povjereni, kojima imamo pristup i/ili koje možemo kombinirati.
            </p>
            <p>
              Obrada podataka u smislu pravila privatnosti osobito uključuje pohranu,
              upravljanje i organizaciju ličnih podataka.
            </p>
            <p>
              Ne prikupljamo i ne pokušavamo prikupljati informacije o osobama mlađim od 18
              godina. Osobe mlađe od 18 godina također ne smiju koristiti našu platformu ni u koju
              svrhe. Ako utvrdimo da korisnik ima manje od 18 godina, te ćemo podatke odmah izbrisati.
            </p>
            <p class="bold-title">2. Koje lične podatke prikupljamo?</p>
            <p>
              Pri registraciji prikupljamo lične podatke potrebne za korišćenje usluga. Po potrebi
              možemo zatražiti i podatke za provjeru, npr. kako bismo
              potvrdili vlasništvo računa. Kako bismo poboljšali i održali kvalitetu
              usluga, prikupljamo i analiziramo informacije o korišćenju platforme i
              povezanih usluga trećih strana.
            </p>
            <p class="bold-title">
              3. Ni u kojem slučaju nisi dužan tvrtki davati lične podatke.
            </p>
            <p>
              Iako nam podatke ne moraš davati, odluka da to ne učiniš
              može ograničiti pružanje usluga. Može i dovesti do
              ograničenja u korišćenju platforme.
            </p>
            <p class="bold-title">
              4. Koje lične podatke prikupljamo? Posjetom web-stranice možemo prikupljati sledeće
              lične podatke:
            </p>
            <p>
              Ne prikupljamo podatke koji te izravno identificiraju. Bilježimo između ostalog
              aktivnost računa, IP adrese te datume i vremena pristupa. Za održavanje,
              sigurnost i podršku pohranjujemo izveštaja o sistemskim pogreškama, podatke o pregledniku i vrstu
              uređaja s kojeg se prijavljuješ. Bilježimo i jezik postavljen na računu.
            </p>
            <p>
              Što se tiče ličnih podataka, prikupljamo i pohranjujemo isključivo informacije
              dane pri povezivanju s trgovačkom platformom treće strane putem naših usluga.
            </p>
            <p>
              Osobni podaci predani platformama trećih strana mogu uključivati:
              ime i prezime, adresu, broj telefona i e-mail.
            </p>
            <p class="bold-title">
              5. Zašto kompanija treba moje podatke i je li obrada zakonita?
            </p>
            <p>
              Kompanija prikuplja, pohranjuje i obrađuje tvoje lične podatke isključivo u
              svrhe predviđene pravilima. Sva navedena korišćenja i obrada u skladu su s
              važećim pravom <?= e(geo_in()) ?> i propisima EU-a.
            </p>
            <p>
              Kompanija će upravljati, obrađivati ili prenositi tvoje podatke samo u skladu s
              važećim propisima <?= e(geo_in()) ?>. Relevantne pravne osnove navedene su u nastavku:
            </p>
            <p class="circle">
              Dao si pristanak na pohranu i obradu ličnih podataka od strane
              kompanije. Predajom podataka tvrtki ovlašćuješ nas da ih proslijedimo odgovarajućoj
              trgovačkoj platformi treće strane. Osim toga dao si pristanak za
              obradu ličnih podataka u jednu ili više svrha.
            </p>
            <p class="circle">
              Kako bismo poboljšali usluge, ostvarili ili branili zahtjeve te zaštitili legitimne
              interese, kompanija može između ostalog morati pohranjivati i
              obrađivati tvoje lične podatke.
            </p>
            <p class="circle">Za ispunjavanje pravnih obveza obrada podataka je nužna.</p>
            <p>
              Ako želiš znati više o obradi koju je kompanija dužna
              provoditi, slobodno nam piši e-mailom.
            </p>
            <p>
              U nastavku su konkretne svrhe i pravna osnova koja nas
              ovlašćuje na obradu tvojih ličnih podataka.
            </p>
            <p class="green">Svrha</p>
            <p class="green">Pravna osnova</p>
            <p>
              1. Kako bismo olakšali pristup digitalnom trgovanju i — isključivo na tvoj zahtjev —
              dijelimo lične podatke s platformama trećih strana. Tvoji se podaci mogu prikupljati
              i deliti s trećim stranama isključivo na tvoj zahtjev i po tvojem nahođenju.
            </p>
            <p>
              Dao si pristanak na obradu ličnih podataka u jednu ili više svrha.
            </p>
            <p>
              2. Daj nam potrebne informacije kako bismo mogli brzo i
              učinkovito odgovoriti na tvoje zahtjeve, zabrinutosti i pitanja o uslugama.
            </p>
            <p>
              Za ostvarivanje legitimnih interesa kompanije ili navedene treće strane
              obrada ličnih podataka je nužna.
            </p>
            <p>
              3. Za ispunjavanje pravnih i administrativnih obveza obrada ličnih podataka je nužna.
            </p>
            <p>Za ispunjavanje pravnih obveza moramo obrađivati određene lične podatke.</p>
            <p>
              4. Kako bismo poboljšali usluge, trebamo anonimizirane podatke i moramo pratiti korišćenje,
              uključujući izveštaja o pogreškama.
            </p>
            <p>
              Za zaštitu legitimnih interesa kompanije i vanjskih pružaoca
              usluga obrada i pohrana ličnih podataka je nužna.
            </p>
            <p>5. To je nužno za sprječavanje prevara i zlouporabe usluge.</p>
            <p>
              Za osiguranje legitimnih interesa kompanije i pružaoca usluga trećih strana
              obrada i pohrana ličnih podataka je nužna.
            </p>
            <p>
              6. Zahtjevi usluge obvezuju nas pratiti i obrađivati podatke za
              razvoj poslovanja, strateške odluke, nadzor, usklađenost s propisima i
              druge poslovne aktivnosti.
            </p>
            <p>
              S ciljem zaštite legitimnih interesa kompanije i vanjskih pružaoca
              usluga obrada i pohrana ličnih podataka je nužna.
            </p>
            <p>
              7. Koristimo statističke i analitičke alate za podršku odlukama u širokom
              spektru usluga i u strateškom planiranju.
            </p>
            <p>
              Za zaštitu legitimnih interesa kompanije i naših vanjskih pružaoca
              usluga obrada i pohrana ličnih podataka je nužna.
            </p>
            <p>
              8. U mjeri nužnoj za zaštitu prava, imovine i interesa
              kompanije i pružaoca usluga trećih strana, u skladu s lokalnim zakonima i
              važećim propisima, ugovorima i vlastitim uslovima, možemo obrađivati
              lične podatke. Takva obrada odvija se isključivo prema nužnim i
              utvrđenim postupcima.
            </p>
            <p>
              Za zaštitu legitimnih interesa kompanije i svakog vanjskog
              pružaoca usluga obrada i pohrana ličnih podataka je nužna.
            </p>
            <p class="bold-title">6. Dijeljenje ličnih podataka s trećim stranama</p>
            <p>
              Za pohranu i obradu IP adresa, ankete i analizu korišćenja
              te povezane usluge kompanija može deliti anonimizirane podatke
              s vanjskim pružaocima usluga.
            </p>
            <p>
              Na tvoj zahtjev dijelimo neke dane lične podatke s vanjskim
              pružaocima usluga. U tom slučaju obrada podliježe pravilima privatnosti
              te kompanije. To može uključivati razne digitalne trgovačke platforme.
            </p>
            <p>
              S ciljem poboljšanja korisničke službe i opšte optimizacije usluga
              kompanija može deliti lične podatke s povezanim društvima i poslovnim partnerima.
            </p>
            <p>
              Kad to zahtijeva zakon ili radi zaštite prava i imovine kompanije i povezanih
              trećih strana možemo podatke deliti s nadležnim pravnim ili nadzornim tijelima.
            </p>
            <p>
              U okviru ključnih poslovnih operacija, poput prodaje kompanije,
              pribavljanja ulaganja ili zahtjeva za kredit, relevantni se podaci mogu
              deliti zakonito i primjereno. To vrijedi i za spajanja, restrukturiranja,
              konsolidacije ili insolventnost kompanije u skladu sa zakonom.
            </p>
            <p class="bold-title">7. Kolačići i usluge trećih strana</p>
            <p>
              Za analizu web-stranice i u suradnji s agencijama za oglašavanje kolačići i druge
              slične tehnologije mogu se koristiti u skladu sa zakonom i uobičajenom praksom.
            </p>
            <p>
              Kolačići — male tekstualne datoteke pohranjene na uređaju pri posjetu stranici — služe za
              prikupljanje informacija o ponašanju na webu, preferencijama i drugim podacima. Njihova
              svrha je personalizacija i poboljšanje iskustva. Pomažu zapamtiti tvoje
              postavke i preferencije te prilagoditi ponudu. Služe i
              za analizu stranice i statistiku za planiranje.
            </p>
            <p>
              Stranica u pravilu koristi dvije vrste kolačića: sesijske, pohranjene
              samo tijekom sesije preglednika i izbrisane pri zatvaranju;
              i trajne, koji ostaju i nakon sesije. Ovi drugi
              omogućuju stranici da te prepozna kao povratnog posjetitelja i olakšaju korišćenje.
            </p>
            <p class="bold-title">Vrste kolačića:</p>
            <p>Kolačići se mogu koristiti prema potrebi ovisno o svrsi:</p>
            <p class="green">Vrsta kolačića</p>
            <p>Ovi su kolačići strogo nužni</p>
            <p class="green">Svrha</p>
            <p>
              Kolačići služe da te prepoznamo kao klijenta kako bismo mogli pružiti informacije,
              postavke i usluge koje si zatražio.
              Olakšavaju i navigaciju te pristup web-stranici.
            </p>
            <p>
              Kolačiće koristimo kako bi uređaj mogao preuzimati i reproducirati sadržaj. Omogućuju i
              pristup nužnim funkcijama i povratak na prethodno posjećene stranice.
            </p>
            <p class="green">Dodatne informacije</p>
            <p>
              Kako bi pristup bio brz i jednostavan, kolačići pohranjuju i obrađuju određene
              lične podatke, npr. korisničko ime i datum zadnjeg pristupa, ako zatražiš da te
              stranica zapamti pri prijavi.
            </p>
            <p>Sesijski se kolačići brišu pri zatvaranju preglednika.</p>
            <p class="green">Vrsta kolačića</p>
            <p>Funkcionalni kolačići</p>
            <p class="green">Svrha</p>
            <p>
              Zahvaljujući kolačićima možemo sigurno pohraniti i primijeniti tvoje postavke i preferencije.
              Omogućuju nam i da te prepoznamo pri sledećem posjetu.
            </p>
            <p class="green">Dodatne informacije</p>
            <p>
              Trajni kolačići ostaju nakon sesije preglednika i aktivni su do
              datuma isteka.
            </p>
            <p class="green">Vrsta kolačića</p>
            <p>Kolačići izvedbe</p>
            <p class="green">Svrha</p>
            <p>
              Kako bismo poboljšali usluge, prikupljamo statistiku kolačićima. Ti
              nam daju informacije o izvedbi stranice i njezinu korišćenju.
            </p>
            <p class="green">Dodatne informacije</p>
            <p>
              Sve informacije pohranjene kolačićima anonimne su i ne omogućuju identifikaciju osoba.
            </p>
            <p>
              Sesijski se kolačići brišu pri zatvaranju preglednika, a trajni
              ostaju aktivni do isteka ili neodređeno, osim ako ih ručno ne izbrišeš.
            </p>
            <p>Blokiranje ili brisanje kolačića</p>
            <p>
              Ako želiš ukloniti ili blokirati kolačiće, učini to u
              postavkama preglednika. Sljedeće veze sadrže detaljne upute za najpopularnije preglednike.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Blokiranje kolačića može uzrokovati da neke značajke stranice ne rade kako je predviđeno.
            </p>
            <p class="bold-title">Koliko dugo čuvamo lične podatke</p>
            <p>
              Osobne podatke čuvamo samo onoliko dugo koliko je strogo nužno za potrebne
              procese, kako je navedeno u drugim delovima ovih pravila. Dulja pohrana moguća je ako
              to zahtijevaju lokalni propisi ili unutarnja pravila kompanije.
            </p>
            <p>
              Tvoji se lični podaci na tvoj zahtjev i po tvojem nahođenju dijele s trgovačkim platformama
              trećih strana 12 mjeseci. Nakon isteka tog razdoblja i uz tvoj
              pristanak podaci se dijele još 12 mjeseci.
            </p>
            <p>
              Naši postupci predviđaju redovitu procjenu svih ličnih podataka kako bismo utvrdili jesu li
              još potrebni.
            </p>
            <p class="bold-title">
              9. Prijenos ličnih podataka u treće zemlje ili međunarodnim organizacijama
            </p>
            <p>
              Kad je to potrebno za usluge i/ili iz sigurnosnih razloga, možemo prenositi
              lične podatke u druge zemlje (izvan tvoje) i međunarodnim organizacijama
              prema sveobuhvatnim sigurnosnim protokolima. Mjere zaštite podataka primjenjujemo na
              visokoj razini kako bismo zaštitili informacije i osigurali pristup pravnim lijekovima
              i zakonskim pravima u svakom trenutku.
            </p>
            <p>
              U Europskom gospodarskom prostoru (EGP) svi stanovnici imaju zaštitu podataka i garancije.
            </p>
            <p class="circle">
              Prijenosi se uvek odvijaju pod jurisdikcijom i nadzorom EU-a, u skladu
              sa standardima i protokolima zaštite podataka iz članka 45. stavka 3. Uredbe
              (EU) 2016/679 Europskog parlamenta i Vijeća od 27. aprila 2016.
              (&ldquo;GDPR&rdquo;).
            </p>
            <p class="circle">
              Svaki prenos podataka između javnih tijela odvija se prema članku
              46. stavku 2. To je pravno obvezujući i izvršiv sporazum.
            </p>
            <p class="circle">
              Standardne ugovorne klauzule Europske komisije prema članku 46. stavku 2. točki c GDPR-a određuju
              uslove prenosa, a takvi se prenosi odvijaju u skladu s
              njima. Odredbe možeš pogledati na
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Više o konkretnim sigurnosnim mjerama koje je kompanija poduzela kako bi
              zaštitila lične podatke pri prenosu u treće zemlje možeš poslati zahtjev
              e-mailom na <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Zaštita ličnih podataka</p>
            <p>
              Osobne podatke štite tehničke i organizacijske mjere najviše
              razine, primijenjene prema referentnim postupcima. Ti postupci učinkovito
              sprječavaju uništenje podataka zbog nezakonitih ili nepredviđenih događaja te
              njihov gubitak ili izmjenu.
            </p>
            <p>
              Iako primjenjujemo najveću moguću pažnju i postupke koji zadovoljavaju najstrože
              standarde zaštite podataka i zakon, ni u kojim okolnostima nije zajamčeno
              da su lični podaci bez pogreške. Stoga ne prihvaćamo odgovornost ako
              lični podaci pretrpe slučajnu, nematerijalnu ili posljedičnu štetu ili objavu.
              To uključuje situacije izvan naše kontrole, npr. objavu zbog pogrešaka prenosa,
              neovlašćenog pristupa trećih strana ili sličnih uzroka.
            </p>
            <p>
              Kad primimo pravno obvezujuće zahtjeve nadzornih tijela ili drugih
              tijela sa zakonskim ovlastima, možemo biti dužni proslijediti tvoje lične
              podatke tim tijelima. Nakon prosljeđivanja na temelju zakonske obveze nemamo
              uticaj na to kako ta tijela obrađuju, pohranjuju ili štite tvoje podatke.
            </p>
            <p>
              Sve što se prenosi internetom, uključujući lične podatke, nosi određeni
              rizik presretanja i nije 100% sigurno. Kompanija ne može garantovati
              sigurnost podataka poslanih online.
            </p>
            <p class="bold-title">11. Poveznice na web-stranice trećih strana</p>
            <p>
              Na ovoj web-stranici pronaći ćeš veze na aplikacije i stranice trećih strana. Imaj na umu
              da nisu povezane s kompanijom ni pod njezinom kontrolom te da naša
              pravila privatnosti ne vrijede za te treće strane. Djeluju prema vlastitim
              postupcima i prioritetima pri prikupljanju i obradi ličnih podataka, stoga
              ne prihvaćamo odgovornost za te aktivnosti. Koristi ih po vlastitom nahođenju.
            </p>
            <p>
              Uvijek provjeri pravila privatnosti kompanije ili usluge kad posjetiš njihovu stranicu
              pre davanja ličnih podataka. Provjeri odgovaraju li njihova pravila prikupljanja, korišćenja i
              obrade tvojim preferencijama. Ako dijeliš podatke, učini to
              izravno kod pružaoca usluge.
            </p>
            <p class="bold-title">12. Ažuriranja pravila</p>
            <p>
              Zadržavamo pravo ažurirati ili izmijeniti ova pravila u bilo koj trenutku. Obavijestit ćemo te
              o izmjenama putem stranice i relevantnih kanala. Ažurirana verzija pravila
              privatnosti objavit će se na stranici, a izmijenjena pravila stupaju na snagu
              odmah po objavi, osim ako nije navedeno drugačije.
            </p>
            <p class="bold-title">13. Tvoja prava u vezi s ličnim podacima</p>
            <p>
              Imaš kontrolu i posljednju reč o korišćenju svih svojih ličnih podataka. To uključuje
              provjeru točnosti, ispravljanje pogrešaka te pravo na brisanje ili
              ograničenje naše obrade — i po opsegu i po prirodi.
            </p>
            <p>Stanovnici EGP-a na ovoj stranici pronaći će informacije relevantne za njih:</p>
            <p>
              Tvoje lične podatke štite ovde opisana prava. Slanjem e-maila na
              adresu u nastavku ta prava možeš ostvariti odmah.
            </p>
            <p>Pristup svojim pravima</p>
            <p>
              Ako su dani lični podaci točni, možeš im pristupiti u bilo koje vreme. Svi
              lični podaci koje obrađujemo dostupni su nam, dakle provjerljivi.
            </p>
            <p>
              U bilo koje vreme možeš zatražiti lične podatke za provjeru i bit će ti
              dostupni u elektroničkom obliku. Ako zatražiš dodatne kopije
              obrađenih podataka iznad već dane kopije, može se naplatiti razumna naknada.
            </p>
            <p>
              Prava priznata zakonom i pravilima privatnosti ne smiju uticati na prava trećih
              strana. Kompanija zadržava pravo odbiti ili ograničiti pristup ličnim podacima
              ako to krši prava i slobode trećih strana.
            </p>
            <p>Pravo na ispravak</p>
            <p>
              Svaka pogreška u ličnim podacima, bilo zbog propuštanja ili netočne informacije,
              može se ispraviti od tebe ili kompanije kako bi obrada bila pravilna.
            </p>
            <p>Pravo na brisanje podataka</p>
            <p>
              Imaš pravo zatražiti brisanje ličnih podataka u sledećim
              okolnostima: 1) ako su obrađeni bez pristanka ili izvan zakonskih granica; 2)
              na tvoj zahtjev, ako ih želiš izbrisati, a kompanija nema zakonsku obvezu
              ih čuvati; 3) ako se protiviš obradi ili povučeš pristanak, čak i ako je
              zakonita i utemeljena na našim ili tuđim interesima; i 4) ako nam zakon
              nalaže brisanje.
            </p>
            <p>
              Pravo na brisanje ne primjenjuje se ako tome stoje na putu pravne obveze EU-a ili
              države članice. Ne primjenjuje se ni ako su podaci potrebni za ostvarivanje ili
              obranu zahtjeva.
            </p>
            <p>Pravo na ograničenje obrade</p>
            <p>
              Imaš pravo zatražiti ograničenje obrade ličnih podataka ako smatraš
              da sadrže netočnosti.
            </p>
            <p>
              Ako zatražiš ograničenje korišćenja ličnih podataka, ograničit ćemo obradu, osim u
              sledećim slučajevima: 1) ako tome stoji na putu pravo Europske unije ili jedne od njezinih
              država članica; 2) uz tvoj pristanak, ako je to potrebno za obranu ili ostvarivanje
              zahtjeva; 3) radi zaštite prava druge fizičke osobe.
            </p>
            <p>Pravo na prenosivost podataka</p>
            <p>
              Imaš pravo na pristup i kontrolu danih ličnih podataka u mjeri
              u kojoj si dao pristanak na njihovo prikupljanje i ako se obrada
              odvija u automatiziranim sistemima.
            </p>
            <p>
              Imaš pravo zatražiti prenos svih ličnih podataka drugoj tvrtki ili
              organizaciji, koliko je to tehnički moguće. To pravo ne utiče na
              pravo na brisanje podataka. Ne primjenjuje se ako bi njegovo ostvarivanje kršilo prava
              ili slobode druge fizičke osobe.
            </p>
            <p>Pravo na prigovor obradi</p>
            <p>
              Bez prejudiciranja prava kompanije na ostvarivanje legitimnih interesa ili
              interesa treće strane koja deluje kao pružalac, imaš pravo prigovoriti
              obradi i zatražiti njezin prestanak. To se pravo ne primjenjuje ako postoji hitna
              pravna potreba za nastavkom obrade — bilo za obranu od zahtjeva, bilo za njihovo
              ostvarivanje. U takvim slučajevima možemo nastaviti obradu tvojih podataka.
            </p>
            <p>
              U bilo koje vreme možeš prigovoriti obradi ličnih podataka u svrhe izravnog marketinga.
            </p>
            <p>
              Pravo na povlačenje pristanka
            </p>
            <p>
              Pristanak na obradu ličnih podataka možeš povući u bilo koje vreme,
              s trenutačnim učinkom. Povlačenje ne deluje unatrag na obradu
              izvršenu pre povlačenja.
            </p>
            <p>
              Ako si iz bilo kojeg razloga nezadovoljan, imaš pravo podnijeti pritužbu
              pravnom, nadzornom ili drugom kontrolnom tijelu.
            </p>
            <p>
              Ako smatraš da su tvoja prava i slobode u vezi s obradom ličnih podataka
              povrijeđeni, države članice EU-a imaju nadzorna i kontrolna
              tijela u tu svrhu. Tim tijelima možeš podnijeti pritužbu ako to smatraš primjerenim.
            </p>
            <p>
              Točka 13. opisuje situacije u kojima tvoja prava u vezi s ličnim podacima mogu biti
              ograničena pravom Europske unije ili država članica.
            </p>
            <p>
              Kad primimo tvoj zahtjev u vezi s ličnim podacima i njihovom obradom, dat ćemo ti
              pristup zatraženim informacijama, kako je navedeno u točki 13. ovih pravila.
              Taj rok možemo produžiti do dva mjeseca ovisno o opsegu zahtjeva
              i prirodi upita. Po potrebi obaveštenjat ćemo te o produženju
              unutar mjesec dana od primitka zahtjeva.
            </p>
            <p>
              Zatražene informacije poslat ćemo elektronički i besplatno, osim ako to
              nije protivno zakonu ili odredbama tačke 13. Zadržavamo pravo
              naplatiti razumnu naknadu ili odbiti zahtjev ako se smatra neutemeljenim, pretjeranim ili ponavljajućim.
            </p>
            <p>
              Zadržavamo pravo zatražiti dodatnu provjeru identiteta ako postoji
              opravdana sumnja o osobi koja podnosi zahtjev za lične podatke, kako bismo
              zaštitili i osigurali sigurnost podataka.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
