<?php
require_once __DIR__ . '/includes/config.php';
$page_title = SITE_NAME . ' — Investimento inteligente com IA ' . geo_in();
$page_description = 'Trading automatizado ' . geo_in() . '. Começa com ' . money_min() . ' graças à nossa tecnologia de IA. Seguro, transparente e simples.';
$page_canonical = page_url();
$active_page = 'home';
$page_css = ['home-mob.min.css', 'home-desk.min.css', 'calculator.css', 'tinyslider.min.css'];
$page_js = ['tinyslider.min.js', 'index.min.js', 'calculator.js'];
$page_has_form = true;
// Keep the slider's span proportional to the offer's minimum instead of a fixed $10,000.
$calc_deposit_max = max(10000, (int) MIN_DEPOSIT * 40);
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main">
      <section class="hero hero-v_2">
        <div class="container">
          <div class="content-wrap">
            <div class="half left">
              <h1>Plataforma <?= e(SITE_NAME) ?></h1>
              <p>
                O que distingue a <?= e(SITE_NAME) ?>? É a ocasião de investir com mais inteligência
                <?= e(geo_in()) ?>. A nossa plataforma de trading fiável, assistida por IA, ajuda-te a decidir com critério
                e a gerir o risco. Descobre o que a IA da <?= e(SITE_NAME) ?> te pode trazer.
              </p>

              <div class="rating">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Classificada com 4,7 estrelas por mais de 2.804 utilizadores satisfeitos</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Classificação 4,7 em 5"
                  />
                </div>
              </div>
            </div>
            <div class="half right">
              <div class="calc-wrap">
                <h2>Junta-te à <?= e(SITE_NAME) ?></h2>
                <div id="registration-form" class="leadform bg-elem">
                  <?php
  $form_id = 'aUwMAyO';
  $form_wrap_class = 'BGBYl newRegForm';
  $form_field_classes = ['cLZbqT AynAsYgTO', 'cLZbqT AynAsYgTO', 'cLZbqT zAOgjWA', 'cLZbqT RAVeMxYu', 'cLZbqT eqlXFEk'];
  $form_submit = 'Junta-te';
  $form_phone_id = 'NNmFIx';
  include __DIR__ . '/includes/form.php';
