import fs from 'node:fs';
import path from 'node:path';
import https from 'node:https';

const repo = path.resolve('.');

function copyDir(src, dest) {
    fs.cpSync(src, dest, { recursive: true });
}

function walkPhpFiles(dir) {
    const files = [];
    for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
        const full = path.join(dir, entry.name);
        if (entry.isDirectory()) {
            files.push(...walkPhpFiles(full));
        } else if (entry.name.endsWith('.php')) {
            files.push(full);
        }
    }
    return files;
}

// Czech → Slovak (longer phrases first when applying).
const translations = [
    ['Často kladené otázky', 'Často kladené otázky'],
    ['Již jste registrováni', 'Už ste zaregistrovaní'],
    ['Vaši žádost u', 'Vašu žiadosť u'],
    ['jsme obdrželi. Očekávejte hovor od našeho specialisty.', 'sme prijali. Očakávajte hovor od nášho špecialistu.'],
    ['Otevřete účet za 2 minuty', 'Otvorte účet za 2 minúty'],
    ['Vytvořte si účet zdarma', 'Vytvorte si účet zadarmo'],
    ['AI obchodní platforma', 'AI obchodná platforma'],
    ['Obchodujte chytřeji.', 'Obchodujte múdrejšie.'],
    ['Reagujte rychleji.', 'Reagujte rýchlejšie.'],
    ['Nový standard pro krypto a multi-tržní obchodování.', 'Nový štandard pre krypto a multi-trhové obchodovanie.'],
    ['Pokročilé zabezpečení, transparentní poplatky,', 'Pokročilé zabezpečenie, transparentné poplatky,'],
    ['AI řízené insighty a rozhraní, které vás nebrzdí.', 'AI riadené insighty a rozhranie, ktoré vás nebrzdí.'],
    ['Zabezpečeno SSL', 'Zabezpečené SSL'],
    ['Podpora 24/7', 'Podpora 24/7'],
    ['Rychlá exekuce', 'Rýchla exekúcia'],
    ['Začít obchodovat', 'Začať obchodovať'],
    ['Statistiky platformy', 'Štatistiky platformy'],
    ['Dostupné měny', 'Dostupné meny'],
    ['Ověření uživatelé', 'Overení používatelia'],
    ['Objem obchodování', 'Objem obchodovania'],
    ['Podporované země', 'Podporované krajiny'],
    ['Přehled obchodní platformy', 'Prehľad obchodnej platformy'],
    ['Obchodní platforma', 'Obchodná platforma'],
    ['Profesionální grafy.', 'Profesionálne grafy.'],
    ['Připraveno pro mobil.', 'Pripravené pre mobil.'],
    ['Čisté rozhraní inspirované moderní burzou', 'Čisté rozhranie inšpirované modernou burzou'],
    ['data BTC/USDT v reálném čase, správa portfolia', 'dáta BTC/USDT v reálnom čase, správa portfólia'],
    ['a obchodování na jedno kliknutí.', 'a obchodovanie na jedno kliknutie.'],
    ['Navrženo tak, aby vám dodalo jistotu už při prvním přihlášení.', 'Navrhnuté tak, aby vám dodalo istotu už pri prvom prihlásení.'],
    ['Svíčkové grafy v reálném čase', 'Sviečkové grafy v reálnom čase'],
    ['Portfolio a P/L na první pohled', 'Portfólio a P/L na prvý pohľad'],
    ['Zabezpečený účetní dashboard', 'Zabezpečený účtovný dashboard'],
    ['Vyzkoušet platformu', 'Vyskúšať platformu'],
    ['Vše, co potřebujete pro jisté obchodování', 'Všetko, čo potrebujete na isté obchodovanie'],
    ['Bezpečnost, rychlost a inteligence', 'Bezpečnosť, rýchlosť a inteligencia'],
    ['v přehledné platformě navržené pro moderní tradery.', 'v prehľadnej platforme navrhnutej pre moderných traderov.'],
    ['Zabezpečení na úrovni banky', 'Zabezpečenie na úrovni banky'],
    ['SSL šifrování, 2FA a bezpečná správa prostředků chrání vaše data i kapitál v každém kroku.', 'SSL šifrovanie, 2FA a bezpečná správa prostriedkov chránia vaše dáta aj kapitál v každom kroku.'],
    ['AI tržní signály', 'AI trhové signály'],
    ['Přesné insighty v reálném čase vám pomáhají odhalit příležitosti a dělat rychlejší, informovaná rozhodnutí.', 'Presné insighty v reálnom čase vám pomáhajú odhaliť príležitosti a robiť rýchlejšie, informované rozhodnutia.'],
    ['Automatizované obchodování', 'Automatizované obchodovanie'],
    ['AI asistovaní boti pracují 24/7 na efektivní exekuci strategií, zatímco vy si zachováváte kontrolu.', 'AI asistovaní boti pracujú 24/7 na efektívnej exekúcii stratégií, zatiaľ čo vy si zachovávate kontrolu.'],
    ['Přístup na více trhů', 'Prístup na viac trhov'],
    ['Obchodujte kryptoměny, forex, akcie i komodity v jednom sjednoceném prostředí.', 'Obchodujte kryptomeny, forex, akcie aj komodity v jednom zjednotenom prostredí.'],
    ['Nízká latence exekuce', 'Nízka latencia exekúcie'],
    ['Optimalizovaná infrastruktura pro stabilní provedení pokynů i během vysoké tržní volatility.', 'Optimalizovaná infraštruktúra pre stabilné vykonanie príkazov aj počas vysokej trhovej volatility.'],
    ['Čisté rozhraní', 'Čisté rozhranie'],
    ['Minimalistický design omezuje rušivé prvky, abyste se soustředili na strategii, ne na navigaci.', 'Minimalistický dizajn obmedzuje rušivé prvky, aby ste sa sústredili na stratégiu, nie na navigáciu.'],
    ['Trhy v reálném čase', 'Trhy v reálnom čase'],
    ['Obchodujte Bitcoin, Ethereum a další aktiva', 'Obchodujte Bitcoin, Ethereum a ďalšie aktíva'],
    ['Ceny v reálném čase, pokročilé indikátory a profesionální přehled trhů, které vás zajímají.', 'Ceny v reálnom čase, pokročilé indikátory a profesionálny prehľad trhov, ktoré vás zaujímajú.'],
    ['Vstoupit na trhy', 'Vstúpiť na trhy'],
    ['Tržní ceny v reálném čase', 'Trhové ceny v reálnom čase'],
    ['Jak začít', 'Ako začať'],
    ['Od registrace k prvnímu obchodu během pár minut', 'Od registrácie k prvému obchodu počas pár minút'],
    ['Jasný proces bez zbytečné složitosti a nejistoty.', 'Jasný proces bez zbytočnej zložitosti a neistoty.'],
    ['Vytvořte si účet', 'Vytvorte si účet'],
    ['Zaregistrujte se pomocí svých údajů a získejte okamžitý bezpečný přístup k platformě.', 'Zaregistrujte sa pomocou svojich údajov a získajte okamžitý bezpečný prístup k platforme.'],
    ['Ověřte e-mail', 'Overte e-mail'],
    ['Potvrďte svou adresu a odemkněte plné obchodní prostředí.', 'Potvrďte svoju adresu a odomknite plné obchodné prostredie.'],
    ['Vložte prostředky', 'Vložte prostriedky'],
    ['Vložte minimálně', 'Vložte minimálne'],
    ['bankovním převodem, kartou nebo e-peněženkou.', 'bankovým prevodom, kartou alebo e-peňaženkou.'],
    ['Nastavte strategii', 'Nastavte stratégiu'],
    ['Zvolte úroveň rizika a preference — manuálně nebo s AI asistovanou automatizací.', 'Zvoľte úroveň rizika a preferencie — manuálne alebo s AI asistovanou automatizáciou.'],
    ['Začněte obchodovat', 'Začnite obchodovať'],
    ['Vstupte na trh s grafy v reálném čase, nástroji a podporou vždy, když ji potřebujete.', 'Vstúpte na trh s grafmi v reálnom čase, nástrojmi a podporou vždy, keď ju potrebujete.'],
    ['Otevřít účet nyní', 'Otvoriť účet teraz'],
    ['Vkládejte metodami, kterým už důvěřujete', 'Vkladajte metódami, ktorým už dôverujete'],
    ['Karty, e-peněženky a bankovní převody — chráněné SSL šifrováním.', 'Karty, e-peňaženky a bankové prevody — chránené SSL šifrovaním.'],
    ['vklady a financování účtu', 'vklady a financovanie účtu'],
    ['Důvěryhodná infrastruktura', 'Dôveryhodná infraštruktúra'],
    ['Postaveno s předními partnery v oboru', 'Postavené s poprednými partnermi v odvetví'],
    ['Co říkají tradeři', 'Čo hovoria traderi'],
    ['Registrace zabrala jen pár minut, poplatky jsou transparentní a podpora opravdu reaguje.', 'Registrácia zaberala len pár minút, poplatky sú transparentné a podpora naozaj reaguje.'],
    ['Plynulá a spolehlivá zkušenost — platforma, na které rád pokračuji.', 'Plynulá a spoľahlivá skúsenosť — platforma, na ktorej rád pokračujem.'],
    ['Nezávislý trader', 'Nezávislý trader'],
    ['Konečně jsem tu zkusila krypto obchodování — bez jediné lítosti.', 'Konečne som tu skúsila krypto obchodovanie — bez jedinej ľútosti.'],
    ['Rychlé nastavení a vše srozumitelně vysvětlené.', 'Rýchle nastavenie a všetko zrozumiteľne vysvetlené.'],
    ['Skvělá volba, hlavně pro začátek.', 'Skvelá voľba, hlavne na začiatok.'],
    ['Krypto nadšenec', 'Krypto nadšenec'],
    ['Stabilní a spolehlivé.', 'Stabilné a spoľahlivé.'],
    ['Otevření účtu je jednoduché, podmínky jasné a tým ví, co dělá.', 'Otvorenie účtu je jednoduché, podmienky jasné a tím vie, čo robí.'],
    ['Překvapivě komfortní obchodní zkušenost.', 'Prekvapivo komfortná obchodná skúsenosť.'],
    ['Operátor digitálních aktiv', 'Operátor digitálnych aktív'],
    ['Obchodování už nepůsobí tak složitě.', 'Obchodovanie už nepôsobí tak zložito.'],
    ['Jednoduchá registrace, jasné poplatky a podpora, když ji potřebuji.', 'Jednoduchá registrácia, jasné poplatky a podpora, keď ju potrebujem.'],
    ['Pro začátečníka je to zásadní rozdíl.', 'Pre začiatočníka je to zásadný rozdiel.'],
    ['Soukromá investorka', 'Súkromná investorka'],
    ['Jak mohu začít?', 'Ako môžem začať?'],
    ['Vytvořte si účet se základními údaji, dokončete krátké ověření a vložte minimálně', 'Vytvorte si účet so základnými údajmi, dokončite krátke overenie a vložte minimálne'],
    ['Získáte přístup k celé platformě — grafům v reálném čase, obchodním nástrojům i asistovanému onboardingu.', 'Získate prístup k celej platforme — grafom v reálnom čase, obchodným nástrojom aj asistovanému onboardingu.'],
    ['Jsou moje peníze a data v bezpečí?', 'Sú moje peniaze a dáta v bezpečí?'],
    ['Používáme SSL šifrování, dvoufázové ověření a bezpečné zpracování přes důvěryhodné poskytovatele.', 'Používame SSL šifrovanie, dvojfaktorové overenie a bezpečné spracovanie cez dôveryhodných poskytovateľov.'],
    ['Vaše osobní údaje zpracováváme podle přísných bezpečnostních pravidel na všech úrovních.', 'Vaše osobné údaje spracúvame podľa prísnych bezpečnostných pravidiel na všetkých úrovniach.'],
    ['Kdy mohu vybrat své zisky?', 'Kedy môžem vybrať svoje zisky?'],
    ['O výběr můžete požádat kdykoli ve svém dashboardu.', 'O výber môžete požiadať kedykoľvek vo svojom dashboarde.'],
    ['Zpracování obvykle trvá 1 až 3 pracovní dny.', 'Spracovanie zvyčajne trvá 1 až 3 pracovné dni.'],
    ['Poplatky i termíny jsou vždy uvedeny předem — bez překvapení.', 'Poplatky aj termíny sú vždy uvedené vopred — bez prekvapení.'],
    ['Potřebuji zkušenosti s obchodováním?', 'Potrebujem skúsenosti s obchodovaním?'],
    ['Vůbec ne.', 'Vôbec nie.'],
    ['Asistovaný onboarding, jednoduché návody a AI asistované nástroje vám pomohou učit se vlastním tempem.', 'Asistovaný onboarding, jednoduché návody a AI asistované nástroje vám pomôžu učiť sa vlastným tempom.'],
    ['Ať jste začátečník nebo zkušený trader, podpora je dostupná 24/7.', 'Či ste začiatočník alebo skúsený trader, podpora je dostupná 24/7.'],
    ['Na kterých trzích mohu obchodovat?', 'Na ktorých trhoch môžem obchodovať?'],
    ['Získejte přístup ke kryptoměnám, forexu, globálním akciím i komoditám v jednom rozhraní.', 'Získajte prístup ku kryptomenám, forexu, globálnym akciám aj komoditám v jednom rozhraní.'],
    ['Data v reálném čase, integrované analýzy a podpora manuálních i automatizovaných strategií.', 'Dáta v reálnom čase, integrované analýzy a podpora manuálnych aj automatizovaných stratégií.'],
    ['Klíčové možnosti na první pohled', 'Kľúčové možnosti na prvý pohľad'],
    ['AI obchodní engine', 'AI obchodný engine'],
    ['Pokročilá tržní analýza se strojovým učením', 'Pokročilá trhová analýza so strojovým učením'],
    ['Metody financování', 'Metódy financovania'],
    ['Platební karty, bankovní převody, PayPal, e-peněženky', 'Platobné karty, bankové prevody, PayPal, e-peňaženky'],
    ['Přístup podle zařízení', 'Prístup podľa zariadenia'],
    ['Web, tablet a mobil — plně responzivní', 'Web, tablet a mobil — plne responzívny'],
    ['Přesnost signálů', 'Presnosť signálov'],
    ['Až 85 % u podporovaných AI strategií', 'Až 85 % u podporovaných AI stratégií'],
    ['Krypto, forex, akcie, komodity', 'Krypto, forex, akcie, komodity'],
    ['Rychlé nastavení účtu s asistovaným ověřením', 'Rýchle nastavenie účtu s asistovaným overením'],
    ['Profesionální podpora 24/7 —', 'Profesionálna podpora 24/7 —'],
    ['Kontaktujte nás', 'Kontaktujte nás'],
    ['Hodnocení', 'Hodnotenie'],
    ['recenzí', 'recenzií'],
    ['Na základě', 'Na základe'],
    ['hodnocení', 'hodnotení'],
    ['Jste připraveni obchodovat na platformě navržené pro přehlednost?', 'Ste pripravení obchodovať na platforme navrhnutej pre prehľadnosť?'],
    ['Připojte se k privátním traderům i firmám, které s jistotou nakupují, prodávají a spravují digitální aktiva.', 'Pripojte sa k súkromným traderom aj firmám, ktoré s istotou nakupujú, predávajú a spravujú digitálne aktíva.'],
    ["define('SITE_LANG', 'cs')", "define('SITE_LANG', 'sk')"],
    ['Obchodujte kryptoměny, forex i globální trhy s', 'Obchodujte kryptomeny, forex aj globálne trhy s'],
    ['Analýza v reálném čase, AI asistované signály a platforma navržená pro rychlost a přehlednost.', 'Analýza v reálnom čase, AI asistované signály a platforma navrhnutá pre rýchlosť a prehľadnosť.'],
    ['Jméno', 'Meno'],
    ['Příjmení', 'Priezvisko'],
    ['E-mail', 'E-mail'],
    ['Telefon', 'Telefón'],
    ['Odeslat', 'Odoslať'],
    ['Vytvořit účet', 'Vytvoriť účet'],
    ['Registrace', 'Registrácia'],
    ['Kontakt', 'Kontakt'],
    ['Ochrana soukromí', 'Ochrana súkromia'],
    ['Obchodní podmínky', 'Obchodné podmienky'],
    ['Děkujeme', 'Ďakujeme'],
    ['Vaše žádost byla přijata', 'Vaša žiadosť bola prijatá'],
];

