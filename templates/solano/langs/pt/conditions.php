<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Condições de Utilização ᐉ ' . SITE_NAME;
$page_description = 'Condições de utilização de ' . SITE_NAME;
$page_canonical = page_url("conditions.php");
$active_page = "conditions";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Legal</span>
    <h1>Condições de Utilização</h1>
    <p class="etpy2">As regras que se aplicam quando acede ou utiliza <?= e(SITE_NAME) ?>.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Última atualização: janeiro de 2025</p>

    <h2>1. Aceitação das Condições</h2>
    <p>Ao aceder ou utilizar o site e os serviços de <?= e(SITE_NAME) ?>, aceita ficar vinculado a estas Condições de Utilização. Se não concordar, não utilize os serviços.</p>

    <h2>2. Elegibilidade</h2>
    <p>Deve ter pelo menos 18 anos (ou a idade de maioridade na sua jurisdição) e ser legalmente capaz de celebrar um contrato vinculativo. Os serviços não são oferecidos a residentes de jurisdições restritas onde tal oferta seria ilegal.</p>

    <h2>3. Registo de Conta</h2>
    <p>Aceita fornecer informação precisa, atual e completa durante o registo e manter esta informação atualizada. É responsável por manter a confidencialidade das suas credenciais e por todas as atividades na sua conta.</p>

    <h2>4. Serviços</h2>
    <p><?= e(SITE_NAME) ?> fornece ferramentas tecnológicas e informação educativa relacionada com investimento online. Não somos o seu consultor financeiro. Nada neste site constitui aconselhamento de investimento personalizado, aconselhamento fiscal ou uma solicitação para comprar ou vender qualquer instrumento financeiro.</p>

    <h2>5. Comissões</h2>
    <p>As comissões, spreads e encargos aplicáveis são divulgados na plataforma ou na tabela de comissões aplicável. É responsável por quaisquer impostos resultantes das suas atividades.</p>

    <h2>6. Conduta Proibida</h2>
    <ul>
      <li>Utilizar os serviços para branqueamento de capitais, financiamento do terrorismo, manipulação de mercado ou qualquer fim ilegal.</li>
      <li>Usurpar a identidade de outra pessoa ou fornecer informação de identidade falsa.</li>
      <li>Tentar interferir, comprometer ou descodificar qualquer parte da plataforma.</li>
      <li>Utilizar ferramentas automatizadas para aceder aos serviços de forma diferente da expressamente permitida.</li>
    </ul>

    <h2>7. Propriedade Intelectual</h2>
    <p>Todo o conteúdo, marcas registadas, software e materiais no site são propriedade de <?= e(SITE_NAME) ?> ou dos seus licenciadores e estão protegidos pelas leis de propriedade intelectual aplicáveis. É-lhe concedida uma licença limitada, não exclusiva e revogável para utilizar os serviços para o fim previsto.</p>

    <h2>8. Serviços de Terceiros</h2>
    <p>A plataforma pode conter ligações ou integrar-se com serviços de terceiros. Não somos responsáveis por esses serviços nem pela sua disponibilidade, precisão ou conteúdo.</p>

    <h2>9. Isenções de Responsabilidade</h2>
    <p>Os serviços são fornecidos «tal como estão» e «conforme disponíveis», sem garantias de qualquer tipo. O trading implica risco substancial de perda. Consulte a nossa <a href="<?= page_url('risk-disclosure.php') ?>" style="color:var(--accent)">Divulgação de Riscos</a> para mais detalhes.</p>

    <h2>10. Limitação de Responsabilidade</h2>
    <p>Na máxima medida permitida por lei, <?= e(SITE_NAME) ?> não será responsável por danos indiretos, incidentais, especiais, consequenciais ou punitivos, nem por qualquer perda de lucros ou receitas, resultantes da sua utilização dos serviços.</p>

    <h2>11. Indemnização</h2>
    <p>Compromete-se a indemnizar e manter indemne <?= e(SITE_NAME) ?>, as suas filiais e o respetivo pessoal de qualquer reclamação ou ação resultante do seu incumprimento destas Condições ou da utilização indevida dos serviços.</p>

    <h2>12. Suspensão e Rescisão</h2>
    <p>Podemos suspender ou terminar o acesso aos serviços a qualquer momento, com ou sem aviso prévio, se considerarmos que incumpriu estas Condições ou a lei aplicável.</p>

    <h2>13. Lei Aplicável</h2>
    <p>Estas Condições regem-se pelas leis aplicáveis na sede de <?= e(SITE_NAME) ?>, sem consideração dos princípios de conflito de leis.</p>

    <h2>14. Alterações</h2>
    <p>Podemos alterar estas Condições de tempos a tempos. A utilização continuada dos serviços após alterações constitui aceitação das Condições revistas.</p>

    <h2>15. Contacto</h2>
    <p>As questões sobre estas Condições podem ser enviadas através da nossa página de contacto.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Voltar à página inicial</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
