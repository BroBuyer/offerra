<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Porque nós ' . SITE_NAME;
$page_description = 'Porque as pessoas escolhem começar com ' . SITE_NAME;
$page_canonical = page_url("offer.php");
$active_page = "offer";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Porque esta plataforma</span>
    <h1>Porque as pessoas escolhem começar aqui</h1>
    <p class="kpnq92g">Não é um discurso comercial: são motivos concretos e verificáveis, e também as partes que não convêm a toda a gente.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Sem folhas de cálculo. Sem ecrãs. Sem dúvidas de última hora</h2>
    <div class="smnsm2" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Plataforma</th><th scope="col"><?= e(SITE_NAME) ?></th><th scope="col">Corretora tradicional</th><th scope="col">Operar por conta própria</th></tr></thead>
      <tbody>
        <tr><td>Execução de ordens com IA</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">horário limitado</td><td style="color:var(--muted)">manual</td></tr>
        <tr><td>Supervisão 24/7 em todos os mercados</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">burocracia</td><td style="color:var(--muted)">Por conta própria</td></tr>
        <tr><td>Encaminhamento de ordens em menos de um segundo</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">apenas por nível</td><td style="color:var(--muted)">manual</td></tr>
        <tr><td>Relatórios em várias moedas</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">horário limitado</td><td style="color:var(--muted)">Por conta própria</td></tr>
        <tr><td>Abertura de conta sem burocracia</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">burocracia</td><td style="color:var(--muted)">manual</td></tr>
        <tr><td>Arbitragem entre exchanges</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">apenas por nível</td><td style="color:var(--muted)">Por conta própria</td></tr>
        <tr><td>Gestor pessoal atribuído</td><td style="color:var(--pos)">✓</td><td style="color:var(--muted)">horário limitado</td><td style="color:var(--muted)">manual</td></tr>
      </tbody>
    </table></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>O que obtém e uma abordagem por conta própria não lhe dá</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Execução em menos de um segundo em cada mercado ligado.</b> <?= e(SITE_NAME) ?> mantém ligações API permanentes de baixa latência com cada exchange suportado. Quando o modelo gera um sinal, a ordem é enviada, executada e registada no seu painel antes do tick seguinte.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Funciona 24/7, em cada sessão de mercado.</b> As criptomoedas não descansam, e <?= e(SITE_NAME) ?> também. O motor continua a analisar pares durante fins de semana e feriados para que nunca lhe escape uma oportunidade.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Relatórios em várias moedas.</b> Cada saldo, cada operação e cada levantamento é apresentado na sua moeda local. Sem passos de conversão ocultos em momento algum.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Capital segregado.</b> Os seus fundos permanecem na sua própria conta. <?= e(SITE_NAME) ?> nunca os custodia: o motor apenas tem permissão para enviar ordens.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Segurança de nível bancário.</b> Encriptação TLS em toda a plataforma, verificação em dois passos por predefinição e auditorias trimestrais de infraestrutura por terceiros. Recibos de operações registados em blockchain.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Três classes de ativos, uma única plataforma.</b> A maioria das plataformas de retalho limita-o a um único mercado. <?= e(SITE_NAME) ?> opera criptomoedas, ações cotadas e os principais pares de divisas a partir do mesmo painel.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span><b style="color:var(--heading)">Limites de risco predefinidos em cada posição.</b> O stop-loss, a perda máxima admitida e os tetos de alocação de capital são configurados por classe de ativo. O motor fecha automaticamente qualquer operação que ultrapasse um limiar e o sucedido fica registado no seu histórico de auditoria.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Para quem provavelmente não é</h2>
    <p>Dizê-lo claramente poupa tempo a todos. Se algum destes pontos o descreve, outro caminho encaixará melhor.</p>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Precisa de rentabilidades garantidas. Nenhuma plataforma honesta as oferece, e nós também não.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Quer investir dinheiro que não pode perder.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Opera a volume profissional com a sua própria infraestrutura de execução.</span></li>
    </ul>
    <p class="jkkyl">Investir implica risco, incluindo a possível perda de parte ou de todo o capital. O valor dos investimentos pode subir ou descer, e poderá recuperar menos do que investiu. Não invista dinheiro que não possa perder.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Começar — <?= e(money_min()) ?> mín.</a></div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
