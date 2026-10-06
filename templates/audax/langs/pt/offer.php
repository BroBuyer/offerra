<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Oferta | ' . SITE_NAME . ' - Começa o teu percurso';
$page_description = 'Começa a operar em ' . SITE_NAME . '. Regista-te grátis agora.';
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
              Abre hoje a tua conta na <?= e(SITE_NAME) ?>. O painel da carteira está
              pronto.
            </h1>
            <p>
              Em menos de 5 minutos crias a conta gratuita, fazes um depósito e começas a
              operar. Começa hoje: é a ocasião de construir um futuro financeiro sólido.
            </p>
            <div class="btns-wrap">
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Regista-te</a>
            </div>
          </div>
        </div>
      </section>

      <section class="opportunities">
        <div class="container">
          <div class="top">
            <h2>Como funciona</h2>
          </div>
          <div class="opportunities-slider">
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-1.svg') ?>" alt="Ícone de abertura de conta" />
                <h3>Abertura de conta</h3>
                <p>
                  Podes criar a conta em poucos segundos. Acedes de imediato às nossas
                  ferramentas de trading e às oportunidades que te esperam.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-2.svg') ?>" alt="Ícone de depósito" />
                <h3>Deposita fundos</h3>
                <p>Deposita os fundos para começares a operar.</p>
              </div>
            </div>
            <div class="p-slide">
              <div class="bg-elem">
                <img loading="lazy" src="<?= asset('static/images/o-como-3.svg') ?>" alt="Ícone de compra e venda" />
                <h3>Compra e vende</h3>
                <p>
                  Reforça a carteira com confiança. Entra no mercado sem
                  hesitar.
                </p>
              </div>
            </div>
          </div>
          <div class="bottom">
            <p>Não percas esta oportunidade! Junta-te a milhares de traders que obtêm resultados.</p>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h3>Segue a carteira com saldos atualizados e ganhos em tempo real.</h3>
            </div>
            <div class="half right">
              <p>
                Não percas nenhum pormenor graças à análise aprofundada da <?= e(SITE_NAME) ?> sobre
                padrões de trading e dados sempre atualizados. Segue todas as estatísticas-chave
                — saldo, lucros e variações de preço. Com estas ferramentas
                maximizas os rendimentos e tomas decisões de investimento com critério. O futuro
                é agora: começa hoje.
              </p>
              <a class="orange-btn scroll" href="<?= page_url('index.php') ?>#form">Começa</a>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
