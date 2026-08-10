<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Plataforma de Trading IA');
$page_description = 'Negocie cripto e outros mercados na ' . SITE_NAME . ' — conta segura, preços claros, ferramentas IA úteis e execução rápida de ordens.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <div class="market-tape" aria-hidden="true">
    <div class="container market-tape-inner">
      <span class="tape-item"><strong>BTC</strong> <span class="tape-up" data-change="btc">—</span></span>
      <span class="tape-item"><strong>ETH</strong> <span class="tape-up" data-change="eth">—</span></span>
      <span class="tape-item"><strong>SOL</strong> <span class="tape-down" data-change="sol">—</span></span>
      <span class="tape-item"><strong>XRP</strong> <span class="tape-up" data-change="xrp">—</span></span>
      <span class="tape-item"><strong>Spreads</strong> desde 0,1</span>
      <span class="tape-item"><strong>Velocidade</strong> abaixo de 40 ms</span>
      <span class="tape-item"><strong>Mercados</strong> 24/7</span>
    </div>
  </div>

  <section class="hero-terminal">
    <div class="container hero-terminal-grid">
      <div>
        <div class="hero-kicker"><span class="dot" aria-hidden="true"></span> Plataforma de trading com IA</div>
        <h1>Negocie cripto e outros mercados.<br><span class="text-accent">Comece com <?= e(SITE_NAME) ?></span></h1>
        <p class="lead">
          Uma plataforma simples para trading de cripto e multiativos — segurança sólida, preços claros,
          análises IA úteis e uma interface fácil de seguir.
        </p>
        <div class="hero-badges" aria-label="Destaques da plataforma">
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Ligação encriptada segura (SSL)
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Apoio ao cliente disponível 24/7
          </span>
          <span class="hero-badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Execução rápida de ordens
          </span>
        </div>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Comece hoje — depósito mín. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
        </div>
      </div>

      <div class="board-card">
        <div class="board-card-head">
          <span>Criar conta</span>
          <span class="live-pill">Seguro</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'hero-form';
          $form_heading = 'Registe-se em menos de 2 minutos';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

  <section class="section markets-block" id="markets">
    <div class="container split">
      <div>
        <p class="eyebrow">Mercados em direto</p>
        <h2>Veja os preços em tempo real. Comece quando estiver pronto.</h2>
        <p class="lead" style="margin: 1rem 0 1.75rem;">
          Acompanhe Bitcoin, Ethereum e outros pares principais num painel claro —
          depois abra a conta e faça a primeira operação.
        </p>
        <a href="sign.php" class="btn btn-primary">Abrir acesso aos mercados</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Preços de mercado em direto">
        <div class="exchange-panel-header">
          <span>Mercados</span>
          <span class="live-dot">Em direto</span>
        </div>
        <div class="ticker-list" data-ticker-list>
          <div class="ticker-row">
            <div><div class="ticker-symbol">BTC</div><div class="ticker-pair">BTC/USD</div></div>
            <div class="ticker-price" data-price="btc">—</div>
            <div class="ticker-change up" data-change="btc">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">ETH</div><div class="ticker-pair">ETH/USD</div></div>
            <div class="ticker-price" data-price="eth">—</div>
            <div class="ticker-change up" data-change="eth">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">SOL</div><div class="ticker-pair">SOL/USD</div></div>
            <div class="ticker-price" data-price="sol">—</div>
            <div class="ticker-change down" data-change="sol">—</div>
          </div>
          <div class="ticker-row">
            <div><div class="ticker-symbol">XRP</div><div class="ticker-pair">XRP/USD</div></div>
            <div class="ticker-price" data-price="xrp">—</div>
            <div class="ticker-change up" data-change="xrp">—</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="platform-section" id="platform" aria-label="Pré-visualização da plataforma de trading">
    <div class="container platform-layout">
      <div class="platform-copy">
        <p class="eyebrow">Plataforma</p>
        <h2>Gráficos claros.<br>Pronta a negociar.</h2>
        <p class="lead">
          Um ecrã de trading amigo do telemóvel com gráficos em direto, lucro e perda,
          e ordens simples com um toque — fácil de perceber desde o primeiro login.
        </p>
        <ul class="platform-points">
          <li>Gráficos em direto e preços de mercado</li>
          <li>Saldo do portefólio de relance</li>
          <li>Painel de conta seguro com 2FA</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Abrir a plataforma</a>
      </div>
      <?php require __DIR__ . '/includes/platform-image.php'; ?>
    </div>
  </section>

  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Funcionalidades</p>
        <h2>O que obtém com <?= e(SITE_NAME) ?></h2>
        <p class="lead">Segurança, velocidade e ferramentas claras — sem ecrã sobrecarregado.</p>
      </div>

      <div class="feature-rail">
        <article class="feature-rail-item">
          <div class="idx">01</div>
          <div>
            <h3>Segurança forte da conta</h3>
            <p>Encriptação SSL, login de dois fatores e fluxos de fundos protegidos mantêm o seu dinheiro e dados mais seguros.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">02</div>
          <div>
            <h3>Análises de mercado IA</h3>
            <p>Sinais úteis que apontam timing e tendências — úteis quando os preços se movem depressa.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">03</div>
          <div>
            <h3>Automação quando quiser</h3>
            <p>Bots de trading opcionais podem seguir as suas regras 24 horas por dia — mantém o controlo.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">04</div>
          <div>
            <h3>Vários mercados num só lugar</h3>
            <p>Cripto, forex, ações e commodities numa plataforma simples.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">05</div>
          <div>
            <h3>Processamento rápido de ordens</h3>
            <p>Construída para colocação fiável de ordens mesmo quando os mercados estão movimentados.</p>
          </div>
        </article>
        <article class="feature-rail-item">
          <div class="idx">06</div>
          <div>
            <h3>Layout limpo e simples</h3>
            <p>Menos ruído visual — mais espaço para o gráfico e a próxima ordem.</p>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Primeiros passos</p>
        <h2>Cinco passos até à primeira operação</h2>
        <p class="lead">Um caminho claro do registo aos mercados em direto.</p>
      </div>

      <div class="timeline">
        <article class="timeline-step">
          <div class="num">01</div>
          <div>
            <h3>Abra uma conta</h3>
            <p>Envie os seus dados e obtenha acesso seguro à plataforma.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">02</div>
          <div>
            <h3>Confirme o e-mail</h3>
            <p>Verifique o endereço para desbloquear o ambiente de trading completo.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">03</div>
          <div>
            <h3>Adicione fundos</h3>
            <p>Deposite a partir de <?= MIN_DEPOSIT ?> <?= CURRENCY ?> por cartão, transferência bancária ou carteira eletrónica.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">04</div>
          <div>
            <h3>Escolha como negoceia</h3>
            <p>Negocie manualmente ou use ferramentas assistidas por IA com limites claros que define.</p>
          </div>
        </article>
        <article class="timeline-step">
          <div class="num">05</div>
          <div>
            <h3>Negocie em direto</h3>
            <p>Use gráficos, ferramentas e suporte 24/7 sempre que precisar de ajuda.</p>
          </div>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2rem;">
        <a href="sign.php" class="btn btn-primary">Começar agora</a>
      </div>
    </div>
  </section>

  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Pagamentos</p>
      <h2 style="margin-bottom: 0.75rem;">Deposite com métodos que já conhece</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Cartões, carteiras e transferências bancárias — encriptados de ponta a ponta.</p>
      <?php
      $payment_context = 'financiamento de conta e depósitos';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infraestrutura</p>
        <h2>Parceiros de infraestrutura</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" style="background: var(--bg-elevated); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Avaliações</p>
        <h2>O que dizem os traders</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">O registo foi rápido, as taxas claras e o suporte respondeu. Parece uma plataforma para ficar.</p>
          <div class="review-author">
            <div class="review-avatar">OR</div>
            <div>
              <div class="review-name">Oliver Reed</div>
              <div class="review-role">Trader independente</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Experimentei cripto aqui depois de saltar entre apps — a configuração foi clara e o layout do gráfico finalmente faz sentido.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Trader de cripto</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">As ordens passam de forma fiável, os termos estão em linguagem simples e a equipa conhece o produto. Uma plataforma sólida.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Trader de ativos digitais</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Como principiante precisava de clareza, não de espetáculo. Registo, taxas e ajuda quando fiquei preso — foi o suficiente.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Investidora particular</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>Antes de financiar a sua conta</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Como começo?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Crie uma conta, complete uma verificação breve e deposite a partir de <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Isso desbloqueia gráficos, ferramentas e onboarding guiado.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Como estão protegidos o meu dinheiro e os meus dados?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Usamos encriptação SSL, autenticação de dois fatores e prestadores de pagamento de confiança sob políticas de dados rigorosas.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Quanto demoram os levantamentos?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Peça pagamentos a qualquer momento no painel. A maioria dos métodos é liquidada em 1–3 dias úteis com taxas mostradas à partida.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Preciso de experiência prévia em trading?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Não. Passos guiados e ferramentas assistidas por IA ajudam-no a aprender ao seu ritmo, com suporte 24/7 disponível.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Que mercados estão disponíveis?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Criptomoedas, forex, ações globais e commodities — manual ou automatizado — numa única interface.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Visão geral</p>
        <h2>A plataforma de relance</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Ferramentas IA</div>
          <div class="specs-value">Análise de mercado com insights de machine learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Financiamento</div>
          <div class="specs-value">Cartões, transferências bancárias, PayPal, carteiras eletrónicas</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Dispositivos</div>
          <div class="specs-value">Web, tablet, telemóvel — totalmente responsivo</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Qualidade dos sinais IA</div>
          <div class="specs-value">Até 85% em estratégias suportadas*</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Mercados</div>
          <div class="specs-value">Cripto, forex, ações, commodities</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Onboarding</div>
          <div class="specs-value">Configuração rápida com verificação guiada</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Suporte</div>
          <div class="specs-value">Suporte 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Contacte-nos</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">Classificada</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Scorecard <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> avaliações · Com base em <strong>1.842</strong> classificações
        </div>
      </div>
    </div>
  </section>

  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Pronto para uma forma mais clara de negociar?</h2>
        <p class="lead">Junte-se a traders que querem mercados em direto, taxas claras e uma plataforma fácil de usar.</p>
      </div>
      <div class="board-card">
        <div class="board-card-head">
          <span>Abrir conta</span>
          <span class="live-pill">Grátis</span>
        </div>
        <div class="board-card-body">
          <?php
          $form_id = 'bottom-form';
          $form_heading = 'Crie a sua conta gratuita';
          require __DIR__ . '/includes/form.php';
          ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
