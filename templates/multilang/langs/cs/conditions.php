<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Podmínky používání');
$page_description = 'Seznamte se s podmínkami používání obchodní platformy a webu ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Podmínky používání</h1>
      <p class="lead">Poslední aktualizace: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Přístupem na <?= e(SITE_NAME) ?> souhlasíte s těmito podmínkami používání. Pokud nesouhlasíte, naše služby nepoužívejte.</p>

      <h2>Způsobilost</h2>
      <p>Musíte být starší 18 let a právně oprávněni obchodovat finanční instrumenty ve své jurisdikci.</p>

      <h2>Upozornění na rizika</h2>
      <p>Obchodování kryptoměn, forexu, CFD a dalších finančních instrumentů je spojeno se značným rizikem ztráty. Minulá výkonnost není zárukou budoucích výsledků. Obchodujte pouze s kapitálem, který si můžete dovolit ztratit.</p>

      <h2>Odpovědnost za účet</h2>
      <p>Nesete odpovědnost za důvěrnost svých přihlašovacích údajů a za veškerou aktivitu provedenou pod vaším účtem.</p>

      <h2>Dostupnost služby</h2>
      <p>Snažíme se zajistit nepřetržitou dostupnost, ale nemůžeme garantovat nepřerušený přístup. Údržba, tržní podmínky nebo technické problémy mohou službu ovlivnit.</p>

      <h2>Omezení odpovědnosti</h2>
      <p><?= e(SITE_NAME) ?> neodpovídá za obchodní ztráty ani škody vzniklé použitím informací na tomto webu. V případě potřeby se obraťte na nezávislého finančního poradce.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
