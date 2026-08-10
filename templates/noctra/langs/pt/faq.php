<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('FAQ');
$page_description = 'Respostas sobre depósitos, segurança, taxas e como começar na ' . SITE_NAME . '.';
$page_canonical = page_url('faq.php');
$active_page = 'faq';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <p class="eyebrow">FAQ</p>
      <h1>Antes de financiar a sua conta</h1>
      <p class="lead">Respostas diretas sobre acesso, segurança e como a plataforma funciona.</p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container" style="max-width: 800px; margin-inline: auto;">
      <div class="faq-list" data-faq>
        <div class="faq-item is-open">
          <button class="faq-trigger" type="button" aria-expanded="true">
            Como começo?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content" style="max-height: none;">
            <div class="faq-content-inner">
              Crie uma conta, verifique o e-mail e deposite a partir de <?= MIN_DEPOSIT ?> <?= CURRENCY ?>. Gráficos, ferramentas e onboarding ficam disponíveis de imediato.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Como está a <?= e(SITE_NAME) ?> protegida?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Encriptação SSL, autenticação de dois fatores e processadores de pagamento verificados em cada ação da conta.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            E as taxas?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              As taxas aparecem antes de confirmar. Sem cobranças surpresa em depósitos ou levantamentos.
            </div>
          </div>
        </div>
        <div class="faq-item">
          <button class="faq-trigger" type="button" aria-expanded="false">
            Posso automatizar operações?
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-content">
            <div class="faq-content-inner">
              Sim — configure bots assistidos por IA com limites de risco, ou fique totalmente manual e mude quando quiser.
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
              Peça no painel. A maioria dos métodos é liquidada em 1–3 dias úteis, consoante o método de pagamento.
            </div>
          </div>
        </div>
      </div>

      <div style="text-align: center; margin-top: 2.5rem;">
        <p class="lead" style="margin-bottom: 1rem;">Ainda tem perguntas?</p>
        <a href="contacts.php" class="btn btn-outline">Contactar o suporte</a>
      </div>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
