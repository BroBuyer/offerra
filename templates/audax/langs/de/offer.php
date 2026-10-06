<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Angebot | ' . SITE_NAME . ' - Starten Sie durch';
$page_description = 'Starten Sie das Trading auf ' . SITE_NAME . '. Jetzt kostenlos registrieren.';
$page_canonical = page_url('offer.php');
$active_page = 'offer';
$page_css = ['angebot-mob.min.css', 'angebot-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <div class="content-wrap">
            <h1>
              Eröffnen Sie noch heute Ihr Konto bei <?= e(SITE_NAME) ?>. Das Portfolio-Dashboard ist
              bereit.
            </h1>
            <p>
              In weniger als 5 Minuten eröffnen Sie das kostenlose Konto, zahlen ein und beginnen mit dem
              Trading. Starten Sie heute: das ist Ihre Gelegenheit, ein solides finanzielles Fundament zu legen.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Registrieren</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>So funktioniert es</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Symbol Kontoeröffnung" />
                <h3>Kontoeröffnung</h3>
                <p>
                  Sie können das Konto in wenigen Sekunden eröffnen. Sie erhalten sofort Zugang zu unseren
                  Trading-Werkzeugen und den Chancen, die auf Sie warten.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Symbol Einzahlung" />
                <h3>Geld einzahlen</h3>
                <p>Zahlen Sie ein, um mit dem Trading zu beginnen.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Symbol Kaufen und Verkaufen" />
                <h3>Kaufen und verkaufen</h3>
                <p>
                  Stärken Sie das Portfolio mit Überzeugung. Gehen Sie den Schritt in den Markt, ohne
                  zu zögern.
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Verpassen Sie das nicht! Schließen Sie sich Tausenden erfolgreicher Trader an.</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Verfolgen Sie das Portfolio mit laufend aktualisierten Salden und Gewinnen in Echtzeit.</h3>
            </div>
            <div class="half right">
              <p>
                Verpassen Sie kein Detail dank der gründlichen Analyse von <?= e(SITE_NAME) ?> zu
                Trading-Mustern und stets aktuellen Daten. Sie verfolgen alle Kennzahlen
                — Saldo, Gewinne und Kursschwankungen. Mit diesen Werkzeugen
                steigern Sie die Rendite und treffen fundierte Anlageentscheidungen. Die Zukunft
                ist jetzt: starten Sie heute.
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Jetzt starten</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
