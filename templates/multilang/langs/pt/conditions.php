<?php
require_once __DIR__ . '/includes/config.php';

$page_title = page_title_lead('Termos de Utilização');
$page_description = 'Leia os termos e condições de utilização da plataforma de trading e do site da ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'terms';

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<main>
  <section class="page-hero">
    <div class="container">
      <h1>Termos de Utilização</h1>
      <p class="lead">Última atualização: <?= date('d/m/Y') ?></p>
    </div>
  </section>

  <section class="section-sm">
    <div class="container prose">
      <p>Ao aceder à <?= e(SITE_NAME) ?> aceita estes Termos de Utilização. Se não concordar, por favor não utilize os nossos serviços.</p>

      <h2>Elegibilidade</h2>
      <p>Deve ter pelo menos 18 anos e estar legalmente autorizado a operar instrumentos financeiros na sua jurisdição.</p>

      <h2>Divulgação de riscos</h2>
      <p>Operar criptomoedas, forex, CFDs e outros instrumentos financeiros envolve um risco substancial de perda. O desempenho passado não garante resultados futuros. Opere apenas com capital que possa perder.</p>

      <h2>Responsabilidades da conta</h2>
      <p>É responsável por manter a confidencialidade das credenciais da sua conta e por toda a atividade realizada na mesma.</p>

      <h2>Disponibilidade do serviço</h2>
      <p>Esforçamo-nos por garantir disponibilidade contínua, mas não asseguramos acesso ininterrupto. Manutenção, condições de mercado ou problemas técnicos podem afetar o serviço.</p>

      <h2>Limitação de responsabilidade</h2>
      <p>A <?= e(SITE_NAME) ?> não é responsável por perdas de trading ou danos resultantes da utilização de informação neste site. Procure aconselhamento financeiro independente quando adequado.</p>

      <h2>Contactos</h2>
      <p><a href="mailto:<?= e(SUPPORT_EMAIL) ?>" style="color: var(--accent);"><?= e(SUPPORT_EMAIL) ?></a></p>
    </div>
  </section>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
