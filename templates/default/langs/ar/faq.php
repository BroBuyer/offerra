<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Risposte su trading, funzionalita, sicurezza, costi e come iniziare con ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Domande frequenti</h1>
      <p class="lead">Tutto cio che devi sapere prima di iniziare.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Come posso iniziare?
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
              Utilizziamo crittografia SSL, autenticazione a due fattori e processori di pagamento verificati. La sicurezza e integrata in ogni livello della piattaforma.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Quali sono i costi?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              I costi sono trasparenti e mostrati prima della conferma di ogni transazione. Nessun costo nascosto su depositi o prelievi.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Posso usare il trading automatizzato?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Si. Imposta bot assistiti dall'AI in base al tuo profilo di rischio oppure opera manualmente: puoi passare da una modalita all'altra in qualsiasi momento.
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
              Puoi richiedere il prelievo dalla tua dashboard. L'elaborazione richiede in genere da 1 a 3 giorni lavorativi, in base al metodo scelto.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Hai ancora domande?</p>
        <a href="contacts.php" class="btn btn-outline">Contatta il supporto</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
