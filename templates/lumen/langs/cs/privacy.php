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
      <p class="lead">Poslední aktualizace: <?= date('j. n. Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Tyto Zásady ochrany soukromí popisují, jak <?= e(SITE_NAME) ?> („my“) shromažďuje a zpracovává osobní údaje při používání našeho webu a služeb.</p>

      <h2>Jaké údaje shromažďujeme</h2>
      <p>Můžeme shromažďovat: jméno, e-mail, telefon, zemi bydliště, IP adresu a údaje, které uvedete ve formulářích nebo žádostech o podporu.</p>

      <h2>Jak údaje používáme</h2>
      <ul>
        <li>K vytvoření a správě účtu</li>
        <li>K poskytnutí přístupu k obchodní platformě a zákaznické podpoře</li>
        <li>Ke splnění právních a regulačních povinností</li>
        <li>Ke zlepšení služeb a prevenci podvodů</li>
      </ul>

      <h2>Zabezpečení dat</h2>
      <p>Zavádíme technická a organizační opatření včetně SSL šifrování a řízení přístupu k ochraně vašich dat.</p>

      <h2>Vaše práva</h2>
      <p>Podle jurisdikce můžete mít právo na přístup, opravu nebo smazání osobních údajů. Kontaktujte <?= e(SUPPORT_EMAIL) ?> a tato práva uplatněte.</p>

      <h2>Kontakt</h2>
      <p>Dotazy k těmto zásadám? Napište na <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
