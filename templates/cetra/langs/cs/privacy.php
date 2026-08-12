<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Zásady ochrany osobních údajů');
$page_description = 'Jak ' . SITE_NAME . ' shromažďuje, používá a chrání vaše osobní údaje.';
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
    <nav class="nav-links" aria-label="Hlavní">
      <a href="<?= page_url() ?>#platform">Platforma</a>
      <a href="<?= page_url() ?>#how">Jak to funguje</a>
      <a href="<?= page_url() ?>#markets">Trhy</a>
      <a href="<?= page_url() ?>#faq">Často kladené otázky</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Začít</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Právní informace</span>
      <h1>Zásady ochrany osobních údajů</h1>
      <p class="lede">Jak <?= e(SITE_NAME) ?> shromažďuje, používá a chrání vaše osobní údaje.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Poslední aktualizace: leden 2025</p>

      <h2>1. Úvod</h2>
      <p><?= e(SITE_NAME) ?> („my“, „náš“, „naše“) se zavazuje chránit soukromí návštěvníků a klientů. Tyto Zásady ochrany osobních údajů vysvětlují, jaké osobní údaje shromažďujeme, proč a jak je zpracováváme, když používáte naše webové stránky a služby.</p>

      <h2>2. Informace, které shromažďujeme</h2>
      <ul>
        <li>Údaje o totožnosti — jméno, datum narození, doklady totožnosti vydané státem pro registraci a compliance KYC/AML.</li>
        <li>Kontaktní údaje — e-mailová adresa, telefonní číslo, poštovní adresa.</li>
        <li>Finanční údaje — platební údaje, historie transakcí, informace o původu prostředků.</li>
        <li>Technické údaje — IP adresa, typ prohlížeče, identifikátory zařízení, cookies a analytika použití.</li>
      </ul>

      <h2>3. Jak používáme vaše údaje</h2>
      <ul>
        <li>K ověření totožnosti a plnění regulačních povinností.</li>
        <li>K poskytování, údržbě a zlepšování naší platformy a služeb.</li>
        <li>Ke zpracování plateb a detekci podvodné činnosti.</li>
        <li>Ke komunikaci s vámi ohledně účtu, aktualizací a požadavků na podporu.</li>
        <li>K zasílání marketingových sdělení, pokud jste souhlasili (odhlášení kdykoli možné).</li>
      </ul>

      <h2>4. Právní základ</h2>
      <p>Osobní údaje zpracováváme na základě jednoho nebo více následujících právních důvodů: plnění smlouvy, splnění právní povinnosti, naše oprávněné zájmy nebo váš souhlas.</p>

      <h2>5. Sdílení a zveřejnění</h2>
      <p>Osobní údaje můžeme sdílet s regulovanými poskytovateli plateb, partnery ověření KYC/AML, poskytovateli cloudové infrastruktury, profesionálními poradci a příslušnými orgány, pokud to vyžaduje zákon. Osobní údaje neprodáváme.</p>

      <h2>6. Mezinárodní přenosy</h2>
      <p>Když jsou osobní údaje přenášeny mimo vaši jurisdikci, zajišťujeme vhodné záruky včetně standardních smluvních doložek.</p>

      <h2>7. Uchovávání údajů</h2>
      <p>Osobní údaje uchováváme po dobu potřebnou k poskytování služeb a plnění právních, regulačních a účetních požadavků — typicky alespoň pět let po uzavření účtu.</p>

      <h2>8. Vaše práva</h2>
      <p>S výhradou platného práva můžete žádat o přístup, opravu, výmaz, omezení nebo přenositelnost osobních údajů a můžete vznést námitku proti určitému zpracování. Pro uplatnění těchto práv nás kontaktujte na níže uvedené adrese.</p>

      <h2>9. Cookies</h2>
      <p>Používáme nezbytné a analytické cookies k provozu webu a pochopení použití. Cookies můžete spravovat v nastavení prohlížeče.</p>

      <h2>10. Bezpečnost</h2>
      <p>Uplatňujeme administrativní, technická a fyzická opatření navržená k ochraně osobních údajů před neoprávněným přístupem, zveřejněním, změnou nebo zničením. Žádný systém není dokonale bezpečný a nemůžeme zaručit absolutní bezpečnost.</p>

      <h2>11. Změny</h2>
      <p>Tyto Zásady můžeme čas od času aktualizovat. Nejnovější verze bude vždy dostupná na této stránce s aktualizovaným datem.</p>

      <h2>12. Kontakt</h2>
      <p>Pro otázky ochrany soukromí nebo uplatnění práv kontaktujte tým ochrany údajů <?= e(SITE_NAME) ?> prostřednictvím naší <a href="<?= page_url('contacts.php') ?>">kontaktní stránky</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Zpět na úvodní stránku</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Všechna práva vyhrazena ·
      <a href="<?= page_url('privacy.php') ?>">Soukromí</a> ·
      <a href="<?= page_url('conditions.php') ?>">Podmínky</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
