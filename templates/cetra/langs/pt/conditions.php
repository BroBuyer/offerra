<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Termos de Utilização');
$page_description = 'As regras que se aplicam quando acede ou utiliza ' . SITE_NAME . '.';
$page_canonical = page_url('conditions.php');
$active_page = 'conditions';
require __DIR__ . '/includes/head.php';
?>
<header class="site-head">
  <div class="shell nav">
    <a class="brand" href="<?= page_url() ?>">
      <img src="<?= asset('static/img/brand/logo.webp') ?>" alt="<?= e(SITE_NAME) ?>" width="30" height="30" decoding="async" loading="eager">
      <?= e(SITE_NAME) ?>
    </a>
    <nav class="nav-links" aria-label="Principal">
      <a href="<?= page_url() ?>#platform">Plataforma</a>
      <a href="<?= page_url() ?>#how">Como funciona</a>
      <a href="<?= page_url() ?>#markets">Mercados</a>
      <a href="<?= page_url() ?>#faq">Perguntas Frequentes</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-primary" href="<?= page_url() ?>#signup">Começar</a>
    </div>
  </div>
</header>

<main id="main">
  <section class="legal-hero">
    <div class="shell">
      <span class="eyebrow">Legal</span>
      <h1>Termos de Utilização</h1>
      <p class="lede">As regras que se aplicam quando acede ou utiliza <?= e(SITE_NAME) ?>.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Última actualização: Janeiro de 2025</p>

      <h2>1. Aceitação dos Termos</h2>
      <p>Ao aceder ou utilizar o website e os serviços de <?= e(SITE_NAME) ?>, concorda em ficar vinculado por estes Termos de Utilização. Se não concordar, não utilize os serviços.</p>

      <h2>2. Elegibilidade</h2>
      <p>Deve ter pelo menos 18 anos de idade (ou a idade da maioridade na sua jurisdição) e capacidade jurídica para celebrar um contrato vinculativo. Os serviços não são oferecidos a residentes em jurisdições restringidas onde tal oferta seria ilegal.</p>

      <h2>3. Registo de Conta</h2>
      <p>Concorda em fornecer informações precisas, actuais e completas durante o registo e em manter estas informações actualizadas. É responsável pela manutenção da confidencialidade das suas credenciais e por todas as actividades na sua conta.</p>

      <h2>4. Serviços</h2>
      <p><?= e(SITE_NAME) ?> fornece ferramentas tecnológicas e informações educacionais relacionadas com investimento online. Não somos o seu consultor financeiro. Nada neste site constitui aconselhamento de investimento personalizado, aconselhamento fiscal ou uma solicitação para comprar ou vender qualquer instrumento financeiro.</p>

      <h2>5. Taxas</h2>
      <p>As taxas, margens e comissões aplicáveis encontram-se divulgadas na plataforma ou no calendário de taxas aplicável. É responsável por quaisquer impostos decorrentes das suas actividades.</p>

      <h2>6. Conduta Proibida</h2>
      <ul>
        <li>Utilizar os serviços para branqueamento de capitais, financiamento do terrorismo, manipulação de mercado ou qualquer fim ilegal.</li>
        <li>Personificar outra pessoa ou fornecer informações de identidade falsas.</li>
        <li>Tentar interferir, comprometer ou fazer engenharia inversa de qualquer parte da plataforma.</li>
        <li>Utilizar ferramentas automatizadas para aceder aos serviços de forma diferente da expressamente permitida.</li>
      </ul>

      <h2>7. Propriedade Intelectual</h2>
      <p>Todo o conteúdo, marcas registadas, software e materiais no sítio são propriedade de <?= e(SITE_NAME) ?> ou dos seus licenciadores e estão protegidos pelas leis de propriedade intelectual aplicáveis. É-lhe concedida uma licença limitada, não exclusiva e revogável para utilizar os serviços para o seu fim pretendido.</p>

      <h2>8. Serviços de Terceiros</h2>
      <p>A plataforma pode conter ligações para ou integrar serviços de terceiros. Não somos responsáveis por tais serviços, pela sua disponibilidade, precisão ou conteúdo.</p>

      <h2>9. Isenções de Responsabilidade</h2>
      <p>Os serviços são fornecidos «tal como estão» e «conforme disponíveis» sem garantias de qualquer tipo. A negociação envolve risco substancial de perda. Consulte a nossa <a href="<?= page_url('conditions.php') ?>">Divulgação de Riscos</a> para detalhes.</p>

      <h2>10. Limitação de Responsabilidade</h2>
      <p>Na máxima extensão permitida pela lei, <?= e(SITE_NAME) ?> não será responsável por quaisquer danos indiretos, incidentais, especiais, consequentes ou punitivos, ou qualquer perda de lucros ou receitas, resultantes da sua utilização dos serviços.</p>

      <h2>11. Indenização</h2>
      <p>Concorda em indenizar e isentar de responsabilidade <?= e(SITE_NAME) ?>, os seus afiliados e pessoal de qualquer reclamação ou demanda resultante da sua violação destes Termos ou do seu uso indevido dos serviços.</p>

      <h2>12. Suspensão e Rescisão</h2>
      <p>Podemos suspender ou rescindir o acesso aos serviços em qualquer momento, com ou sem aviso prévio, se acreditarmos que violou estes Termos ou a lei aplicável.</p>

      <h2>13. Lei Aplicável</h2>
      <p>Estes Termos são regidos pelas leis aplicáveis na sede de <?= e(SITE_NAME) ?>, sem consideração dos princípios de conflito de leis.</p>

      <h2>14. Alterações</h2>
      <p>Podemos alterar estes Termos de tempos em tempos. O uso continuado dos serviços após alterações constitui aceitação dos Termos revisto.</p>

      <h2>15. Contacto</h2>
      <p>As dúvidas sobre estes Termos podem ser enviadas através da nossa <a href="<?= page_url('contacts.php') ?>">página de contacto</a>.</p>

      <p style="margin-top:36px"><a class="btn btn-ghost" href="<?= page_url() ?>">← Voltar à página inicial</a></p>
    </div>
  </section>
</main>

<footer class="foot">
  <div class="shell">
    <div class="foot-bottom" style="margin-top:0;border-top:none;padding-top:0">
      © <?= date('Y') ?> <?= e(SITE_NAME) ?>. Todos os direitos reservados ·
      <a href="<?= page_url('privacy.php') ?>">Privacidade</a> ·
      <a href="<?= page_url('conditions.php') ?>">Termos</a>
    </div>
  </div>
</footer>
<?php require __DIR__ . '/includes/footer.php'; ?>
