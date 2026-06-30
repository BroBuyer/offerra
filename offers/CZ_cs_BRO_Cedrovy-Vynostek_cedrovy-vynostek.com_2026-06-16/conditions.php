<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Podmínky použití');
$page_description = 'Přečtěte si podmínky používání webu a platformy ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Podmínky použití</h1>
      <p class="lead">Poslední aktualizace: <?= date('d.m.Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Přístupem k <?= e(SITE_NAME) ?> souhlasíte s těmito podmínkami použití. Pokud nesouhlasíte, prosíme, abyste naše služby nepoužívali.</p>

      <h2>Způsobilost</h2>
      <p>Musíte být starší 18 let a mít právní oprávnění obchodovat s finančními nástroji ve vaší jurisdikci.</p>

      <h2>Upozornění na rizika</h2>
      <p>Obchodování s kryptoměnami, forexem, CFD a dalšími finančními nástroji s sebou nese značné riziko ztráty. Minulé výsledky nezaručují budoucí výnosy. Obchodujte pouze s kapitálem, který si můžete dovolit ztratit.</p>

      <h2>Odpovědnost za účet</h2>
      <p>Jste odpovědní za zachování důvěrnosti přihlašovacích údajů a za veškerou činnost provedenou prostřednictvím vašeho účtu.</p>

      <h2>Dostupnost služby</h2>
      <p>Snažíme se zajistit kontinuitu služby, ale nezaručujeme nepřerušený přístup. Údržba, tržní podmínky nebo technické problémy mohou ovlivnit dostupnost.</p>

      <h2>Omezení odpovědnosti</h2>
      <p><?= e(SITE_NAME) ?> nenese odpovědnost za obchodní ztráty ani škody vyplývající z používání informací na tomto webu. V případě potřeby vyhledejte nezávislé finanční poradenství.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
