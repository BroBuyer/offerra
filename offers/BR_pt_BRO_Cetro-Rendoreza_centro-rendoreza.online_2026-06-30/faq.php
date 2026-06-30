<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Respostas sobre trading, funcionalidades, segurança, comissões e como começar com a ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Perguntas frequentes</h1>
      <p class="lead">Tudo o que precisa de saber antes de começar.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Como posso começar?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Crie uma conta, verifique o seu e-mail e deposite um mínimo de <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Terá acesso imediato a gráficos, ferramentas e guias de integração.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            A <?= e(SITE_NAME) ?> é segura e legítima?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Utilizamos encriptação SSL, 2FA e processadores de pagamento verificados. A segurança está integrada em todos os níveis da plataforma.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Quais são as comissões?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              As comissões são transparentes e apresentadas antes de confirmar qualquer transação. Sem encargos ocultos em depósitos ou levantamentos.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Posso usar trading automatizado?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Sim. Configure bots assistidos por IA de acordo com o seu perfil de risco, ou opere manualmente — pode alternar a qualquer momento.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Como funcionam os levantamentos?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Solicite um levantamento a partir do seu painel. O processamento demora normalmente 1 a 3 dias úteis, consoante o método de pagamento.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Ainda tem dúvidas?</p>
        <a href="contacts.php" class="btn btn-outline">Contactar o apoio</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
