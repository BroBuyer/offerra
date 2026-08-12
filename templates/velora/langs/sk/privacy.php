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
      <p class="lead">Naposledy aktualizované: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Tieto zásady ochrany súkromia popisujú, ako <?= e(SITE_NAME) ?> („my“, „nás“) zhromažďuje a spracúva osobné údaje, keď používate naše webové stránky a služby.</p>

      <h2>Informácie, ktoré zhromažďujeme</h2>
      <p>Môžeme zhromažďovať: meno, e-mailovú adresu, telefónne číslo, krajinu bydliska, IP adresu a informácie, ktoré poskytnete prostredníctvom formulárov alebo žiadostí o podporu.</p>

      <h2>Ako používame vaše informácie</h2>
      <ul>
        <li>Na vytvorenie a správu vášho účtu</li>
        <li>Na poskytnutie prístupu k obchodnej platforme a zákazníckej podpore</li>
        <li>Na plnenie právnych a regulačných povinností</li>
        <li>Na zlepšovanie našich služieb a prevenciu podvodov</li>
      </ul>

      <h2>Zabezpečenie údajov</h2>
      <p>Implementujeme technické a organizačné opatrenia vrátane SSL šifrovania a kontrol prístupu na ochranu vašich údajov.</p>

      <h2>Vaše práva</h2>
      <p>V závislosti od vašej jurisdikcie môžete mať práva na prístup, opravu alebo vymazanie vašich osobných údajov. Kontaktujte <?= e(SUPPORT_EMAIL) ?> na uplatnenie týchto práv.</p>

      <h2>Kontakt</h2>
      <p>Otázky k týmto zásadám? Napíšte na <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
