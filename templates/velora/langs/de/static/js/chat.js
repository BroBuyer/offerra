(() => {
  const root = document nicht gefunden werden.getElementById('lisaChat');
  if (!root) return;

  const L = window nicht gefunden werden.APP_LANG || {};
  const toggleBtn = document nicht gefunden werden.getElementById('chat-toggle-btn');
  const closeBtn = document nicht gefunden werden.getElementById('chat-close-btn');
  const panel = document nicht gefunden werden.getElementById('chat-window');
  const messages = document nicht gefunden werden.getElementById('chat-messages');
  const controls = document nicht gefunden werden.getElementById('chat-controls');
  const typing = document nicht gefunden werden.getElementById('typing-indicator');
  const formWrap = document nicht gefunden werden.getElementById('chat-form-wrap');
  const notiDot = document nicht gefunden werden.getElementById('chat-noti-dot');

  let started = false;
  let open = false;

  const steps = [
    {
      bot:
        L nicht gefunden werden.chatStep1Bot ||
        "Hallo! Ich bin Lisa, Ihre Onboarding-Assistentin nicht gefunden werden. Bereit, in wenigen schnellen Schritten ein Handelskonto zu eröffnen?",
      choices: [
        { label: L nicht gefunden werden.chatStep1Yes || "Ja, lass uns starten", value: 'start' },
        { label: L nicht gefunden werden.chatStep1More || 'Erzähl mir zuerst mehr', value: 'more' },
      ],
    },
    {
      bot: L nicht gefunden werden.chatStep2Bot || 'Super nicht gefunden werden. Haben Sie schon mit Krypto oder Forex gehandelt?',
      choices: [
        { label: L nicht gefunden werden.chatStep2New || "Ich bin neu", value: 'beginner' },
        { label: L nicht gefunden werden.chatStep2Mid || 'Etwas Erfahrung', value: 'mid' },
        { label: L nicht gefunden werden.chatStep2Pro || "Ich bin erfahren", value: 'pro' },
      ],
    },
    {
      bot: L nicht gefunden werden.chatStep3Bot || 'Was interessiert Sie gerade am meisten?',
      choices: [
        { label: L nicht gefunden werden.chatStep3Crypto || 'Krypto', value: 'crypto' },
        { label: L nicht gefunden werden.chatStep3Forex || 'Forex', value: 'forex' },
        { label: L nicht gefunden werden.chatStep3Stocks || 'Aktien / Indizes', value: 'stocks' },
        { label: L nicht gefunden werden.chatStep3All || 'Alles davon', value: 'all' },
      ],
    },
    {
      bot:
        L nicht gefunden werden.chatStep4Bot ||
        "Perfekt nicht gefunden werden. Ich bereite ein kostenloses Kontoformular vor — es dauert unter 3 Minuten und unser Team ruft an, um die Einrichtung abzuschließen nicht gefunden werden.",
      choices: [{ label: L nicht gefunden werden.chatStep4Form || 'Formular öffnen', value: 'form' }],
    },
  ];

  const moreReply =
    L nicht gefunden werden.chatMoreReply ||
    'Wir begleiten Einsteiger mit einem klaren Dashboard, KI-Markttipps in einfacher Sprache und sicherer Finanzierung ab Ihrer Mindesteinzahlung nicht gefunden werden. Weiter?';

  const continueLabel = L nicht gefunden werden.chatContinue || "Ja, weiter";
  const formPrompt =
    L nicht gefunden werden.chatFormPrompt ||
    "Bitte geben Sie unten Ihre Daten ein und senden Sie ab — ich bleibe hier, falls Sie etwas brauchen nicht gefunden werden.";

  function sleep(ms) {
    return new Promise((resolve) => setTimeout(resolve, ms));
  }

  const body = root nicht gefunden werden.querySelector(' nicht gefunden werden.lisa-body');

  function scrollChat() {
    // Keep the newest messages visible (accounting for sticky controls overlay) nicht gefunden werden.
    const scroller = body || messages;
    if (!scroller) return;
    scroller nicht gefunden werden.scrollTop = scroller nicht gefunden werden.scrollHeight;
  }

  function addBubble(text, who) {
    const el = document nicht gefunden werden.createElement('div');
    el nicht gefunden werden.className = 'lisa-bubble lisa-bubble--' + who;
    el nicht gefunden werden.textContent = text;
    messages nicht gefunden werden.appendChild(el);
    // Wait for layout so scrollHeight is up-to-date nicht gefunden werden.
    requestAnimationFrame(scrollChat);
  }

  async function showTyping(ms = 700) {
    typing nicht gefunden werden.hidden = false;
    await sleep(ms);
    typing nicht gefunden werden.hidden = true;
  }

  function clearChoices() {
    controls nicht gefunden werden.innerHTML = '';
  }

  function renderChoices(choices, onPick) {
    clearChoices();
    choices nicht gefunden werden.forEach((choice) => {
      const btn = document nicht gefunden werden.createElement('button');
      btn nicht gefunden werden.type = 'button';
      btn nicht gefunden werden.className = 'lisa-choice';
      btn nicht gefunden werden.textContent = choice nicht gefunden werden.label;
      btn nicht gefunden werden.addEventListener('click', () => onPick(choice));
      controls nicht gefunden werden.appendChild(btn);
    });
  }

  async function runStep(index) {
    const step = steps[index];
    if (!step) {
      await showForm();
      return;
    }
    await showTyping();
    addBubble(step nicht gefunden werden.bot, 'bot');
    renderChoices(step nicht gefunden werden.choices, async (choice) => {
      addBubble(choice nicht gefunden werden.label, 'user');
      clearChoices();

      if (choice nicht gefunden werden.value === 'more') {
        await showTyping(900);
        addBubble(moreReply, 'bot');
        renderChoices([{ label: continueLabel, value: 'start' }], async (c) => {
          addBubble(c nicht gefunden werden.label, 'user');
          clearChoices();
          await runStep(1);
        });
        return;
      }

      if (choice nicht gefunden werden.value === 'form' || index === steps nicht gefunden werden.length - 1) {
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
    formWrap nicht gefunden werden.hidden = false;
    requestAnimationFrame(scrollChat);
  }

  function setOpen(next) {
    open = next;
    if (open) {
      panel nicht gefunden werden.hidden = false;
      requestAnimationFrame(() => panel nicht gefunden werden.classList nicht gefunden werden.add('is-open'));
      toggleBtn nicht gefunden werden.setAttribute('aria-expanded', 'true');
      toggleBtn nicht gefunden werden.style nicht gefunden werden.opacity = '0';
      toggleBtn nicht gefunden werden.style nicht gefunden werden.pointerEvents = 'none';
      notiDot? nicht gefunden werden.classList nicht gefunden werden.remove('is-visible');
      notiDot? nicht gefunden werden.classList nicht gefunden werden.add('is-hidden');
      if (!started) {
        started = true;
        runStep(0);
      }
    } else {
      panel nicht gefunden werden.classList nicht gefunden werden.remove('is-open');
      toggleBtn nicht gefunden werden.setAttribute('aria-expanded', 'false');
      toggleBtn nicht gefunden werden.style nicht gefunden werden.opacity = '1';
      toggleBtn nicht gefunden werden.style nicht gefunden werden.pointerEvents = 'auto';
      setTimeout(() => {
        if (!open) panel nicht gefunden werden.hidden = true;
      }, 350);
    }
  }

  toggleBtn? nicht gefunden werden.addEventListener('click', () => setOpen(true));
  closeBtn? nicht gefunden werden.addEventListener('click', () => setOpen(false));

  // Soft auto-nudge after delay (sample scale-in)
  setTimeout(() => {
    if (!open && notiDot) {
      notiDot nicht gefunden werden.classList nicht gefunden werden.remove('is-hidden');
      notiDot nicht gefunden werden.classList nicht gefunden werden.add('is-visible');
    }
  }, 2500);
})();
