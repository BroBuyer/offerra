<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Denunciar abuso ᐉ ' . SITE_NAME;
$page_description = 'Denunciar abuso — ' . SITE_NAME;
$page_canonical = page_url("report-abuse.php");
$active_page = "abuse";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main itemscope itemtype="https://schema.org/WebPage" id="yfln8q">
<section class="ykzi1">
  <div class="ggh3sm">
    <span class="vd7z9k">Confiança e segurança</span>
    <h1>Denunciar abuso</h1>
    <p class="rmct9">Ajude-nos a manter <?= e(SITE_NAME) ?> seguro. Denuncie fraude suspeito, usurpação de identidade ou uso indevido da nossa plataforma ou marca.</p>
  </div>
</section>

<section class="bqfjng">
  <div class="ggh3sm">
    <h2>O que denunciar</h2>
    <p>Por favor, denuncie qualquer um dos seguintes à nossa equipa de Confiança e Segurança:</p>
    <ul>
      <li>E-mails de phishing, sites fraudulentos ou aplicações falsas que se fazem passar por <?= e(SITE_NAME) ?>.</li>
      <li>Contas de redes sociais, anúncios ou canais de mensagens que fazem mau uso do nosso nome, logótipo ou marcas registadas.</li>
      <li>Suspeita de tomada de controlo de conta, acesso não autorizado ou roubo de identidade.</li>
      <li>Pedidos de pagamento suspeitos, "agentes de recuperação" ou terceiros que afirmem agir em nosso nome.</li>
      <li>Abuso de mercado, preocupações sobre branqueamento de capitais ou qualquer atividade ilegal ligada aos nossos serviços.</li>
      <li>Comportamento abusivo, ameaçador ou de assédio para com o nosso pessoal ou utilizadores.</li>
    </ul>

    <h2>Como denunciar</h2>
    <p>Envie-nos um relatório detalhado através de qualquer um dos canais abaixo. Se possível, inclua:</p>
    <ul>
      <li>A data e a hora do incidente.</li>
      <li>URLs, capturas de ecrã, cabeçalhos de mensagem, endereços de remetente ou números de telefone.</li>
      <li>A informação da sua conta (se a denúncia afetar a sua conta).</li>
      <li>Qualquer outro contexto que possa ajudar-nos a investigar.</li>
    </ul>

    <div class="ziavo">
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel bf48erp"></i></div>
        <b>Correio eletrónico de Confiança e Segurança</b>
        <span>Utilize a página de contacto para comunicar com a nossa equipa de Confiança e Segurança. Os relatórios são classificados num prazo de um dia útil.</span>
      </div>
      <div class="bv1ft5">
        <div class="qpw9z"><i class="erhel ou4vm"></i></div>
        <b>Divulgação de segurança</b>
        <span>Para a divulgação responsável de vulnerabilidades de segurança que afetem os nossos sistemas, contacte-nos antes de partilhar publicamente os detalhes.</span>
      </div>
    </div>

    <h2>O que acontece a seguir?</h2>
    <p>Revemos cada relatório. Consoante a natureza do problema, podemos contactá-lo para obter mais informação, coordenar com fornecedores de pagamento ou plataformas de alojamento para remover conteúdo fraudulento, ou encaminhar assuntos às autoridades competentes ou aos reguladores. Tratamos os relatórios de forma confidencial e, quando legalmente possível, protegemos a identidade dos denunciantes.</p>

    <h2>Assuntos urgentes</h2>
    <p>Se acredita que foi vítima de um crime, contacte a autoridade policial local além de nos informar. Se suspeitar que a sua conta foi comprometida, altere imediatamente a sua palavra-passe e notifique-nos de imediato.</p>

    <p style="margin-top:36px">
      <a class="qou73xg fi3abjs" href="<?= page_url('contacts.php') ?>">Contacte a Confiança e Segurança</a>
      <a class="qou73xg ec2hno" href="<?= page_url() ?>" style="margin-left:8px">← Voltar à página inicial</a>
    </p>
  </div>
</section>
</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
