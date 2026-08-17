<?php
  $form_id = 'lead-form-chat';
  $form_heading = null;
  $form_submit = 'Fiók létrehozása';
  $form_hidden = true;
  require __DIR__ . '/form.php';
?>
<div id="chat-quiz-root" style="position: fixed !important; bottom: 20px !important; right: 20px !important; z-index: 999999 !important; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif !important; box-sizing: border-box !important;">
    
    <button id="chat-toggle-btn" class="cq-pulse-button" type="button" aria-label="Csevegőasszisztens megnyitása" style="position: relative !important; width: 62px !important; height: 62px !important; border-radius: 50% !important; background: linear-gradient(135deg, var(--color-primary), var(--color-primary)) !important; color: #ffffff !important; border: none !important; outline: none !important; cursor: pointer !important; box-shadow: 0 8px 24px rgba(var(--color-primary-rgb), 0.5) !important; display: flex !important; align-items: center !important; justify-content: center !important; transition: transform 0.25s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important;">
        <span id="chat-noti-dot" style="position: absolute !important; top: -1px !important; right: -1px !important; width: 18px !important; height: 18px !important; background-color: #10b981 !important; border-radius: 50% !important; border: 2px solid #121214 !important; color: white !important; font-size: 10px !important; font-weight: bold !important; display: flex !important; align-items: center !important; justify-content: center !important; transform: scale(0); transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275) !important; z-index: 10 !important;">1</span>
        <svg style="width: 26px !important; height: 26px !important; transition: transform 0.3s;" fill="none" stroke="currentColor" viewBox="0 0 24 24" id="cq-chat-icon">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
        </svg>
    </button>

    <div id="chat-window" style="display: none; position: absolute !important; bottom: 0 !important; right: 0 !important; background-color: #121214 !important; border: 1px solid #27272a !important; border-radius: 20px !important; box-shadow: 0 25px 60px -10px rgba(0, 0, 0, 0.8) !important; flex-direction: column !important; overflow: hidden !important; transition: all 0.35s cubic-bezier(0.165, 0.84, 0.44, 1) !important; opacity: 0 !important; transform: translateY(20px) !important;">
        
        <div style="background-color: #1a1a1e !important; border-bottom: 1px solid #27272a !important; padding: 14px 18px !important; display: flex !important; align-items: center !important; justify-content: space-between !important; flex-direction: row !important;">
            <div style="display: flex !important; align-items: center !important; gap: 12px !important; flex-direction: row !important;">
                <div style="position: relative !important; width: 40px !important; height: 40px !important; border-radius: 50% !important; border: 2px solid var(--color-primary) !important; background-color: #27272a !important; display: flex !important; align-items: center !important; justify-content: center !important; overflow: hidden !important; flex-shrink: 0 !important;">
                    <img data-src="<?= asset('static/img/consultant.webp') ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="Olivia" width="40" height="40" decoding="async" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" style="width: 100% !important; height: 100% !important; object-fit: cover !important; display: block;" class="cq-consultant-img">
                    <svg style="display: none; width: 22px; height: 22px; color: #a1a1aa;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    <span style="position: absolute !important; bottom: 0 !important; right: 0 !important; width: 9px !important; height: 9px !important; background-color: #10b981 !important; border: 1.5px solid #121214 !important; border-radius: 50% !important;"></span>
                </div>
                <div style="text-align: left !important;">
                    <h4 style="color: #ffffff !important; font-size: 14px !important; font-weight: 600 !important; margin: 0 !important; padding: 0 !important; line-height: 1.2 !important; letter-spacing: 0.3px !important;">Olivia</h4>
                    <p style="color: #a1a1aa !important; font-size: 11px !important; margin: 0 !important; padding: 0 !important; opacity: 0.85;">Onboarding-útmutató</p>
                </div>
            </div>
            <button id="chat-close-btn" type="button" aria-label="Csevegés bezárása" style="color: #a1a1aa !important; background: transparent !important; border: none !important; cursor: pointer !important; padding: 6px !important; display: flex !important; align-items: center !important; transition: color 0.2s;">
                <svg style="width: 20px !important; height: 20px !important;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <div id="chat-messages" style="flex: 1 !important; overflow-y: auto !important; padding: 18px !important; display: flex !important; flex-direction: column !important; gap: 14px !important; scroll-behavior: smooth !important;">
            </div>

        <div id="typing-indicator" style="display: none; padding: 10px 18px !important; font-size: 12px !important; color: #71717a !important; font-style: italic !important; background-color: #121214 !important; text-align: left !important;">
            Olivia ír...        </div>

        <div id="chat-controls" style="padding: 10px 18px !important; background-color: rgba(26, 26, 30, 0.5) !important; border-top: 1px solid #27272a !important; min-height: 20px !important; display: flex !important; align-items: center !important; justify-content: center !important;">
            </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const rootBlock = document.getElementById('chat-quiz-root');
    if (rootBlock && rootBlock.parentElement !== document.body) {
        document.body.appendChild(rootBlock);
    }

    setTimeout(() => {
        const notiDot = document.getElementById('chat-noti-dot');
        if (notiDot) notiDot.style.transform = 'scale(1)';
    }, 3000);

    // Передаємо змінні з PHP масиву в JS об'єкт
    const quizLang = {
        welcome: `Helló! Olivia vagyok, az onboarding-vezetője a(z) <?= e(SITE_NAME) ?> oldalon. A hozzáférése előzetesen jóváhagyott. Építsük fel a profilját.`,
        q1: `Kérjük, erősítse meg, hogy <?= e(geo_country_in()) ?> él, hogy teljesítse a jogi követelményeket.`,
        a1_yes: `Yes, I live here now`,
        a1_no: `Nem`,
        q2: `Nagyszerű. Válassza ki a korcsoportját, hogy megfelelő termékeket ajánlhassunk:`,
        q3: `Van jelenleg aktív bank- vagy hitelkártyaszámlája a napi kifizetésekhez?`,
        a3_yes: `Igen, a számlám aktív`,
        a3_no: `Jelenleg nem`,
        q4: `Mi a fő jövedelemforrása? Így igazíthatjuk a kockázati beállításokat.`,
        a4_1: `Alkalmazott vagy vállalkozó`,
        a4_2: `Megtakarítás vagy passzív jövedelem`,
        a4_3: `Egyéb jövedelemtípusok`,
        q5: `Még egy lépés! Valaki a csapatból 11:00 és 20:00 között hívja rövid ellenőrzéshez. Fogadni tudja a hívást?`,
        a5_yes: `Igen, ez az idő megfelel`,
        a5_no: `Kérem, hamarosan keressenek`,
        loaderText: `Ellenőrizzük a válaszokat, és létrehozzuk a biztonságos fiókját...`,
        finalTitle: `Az ellenőrzés kész! 🎉 A biztonságos fiókja készen áll. Kövesse az alábbi utasításokat a napi kifizetések engedélyezéséhez:`,
        processing: `Feldolgozzuk a kérelmét...`
    };

    const steps = [
        { id: 'welcome', type: 'text', content: quizLang.welcome, next: 'q1' },
        { id: 'q1', type: 'options', question: quizLang.q1, options: [{ text: quizLang.a1_yes, next: 'q2' }, { text: quizLang.a1_no, next: 'q2' }] },
        { id: 'q2', type: 'options', question: quizLang.q2, options: [{ text: '18–25', next: 'q3' }, { text: '26–40', next: 'q3' }, { text: '41–55', next: 'q3' }, { text: '56+', next: 'q3' }] },
        { id: 'q3', type: 'options', question: quizLang.q3, options: [{ text: quizLang.a3_yes, next: 'q4' }, { text: quizLang.a3_no, next: 'q4' }] },
        { id: 'q4', type: 'options', question: quizLang.q4, options: [{ text: quizLang.a4_1, next: 'q5' }, { text: quizLang.a4_2, next: 'q5' }, { text: quizLang.a4_3, next: 'q5' }] },
        { id: 'q5', type: 'options', question: quizLang.q5, options: [{ text: quizLang.a5_yes, next: 'loader' }, { text: quizLang.a5_no, next: 'loader' }] }
    ];

    const toggleBtn = document.getElementById('chat-toggle-btn');
    const chatWindow = document.getElementById('chat-window');
    const closeBtn = document.getElementById('chat-close-btn');
    const messagesContainer = document.getElementById('chat-messages');
    const controlsContainer = document.getElementById('chat-controls');
    const typingIndicator = document.getElementById('typing-indicator');

    let quizStarted = false;

    function setResponsiveSizes() {
        if (window.innerWidth < 640) {
            chatWindow.style.width = 'calc(100vw - 40px)';
            chatWindow.style.height = '500px';
        } else {
            chatWindow.style.width = '385px';
            chatWindow.style.height = '575px';
        }
    }
    window.addEventListener('resize', setResponsiveSizes);
    setResponsiveSizes();

    function hydrateConsultantImages(root) {
        (root || document).querySelectorAll('img.cq-consultant-img[data-src]').forEach(function (img) {
            if (!img.getAttribute('src') || img.getAttribute('src').indexOf('data:') === 0) {
                img.setAttribute('src', img.getAttribute('data-src'));
            }
            img.removeAttribute('data-src');
        });
    }

    toggleBtn.addEventListener('click', () => {
        toggleBtn.style.transform = 'scale(0)';
        setTimeout(() => { toggleBtn.style.display = 'none'; }, 200);
        
        chatWindow.style.display = 'flex';
        hydrateConsultantImages(chatWindow);
        setTimeout(() => {
            chatWindow.style.opacity = '1';
            chatWindow.style.transform = 'translateY(0)';
        }, 50);
        
        if (!quizStarted) {
            quizStarted = true;
            runStep('welcome');
        }
    });

    closeBtn.addEventListener('click', () => {
        chatWindow.style.opacity = '0';
        chatWindow.style.transform = 'translateY(20px)';
        setTimeout(() => {
            chatWindow.style.display = 'none';
            toggleBtn.style.display = 'flex';
            setTimeout(() => { toggleBtn.style.transform = 'scale(1)'; }, 20);
        }, 350);
    });

    function scrollToBottom() {
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }

    function toggleTyping(show) {
        typingIndicator.style.display = show ? 'block' : 'none';
        scrollToBottom();
    }

    function appendAgentMessage(text) {
        const msg = document.createElement('div');
        msg.style.cssText = "display: flex !important; gap: 10px !important; max-width: 88% !important; align-items: flex-start !important; flex-direction: row !important; text-align: left !important; animation: chatIn 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) forwards;";
        msg.innerHTML = `
            <div style="width: 28px; height: 28px; border-radius: 50%; border: 1px solid var(--color-primary); background-color: #27272a; display: flex; align-items: center; justify-content: center; overflow: hidden; flex-shrink: 0; margin-top: 2px;">
                <img alt="Kereskedési platform képe" src="<?= asset('static/img/consultant.webp') ?>" width="28" height="28" decoding="async" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" style="width:100%; height:100%; object-fit:cover;" class="cq-consultant-img">
                <svg style="display:none; width:14px; height:14px; color:#a1a1aa;" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            </div>
            <div style="background-color: #1e1e22; color: #f4f4f5; padding: 11px 14px; border-radius: 14px; border-top-left-radius: 0; font-size: 13px; line-height: 1.45; border: 1px solid #27272a; box-shadow: 0 4px 12px rgba(0,0,0,0.15);">
                ${text}
            </div>
        `;
        messagesContainer.appendChild(msg);
        scrollToBottom();
    }

    function appendUserMessage(text) {
        const msg = document.createElement('div');
        msg.style.cssText = "display: flex !important; width: 100% !important; justify-content: flex-end !important; flex-direction: row !important; animation: chatIn 0.25s ease-out forwards;";
        msg.innerHTML = `
            <div style="background-color: var(--color-primary); color: white; padding: 11px 14px; border-radius: 14px; border-top-right-radius: 0; font-size: 13px; font-weight: 500; max-width: 85%; text-align: left; box-shadow: 0 4px 12px rgba(var(--color-primary-rgb), 0.25);">
                ${text}
            </div>
        `;
        messagesContainer.appendChild(msg);
        scrollToBottom();
    }

    function runStep(stepId) {
        controlsContainer.innerHTML = '';
        if (stepId === 'loader') { handleLoaderStep(); return; }
        if (stepId === 'final') { handleFinalStep(); return; }

        const step = steps.find(s => s.id === stepId);
        if (!step) return;

        toggleTyping(true);

        setTimeout(() => {
            toggleTyping(false);
            if (step.type === 'text') {
                appendAgentMessage(step.content);
                setTimeout(() => runStep(step.next), 1000);
            } else if (step.type === 'options') {
                appendAgentMessage(step.question);
                renderOptions(step.options);
            }
        }, 1000);
    }

    function renderOptions(options) {
        const wrapper = document.createElement('div');
        if (options.length > 2 || options[0].text.length > 15) {
            wrapper.style.cssText = "display: flex !important; flex-direction: column !important; gap: 8px !important; width: 100% !important; padding: 0 2px !important;";
        } else {
            wrapper.style.cssText = "display: grid !important; grid-template-columns: repeat(2, 1fr) !important; gap: 8px !important; width: 100% !important; padding: 0 2px !important;";
        }

        options.forEach(opt => {
            const btn = document.createElement('button');
            btn.style.cssText = "background-color: #1e1e22 !important; color: #e4e4e7 !important; border: 1px solid #27272a !important; border-radius: 10px !important; font-size: 13px !important; font-weight: 500 !important; padding: 11px 14px !important; cursor: pointer !important; text-align: center !important; transition: all 0.2s !important; outline: none !important; width: 100% !important; box-sizing: border-box !important;";
            btn.textContent = opt.text;
            
            btn.onmouseover = () => { btn.style.borderColor = 'var(--color-primary)'; btn.style.color = '#ffffff'; btn.style.backgroundColor = 'rgba(var(--color-primary-rgb), 0.12)'; };
            btn.onmouseout = () => { btn.style.borderColor = '#27272a'; btn.style.color = '#e4e4e7'; btn.style.backgroundColor = '#1e1e22'; };
            
            btn.addEventListener('click', () => {
                appendUserMessage(opt.text);
                controlsContainer.innerHTML = '';
                setTimeout(() => runStep(opt.next), 500);
            });
            wrapper.appendChild(btn);
        });

        controlsContainer.appendChild(wrapper);
        scrollToBottom();
    }

    function handleLoaderStep() {
        toggleTyping(true);
        
        setTimeout(() => {
            toggleTyping(false);
            
            const loaderCard = document.createElement('div');
            loaderCard.style.cssText = "width: 88% !important; background-color: #1e1e22 !important; border: 1px solid #27272a !important; padding: 16px !important; border-radius: 14px !important; box-sizing: border-box !important; animation: chatIn 0.3s ease-out forwards; display: flex; flex-direction: column; gap: 10px;";
            
            const loaderText = document.createElement('div');
            loaderText.style.cssText = "color: #e4e4e7; font-size: 12px; font-weight: 500; text-align: left; line-height: 1.4;";
            loaderText.textContent = quizLang.loaderText;
            
            const track = document.createElement('div');
            track.style.cssText = "width: 100%; height: 6px; background-color: #121214; border-radius: 4px; overflow: hidden; position: relative;";
            
            const bar = document.createElement('div');
            bar.style.cssText = "width: 0%; height: 100%; background: linear-gradient(90deg, var(--color-primary), var(--color-primary)); border-radius: 4px; transition: width 0.1s linear;";
            
            track.appendChild(bar);
            loaderCard.appendChild(loaderText);
            loaderCard.appendChild(track);
            messagesContainer.appendChild(loaderCard);
            scrollToBottom();

            let progress = 0;
            const interval = setInterval(() => {
                progress += 5;
                if (progress <= 100) {
                    bar.style.width = progress + '%';
                } else {
                    clearInterval(interval);
                    setTimeout(() => {
                        runStep('final');
                    }, 300);
                }
            }, 80);

        }, 600);
    }

    function handleFinalStep() {
        const celebration = document.createElement('div');
        celebration.style.cssText = "position: absolute; top:0; left:0; width:100%; height:100%; pointer-events:none; z-index:100; overflow:hidden;";
        for(let i=0; i<25; i++) {
            const particle = document.createElement('div');
            const colors = ['var(--color-primary)', 'var(--color-primary)', '#10b981', '#f59e0b'];
            const randomColor = colors[Math.floor(Math.random() * colors.length)];
            particle.style.cssText = `position: absolute; top: -10px; left: ${Math.random() * 100}%; width: ${Math.random() * 6 + 4}px; height: ${Math.random() * 6 + 4}px; background-color: ${randomColor}; border-radius: 50%; animation: confettiFall 2.2s linear ${Math.random() * 1.5}s forwards; opacity: 0.8;`;
            celebration.appendChild(particle);
        }
        chatWindow.appendChild(celebration);

        toggleTyping(true);

        setTimeout(() => {
            toggleTyping(false);
            appendAgentMessage(quizLang.finalTitle);

            let formCard = document.getElementById('cq-form-card');
            if (!formCard) formCard = document.querySelector('#chat-quiz-root .apx-lead, #cq-form-card');
            if (formCard) {
                formCard.style.cssText = "width: 100% !important; background-color: #16161a !important; border: 1px solid #27272a !important; padding: 18px !important; border-radius: 16px !important; box-sizing: border-box !important; margin-top: 6px !important; box-shadow: inset 0 2px 4px rgba(0,0,0,0.4) !important; animation: chatIn 0.35s cubic-bezier(0.165, 0.84, 0.44, 1) forwards; display: block !important;";
                formCard.removeAttribute('hidden');
                formCard.removeAttribute('inert');
                formCard.removeAttribute('aria-hidden');
                messagesContainer.appendChild(formCard);

                const phone = document.getElementById('cq-field-phone');
                if (phone && window.intlTelInput) {
                    const existingIti = window.intlTelInput.getInstance(phone);
                    if (existingIti) existingIti.destroy();
                    const phoneCountryEl = document.querySelector('#cq-isolated-form input[name="phone_country"]');
                    window.intlTelInput(phone, {
                        utilsScript: 'https://cdn.jsdelivr.net/npm/intl-tel-input@18.5.3/build/js/utils.js',
                        separateDialCode: true,
                        initialCountry: phoneCountryEl ? phoneCountryEl.value : 'auto'
                    });
                }
            }
            controlsContainer.style.setProperty('display', 'none', 'important');

            scrollToBottom();
            setTimeout(() => celebration.remove(), 4000);
        }, 1200);
    }
});
</script>