?>
                </div>
                <div class="form_text_bottom">
                  <p>
                    Ao introduzires os teus dados pessoais e clicares no botão «Junta-te»,
                    confirmas que aceitas os
                    <a href="<?= page_url('privacy.php') ?>" target="_blank">Política de privacidade</a> e os
                    <a href="<?= page_url('conditions.php') ?>" target="_blank">Termos de utilização</a>.
                  </p>
                  <img src="<?= asset('static/images/payment-logos.svg') ?>" alt="Métodos de pagamento" />
                </div>
              </div>

              <div class="rating mob">
                <img class="rating-img" src="<?= asset('static/images/rating-pp.webp') ?>" alt="" />
                <div>
                  <p>Classificada com 4,7 estrelas por mais de 2.804 utilizadores satisfeitos</p>
                  <img
                    class="stars"
                    src="<?= asset('static/images/stars.svg') ?>"
                    width="120"
                    height="20"
                    alt="Classificação 4,7 em 5"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <link rel="stylesheet" href="<?= asset('static/css/tinyslider.min.css') ?>" />

      <section class="home-calc" aria-label="Calculadora de ganhos">
        <div
          class="calc-widget is-ltr"
          dir="ltr"
          id="calculator"
          data-calc-root
          data-currency="<?= e(currency_symbol()) ?>"
          data-locale="<?= e(site_locale()) ?>"
          style="
            --calc-accent: #c2410c;
            --calc-cta-bg: #ee6129;
            --calc-cta-text-color: #ffffff;
            --calc-track: #d9deef;
            --calc-radius: 18px;
            --calc-title-color: #1a1a1a;
            --calc-subtitle-color: #555;
            --calc-label-color: #555;
            --calc-value-color: #555;
            --calc-minmax-color: #555;
            --calc-result-bg: #ee6129;
            --calc-result-title-color: #e9e4e3;
            --calc-result-value-color: #ffffff;
            --calc-result-label-color: #e9e4e3;
          "
        >
          <h2 class="calc-widget__title">Calcula os teus ganhos potenciais</h2>
          <p class="calc-widget__subtitle">
            Escolhe o montante e a duração do teu investimento para estimar os teus ganhos potenciais
          </p>
          <div class="calc-widget__wrapper">
            <div class="calc-widget__controls">
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-deposit">O teu depósito:</label>
                <div class="calc-widget__value"><span data-calc="deposit_value"><?= e(money_min()) ?></span></div>
                <input
                  id="calc-deposit"
                  class="calc-widget__range"
                  type="range"
                  data-calc="deposit"
                  min="<?= (int) MIN_DEPOSIT ?>"
                  max="<?= (int) $calc_deposit_max ?>"
                  step="1"
                  value="<?= (int) MIN_DEPOSIT ?>"
                />
                <div class="calc-widget__minmax">
                  <span data-calc="deposit_min"><?= e(money_min()) ?></span>
                  <span data-calc="deposit_max"><?= e(currency_symbol() . number_format($calc_deposit_max)) ?></span>
                </div>
              </div>
              <div class="calc-widget__control">
                <label class="calc-widget__label" for="calc-days">Duração do investimento:</label>
                <div class="calc-widget__value">
                  <span data-calc="days_value">45</span> <span>dias</span>
                </div>
                <input
                  id="calc-days"
                  class="calc-widget__range"
                  type="range"
                  data-calc="days"
                  min="1"
                  max="90"
                  step="1"
                  value="45"
                />
                <div class="calc-widget__minmax">
                  <span>A partir de 1 dia</span>
                  <span>Até 3 meses</span>
                </div>
              </div>
            </div>
            <div class="calc-widget__result">
              <div class="calc-widget__result-head">
                <span class="calc-widget__result-title">Podes ganhar</span>
                <div class="calc-widget__total"><span data-calc="total"><?= e(money_min()) ?></span></div>
              </div>
              <div class="calc-widget__stats">
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Rentabilidade</div>
                  <div class="calc-widget__stat-value"><span data-calc="profitability">30</span>%</div>
                </div>
                <div class="calc-widget__stat">
                  <div class="calc-widget__stat-label">Ganhos</div>
                  <div class="calc-widget__stat-value"><span data-calc="revenue"><?= e(currency_symbol()) ?>0</span></div>
                </div>
              </div>
            </div>
          </div>
          <button type="button" class="calc-widget__cta" data-calc-open-modal>
            Pedir um cálculo personalizado
          </button>
        </div>
        <div class="calc-modal" id="calculator-modal" data-calc-modal aria-hidden="true">
          <div class="calc-modal__overlay" data-calc-modal-close></div>
          <div
            class="calc-modal__content"
            style="background: #eeeeee; --calc-modal-text: #1a1a1a; --calc-modal-close-color: #1a1a1a"
          >
            <button type="button" class="calc-modal__close" data-calc-modal-close aria-label="Fechar">
              &times;
            </button>
            <h3 class="calc-modal__title">
              Deixa os teus contactos: um dos nossos especialistas entra em contacto contigo o mais
              possível.
            </h3>
            <div class="leadform">
              <?php
  $form_id = 'calc-lead-form';
  $form_wrap_class = 'newRegForm';
  $form_field_classes = ['', '', '', '', ''];
  $form_submit = 'Junta-te';
  $form_phone_id = 'calc-phone';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>
      <section class="cards-img">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                O teu acesso <?= e(geo_from()) ?> às principais plataformas de trading cripto.
              </h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta1.svg') ?>" alt="Ícone 1" />
                </div>
                <div class="text">
                  <p>
                    A <?= e(SITE_NAME) ?> recorre à inteligência artificial e à aprendizagem automática para
                    identificar novas oportunidades nos mercados financeiros.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="wrap-img orange-bg">
                  <img loading="lazy" src="<?= asset('static/images/puerta2.svg') ?>" alt="Ícone 2" />
                </div>
                <div class="text">
                  <p>
                    Os investidores em criptoativos <?= e(geo_in()) ?> acedem às maiores plataformas de troca do
                    setor e podem negociar ativos de referência como Bitcoin e Ethereum, além de um
                    vasto leque de altcoins e stablecoins.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="partners">
        <h2>Os nossos parceiros de confiança</h2>
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

      <section class="advantages cards-img">
        <div class="container">
          <h2>Porque escolher a <?= e(SITE_NAME) ?> <?= e(geo_in()) ?>?</h2>
          <div class="cards-row">
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-1.svg') ?>" alt="Ícone de vantagem 1" />
              </div>
              <div class="text">
                <h3>Segurança <?= e(geo_in()) ?></h3>
                <p>
                  Como plataforma reconhecida, colocamos a segurança em primeiro lugar. Usamos SSL,
                  encriptação de nível bancário e 2FA para garantir a fiabilidade da <?= e(SITE_NAME) ?> e a proteção
                  dos teus dados.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-2.svg') ?>" alt="Ícone de vantagem 2" />
              </div>
              <div class="text">
                <h3>Algoritmos de IA potentes</h3>
                <p>
                  Os nossos bots adaptam-se, aplicam estratégias de IA avançadas e executam-nas de forma autónoma. Tu
                  defines a abordagem e manténs o controlo sobre o risco, os mercados e os objetivos, para
                  te concentrares no essencial.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-3.svg') ?>" alt="Ícone de vantagem 3" />
              </div>
              <div class="text">
                <h3>Comissões transparentes. Sem custos ocultos.</h3>
                <p>
                  Todas as comissões são transparentes e nunca cobramos aos investidores <?= e(geo_in()) ?> pelo uso da
                  <?= e(SITE_NAME) ?>. O dinheiro que depositas para fazer trading é inteiramente teu: usas-o
                  como preferires. Não retemos nada. Começa já a partir de <?= e(money_min()) ?> e conserva o controlo total
                  dos teus investimentos.
                </p>
              </div>
            </div>
            <div class="card-img">
              <div class="wrap-img orange-bg">
                <img loading="lazy" src="<?= asset('static/images/adv-4.svg') ?>" alt="Ícone de vantagem 4" />
              </div>
              <div class="text">
                <h3>Interface intuitiva</h3>
                <p>
                  O nosso painel simples e intuitivo combina funcionalidade, rigor e
                  facilidade de uso, para principiantes e traders com experiência.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="list bg">
        <div class="container">
          <h2>Como funciona a <?= e(SITE_NAME) ?>?</h2>
          <ul class="list-wrap">
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ícone de lista 1" />
              <p>
                O nosso software proprietário monitoriza em paralelo várias plataformas de trading e
                identifica as diferenças de preço aproveitáveis.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ícone de lista 2" />
              <p>
                A <?= e(SITE_NAME) ?> compra em baixa num mercado e vende a um preço mais alto noutro,
                aproveitando as oportunidades de arbitragem. Esta abordagem pode gerar um lucro
                ao acumular os rendimentos dos pequenos movimentos de preço.
              </p>
            </li>
            <li>
              <img loading="lazy" src="<?= asset('static/images/list-icon.svg') ?>" alt="Ícone de lista 3" />
              <p>Descobre como a <?= e(SITE_NAME) ?> pode melhorar a tua experiência de trading.</p>
            </li>
          </ul>
        </div>
      </section>

      <section class="register no-bg">
        <div class="container">
          <div class="content-wrap">
            <div class="heading">
              <h2>
                Junta-te à <?= e(SITE_NAME) ?> e construamos juntos o futuro das finanças <?= e(geo_in()) ?>.
              </h2>
              <p>
                A <?= e(SITE_NAME) ?> oferece uma vasta gama de ferramentas para negociar criptoativos <?= e(geo_in()) ?>. A plataforma
                integra as principais praças de troca mundiais e dá acesso a numerosas
                criptomoedas, desde líderes como Bitcoin até outras como XRP. Também te permite
                aproveitar as variações de preço.
              </p>
            </div>
            <div id="lead-form-2" class="leadform bg-elem">
              <?php
  $form_id = 'BMLttSHjfS';
  $form_wrap_class = 'xvbcrLTI newRegForm';
  $form_field_classes = ['yilnwbgoXC QpnvIC', 'yilnwbgoXC QpnvIC', 'yilnwbgoXC aCLoztcyot', 'yilnwbgoXC BQXLrCnK', 'yilnwbgoXC bzozYCakaa'];
  $form_submit = 'Junta-te';
  $form_phone_id = 'UhZgSohZrA';
  include __DIR__ . '/includes/form.php';
