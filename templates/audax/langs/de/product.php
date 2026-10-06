<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Produkt | ' . SITE_NAME . ' - KI-Trading-Plattform';
$page_description = SITE_NAME . ' : fortschrittliche KI-Plattform für Kryptowährungen ' . geo_in() . '.';
$page_canonical = page_url('product.php');
$active_page = 'product';
$page_css = ['produkt-mob.min.css', 'produkt-desk.min.css'];
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
              Mit <?= e(SITE_NAME) ?> nutzen Sie digitale Analysen, um Vermögen spürbar aufzubauen
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Dank erstklassiger künstlicher Intelligenz und fortschrittlicher Algorithmen analysiert <?= e(SITE_NAME) ?>
              laufend die globalen Märkte. So erkennt die Plattform rasch
              die aussichtsreichsten Gelegenheiten. Jetzt ist der Moment, den Schritt zum Erfolg mit
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Jetzt starten</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>Ihre digitale All-in-one-Trading-Plattform</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Vorteil 1"
                  />
                </div>
                <h3>Verwaltung von Kryptowährungen</h3>
                <p>Verwalten Sie alle digitalen Assets an einem Ort.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-2.svg') ?>"
                    width="100"
                    height="100"
                    alt="Vorteil 2"
                  />
                </div>
                <h3>Rufen Sie Informationen zu all Ihren Assets über eine Plattform und eine Oberfläche ab</h3>
                <p>Optimieren Sie Ihre Finanzübersicht mit einem klaren Gesamtbild.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-3.svg') ?>"
                    width="100"
                    height="100"
                    alt="Vorteil 3"
                  />
                </div>
                <h3>Kapitalmärkte</h3>
                <p>Bleiben Sie dem Markt voraus — mit Daten und Analysen in Echtzeit.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-4.svg') ?>"
                    width="100"
                    height="100"
                    alt="Vorteil 4"
                  />
                </div>
                <h3>Mobiler Zugriff</h3>
                <p>
                  Unsere vollständig optimierte mobile Website lässt Sie das Portfolio jederzeit und überall verfolgen.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-5.svg') ?>"
                    width="100"
                    height="100"
                    alt="Vorteil 5"
                  />
                </div>
                <h3>Live-Statistiken</h3>
                <p>
                  Verfolgen Sie Renditen und Analysen mit hoher Genauigkeit, in jeder Sekunde des
                  Tages.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="row">
            <h2>
              Laden Sie die App noch heute herunter und steuern Sie Ihre Finanzen in Echtzeit vom Smartphone.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Registrieren</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Entdecken Sie die KI-Analysen der Plattform <?= e(SITE_NAME) ?> und eine intuitive Trading-Oberfläche
            für Assets <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Funktion 1" />
              </div>
              <div class="text">
                <h4>Portfolio</h4>
                <p>
                  Stärken Sie Ihr Finanzprofil mit unseren bewährten und innovativen Trading-
                  Strategien.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Funktion 2" />
              </div>
              <div class="text">
                <h4>Krypto-Analyse</h4>
                <p>
                  Nutzen Sie die neueste Generation der künstlichen Intelligenz von <?= e(SITE_NAME) ?> und ihre
                  fortschrittlichen Algorithmen für maschinelles Lernen, um rentable Chancen rasch zu erkennen.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Funktion 3" />
              </div>
              <div class="text">
                <h4>Einfacher Kauf</h4>
                <p>
                  Wir bieten fortschrittliche Funktionen und Begleitung, um Kryptowährungen
                  einfach und intuitiv zu handeln. Keine versteckten Gebühren, ultraschnelle Ausführung. Das ist Ihre
                  Gelegenheit, Trading-Gewinne mit der Kraft der KI zu steigern.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Funktion 4" />
              </div>
              <div class="text">
                <h4>Digitale Assets</h4>
                <p>
                  Nutzen Sie die Gelegenheit, Gewinne aus dem Handel mit Assets zu steigern — ob
                  Kryptowährungen oder andere Instrumente. Bauen Sie ein diversifiziertes Portfolio mit unserer Software
                  und unseren Algorithmen für maschinelles Lernen. Jetzt ist der Moment, den Schritt zu gehen und
                  Ihr Trading zu beginnen.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