<style>
.cq-pure-custom-form {
    display: flex !important;
    flex-direction: column !important;
    gap: 12px !important;
    width: 100% !important;
    background: transparent !important;
    padding: 0 !important;
    margin: 0 !important;
    box-sizing: border-box !important;
}

.cq-field-group {
    position: relative !important;
    width: 100% !important;
    display: block !important;
    margin: 0 !important;
    padding: 0 !important;
}

.cq-pure-custom-form .iti {
    width: 100% !important;
    display: block !important;
}

.cq-pure-custom-form .iti__selected-country {
    background-color: #27272a !important;
    padding-right: 5px !important;
    border-radius: 7px 0 0 7px !important;
}

.cq-pure-custom-form input[type="text"],
.cq-pure-custom-form input[type="email"],
.cq-pure-custom-form input[type="tel"]:not(.iti__tel-input) {
    display: block !important;
    width: 100% !important;
    height: 48px !important;
    min-height: 48px !important;
    max-height: 48px !important;
    box-sizing: border-box !important;
    background-color: #1e1e22 !important;
    color: #ffffff !important;
    border: 1px solid #27272a !important;
    border-radius: 8px !important;
    padding: 0 16px !important;
    font-size: 14px !important;
    font-weight: 400 !important;
    line-height: 48px !important;
    outline: none !important;
    margin: 0 !important;
    box-shadow: none !important;
    transition: border-color 0.2s ease, background-color 0.2s ease !important;
}

