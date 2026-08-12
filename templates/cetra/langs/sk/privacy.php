<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Zásady ochrany súkromia');
$page_description = 'Ako ' . SITE_NAME . ' zhromažďuje, používa a chráni vaše osobné údaje.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Hlavná">
      <a href="<?= page_url() ?>#platform">Platforma</a>
      <a href="<?= page_url() ?>#how">Ako to funguje</a>
      <a href="<?= page_url() ?>#markets">Trhy</a>
      <a href="<?= page_url() ?>#faq">Často kladené otázky</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Začať</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Právne informácie</span>
      <h1>Zásady ochrany súkromia</h1>
      <p class="lede">Ako <?= e(SITE_NAME) ?> zhromažďuje, používa a chráni vaše osobné údaje.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Posledná aktualizácia: január 2025</p>

      <h2>1. Úvod</h2>
      <p><?= e(SITE_NAME) ?> („my“, „náš“, „naše“) sa zaväzuje chrániť súkromie návštevníkov a klientov. Tieto Zásady ochrany súkromia vysvetľujú, aké osobné údaje zhromažďujeme, prečo a ako ich spracúvame, keď používate naše webové stránky a služby.</p>

      <h2>2. Informácie, ktoré zhromažďujeme</h2>
      <ul>
        <li>Údaje o totožnosti — meno, dátum narodenia, doklady totožnosti vydané štátom na registráciu a compliance KYC/AML.</li>
        <li>Kontaktné údaje — e-mailová adresa, telefónne číslo, poštová adresa.</li>
        <li>Finančné údaje — platobné údaje, história transakcií, informácie o pôvode prostriedkov.</li>
        <li>Technické údaje — IP adresa, typ prehliadača, identifikátory zariadení, cookies a analytika použitia.</li>
      </ul>

      <h2>3. Ako používame vaše údaje</h2>
      <ul>
        <li>Na overenie totožnosti a plnenie regulačných povinností.</li>
        <li>Na poskytovanie, údržbu a zlepšovanie našej platformy a služieb.</li>
        <li>Na spracovanie platieb a detekciu podvodnej činnosti.</li>
        <li>Na komunikáciu s vami ohľadom účtu, aktualizácií a požiadaviek na podporu.</li>
        <li>Na zasielanie marketingových oznámení, ak ste súhlasili (odhlásenie kedykoľvek možné).</li>
      </ul>

      <h2>4. Právny základ</h2>
      <p>Osobné údaje spracúvame na základe jedného alebo viacerých nasledujúcich právnych dôvodov: plnenie zmluvy, splnenie právnej povinnosti, naše oprávnené záujmy alebo váš súhlas.</p>

      <h2>5. Zdieľanie a zverejnenie</h2>
      <p>Osobné údaje môžeme zdieľať s regulovanými poskytovateľmi platieb, partnermi overenia KYC/AML, poskytovateľmi cloudovej infraštruktúry, profesionálnymi poradcami a príslušnými orgánmi, ak to vyžaduje zákon. Osobné údaje nepredávame.</p>

      <h2>6. Medzinárodné prenosy</h2>
      <p>Keď sú osobné údaje prenášané mimo vašu jurisdikciu, zabezpečujeme vhodné záruky vrátane štandardných zmluvných doložiek.</p>

      <h2>7. Uchovávanie údajov</h2>
      <p>Osobné údaje uchovávame po dobu potrebnú na poskytovanie služieb a plnenie právnych, regulačných a účtovných požiadaviek — typicky aspoň päť rokov po uzavretí účtu.</p>

      <h2>8. Vaše práva</h2>
      <p>S výhradou platného práva môžete žiadať o prístup, opravu, výmaz, obmedzenie alebo prenositeľnosť osobných údajov a môžete vzniesť námietku proti určitému spracovaniu. Na uplatnenie týchto práv nás kontaktujte na nižšie uvedenej adrese.</p>

      <h2>9. Cookies</h2>
      <p>Používame nevyhnutné a analytické cookies na prevádzku webu a pochopenie použitia. Cookies môžete spravovať v nastaveniach prehliadača.</p>

      <h2>10. Bezpečnosť</h2>
      <p>Uplatňujeme administratívne, technické a fyzické opatrenia navrhnuté na ochranu osobných údajov pred neoprávneným prístupom, zverejnením, zmenou alebo zničením. Žiadny systém nie je dokonale bezpečný a nemôžeme zaručiť absolútnu bezpečnosť.</p>

      <h2>11. Zmeny</h2>
      <p>Tieto Zásady môžeme čas od času aktualizovať. Najnovšia verzia bude vždy dostupná na tejto stránke s aktualizovaným dátumom.</p>

      <h2>12. Kontakt</h2>
      <p>Pri otázkach ochrany súkromia alebo uplatnení práv kontaktujte tím ochrany údajov <?= e(SITE_NAME) ?> prostredníctvom našej <a href="<?= page_url('contacts.php') ?>">kontaktnej stránky</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Späť na úvodnú stránku</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Všetky práva vyhradené ·
      <a href="<?= page_url('privacy.php') ?>">Súkromie</a> ·
      <a href="<?= page_url('conditions.php') ?>">Podmienky</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
