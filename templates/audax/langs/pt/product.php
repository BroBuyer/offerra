<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Produto | ' . SITE_NAME . ' - Plataforma de trading IA';
$page_description = SITE_NAME . ' : plataforma de IA avançada para as criptomoedas ' . geo_in() . '.';
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
              Com a <?= e(SITE_NAME) ?>, a análise digital ajuda-te a fazer crescer o património
              <?= e(geo_in()) ?>
            </h1>
            <p>
              Graças a uma inteligência artificial de primeiro nível e a algoritmos avançados, a <?= e(SITE_NAME) ?>
              analisa de forma contínua os mercados globais. A plataforma identifica assim com rapidez
              as oportunidades mais promissoras. É o momento de dar o passo rumo ao sucesso com a
              <?= e(SITE_NAME) ?>.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Começa</a>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>A tua plataforma de trading digital tudo-em-um</h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <div class="img-wrap">
                  <img
                    loading="lazy"
                    src="<?= asset('static/images/a-ben-1.svg') ?>"
                    width="100"
                    height="100"
                    alt="Vantagem 1"
                  />
                </div>
                <h3>Gestão de criptomoedas</h3>
                <p>Gere com facilidade todos os teus ativos digitais num só sítio.</p>
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
                    alt="Vantagem 2"
                  />
                </div>
                <h3>Consulta a informação de todos os teus ativos a partir de uma única plataforma e de uma única interface</h3>
                <p>Otimiza a gestão financeira com uma visão de conjunto clara.</p>
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
                    alt="Vantagem 3"
                  />
                </div>
                <h3>Mercados de capitais</h3>
                <p>Mantém-te um passo à frente graças a dados e análises em tempo real.</p>
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
                    alt="Vantagem 4"
                  />
                </div>
                <h3>Acesso móvel</h3>
                <p>
                  O nosso sítio móvel totalmente otimizado permite-te seguir a carteira a qualquer momento, onde quer que estejas.
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
                    alt="Vantagem 5"
                  />
                </div>
                <h3>Estatísticas em direto</h3>
                <p>
                  Segue rendimentos e análises com uma precisão excecional, cada segundo do
                  dia.
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
              Descarrega a app hoje e gere as tuas finanças em tempo real a partir do smartphone.
            </h2>
            <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Regista-te</a>
          </div>
        </div>
      </section>

      <section class="preferences cards-img">
        <div class="container">
          <h2>
            Descobre a análise de IA de ponta da plataforma <?= e(SITE_NAME) ?> e uma interface de trading
            de ativos intuitiva <?= e(geo_in()) ?>.
          </h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-1.svg') ?>" alt="Funcionalidade 1" />
              </div>
              <div class="text">
                <h4>Carteira</h4>
                <p>
                  Reforça o teu perfil financeiro com as nossas estratégias de trading comprovadas e
                  inovadoras.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-2.svg') ?>" alt="Funcionalidade 2" />
              </div>
              <div class="text">
                <h4>Análise cripto</h4>
                <p>
                  Aproveita a última geração de inteligência artificial <?= e(SITE_NAME) ?> e os seus
                  algoritmos avançados de aprendizagem automática para identificar com rapidez as oportunidades rentáveis.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-3.svg') ?>" alt="Funcionalidade 3" />
              </div>
              <div class="text">
                <h4>Compra simplificada</h4>
                <p>
                  Oferecemos funcionalidades avançadas e acompanhamento para negociar as criptomoedas
                  de forma simples e intuitiva. Sem custos ocultos, execução ultrarrápida. É a tua
                  ocasião de maximizar os ganhos de trading com a potência da IA.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/a-pref-4.svg') ?>" alt="Funcionalidade 4" />
              </div>
              <div class="text">
                <h4>Ativos digitais</h4>
                <p>
                  Aproveita a ocasião de maximizar os lucros do trading de ativos, sejam
                  criptomoedas ou outros instrumentos. Constrói uma carteira diversificada com o nosso software
                  e os nossos algoritmos de aprendizagem automática. É o momento de dar o passo e começar
                  o teu percurso de trading.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
