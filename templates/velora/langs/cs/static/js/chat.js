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
        "Ahoj! Jsem Lisa, vaše asistentka onboardingu. Jste připraveni otevřít obchodní účet v několika rychlých krocích?",
      choices: [
        { label: L.chatStep1Yes || "Ano, pojďme začít", value: 'start' },
        { label: L.chatStep1More || 'Nejdřív mi řekni víc', value: 'more' },
      ],
    },
    {
      bot: L.chatStep2Bot || 'Skvělé. Obchodovali jste už s kryptem nebo forexem?',
      choices: [
        { label: L.chatStep2New || "Jsem nováček", value: 'beginner' },
        { label: L.chatStep2Mid || 'Mám určité zkušenosti', value: 'mid' },
        { label: L.chatStep2Pro || "Jsem zkušený", value: 'pro' },
      ],
    },
    {
      bot: L.chatStep3Bot || 'Co vás právě teď nejvíce zajímá?',
      choices: [
        { label: L.chatStep3Crypto || 'Krypto', value: 'crypto' },
        { label: L.chatStep3Forex || 'Forex', value: 'forex' },
        { label: L.chatStep3Stocks || 'Akcie / indexy', value: 'stocks' },
        { label: L.chatStep3All || 'Vše výše', value: 'all' },
      ],
    },
    {
      bot:
        L.chatStep4Bot ||
        "Perfektní. Připravím bezplatný formulář účtu — trvá to méně než 3 minuty a náš tým zavolá, aby dokončil nastavení.",
      choices: [{ label: L.chatStep4Form || 'Otevřít formulář', value: 'form' }],
    },
  ];

  const moreReply =
    L.chatMoreReply ||
    'Provázíme začátečníky přehledným dashboardem, AI tržními tipy v jednoduchém jazyce a bezpečným financováním od vašeho minimálního vkladu. Pokračujeme?';

  const continueLabel = L.chatContinue || "Ano, pokračujme";
  const formPrompt =
    L.chatFormPrompt ||
    "Zadejte prosím své údaje níže a odešlete — zůstanu tady, pokud budete něco potřebovat.";

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
