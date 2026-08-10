<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Integritetspolicy');
$page_description = 'Läs hur ' . SITE_NAME . ' samlar in, använder och skyddar dina personuppgifter.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Integritetspolicy</h1>
      <p class="lead">Senast uppdaterad: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Denna integritetspolicy beskriver hur <?= e(SITE_NAME) ?> («vi») samlar in och behandlar personuppgifter när du använder vår webbplats och våra tjänster.</p>

      <h2>Uppgifter vi samlar in</h2>
      <p>Vi kan samla in: namn, e-postadress, telefonnummer, bosättningsland, IP-adress och uppgifter du lämnar via formulär eller supportförfrågningar.</p>

      <h2>Så använder vi dina uppgifter</h2>
      <ul>
        <li>För att skapa och hantera ditt konto</li>
        <li>För att ge åtkomst till handelsplattformen och kundsupport</li>
        <li>För att uppfylla juridiska och regulatoriska skyldigheter</li>
        <li>För att förbättra våra tjänster och förebygga bedrägerier</li>
      </ul>

      <h2>Datasäkerhet</h2>
      <p>Vi implementerar tekniska och organisatoriska åtgärder, inklusive SSL-kryptering och åtkomstkontroll, för att skydda dina data.</p>

      <h2>Dina rättigheter</h2>
      <p>Beroende på din jurisdiktion kan du ha rätt att få tillgång till, rätta eller radera dina personuppgifter. Kontakta <?= e(SUPPORT_EMAIL) ?> för att utöva dessa rättigheter.</p>

      <h2>Kontakt</h2>
      <p>Frågor om denna policy? Mejla <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
