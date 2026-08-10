<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Răspunsuri despre depuneri, securitate, taxe și început pe ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Înainte să alimentezi contul</h1>
      <p class="lead">Răspunsuri directe despre acces, siguranță și cum funcționează platforma.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Cum încep?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Creează un cont, verifică e-mailul și depune de la <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Graficele, instrumentele și onboarding-ul se deblochează imediat după.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Cât de sigur este <?= e(SITE_NAME) ?>?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Criptarea SSL, autentificarea în doi pași și procesatorii de plăți verificați stau în spatele fiecărei acțiuni din cont.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ce spui de taxe?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Taxele apar înainte de confirmare. Fără taxe surpriză la depuneri sau retrageri.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Pot automatiza tranzacțiile?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Da — configurează boți asistați de AI cu limite de risc, sau rămâi complet manual și schimbă oricând.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Cum funcționează retragerile?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Solicită din panou. Majoritatea metodelor se finalizează în 1–3 zile lucrătoare, în funcție de metoda de plată.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Mai ai întrebări?</p>
        <a href="contacts.php" class="btn btn-outline">Contactează suportul</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
