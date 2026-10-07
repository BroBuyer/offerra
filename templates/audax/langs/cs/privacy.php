<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Zásady ochrany osobních údajů | ' . SITE_NAME;
$page_description = 'Zásady ochrany osobních údajů ' . SITE_NAME . '.';
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
            <h1>Zásady ochrany osobních údajů</h1>
            <p>
              Tvoje osobní údaje a aktiva jsou pro nás zásadní. Plně se
              zavazujeme je chránit.
            </p>
            <p>
              <?= e(SITE_NAME) ?> shromažďuje a uchovává údaje potřebné k tvým obchodům. Jak
              se shromažďují a uchovávají, popisují následující zásady ochrany osobních údajů.
            </p>
            <p>Naše zásady vycházejí z těchto principů:</p>
            <p class="circle">
              S cílem zajistit maximální transparentnost procesů shromažďování a
              uchovávání tvých osobních údajů:
            </p>
            <p>
              Chceme, abys rozuměl, jak údaje shromažďujeme a zpracováváme, abys mohl činit
              informovaná rozhodnutí. Na tomto webu uplatňujeme jasné postupy zpracování
              údajů. Zásady podrobně popisují metody, kterými ti poskytujeme
              jasné a konkrétní informace o použití údajů. Kontrolu máš ty.
            </p>
            <p>
              Upozorníme tě ihned, když to uznáme za nutné. Transparentnost je pro nás
              zásadní.
            </p>
            <p>
              Náš tým specialistů je vždy k dispozici, aby odpověděl na otázky k jakémukoli aspektu
              našich procesů, včetně povinností podle práva <?= e(geo_in()) ?> a předpisů
              EU. Můžeš nás kontaktovat na:
              <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="circle">
              Jiné použití osobních údajů z naší strany není dovoleno, kromě případů uvedených v
              zásadách ochrany osobních údajů.
            </p>
            <p>
              Osobní údaje můžeme zpracovávat k těmto účelům, včetně zajištění řádného
              fungování služeb <?= e(SITE_NAME) ?> a propojení uživatelů s obchodními platformami
              třetích stran. Zpracování může být potřeba i k údržbě a vylepšení
              funkcí a služeb webu; k ochraně našich práv a ke splnění právních a dalších
              povinností. Nakonec údaje slouží podle potřeby k administrativním
              a dalším obchodním funkcím souvisejícím se službami poskytovanými tobě jako klientovi.
            </p>
            <p>
              Abychom nabízeli kvalitnější služby podle tvých preferencí a potřeb, <?= e(SITE_NAME) ?>
              používá osobní údaje.
            </p>
            <p class="circle">
              S cílem používat nezbytné nástroje k ochraně osobních údajů a k zajištění tvých
              práv s nimi spojených:
            </p>
            <p>
              Kdykoli nás můžeš kontaktovat a získat přístup ke všem svým údajům. Můžeme je také
              v případě potřeby změnit nebo smazat. Navíc vyřizujeme žádosti o předání těchto
              údajů tobě nebo tebou určené třetí straně. Tuto službu nabízíme, abys mohl
              plně uplatnit práva na soukromí a kontrolu.
            </p>
            <p class="circle">Chraň své osobní údaje:</p>
            <p>
              Naše bezpečnostní systémy splňují vysoký standard a zahrnují opatření na bankovní úrovni. Ačkoli
              absolutní ochranu nelze zaručit, zavazujeme se systémy průběžně udržovat
              na vysoké úrovni a posilovat už zavedená opatření.
            </p>
            <p>
              Máme komplexní zásady ochrany soukromí a špičkové bezpečnostní systémy.
            </p>
            <p class="bold-title">1. Rozsah působnosti</p>
            <p>
              Tyto zásady popisují postupy shromažďování, zpracování a zpřístupňování všech
              údajů fyzických osob.
            </p>
            <p>
              Ustanovení zásad se vztahují na všechny fyzické osoby, které lze identifikovat nebo které jsou
              identifikovány. Konkrétně na každou fyzickou osobu, kterou lze identifikovat v souvislosti s
              údaji nám svěřenými, k nimž máme přístup a/nebo které můžeme kombinovat.
            </p>
            <p>
              Zpracování údajů ve smyslu zásad ochrany osobních údajů zahrnuje zejména uchovávání,
              správu a organizaci osobních údajů.
            </p>
            <p>
              Neshromažďujeme a nepokusíme se shromažďovat informace o osobách mladších 18
              let. Osoby mladší 18 let také nesmějí naši platformu používat k žádnému
              účelu. Pokud zjistíme, že uživatel má méně než 18 let, tyto údaje ihned smažeme.
            </p>
            <p class="bold-title">2. Jaké osobní údaje shromažďujeme?</p>
            <p>
              Při registraci shromažďujeme osobní údaje potřebné k používání služeb. V případě potřeby
              můžeme také požádat o údaje k ověření, například abychom
              potvrdili vlastnictví účtu. Abychom zlepšovali a udržovali kvalitu
              služeb, shromažďujeme a analyzujeme informace o používání platformy a
              souvisejících službách třetích stran.
            </p>
            <p class="bold-title">
              3. Za žádných okolností nejsi povinen společnosti osobní údaje poskytovat.
            </p>
            <p>
              I když nám údaje poskytovat nemusíš, rozhodnutí tak neučinit
              může omezit poskytování služeb. Může také vést k
              omezením v používání platformy.
            </p>
            <p class="bold-title">
              4. Jaké osobní údaje shromažďujeme? Návštěvou webu můžeme shromažďovat následující
              osobní údaje:
            </p>
            <p>
              Neshromažďujeme údaje, které tě přímo identifikují. Evidujeme mimo jiné
              aktivitu účtu, IP adresy a data a časy přístupu. K údržbě,
              zabezpečení a podpoře uchováváme hlášení systémových chyb, informace o prohlížeči a typ
              zařízení, ze kterého se přihlašuješ. Zaznamenáváme také jazyk nastavený na účtu.
            </p>
            <p>
              Pokud jde o osobní údaje, shromažďujeme a uchováváme výhradně informace
              poskytnuté při připojení k obchodní platformě třetí strany přes naše služby.
            </p>
            <p>
              Osobní údaje předané platformám třetích stran mohou zahrnovat:
              jméno a příjmení, adresu, telefonní číslo a e-mail.
            </p>
            <p class="bold-title">
              5. Proč společnost potřebuje mé údaje a je zpracování zákonné?
            </p>
            <p>
              Společnost shromažďuje, uchovává a zpracovává tvoje osobní údaje výhradně k
              účelům uvedeným v zásadách. Všechna popsaná použití a zpracování jsou v souladu s
              platným právem <?= e(geo_in()) ?> a předpisy EU.
            </p>
            <p>
              Společnost bude spravovat, zpracovávat nebo předávat tvoje údaje pouze v souladu s
              platnými předpisy <?= e(geo_in()) ?>. Příslušné právní základy jsou uvedeny níže:
            </p>
            <p class="circle">
              Dal jsi souhlas s uchováváním a zpracováním osobních údajů
              společností. Předáním údajů společnosti nás zmocňuješ k jejich předání příslušné
              obchodní platformě třetí strany. Navíc jsi dal souhlas se
              zpracováním osobních údajů k jednomu nebo více účelům.
            </p>
            <p class="circle">
              Abychom zlepšovali služby, uplatňovali nebo bránili nároky a chránili oprávněné
              zájmy, společnost může mimo jiné muset uchovávat a
              zpracovávat tvoje osobní údaje.
            </p>
            <p class="circle">Ke splnění právních povinností je zpracování údajů nezbytné.</p>
            <p>
              Pokud chceš vědět víc o zpracování, k němuž je společnost povinna,
              napiš nám e-mailem.
            </p>
            <p>
              Níže najdeš konkrétní účely a právní základ, který nás
              opravňuje ke zpracování tvých osobních údajů.
            </p>
            <p class="green">Účel</p>
            <p class="green">Právní základ</p>
            <p>
              1. Abychom usnadnili přístup k digitálnímu tradingu a — výhradně na tvou žádost —
              sdílíme osobní údaje s platformami třetích stran. Tvoje údaje mohou být shromažďovány
              a sdíleny s třetími stranami výhradně na tvou žádost a podle tvého uvážení.
            </p>
            <p>
              Dal jsi souhlas se zpracováním osobních údajů k jednomu nebo více účelům.
            </p>
            <p>
              2. Poskytni nám potřebné informace, abychom mohli rychle a
              účinně reagovat na tvoje žádosti, obavy a otázky ke službám.
            </p>
            <p>
              K uplatnění oprávněných zájmů společnosti nebo uvedené třetí strany
              je zpracování osobních údajů nezbytné.
            </p>
            <p>
              3. Ke splnění právních a administrativních povinností je zpracování osobních údajů nezbytné.
            </p>
            <p>Ke splnění právních povinností musíme zpracovávat určité osobní údaje.</p>
            <p>
              4. Abychom zlepšovali služby, potřebujeme anonymizované údaje a musíme sledovat použití,
              včetně hlášení chyb.
            </p>
            <p>
              K ochraně oprávněných zájmů společnosti a externích poskytovatelů
              služeb je zpracování a uchovávání osobních údajů nezbytné.
            </p>
            <p>5. Je to nutné k předcházení podvodům a zneužití služby.</p>
            <p>
              K zajištění oprávněných zájmů společnosti a poskytovatelů služeb třetích stran
              je zpracování a uchovávání osobních údajů nezbytné.
            </p>
            <p>
              6. Požadavky služby nás zavazují sledovat a zpracovávat údaje pro
              rozvoj byznysu, strategická rozhodnutí, monitoring, soulad s předpisy a
              další obchodní činnost.
            </p>
            <p>
              S cílem chránit oprávněné zájmy společnosti a externích poskytovatelů
              služeb je zpracování a uchovávání osobních údajů nezbytné.
            </p>
            <p>
              7. Používáme statistické a analytické nástroje k podpoře rozhodnutí v širokém
              spektru služeb a ve strategickém plánování.
            </p>
            <p>
              K ochraně oprávněných zájmů společnosti a našich externích poskytovatelů
              služeb je zpracování a uchovávání osobních údajů nezbytné.
            </p>
            <p>
              8. V rozsahu nezbytném k ochraně práv, majetku a zájmů
              společnosti a poskytovatelů služeb třetích stran, v souladu s místními předpisy a
              platnými regulacemi, smlouvami a vlastními podmínkami, můžeme zpracovávat
              osobní údaje. Takové zpracování probíhá výhradně podle nezbytných a
              stanovených postupů.
            </p>
            <p>
              K ochraně oprávněných zájmů společnosti a každého externího
              poskytovatele služeb je zpracování a uchovávání osobních údajů nezbytné.
            </p>
            <p class="bold-title">6. Sdílení osobních údajů s třetími stranami</p>
            <p>
              K uchovávání a zpracování IP adres, průzkumů a analýzy použití
              a souvisejících služeb může společnost sdílet anonymizované údaje
              s externími poskytovateli služeb.
            </p>
            <p>
              Na tvou žádost sdílíme některé poskytnuté osobní údaje s externími
              poskytovateli služeb. V takovém případě se zpracování řídí zásadami ochrany osobních údajů
              té společnosti. Může jít o různé digitální obchodní platformy.
            </p>
            <p>
              S cílem zlepšit zákaznický servis a obecně optimalizovat služby
              může společnost sdílet osobní údaje s přidruženými společnostmi a obchodními partnery.
            </p>
            <p>
              Když to vyžaduje právo nebo k ochraně práv a majetku společnosti a souvisejících
              třetích stran můžeme údaje sdílet s příslušnými právními nebo dohledovými orgány.
            </p>
            <p>
              V rámci zásadních obchodních operací, jako je prodej společnosti,
              získání investice nebo žádost o úvěr, mohou být příslušné údaje
              sdíleny zákonným a přiměřeným způsobem. Platí to i pro fúze, restrukturalizace,
              konsolidace nebo insolvenci společnosti v souladu se zákonem.
            </p>
            <p class="bold-title">7. Cookies a služby třetích stran</p>
            <p>
              K analýze webu a ve spolupráci s reklamními agenturami mohou být cookies a další
              podobné technologie používány v souladu s právem a běžnou praxí.
            </p>
            <p>
              Cookies — malé textové soubory uložené na zařízení při návštěvě webu — slouží k
              shromažďování informací o chování na webu, preferencích a dalších údajích. Jejich
              účelem je personalizace a zlepšení zážitku. Pomáhají zapamatovat tvoje
              nastavení a preference a přizpůsobit nabídku. Slouží také
              k analýze webu a statistikám pro plánování.
            </p>
            <p>
              Web obvykle používá dva typy cookies: relace, uložené
              jen po dobu relace prohlížeče a smazané po jeho zavření;
              a trvalé, které zůstanou i po skončení relace. Ty druhé
              umožňují webu rozpoznat tě jako vracejícího se návštěvníka a usnadnit použití.
            </p>
            <p class="bold-title">Typy cookies:</p>
            <p>Cookies mohou být používány podle potřeby v závislosti na účelu:</p>
            <p class="green">Typ cookie</p>
            <p>Tyto cookies jsou nezbytně nutné</p>
            <p class="green">Účel</p>
            <p>
              Cookies slouží k rozpoznání tě jako klienta, abychom mohli poskytnout informace,
              nastavení a služby, o které jsi požádal.
              Usnadňují také navigaci na webu a přístup k němu.
            </p>
            <p>
              Cookies používáme, aby zařízení mohlo stahovat a přehrávat obsah. Umožňují také
              přístup k nezbytným funkcím a návrat na dříve navštívené stránky.
            </p>
            <p class="green">Další informace</p>
            <p>
              Aby byl přístup k webu rychlý a jednoduchý, cookies uchovávají a zpracovávají některé
              osobní údaje, např. uživatelské jméno a datum posledního přístupu, pokud web požádáš, aby
              si tě zapamatoval při přihlášení.
            </p>
            <p>Relace cookies se smažou po zavření prohlížeče.</p>
            <p class="green">Typ cookie</p>
            <p>Funkční cookies</p>
            <p class="green">Účel</p>
            <p>
              Díky cookies můžeme bezpečně ukládat a uplatňovat tvoje nastavení a preference.
              Umožňují také rozpoznat tě při další návštěvě.
            </p>
            <p class="green">Další informace</p>
            <p>
              Trvalé cookies zůstanou po relaci prohlížeče a zůstávají aktivní do
              data vypršení.
            </p>
            <p class="green">Typ cookie</p>
            <p>Výkonnostní cookies</p>
            <p class="green">Účel</p>
            <p>
              Abychom zlepšovali služby, shromažďujeme statistiky pomocí cookies. Tyto soubory
              nám dávají informace o výkonu webu a jeho použití.
            </p>
            <p class="green">Další informace</p>
            <p>
              Všechny informace uložené přes cookies jsou anonymní a neumožňují identifikovat osoby.
            </p>
            <p>
              Relace cookies se smažou po zavření prohlížeče, zatímco trvalé
              zůstávají aktivní do data vypršení nebo neurčitě, pokud je ručně nesmažeš.
            </p>
            <p>Blokování nebo mazání cookies</p>
            <p>
              Pokud chceš cookies odstranit nebo zablokovat, udělej to v
              nastavení prohlížeče. Následující odkazy obsahují podrobné pokyny pro nejoblíbenější prohlížeče.
            </p>
            <p class="circle">Firefox</p>
            <p class="circle">Microsoft Edge</p>
            <p class="circle">Google Chrome</p>
            <p class="circle">Safari</p>
            <p>
              Blokování cookies může způsobit, že některé funkce webu nebudou fungovat podle záměru.
            </p>
            <p class="bold-title">Jak dlouho osobní údaje uchováváme</p>
            <p>
              Osobní údaje uchováváme jen tak dlouho, jak je to striktně nutné k požadovaným
              procesům, jak je uvedeno v jiných částech těchto zásad. Delší uchovávání je možné, pokud
              to vyžadují místní předpisy nebo vnitřní zásady společnosti.
            </p>
            <p>
              Tvoje osobní údaje se na tvou žádost a podle tvého uvážení sdílejí s obchodními platformami
              třetích stran po dobu 12 měsíců. Po uplynutí této doby a s tvým
              souhlasem se údaje sdílejí dalších 12 měsíců.
            </p>
            <p>
              Naše postupy počítají s pravidelným posouzením všech osobních údajů, aby se zjistilo, zda
              jsou stále potřeba.
            </p>
            <p class="bold-title">
              9. Předávání osobních údajů do třetích zemí nebo mezinárodním organizacím
            </p>
            <p>
              Když je to potřeba ke službám a/nebo z bezpečnostních důvodů, můžeme předávat
              osobní údaje do jiných zemí (mimo tvoje) a mezinárodním organizacím
              podle komplexních bezpečnostních protokolů. Opatření ochrany údajů uplatňujeme na
              vysoké úrovni, abychom chránili informace a zajistili přístup k právním prostředkům
              a zákonným právům kdykoli.
            </p>
            <p>
              V Evropském hospodářském prostoru (EHP) mají všichni obyvatelé ochranu údajů a záruky.
            </p>
            <p class="circle">
              Předávání vždy probíhá pod jurisdikcí a dohledem EU, v souladu
              se standardy a protokoly ochrany údajů podle čl. 45 odst. 3 nařízení
              (EU) 2016/679 Evropského parlamentu a Rady ze dne 27. dubna 2016
              (&ldquo;GDPR&rdquo;).
            </p>
            <p class="circle">
              Každé předání údajů mezi veřejnými orgány probíhá podle čl.
              46 odst. 2. Jde o právně závaznou a vymahatelnou dohodu.
            </p>
            <p class="circle">
              Standardní smluvní doložky Evropské komise podle čl. 46 odst. 2 písm. c GDPR stanoví
              podmínky předávání a taková předávání probíhají v souladu s
              nimi. Ustanovení si můžeš prohlédnout na
              <a
                target="_blank"
                href="https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en"
                >https://ec.europa.eu/info/law/law-topic/data-protection/data-transfers-outside-eu/model-contracts-transfer-personal-data-third-countries_en</a
              >.
            </p>
            <p>
              Více o konkrétních bezpečnostních opatřeních, která společnost přijala, aby
              chránila osobní údaje při předávání do třetích zemí, můžeš poslat žádost
              e-mailem na <a href="mailto:support@<?= e(site_domain()) ?>">support@<?= e(site_domain()) ?></a>
            </p>
            <p class="bold-title">10. Ochrana osobních údajů</p>
            <p>
              Osobní údaje chrání technická a organizační opatření nejvyšší
              úrovně, uplatňovaná podle referenčních postupů. Tyto postupy účinně
              brání zničení údajů v důsledku protiprávních nebo nepředvídaných událostí i
              jejich ztrátě nebo změně.
            </p>
            <p>
              Ačkoli uplatňujeme maximální péči a postupy splňující nejpřísnější
              standardy ochrany údajů a právo, za žádných okolností nelze zaručit,
              že osobní údaje jsou bezchybné. Proto nepřijímáme odpovědnost, pokud
              osobní údaje utrpí náhodnou, nehmotnou nebo následnou škodu nebo zveřejnění.
              Zahrnuje to situace mimo naši kontrolu, například zveřejnění kvůli chybám přenosu,
              neoprávněnému přístupu třetích stran nebo podobným příčinám.
            </p>
            <p>
              Když obdržíme právně závazné žádosti dohledových orgánů nebo jiných
              orgánů se zákonnými pravomocemi, můžeme být povinni předat tvoje osobní
              údaje těmto orgánům. Po předání na základě právní povinnosti nemáme
              vliv na to, jak tyto orgány údaje zpracovávají, uchovávají nebo chrání.
            </p>
            <p>
              Vše přenášené přes internet, včetně osobních údajů, nese určité
              riziko zachycení a není 100% bezpečné. Společnost nemůže zaručit
              bezpečnost údajů odesílaných online.
            </p>
            <p class="bold-title">11. Odkazy na weby třetích stran</p>
            <p>
              Na tomto webu najdeš odkazy na aplikace a weby třetích stran. Vezmi na vědomí,
              že nejsou spojeny se společností ani pod její kontrolou a že naše
              zásady ochrany osobních údajů se na tyto třetí strany nevztahují. Fungují podle vlastních
              postupů a priorit při shromažďování a zpracování osobních údajů, proto
              za tuto činnost neneseme odpovědnost. Používej je podle vlastního uvážení.
            </p>
            <p>
              Vždy zkontroluj zásady ochrany osobních údajů společnosti nebo služby, když navštívíš její web
              než poskytneš osobní údaje. Posuď, zda jejich pravidla shromažďování, použití a
              zpracování odpovídají tvým preferencím. Pokud údaje sdílíš, učiň to
              přímo u poskytovatele.
            </p>
            <p class="bold-title">12. Aktualizace zásad</p>
            <p>
              Vyhrazujeme si právo tyto zásady kdykoli aktualizovat nebo změnit. Informujeme tě
              o změnách přes web a příslušné kanály. Aktualizovaná verze zásad
              ochrany osobních údajů bude zveřejněna na webu a změněné zásady platí
              od zveřejnění, pokud není uvedeno jinak.
            </p>
            <p class="bold-title">13. Tvoje práva k osobním údajům</p>
            <p>
              Máš kontrolu a poslední slovo nad použitím všech svých osobních údajů. To zahrnuje
              ověření správnosti, opravu chyb a právo na výmaz nebo
              omezení našeho zpracování — co do rozsahu i povahy.
            </p>
            <p>Obyvatelé EHP na této stránce najdou informace, které se jich týkají:</p>
            <p>
              Tvoje osobní údaje chrání práva popsaná zde. Odesláním e-mailu na
              adresu níže můžeš tato práva uplatnit okamžitě.
            </p>
            <p>Přístup ke svým právům</p>
            <p>
              Pokud poskytnuté osobní údaje jsou správné, můžeš k nim mít přístup kdykoli. Všechny
              osobní údaje, které zpracováváme, máme k dispozici, a tedy ověřitelné.
            </p>
            <p>
              Kdykoli můžeš požádat o osobní údaje k ověření a budou ti
              zpřístupněny v elektronické podobě. Pokud požádáš o další kopie
              zpracovávaných údajů nad již poskytnutou kopii, může být účtován přiměřený poplatek.
            </p>
            <p>
              Práva uznaná zákonem a zásadami ochrany osobních údajů nesmějí zasahovat do práv třetích
              stran. Společnost si vyhrazuje právo odepřít nebo omezit přístup k osobním údajům,
              pokud by to porušovalo práva a svobody třetích stran.
            </p>
            <p>Právo na opravu</p>
            <p>
              Jakákoli chyba v osobních údajích, ať z opomenutí, nebo nepřesné informace,
              můžeš opravit ty nebo společnost, aby bylo zpracování správné.
            </p>
            <p>Právo na výmaz údajů</p>
            <p>
              Máš právo žádat výmaz osobních údajů v následujících
              případech: 1) pokud byly zpracovány bez souhlasu nebo mimo zákonné meze; 2)
              na tvou žádost, pokud je chceš smazat a společnost nemá právní povinnost
              je uchovávat; 3) pokud namítáš proti zpracování nebo odvoláš souhlas, i když je
              zákonné a opřené o naše zájmy nebo zájmy třetích stran; a 4) pokud zákon
              nám ukládá povinnost je smazat.
            </p>
            <p>
              Právo na výmaz se neuplatní, pokud tomu brání právní povinnosti EU nebo
              členského státu. Neuplatní se ani, pokud jsou údaje potřeba k uplatnění nebo
              obraně nároků.
            </p>
            <p>Právo na omezení zpracování</p>
            <p>
              Máš právo žádat omezení zpracování osobních údajů, pokud se domníváš,
              že obsahují nepřesnosti.
            </p>
            <p>
              Pokud požádáš o omezení použití osobních údajů, omezíme zpracování, s výjimkou
              následujících případů: 1) pokud tomu brání právo Evropské unie nebo jednoho z jejích
              členských států; 2) s tvým souhlasem, je-li to potřeba k obraně nebo uplatnění
              nároků; 3) k ochraně práv jiné fyzické osoby.
            </p>
            <p>Právo na přenositelnost údajů</p>
            <p>
              Máš právo na přístup a kontrolu poskytnutých osobních údajů v rozsahu,
              v jakém jsi dal souhlas s jejich shromažďováním, a pokud zpracování
              probíhá v automatizovaných systémech.
            </p>
            <p>
              Máš právo žádat předání všech osobních údajů jiné společnosti nebo
              organizaci, pokud je to technicky možné. Toto právo nezasahuje do
              práva na výmaz údajů. Neuplatní se, pokud by jeho výkon porušil práva
              nebo svobody jiné fyzické osoby.
            </p>
            <p>Právo vznést námitku proti zpracování</p>
            <p>
              Aniž by bylo dotčeno právo společnosti uplatňovat oprávněné zájmy nebo
              zájmy třetí strany jednající jako poskytovatel, máš právo vznést námitku proti
              zpracování a žádat jeho ukončení. Toto právo se neuplatní, pokud existuje naléhavá
              právní potřeba pokračovat ve zpracování — ať k obraně proti nárokům, nebo k jejich
              uplatnění. V takových případech můžeme pokračovat ve zpracování tvých údajů.
            </p>
            <p>
              Kdykoli můžeš vznést námitku proti zpracování osobních údajů pro účely přímého marketingu.
            </p>
            <p>
              Právo odvolat souhlas
            </p>
            <p>
              Souhlas se zpracováním osobních údajů můžeš odvolat kdykoli,
              s okamžitým účinkem. Odvolání nepůsobí zpětně vůči zpracování
              provedenému před odvoláním.
            </p>
            <p>
              Pokud jsi z jakéhokoli důvodu nespokojen, máš právo podat stížnost
              právnímu, dohledovému nebo jinému kontrolnímu orgánu.
            </p>
            <p>
              Pokud se domníváš, že tvá práva a svobody související se zpracováním osobních údajů
              byla porušena, členské státy EU mají dohledové a kontrolní
              orgány k tomuto účelu. Můžeš podat stížnost těmto orgánům, pokud to uznáš za vhodné.
            </p>
            <p>
              Bod 13 popisuje situace, kdy tvá práva k osobním údajům mohou být
              omezena právem Evropské unie nebo členských států.
            </p>
            <p>
              Když obdržíme tvou žádost ohledně osobních údajů a jejich zpracování, dáme ti
              přístup k požadovaným informacím, jak je uvedeno v bodě 13 těchto zásad.
              Tuto lhůtu můžeme prodloužit až o dva měsíce podle rozsahu žádosti
              a povahy dotazu. V případě potřeby tě o prodloužení informujeme
              do jednoho měsíce od obdržení žádosti.
            </p>
            <p>
              Požadované informace pošleme elektronicky a zdarma, pokud to
              není v rozporu se zákonem nebo ustanovením bodu 13. Vyhrazujeme si právo
              účtovat přiměřený poplatek nebo žádost odmítnout, pokud bude shledána jako neopodstatněná, nadměrná nebo opakovaná.
            </p>
            <p>
              Vyhrazujeme si právo požadovat dodatečné ověření totožnosti, pokud existují
              důvodné pochybnosti o osobě podávající žádost o osobní údaje, abychom
              chránili a zajistili bezpečnost údajů.
            </p>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
