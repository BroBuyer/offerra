<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title('Plataforma de investimento com IA');
$page_description = 'Uma plataforma de investimento simples impulsada por IA — mercados claros, decisões guiadas e abertura de conta rápida em ' . SITE_NAME . '.';
$page_canonical = page_url();
$active_page = 'home';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>

  <section class="hero-lumen" aria-label="Introdução">
    <div class="hero-lumen__atmosphere" aria-hidden="true"></div>
    <div class="container hero-lumen__grid">
      <div class="hero-lumen__copy">
        <p class="brand-lockup"><?= e(SITE_NAME) ?></p>
        <h1>Invista com clareza.<br><span class="text-accent">Deixe a IA manter tudo simples.</span></h1>
        <p class="lead">
          Uma plataforma moderna que explica os mercados em linguagem clara, destaca insights úteis de IA e ajuda a colocar ordens sem ruído.
        </p>
        <div class="hero-actions">
          <a href="sign.php" class="btn btn-primary">Começar a partir de <?= MIN_DEPOSIT ?> <?= CURRENCY ?></a>
          <a href="product.php" class="btn btn-ghost">Ver como funciona</a>
        </div>
      </div>

      <div class="hero-lumen__visual">
        <?php require __DIR__ . '/includes/platform-image.php'; ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="how">
    <div class="container">
      <div class="section-intro" data-reveal>
        <p class="eyebrow">Feita para principiantes</p>
        <h2>Três passos. Depois está a operar.</h2>
        <p class="lead">Sem jargão de terminal — um caminho claro do registo à primeira posição.</p>
      </div>
      <ol class="steps-lumen">
        <li data-reveal>
          <span class="steps-lumen__num">01</span>
          <h3>Abra a sua conta</h3>
          <p>Partilhe alguns dados. A verificação é curta e guiada.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">02</span>
          <h3>Deposite com segurança</h3>
          <p>Deposite a partir de <?= MIN_DEPOSIT ?> <?= CURRENCY ?> com métodos de pagamento de confiança.</p>
        </li>
        <li data-reveal>
          <span class="steps-lumen__num">03</span>
          <h3>Opere com ajuda da IA</h3>
          <p>Siga insights em linguagem clara e coloque ordens quando estiver pronto.</p>
        </li>
      </ol>
    </div>
  </section>

  <section class="section" id="ai">
    <div class="container split-lumen">
      <div data-reveal>
        <p class="eyebrow">IA que realmente ajuda</p>
        <h2>Sinais que consegue compreender</h2>
        <p class="lead">
          <?= e(SITE_NAME) ?> transforma o ruído do mercado em avisos curtos e legíveis — menos adivinhar, mais decidir.
        </p>
        <ul class="feature-list">
          <li>Indicações claras comprar / manter / observar</li>
          <li>Lembretes de risco antes de confirmar</li>
          <li>Uma interface que se mantém calma sob pressão</li>
        </ul>
        <a href="sign.php" class="btn btn-primary">Experimentar a plataforma</a>
      </div>
      <aside class="insight-panel" data-reveal aria-label="Exemplo de insight">
        <p class="insight-panel__label">Insight em direto</p>
        <p class="insight-panel__title">BTC / USD · momentum estável</p>
        <p class="insight-panel__body">
          A volatilidade está a abrandar. A IA sugere observar a próxima sessão antes de aumentar o tamanho — mantém o controlo de cada ordem.
        </p>
        <div class="insight-panel__meta">
          <span>Confiança elevada</span>
          <span>Atualizado agora mesmo</span>
        </div>
      </aside>
    </div>
  </section>

  <section class="section section-ink" id="join">
    <div class="container join-lumen" data-reveal>
      <div>
        <p class="eyebrow eyebrow-light">Começar</p>
        <h2>Crie a sua conta <?= e(SITE_NAME) ?></h2>
        <p class="lead lead-light">
          Junte-se a uma plataforma premium que se mantém simples — orientação de IA desde o primeiro dia.
        </p>
      </div>
      <div class="join-lumen__form">
        <?php
        $form_id = 'home-form';
        $form_heading = 'Abrir em menos de 2 minutos';
        require __DIR__ . '/includes/form.php';
        ?>
      </div>
    </div>
  </section>

  <section class="section section-paper" id="trust">
    <div class="container" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">Infraestruturas de confiança</p>
        <h2>Parceiros de infraestrutura</h2>
        <p class="lead">Pagamentos e acesso aos mercados através de fornecedores estabelecidos.</p>
      </div>
      <?php require __DIR__ . '/includes/partners.php'; ?>
    </div>
  </section>

  <section class="section" id="faq-home">
    <div class="container narrow" data-reveal>
      <div class="section-intro">
        <p class="eyebrow">FAQ</p>
        <h2>Respostas rápidas</h2>
      </div>
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Preciso de experiência em trading?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Não. <?= e(SITE_NAME) ?> é feita para investidores principiantes — dicas de IA em linguagem clara.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Qual é o depósito mínimo?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Pode começar a partir de <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. As comissões ficam visíveis antes de confirmar.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Há suporte disponível?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Sim — a nossa equipa está disponível 24 horas para depósitos e configuração da conta.
            </div>
          </div>
        </div>
      </div>
      <p class="faq-more"><a href="faq.php">Ler a FAQ completa →</a></p>
    </div>
  </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
