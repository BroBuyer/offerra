<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Odpowiedzi o finansowaniu, bezpieczeństwie, wnioskach AI i starcie na ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Zanim zasilisz konto</h1>
      <p class="lead">Proste odpowiedzi o dostępie, bezpieczeństwie i roli AI na platformie.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Jak zacząć?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Utwórz konto, przejdź krótką weryfikację i wpłać od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Wykresy, narzędzia i prowadzone wdrożenie odblokują się zaraz potem.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jak AI pomaga mi handlować?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> pokazuje krótkie wnioski rynkowe w prostym języku. Zawsze Ty decydujesz, czy działać.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jak zabezpieczone jest moje konto?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Połączenia używają szyfrowania SSL. Nie prosimy o zbędne uprawnienia — trzymaj dane logowania w tajemnicy.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Czy są ukryte opłaty?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Opłaty widać przed potwierdzeniem. Bez niespodzianek przy wpłatach i wypłatach, gdy przestrzegasz warunków.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