function translateContent(content) {
    let out = content;
    for (const [from, to] of translations) {
        out = out.split(from).join(to);
    }
    return out;
}

function setupMultilangSk(skDir) {
    const includes = path.join(skDir, 'includes');
    fs.writeFileSync(
        path.join(includes, 'config.php'),
        "<?php\n\ndefine('ACTIVE_LANG', 'sk');\nrequire_once __DIR__ . '/../../../includes/config.php';\n",
    );
    fs.writeFileSync(
        path.join(includes, 'header.php'),
        "<?php\n\nrequire_once __DIR__ . '/../../../includes/header.php';\n",
    );

    const formPath = path.join(includes, 'form.php');
    if (fs.existsSync(formPath)) {
        let form = fs.readFileSync(formPath, 'utf8');
        form = form.replace(/name="language" value="[^"]*"/, 'name="language" value="sk"');
        fs.writeFileSync(formPath, form);
    }
}

for (const template of ['default', 'multilang']) {
    const csDir = path.join(repo, 'templates', template, 'langs', 'cs');
    const skDir = path.join(repo, 'templates', template, 'langs', 'sk');

    if (!fs.existsSync(csDir)) {
        console.warn('Skip missing', csDir);
        continue;
    }

    if (fs.existsSync(skDir)) {
        fs.rmSync(skDir, { recursive: true, force: true });
    }

    copyDir(csDir, skDir);
    console.log('Copied', template, 'cs -> sk');

    if (template === 'multilang') {
        setupMultilangSk(skDir);
    } else {
        const configPath = path.join(skDir, 'includes', 'config.php');
        if (fs.existsSync(configPath)) {
            let config = fs.readFileSync(configPath, 'utf8');
            config = config.replace(/define\('SITE_LANG', 'cs'\)/, "define('SITE_LANG', 'sk')");
            fs.writeFileSync(configPath, config);
        }
    }

    for (const file of walkPhpFiles(skDir)) {
        const original = fs.readFileSync(file, 'utf8');
        const translated = translateContent(original);
        if (translated !== original) {
            fs.writeFileSync(file, translated);
        }
    }
}

// Flag icon for language switcher.
const flagDir = path.join(repo, 'templates/multilang/static/img/flags');
fs.mkdirSync(flagDir, { recursive: true });
const flagDest = path.join(flagDir, 'sk.png');

await new Promise((resolve, reject) => {
    const file = fs.createWriteStream(flagDest);
    https
        .get('https://flagcdn.com/24x18/sk.png', (res) => {
            if (res.statusCode && res.statusCode >= 400) {
                reject(new Error(`HTTP ${res.statusCode}`));
                res.resume();
                return;
            }
            res.pipe(file);
            file.on('finish', () => file.close(resolve));
        })
        .on('error', reject);
});

console.log('Downloaded sk.png flag');
console.log('Done.');
