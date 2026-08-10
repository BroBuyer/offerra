<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Warunki użytkowania');
$page_description = 'Przeczytaj warunki korzystania z platformy tradingowej i strony ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Warunki użytkowania</h1>
      <p class="lead">Ostatnia aktualizacja: <?= date('d.m.Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Korzystając z <?= e(SITE_NAME) ?>, akceptujesz niniejsze Warunki użytkowania. Jeśli się nie zgadzasz, nie korzystaj z naszych usług.</p>

      <h2>Uprawnienia</h2>
      <p>Musisz mieć ukończone 18 lat i być legalnie uprawniony do handlu instrumentami finansowymi w swojej jurysdykcji.</p>

      <h2>Informacja o ryzyku</h2>
      <p>Handel kryptowalutami, forex, CFD i innymi instrumentami finansowymi wiąże się z istotnym ryzykiem straty. Wyniki historyczne nie gwarantują przyszłych rezultatów. Handluj tylko kapitałem, na którego utratę możesz sobie pozwolić.</p>

      <h2>Odpowiedzialność za konto</h2>
      <p>Odpowiadasz za poufność danych logowania oraz za całą aktywność na koncie.</p>

      <h2>Dostępność usługi</h2>
      <p>Dążymy do ciągłej dostępności, ale nie gwarantujemy nieprzerwanego dostępu. Konserwacja, warunki rynkowe lub problemy techniczne mogą wpływać na usługę.</p>

      <h2>Ograniczenie odpowiedzialności</h2>
      <p><?= e(SITE_NAME) ?> nie ponosi odpowiedzialności za straty tradingowe ani szkody wynikające z korzystania z informacji na tej stronie. W razie potrzeby skorzystaj z niezależnej porady finansowej.</p>

      <h2>Kontakt</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
