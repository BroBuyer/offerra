<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Zásady ochrany osobných údajov | ' . SITE_NAME;
$page_description = 'Zásady ochrany osobných údajov ' . SITE_NAME . '.';
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
            <h1>Zásady ochrany osobných údajov</h1>
            <p>
              Tvoje osobné údaje a aktíva sú pre nás zásadné. Plne sa
              zaväzujeme ich chrániť.
            </p>
            <p>
              <?= e(SITE_NAME) ?> zhromažďuje a uchováva údaje potrebné k tvojim obchodom. Ako
              sa zhromažďujú a uchovávajú, opisujú nasledujúce zásady ochrany osobných údajov.
            </p>
            <p>Naše zásady vychádzajú z týchto princípov:</p>
            <p class="circle">
              S cieľom zabezpečiť maximálnu transparentnosť procesov zhromažďovania a
              uchovávania tvojich osobných údajov:
            </p>
            <p>
              Chceme, aby si rozumel, ako údaje zhromažďujeme a spracúvame, aby si mohol robiť
              informované rozhodnutia. Na tomto webe uplatňujeme jasné postupy spracovania
              údajov. Zásady podrobne opisujú metódy, ktorými ti poskytujeme
              jasné a konkrétne informácie o použití údajov. Kontrolu máš ty.
            </p>
            <p>
              Upozorníme ťa hneď, keď to uznáme za potrebné. Transparentnosť je pre nás
              zásadná.
            </p>
            <p>
              Náš tím špecialistov je vždy k dispozícii, aby odpovedal na otázky k akémukoľvek aspektu
              našich procesov, vrátane povinností podľa práva <?= e(geo_in()) ?> a predpisov
              EÚ. Môžeš nás kontaktovať na:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Iné použitie osobných údajov z našej strany nie je dovolené, okrem prípadov uvedených v
              zásadách ochrany osobných údajov.
            </p>
            <p>
              Osobné údaje môžeme spracúvať na tieto účely, vrátane zabezpečenia riadneho
              fungovania služieb <?= e(SITE_NAME) ?> a prepojenia používateľov s obchodnými platformami
              tretích strán. Spracovanie môže byť potrebné aj na údržbu a zlepšenie
              funkcií a služieb webu; na ochranu našich práv a na splnenie právnych a ďalších
              povinností. Nakoniec údaje slúžia podľa potreby na administratívne
              a ďalšie obchodné funkcie súvisiace so službami poskytovanými tebe ako klientovi.
            </p>
            <p>
              Aby sme ponúkali kvalitnejšie služby podľa tvojich preferencií a potrieb, <?= e(SITE_NAME) ?>
              používa osobné údaje.
            </p>
            <p class="circle">
              S cieľom používať nevyhnutné nástroje na ochranu osobných údajov a na zabezpečenie tvojich
              práv s nimi spojených:
            </p>
            <p>
              Kedykoľvek nás môžeš kontaktovať a získať prístup ku všetkým svojim údajom. Môžeme ich tiež
              v prípade potreby zmeniť alebo vymazať. Navyše vybavujeme žiadosti o odovzdanie týchto
              údajov tebe alebo tebou určenou treťou stranou. Túto službu ponúkame, aby si mohol
              plne uplatniť práva na súkromie a kontrolu.
            </p>
            <p class="circle">Chráň svoje osobné údaje:</p>
            <p>
              Naše bezpečnostné systémy spĺňajú vysoký štandard a zahŕňajú opatrenia na bankovej úrovni. Hoci
              absolútnu ochranu nemožno zaručiť, zaväzujeme sa systémy priebežne udržiavať
              na vysokej úrovni a posilňovať už zavedené opatrenia.
            </p>
            <p>
              Máme komplexné zásady ochrany súkromia a špičkové bezpečnostné systémy.
            </p>
            <p class="bold-title">1. Rozsah pôsobnosti</p>
            <p>
              Tieto zásady opisujú postupy zhromažďovania, spracovania a sprístupňovania všetkých
              údajov fyzických osôb.
            </p>
            <p>
              Ustanovenia zásad sa vzťahujú na všetky fyzické osoby, ktoré možno identifikovať alebo ktoré sú
              identifikované. Konkrétne na každú fyzickú osobu, ktorú možno identifikovať v súvislosti s
              údajmi nám zverenými, ku ktorým máme prístup a/alebo ktoré môžeme kombinovať.
            </p>
            <p>
              Spracovanie údajov v zmysle zásad ochrany osobných údajov zahŕňa najmä uchovávanie,
              správu a organizáciu osobných údajov.
            </p>
            <p>
              Nezhromažďujeme a nepokúsime sa zhromažďovať informácie o osobách mladších ako 18
              rokov. Osoby mladšie ako 18 rokov tiež nesmú našu platformu používať na žiadny
              účel. Ak zistíme, že používateľ má menej ako 18 rokov, tieto údaje ihneď vymažeme.
            </p>
            <p class="bold-title">2. Aké osobné údaje zhromažďujeme?</p>
            <p>
              Pri registrácii zhromažďujeme osobné údaje potrebné na používanie služieb. V prípade potreby
              môžeme tiež požiadať o údaje na overenie, napríklad aby sme
              potvrdili vlastníctvo účtu. Aby sme zlepšovali a udržiavali kvalitu
              služieb, zhromažďujeme a analyzujeme informácie o používaní platformy a
              súvisiacich službách tretích strán.
            </p>
            <p class="bold-title">
              3. Za žiadnych okolností nie si povinný spoločnosti osobné údaje poskytovať.
            </p>
            <p>
              Aj keď nám údaje poskytovať nemusíš, rozhodnutie tak neurobiť
              môže obmedziť poskytovanie služieb. Môže tiež viesť k
              obmedzeniam v používaní platformy.
            </p>
            <p class="bold-title">
              4. Aké osobné údaje zhromažďujeme? Návštevou webu môžeme zhromažďovať nasledujúce
              osobné údaje:
            </p>
            <p>
              Nezhromažďujeme údaje, ktoré ťa priamo identifikujú. Evidujeme okrem iného
              aktivitu účtu, IP adresy a dátumy a časy prístupu. Na údržbu,
              zabezpečenie a podporu uchovávame hlásenia systémových chýb, informácie o prehliadači a typ
              zariadenia, z ktorého sa prihlasuješ. Zaznamenávame aj jazyk nastavený na účte.
            </p>
            <p>
              Pokiaľ ide o osobné údaje, zhromažďujeme a uchovávame výhradne informácie
              poskytnuté pri pripojení k obchodnej platforme tretej strany cez naše služby.
            </p>
            <p>
              Osobné údaje odovzdané platformám tretích strán môžu zahŕňať:
              meno a priezvisko, adresu, telefónne číslo a e-mail.
            </p>
            <p class="bold-title">
              5. Prečo spoločnosť potrebuje moje údaje a je spracovanie zákonné?
            </p>
            <p>
              Spoločnosť zhromažďuje, uchováva a spracúva tvoje osobné údaje výhradne na
              účely uvedené v zásadách. Všetky opísané použitia a spracovanie sú v súlade s
              platným právom <?= e(geo_in()) ?> a predpismi EÚ.
            </p>
            <p>
              Spoločnosť bude spravovať, spracúvať alebo odovzdávať tvoje údaje iba v súlade s
              platnými predpismi <?= e(geo_in()) ?>. Príslušné právne základy sú uvedené nižšie:
            </p>
            <p class="circle">
              Dal si súhlas s uchovávaním a spracovaním osobných údajov
              spoločnosťou. Odovzdaním údajov spoločnosti nás splnomocňuješ na ich odovzdanie príslušnej
              obchodnej platforme tretej strany. Navyše si dal súhlas so
              spracovaním osobných údajov na jeden alebo viac účelov.
            </p>
            <p class="circle">
              Aby sme zlepšovali služby, uplatňovali alebo bránili nároky a chránili oprávnené
              záujmy, spoločnosť môže okrem iného musieť uchovávať a
              spracúvať tvoje osobné údaje.
            </p>
            <p class="circle">Na splnenie právnych povinností je spracovanie údajov nevyhnutné.</p>
            <p>
              Ak chceš vedieť viac o spracovaní, na ktoré je spoločnosť povinná,
              napíš nám e-mailom.
            </p>
            <p>
              Nižšie nájdeš konkrétne účely a právny základ, ktorý nás
              oprávňuje na spracovanie tvojich osobných údajov.
            </p>
            <p class="green">Účel</p>
            <p class="green">Právny základ</p>
            <p>
              1. Aby sme uľahčili prístup k digitálnemu tradingu a — výhradne na tvoju žiadosť —
              zdieľame osobné údaje s platformami tretích strán. Tvoje údaje môžu byť zhromažďované
              a zdieľané s tretími stranami výhradne na tvoju žiadosť a podľa tvojho uváženia.
            </p>
            <p>
              Dal si súhlas so spracovaním osobných údajov na jeden alebo viac účelov.
            </p>
            <p>
              2. Poskytni nám potrebné informácie, aby sme mohli rýchlo a
              účinne reagovať na tvoje žiadosti, obavy a otázky k službám.
            </p>
            <p>
              Na uplatnenie oprávnených záujmov spoločnosti alebo uvedenej tretej strany
              je spracovanie osobných údajov nevyhnutné.
            </p>
            <p>
              3. Na splnenie právnych a administratívnych povinností je spracovanie osobných údajov nevyhnutné.
            </p>
            <p>Na splnenie právnych povinností musíme spracúvať určité osobné údaje.</p>
            <p>
              4. Aby sme zlepšovali služby, potrebujeme anonymizované údaje a musíme sledovať použitie,
              vrátane hlásení chýb.
            </p>
            <p>
              Na ochranu oprávnených záujmov spoločnosti a externých poskytovateľov
              služieb je spracovanie a uchovávanie osobných údajov nevyhnutné.
            </p>
            <p>5. Je to nutné na predchádzanie podvodom a zneužitiu služby.</p>
            <p>
              Na zabezpečenie oprávnených záujmov spoločnosti a poskytovateľov služieb tretích strán
              je spracovanie a uchovávanie osobných údajov nevyhnutné.
            </p>
            <p>
              6. Požiadavky služby nás zaväzujú sledovať a spracúvať údaje pre
              rozvoj biznisu, strategické rozhodnutia, monitoring, súlad s predpismi a
              ďalšiu obchodnú činnosť.
            </p>
            <p>
              S cieľom chrániť oprávnené záujmy spoločnosti a externých poskytovateľov
              služieb je spracovanie a uchovávanie osobných údajov nevyhnutné.
            </p>
            <p>
              7. Používame štatistické a analytické nástroje na podporu rozhodnutí v širokom
              spektre služieb a v strategickom plánovaní.
            </p>
            <p>
              Na ochranu oprávnených záujmov spoločnosti a našich externých poskytovateľov
              služieb je spracovanie a uchovávanie osobných údajov nevyhnutné.
            </p>
            <p>
              8. V rozsahu nevyhnutnom na ochranu práv, majetku a záujmov
              spoločnosti a poskytovateľov služieb tretích strán, v súlade s miestnymi predpismi a
              platnými reguláciami, zmluvami a vlastnými podmienkami, môžeme spracúvať
              osobné údaje. Také spracovanie prebieha výhradne podľa nevyhnutných a
              stanovených postupov.
            </p>
            <p>
              Na ochranu oprávnených záujmov spoločnosti a každého externého
              poskytovateľa služieb je spracovanie a uchovávanie osobných údajov nevyhnutné.
            </p>
            <p class="bold-title">6. Zdieľanie osobných údajov s tretími stranami</p>
            <p>
              Na uchovávanie a spracovanie IP adries, prieskumov a analýzy použitia
              a súvisiacich služieb môže spoločnosť zdieľať anonymizované údaje
              s externými poskytovateľmi služieb.
            </p>
            <p>
              Na tvoju žiadosť zdieľame niektoré poskytnuté osobné údaje s externými
              poskytovateľmi služieb. V takom prípade sa spracovanie riadi zásadami ochrany osobných údajov
              tej spoločnosti. Môže ísť o rôzne digitálne obchodné platformy.
            </p>
            <p>
              S cieľom zlepšiť zákaznícky servis a všeobecne optimalizovať služby
              môže spoločnosť zdieľať osobné údaje s pridruženými spoločnosťami a obchodnými partnermi.
            </p>
            <p>
              Keď to vyžaduje právo alebo na ochranu práv a majetku spoločnosti a súvisiacich
              tretích strán môžeme údaje zdieľať s príslušnými právnymi alebo dohľadovými orgánmi.
            </p>
            <p>
              V rámci zásadných obchodných operácií, ako je predaj spoločnosti,
              získanie investície alebo žiadosť o úver, môžu byť príslušné údaje
              zdieľané zákonným a primeraným spôsobom. Platí to aj pre fúzie, reštrukturalizácie,
              konsolidácie alebo insolvenciu spoločnosti v súlade so zákonom.
            </p>
            <p class="bold-title">7. Cookies a služby tretích strán</p>
            <p>
              Na analýzu webu a v spolupráci s reklamnými agentúrami môžu byť cookies a ďalšie
              podobné technológie používané v súlade s právom a bežnou praxou.
            </p>
            <p>
              Cookies — malé textové súbory uložené na zariadení pri návšteve webu — slúžia na
              zhromažďovanie informácií o správaní na webe, preferenciách a ďalších údajoch. Ich
              účelom je personalizácia a zlepšenie zážitku. Pomáhajú zapamätať tvoje
              nastavenia a preferencie a prispôsobiť ponuku. Slúžia tiež
              na analýzu webu a štatistiky na plánovanie.
            </p>
            <p>
              Web zvyčajne používa dva typy cookies: relácie, uložené
              len počas relácie prehliadača a vymazané po jeho zatvorení;
              a trvalé, ktoré ostanú aj po skončení relácie. Tie druhé
              umožňujú webu rozpoznať ťa ako vracajúceho sa návštevníka a uľahčiť použitie.
            </p>
            <p class="bold-title">Typy cookies:</p>
            <p>Cookies môžu byť používané podľa potreby v závislosti od účelu:</p>
            <p class="green">Typ cookie</p>
            <p>Tieto cookies sú nevyhnutne potrebné</p>
            <p class="green">Účel</p>
            <p>
              Cookies slúžia na rozpoznanie ťa ako klienta, aby sme mohli poskytnúť informácie,
              nastavenia a služby, o ktoré si požiadal.
              Uľahčujú tiež navigáciu na webe a prístup k nemu.
            </p>
            <p>
              Cookies používame, aby zariadenie mohlo sťahovať a prehrávať obsah. Umožňujú tiež
              prístup k nevyhnutným funkciám a návrat na predtým navštívené stránky.
            </p>
            <p class="green">Ďalšie informácie</p>
            <p>
              Aby bol prístup k webu rýchly a jednoduchý, cookies uchovávajú a spracúvajú niektoré
              osobné údaje, napr. používateľské meno a dátum posledného prístupu, ak web požiadaš, aby
              si ťa zapamätal pri prihlásení.
            </p>
            <p>Relácie cookies sa vymažú po zatvorení prehliadača.</p>
            <p class="green">Typ cookie</p>
            <p>Funkčné cookies</p>
            <p class="green">Účel</p>
            <p>
              Vďaka cookies môžeme bezpečne ukladať a uplatňovať tvoje nastavenia a preferencie.
              Umožňujú tiež rozpoznať ťa pri ďalšej návšteve.
            </p>
            <p class="green">Ďalšie informácie</p>
            <p>
              Trvalé cookies ostanú po relácii prehliadača a zostávajú aktívne do
              dátumu vypršania.
            </p>
            <p class="green">Typ cookie</p>
            <p>Výkonnostné cookies</p>
            <p class="green">Účel</p>
            <p>
              Aby sme zlepšovali služby, zhromažďujeme štatistiky pomocou cookies. Tieto súbory
              nám dávajú informácie o výkone webu a jeho použití.
            </p>
            <p class="green">Ďalšie informácie</p>
            <p>
              Všetky informácie uložené cez cookies sú anonymné a neumožňujú identifikovať osoby.
            </p>
            <p>
              Relácie cookies sa vymažú po zatvorení prehliadača, zatiaľ čo trvalé
              zostávajú aktívne do dátumu vypršania alebo neurčito, ak ich ručne nevymažeš.
            </p>
            <p>Blokovanie alebo mazanie cookies</p>
            <p>
              Ak chceš cookies odstrániť alebo zablokovať, urob to v
              nastavení prehliadača. Nasledujúce odkazy obsahujú podrobné pokyny pre najobľúbenejšie prehliadače.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Blokovanie cookies môže spôsobiť, že niektoré funkcie webu nebudú fungovať podľa zámeru.
            </p>
            <p class="bold-title">Ako dlho osobné údaje uchovávame</p>
            <p>
              Osobné údaje uchovávame len tak dlho, ako je to striktne nutné na požadované
              procesy, ako je uvedené v iných častiach týchto zásad. Dlhšie uchovávanie je možné, ak
              to vyžadujú miestne predpisy alebo vnútorné zásady spoločnosti.
            </p>
            <p>
              Tvoje osobné údaje sa na tvoju žiadosť a podľa tvojho uváženia zdieľajú s obchodnými platformami
              tretích strán po dobu 12 mesiacov. Po uplynutí tejto doby a s tvojím
              súhlasom sa údaje zdieľajú ďalších 12 mesiacov.
            </p>
            <p>
              Naše postupy počítajú s pravidelným posúdením všetkých osobných údajov, aby sa zistilo, či
              sú stále potrebné.
            </p>
            <p class="bold-title">
              9. Odovzdávanie osobných údajov do tretích krajín alebo medzinárodným organizáciám
            </p>
            <p>
              Keď je to potrebné k službám a/alebo z bezpečnostných dôvodov, môžeme odovzdávať
              osobné údaje do iných krajín (mimo tvoje) a medzinárodným organizáciám
              podľa komplexných bezpečnostných protokolov. Opatrenia ochrany údajov uplatňujeme na
              vysokej úrovni, aby sme chránili informácie a zabezpečili prístup k právnym prostriedkom
              a zákonným právam kedykoľvek.
            </p>
            <p>
              V Európskom hospodárskom priestore (EHP) majú všetci obyvatelia ochranu údajov a záruky.
            </p>
            <p class="circle">
              Odovzdávanie vždy prebieha pod jurisdikciou a dohľadom EÚ, v súlade
              so štandardmi a protokolmi ochrany údajov podľa čl. 45 ods. 3 nariadenia
              (EÚ) 2016/679 Európskeho parlamentu a Rady z 27. apríla 2016
              (&ldquo;GDPR&rdquo;).
            </p>
            <p class="circle">
              Každé odovzdanie údajov medzi verejnými orgánmi prebieha podľa čl.
              46 ods. 2. Ide o právne záväznú a vymáhateľnú dohodu.
            </p>
            <p class="circle">
              Štandardné zmluvné doložky Európskej komisie podľa čl. 46 ods. 2 písm. c GDPR stanovujú
              podmienky odovzdávania a také odovzdávania prebiehajú v súlade s
              nimi. Ustanovenia si môžeš prezrieť na
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Viac o konkrétnych bezpečnostných opatreniach, ktoré spoločnosť prijala, aby
              chránila osobné údaje pri odovzdávaní do tretích krajín, môžeš poslať žiadosť
              e-mailom na <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Ochrana osobných údajov</p>
            <p>
              Osobné údaje chránia technické a organizačné opatrenia najvyššej
              úrovne, uplatňované podľa referenčných postupov. Tieto postupy účinne
              bránia zničeniu údajov v dôsledku protiprávnych alebo nepredvídaných udalostí aj
              ich strate alebo zmene.
            </p>
            <p>
              Hoci uplatňujeme maximálnu starostlivosť a postupy spĺňajúce najprísnejšie
              štandardy ochrany údajov a právo, za žiadnych okolností nemožno zaručiť,
              že osobné údaje sú bezchybné. Preto neprijímame zodpovednosť, ak
              osobné údaje utrpia náhodnú, nehmotnú alebo následnú škodu alebo zverejnenie.
              Zahŕňa to situácie mimo našu kontrolu, napríklad zverejnenie kvôli chybám prenosu,
              neoprávnenému prístupu tretích strán alebo podobným príčinám.
            </p>
            <p>
              Keď dostaneme právne záväzné žiadosti dohľadových orgánov alebo iných
              orgánov so zákonnými právomocami, môžeme byť povinní odovzdať tvoje osobné
              údaje týmto orgánom. Po odovzdaní na základe právnej povinnosti nemáme
              vplyv na to, ako tieto orgány údaje spracúvajú, uchovávajú alebo chránia.
            </p>
            <p>
              Všetko prenášané cez internet, vrátane osobných údajov, nesie určité
              riziko zachytenia a nie je 100% bezpečné. Spoločnosť nemôže zaručiť
              bezpečnosť údajov odosielaných online.
            </p>
            <p class="bold-title">11. Odkazy na weby tretích strán</p>
            <p>
              Na tomto webe nájdeš odkazy na aplikácie a weby tretích strán. Vezmi na vedomie,
              že nie sú spojené so spoločnosťou ani pod jej kontrolou a že naše
              zásady ochrany osobných údajov sa na tieto tretie strany nevzťahujú. Fungujú podľa vlastných
              postupov a priorít pri zhromažďovaní a spracovaní osobných údajov, preto
              za túto činnosť neneseme zodpovednosť. Používaj ich podľa vlastného uváženia.
            </p>
            <p>
              Vždy skontroluj zásady ochrany osobných údajov spoločnosti alebo služby, keď navštíviš jej web
              než poskytneš osobné údaje. Posúď, či ich pravidlá zhromažďovania, použitia a
              spracovania zodpovedajú tvojim preferenciám. Ak údaje zdieľaš, urob to
              priamo u poskytovateľa.
            </p>
            <p class="bold-title">12. Aktualizácie zásad</p>
            <p>
              Vyhradzujeme si právo tieto zásady kedykoľvek aktualizovať alebo zmeniť. Informujeme ťa
              o zmenách cez web a príslušné kanály. Aktualizovaná verzia zásad
              ochrany osobných údajov bude zverejnená na webe a zmenené zásady platia
              od zverejnenia, ak nie je uvedené inak.
            </p>
            <p class="bold-title">13. Tvoje práva k osobným údajom</p>
            <p>
              Máš kontrolu a posledné slovo nad použitím všetkých svojich osobných údajov. To zahŕňa
              overenie správnosti, opravu chýb a právo na výmaz alebo
              obmedzenie nášho spracovania — čo do rozsahu aj povahy.
            </p>
            <p>Obyvatelia EHP na tejto stránke nájdu informácie, ktoré sa ich týkajú:</p>
            <p>
              Tvoje osobné údaje chránia práva opísané tu. Odoslaním e-mailu na
              adresu nižšie môžeš tieto práva uplatniť okamžite.
            </p>
            <p>Prístup k svojim právam</p>
            <p>
              Ak poskytnuté osobné údaje sú správne, môžeš k nim mať prístup kedykoľvek. Všetky
              osobné údaje, ktoré spracúvame, máme k dispozícii, a teda overiteľné.
            </p>
            <p>
              Kedykoľvek môžeš požiadať o osobné údaje na overenie a budú ti
              sprístupnené v elektronickej podobe. Ak požiadaš o ďalšie kópie
              spracúvaných údajov nad už poskytnutú kópiu, môže byť účtovaný primeraný poplatok.
            </p>
            <p>
              Práva uznané zákonom a zásadami ochrany osobných údajov nesmú zasahovať do práv tretích
              strán. Spoločnosť si vyhradzuje právo odmietnuť alebo obmedziť prístup k osobným údajom,
              ak by to porušovalo práva a slobody tretích strán.
            </p>
            <p>Právo na opravu</p>
            <p>
              Akákoľvek chyba v osobných údajoch, či z opomenutia, alebo nepresnej informácie,
              môžeš opraviť ty alebo spoločnosť, aby bolo spracovanie správne.
            </p>
            <p>Právo na výmaz údajov</p>
            <p>
              Máš právo žiadať výmaz osobných údajov v nasledujúcich
              prípadoch: 1) ak boli spracované bez súhlasu alebo mimo zákonné medze; 2)
              na tvoju žiadosť, ak ich chceš vymazať a spoločnosť nemá právnu povinnosť
              ich uchovávať; 3) ak namietaš proti spracovaniu alebo odvoláš súhlas, aj keď je
              zákonné a oprené o naše záujmy alebo záujmy tretích strán; a 4) ak zákon
              nám ukladá povinnosť ich vymazať.
            </p>
            <p>
              Právo na výmaz sa neuplatní, ak tomu bránia právne povinnosti EÚ alebo
              členského štátu. Neuplatní sa ani, ak sú údaje potrebné na uplatnenie alebo
              obranu nárokov.
            </p>
            <p>Právo na obmedzenie spracovania</p>
            <p>
              Máš právo žiadať obmedzenie spracovania osobných údajov, ak sa domnievaš,
              že obsahujú nepresnosti.
            </p>
            <p>
              Ak požiadaš o obmedzenie použitia osobných údajov, obmedzíme spracovanie, s výnimkou
              nasledujúcich prípadov: 1) ak tomu bráni právo Európskej únie alebo jedného z jej
              členských štátov; 2) s tvojím súhlasom, ak je to potrebné na obranu alebo uplatnenie
              nárokov; 3) na ochranu práv inej fyzickej osoby.
            </p>
            <p>Právo na prenosnosť údajov</p>
            <p>
              Máš právo na prístup a kontrolu poskytnutých osobných údajov v rozsahu,
              v akom si dal súhlas s ich zhromažďovaním, a ak spracovanie
              prebieha v automatizovaných systémoch.
            </p>
            <p>
              Máš právo žiadať odovzdanie všetkých osobných údajov inej spoločnosti alebo
              organizácii, ak je to technicky možné. Toto právo nezasahuje do
              práva na výmaz údajov. Neuplatní sa, ak by jeho výkon porušil práva
              alebo slobody inej fyzickej osoby.
            </p>
            <p>Právo vzniesť námietku proti spracovaniu</p>
            <p>
              Bez toho, aby bolo dotknuté právo spoločnosti uplatňovať oprávnené záujmy alebo
              záujmy tretej strany konajúcej ako poskytovateľ, máš právo vzniesť námietku proti
              spracovaniu a žiadať jeho ukončenie. Toto právo sa neuplatní, ak existuje naliehavá
              právna potreba pokračovať v spracovaní — či na obranu proti nárokom, alebo na ich
              uplatnenie. V takých prípadoch môžeme pokračovať v spracovaní tvojich údajov.
            </p>
            <p>
              Kedykoľvek môžeš vzniesť námietku proti spracovaniu osobných údajov na účely priameho marketingu.
            </p>
            <p>
              Právo odvolať súhlas
            </p>
            <p>
              Súhlas so spracovaním osobných údajov môžeš odvolať kedykoľvek,
              s okamžitým účinkom. Odvolanie nepôsobí spätne voči spracovaniu
              vykonanému pred odvolaním.
            </p>
            <p>
              Ak si z akéhokoľvek dôvodu nespokojný, máš právo podať sťažnosť
              právnemu, dohľadovému alebo inému kontrolnému orgánu.
            </p>
            <p>
              Ak sa domnievaš, že tvoje práva a slobody súvisiace so spracovaním osobných údajov
              boli porušené, členské štáty EÚ majú dohľadové a kontrolné
              orgány na tento účel. Môžeš podať sťažnosť týmto orgánom, ak to uznáš za vhodné.
            </p>
            <p>
              Bod 13 opisuje situácie, keď tvoje práva k osobným údajom môžu byť
              obmedzené právom Európskej únie alebo členských štátov.
            </p>
            <p>
              Keď dostaneme tvoju žiadosť ohľadom osobných údajov a ich spracovania, dáme ti
              prístup k požadovaným informáciám, ako je uvedené v bode 13 týchto zásad.
              Túto lehotu môžeme predĺžiť až o dva mesiace podľa rozsahu žiadosti
              a povahy dopytu. V prípade potreby ťa o predĺžení informujeme
              do jedného mesiaca od prijatia žiadosti.
            </p>
            <p>
              Požadované informácie pošleme elektronicky a zadarmo, ak to
              nie je v rozpore so zákonom alebo ustanovením bodu 13. Vyhradzujeme si právo
              účtovať primeraný poplatok alebo žiadosť odmietnuť, ak bude uznaná za neopodstatnenú, nadmernú alebo opakovanú.
            </p>
            <p>
              Vyhradzujeme si právo požadovať dodatočné overenie totožnosti, ak existujú
              dôvodné pochybnosti o osobe podávajúcej žiadosť o osobné údaje, aby sme
              chránili a zabezpečili bezpečnosť údajov.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
