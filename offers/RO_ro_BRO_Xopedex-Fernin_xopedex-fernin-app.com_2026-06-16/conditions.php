<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Termeni de utilizare');
$page_description = 'Citește termenii și condițiile pentru utilizarea site-ului și platformei ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Termeni de utilizare</h1>
      <p class="lead">Ultima actualizare: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Prin accesarea <?= e(SITE_NAME) ?> accepți acești Termeni de utilizare. Dacă nu ești de acord, te rugăm să nu utilizezi serviciile noastre.</p>

      <h2>Eligibilitate</h2>
      <p>Trebuie să ai cel puțin 18 ani și să fii autorizat legal să operezi instrumente financiare în jurisdicția ta.</p>

      <h2>Avertisment privind riscurile</h2>
      <p>Tranzacționarea criptomonedelor, forex, CFD și a altor instrumente financiare implică un risc semnificativ de pierdere. Performanțele anterioare nu garantează rezultate viitoare. Operează doar cu capital pe care ți-l poți permite să îl pierzi.</p>

      <h2>Responsabilitatea contului</h2>
      <p>Ești responsabil să păstrezi confidențiale credențialele contului și pentru toate activitățile desfășurate prin contul tău.</p>

      <h2>Disponibilitatea serviciului</h2>
      <p>Ne propunem să asigurăm continuitatea serviciului, dar nu garantăm acces neîntrerupt. Mentenanța, condițiile de piață sau problemele tehnice pot afecta disponibilitatea.</p>

      <h2>Limitarea răspunderii</h2>
      <p><?= e(SITE_NAME) ?> nu este responsabil pentru pierderi de tranzacționare sau daune rezultate din utilizarea informațiilor de pe acest site. Dacă este cazul, solicită consultanță financiară independentă.</p>

      <h2>Contact</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
