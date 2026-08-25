<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Preços ' . SITE_NAME;
$page_description = 'Preços simples e transparentes — ' . SITE_NAME;
$page_canonical = page_url("pricing.php");
$active_page = "pricing";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top" itemscope itemtype="https://schema.org/WebPage">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Preços</span>
    <h1>Preços simples e transparentes.</h1>
    <p class="kpnq92g">Começar com <?= e(SITE_NAME) ?> é gratuito. Não há comissões ocultas por abrir uma conta, e apenas deposita o que decidir investir: a plataforma e as suas ferramentas estão incluídas.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Onde podem aparecer custos</h2>
    <p>Estes são os únicos pontos onde o dinheiro sai do seu saldo por algo que não seja um investimento escolhido por si.</p>
    <div class="jvlvb1" role="region" tabindex="0"><table class="wcle1">
      <thead><tr><th scope="col">Conceito</th><th scope="col">Quem cobra</th><th scope="col">Nota</th></tr></thead>
      <tbody>
        <tr><td>Abertura de conta</td><td>—</td><td>Gratuito.</td></tr>
        <tr><td>Acesso à plataforma</td><td>—</td><td>Incluído, sem subscrição.</td></tr>
        <tr><td>Spread de mercado</td><td>Corretora</td><td>A diferença habitual entre preço de compra e de venda.</td></tr>
        <tr><td>Comissão de rede / banco</td><td>Fornecedor de pagamento</td><td>Depende do método que escolher.</td></tr>
      </tbody>
    </table></div>
    <p class="jkkyl">O capital está em risco. Invista apenas o que possa perder.</p>
    <div class="tw9z4by"><a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Abrir uma conta</a></div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>O que está incluído</h2>
    <ul class="skvsaz4">
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Abertura de conta gratuita: sem taxas de registo nem de licença.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Sem encargos ocultos em depósitos, levantamentos nem manutenção de conta.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Apenas podem aplicar-se spreads habituais da corretora ou custos de rede.</span></li>
      <li><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg><span>Comece a partir do depósito mínimo e escale ao seu ritmo.</span></li>
    </ul>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm op6k5h">
    <h2>Como se veem os valores na prática</h2>
    <h3>Um primeiro depósito, passo a passo</h3>
    <p>O primeiro depósito resume todo o custo num só sítio: o montante que envia, o spread ao convertê-lo, e nada mais até decidir operar. Não há taxa de conta no fim do mês nem encargo por deixar o saldo onde está.</p>
    <h4>O que acontece no mesmo dia</h4>
    <p>O saldo aparece quando o pagamento é confirmado, e um especialista percorre o plano antes de abrir qualquer coisa. Nada é colocado automaticamente em seu nome.</p>
    <h3>Levantamentos e o que custam</h3>
    <p>Os levantamentos regressam ao método de pagamento com que chegou o dinheiro: é um requisito, não uma preferência, para que a conta continue a ser sua. O processamento é gratuito da nossa parte; a única dedução possível é a do seu banco ou emissor de cartão.</p>
    <h4>Prazos com que pode contar</h4>
    <p>Os pedidos em dia útil são revistos no mesmo dia. Os reembolsos para cartão costumam liquidar-se em três a cinco dias úteis, as transferências em dois.</p>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
