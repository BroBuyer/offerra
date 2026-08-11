<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Termos de Utilização');
$page_description = 'Leia os termos e condições de utilização da plataforma de trading e website ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Termos de Utilização</h1>
      <p class="lead">Última atualização: <?= date('F j, Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Ao aceder a <?= e(SITE_NAME) ?> concorda com estes Termos de Utilização. Se não concordar, não utilize os nossos serviços.</p>

      <h2>Elegibilidade</h2>
      <p>Deve ter pelo menos 18 anos e estar legalmente autorizado a negociar instrumentos financeiros na sua jurisdição.</p>

      <h2>Divulgação de risco</h2>
      <p>Negociar criptomoedas, forex, CFDs e outros instrumentos financeiros envolve risco substancial de perda. O desempenho passado não garante resultados futuros. Negocie apenas com capital que possa perder.</p>

      <h2>Responsabilidades da conta</h2>
      <p>É responsável por manter a confidencialidade das credenciais da conta e por toda a atividade sob a sua conta.</p>

      <h2>Disponibilidade do serviço</h2>
      <p>Esforçamo-nos por disponibilidade contínua, mas não garantimos acesso ininterrupto. Manutenção, condições de mercado ou problemas técnicos podem afetar o serviço.</p>

      <h2>Limitação de responsabilidade</h2>
      <p><?= e(SITE_NAME) ?> não é responsável por perdas de trading ou danos decorrentes do uso de informação neste site. Procure aconselhamento financeiro independente quando apropriado.</p>

      <h2>Contacto</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--color-accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
