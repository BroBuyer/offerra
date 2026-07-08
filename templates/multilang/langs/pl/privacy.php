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
      <p class="lead">Ostatnia aktualizacja: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Niniejsza Polityka prywatności opisuje, w jaki sposób <?= e(SITE_NAME) ?> („my”) zbiera i przetwarza dane osobowe podczas korzystania z naszej strony i usług.</p>

      <h2>Jakie informacje zbieramy</h2>
      <p>Możemy zbierać: imię i nazwisko, adres e-mail, numer telefonu, kraj zamieszkania, adres IP oraz informacje przekazane przez formularze lub zgłoszenia do wsparcia.</p>

      <h2>Jak wykorzystujemy Twoje informacje</h2>
      <ul>
        <li>Do utworzenia i zarządzania Twoim kontem</li>
        <li>Do zapewnienia dostępu do platformy tradingowej i obsługi klienta</li>
        <li>Do wypełnienia obowiązków prawnych i regulacyjnych</li>
        <li>Do ulepszania naszych usług i zapobiegania oszustwom</li>
      </ul>

      <h2>Bezpieczeństwo danych</h2>
      <p>Wdrażamy środki techniczne i organizacyjne, w tym szyfrowanie SSL i kontrolę dostępu, aby chronić Twoje dane.</p>

      <h2>Twoje prawa</h2>
      <p>W zależności od jurysdykcji możesz mieć prawo dostępu, sprostowania lub usunięcia danych osobowych. Aby je wykonać, skontaktuj się z <?= e(SUPPORT_EMAIL) ?>.</p>

      <h2>Kontakt</h2>
      <p>Masz pytania dotyczące tej polityki? Napisz do nas na <a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
