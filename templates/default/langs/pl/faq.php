<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Odpowiedzi na pytania o handel, funkcje, bezpieczeństwo, opłaty i start z ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Najczęściej zadawane pytania</h1>
      <p class="lead">Wszystko, co musisz wiedzieć przed startem.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Jak mogę zacząć?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Utwórz konto, zweryfikuj e-mail i wpłać minimum <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Natychmiast uzyskasz dostęp do wykresów, narzędzi i przewodnika onboardingu.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Czy <?= e(SITE_NAME) ?> jest bezpieczna i godna zaufania?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Stosujemy szyfrowanie SSL, uwierzytelnianie dwuskładnikowe i zweryfikowanych procesorów płatności. Bezpieczeństwo jest zintegrowane na wszystkich poziomach platformy.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Jakie są opłaty?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Opłaty są przejrzyste i wyświetlane przed potwierdzeniem każdej transakcji. Brak ukrytych opłat za wpłaty i wypłaty.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Czy mogę korzystać z handlu automatycznego?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Tak. Skonfiguruj boty wspierane przez AI według swojego profilu ryzyka lub handluj manualnie — możesz przełączać się między trybami w dowolnym momencie.
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
              Wypłatę zlecasz z panelu. Przetwarzanie zwykle trwa od 1 do 3 dni roboczych w zależności od wybranej metody płatności.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Masz jeszcze pytania?</p>
        <a href="contacts.php" class="btn btn-outline">Skontaktuj się ze wsparciem</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