?>
            </div>
          </div>
        </div>
      </section>

      <section class="reviews">
        <div class="container">
          <div class="reviews-wrap">
            <div class="review">
              <h3>João, 37 anos, Lisboa</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Classificação 1"
                />
              </div>
              <p class="review-text">
                Comecei com <?= e(money_min()) ?> e agora retiro <?= e(currency_symbol() . '2,000') ?> por mês.
              </p>
            </div>
            <div class="review">
              <h3>Inês, 42 anos, Porto</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Classificação 2"
                />
              </div>
              <p class="review-text">Plataforma simples: tudo é transparente e concreto.</p>
            </div>
            <div class="review">
              <h3>Ana, 45 anos, Coimbra</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Classificação 3"
                />
              </div>
              <p class="review-text">A melhor solução para um rendimento passivo.</p>
            </div>
            <div class="review">
              <h3>Miguel, 34 anos, Faro</h3>
              <div class="rating">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/rev-stars.svg') ?>"
                  width="120"
                  height="20"
                  alt="Classificação 4"
                />
              </div>
              <p class="review-text">Ganhos estáveis, mesmo quando estou de férias.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="benefits bg">
        <div class="container">
          <h2>A oferta cripto da <?= e(SITE_NAME) ?></h2>
          <div class="benefits-slider">
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben1.svg') ?>"
                  width="100"
                  height="100"
                  alt="Vantagem 1"
                />
                <h3>A chave do trading cripto</h3>
                <p>
                  O nosso software de última geração é o coração do sistema de trading. Está
                  concebido para aproveitar as pequenas diferenças de preço entre as principais praças
                  de troca de criptomoedas.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben2.svg') ?>"
                  width="100"
                  height="100"
                  alt="Vantagem 2"
                />
                <h3>Trading de ativos à escala global</h3>
                <p>
                  Os preços das ações e de outros ativos evoluem sem cessar; a <?= e(SITE_NAME) ?> fornece as
                  ferramentas para reagir com rapidez aos movimentos de mercado e melhorar as probabilidades de rendimentos
                  sólidos.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben3.svg') ?>"
                  width="100"
                  height="100"
                  alt="Vantagem 3"
                />
                <h3>Trading Forex</h3>
                <p>
                  As taxas de câmbio mudam sem tréguas e criam oportunidades. A <?= e(SITE_NAME) ?>
                  ajuda-te a aproveitar mesmo os movimentos mais pequenos do mercado cambial.
                </p>
              </div>
            </div>
            <div class="p-slide">
              <div class="content">
                <img
                  loading="lazy"
                  src="<?= asset('static/images/ben4.svg') ?>"
                  width="100"
                  height="100"
                  alt="Vantagem 4"
                />
                <h3>A <?= e(SITE_NAME) ?> e o Bitcoin</h3>
                <p>
                  O Bitcoin continua a ser o líder de mercado, a criptomoeda mais visível e mais estável
                  do ponto de vista financeiro. Ao reconhecer e aproveitar de forma sistemática a volatilidade,
                  a <?= e(SITE_NAME) ?> facilita rendimentos mais regulares.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>Informação da plataforma</h2>
            </div>
            <div class="bottom cards-row">
              <div class="card-img">
                <div class="text">
                  <h3>Privacidade</h3>
                  <p>A <?= e(SITE_NAME) ?> cumpre a regulamentação aplicável em matéria de privacidade <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Ativos</h3>
                  <p>Bitcoin, Ethereum, XRP, Litecoin, Dash e outras criptomoedas principais.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Tipo de plataforma</h3>
                  <p>
                    A <?= e(SITE_NAME) ?> oferece aos investidores <?= e(geo_in()) ?> a possibilidade de aproveitar as variações de preço
                    das principais criptomoedas, incluindo altcoins como XRP.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Países</h3>
                  <p>A nossa plataforma está disponível em todo o mundo, também <?= e(geo_in()) ?>.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Opções de depósito</h3>
                  <p>Cartões de crédito, PayPal e transferência bancária.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Custos</h3>
                  <p>O acesso à <?= e(SITE_NAME) ?> é gratuito <?= e(geo_from()) ?>.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta sec">
        <div class="container">
          <div class="content-wrap">
            <div class="half left bg-elem">
              <h2>A <?= e(SITE_NAME) ?> é fiável?</h2>
              <p>
                A <?= e(SITE_NAME) ?> colabora com corretores de primeiro nível, especialmente fiáveis e
                com vasta experiência. Aplicamos medidas de segurança de nível bancário, como a encriptação TLS/SSL
                e a autenticação de dois fatores (2FA), para proteger os teus ativos e os teus dados. A nossa
                estrutura de preços é totalmente transparente, sem custos ocultos. Cumprimos a
                regulamentação aplicável.
              </p>
            </div>
            <div class="half right">
              <img loading="lazy" src="<?= asset('static/images/cta2.webp') ?>" alt="Gráfico de fiabilidade" />
            </div>
          </div>
        </div>
      </section>

      <section class="cards-img no-img sec third">
        <div class="container">
          <div class="content-wrap">
            <div class="top">
              <h2>
                Os nossos sistemas de inteligência artificial e aprendizagem automática geram uma análise de mercado
                em tempo real e recomendações de trading concretas para otimizar os resultados.
              </h2>
            </div>
            <div class="bottom cards-row slider4">
              <div class="card-img">
                <div class="text">
                  <h3>Copy trading</h3>
                  <p>
                    Os melhores traders são-no por um motivo. Com a <?= e(SITE_NAME) ?> podes seguir
                    e copiar as suas operações para aproveitar a experiência e a estratégia deles.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Ações fracionadas</h3>
                  <p>
                    Ao diversificar a carteira acedes a ativos de qualidade mesmo com um
                    capital limitado.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Recursos formativos</h3>
                  <p>
                    Para progredir oferecemos recursos formativos: tutoriais,
                    webinars e guias.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>App móvel</h3>
                  <p>Opera a qualquer momento, onde quer que estejas.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Assistência 24 horas</h3>
                  <p>O nosso serviço de apoio ao cliente está disponível 24 horas por dia, 7 dias por semana.</p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Trading assistido por IA</h3>
                  <p>
                    Graças aos nossos algoritmos avançados de inteligência artificial e aprendizagem automática,
                    a <?= e(SITE_NAME) ?> analisa de forma contínua os últimos dados de mercado. As oportunidades
                    com maior potencial de rentabilidade são assim identificadas com rapidez.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Estratégias personalizáveis</h3>
                  <p>
                    Depois de definidos o perfil de risco e os objetivos, podes usá-los para
                    afinar a estratégia de trading na nossa plataforma multiativos.
                  </p>
                </div>
              </div>
              <div class="card-img">
                <div class="text">
                  <h3>Acesso a ativos diversificados</h3>
                  <p>
                    Embora nos especializemos em criptomoedas, também damos suporte ao trading
                    de divisas, ações, outros valores e matérias-primas.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="register last">
        <div class="container">
          <div class="content-wrap bg">
            <div class="half left">
              <h2>Podes operar a partir de casa, analisar os mercados e seguir as tuas posições.</h2>
              <div id="lead-form-3" class="leadform bg-elem">
                <?php
  $form_id = 'EmjYXUd';
  $form_wrap_class = 'WQGQRZg newRegForm';
  $form_field_classes = ['yxWFn tOKkGARA', 'yxWFn tOKkGARA', 'yxWFn HNyYjm', 'yxWFn bDYVXEsrkL', 'yxWFn bVfzmL'];
  $form_submit = 'Junta-te';
  $form_phone_id = 'CyVRnwVoOX';
  include __DIR__ . '/includes/form.php';
?>
              </div>
            </div>
            <div class="half right desk">
              <h2>Podes operar a partir de casa, analisar os mercados e seguir as tuas posições.</h2>
              <img src="<?= asset('static/images/explore.webp') ?>" alt="Regista-te" />
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
