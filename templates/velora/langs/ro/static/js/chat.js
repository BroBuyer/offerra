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
        "Salut! Sunt Lisa, asistenta ta de onboarding. Ești gata să deschizi un cont de tranzacționare în câțiva pași rapizi?",
      choices: [
        { label: L.chatStep1Yes || "Da, să începem", value: 'start' },
        { label: L.chatStep1More || 'Spune-mi mai multe mai întâi', value: 'more' },
      ],
    },
    {
      bot: L.chatStep2Bot || 'Excelent. Ai mai tranzacționat cripto sau forex?',
      choices: [
        { label: L.chatStep2New || "Sunt nou", value: 'beginner' },
        { label: L.chatStep2Mid || 'Am ceva experiență', value: 'mid' },
        { label: L.chatStep2Pro || "Sunt experimentat", value: 'pro' },
      ],
    },
    {
      bot: L.chatStep3Bot || 'Ce te interesează cel mai mult acum?',
      choices: [
        { label: L.chatStep3Crypto || 'Cripto', value: 'crypto' },
        { label: L.chatStep3Forex || 'Forex', value: 'forex' },
        { label: L.chatStep3Stocks || 'Acțiuni / indici', value: 'stocks' },
        { label: L.chatStep3All || 'Toate de mai sus', value: 'all' },
      ],
    },
    {
      bot:
        L.chatStep4Bot ||
        "Perfect. Voi pregăti un formular de cont gratuit — durează sub 3 minute, iar echipa noastră va suna pentru a finaliza configurarea.",
      choices: [{ label: L.chatStep4Form || 'Deschide formularul', value: 'form' }],
    },
  ];

  const moreReply =
    L.chatMoreReply ||
    'Ghidăm începătorii cu un panou curat, sfaturi de piață AI în limbaj simplu și finanțare securizată de la depozitul minim. Continuăm?';

  const continueLabel = L.chatContinue || "Da, să continuăm";
  const formPrompt =
    L.chatFormPrompt ||
    "Introduceți datele mai jos și trimiteți — rămân aici dacă aveți nevoie de ceva.";

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
