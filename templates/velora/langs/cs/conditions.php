<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Podmínky použití');
$page_description = 'Přečtěte si podmínky používání ' . SITE_NAME . ' obchodní platformy a webových stránek.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Podmínky použití</h1>
      <p class="lead">Naposledy aktualizováno: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Přístupem k <?= e(SITE_NAME) ?> souhlasíte s těmito podmínkami použití. Pokud nesouhlasíte, nepoužívejte prosím naše služby.</p>

      <h2>Způsobilost</h2>
      <p>Musíte být starší 18 let a mít v jurisdikci právní oprávnění obchodovat s finančními instrumenty.</p>

      <h2>Upozornění na rizika</h2>
      <p>Obchodování s kryptoměnami, forexem, CFD a dalšími finančními instrumenty zahrnuje podstatné riziko ztráty. Minulá výkonnost nezaručuje budoucí výsledky. Obchodujte pouze s kapitálem, jehož ztrátu si můžete dovolit.</p>

      <h2>Odpovědnost za účet</h2>
      <p>Jste odpovědní za zachování důvěrnosti přihlašovacích údajů a za veškerou aktivitu pod vaším účtem.</p>

      <h2>Dostupnost služby</h2>
      <p>Usilujeme o nepřetržitou dostupnost, ale nezaručujeme nepřerušený přístup. Údržba, tržní podmínky nebo technické problémy mohou ovlivnit službu.</p>

      <h2>Omezení odpovědnosti</h2>
      <p><?= e(SITE_NAME) ?> nenese odpovědnost za obchodní ztráty ani škody vzniklé z použití informací na těchto stránkách. V případě potřeby vyhledejte nezávislé finanční poradenství.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
