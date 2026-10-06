<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Equipa | ' . SITE_NAME . ' - A nossa equipa de especialistas';
$page_description = 'Conhece a equipa por trás da ' . SITE_NAME . '.';
$page_canonical = page_url('about.php');
$active_page = 'about';
$page_css = ['team-mob.min.css', 'team-desk.min.css'];
$page_js = [];
$page_has_form = false;
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero">
        <div class="container">
          <div class="content-wrap">
            <h1>A nossa equipa</h1>
            <div class="employees">
              <div class="employee">
                <img src="<?= asset('static/images/ceo-ph.jpg') ?>" alt="Foto do CEO" />
                <div class="text-wrap">
                  <h2>Marko Horvat</h2>
                  <p>Administrador-delegado (CEO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/partner-ph.jpg') ?>" alt="Foto do sócio" />
                <div class="text-wrap">
                  <h2>Luka Mari&#263;</h2>
                  <p>Sócio e vice-presidente de desenvolvimento de negócio</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cfo-ph.jpg') ?>" alt="Foto do CFO" />
                <div class="text-wrap">
                  <h2>Ivan Kova&#269;</h2>
                  <p>Sócio e diretor financeiro (CFO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dir-ph.jpg') ?>" alt="Foto do sócio-gerente" />
                <div class="text-wrap">
                  <h2>Stjepan Babi&#263;</h2>
                  <p>Sócio-gerente</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/cto-ph.jpg') ?>" alt="Foto do CTO" />
                <div class="text-wrap">
                  <h2>Mateo Vidovi&#263;</h2>
                  <p>Diretor técnico (CTO)</p>
                </div>
              </div>
              <div class="employee">
                <img src="<?= asset('static/images/dirp-ph.jpg') ?>" alt="Foto da diretora de produto" />
                <div class="text-wrap">
                  <h2>Ana Brki&#263;</h2>
                  <p>Diretora de produto</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <h2>Apoio cripto</h2>
          <div class="content-wrap bg-or">
            <div class="half left">
              <h3>Apoio ao cliente e assistência</h3>
              <p>
                A equipa da <?= e(SITE_NAME) ?> reúne profissionais com experiência. O nosso objetivo era
                criar um ambiente seguro, em que cada um possa comprar criptomoedas como
                Bitcoin com total tranquilidade. A experiência da nossa equipa confirma que a <?= e(SITE_NAME) ?> é
                fiável. Tens uma pergunta? O teu consultor dedicado está à disposição.
              </p>
            </div>
            <div class="half right">
              <h3>Horário de assistência</h3>
              <p>
                Em caso de problemas ou perguntas, o serviço de apoio ao cliente da <?= e(SITE_NAME) ?> está à tua disposição
                24 horas por dia. Se não pudermos responder de imediato, a equipa entra em contacto contigo o mais
                possível.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="partners bg-bl">
        <h2>Confiam em nós</h2>
        <div class="partners-slider">
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/cryptocom-logo.svg') ?>" alt="Logótipo Crypto.com" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/binance-logo.svg') ?>" alt="Logótipo Binance" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/coindesk-logo.svg') ?>" alt="Logótipo CoinDesk" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/trading-view.svg') ?>" alt="Logótipo TradingView" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/deloitte-logo.svg') ?>" alt="Logótipo Deloitte" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/ledger-logo.svg') ?>" alt="Logótipo Ledger" />
          </div>
          <div class="p-slide">
            <img loading="lazy" src="<?= asset('static/images/decrypt-logo.svg') ?>" alt="Logótipo Decrypt" />
          </div>
          <div class="p-slide s-bg">
            <img loading="lazy" src="<?= asset('static/images/nansen-logo.svg') ?>" alt="Logótipo Nansen" />
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
