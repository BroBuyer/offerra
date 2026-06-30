<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Ochrana súkromia');
$page_description = 'Zistite, ako ' . SITE_NAME . ' zhromažďuje, používa a chráni vaše osobné údaje.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Politika ochrany súkromia</h1>
      <p class="lead">Posledná aktualizácia: <?= date('d.m.Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Táto politika popisuje, ako <?= e(SITE_NAME) ?> zhromažďuje a spracúva osobné informácie, keď používate našu stránku a služby.</p>

      <h2>Informácie, ktoré zhromažďujeme</h2>
      <p>Môžeme zhromažďovať: meno, e-mailovú adresu, telefónne číslo, krajinu pobytu, IP adresu a informácie poskytnuté cez formuláre alebo požiadavky na podporu.</p>

      <h2>Ako používame informácie</h2>
      <ul>
        <li>Na vytvorenie a správu vášho účtu</li>
        <li>Na poskytnutie prístupu na platformu a zákazníckej podpory</li>
        <li>Na splnenie právnych a regulačných povinností</li>
        <li>Na zlepšovanie služieb a prevenciu podvodov</li>
      </ul>

      <h2>Bezpečnosť údajov</h2>
      <p>Uplatňujeme technické a organizačné opatrenia vrátane SSL šifrovania a kontroly prístupu na ochranu vašich údajov.</p>

      <h2>Vaše práva</h2>
      <p>V závislosti od vašej jurisdikcie môžete mať právo na prístup, opravu alebo vymazanie osobných údajov. Kontaktujte <?= e(SUPPORT_EMAIL) ?> na uplatnenie týchto práv.</p>

      <h2>Kontakt</h2>
      <p>Otázky k tejto politike? Napíšte na <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
