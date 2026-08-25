<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'FAQ ' . SITE_NAME;
$page_description = 'Domande, risposte chiare — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Domande</span>
    <h1>Domande, risposte chiare</h1>
    <p class="kpnq92g">Ciò che le persone chiedono prima di aprire un conto, e le risposte che ti daremmo al telefono.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Domande sul denaro</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name"><?= e(SITE_NAME) ?> è una truffa?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">No: <?= e(SITE_NAME) ?> opera con controlli di verifica, pubblica per intero le condizioni e l’informativa sui rischi, e i prelievi tornano sempre al metodo di pagamento originale. Ciò detto, ogni investimento comporta un rischio reale e nessuna piattaforma seria promette rendimenti garantiti — diffida di chiunque lo faccia.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Quanto costa aprire un conto?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Aprire un conto è gratuito. Non ci sono spese di iscrizione né abbonamenti; versi solo l’importo che scegli di investire.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Quanto tempo richiedono i prelievi?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Le richieste vengono elaborate nei giorni lavorativi e restituite sul metodo con cui hai depositato. I bonifici bancari richiedono più tempo delle carte o dei portafogli elettronici.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">C’è un importo minimo?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Sì, ed è volutamente basso, a partire da <?= e(money_min()) ?>, così puoi iniziare in piccolo e aggiungere di più in seguito. L’importo esatto viene mostrato prima che tu confermi qualsiasi cosa.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Domande frequenti</h2>
    <div class="fjl4d">
      <details open><summary>Qual è il deposito minimo per iniziare?</summary><p>Puoi aprire e finanziare il tuo conto a partire da <?= e(money_min()) ?> minimo. Sei libero di aggiungere altri fondi man mano che avanza il tuo piano di investimento.</p></details>
      <details><summary>Come funzionano i prelievi?</summary><p>Richiedi un prelievo in qualsiasi momento dal tuo pannello di controllo. I fondi tornano al metodo di pagamento che hai scelto, con i tempi di elaborazione abituali.</p></details>
      <details><summary>Il mio denaro è protetto in modo sicuro?</summary><p>I conti sono protetti con standard di sicurezza e identificazione di livello professionale. Come per ogni investimento, il tuo capitale è a rischio e i valori possono scendere come salire.</p></details>
      <details><summary>Quanto tempo serve per iniziare a investire?</summary><p>La maggior parte dei membri completa la registrazione in pochi minuti. Una volta elaborato il primo deposito, puoi attivare un piano subito.</p></details>
      <details><summary>Ci sono commissioni nascoste?</summary><p>Tutti i costi sono mostrati in modo trasparente prima che tu ti impegni. Vedrai sempre cosa si applica al tuo piano, senza sorprese.</p></details>
      <details><summary>Qual è l’età minima per registrarsi?</summary><p>Devi avere almeno 18 anni per aprire un conto e investire. Può essere richiesta una verifica per confermare età e identità.</p></details>
      <details><summary>Quali metodi di pagamento sono accettati?</summary><p>Sono accettati metodi comuni come carte di debito e credito, bonifici bancari, alcuni portafogli elettronici e criptovalute. Le opzioni esatte compaiono nella fase di deposito.</p></details>
      <details><summary>Quando è disponibile l’assistenza clienti?</summary><p>Il nostro team di assistenza è disponibile dal lunedì al venerdì, dalle 9:00 alle 18:00, e si impegna a rispondere a ogni richiesta entro un giorno lavorativo.</p></details>
      <details><summary>Come vengono gestite le imposte sui guadagni?</summary><p>Le imposte sui guadagni da investimento dipendono dalle norme del tuo Paese e sono di tua responsabilità. Ti consigliamo di conservare i tuoi documenti e di consultare un consulente fiscale qualificato.</p></details>
      <details><summary>Cos’è la verifica KYC e perché è obbligatoria?</summary><p>Il KYC (Know Your Customer, «conosci il tuo cliente») è un controllo standard della tua identità. Aiuta a mantenere i conti sicuri e fa parte del processo abituale di apertura di un conto di investimento.</p></details>
      <details><summary>Ho bisogno di esperienza precedente negli investimenti?</summary><p>No. Ogni membro ha un analista finanziario personale che ti guida a ogni passo, quindi non serve conoscere già i mercati.</p></details>
      <details><summary>Chi gestisce i miei investimenti?</summary><p>Un analista finanziario dedicato, supportato da strumenti di IA, che lavora secondo i tuoi obiettivi e il tuo livello di rischio. L’analista unisce competenza professionale e tecnologia — le decisioni restano umane.</p></details>
      <details><summary>La piattaforma rispetta le norme regolamentari?</summary><p>Sì — risponde agli standard finanziari e di cybersecurity nazionali, con protezione del conto e verifica integrate.</p></details>
      <details><summary>Posso aggiungere altri fondi in seguito?</summary><p>Sì. Puoi ricaricare il tuo conto in qualsiasi momento e adattare il piano con il tuo analista man mano che evolvono i tuoi obiettivi.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Conto e sicurezza</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Come funziona l’accesso su <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Accedi con l’e-mail e la password registrate, dal sito o dal browser mobile. Se hai attivato la verifica in due passaggi, ti verrà chiesto un codice aggiuntivo; se dimentichi la password, puoi reimpostarla dalla schermata di accesso stessa.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Perché vi servono i miei documenti d’identità?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">La verifica è obbligatoria prima che un conto possa far circolare fondi. Impedisce anche a qualcun altro di aprire un conto a tuo nome.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Ho bisogno di esperienza precedente?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">No. La maggior parte dei membri inizia senza alcuna esperienza. Uno specialista ti accompagna nei primi passi e un saldo dimostrativo ti permette di esercitarti.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Posso usarla dal telefono?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Sì, la piattaforma funziona nel browser mobile, senza nulla da installare.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Inizia — <?= e(money_min()) ?> min.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Invia un messaggio</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
