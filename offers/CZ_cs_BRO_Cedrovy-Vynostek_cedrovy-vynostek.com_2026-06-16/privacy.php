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
      <p class="lead">Poslední aktualizace: <?= date('d.m.Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Tato zásada popisuje, jak <?= e(SITE_NAME) ?> shromažďuje a zpracovává osobní údaje, když používáte náš web a služby.</p>

      <h2>Údaje, které shromažďujeme</h2>
      <p>Můžeme shromažďovat: jméno, e-mailovou adresu, telefonní číslo, zemi pobytu, IP adresu a informace poskytnuté prostřednictvím formulářů nebo žádostí o podporu.</p>

      <h2>Jak údaje používáme</h2>
      <ul>
        <li>Pro vytvoření a správu vašeho účtu</li>
        <li>Pro poskytnutí přístupu k platformě a zákaznické podpoře</li>
        <li>Pro plnění právních a regulačních povinností</li>
        <li>Pro zlepšování služeb a prevenci podvodů</li>
      </ul>

      <h2>Bezpečnost údajů</h2>
      <p>Používáme technická a organizační opatření včetně SSL šifrování a kontroly přístupu k ochraně vašich údajů.</p>

      <h2>Vaše práva</h2>
      <p>V závislosti na vaší jurisdikci můžete mít právo na přístup, opravu nebo výmaz svých osobních údajů. Pro uplatnění těchto práv kontaktujte <?= e(SUPPORT_EMAIL) ?>.</p>

      <h2>Kontakt</h2>
      <p>Dotazy k těmto zásadám? Napište na <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
