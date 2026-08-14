<?php
require_once __DIR__ . '/includes/config.php';
$page_title = 'Perguntas frequentes ' . SITE_NAME;
$page_description = 'Perguntas, respondidas — ' . SITE_NAME;
$page_canonical = page_url("faq.php");
$active_page = "faq";
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="top">

<section class="kj9w4x">
  <div class="ggh3sm">
    <span class="qwce6q">Perguntas</span>
    <h1>Perguntas, respondidas com clareza</h1>
    <p class="kpnq92g">O que as pessoas perguntam antes de abrir uma conta, e as respostas que lhe daríamos por telefone.</p>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>02</b><i></i></div>
    <h2>Perguntas sobre o dinheiro</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name"><?= e(SITE_NAME) ?> é uma burla?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Não: <?= e(SITE_NAME) ?> opera com controlos de verificação, publica na íntegra as suas condições e o seu aviso de risco, e os reembolsos regressam sempre ao método de pagamento original. Dito isto, todo o investimento implica risco real e nenhuma plataforma séria promete rentabilidades garantidas; desconfie de quem o faça.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Quanto custa abrir uma conta?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Abrir uma conta é gratuito. Não há taxa de registo nem subscrição; apenas deposita o montante que decidir investir.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Quanto tempo demoram os reembolsos?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Os pedidos são processados em dias úteis e devolvidos ao método com que depositou. As transferências bancárias demoram mais do que os cartões ou as carteiras eletrónicas.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Há um montante mínimo?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Sim, e é deliberadamente baixo, de <?= e(money_min()) ?>, para que possa começar devagar e aumentar mais tarde. O valor exato é apresentado antes de confirmar qualquer coisa.</p></div>
      </details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>01</b><i></i></div>
    <h2>Perguntas frequentes</h2>
    <div class="fjl4d">
      <details open><summary>Qual é o depósito mínimo para começar?</summary><p>Pode abrir e financiar a sua conta com <?= e(money_min()) ?> mínimo. É livre de adicionar mais fundos à medida que avança o seu plano de investimento.</p></details>
      <details><summary>Como funcionam os levantamentos de fundos?</summary><p>Solicite um levantamento a qualquer momento a partir do seu painel de controlo. Os fundos são devolvidos ao método de pagamento escolhido, com os prazos de processamento habituais.</p></details>
      <details><summary>O meu dinheiro está protegido de forma segura?</summary><p>As contas estão protegidas com padrões de segurança e identificação de nível profissional. Como em todo o investimento, o seu capital está exposto a risco e os valores podem subir ou descer.</p></details>
      <details><summary>Quanto tempo demora a começar a investir?</summary><p>A maioria dos membros conclui o registo em poucos minutos. Assim que o seu primeiro depósito é processado, pode ativar um plano de imediato.</p></details>
      <details><summary>Há comissões ocultas?</summary><p>Todos os custos são apresentados de forma transparente antes de se comprometer. Verá sempre o que se aplica ao seu plano, sem surpresas.</p></details>
      <details><summary>Qual é a idade mínima para se registar?</summary><p>Deve ter pelo menos 18 anos para abrir uma conta e investir. Pode ser solicitada verificação para confirmar a sua idade e identidade.</p></details>
      <details><summary>Que métodos de pagamento são aceites?</summary><p>São aceites métodos comuns como cartões de débito e crédito, transferências bancárias, carteiras eletrónicas selecionadas e criptomoedas. As opções exatas são apresentadas no passo de depósito.</p></details>
      <details><summary>Quando está disponível o serviço de apoio ao cliente?</summary><p>A nossa equipa de apoio está disponível de segunda a sexta-feira, das 9:00 às 18:00, e compromete-se a responder a cada pedido num dia útil.</p></details>
      <details><summary>Como são geridos os impostos sobre os ganhos?</summary><p>Os impostos sobre ganhos de investimento dependem da regulamentação do seu país e são da sua responsabilidade. Recomendamos que mantenha registos próprios e consulte um consultor fiscal qualificado.</p></details>
      <details><summary>O que é a verificação KYC e porque é obrigatória?</summary><p>KYC (Know Your Customer) é uma verificação padrão da sua identidade. Ajuda a manter as contas seguras e faz parte do processo habitual de abrir uma conta de investimento.</p></details>
      <details><summary>Preciso de experiência prévia em investimentos?</summary><p>Não. Cada membro dispõe de um analista financeiro pessoal que o guia em cada passo, pelo que não precisa de conhecimentos prévios sobre os mercados.</p></details>
      <details><summary>Quem gere os meus investimentos?</summary><p>Um analista financeiro dedicado, apoiado por ferramentas de IA, a trabalhar segundo os seus objetivos e nível de risco. O analista combina experiência profissional com tecnologia — as decisões continuam a ser humanas.</p></details>
      <details><summary>A plataforma cumpre a regulamentação?</summary><p>Sim — cumpre os padrões financeiros e de cibersegurança nacionais, com proteção de conta e verificação integradas. Estamos regulados pela CMVM.</p></details>
      <details><summary>Posso adicionar mais fundos à minha conta depois?</summary><p>Sim. Pode recarregar a sua conta a qualquer momento e ajustar o seu plano com o seu analista à medida que evoluem os seus objetivos.</p></details>
    </div>
  </div>
</section>

<section class="onxr8te" data-u="sec">
  <div class="ggh3sm">
    <div class="fduhcv"><b>03</b><i></i></div>
    <h2>Conta e segurança</h2>
    <div class="fjl4d" itemscope itemtype="https://schema.org/FAQPage">
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Como funciona o início de sessão em <?= e(SITE_NAME) ?>?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Acede com o seu correio eletrónico registado e a sua palavra-passe a partir da web ou do navegador do telemóvel. Se ativou a verificação em dois passos, será pedido um código adicional; se se esquecer da palavra-passe, pode repô-la a partir do próprio ecrã de acesso.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Porque precisam dos meus documentos de identidade?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">A verificação é obrigatória antes de uma conta poder movimentar fundos. Também impede que outra pessoa abra uma conta em seu nome.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Preciso de experiência prévia?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Não. A maioria dos membros começa sem qualquer experiência. Um especialista acompanha-o nos primeiros passos e um saldo de demonstração permite-lhe praticar.</p></div>
      </details>
      <details itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
        <summary><h3 itemprop="name">Posso utilizá-lo a partir do telemóvel?</h3></summary>
        <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer"><p itemprop="text">Sim, a plataforma funciona no navegador do telemóvel sem necessidade de instalar nada.</p></div>
      </details>
    </div>
    <div class="tw9z4by">
      <a class="qou73xg fi3abjs" href="<?= page_url() ?>#nlokf">Começar — <?= e(money_min()) ?> mín.</a>
      <a class="qou73xg ec2hno" href="<?= page_url('contacts.php') ?>">Enviar mensagem</a>
    </div>
  </div>
</section>

</main>
<?php require __DIR__ . '/includes/site-footer.php'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>
