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
      <p class="lead">Naposledy aktualizováno: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Tyto zásady ochrany soukromí popisují, jak <?= e(SITE_NAME) ?> („my“, „nás“) shromažďuje a zpracovává osobní údaje, když používáte naše webové stránky a služby.</p>

      <h2>Informace, které shromažďujeme</h2>
      <p>Můžeme shromažďovat: jméno, e-mailovou adresu, telefonní číslo, zemi bydliště, IP adresu a informace, které poskytnete prostřednictvím formulářů nebo žádostí o podporu.</p>

      <h2>Jak používáme vaše informace</h2>
      <ul>
        <li>K vytvoření a správě vašeho účtu</li>
        <li>K poskytnutí přístupu k obchodní platformě a zákaznické podpoře</li>
        <li>K plnění právních a regulačních povinností</li>
        <li>K vylepšování našich služeb a prevenci podvodů</li>
      </ul>

      <h2>Zabezpečení dat</h2>
      <p>Implementujeme technická a organizační opatření včetně SSL šifrování a kontrol přístupu k ochraně vašich dat.</p>

      <h2>Vaše práva</h2>
      <p>V závislosti na vaší jurisdikci můžete mít práva na přístup, opravu nebo smazání vašich osobních údajů. Kontaktujte <?= e(SUPPORT_EMAIL) ?> pro uplatnění těchto práv.</p>

      <h2>Kontakt</h2>
      <p>Otázky k těmto zásadám? Napište na <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
