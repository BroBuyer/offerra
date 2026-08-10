<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Platforma inwestycyjna z AI');
$page_description = 'Prosta platforma inwestycyjna oparta na AI — czytelne rynki, prowadzone decyzje i szybkie otwarcie konta na ' . SITE_NAME . '.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Wprowadzenie">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Inwestuj przejrzyście.<br><span class="text-accent">AI utrzyma to proste.</span></h1>
        <p class="lead">
          Nowoczesna platforma, która wyjaśnia rynki prostym językiem, podkreśla przydatne wnioski AI i pomaga składać zlecenia bez zbędnego szumu.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Zacznij od <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Zobacz, jak to działa</a>
        </div>
      </div>

      <div class="hero-lumen__visual">
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="how">
    <div class="container">
      <div class="section-intro" data-reveal>
        <p class="eyebrow">Stworzona dla początkujących</p>
        <h2>Trzy kroki. Potem handlujesz.</h2>
        <p class="lead">Bez żargonu terminala — jasna ścieżka od rejestracji do pierwszej pozycji.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Otwórz konto</h3>
          <p>Podaj kilka danych. Weryfikacja jest krótka i prowadzona krok po kroku.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Wpłać bezpiecznie</h3>
          <p>Wpłać od <?= MIN_DEPOSIT ?> <?= CURRENCY ?> zaufanymi metodami płatności.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Handluj z pomocą AI</h3>
          <p>Śledź wnioski w prostym języku i składaj zlecenia, gdy jesteś gotowy.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">AI, które naprawdę pomaga</p>
        <h2>Sygnały, które rozumiesz</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> zamienia szum rynkowy w krótkie, czytelne podpowiedzi — mniej zgadywania, więcej decyzji.
        </p>
        <ul class="feature-list">
          <li>Jasne wskazówki kup / trzymaj / obserwuj</li>
          <li>Przypomnienia o ryzyku przed potwierdzeniem</li>
          <li>Interfejs, który zachowuje spokój pod presją</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Wypróbuj platformę</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Przykładowy insight">
        <p class="insight-panel__label">Insight na żywo</p>
        <p class="insight-panel__title">BTC / USD · stabilny momentum</p>
        <p class="insight-panel__body">
          Zmienność słabnie. AI sugeruje obserwację kolejnej sesji przed zwiększeniem pozycji — Ty nadal kontrolujesz każde zlecenie.
        </p>
        <div class="insight-panel__meta">
          <span>Wysoka pewność</span>
          <span>Zaktualizowano przed chwilą</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Zacznij</p>
        <h2>Utwórz konto <?= e(SITE_NAME) ?></h2>
        <p class="lead lead-light">
          Dołącz do platformy, która wygląda premium i pozostaje prosta — wskazówki AI od pierwszego dnia.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Otwórz w mniej niż 2 minuty';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Zaufana infrastruktura</p>
        <h2>Partnerzy infrastruktury</h2>
        <p class="lead">Płatności i dostęp do rynków przez uznanych dostawców.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">FAQ</p>
        <h2>Szybkie odpowiedzi</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Czy potrzebuję doświadczenia w tradingu?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Nie. <?= e(SITE_NAME) ?> jest stworzona dla początkujących inwestorów — wskazówki AI w prostym języku.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jaka jest minimalna wpłata?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Możesz zacząć od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Opłaty są widoczne przed potwierdzeniem.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Czy jest dostępne wsparcie?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Tak — nasz zespół pomaga przez całą dobę przy wpłatach i konfiguracji konta.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Przeczytaj pełne FAQ →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
