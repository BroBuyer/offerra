<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Zásady ochrany súkromia ᐉ ' . SITE_NAME;
$page_description = 'Ako ' . SITE_NAME . ' zhromažďuje, používa a chráni vaše osobné údaje.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Právne informácie</span>
    <h1>Zásady ochrany súkromia</h1>
    <p class="rmct9">Ako <?= e(SITE_NAME) ?> zhromažďuje, používa a chráni vaše osobné údaje.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Posledná aktualizácia: január 2025</p>

    <h2>1. Úvod</h2>
    <p><?= e(SITE_NAME) ?> („my“, „nás“, „naše“) sa zaväzuje chrániť súkromie návštevníkov a klientov. Tieto zásady vysvetľujú, aké osobné údaje zhromažďujeme, prečo a ako ich spracúvame pri používaní webu a služieb.</p>

    <h2>2. Aké údaje zhromažďujeme</h2>
    <ul>
      <li><strong>Identifikačné údaje</strong> — meno, dátum narodenia, doklad totožnosti na overenie a súlad s KYC/AML.</li>
      <li><strong>Kontaktné údaje</strong> — e-mail, telefón, poštová adresa.</li>
      <li><strong>Finančné údaje</strong> — platobné údaje, história transakcií, informácie o zdroji prostriedkov.</li>
      <li><strong>Technické údaje</strong> — IP adresa, typ prehliadača, identifikátory zariadenia, cookies a analytika používania.</li>
    </ul>

    <h2>3. Ako údaje používame</h2>
    <ul>
      <li>Na overenie identity a plnenie regulačných povinností.</li>
      <li>Na poskytovanie, údržbu a zlepšovanie platformy a služieb.</li>
      <li>Na spracovanie platieb a odhaľovanie podvodov.</li>
      <li>Na komunikáciu o účte, aktualizáciách a požiadavkách na podporu.</li>
      <li>Na marketingové oznámenia so súhlasom (odhlásiť sa môžete kedykoľvek).</li>
    </ul>

    <h2>4. Právny základ</h2>
    <p>Osobné údaje spracúvame na jednom alebo viacerých základoch: plnenie zmluvy, zákonná povinnosť, oprávnené záujmy alebo váš súhlas.</p>

    <h2>5. Zdieľanie a sprístupnenie</h2>
    <p>Osobné údaje môžeme zdieľať s regulovanými poskytovateľmi platieb, partnermi KYC/AML, poskytovateľmi cloudu, odbornými poradcami a príslušnými orgánmi, kde to vyžaduje zákon. Osobné údaje nepredávame.</p>

    <h2>6. Medzinárodné prenosy</h2>
    <p>Ak sa údaje prenášajú mimo vašu jurisdikciu, zabezpečíme vhodné záruky vrátane štandardných zmluvných doložiek.</p>

    <h2>7. Uchovávanie údajov</h2>
    <p>Údaje uchovávame, kým ich potrebujeme na služby a na právne, regulačné a účtovné požiadavky — zvyčajne aspoň päť rokov po uzavretí účtu.</p>

    <h2>8. Vaše práva</h2>
    <p>Podľa platného práva môžete žiadať prístup, opravu, výmaz, obmedzenie alebo prenositeľnosť údajov a môžete namietať proti určitému spracúvaniu. Práva uplatníte na adrese nižšie.</p>

    <h2>9. Cookies</h2>
    <p>Používame nevyhnutné a analytické cookies na prevádzku webu a pochopenie používania. Cookies spravujete v nastavení prehliadača.</p>

    <h2>10. Zabezpečenie</h2>
    <p>Uplatňujeme administratívne, technické a fyzické opatrenia proti neoprávnenému prístupu, zverejneniu, zmene alebo zničeniu údajov. Žiadny systém nie je dokonale bezpečný a absolútnu bezpečnosť negarantujeme.</p>

    <h2>11. Zmeny</h2>
    <p>Tieto zásady môžeme čas od času aktualizovať. Najnovšia verzia je vždy na tejto stránke s dátumom aktualizácie.</p>

    <h2>12. Kontakt</h2>
    <p>S otázkami k súkromiu alebo na uplatnenie práv kontaktujte tím ochrany údajov <?= e(SITE_NAME) ?> cez kontaktnú stránku.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Späť na úvod</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
