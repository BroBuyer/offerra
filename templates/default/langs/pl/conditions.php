<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Regulamin');
$page_description = 'Zapoznaj się z regulaminem platformy tradingowej i strony ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Regulamin</h1>
      <p class="lead">Ostatnia aktualizacja: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Korzystając z <?= e(SITE_NAME) ?>, akceptujesz niniejszy regulamin. Jeśli się nie zgadzasz, nie korzystaj z naszych usług.</p>

      <h2>Kwalifikowalność</h2>
      <p>Musisz mieć ukończone 18 lat i być prawnie uprawniony do handlu instrumentami finansowymi w swojej jurysdykcji.</p>

      <h2>Ostrzeżenie o ryzyku</h2>
      <p>Handel kryptowalutami, forexem, CFD i innymi instrumentami finansowymi wiąże się ze znacznym ryzykiem straty. Wyniki z przeszłości nie gwarantują przyszłych rezultatów. Handluj wyłącznie kapitałem, którego utratę możesz zaakceptować.</p>

      <h2>Odpowiedzialność za konto</h2>
      <p>Ponosisz odpowiedzialność za poufność danych logowania oraz za całą aktywność wykonaną na Twoim koncie.</p>

      <h2>Dostępność usługi</h2>
      <p>Staramy się zapewnić ciągłą dostępność, ale nie możemy zagwarantować nieprzerwanego dostępu. Konserwacja, warunki rynkowe lub problemy techniczne mogą wpływać na usługę.</p>

      <h2>Ograniczenie odpowiedzialności</h2>
      <p><?= e(SITE_NAME) ?> nie ponosi odpowiedzialności za straty tradingowe ani szkody wynikające z korzystania z informacji na tej stronie. W razie potrzeby skonsultuj się z niezależnym doradcą finansowym.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
