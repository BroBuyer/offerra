<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Motor de trading premium com IA para mercados globais');
$page_description = SITE_NAME . ' — uma forma mais inteligente e clara de aceder aos mercados globais com ferramentas de IA estruturadas para cripto, forex e ações.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-section" id="signup">
    <div class="container">
      <div class="hero-grid">
        <div class="hero-content">
          <h1><?= e(SITE_NAME) ?>: uma forma mais inteligente e clara de aceder aos <span class="text-accent">mercados globais</span></h1>

          <p class="hero-desc">
            Novo no trading? <?= e(SITE_NAME) ?> oferece ferramentas estruturadas assistidas por IA, pensadas para manter o seu percurso transparente.
            Explore cripto, forex e ações sem o caos técnico.
          </p>

          <div class="hero-actions">
            <a href="#signup-form-anchor" class="btn btn-primary">Começar a negociar — <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
            <a href="#features" class="btn btn-secondary">Descobrir funcionalidades</a>
          </div>

          <div class="trust-badges">
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
              Protegido pelo protocolo SSL
            </div>
            <div class="badge-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Percurso guiado para principiantes
            </div>
          </div>
        </div>

        <div class="hero-form-container" id="signup-form-anchor">
          <div class="signup-card" id="mainSignupCard">
            <h3 style="text-align:center;">Crie a sua conta</h3>
            <?php
            $form_id = 'hero-form';
            $form_subtitle = 'Demora menos de 3 minutos. Sem taxas de configuração.';
            $form_submit = 'Criar conta gratuita';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="stats-bar">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M3 3v18h18"/>
              <path d="m18.7 8-5.1 5.2-2.8-2.7L7 14.3"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">80+</div>
            <div class="stat-label">Ativos negociáveis</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Rápido</div>
            <div class="stat-label">Configuração da conta</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">24/7</div>
            <div class="stat-label">Suporte</div>
          </div>
        </div>

        <div class="stat-card">
          <div class="stat-icon-box">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
            </svg>
          </div>
          <div>
            <div class="stat-value">Seguro</div>
            <div class="stat-label">Processamento de dados</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section-soft" id="platform">
    <div class="container">
      <div class="product-grid">
        <div>
          <div class="section-label">Espaço de trabalho inteligente</div>

          <h2 class="section-title">
            Gráficos profissionais.<br>
            <span class="text-accent">Feitos para decisões simples.</span>
          </h2>

          <p class="section-subtitle">
            Acompanhe preços em direto e aja a partir de uma interface limpa, desenhada para reduzir a carga cognitiva e o trading emocional.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Gráficos enriquecidos por IA em tempo real
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Sistema de execução de mercado com um toque
            </li>
          </ul>

          <div class="platform-cta-wrap">
            <a href="#features" class="btn btn-primary">Ver funcionalidades da plataforma</a>
          </div>
        </div>

        <div>
          <div class="mockup-container">
            <div class="mockup-cta-overlay" id="mockupOverlay">
              <div class="overlay-content">
                <h4 id="overlayHeadline">Execução instantânea disponível</h4>
                <p>
                  Para encaminhar esta ordem imediatamente e capturar o nível de preço ativo, ative o seu terminal seguro <?= e(SITE_NAME) ?>.
                </p>
                <button type="button" class="btn btn-primary" onclick="window.redirectToForm && window.redirectToForm()">
                  Criar conta segura
                </button>
              </div>
            </div>

            <div class="mockup-header">
              <span class="mockup-title">Painel BTC / USD</span>
              <span style="display:inline-flex; align-items:center; gap:6px; font-size:12px; font-weight:700; color:var(--color-success);">
                <span style="width:6px; height:6px; background-color:var(--color-success); border-radius:50%;"></span>
                AO VIVO
              </span>
            </div>

            <div class="mockup-asset-value" id="mockupPrice">$67,420.50</div>

            <div id="mockupChange" style="color: var(--color-success); font-weight: 700; font-size: 15px; margin-top: 4px;">
              +0.15% Hoje
            </div>

            <div class="mockup-chart mockup-chart-placeholder" id="mockupChart">
              <div class="chart-track" id="mockupChartTrack">
                <div class="chart-bar" style="height: 60%;"></div>
                <div class="chart-bar" style="height: 55%;"></div>
                <div class="chart-bar" style="height: 65%;"></div>
                <div class="chart-bar" style="height: 70%;"></div>
                <div class="chart-bar" style="height: 85%;"></div>
                <div class="chart-bar" style="height: 80%;"></div>
                <div class="chart-bar" style="height: 75%;"></div>
              </div>
            </div>

            <div class="mockup-actions">
              <button type="button" class="mockup-btn m-btn-sell" data-mock-action="sell">Vender</button>
              <button type="button" class="mockup-btn m-btn-buy" data-mock-action="buy">Comprar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Capacidades da plataforma</div>
        <h2 class="section-title">Tudo o que precisa para negociar com confiança em <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Segurança, velocidade e inteligência de mercado neural combinadas numa apresentação clara</p>
      </div>

      <div class="features-grid">
        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            </svg>
          </div>
          <h3>Segurança de nível bancário</h3>
          <p>Encriptação SSL, processamento seguro de dados e uma arquitetura de conta totalmente protegida.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <circle cx="12" cy="12" r="10"/>
              <path d="M12 16v-4"/>
              <path d="M12 8h.01"/>
            </svg>
          </div>
          <h3>Análise de mercado com IA</h3>
          <p>Cálculos de machine learning em tempo real focados em captar mudanças marcadas no mercado.</p>
        </div>

        <div class="card">
          <div class="feature-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
            </svg>
          </div>
          <h3>Feeds de baixa latência</h3>
          <p>Infraestrutura ágil focada no processamento rápido de ordens em períodos de elevada atividade.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="markets">
    <div class="container">
      <div class="markets-grid">
        <div>
          <div class="section-label">Ativos em tempo real</div>
          <h2 class="section-title">Painel unificado <?= e(SITE_NAME) ?> para métricas globais</h2>
          <p class="section-subtitle">
            Acompanhe movimentos de ativos em tempo real, monitore o momentum e use análise automatizada de IA para mapear padrões rapidamente.
          </p>

          <div class="ai-explain-box">
            <p>
              <strong>Eficiência operacional:</strong>
              O trading tradicional implica observar centenas de indicadores manualmente.
              <?= e(SITE_NAME) ?> algoritmos processam milhares de alterações de preço a cada milissegundo,
              produzindo modelos matemáticos claros para que possa apanhar movimentos cedo.
            </p>
          </div>

          <div class="markets-cta-wrap">
            <a href="#signup" class="btn btn-primary">Aceder aos mercados</a>
          </div>
        </div>

        <div>
          <div class="market-widget">
            <div class="widget-header">
              <span>Ativo</span>
              <span style="text-align:right; padding-right:16px;">Preço</span>
              <span style="text-align:right;">Variação 24h</span>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">BTC</span>
                <span class="asset-fullname">Bitcoin</span>
              </div>
              <div class="asset-price" id="t-btc-p">$67,420.50</div>
              <div class="asset-change trend-up" id="t-btc-c">+0.15%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">ETH</span>
                <span class="asset-fullname">Ethereum</span>
              </div>
              <div class="asset-price" id="t-eth-p">$3,450.25</div>
              <div class="asset-change trend-up" id="t-eth-c">+2.10%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">SOL</span>
                <span class="asset-fullname">Solana</span>
              </div>
              <div class="asset-price" id="t-sol-p">$184.80</div>
              <div class="asset-change trend-down" id="t-sol-c">-0.65%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">BNB</span>
                <span class="asset-fullname">BNB Chain</span>
              </div>
              <div class="asset-price" id="t-bnb-p">$582.40</div>
              <div class="asset-change trend-up" id="t-bnb-c">+1.05%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">XRP</span>
                <span class="asset-fullname">Ripple</span>
              </div>
              <div class="asset-price" id="t-xrp-p">$0.5920</div>
              <div class="asset-change trend-down" id="t-xrp-c">-1.42%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">ADA</span>
                <span class="asset-fullname">Cardano</span>
              </div>
              <div class="asset-price" id="t-ada-p">$0.4850</div>
              <div class="asset-change trend-up" id="t-ada-c">+0.88%</div>
            </div>

            <div class="market-row">
              <div class="asset-info">
                <span class="asset-ticker">DOT</span>
                <span class="asset-fullname">Polkadot</span>
              </div>
              <div class="asset-price" id="t-dot-p">$6.75</div>
              <div class="asset-change trend-down" id="t-dot-c">-0.12%</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="onboarding">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Processo de onboarding</div>
        <h2 class="section-title"><?= e(SITE_NAME) ?> torna o início sem stress</h2>
        <p class="section-subtitle">Sem experiência prévia em cripto? O nosso guia automatizado acompanha-o em cada passo.</p>
      </div>

      <div class="steps-container">
        <div class="steps-connecting-line"></div>

        <div class="steps-grid">
          <div class="step-card">
            <div class="step-number">1</div>
            <h3>Registo seguro</h3>
            <p>Introduza os dados de contacto básicos através do nosso formulário altamente encriptado.</p>
          </div>

          <div class="step-card">
            <div class="step-number">2</div>
            <h3>Configuração guiada por IA</h3>
            <p>A plataforma apresenta opções de interface adaptadas às suas preferências.</p>
          </div>

          <div class="step-card">
            <div class="step-number">3</div>
            <h3>Financiamento seguro</h3>
            <p>Ative o seu intervalo de trading através de métodos de pagamento standard e fiáveis.</p>
          </div>

          <div class="step-card">
            <div class="step-number">4</div>
            <h3>Ativar sinais</h3>
            <p>Comece a interagir com os mercados globais usando feeds neurais em direto.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="mobile-app">
    <div class="container">
      <div class="app-promo-grid">
        <div class="app-promo-visual">
          <div class="app-glow"></div>
          <?php
          $as_phone = true;
          require __DIR__ . '/includes/platform-image.php';
          ?>
        </div>

        <div>
          <div class="section-label">Acesso móvel</div>
          <h2 class="section-title">O seu portefólio, no bolso</h2>
          <p class="section-subtitle">
            O motor completo <?= e(SITE_NAME) ?> comprimido numa experiência móvel rápida com sensação nativa.
            Acompanhe ativos, execute operações e siga sinais de IA de qualquer lugar.
          </p>

          <ul class="check-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Alertas push para movimentos críticos de preço
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Login biométrico com armazenamento local encriptado
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Suite completa de gráficos otimizada para toque
            </li>
          </ul>

          <div class="app-cta-wrap">
            <a href="#signup" class="btn btn-primary">Obter a experiência da app</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="security">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Enquadramento equilibrado</div>
        <h2 class="section-title">Parâmetros operacionais transparentes</h2>
        <p class="section-subtitle">
          Acreditamos em honestidade absoluta. Eis o que distingue o nosso sistema — e onde costumam estar os limites da indústria.
        </p>
      </div>

      <div class="comparison-grid">
        <div class="comp-card comp-card-our">
          <div class="comp-card-badge"><?= e(SITE_NAME) ?></div>
          <h3>Principais vantagens</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Painel minimalista afinado para velocidade de execução institucional.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Analytics neurais a funcionar 24/7 em todos os ativos.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Zero margens de transação ocultas ou taxas de gestão surpresa.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Arquitetura de conta criptográfica SSL direta.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-success)" stroke-width="3" aria-hidden="true">
                <polyline points="20 6 9 17 4 12"/>
              </svg>
              Integração guiada que demora minutos, não dias.
            </li>
          </ul>
        </div>

        <div class="comp-card comp-card-traditional">
          <div class="comp-card-badge comp-card-badge-muted">Outras plataformas</div>
          <h3>Limites comuns da indústria</h3>
          <ul class="comp-list">
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Painéis sobrecarregados e cheios de anúncios que atrasam decisões.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Relatórios estáticos de fim de dia em vez de análise contínua em direto.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Spreads ocultos, taxas de levantamento e preços pouco claros.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Infraestrutura partilhada e desatualizada com proteção de dados irregular.
            </li>
            <li>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-danger)" stroke-width="2.5" aria-hidden="true">
                <line x1="18" y1="6" x2="6" y2="18"/>
                <line x1="6" y1="6" x2="18" y2="18"/>
              </svg>
              Verificação lenta e burocrática que pode demorar dias.
            </li>
          </ul>
        </div>
      </div>

      <p class="comp-disclaimer">
        A comparação reflete padrões típicos no trading de retalho e é ilustrativa; as ofertas dos concorrentes variam.
      </p>
    </div>
  </section>

  <section>
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <h2 class="section-title">Funcionalidades principais da plataforma num relance</h2>
        <p class="section-subtitle">Reveja os parâmetros funcionais integrados no seu enquadramento de acesso à conta.</p>
      </div>

      <div class="table-wrapper">
        <table class="cap-table">
          <thead>
            <tr>
              <th>Capacidade</th>
              <th>Detalhe funcional</th>
              <th class="cap-table-center">Incluído</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>Enquadramento de trading com IA</strong></td>
              <td>Processamento algorítmico que fornece cálculos macroestruturais dinâmicos.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Incluído">✓</span></td>
            </tr>
            <tr>
              <td><strong>Feeds agregados</strong></td>
              <td>Gráficos consolidados em tempo real para índices globais modernos e tokens.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Incluído">✓</span></td>
            </tr>
            <tr>
              <td><strong>Estabilidade multiplataforma</strong></td>
              <td>Renderização totalmente responsiva em mobile, desktop e tablets.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Incluído">✓</span></td>
            </tr>
            <tr>
              <td><strong>Cobertura multiativos</strong></td>
              <td>Acesso unificado a cripto, forex e índices de ações a partir de uma única camada de conta.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Incluído">✓</span></td>
            </tr>
            <tr>
              <td><strong>Alertas de risco automatizados</strong></td>
              <td>Notificações configuráveis que assinalam volatilidade invulgar antes de atingir as posições.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Incluído">✓</span></td>
            </tr>
            <tr>
              <td><strong>Cofre de dados encriptado</strong></td>
              <td>Dados pessoais e de conta isolados atrás de controlos de acesso criptográficos em camadas.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Incluído">✓</span></td>
            </tr>
            <tr class="highlighted-row">
              <td><strong>Suporte humano 24/7</strong></td>
              <td>Operadores técnicos em direto prontos a responder imediatamente a questões de configuração.</td>
              <td class="cap-table-center"><span class="cap-check" aria-label="Incluído">✓</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section-soft" id="payments">
    <div class="container payment-container">
      <div class="section-label" style="justify-content: center;">Depósitos</div>
      <h2 class="section-title">Financie a sua conta com métodos que já conhece</h2>
      <p class="section-subtitle" style="margin-left:auto; margin-right:auto;">
        Cartões, carteiras eletrónicas e transferências bancárias — tudo protegido por encriptação SSL de 256 bits.
      </p>

      <ul class="payment-icons-list" role="list" aria-label="Métodos de depósito e financiamento aceites">
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <rect x="2" y="5" width="20" height="14" rx="2.5"/>
            <path d="M2 10h20"/>
          </svg>
          <span>Visa</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <circle cx="9" cy="12" r="6"/>
            <circle cx="15" cy="12" r="6"/>
          </svg>
          <span>Mastercard</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M6 3h9a5 5 0 0 1 0 10H9l-1 8H4z"/>
          </svg>
          <span>PayPal</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2a5 5 0 0 0-5 5v3H5a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-2V7a5 5 0 0 0-5-5z"/>
          </svg>
          <span>Apple Pay</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 8v8M8 12h8"/>
          </svg>
          <span>Google Pay</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <rect x="3" y="10" width="18" height="9" rx="1"/>
            <path d="M3 10 12 4l9 6"/>
            <path d="M7 10v9M12 10v9M17 10v9"/>
          </svg>
          <span>Transferência bancária</span>
        </li>
        <li class="payment-chip">
          <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true">
            <path d="M12 2s8-4 8 5c0 6-8 10-8 10s-8-4-8-10c0-9 8-5 8-5z"/>
            <path d="M9.5 12l1.8 1.8L15 10"/>
          </svg>
          <span>Protegido por SSL</span>
        </li>
      </ul>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Infraestrutura fiável</div>
        <h2 class="section-title">Construído com parceiros de nível industrial</h2>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section-soft" id="reviews">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Feedback dos utilizadores</div>
        <h2 class="section-title">O que os traders dizem sobre <?= e(SITE_NAME) ?></h2>
        <p class="section-subtitle">Feedback honesto da nossa comunidade global multi-mercado.</p>
      </div>

      <div class="reviews-grid">
        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 de 5 estrelas">★★★★★</div>
            <p class="review-text">
              Como principiante, a cripto intimidava-me. <?= e(SITE_NAME) ?> tornou o painel tão intuitivo que me senti confiante em minutos. A análise de IA é cristalina.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">MT</div>
            <div class="reviewer-meta">
              <h4>Michael Turner</h4>
              <p>Operador de retalho verificado · Reino Unido</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 de 5 estrelas">★★★★★</div>
            <p class="review-text">
              A interface limpa poupa-me horas. A IA a filtrar o ruído do mercado até às tendências principais mudou a forma como faço a gestão das posições diárias.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">AM</div>
            <div class="reviewer-meta">
              <h4>Anna Mitchell</h4>
              <p>Analista de ativos cripto · Canadá</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 de 5 estrelas">★★★★★</div>
            <p class="review-text">
              Execução de baixa latência mais alertas inteligentes permite-me ajustar alvos em tempo real sem abrir vários programas.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">DK</div>
            <div class="reviewer-meta">
              <h4>David Kovacs</h4>
              <p>Gestor de portefólio privado · Alemanha</p>
            </div>
          </div>
        </div>

        <div class="review-card">
          <div>
            <div class="stars-container" aria-label="5 de 5 estrelas">★★★★★</div>
            <p class="review-text">
              O suporte respondeu em dois minutos enquanto configurava a verificação. Serviço excecional de nível institucional.
            </p>
          </div>
          <div class="reviewer-info">
            <div class="reviewer-avatar">EL</div>
            <div class="reviewer-meta">
              <h4>Elena Laurent</h4>
              <p>Trader algorítmico · França</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="seo-content">
        <h2 style="font-size: 38px; margin-bottom: 28px; font-weight: 800;">
          <?= e(SITE_NAME) ?>: capacitar traders com arquitetura de IA institucional
        </h2>

        <p class="seo-intro">
          A interação moderna com ativos exige clareza absoluta. Quando os enquadramentos de dados estão sobrecarregados com banners promocionais
          ou camadas pesadas de interface, o desempenho do utilizador cai. <?= e(SITE_NAME) ?> resolve a complexidade sistémica ao implementar
          um ambiente central elegante e responsivo, otimizado para execução estratégica de longo prazo. Cada módulo da plataforma,
          do onboarding à execução em direto, é construído em torno do mesmo princípio: remover o ruído para que os dados subjacentes
          possam falar por si — sem sacrificar a profundidade que os participantes experientes esperam.
        </p>

        <div class="seo-text-grid">
          <div class="seo-block">
            <h3>Ativos avançados de <span>trading em cripto</span></h3>
            <p>
              A liquidez em blockchain evolui rapidamente, tornando crítica a infraestrutura de baixa latência.
              <?= e(SITE_NAME) ?> liga nós personalizados a grandes venues de ativos digitais, fornecendo loops de feedback de preço em direto.
              Métricas visuais limpas transformam estruturas caóticas multi-chain em canais de dados organizados e legíveis.
            </p>
            <p>
              Para além dos feeds de preço em bruto, a plataforma contextualiza mudanças de volume e profundidade de liquidez para que picos súbitos sejam
              mais fáceis de interpretar — não apenas sinais reativos. Essa consistência importa sobretudo em sessões voláteis, quando
              ferramentas fragmentadas atrasam decisões exatamente quando a clareza é mais necessária.
            </p>
          </div>

          <div class="seo-block">
            <h3>Análise profunda <span>neural de mercado</span></h3>
            <p>
              Algoritmos automatizados analisam dados de mercado em entrada para calcular mudanças estruturais em forex e commodities internacionais.
              <?= e(SITE_NAME) ?> destila cálculos complexos em tendências de dados claras que apoiam o julgamento independente em vez de o substituir.
            </p>
            <p>
              Como os modelos correm continuamente e não num horário fixo, as mudanças de momentum aparecem à medida que acontecem
              em vez de num resumo atrasado. O resultado é uma camada de pesquisa que apoia o julgamento independente
              mantendo a decisão final nas mãos do utilizador.
            </p>
          </div>

          <div class="seo-block">
            <h3>Configuração <span>de conta sem fricção</span></h3>
            <p>
              A conformidade não tem de ser complicada. O nosso pipeline de registo estruturado protege definições privadas
              através de processos de verificação seguros concebidos para durar menos de três minutos do início ao acesso ao.
            </p>
            <p>
              Cada campo do percurso explica porque é pedido, para que os principiantes nunca tenham de adivinhar o propósito de um
              passo de verificação. Após o envio, as verificações de identidade encriptadas correm em segundo plano enquanto o resto do
              painel permanece totalmente navegável.
            </p>
          </div>

          <div class="seo-block">
            <h3>Controlos de risco <span>de qualidade institucional</span></h3>
            <p>
              Dimensionamento de posições, limites de exposição e indicadores automáticos de volatilidade condensam ferramentas historicamente profissionais de desk
              em interruptores simples — para que novos participantes herdem a disciplina diária de traders experientes.
            </p>
            <p>
              Os alertas são configuráveis por ativo, para que a atenção se dirija apenas aos mercados que realmente o justificam.
              Esta abordagem focada ajuda a prevenir a fadiga de alertas que frequentemente leva as pessoas a ignorar notificações
              em plataformas menos seletivas.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-soft" id="faq">
    <div class="container">
      <div style="text-align: center; display: flex; flex-direction: column; align-items: center;">
        <div class="section-label">Centro de suporte</div>
        <h2 class="section-title">Perguntas frequentes</h2>
        <p class="section-subtitle">Respostas processuais imediatas sobre registo e acesso à plataforma.</p>
      </div>

      <div class="faq-max-width" data-faq>
        <div class="faq-item active is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            <span>Como começo com <?= e(SITE_NAME) ?>?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content" style="max-height: 200px;">
            <p>
              Preencha o formulário de registo acima, siga o nosso onboarding seguro passo a passo,
              e ative as definições da conta através do nosso sistema estruturado de processamento de pagamentos.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Preciso de experiência avançada em cripto?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Não. <?= e(SITE_NAME) ?> oferece um modo de painel para principiantes, explicações analíticas automatizadas,
              e espaços de trabalho simplificados para ajudar novos traders a navegar em segurança.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Qual é o requisito mínimo para negociar?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              A ativação base standard é <?= MIN_DEPOSIT ?> <?= CURRENCY ?>.
              Isto serve como capital operacional de trading e permanece sob o seu controlo manual.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Há taxas operacionais ocultas?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Não. <?= e(SITE_NAME) ?> opera com transparência absoluta de preços.
              Não aplicamos margens inesperadas de acesso à plataforma nem cálculos ocultos de levantamento.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Como funciona o componente de inteligência de IA?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Sistemas neurais avaliam marcadores estatísticos profundos de volatilidade em várias camadas de mercado,
              convertendo telemetria em bruto em linhas de tendência simplificadas para uma avaliação mais fácil.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            <span>Os meus dados pessoais estão totalmente protegidos?</span>
            <svg class="faq-icon-svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><polyline points="6 9 12 15 18 9"/></svg>
          </button>
          <div class="faq-content">
            <p>
              Sim. Cada pipeline de conta é mascarado com proteção SSL segura e protocolos criptográficos robustos
              para isolar totalmente os intervalos de dados privados.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="final-cta" style="background-color:#0F172A;">
    <div class="container">
      <div class="final-cta-grid">
        <div class="final-cta-content">
          <h2>Pronto para experimentar a clareza <?= e(SITE_NAME) ?>?</h2>
          <p class="section-subtitle" style="color: var(--color-text-secondary);">
            Junte-se a um sistema moderno otimizado para operações rápidas, proteção de dados e acesso transparente.
          </p>
        </div>
        <div>
          <div class="signup-card">
            <h3 style="text-align:center;">Crie a sua conta</h3>
            <?php
            $form_id = 'final-cta-form';
            $form_submit = 'Criar conta gratuita';
            require __DIR__ . '/includes/form.php';
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
