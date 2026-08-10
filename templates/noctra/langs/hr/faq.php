<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Odgovori o uplatama, sigurnosti, naknadama i početku na ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Prije nego uplatite račun</h1>
      <p class="lead">Izravni odgovori o pristupu, sigurnosti i radu platforme.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Kako započeti?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Otvorite račun, potvrdite e-poštu i uplatite od <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Grafikoni, alati i onboarding otključavaju se odmah nakon toga.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako je <?= e(SITE_NAME) ?> osiguran?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              SSL enkripcija, dvofaktorska autentifikacija i verificirani platni procesori stoje iza svake radnje na računu.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Što je s naknadama?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Naknade se prikazuju prije potvrde. Nema iznenađujućih troškova na uplatama ili isplatama.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Mogu li automatizirati trgovanje?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Da — postavite AI botove s limitima rizika ili ostanite potpuno ručno i prebacujte se bilo kada.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako funkcioniraju isplate?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Zatražite s nadzorne ploče. Većina metoda se namiruje u 1–3 radna dana ovisno o načinu plaćanja.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Još imate pitanja?</p>
        <a href="contacts.php" class="btn btn-outline">Kontaktirajte podršku</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
