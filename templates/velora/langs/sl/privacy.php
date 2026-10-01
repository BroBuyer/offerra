<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Politika zasebnosti');
$page_description = 'Naučite se, kako' . SITE_NAME . 'zbira, uporablja in varuje vaše osebne podatke.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Politika zasebnosti</h1>
      <p class="lead">Zadnja posodobitev: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Ta pravilnik o zasebnosti opisuje, kako <?= e(SITE_NAME) ?>("mi", "nas") zbira in obdeluje osebne podatke, ko uporabljate naše spletno mesto in storitve.</p>

      <h2>Podatki, ki jih zbiramo</h2>
      <p>Zbiramo lahko: ime, e-poštni naslov, telefonsko številko, državo prebivališča, naslov IP in informacije, ki jih posredujete prek obrazcev ali zahtevkov za podporo.</p>

      <h2>Kako uporabljamo vaše podatke</h2>
      <ul>
        <li>Za ustvarjanje in upravljanje vašega računa</li>
        <li>Zagotoviti dostop do platforme za trgovanje in podporo strankam</li>
        <li>Za izpolnjevanje zakonskih in regulativnih obveznosti</li>
        <li>Za izboljšanje naših storitev in preprečevanje goljufij</li>
      </ul>

      <h2>Varnost podatkov</h2>
      <p>Za zaščito vaših podatkov izvajamo tehnične in organizacijske ukrepe, vključno s šifriranjem SSL in nadzorom dostopa.</p>

      <h2>Vaše pravice</h2>
      <p>Odvisno od vaše jurisdikcije imate morda pravico do dostopa, popravka ali izbrisa svojih osebnih podatkov. Kontakt <?= e(SUPPORT_EMAIL) ?> za uveljavljanje teh pravic.</p>

      <h2>Kontakt</h2>
      <p>Imate vprašanja o tej politiki? E-pošta<a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
