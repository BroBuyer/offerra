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
        "こんにちは。オンボーディングアシスタントのLisaです。いくつかの簡単なステップで取引口座を開設する準備はできていますか？",
      choices: [
        { label: L.chatStep1Yes || "はい、始めましょう", value: 'start' },
        { label: L.chatStep1More || '先にもう少し教えてください', value: 'more' },
      ],
    },
    {
      bot: L.chatStep2Bot || 'ありがとうございます。これまで暗号資産や外国為替の取引をしたことはありますか？',
      choices: [
        { label: L.chatStep2New || "初めてです", value: 'beginner' },
        { label: L.chatStep2Mid || '多少の経験があります', value: 'mid' },
        { label: L.chatStep2Pro || "経験があります", value: 'pro' },
      ],
    },
    {
      bot: L.chatStep3Bot || 'いま最も関心があるのは何ですか？',
      choices: [
        { label: L.chatStep3Crypto || '暗号資産', value: 'crypto' },
        { label: L.chatStep3Forex || '外国為替', value: 'forex' },
        { label: L.chatStep3Stocks || '株式 / 指数', value: 'stocks' },
        { label: L.chatStep3All || '上記のすべて', value: 'all' },
      ],
    },
    {
      bot:
        L.chatStep4Bot ||
        "承知しました。無料アカウントのフォームをご用意します — 所要時間は3分未満で、チームが設定完了のためにお電話します。",
      choices: [{ label: L.chatStep4Form || 'フォームを開く', value: 'form' }],
    },
  ];

  const moreReply =
    L.chatMoreReply ||
    '初心者の方には、すっきりしたダッシュボード、わかりやすい言葉でのAI市場ヒント、最低入金額からの安全な資金拠出でご案内します。続けますか？';

  const continueLabel = L.chatContinue || "はい、続けましょう";
  const formPrompt =
    L.chatFormPrompt ||
    "以下に詳細をご入力のうえ送信してください — ご不明な点があれば、こちらで対応します。";

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
