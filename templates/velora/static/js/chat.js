(() => {
  const root = document.getElementById('lisaChat');
  if (!root) return;

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
      bot: "Hi! I'm Lisa, your onboarding assistant. Ready to open a trading account in a few quick steps?",
      choices: [
        { label: "Yes, let's start", value: 'start' },
        { label: 'Tell me more first', value: 'more' },
      ],
    },
    {
      bot: 'Great. Have you traded crypto or forex before?',
      choices: [
        { label: "I'm new", value: 'beginner' },
        { label: 'Some experience', value: 'mid' },
        { label: "I'm experienced", value: 'pro' },
      ],
    },
    {
      bot: 'What interests you most right now?',
      choices: [
        { label: 'Crypto', value: 'crypto' },
        { label: 'Forex', value: 'forex' },
        { label: 'Stocks / indices', value: 'stocks' },
        { label: 'All of the above', value: 'all' },
      ],
    },
    {
      bot: 'Perfect. I’ll prepare a free account form — it takes under 3 minutes and our team will call to finish setup.',
      choices: [{ label: 'Open the form', value: 'form' }],
    },
  ];

  const moreReply =
    'We guide beginners with a clean dashboard, AI market tips in plain language, and secure funding from your minimum deposit. Shall we continue?';

  function sleep(ms) {
    return new Promise((resolve) => setTimeout(resolve, ms));
  }

  const body = root.querySelector('.lisa-body');

  function scrollChat() {
    const scroller = body || messages;
    scroller.scrollTop = scroller.scrollHeight;
  }

  function addBubble(text, who) {
    const el = document.createElement('div');
    el.className = 'lisa-bubble lisa-bubble--' + who;
    el.textContent = text;
    messages.appendChild(el);
    scrollChat();
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
        renderChoices([{ label: "Yes, let's continue", value: 'start' }], async (c) => {
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
    addBubble('Please enter your details below and submit — I’ll stay here if you need anything.', 'bot');
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

  // Soft auto-nudge after delay
  setTimeout(() => {
    if (!open && notiDot) notiDot.classList.remove('is-hidden');
  }, 4000);
})();
