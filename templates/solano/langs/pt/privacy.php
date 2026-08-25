<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Política de Privacidade ᐉ ' . SITE_NAME;
$page_description = 'Como ' . SITE_NAME . ' recolhe, utiliza e protege a sua informação pessoal.';
$page_canonical = page_url("privacy.php");
$active_page = "privacy";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Informação legal</span>
    <h1>Política de Privacidade</h1>
    <p class="etpy2">Como <?= e(SITE_NAME) ?> recolhe, utiliza e protege a sua informação pessoal.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <p class="cs7fii">Última atualização: janeiro de 2025</p>

    <h2>1. Introdução</h2>
    <p><?= e(SITE_NAME) ?> («nós», «nosso») compromete-se a proteger a privacidade dos visitantes e clientes. Esta Política de Privacidade explica que dados pessoais recolhemos, porque os recolhemos e como os tratamos quando utiliza o nosso site e serviços.</p>

    <h2>2. Informação que recolhemos</h2>
    <ul>
      <li><strong>Dados de identidade</strong> — nome, data de nascimento, documento de identificação oficial emitido pelo Estado para verificação de identidade e cumprimento das normas KYC/AML.</li>
      <li><strong>Dados de contacto</strong> — endereço de correio eletrónico, número de telefone, morada postal.</li>
      <li><strong>Dados financeiros</strong> — detalhes de pagamento, historial de transações, informação sobre a origem dos fundos.</li>
      <li><strong>Dados técnicos</strong> — endereço IP, tipo de navegador, identificadores de dispositivo, cookies e análise de utilização.</li>
    </ul>

    <h2>3. Como utilizamos os seus dados</h2>
    <ul>
      <li>Para verificar a identidade e cumprir as obrigações regulatórias.</li>
      <li>Para fornecer, manter e melhorar a nossa plataforma e serviços.</li>
      <li>Para processar pagamentos e detetar atividades fraudulentas.</li>
      <li>Para comunicar consigo relativamente à sua conta, atualizações e pedidos de apoio.</li>
      <li>Para enviar comunicações de marketing quando tiver dado consentimento (pode optar por não receber a qualquer momento).</li>
    </ul>

    <h2>4. Base jurídica</h2>
    <p>Tratamos dados pessoais com base numa ou mais das seguintes bases legais: execução de um contrato, cumprimento de uma obrigação legal, os nossos interesses legítimos ou o seu consentimento.</p>

    <h2>5. Partilha e divulgação</h2>
    <p>Podemos partilhar dados pessoais com prestadores de pagamento regulados, parceiros de verificação KYC/AML, fornecedores de infraestrutura cloud, consultores profissionais e autoridades competentes quando a lei o exigir. Não vendemos dados pessoais.</p>

    <h2>6. Transferências internacionais</h2>
    <p>Quando os dados pessoais são transferidos para fora da sua jurisdição, garantimos que existem salvaguardas adequadas, incluindo cláusulas contratuais-tipo.</p>

    <h2>7. Retenção de dados</h2>
    <p>Conservamos dados pessoais durante o tempo necessário para prestar serviços e cumprir requisitos legais, regulatórios e contabilísticos — tipicamente pelo menos cinco anos após o encerramento de uma conta.</p>

    <h2>8. Os seus direitos</h2>
    <p>Sujeito à lei aplicável, pode solicitar acesso, retificação, eliminação, limitação ou portabilidade dos seus dados pessoais, e opor-se a certos tratamentos. Para exercer estes direitos, contacte-nos através do endereço indicado abaixo.</p>

    <h2>9. Cookies</h2>
    <p>Utilizamos cookies essenciais e analíticos para operar o site e compreender a utilização. Pode gerir os cookies através das definições do seu navegador.</p>

    <h2>10. Segurança</h2>
    <p>Aplicamos salvaguardas administrativas, técnicas e físicas concebidas para proteger os dados pessoais contra acesso não autorizado, divulgação, alteração ou destruição. Nenhum sistema é perfeitamente seguro e não podemos garantir segurança absoluta.</p>

    <h2>11. Alterações</h2>
    <p>Podemos atualizar esta Política de tempos a tempos. A versão mais recente estará sempre disponível nesta página com a data atualizada.</p>

    <h2>12. Contacto</h2>
    <p>Para questões sobre privacidade ou para exercer os seus direitos, contacte a equipa de Proteção de Dados de <?= e(SITE_NAME) ?> através da nossa página de contacto.</p>

    <p style="margin-top:36px"><a class="qou73xg ec2hno" href="<?= page_url() ?>">← Voltar à página inicial</a></p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
