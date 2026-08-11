(() => {
  const root = document.getElementById('lisaChat');
  if (!root) return;

  const L = window.APP_LANG || {};
  const toggleBtn = document.getElementById('chat-toggle-btn');
  const closeBtn = document.getElementById('chat-close-btn');
  const panel = document.getElementById('chat-window');
  const messages = document.getElementById('chat-messages');
  const controls = document.getElementById('chat-controls');
  const typing = document.getElementById('typing-indicator');
  const formWrap = document.getElementById('chat-form-wrap');
  const notiDot = document.getElementById('chat-noti-dot');

  let started = false;
  let open = false;

  const steps = [
    {
      bot:
        L.chatStep1Bot ||
        "Olá! Sou a Lisa, a sua assistente de onboarding. Pronto para abrir uma conta de trading em poucos passos rápidos?",
      choices: [
        { label: L.chatStep1Yes || "Sim, vamos começar", value: 'start' },
        { label: L.chatStep1More || 'Conte-me mais primeiro', value: 'more' },
      ],
    },
    {
      bot: L.chatStep2Bot || 'Ótimo. Já negociou cripto ou forex antes?',
      choices: [
        { label: L.chatStep2New || "Sou novo", value: 'beginner' },
        { label: L.chatStep2Mid || 'Alguma experiência', value: 'mid' },
        { label: L.chatStep2Pro || "Sou experiente", value: 'pro' },
      ],
    },
    {
      bot: L.chatStep3Bot || 'O que mais lhe interessa neste momento?',
      choices: [
        { label: L.chatStep3Crypto || 'Cripto', value: 'crypto' },
        { label: L.chatStep3Forex || 'Forex', value: 'forex' },
        { label: L.chatStep3Stocks || 'Ações / índices', value: 'stocks' },
        { label: L.chatStep3All || 'Tudo o acima', value: 'all' },
      ],
    },
    {
      bot:
        L.chatStep4Bot ||
        "Perfeito. Vou preparar um formulário de conta gratuita — demora menos de 3 minutos e a nossa equipa ligará para concluir a configuração.",
      choices: [{ label: L.chatStep4Form || 'Abrir o formulário', value: 'form' }],
    },
  ];

  const moreReply =
    L.chatMoreReply ||
    'Guiamos principiantes com um painel limpo, dicas de mercado com IA em linguagem clara e financiamento seguro a partir do seu depósito mínimo. Continuamos?';

  const continueLabel = L.chatContinue || "Sim, vamos continuar";
  const formPrompt =
    L.chatFormPrompt ||
    "Introduza os seus dados abaixo e submeta — fico aqui se precisar de alguma coisa.";

  function sleep(ms) {
    return new Promise((resolve) => setTimeout(resolve, ms));
  }

  const body = root.querySelector('.lisa-body');

  function scrollChat() {
    // Keep the newest messages visible (accounting for sticky controls overlay).
    const scroller = body || messages;
    if (!scroller) return;
    scroller.scrollTop = scroller.scrollHeight;
  }

  function addBubble(text, who) {
    const el = document.createElement('div');
    el.className = 'lisa-bubble lisa-bubble--' + who;
    el.textContent = text;
    messages.appendChild(el);
    // Wait for layout so scrollHeight is up-to-date.
    requestAnimationFrame(scrollChat);
  }

  async function showTyping(ms = 700) {
    typing.hidden = false;
    await sleep(ms);
    typing.hidden = true;
  }

  function clearChoices() {
    controls.innerHTML = '';
  }

  function renderChoices(choices, onPick) {
    clearChoices();
    choices.forEach((choice) => {
      const btn = document.createElement('button');
      btn.type = 'button';
      btn.className = 'lisa-choice';
      btn.textContent = choice.label;
      btn.addEventListener('click', () => onPick(choice));
      controls.appendChild(btn);
    });
  }

  async function runStep(index) {
    const step = steps[index];
    if (!step) {
      await showForm();
      return;
    }
    await showTyping();
    addBubble(step.bot, 'bot');
    renderChoices(step.choices, async (choice) => {
      addBubble(choice.label, 'user');
      clearChoices();

      if (choice.value === 'more') {
        await showTyping(900);
        addBubble(moreReply, 'bot');
        renderChoices([{ label: continueLabel, value: 'start' }], async (c) => {
          addBubble(c.label, 'user');
          clearChoices();
          await runStep(1);
        });
        return;
      }

      if (choice.value === 'form' || index === steps.length - 1) {
        await showForm();
        return;
      }

      await runStep(index + 1);
    });
  }

  async function showForm() {
    await showTyping(600);
    addBubble(formPrompt, 'bot');
    clearChoices();
    formWrap.hidden = false;
    requestAnimationFrame(scrollChat);
  }

  function setOpen(next) {
    open = next;
    if (open) {
      panel.hidden = false;
      requestAnimationFrame(() => panel.classList.add('is-open'));
      toggleBtn.setAttribute('aria-expanded', 'true');
      toggleBtn.style.opacity = '0';
      toggleBtn.style.pointerEvents = 'none';
      notiDot?.classList.remove('is-visible');
      notiDot?.classList.add('is-hidden');
      if (!started) {
        started = true;
        runStep(0);
      }
    } else {
      panel.classList.remove('is-open');
      toggleBtn.setAttribute('aria-expanded', 'false');
      toggleBtn.style.opacity = '1';
      toggleBtn.style.pointerEvents = 'auto';
      setTimeout(() => {
        if (!open) panel.hidden = true;
      }, 350);
    }
  }

  toggleBtn?.addEventListener('click', () => setOpen(true));
  closeBtn?.addEventListener('click', () => setOpen(false));

  // Soft auto-nudge after delay (sample scale-in)
  setTimeout(() => {
    if (!open && notiDot) {
      notiDot.classList.remove('is-hidden');
      notiDot.classList.add('is-visible');
    }
  }, 2500);
})();
