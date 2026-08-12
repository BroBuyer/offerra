<?php
require_once __DIR__ . '/includes/config.php';
$page_title = page_title('Política de Privacidade');
$page_description = 'Como a ' . SITE_NAME . ' recolhe, utiliza e protege os seus dados pessoais.';
$page_canonical = page_url('privacy.php');
$active_page = 'privacy';
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
      <span class="eyebrow">Informações legais</span>
      <h1>Política de Privacidade</h1>
      <p class="lede">Como a <?= e(SITE_NAME) ?> recolhe, utiliza e protege os seus dados pessoais.</p>
    </div>
  </section>

  <section class="legal-body">
    <div class="shell">
      <p class="meta">Última actualização: Janeiro de 2025</p>

      <h2>1. Introdução</h2>
      <p>A <?= e(SITE_NAME) ?> ("nós", "a nossa", "nossos") está empenhada em proteger a privacidade dos visitantes e clientes. Esta Política de Privacidade explica que dados pessoais recolhemos, por que razão os recolhemos e como os tratamos quando utiliza o nosso website e serviços.</p>

      <h2>2. Informações que recolhemos</h2>
      <ul>
        <li>Dados de identidade — nome, data de nascimento, documentos de identificação emitidos pelo governo para fins de registo e conformidade KYC/AML.</li>
        <li>Dados de contacto — endereço de correio electrónico, número de telefone, endereço postal.</li>
        <li>Dados financeiros — detalhes de pagamento, histórico de transacções, informações sobre a origem dos fundos.</li>
        <li>Dados técnicos — endereço IP, tipo de navegador, identificadores de dispositivo, cookies e análises de utilização.</li>
      </ul>

      <h2>3. Como utilizamos os seus dados</h2>
      <ul>
        <li>Para verificar a identidade e cumprir com obrigações regulatórias.</li>
        <li>Para fornecer, manter e melhorar a nossa plataforma e serviços.</li>
        <li>Para processar pagamentos e detectar atividades fraudulentas.</li>
        <li>Para comunicar consigo relativamente à sua conta, atualizações e pedidos de apoio.</li>
        <li>Para enviar comunicações de marketing quando tiver consentido (pode cancelar a subscrição a qualquer momento).</li>
      </ul>

      <h2>4. Fundamento Legal</h2>
      <p>Processamos dados pessoais com base num ou mais dos seguintes fundamentos legítimos: execução de um contrato, cumprimento de uma obrigação legal, os nossos interesses legítimos, ou o seu consentimento.</p>

      <h2>5. Partilha e Divulgação</h2>
      <p>Podemos partilhar dados pessoais com fornecedores de pagamento regulados, parceiros de verificação KYC/AML, fornecedores de infraestrutura em nuvem, consultores profissionais e autoridades competentes quando exigido por lei. Não vendemos dados pessoais.</p>

      <h2>6. Transferências Internacionais</h2>
      <p>Quando dados pessoais são transferidos para fora da sua jurisdição, garantimos que as salvaguardas apropriadas estão em vigor, incluindo cláusulas contratuais padrão.</p>

      <h2>7. Retenção de Dados</h2>
      <p>Retemos dados pessoais durante o tempo necessário para prestar serviços e satisfazer requisitos legais, regulamentares e contabilísticos — tipicamente pelo menos cinco anos após o encerramento da conta.</p>

      <h2>8. Os Seus Direitos</h2>
      <p>Sujeito à lei aplicável, pode solicitar o acesso, correção, eliminação, restrição ou portabilidade dos seus dados pessoais, e pode opor-se a determinado processamento. Para exercer estes direitos, contacte-nos através do endereço abaixo.</p>

      <h2>9. Cookies</h2>
      <p>Utilizamos cookies essenciais e analíticos para operar o site e compreender a utilização. Pode gerir cookies através das definições do seu navegador.</p>

      <h2>10. Segurança</h2>
      <p>Aplicamos salvaguardas administrativas, técnicas e físicas concebidas para proteger dados pessoais contra acesso não autorizado, divulgação, alteração ou destruição. Nenhum sistema é perfeitamente seguro, e não podemos garantir segurança absoluta.</p>

      <h2>11. Alterações</h2>
      <p>Podemos atualizar esta Política de tempos em tempos. A versão mais recente estará sempre disponível nesta página com a data atualizada.</p>

      <h2>12. Contacto</h2>
      <p>Para questões de privacidade ou para exercer os seus direitos, contacte a equipa de Proteção de Dados <?= e(SITE_NAME) ?> através da nossa <a href="<?= page_url('contacts.php') ?>">página de contacto</a>.</p>

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
