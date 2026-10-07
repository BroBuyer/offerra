<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Adatvédelmi tájékoztató | ' . SITE_NAME;
$page_description = 'A ' . SITE_NAME . ' adatvédelmi tájékoztatója.';
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
            <h1>Adatvédelmi tájékoztató</h1>
            <p>
              Személyes adataid és eszközeid kiemelten fontosak számunkra. Teljes mértékben
              elkötelezettek vagyunk a védelmük mellett.
            </p>
            <p>
              A <?= e(SITE_NAME) ?> összegyűjti és tárolja a kereskedési ügyleteidhez szükséges adatokat. Az
              gyűjtés és tárolás módját az alábbi adatvédelmi tájékoztató írja le.
            </p>
            <p>Tájékoztatónk a következő elveken alapul:</p>
            <p class="circle">
              A gyűjtési és tárolási folyamatok maximális átláthatósága
              érdekében a személyes adataidról:
            </p>
            <p>
              Célunk, hogy megértsd, hogyan gyűjtjük és kezeljük az adatokat, hogy
              megalapozott döntéseket hozhass. Ezen a webhelyen világos adatkezelési
              eljárásokat alkalmazunk. A tájékoztató részletesen leírja a módszereket, amelyekkel
              világos, konkrét információt adunk az adatfelhasználásról. Te irányítasz.
            </p>
            <p>
              Azonnal értesítünk, ha szükségesnek tartjuk. Az átláthatóság
              alapvető számunkra.
            </p>
            <p>
              Szakértő csapatunk mindig rendelkezésre áll, hogy válaszoljon a folyamatok bármely
              részére vonatkozó kérdéseidre, ideértve a <?= e(geo_in()) ?> jog és az uniós
              előírások szerinti kötelezettségeinket. Elérhetőség:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Személyes adatok egyéb felhasználása részünkről nem megengedett, kivéve az
              adatvédelmi tájékoztatóban leírtakat.
            </p>
            <p>
              Személyes adatokat a következő célokra kezelhetünk, ideértve a <?= e(SITE_NAME) ?>
              szolgáltatásainak megfelelő működését és a felhasználók összekapcsolását harmadik felek
              kereskedési platformjaival. A kezelés szükséges lehet a webhely funkcióinak és
              szolgáltatásainak fenntartásához és javításához; jogaink védelméhez, valamint jogi és egyéb
              kötelezettségek teljesítéséhez. Végül az adatok szükség szerint adminisztratív
              és egyéb üzleti funkciókra szolgálnak, amelyek a neked, mint ügyfélnek nyújtott szolgáltatásokhoz kapcsolódnak.
            </p>
            <p>
              Hogy a preferenciáidhoz és igényeidhez igazított, jobb szolgáltatást nyújtsunk, a <?= e(SITE_NAME) ?>
              személyes adatokat használ.
            </p>
            <p class="circle">
              A személyes adatok védelméhez és a kapcsolódó jogaid
              biztosításához szükséges eszközök használata érdekében:
            </p>
            <p>
              Bármikor felveheted velünk a kapcsolatot, és hozzáférhetsz az összes adatodhoz. Szükség esetén
              módosíthatjuk vagy törölhetjük is. Emellett kezeljük az adatok neked vagy az általad megjelölt
              harmadik félnek történő továbbítására vonatkozó kéréseket. Ezt a szolgáltatást azért nyújtjuk, hogy
              teljes mértékben gyakorolhasd az adatvédelmi és ellenőrzési jogaidat.
            </p>
            <p class="circle">Védd a személyes adataidat:</p>
            <p>
              Biztonsági rendszereink magas színvonalúak, banki szintű intézkedésekkel. Bár
              a teljes védelem nem garantálható, vállaljuk, hogy a rendszereket folyamatosan
              magas szinten tartjuk, és erősítjük a már bevezetett intézkedéseket.
            </p>
            <p>
              Átfogó adatvédelmi irányelveink és első osztályú biztonsági rendszereink vannak.
            </p>
            <p class="bold-title">1. Alkalmazási kör</p>
            <p>
              Ez a tájékoztató leírja a természetes személyek adatainak gyűjtésére, kezelésére és
              közlésére vonatkozó eljárásainkat.
            </p>
            <p>
              A tájékoztató rendelkezései minden azonosítható vagy azonosított természetes
              személyre vonatkoznak. Különösen minden természetes személyre, aki azonosítható a ránk
              bízott adatokkal összefüggésben, amelyekhez hozzáférünk és/vagy amelyeket kombinálhatunk.
            </p>
            <p>
              Az adatkezelés az adatvédelmi tájékoztató szerint különösen a személyes adatok
              tárolását, kezelését és szervezését jelenti.
            </p>
            <p>
              Nem gyűjtünk és nem kísérelünk meg információt gyűjteni 18 év alatti
              személyekről. 18 év alattiak a platformot semmilyen
              célra nem használhatják. Ha kiderül, hogy a felhasználó 18 év alatti, az adatokat azonnal töröljük.
            </p>
            <p class="bold-title">2. Milyen személyes adatokat gyűjtünk?</p>
            <p>
              Regisztrációkor a szolgáltatások használatához szükséges személyes adatokat gyűjtjük. Szükség esetén
              ellenőrzéshez is kérhetünk adatokat, például a
              fióktulajdon megerősítéséhez. A szolgáltatások minőségének javítása és
              fenntartása érdekében információt gyűjtünk és elemzünk a platform és a kapcsolódó
              harmadik felek szolgáltatásainak használatáról.
            </p>
            <p class="bold-title">
              3. Semmilyen körülmények között nem vagy köteles személyes adatot adni a társaságnak.
            </p>
            <p>
              Bár nem vagy köteles adatot adni, a megtagadás
              korlátozhatja a szolgáltatások nyújtását. Emellett
              korlátozhatja a platform használatát is.
            </p>
            <p class="bold-title">
              4. Milyen személyes adatokat gyűjtünk? A webhely felkeresésekor a következő
              személyes adatokat gyűjthetjük:
            </p>
            <p>
              Nem gyűjtünk olyan adatot, amely közvetlenül azonosít. Többek között rögzítjük
              a fióktevékenységet, az IP-címeket, valamint a hozzáférés dátumát és idejét. Karbantartáshoz,
              biztonsághoz és támogatáshoz rendszerszintű hibajelentéseket, böngészőadatokat és a
              eszköz típusát tároljuk, amellyel belépsz. Rögzítjük a fiókon beállított nyelvet is.
            </p>
            <p>
              Személyes adatok tekintetében kizárólag azt az információt gyűjtjük és tároljuk,
              amelyet harmadik fél kereskedési platformjához a szolgáltatásainkon keresztül csatlakozva adsz meg.
            </p>
            <p>
              A harmadik felek platformjainak átadott személyes adatok tartalmazhatják:
              a teljes nevet, címet, telefonszámot és e-mail-címet.
            </p>
            <p class="bold-title">
              5. Miért van szüksége a társaságnak az adataimra, és jogszerű-e a kezelés?
            </p>
            <p>
              A társaság a személyes adataidat kizárólag a
              tájékoztatóban megjelölt célokra gyűjti, tárolja és kezeli. Minden leírt felhasználás és kezelés összhangban van
              a hatályos <?= e(geo_in()) ?> joggal és az uniós előírásokkal.
            </p>
            <p>
              A társaság az adataidat csak a
              <?= e(geo_in()) ?> hatályos előírásaival összhangban kezeli, dolgozza fel vagy továbbítja. A releváns jogalapok alább:
            </p>
            <p class="circle">
              Hozzájárultál a személyes adatok társaság általi
              tárolásához és kezeléséhez. Az adatok társaságnak adásával felhatalmazol minket, hogy továbbítsuk a megfelelő
              harmadik fél kereskedési platformjának. Emellett hozzájárultál a
              személyes adatok egy vagy több célú kezeléséhez.
            </p>
            <p class="circle">
              A szolgáltatások javításához, igények érvényesítéséhez vagy védelméhez, valamint jogos
              érdekek védelméhez a társaságnak többek között tárolnia és
              kezelnie kell a személyes adataidat.
            </p>
            <p class="circle">A jogi kötelezettségek teljesítéséhez az adatkezelés szükséges.</p>
            <p>
              Ha többet szeretnél tudni a társaság által kötelezően végzett
              adatkezelésről, írj nekünk e-mailben.
            </p>
            <p>
              Alább a konkrét célok és a jogalap, amely felhatalmaz minket
              a személyes adataid kezelésére.
            </p>
            <p class="green">Cél</p>
            <p class="green">Jogalap</p>
            <p>
              1. A digitális kereskedéshez való hozzáférés megkönnyítése érdekében — kizárólag a kérésedre —
              megosztjuk a személyes adatokat harmadik felek platformjaival. Az adataid gyűjthetők
              és megoszthatók harmadik felekkel, kizárólag a kérésedre és a döntésed szerint.
            </p>
            <p>
              Hozzájárultál a személyes adatok egy vagy több célú kezeléséhez.
            </p>
            <p>
              2. Add meg a szükséges információt, hogy gyorsan és
              hatékonyan válaszolhassunk a szolgáltatásokkal kapcsolatos kéréseidre, aggodalmaidra és kérdéseidre.
            </p>
            <p>
              A társaság vagy megnevezett harmadik fél jogos érdekeinek érvényesítéséhez
              a személyes adatok kezelése szükséges.
            </p>
            <p>
              3. Jogi és adminisztratív kötelezettségeink teljesítéséhez a személyes adatok kezelése szükséges.
            </p>
            <p>Jogi kötelezettségeink teljesítéséhez bizonyos személyes adatokat kezelnünk kell.</p>
            <p>
              4. A szolgáltatások javításához anonimizált adatokra van szükségünk, és figyelnünk kell a használatot,
              ideértve a hibajelentéseket.
            </p>
            <p>
              A társaság és külső szolgáltatók jogos érdekeinek védelméhez
              a személyes adatok kezelése és tárolása szükséges.
            </p>
            <p>5. Ez szükséges a csalás és a szolgáltatással való visszaélés megelőzéséhez.</p>
            <p>
              A társaság és harmadik felek szolgáltatóinak jogos érdekei érdekében
              a személyes adatok kezelése és tárolása szükséges.
            </p>
            <p>
              6. A szolgáltatás követelményei köteleznek minket az adatok figyelésére és kezelésére
              üzletfejlesztés, stratégiai döntések, monitoring, szabályozási megfelelés és
              egyéb üzleti tevékenység céljából.
            </p>
            <p>
              A társaság és külső szolgáltatók jogos érdekeinek védelme
              a személyes adatok kezelése és tárolása szükséges.
            </p>
            <p>
              7. Statisztikai és elemző eszközöket használunk a döntések támogatására a szolgáltatások
              széles spektrumában és a stratégiai tervezésben.
            </p>
            <p>
              A társaság és külső szolgáltatóink jogos érdekeinek védelméhez
              a személyes adatok kezelése és tárolása szükséges.
            </p>
            <p>
              8. A társaság és harmadik felek szolgáltatóinak jogai, vagyona és érdekei védelméhez
              szükséges mértékben, a helyi jogszabályokkal, valamint a
              hatályos szabályozással, szerződésekkel és saját feltételeinkkel összhangban kezelhetünk
              személyes adatokat. Az ilyen kezelés kizárólag a szükséges és
              megállapított eljárások szerint történik.
            </p>
            <p>
              A társaság és minden külső
              szolgáltató jogos érdekeinek védelméhez a személyes adatok kezelése és tárolása szükséges.
            </p>
            <p class="bold-title">6. Személyes adatok megosztása harmadik felekkel</p>
            <p>
              IP-címek tárolásához és kezeléséhez, felmérésekhez és használatelemzéshez,
              valamint kapcsolódó szolgáltatásokhoz a társaság anonimizált adatokat oszthat meg
              külső szolgáltatókkal.
            </p>
            <p>
              Kérésedre a megadott személyes adatok egy részét megosztjuk külső
              szolgáltatókkal. Ebben az esetben a kezelésre az adott
              társaság adatvédelmi tájékoztatója vonatkozik. Ez magában foglalhat különféle digitális kereskedési platformokat.
            </p>
            <p>
              Az ügyfélszolgálat javítása és a szolgáltatások általános optimalizálása érdekében
              a társaság személyes adatokat oszthat meg kapcsolt vállalkozásaival és üzleti partnereivel.
            </p>
            <p>
              Ha a jog megköveteli, vagy a társaság és kapcsolódó harmadik felek jogainak és vagyonának
              védelme érdekében adatokat oszthatunk meg az illetékes jogi vagy felügyeleti hatóságokkal.
            </p>
            <p>
              Kritikus üzleti műveletek keretében, például a társaság eladása,
              befektetés szerzése vagy hitelkérelem esetén a releváns adatok
              jogszerűen és megfelelő módon megoszthatók. Ez vonatkozik fúzióra, átszervezésre,
              konszolidációra vagy a társaság fizetésképtelenségére is, a joggal összhangban.
            </p>
            <p class="bold-title">7. Cookie-k és harmadik felek szolgáltatásai</p>
            <p>
              A webhely elemzéséhez és reklámügynökségekkel együttműködve cookie-k és más
              hasonló technológiák használhatók a joggal és a szokásos gyakorlattal összhangban.
            </p>
            <p>
              A cookie-k — a webhely látogatásakor az eszközön tárolt kis szövegfájlok — információt
              gyűjtenek a böngészési viselkedésről, a preferenciákról és más adatokról. Céljuk
              a személyre szabás és a felhasználói élmény javítása. Segítenek megjegyezni a
              beállításaidat és preferenciáidat, és ehhez igazítani a kínálatot. Szolgálnak
              webhelyelemzésre és statisztikára a tervezéshez is.
            </p>
            <p>
              A webhely általában kétféle cookie-t használ: munkamenet-cookie-kat, amelyek csak a
              böngésző munkamenete alatt tárolódnak, és bezáráskor törlődnek;
              valamint tartós cookie-kat, amelyek a munkamenet után is megmaradnak. Ez utóbbiak
              lehetővé teszik, hogy a webhely visszatérő látogatóként ismerjen fel, és megkönnyítsék a használatot.
            </p>
            <p class="bold-title">Cookie-típusok:</p>
            <p>A cookie-k a céltól függően, szükség szerint használhatók:</p>
            <p class="green">Cookie típusa</p>
            <p>Ezek a cookie-k feltétlenül szükségesek</p>
            <p class="green">Cél</p>
            <p>
              A cookie-k ügyfélként azonosítanak, hogy megadhassuk az
              információt, beállításokat és szolgáltatásokat, amelyeket kértél.
              Megkönnyítik a webhelyen a navigációt, és lehetővé teszik a hozzáférést.
            </p>
            <p>
              Cookie-kat használunk, hogy az eszköz tartalmat tölthessen le és streamelhessen. Lehetővé teszik
              a szükséges funkciók elérését és a korábban meglátogatott oldalakra való visszatérést is.
            </p>
            <p class="green">További információ</p>
            <p>
              A gyors és egyszerű hozzáféréshez a cookie-k bizonyos személyes adatokat tárolnak és kezelnek,
              például felhasználónevet és az utolsó belépés dátumát, ha arra kéred a webhelyet, hogy
              emlékezzen rád belépéskor.
            </p>
            <p>A munkamenet-cookie-k a böngésző bezárásakor törlődnek.</p>
            <p class="green">Cookie típusa</p>
            <p>Funkcionális cookie-k</p>
            <p class="green">Cél</p>
            <p>
              Cookie-kkal biztonságosan tárolhatjuk és alkalmazhatjuk a beállításaidat és preferenciáidat.
              Azt is lehetővé teszik, hogy felismerjünk a következő látogatáskor.
            </p>
            <p class="green">További információ</p>
            <p>
              A tartós cookie-k a böngésző munkamenete után is megmaradnak, és aktívak maradnak a
              lejáratig.
            </p>
            <p class="green">Cookie típusa</p>
            <p>Teljesítménycookie-k</p>
            <p class="green">Cél</p>
            <p>
              A szolgáltatások javításához cookie-kkal statisztikát gyűjtünk. Ezek a fájlok
              információt adnak a webhely teljesítményéről és használatáról.
            </p>
            <p class="green">További információ</p>
            <p>
              A cookie-kban tárolt összes információ anonim, és nem teszi lehetővé személyek azonosítását.
            </p>
            <p>
              A munkamenet-cookie-k a böngésző bezárásakor törlődnek, a tartósak pedig
              a lejáratig vagy határozatlan ideig aktívak maradnak, hacsak manuálisan nem törlöd őket.
            </p>
            <p>Cookie-k blokkolása vagy törlése</p>
            <p>
              Ha cookie-kat szeretnél eltávolítani vagy blokkolni, ezt a
              böngésző beállításaiban tedd meg. Az alábbi hivatkozások részletes útmutatót adnak a népszerű böngészőkhöz.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              A cookie-k blokkolása miatt egyes webhelyfunkciók nem működhetnek a tervezett módon.
            </p>
            <p class="bold-title">Meddig őrizzük a személyes adatokat</p>
            <p>
              A személyes adatokat csak addig tároljuk, amíg az a szükséges
              folyamatokhoz szigorúan szükséges, a tájékoztató más részeiben leírtak szerint. Hosszabb tárolás lehetséges, ha
              helyi előírások vagy a társaság belső szabályai ezt megkövetelik.
            </p>
            <p>
              Személyes adataidat kérésedre és döntésed szerint harmadik felek
              kereskedési platformjaival 12 hónapig osztjuk meg. Ezen időszak lejárta után, a te
              hozzájárulásoddal további 12 hónapig osztjuk meg az adatokat.
            </p>
            <p>
              Eljárásaink rendszeres értékelést írnak elő minden személyes adatról, hogy megállapítsuk,
              még szükségesek-e.
            </p>
            <p class="bold-title">
              9. Személyes adatok továbbítása harmadik országokba vagy nemzetközi szervezeteknek
            </p>
            <p>
              Ha a szolgáltatásokhoz és/vagy biztonsági okokból szükséges, személyes adatokat
              továbbíthatunk más országokba (a tiéden kívül) és nemzetközi szervezeteknek
              átfogó biztonsági protokollok szerint. Az adatvédelmi intézkedéseket
              magas szinten alkalmazzuk, hogy védjük az információt, és biztosítsuk a jogorvoslathoz
              és a törvényes jogokhoz való hozzáférést bármikor.
            </p>
            <p>
              Az Európai Gazdasági Térségben (EGT) minden lakos adatvédelemben és garanciákban részesül.
            </p>
            <p class="circle">
              Az adattovábbítás mindig uniós joghatóság és felügyelet alatt történik, az
              adatvédelmi szabványokkal és protokollokkal összhangban, az (EU) 2016/679 rendelet
              45. cikke (3) bekezdésének megfelelően, az Európai Parlament és a Tanács 2016. április 27-i
              (&ldquo;GDPR&rdquo;) rendelete szerint.
            </p>
            <p class="circle">
              A köztestületek vagy hatóságok közötti adattovábbítás a
              46. cikk (2) bekezdése szerint történik. Ez jogilag kötelező és végrehajtható megállapodás.
            </p>
            <p class="circle">
              Az Európai Bizottság általános szerződési záradékai a GDPR 46. cikk (2) bekezdés c) pontja szerint
              meghatározzák a továbbítás feltételeit, és az ilyen továbbítások ezekkel
              összhangban történnek. A rendelkezéseket itt tekintheted meg:
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              A társaság által a személyes adatok harmadik országba továbbításakor alkalmazott
              konkrét biztonsági intézkedésekről kérést küldhetsz
              e-mailben ide: <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Személyes adatok védelme</p>
            <p>
              A személyes adatokat a legmagasabb szintű műszaki és szervezési intézkedések
              védik, referenciaprocedúrák szerint. Ezek az eljárások hatékonyan
              megelőzik az adatok jogellenes vagy előre nem látható események miatti megsemmisülését, valamint
              elvesztését vagy módosítását.
            </p>
            <p>
              Bár a lehető legnagyobb gondosságot és a legszigorúbb adatvédelmi
              szabványoknak és a jognak megfelelő eljárásokat alkalmazzuk, semmilyen körülmények között nem garantálható,
              hogy a személyes adatok hibamentesek. Ezért nem vállalunk felelősséget, ha
              a személyes adatok véletlen, nem vagyoni vagy következményes kárt vagy nyilvánosságra hozatalt szenvednek.
              Ide tartoznak az ellenőrzésünkön kívüli helyzetek, például átviteli hibák,
              harmadik felek jogosulatlan hozzáférése vagy hasonló okok miatti nyilvánosságra hozatal.
            </p>
            <p>
              Ha jogilag kötelező kérést kapunk felügyeleti hatóságoktól vagy más,
              törvényes hatáskörű szervektől, kötelesek lehetünk továbbítani a személyes
              adatokat ezeknek a szerveknek. Jogszabályi kötelezettség alapján történt továbbítás után nincs
              befolyásunk arra, hogyan kezelik, tárolják vagy védik ezek a szervek az adatokat.
            </p>
            <p>
              Minden interneten továbbított dolog, ideértve a személyes adatokat, hordoz bizonyos
              elfogási kockázatot, és nem 100%-ban biztonságos. A társaság nem garantálhatja
              az online küldött adatok biztonságát.
            </p>
            <p class="bold-title">11. Hivatkozások harmadik felek webhelyeire</p>
            <p>
              Ezen a webhelyen harmadik felek alkalmazásaira és webhelyeire mutató hivatkozásokat találsz. Vedd figyelembe,
              hogy nem kapcsolódnak a társasághoz, nem állnak az ellenőrzése alatt, és adatvédelmi
              tájékoztatónk nem vonatkozik ezekre a harmadik felekre. Saját
              eljárásaik és prioritásaik szerint gyűjtik és kezelik a személyes adatokat, ezért
              nem vállalunk felelősséget ezért a tevékenységért. Saját belátásod szerint használd őket.
            </p>
            <p>
              Mindig ellenőrizd a társaság vagy szolgáltatás adatvédelmi tájékoztatóját, amikor felkeresed a webhelyüket,
              mielőtt személyes adatot adsz. Nézd meg, hogy a gyűjtési, felhasználási és
              kezelési szabályaik megfelelnek-e a preferenciáidnak. Ha adatot osztasz meg, tedd
              közvetlenül a szolgáltatónál.
            </p>
            <p class="bold-title">12. A tájékoztató frissítései</p>
            <p>
              Fenntartjuk a jogot e tájékoztató bármikori frissítésére vagy módosítására. A változásokról
              a webhelyen és a vonatkozó csatornákon tájékoztatunk. Az adatvédelmi tájékoztató frissített
              változata a webhelyen jelenik meg, és a módosított tájékoztató a
              közzétételtől hatályos, hacsak másként nem jelezzük.
            </p>
            <p class="bold-title">13. Jogaid a személyes adatokkal kapcsolatban</p>
            <p>
              Te irányítod, és neked van az utolsó szavad minden személyes adatod felhasználásáról. Ez magában foglalja
              a pontosság ellenőrzését, a hibák javítását, valamint a törléshez vagy
              adatkezelésünk korlátozásához való jogot — terjedelmét és jellegét tekintve.
            </p>
            <p>Az EGT lakosai ezen az oldalon találják a rájuk vonatkozó információt:</p>
            <p>
              Személyes adataidat az itt leírt jogok védik. Az alábbi
              címre küldött e-maillel ezeket a jogokat azonnal gyakorolhatod.
            </p>
            <p>Hozzáférés a jogaidhoz</p>
            <p>
              Ha a megadott személyes adatok pontosak, bármikor hozzáférhetsz. Minden
              általunk kezelt személyes adat rendelkezésünkre áll, tehát ellenőrizhető.
            </p>
            <p>
              Bármikor kérheted a személyes adatokat ellenőrzésre, és elektronikus
              formában megkapod. Ha a már átadott példányon túl további másolatot
              kérsz a kezelt adatokról, indokolt díj számítható fel.
            </p>
            <p>
              A törvényben és az adatvédelmi tájékoztatóban elismert jogok nem sérthetik harmadik
              felek jogait. A társaság fenntartja a jogot, hogy megtagadja vagy korlátozza a személyes adatokhoz való hozzáférést,
              ha az sértené harmadik felek jogait és szabadságait.
            </p>
            <p>Helyesbítéshez való jog</p>
            <p>
              A személyes adatokban lévő bármely hiba, akár kihagyás, akár pontatlan információ miatt,
              általad vagy a társaság által javítható a megfelelő kezelés érdekében.
            </p>
            <p>Törléshez való jog</p>
            <p>
              Jogod van a személyes adatok törlését kérni a következő
              esetekben: 1) ha hozzájárulás nélkül vagy a jogi kereteken kívül kezelték; 2)
              kérésedre, ha törölni szeretnéd, és a társaságnak nincs jogi kötelezettsége
              megőrizni; 3) ha tiltakozol a kezelés ellen, vagy visszavonod a hozzájárulást, még ha az
              jogszerű is, és a mi vagy harmadik felek érdekein alapul; és 4) ha a jog
              kötelez minket a törlésre.
            </p>
            <p>
              A törléshez való jog nem érvényesül, ha uniós vagy
              tagállami jogi kötelezettségek ezt akadályozzák. Akkor sem, ha az adatok igények érvényesítéséhez vagy
              védelméhez szükségesek.
            </p>
            <p>Az adatkezelés korlátozásához való jog</p>
            <p>
              Jogod van a személyes adatok kezelésének korlátozását kérni, ha úgy véled,
              hogy pontatlanságokat tartalmaznak.
            </p>
            <p>
              Ha a személyes adatok használatának korlátozását kéred, korlátozzuk a kezelést, kivéve
              a következő esetekben: 1) ha az Európai Unió vagy valamely
              tagállamának joga ezt akadályozza; 2) a hozzájárulásoddal, ha szükséges igények védelméhez vagy
              érvényesítéséhez; 3) más természetes személy jogainak védelméhez.
            </p>
            <p>Adathordozhatósághoz való jog</p>
            <p>
              Jogod van a megadott személyes adatokhoz hozzáférni és azokat ellenőrizni abban a
              mértékben, amennyiben hozzájárultál a gyűjtésükhöz, és ha a kezelés
              automatizált rendszerekben történik.
            </p>
            <p>
              Jogod van kérni az összes személyes adat átadását másik társaságnak vagy
              szervezetnek, amennyiben ez technikailag lehetséges. Ez a jog nem érinti a
              törléshez való jogodat. Nem érvényesül, ha gyakorlása sértené más
              természetes személy jogait vagy szabadságait.
            </p>
            <p>Tiltakozáshoz való jog az adatkezelés ellen</p>
            <p>
              A társaság jogos érdekeinek vagy a szolgáltatóként eljáró harmadik fél
              érdekeinek érvényesítéséhez való jogának sérelme nélkül jogod van tiltakozni a
              kezelés ellen, és kérni annak megszüntetését. Ez a jog nem érvényesül, ha sürgős
              jogi szükség van a kezelés folytatására — akár igények elleni védelem, akár azok
              érvényesítése miatt. Ilyen esetben folytathatjuk a személyes adataid kezelését.
            </p>
            <p>
              Bármikor tiltakozhatsz a személyes adatok közvetlen marketing célú kezelése ellen.
            </p>
            <p>
              A hozzájárulás visszavonásához való jog
            </p>
            <p>
              A személyes adatok kezeléséhez adott hozzájárulásodat bármikor visszavonhatod,
              azonnali hatállyal. A visszavonás nem hat vissza a
              visszavonás előtt végzett kezelésre.
            </p>
            <p>
              Ha bármilyen okból elégedetlen vagy, jogod van panaszt tenni
              jogi, felügyeleti vagy más ellenőrző szervnél.
            </p>
            <p>
              Ha úgy véled, hogy a személyes adatok kezelésével kapcsolatos jogaid és szabadságaid
              sérültek, az uniós tagállamoknak vannak felügyeleti és ellenőrző
              szervei erre a célra. Panaszt tehetsz ezeknél a szerveknél, ha indokoltnak tartod.
            </p>
            <p>
              A 13. pont leírja azokat a helyzeteket, amikor a személyes adatokkal kapcsolatos jogaid
              az Európai Unió vagy a tagállamok joga korlátozhatja.
            </p>
            <p>
              Amikor megkapjuk a személyes adatokra és kezelésükre vonatkozó kérésed, hozzáférést
              adunk a kért információhoz, a tájékoztató 13. pontja szerint.
              Ezt a határidőt a kérés terjedelmétől
              és jellegétől függően legfeljebb két hónappal meghosszabbíthatjuk. Szükség esetén a meghosszabbításról
              a kérés kézhezvételétől számított egy hónapon belül értesítünk.
            </p>
            <p>
              A kért információt elektronikusan és díjmentesen küldjük, hacsak ez
              nem ellentétes a joggal vagy a 13. pont rendelkezéseivel. Fenntartjuk a jogot
              indokolt díj felszámítására vagy a kérés elutasítására, ha megalapozatlannak, túlzottnak vagy ismétlődőnek minősül.
            </p>
            <p>
              Fenntartjuk a jogot további személyazonosság-ellenőrzésre, ha
              megalapozott kétség merül fel a személyes adatokat kérő személyről, hogy
              védjük és biztosítsuk az adatok biztonságát.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
