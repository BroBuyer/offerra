<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Politika zasebnosti');
$page_description = 'Kako ' . SITE_NAME . ' zbira, uporablja in varuje vaše osebne podatke.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Politika zasebnosti</h1>
      <p class="lead">Nazadnje posodobljeno: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>This Politika zasebnosti describes how <?= e(SITE_NAME) ?> ("we", "us") collects and processes personal information when you use our website and services.</p>

      <h2>Katere podatke zbiramo</h2>
      <p>Lahko zbiramo: ime, e-poštni naslov, telefonsko številko, državo prebivališča, naslov IP in podatke, ki jih navedete v obrazcih ali zahtevkih za podporo.</p>

      <h2>Kako uporabljamo vaše podatke</h2>
      <ul>
        <li>Za ustvarjanje in upravljanje vašega računa</li>
        <li>Za dostop do trgovalne platforme in podporo strankam</li>
        <li>Za izpolnjevanje zakonskih in regulativnih obveznosti</li>
        <li>Za izboljšanje storitev in preprečevanje goljufij</li>
      </ul>

      <h2>Varnost podatkov</h2>
      <p>Izvajamo tehnične in organizacijske ukrepe, vključno s šifriranjem SSL in nadzorom dostopa, da zaščitimo vaše podatke.</p>

      <h2>Vaše pravice</h2>
      <p>Depending on your jurisdiction, you may have rights to access, correct, or delete your personal data. Kontakt <?= e(SUPPORT_EMAIL) ?> to exercise these rights.</p>

      <h2>Kontakt</h2>
      <p>Questions about this policy? E-pošta <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
