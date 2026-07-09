<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Zásady ochrany soukromí');
$page_description = 'Zjistěte, jak ' . SITE_NAME . ' shromažďuje, používá a chrání vaše osobní údaje.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Zásady ochrany soukromí</h1>
      <p class="lead">Poslední aktualizace: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Tyto Zásady ochrany soukromí popisují, jak <?= e(SITE_NAME) ?> („my“) shromažďuje a zpracovává osobní údaje při používání našeho webu a služeb.</p>

      <h2>Jaké informace shromažďujeme</h2>
      <p>Můžeme shromažďovat: jméno, e-mailovou adresu, telefonní číslo, zemi bydliště, IP adresu a informace, které nám poskytnete prostřednictvím formulářů nebo žádostí o podporu.</p>

      <h2>Jak vaše informace používáme</h2>
      <ul>
        <li>K vytvoření a správě vašeho účtu</li>
        <li>K zajištění přístupu na obchodní platformu a zákaznické podpory</li>
        <li>K plnění právních a regulatorních povinností</li>
        <li>K vylepšování našich služeb a prevenci podvodů</li>
      </ul>

      <h2>Zabezpečení dat</h2>
      <p>Zavádíme technická a organizační opatření včetně SSL šifrování a řízení přístupů, abychom vaše data chránili.</p>

      <h2>Vaše práva</h2>
      <p>Podle vaší jurisdikce můžete mít právo na přístup, opravu nebo výmaz osobních údajů. Pro uplatnění těchto práv kontaktujte <?= e(SUPPORT_EMAIL) ?>.</p>

      <h2>Kontakt</h2>
      <p>Máte dotazy k těmto zásadám? Napište nám na <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
