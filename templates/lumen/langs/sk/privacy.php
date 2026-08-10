<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Zásady ochrany súkromia');
$page_description = 'Zistite, ako ' . SITE_NAME . ' zhromažďuje, používa a chráni vaše osobné údaje.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Zásady ochrany súkromia</h1>
      <p class="lead">Posledná aktualizácia: <?= date('j. n. Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Tyto Zásady ochrany súkromia popisují, jak <?= e(SITE_NAME) ?> („my“) zhromažďuje a spracúva osobné údaje pri používaní nášho webu a služieb.</p>

      <h2>Aké údaje zhromažďujeme</h2>
      <p>Môžeme zhromažďovať: meno, e-mail, telefón, krajinu bydliska, IP adresu a údaje, ktoré uvediete vo formulároch alebo žiadostiach o podporu.</p>

      <h2>Ako údaje používame</h2>
      <ul>
        <li>Na vytvorenie a správu účtu</li>
        <li>Na poskytnutie prístupu k obchodnej platforme a zákazníckej podpore</li>
        <li>Na splnenie právnych a regulačných povinností</li>
        <li>Na zlepšenie služieb a prevenciu podvodov</li>
      </ul>

      <h2>Zabezpečenie údajov</h2>
      <p>Zavádzame technické a organizačné opatrenia vrátane SSL šifrovania a riadenia prístupu na ochranu vašich údajov.</p>

      <h2>Vaše práva</h2>
      <p>Podľa jurisdikcie môžete mať právo na prístup, opravu alebo vymazanie osobných údajov. Kontaktujte <?= e(SUPPORT_EMAIL) ?> a tieto práva uplatnite.</p>

      <h2>Kontakt</h2>
      <p>Otázky k týmto zásadám? Napíšte na <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
