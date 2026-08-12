<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Termeni de utilizare');
$page_description = 'Citiți termenii și condițiile pentru utilizarea platformei de tranzacționare ' . SITE_NAME . ' și a site-ului web.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Termeni de utilizare</h1>
      <p class="lead">Ultima actualizare: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Prin accesarea <?= e(SITE_NAME) ?> sunteți de acord cu acești Termeni de utilizare. Dacă nu sunteți de acord, vă rugăm să nu utilizați serviciile noastre.</p>

      <h2>Eligibilitate</h2>
      <p>Trebuie să aveți cel puțin 18 ani și să fiți legal autorizat să tranzacționați instrumente financiare în jurisdicția dvs.</p>

      <h2>Divulgarea riscurilor</h2>
      <p>Tranzacționarea criptomonedelor, forex, CFD-urilor și altor instrumente financiare implică un risc substanțial de pierdere. Performanța anterioară nu garantează rezultate viitoare. Tranzacționați doar cu capital pe care vă puteți permite să îl pierdeți.</p>

      <h2>Responsabilități cont</h2>
      <p>Sunteți responsabil pentru menținerea confidențialității credențialelor contului și pentru toată activitatea de sub contul dvs.</p>

      <h2>Disponibilitatea serviciului</h2>
      <p>Ne străduim pentru disponibilitate continuă, dar nu garantăm acces neîntrerupt. Mentenanța, condițiile pieței sau problemele tehnice pot afecta serviciul.</p>

      <h2>Limitarea răspunderii</h2>
      <p><?= e(SITE_NAME) ?> nu este răspunzător pentru pierderi de tranzacționare sau daune rezultate din utilizarea informațiilor de pe acest site. Căutați consiliere financiară independentă acolo unde este cazul.</p>

      <h2>Contact</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
