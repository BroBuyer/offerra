<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Odpowiedzi o wpłatach, bezpieczeństwie, opłatach i starcie na ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Zanim doładujesz konto</h1>
      <p class="lead">Proste odpowiedzi o dostępie, bezpieczeństwie i działaniu platformy.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Jak zacząć?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Utwórz konto, potwierdź e-mail i wpłać od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Wykresy, narzędzia i onboarding odblokują się od razu.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jak zabezpieczone jest <?= e(SITE_NAME) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Szyfrowanie SSL, uwierzytelnianie dwuskładnikowe i zweryfikowani operatorzy płatności przy każdej akcji na koncie.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            A co z opłatami?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Opłaty widać przed potwierdzeniem. Bez niespodzianek przy wpłatach i wypłatach.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Czy mogę automatyzować transakcje?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Tak — skonfiguruj boty wspomagane AI z limitami ryzyka albo zostań przy trybie ręcznym i przełączaj w dowolnym momencie.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jak działają wypłaty?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Złóż wniosek w panelu. Większość metod rozlicza się w 1–3 dni robocze w zależności od metody płatności.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Masz jeszcze pytania?</p>
        <a href="contacts.php" class="btn btn-outline">Kontakt z pomocą</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