.cq-pure-custom-form input:focus {
    border-color: var(--color-primary) !important;
    background-color: #222226 !important;
}

.cq-pure-custom-form .iti__tel-input {
    display: block !important;
    width: 100% !important;
    height: 48px !important;
    min-height: 48px !important;
    max-height: 48px !important;
    box-sizing: border-box !important;
    background-color: #1e1e22 !important;
    color: #ffffff !important;
    border: 1px solid #27272a !important;
    border-radius: 8px !important;
    padding-right: 16px !important;
    font-size: 14px !important;
    font-weight: 400 !important;
    line-height: 48px !important;
    outline: none !important;
    margin: 0 !important;
    box-shadow: none !important;
    transition: border-color 0.2s ease, background-color 0.2s ease !important;
}

.cq-phone-row {
    display: flex !important;
    align-items: center !important;
    position: relative !important;
    width: 100% !important;
}

.cq-phone-prefix-box {
    position: absolute !important;
    top: 1px !important;
    left: 1px !important;
    width: 76px !important;
    height: 46px !important;
    background-color: #27272a !important;
    border-right: 1px solid #3f3f46 !important;
    border-radius: 7px 0 0 7px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    gap: 6px !important;
    pointer-events: none !important;
    z-index: 10 !important;
}

.cq-flag-icon {
    font-size: 16px !important;
    line-height: 1 !important;
}

