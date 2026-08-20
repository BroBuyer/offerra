<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Privātuma politika');
$page_description = 'Uzziniet, kā ' . SITE_NAME . ' vāc, izmanto un aizsargā jūsu personas datus.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Privātuma politika</h1>
      <p class="lead">Pēdējoreiz atjaunināts: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Šī Privātuma politika apraksta, kā <?= e(SITE_NAME) ?> („mēs”, „mums”) vāc un apstrādā personas informāciju, kad izmantojat mūsu vietni un pakalpojumus.</p>

      <h2>Informācija, ko mēs vācam</h2>
      <p>Mēs varam vākt: vārdu, e-pasta adresi, tālruņa numuru, dzīvesvietas valsti, IP adresi un informāciju, ko sniedzat caur formām vai atbalsta pieprasījumiem.</p>

      <h2>Kā mēs izmantojam jūsu informāciju</h2>
      <ul>
        <li>Lai izveidotu un pārvaldītu jūsu kontu</li>
        <li>Lai nodrošinātu tirdzniecības platformas piekļuvi un klientu atbalstu</li>
        <li>Lai izpildītu juridiskās un regulatīvās saistības</li>
        <li>Lai uzlabotu mūsu pakalpojumus un novērstu krāpšanu</li>
      </ul>

      <h2>Datu drošība</h2>
      <p>Mēs īstenojam tehniskus un organizatoriskus pasākumus, tostarp SSL šifrēšanu un piekļuves kontroles, lai aizsargātu jūsu datus.</p>

      <h2>Jūsu tiesības</h2>
      <p>Atkarībā no jūsu jurisdikcijas jums var būt tiesības piekļūt, labot vai dzēst savus personas datus. Sazinieties ar <?= e(SUPPORT_EMAIL) ?>, lai īstenotu šīs tiesības.</p>

      <h2>Kontakti</h2>
      <p>Jautājumi par šo politiku? Rakstiet uz <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
