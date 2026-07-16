<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Întrebări frecvente');
$page_description = 'Răspunsuri despre tranzacționare, funcții, securitate, costuri și cum să începi cu ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">Întrebări frecvente</p>
      <h1>Întrebări frecvente</h1>
      <p class="lead">Tot ce trebuie să știi înainte de a începe.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Cum pot începe?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Crea un account, verifica l'email e deposita almeno <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Avrai subito accesso a grafici, strumenti e guida di onboarding.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <?= e(SITE_NAME) ?> e sicura e affidabile?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Folosim criptare SSL, autentificare în doi pași și procesatori de plată verificați. Securitatea este integrată la fiecare nivel al platformei.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Care sunt costurile?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Costurile sunt transparente și afișate înainte de confirmarea fiecărei tranzacții. Fără costuri ascunse la depuneri sau retrageri.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Pot folosi tranzacționarea automatizată?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Da. Configurează boți asistați de AI în funcție de profilul tău de risc sau operează manual: poți comuta oricând între moduri.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Come funzionano i prelievi?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Poți solicita retragerea din tabloul de bord. Procesarea durează de obicei între 1 și 3 zile lucrătoare, în funcție de metoda aleasă.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Hai ancora domande?</p>
        <a href="contacts.php" class="btn btn-outline">Contactează suportul</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
