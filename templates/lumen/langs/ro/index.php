<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Platformă de investiții cu AI');
$page_description = 'O platformă de investiții simplă alimentată de AI — piețe clare, decizii ghidate și deschidere rapidă de cont pe ' . SITE_NAME . '.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Introducere">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Investiți cu claritate.<br><span class="text-accent">Lăsați AI să păstreze lucrurile simple.</span></h1>
        <p class="lead">
          O platformă modernă care explică piețele în limbaj clar, evidențiază insight-uri utile de AI și vă ajută să plasați ordine fără zgomot inutil.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Începeți de la <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Vezi cum funcționează</a>
        </div>
      </div>

      <div class="hero-lumen__visual">
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="how">
    <div class="container">
      <div class="section-intro" data-reveal>
        <p class="eyebrow">Creată pentru începători</p>
        <h2>Trei pași. Apoi tranzacționați.</h2>
        <p class="lead">Fără jargon de terminal — un drum clar de la înscriere la prima poziție.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Deschideți contul</h3>
          <p>Câteva date sunt suficiente. Verificarea este scurtă și ghidată.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Alimentați în siguranță</h3>
          <p>Depuneți de la <?= MIN_DEPOSIT ?> <?= CURRENCY ?> cu metode de plată de încredere.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Tranzacționați cu ajutorul AI</h3>
          <p>Urmăriți insight-uri în limbaj clar și plasați ordine când sunteți pregătit.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">AI cu adevărat utilă</p>
        <h2>Semnale pe care le înțelegeți cu adevărat</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> transformă zgomotul pieței în mesaje scurte și lizibile — mai puțină ghicitură, mai multe decizii.
        </p>
        <ul class="feature-list">
          <li>Indicii clare cumpără / păstrează / urmărește</li>
          <li>Memento-uri de risc înainte de confirmare</li>
          <li>O interfață care rămâne calmă sub presiune</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Încercați platforma</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Exemplu de insight">
        <p class="insight-panel__label">Insight live</p>
        <p class="insight-panel__title">BTC / USD · momentum stabil</p>
        <p class="insight-panel__body">
          Volatilitatea se calmează. AI sugerează să urmăriți următoarea sesiune înainte de a mări poziția — controlați fiecare ordin.
        </p>
        <div class="insight-panel__meta">
          <span>Încredere ridicată</span>
          <span>Actualizat chiar acum</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Începeți</p>
        <h2>Creați-vă contul <?= e(SITE_NAME) ?></h2>
        <p class="lead lead-light">
          Alăturați-vă unei platforme premium care rămâne simplă — ghidare AI din prima zi.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Deschidere în mai puțin de 2 minute';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Infrastructură de încredere</p>
        <h2>Parteneri de infrastructură</h2>
        <p class="lead">Plăți și acces la piețe prin furnizori consacrați.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">FAQ</p>
        <h2>Răspunsuri rapide</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Am nevoie de experiență în trading?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Nu. <?= e(SITE_NAME) ?> este creată pentru investitori începători — sfaturile AI sunt în limbaj clar.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Care este depozitul minim?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Puteți începe de la <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Comisioanele rămân vizibile înainte de confirmare.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Este disponibil suportul?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Da — echipa noastră este disponibilă non-stop pentru alimentări și configurarea contului.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Citiți FAQ-ul complet →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
