<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Polityka prywatności');
$page_description = 'Dowiedz się, jak ' . SITE_NAME . ' zbiera, wykorzystuje i chroni Twoje dane osobowe.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Polityka prywatności</h1>
      <p class="lead">Ostatnia aktualizacja: <?= date('d.m.Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Niniejsza Polityka prywatności opisuje, jak <?= e(SITE_NAME) ?> („my”) zbiera i przetwarza dane osobowe, gdy korzystasz z naszej strony i usług.</p>

      <h2>Jakie dane zbieramy</h2>
      <p>Możemy zbierać: imię i nazwisko, adres e-mail, numer telefonu, kraj zamieszkania, adres IP oraz informacje podane w formularzach lub zgłoszeniach do pomocy.</p>

      <h2>Jak wykorzystujemy dane</h2>
      <ul>
        <li>Do tworzenia i zarządzania kontem</li>
        <li>Do zapewnienia dostępu do platformy tradingowej i wsparcia klienta</li>
        <li>Do wypełniania obowiązków prawnych i regulacyjnych</li>
        <li>Do ulepszania usług i zapobiegania oszustwom</li>
      </ul>

      <h2>Bezpieczeństwo danych</h2>
      <p>Stosujemy środki techniczne i organizacyjne, w tym szyfrowanie SSL i kontrolę dostępu, aby chronić Twoje dane.</p>

      <h2>Twoje prawa</h2>
      <p>W zależności od jurysdykcji możesz mieć prawo dostępu, sprostowania lub usunięcia danych osobowych. Skontaktuj się z <?= e(SUPPORT_EMAIL) ?>, aby skorzystać z tych praw.</p>

      <h2>Kontakt</h2>
      <p>Pytania o tę politykę? Napisz na <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
