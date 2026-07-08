<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Odgovori o trgovanju, značajkama, sigurnosti, naknadama i početku rada s ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Često postavljana pitanja</h1>
      <p class="lead">Sve što trebate znati prije početka.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Kako mogu započeti?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Stvorite račun, potvrdite e-poštu i uplatite minimalno <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Odmah ćete dobiti pristup grafikonima, alatima i vodičima za početak.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Je li <?= e(SITE_NAME) ?> sigurna i legitimna?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Koristimo SSL enkripciju, 2FA i provjerene procesore plaćanja. Sigurnost je ugrađena u svaki sloj platforme.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Koje su naknade?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Naknade su transparentne i prikazane prije potvrde bilo koje transakcije. Nema skrivenih troškova na depozitima ili isplatama.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Mogu li koristiti automatizirano trgovanje?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Da. Postavite botove uz AI prema svojim preferencijama rizika ili trgujte ručno — možete se prebacivati bilo kada.
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
              Zatražite isplatu s nadzorne ploče. Obrada obično traje 1–3 radna dana, ovisno o načinu plaćanja.
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
