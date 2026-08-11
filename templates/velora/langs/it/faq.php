<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Risposte su finanziamento, sicurezza, insight IA e come iniziare con ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';

$faq_chevron = '<svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Domande frequenti</h1>
      <p class="lead">Risposte chiare su registrazione, sicurezza e su come l’IA aiuta sulla piattaforma.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container narrow">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open active">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Come faccio a iniziare?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Crea un account, completa una breve verifica e deposita da <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Grafici, strumenti e onboarding guidato si sbloccano subito. Puoi anche parlare con Lisa nell’angolo.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            In che modo l’IA mi aiuta nel trading?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              <?= e(SITE_NAME) ?> ti mostra insight di mercato brevi, in linguaggio semplice. Decidi tu se agire o no.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Come viene protetto il mio account?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Le connessioni utilizzano la crittografia SSL. Non chiediamo mai permessi inutili: mantieni private le tue credenziali.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Ci sono costi nascosti?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              I costi vengono mostrati prima della conferma. Nessuna sorpresa su depositi o prelievi quando vengono rispettate le condizioni.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Chi è Lisa nel widget chat?
            <?= $faq_chevron ?>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Lisa è la nostra assistente di onboarding. Ti guida con un breve quiz e ti aiuta a inviare una richiesta di account sicura.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
