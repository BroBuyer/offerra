<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Zásady ochrany soukromí ᐉ ' . SITE_NAME;
$page_description = 'Jak ' . SITE_NAME . ' shromažďuje, používá a chrání vaše osobní údaje.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Právní informace</span>
    <h1>Zásady ochrany soukromí</h1>
    <p class="rmct9">Jak <?= e(SITE_NAME) ?> shromažďuje, používá a chrání vaše osobní údaje.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Poslední aktualizace: leden 2025</p>

    <h2>1. Úvod</h2>
    <p><?= e(SITE_NAME) ?> („my“, „nás“, „naše“) se zavazuje chránit soukromí návštěvníků a klientů. Tyto zásady vysvětlují, jaké osobní údaje shromažďujeme, proč a jak je zpracováváme při používání webu a služeb.</p>

    <h2>2. Jaké údaje shromažďujeme</h2>
    <ul>
      <li><strong>Identifikační údaje</strong> — jméno, datum narození, doklad totožnosti pro ověření a soulad s KYC/AML.</li>
      <li><strong>Kontaktní údaje</strong> — e-mail, telefon, poštovní adresa.</li>
      <li><strong>Finanční údaje</strong> — platební údaje, historie transakcí, informace o zdroji prostředků.</li>
      <li><strong>Technické údaje</strong> — IP adresa, typ prohlížeče, identifikátory zařízení, cookies a analytika používání.</li>
    </ul>

    <h2>3. Jak údaje používáme</h2>
    <ul>
      <li>K ověření identity a plnění regulatorních povinností.</li>
      <li>K poskytování, údržbě a zlepšování platformy a služeb.</li>
      <li>Ke zpracování plateb a odhalování podvodů.</li>
      <li>Ke komunikaci o účtu, aktualizacích a požadavcích na podporu.</li>
      <li>K marketingovým sdělením se souhlasem (odhlásit se můžete kdykoli).</li>
    </ul>

    <h2>4. Právní základ</h2>
    <p>Osobní údaje zpracováváme na jednom nebo více základech: plnění smlouvy, zákonná povinnost, oprávněné zájmy nebo váš souhlas.</p>

    <h2>5. Sdílení a zpřístupnění</h2>
    <p>Osobní údaje můžeme sdílet s regulovanými poskytovateli plateb, partnery KYC/AML, poskytovateli cloudu, odbornými poradci a příslušnými orgány, kde to vyžaduje zákon. Osobní údaje neprodáváme.</p>

    <h2>6. Mezinárodní přenosy</h2>
    <p>Pokud se údaje přenášejí mimo vaši jurisdikci, zajistíme vhodné záruky včetně standardních smluvních doložek.</p>

    <h2>7. Uchovávání údajů</h2>
    <p>Údaje uchováváme, dokud je potřebujeme k službám a k právním, regulatorním a účetním požadavkům — obvykle alespoň pět let po uzavření účtu.</p>

    <h2>8. Vaše práva</h2>
    <p>Podle platného práva můžete žádat přístup, opravu, výmaz, omezení nebo přenositelnost údajů a můžete namítat proti určitému zpracování. Práva uplatníte na adrese níže.</p>

    <h2>9. Cookies</h2>
    <p>Používáme nezbytné a analytické cookies k provozu webu a pochopení používání. Cookies spravujete v nastavení prohlížeče.</p>

    <h2>10. Zabezpečení</h2>
    <p>Uplatňujeme administrativní, technická a fyzická opatření proti neoprávněnému přístupu, zveřejnění, změně nebo zničení údajů. Žádný systém není dokonale bezpečný a absolutní bezpečnost negarantujeme.</p>

    <h2>11. Změny</h2>
    <p>Tyto zásady můžeme čas od času aktualizovat. Nejnovější verze je vždy na této stránce s datem aktualizace.</p>

    <h2>12. Kontakt</h2>
    <p>S otázkami k soukromí nebo k uplatnění práv kontaktujte tým ochrany údajů <?= e(SITE_NAME) ?> přes kontaktní stránku.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Zpět na úvod</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
