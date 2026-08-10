<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Termeni de utilizare');
$page_description = 'Citește termenii de utilizare ai platformei de trading și ai site-ului ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Termeni de utilizare</h1>
      <p class="lead">Ultima actualizare: <?= date('j.n.Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Prin accesarea <?= e(SITE_NAME) ?> accepți acești Termeni de utilizare. Dacă nu ești de acord, te rugăm să nu folosești serviciile noastre.</p>

      <h2>Eligibilitate</h2>
      <p>Trebuie să ai cel puțin 18 ani și să ai dreptul legal de a tranzacționa instrumente financiare în jurisdicția ta.</p>

      <h2>Avertisment privind riscurile</h2>
      <p>Tranzacționarea criptomonedelor, forexului, CFD-urilor și altor instrumente financiare implică un risc substanțial de pierdere. Performanța trecută nu garantează rezultate viitoare. Tranzacționează doar cu capital pe care ți-l poți permite să-l pierzi.</p>

      <h2>Responsabilitățile contului</h2>
      <p>Ești responsabil pentru păstrarea confidențialității datelor de autentificare și pentru toată activitatea din cont.</p>

      <h2>Disponibilitatea serviciului</h2>
      <p>Ne străduim pentru disponibilitate continuă, dar nu garantăm acces neîntrerupt. Mentenanța, condițiile de piață sau problemele tehnice pot afecta serviciul.</p>

      <h2>Limitarea răspunderii</h2>
      <p><?= e(SITE_NAME) ?> nu este răspunzător pentru pierderi de trading sau daune rezultate din utilizarea informațiilor de pe acest site. Unde este cazul, solicită sfaturi financiare independente.</p>

      <h2>Contact</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
