<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Plataforma de trading com IA');
$page_description = 'Opere cripto, forex e mercados globais com a ' . SITE_NAME . '. Análise em tempo real, sinais assistidos por IA e uma plataforma concebida para velocidade e clareza.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <!-- Hero -->
  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-content">
        <p class="eyebrow">Plataforma de trading com IA</p>
        <h1>Opere de forma mais inteligente.<br><span class="text-accent">Aja mais depressa.</span></h1>
        <p class="lead">
          Um novo padrão no trading de cripto e multi-mercado. Segurança avançada, comissões transparentes,
          insights orientados por IA e uma interface que não atrapalha.
        </p>
        <div class="hero-badges">
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            SSL protegido
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            Apoio 24/7
          </span>
          <span class="badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
            Execução rápida
          </span>
        </div>
        <a href="sign.php" class="btn btn-primary">Começar a operar — mín. <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
      </div>

      <div class="form-card form-card-accent">
        <?php
        $form_id = 'hero-form';
        $form_heading = 'Abra a sua conta em 2 minutos';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <!-- Stats -->
  <section class="stats" aria-label="Estatísticas da plataforma">
    <div class="container stats-grid">
      <div class="stat-item">
        <div class="stat-value">70<span class="unit">+</span></div>
        <div class="stat-label">Moedas disponíveis</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">42<span class="unit">m</span></div>
        <div class="stat-label">Utilizadores verificados</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">$440<span class="unit">m</span></div>
        <div class="stat-label">Volume de trading</div>
      </div>
      <div class="stat-item">
        <div class="stat-value">100<span class="unit">+</span></div>
        <div class="stat-label">Países suportados</div>
      </div>
    </div>
  </section>

  <!-- Platform phone (competitor-style: centered between stats & features) -->
  <section class="platform-section" id="platform" aria-label="Pré-visualização da plataforma de trading">
    <div class="container platform-layout">
      <?php require __DIR__ . '/includes/platform-image.php'; ?>

      <div class="platform-copy">
        <p class="eyebrow">Plataforma de trading</p>
        <h2>Gráficos profissionais.<br>Pronta para telemóvel.</h2>
        <p class="lead">
          Uma interface limpa, como numa exchange moderna — dados BTC/USDT em tempo real, acompanhamento de portefólio
          e execução com um toque. Concebida para lhe dar confiança desde o primeiro acesso.
        </p>
        <ul class="platform-points">
          <li>Gráficos de velas em tempo real</li>
          <li>Portefólio e P/L num relance</li>
          <li>Painel de conta seguro</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Experimentar a plataforma</a>
      </div>
    </div>
  </section>

  <!-- Features -->
  <section class="section" id="features">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Porquê a <?= e(SITE_NAME) ?></p>
        <h2>Tudo o que precisa para operar com confiança</h2>
        <p class="lead">Segurança, velocidade e inteligência — reunidas numa plataforma clara concebida para traders modernos.</p>
      </div>

      <div class="features-grid">
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3>Segurança de nível bancário</h3>
          <p>Encriptação SSL, 2FA e gestão segura de fundos protegem os seus dados e o seu capital em cada etapa.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20z"/><path d="M12 6v6l4 2"/></svg>
          </div>
          <h3>Sinais de mercado com IA</h3>
          <p>Insights precisos em tempo real ajudam a identificar oportunidades e a tomar decisões mais rápidas e informadas.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg>
          </div>
          <h3>Trading automatizado</h3>
          <p>Bots assistidos por IA trabalham 24 horas por dia para executar estratégias de forma eficiente, enquanto mantém o controlo.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 3v18h18"/><path d="M7 16l4-8 4 4 5-9"/></svg>
          </div>
          <h3>Acesso multi-mercado</h3>
          <p>Opere cripto, forex, ações e matérias-primas num único ambiente unificado.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
          </div>
          <h3>Execução de baixa latência</h3>
          <p>Infraestrutura otimizada para uma execução estável de ordens, mesmo em períodos de elevada atividade de mercado.</p>
        </article>
        <article class="feature-card">
          <div class="feature-icon">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="5" y="2" width="14" height="20" rx="2"/><path d="M12 18h.01"/></svg>
          </div>
          <h3>Interface limpa</h3>
          <p>Design minimalista que reduz o ruído para se focar na estratégia, não na navegação.</p>
        </article>
      </div>
    </div>
  </section>

  <!-- Live markets -->
  <section class="section section-sm" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container split">
      <div>
        <p class="eyebrow">Mercados em tempo real</p>
        <h2>Opere Bitcoin, Ethereum e muito mais</h2>
        <p class="lead" style="margin: 1rem 0 2rem;">
          Preços em tempo real, indicadores avançados e uma vista profissional dos mercados que lhe interessam.
        </p>
        <a href="sign.php" class="btn btn-primary">Aceder aos mercados</a>
      </div>

      <div class="exchange-panel" data-ticker-panel aria-label="Preços de mercado em tempo real">
        <div class="exchange-panel-header">
          <span>Mercados</span>
          <span class="live-dot">Live</span>
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

  <!-- How it works -->
  <section class="section" id="how-it-works">
    <div class="container">
      <div class="section-header centered">
        <p class="eyebrow">Como começar</p>
        <h2>Do registo à primeira operação em minutos</h2>
        <p class="lead">Um percurso guiado — sem complexidade, sem incertezas.</p>
      </div>

      <div class="steps">
        <article class="step-card">
          <h3>Crie a sua conta</h3>
          <p>Registe-se com os seus dados e obtenha acesso imediato e seguro à plataforma.</p>
        </article>
        <article class="step-card">
          <h3>Verifique o seu e-mail</h3>
          <p>Confirme o endereço para desbloquear o ambiente de trading completo.</p>
        </article>
        <article class="step-card">
          <h3>Financie a sua conta</h3>
          <p>Deposite um mínimo de <?= MIN_DEPOSIT ?> <?= CURRENCY ?> por transferência bancária, cartão ou carteira eletrónica.</p>
        </article>
        <article class="step-card">
          <h3>Defina a sua estratégia</h3>
          <p>Defina o nível de risco e as preferências — manual ou com automatização assistida por IA.</p>
        </article>
        <article class="step-card">
          <h3>Comece a operar</h3>
          <p>Entre no mercado com gráficos em tempo real, ferramentas e apoio sempre que precisar.</p>
        </article>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <a href="sign.php" class="btn btn-primary">Abrir conta agora</a>
      </div>
    </div>
  </section>

  <!-- Payment methods -->
  <section class="section-sm payment-section">
    <div class="container" style="max-width: 720px; margin-inline: auto; text-align: center;">
      <p class="eyebrow" style="justify-content: center;">Financiamento</p>
      <h2 style="margin-bottom: 0.75rem;">Deposite com métodos em que já confia</h2>
      <p class="lead" style="margin-bottom: 1.75rem;">Cartões, carteiras eletrónicas e transferências bancárias — protegidos com encriptação SSL.</p>
      <?php
      $payment_context = 'depósitos e financiamento de conta';
      $payment_compact = false;
      require __DIR__ . '/includes/payment-icons.php';
      ?>
    </div>
  </section>

  <!-- Partners -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header centered" style="margin-bottom: 2rem;">
        <p class="eyebrow">Infraestrutura de confiança</p>
        <h2>Construída com parceiros de referência no setor</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <!-- Reviews -->
  <section class="section" style="background: var(--surface); border-block: 1px solid var(--border);">
    <div class="container">
      <div class="section-header">
        <p class="eyebrow">Avaliações</p>
        <h2>O que dizem os traders</h2>
      </div>

      <div class="reviews-grid">
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">O registo demorou minutos, as comissões são transparentes e o apoio responde mesmo. Experiência fluida e fiável — uma plataforma com que tenho todo o gosto em continuar.</p>
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
          <p class="review-text">Finalmente experimentei o trading de cripto aqui — sem arrependimentos. Configuração rápida e tudo explicado com clareza. Excelente escolha, sobretudo se está a começar.</p>
          <div class="review-author">
            <div class="review-avatar">AM</div>
            <div>
              <div class="review-name">Anna Mitchell</div>
              <div class="review-role">Entusiasta de cripto</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">Estável e fiável. Abertura de conta simples, termos claros e equipa que percebe do assunto. Uma experiência de trading surpreendentemente confortável.</p>
          <div class="review-author">
            <div class="review-avatar">DK</div>
            <div>
              <div class="review-name">Daniel Kim</div>
              <div class="review-role">Operador de ativos digitais</div>
            </div>
          </div>
        </article>
        <article class="review-card">
          <div class="review-stars">★★★★★</div>
          <p class="review-text">O trading já não parece tão complicado. Registo simples, comissões claras e apoio quando preciso. Como principiante, isso faz toda a diferença.</p>
          <div class="review-author">
            <div class="review-avatar">LP</div>
            <div>
              <div class="review-name">Laura Price</div>
              <div class="review-role">Investidora privada</div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section" id="faq">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="section-header centered">
        <p class="eyebrow">FAQ</p>
        <h2>Perguntas frequentes</h2>
      </div>

      <div class="faq-list" data-faq>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Como posso começar?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Crie uma conta com os seus dados básicos, complete um breve passo de verificação e deposite o mínimo de <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Terá acesso à plataforma completa — gráficos em tempo real, ferramentas de trading e integração guiada.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            O meu dinheiro e os meus dados estão seguros?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Utilizamos encriptação SSL, autenticação de dois fatores e processamento seguro através de fornecedores de confiança. Os seus dados pessoais são tratados com políticas de segurança rigorosas em todos os níveis.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Quando posso levantar os lucros?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Solicite levantamentos a qualquer momento a partir do seu painel. O processamento demora normalmente 1 a 3 dias úteis. As comissões e os prazos são sempre apresentados antecipadamente — sem surpresas.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Preciso de experiência em trading?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              De modo algum. A integração guiada, tutoriais simples e ferramentas assistidas por IA ajudam-no a aprender ao seu ritmo. Quer seja principiante ou experiente, o apoio está disponível 24/7.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Em que mercados posso operar?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Aceda a criptomoedas, forex, ações globais e matérias-primas numa única interface. Dados em tempo real, análises integradas e suporte para estratégias manuais ou automatizadas.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Platform specs -->
  <section class="section-sm">
    <div class="container">
      <div class="section-header" style="margin-bottom: 2rem;">
        <p class="eyebrow">Plataforma</p>
        <h2>Capacidades principais num relance</h2>
      </div>

      <div class="specs-table">
        <div class="specs-row">
          <div class="specs-label">Motor de trading com IA</div>
          <div class="specs-value">Análise de mercado avançada com machine learning</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Métodos de financiamento</div>
          <div class="specs-value">Cartões de crédito, transferências bancárias, PayPal, carteiras eletrónicas</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Acesso por dispositivo</div>
          <div class="specs-value">Web, tablet e telemóvel — totalmente responsivo</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Precisão dos sinais</div>
          <div class="specs-value">Até 85% nas estratégias com IA suportadas</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Mercados</div>
          <div class="specs-value">Cripto, forex, ações, matérias-primas</div>
        </div>
        <div class="specs-row">
          <div class="specs-label">Integração</div>
          <div class="specs-value">Configuração rápida de conta com verificação guiada</div>
        </div>
        <div class="specs-row specs-row-highlight">
          <div class="specs-label">Apoio</div>
          <div class="specs-value">Assistência profissional 24/7 — <a href="contacts.php" style="color: var(--accent); font-weight: 600;">Contacte-nos</a></div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust -->
  <section class="section-sm">
    <div class="container">
      <div class="trust-card">
        <div>
          <span class="trust-badge">De confiança</span>
          <h3 style="margin-top: 0.75rem; font-size: 1.25rem;">Avaliações da <?= e(SITE_NAME) ?></h3>
        </div>
        <div class="trust-score">4.7</div>
        <div class="trust-stars">★★★★★</div>
        <div class="trust-meta">
          <strong>342</strong> avaliações · Com base em <strong>1&nbsp;842</strong> classificações
        </div>
      </div>
    </div>
  </section>

  <!-- Bottom CTA -->
  <section class="cta-band">
    <div class="container cta-band-grid">
      <div>
        <h2>Pronto para operar numa plataforma concebida para a clareza?</h2>
        <p class="lead">Junte-se a traders privados e empresas que compram, vendem e gerem ativos digitais com confiança.</p>
      </div>
      <div class="form-card">
        <?php
        $form_id = 'bottom-form';
        $form_heading = 'Crie a sua conta gratuita';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
