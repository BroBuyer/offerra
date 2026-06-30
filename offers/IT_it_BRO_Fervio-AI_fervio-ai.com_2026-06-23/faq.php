<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Risposte su trading, funzionalità, sicurezza, commissioni e come iniziare con ' . SITE_NAME . '.';
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
      <p class="lead">Tutto ciò che devi sapere prima di iniziare.</p>
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
              Crea un account, verifica la tua email e deposita un minimo di <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Avrai accesso immediato a grafici, strumenti e guide introduttive.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <?= e(SITE_NAME) ?> è sicuro e affidabile?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Utilizziamo crittografia SSL, 2FA e processori di pagamento verificati. La sicurezza è integrata in ogni livello della piattaforma.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Quali sono le commissioni?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Le commissioni sono trasparenti e mostrate prima di confermare qualsiasi operazione. Nessun costo nascosto su depositi o prelievi.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Posso usare il trading automatico?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Sì. Puoi configurare bot con assistenza AI in base al tuo profilo di rischio, oppure operare manualmente — puoi cambiare in qualsiasi momento.
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
              Richiedi un prelievo dalla tua area personale. L’elaborazione richiede in genere 1–3 giorni lavorativi a seconda del metodo di pagamento.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Hai ancora domande?</p>
        <a href="contacts.php" class="btn btn-outline">Contatta l’assistenza</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
