<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Odgovori o trgovanju, funkcijah, varnosti, provizijah in začetku z ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Pogosta vprašanja</h1>
      <p class="lead">Vse, kar morate vedeti pred začetkom.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Kako začnem?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Ustvarite račun, potrdite e-pošto in položite najmanj <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Takoj dobite dostop do grafikonov, orodij in vodičev za začetek.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ali je <?= e(SITE_NAME) ?> varna in zakonita?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Uporabljamo standardno šifriranje SSL, 2FA in preverjene plačilne procesorje. Varnost je vgrajena v vsako plast platforme.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kakšne so provizije?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Provizije so pregledne in prikazane pred potrditvijo vsake transakcije. Ni skritih stroškov pri pologih ali dvigih.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ali lahko uporabljam samodejno trgovanje?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Da. Nastavite bote z umetno inteligenco glede na tveganje ali trgujte ročno — preklopite kadar koli.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Kako delujejo dvigi?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Dvig zahtevajte z nadzorne plošče. Obdelava običajno traja 1–3 delovne dni, glede na način plačila.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Imate še vprašanja?</p>
        <a href="contacts.php" class="btn btn-outline">Kontaktirajte podporo</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
