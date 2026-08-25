<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Contacto ' . SITE_NAME . ' ᐉ Estamos aqui para o ajudar';
$page_description = 'Tem alguma pergunta sobre ' . SITE_NAME . ' ou a sua conta?';
$page_canonical = page_url("contacts.php");
$active_page = "contacts";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/ContactPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Contacto</span>
    <h1>Estamos aqui para o ajudar</h1>
    <p class="kpnq92g">Tem alguma pergunta sobre <?= e(SITE_NAME) ?> ou a sua conta? A nossa equipa de apoio terá todo o gosto em ajudá-lo. Escreva-nos e responderemos o mais rapidamente possível.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Antes de nos escrever</h2>
    <p>A maioria das perguntas já tem resposta no site, e verificar primeiro costuma ser mais rápido do que esperar por uma resposta.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('faq.php') ?>" style="color:var(--accent)">Perguntas frequentes</a> — custos, reembolsos, verificação e montantes mínimos.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('product.php') ?>" style="color:var(--accent)">Como funciona</a> — o que acontece depois de se registar, passo a passo.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><a href="<?= page_url('pricing.php') ?>" style="color:var(--accent)">Preços</a> — o que é gratuito e onde pode aparecer um custo.</span></li>
    </ul>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Começar — <?= e(money_min()) ?> mín.</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Como contactar-nos</h2>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Channel</th><th scope="col">Best for</th><th scope="col">Response</th></tr></thead>
      <tbody>
        <tr><td>Apoio por correio eletrónico — <a href="mailto:<?= e(SUPPORT_EMAIL) ?>"><?= e(SUPPORT_EMAIL) ?></a></td><td>Perguntas sobre a conta, verificação, reembolsos</td><td>Normalmente respondemos num dia útil.</td></tr>
        <tr><td>Callback request</td><td>Qualquer coisa mais fácil de explicar a falar</td><td>Horário de apoio: segunda a sexta-feira, 9:00–18:00</td></tr>
        <tr><td>Abuse report — <a href="<?= page_url('report-abuse.php') ?>" style="color:var(--accent)">/denunciar-abuso</a></td><td>Usurpação de identidade, uso indevido da marca, mensagens suspeitas</td><td>Reviewed on receipt</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>O que esperar ao entrar em contacto</h2>
    <h3>Que canal usar</h3>
    <p>O correio eletrónico é adequado para qualquer assunto com documento anexo: verificações de identidade, pedidos sobre reembolsos, dúvidas sobre um extrato. O formulário de pedido de chamada serve para todo o resto, porque a maioria das perguntas sobre a conta resolve-se mais depressa em dois minutos de conversa do que em quatro mensagens.</p>
    <h4>Fora do horário de atendimento</h4>
    <p>As mensagens enviadas ao final do dia ou ao fim de semana ficam em fila e são respondidas logo no início do dia útil seguinte, por ordem de chegada.</p>
    <h3>Dados que convém incluir</h3>
    <p>O correio eletrónico registado e a data aproximada do assunto são suficientes para localizar a conta. Nunca envie uma palavra-passe, um número de cartão completo nem um código de utilização única: nenhum membro da nossa equipa lho pedirá.</p>
    <h4>Se algo não parecer correto</h4>
    <p>Denuncie no mesmo dia. Qualquer situação relacionada com um pagamento que não reconheça é tratada de imediato, sem esperar pela fila habitual.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