.cq-prefix-code {
    color: #e4e4e7 !important;
    font-size: 13px !important;
    font-weight: 500 !important;
}

/* .cq-pure-custom-form input[type="tel"] {
    padding-left: 90px !important;
} */

#cq-custom-submit-btn {
    width: 100% !important;
    height: 48px !important;
    min-height: 48px !important;
    box-sizing: border-box !important;
    background: linear-gradient(135deg, var(--color-primary), var(--color-primary)) !important;
    color: #ffffff !important;
    font-size: 14px !important;
    font-weight: 700 !important;
    border: none !important;
    border-radius: 8px !important;
    padding: 0 !important;
    line-height: 48px !important;
    text-align: center !important;
    cursor: pointer !important;
    text-transform: uppercase !important;
    letter-spacing: 0.5px !important;
    box-shadow: 0 4px 12px rgba(var(--color-primary-rgb), 0.3) !important;
    display: block !important;
    margin-top: 4px !important;
    margin-bottom: 0 !important;
    transition: opacity 0.2s ease, transform 0.2s ease !important;
}

#cq-custom-submit-btn:hover {
    opacity: 0.95 !important;
    transform: translateY(-1px) !important;
}

.cq-pulse-button {
    position: relative;
    animation: cq-bounce 3.2s infinite ease-in-out;
}
.cq-pulse-button::before {
    content: ''; position: absolute; width: 100%; height: 100%; background-color: var(--color-primary); border-radius: 50%; z-index: -1; opacity: 0.35; animation: cq-ripple 2.2s infinite ease-out;
}
@keyframes cq-ripple {
    0% { transform: scale(1); opacity: 0.35; }
    100% { transform: scale(1.55); opacity: 0; }
}
@keyframes cq-bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-5px); }
}
@keyframes chatIn {
    from { opacity: 0; transform: translateY(12px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes confettiFall {
    0% { transform: translateY(0) rotate(0deg); opacity: 0.8; }
    100% { transform: translateY(530px) rotate(360deg); opacity: 0; }
}
</style>