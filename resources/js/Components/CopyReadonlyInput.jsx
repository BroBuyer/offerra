import { useState } from 'react';

function CopyIcon() {
    return (
        <svg
            aria-hidden="true"
            viewBox="0 0 24 24"
            width="16"
            height="16"
            fill="none"
            stroke="currentColor"
            strokeWidth="2"
            strokeLinecap="round"
            strokeLinejoin="round"
        >
            <rect x="9" y="9" width="13" height="13" rx="2" />
            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1" />
        </svg>
    );
}

async function copyText(text) {
    try {
        await navigator.clipboard.writeText(text);
        return true;
    } catch {
        const textarea = document.createElement('textarea');
        textarea.value = text;
        textarea.style.position = 'fixed';
        textarea.style.opacity = '0';
        document.body.appendChild(textarea);
        textarea.select();
        const ok = document.execCommand('copy');
        document.body.removeChild(textarea);
        return ok;
    }
}

export default function CopyReadonlyInput({ id, value, label }) {
    const [copied, setCopied] = useState(false);

    const onCopy = async () => {
        const ok = await copyText(value);
        if (!ok) {
            return;
        }

        setCopied(true);
        window.setTimeout(() => setCopied(false), 1500);
    };

    return (
        <div className="copy-readonly-input">
            <input
                id={id}
                type="text"
                readOnly
                value={value}
                onFocus={(e) => e.target.select()}
            />
            <button
                type="button"
                className={`copy-readonly-input__btn${copied ? ' is-copied' : ''}`}
                onClick={onCopy}
                title={copied ? 'Скопійовано' : `Копіювати ${label ?? 'значення'}`}
                aria-label={copied ? 'Скопійовано' : `Копіювати ${label ?? 'значення'}`}
            >
                {copied ? <span aria-hidden="true">✓</span> : <CopyIcon />}
            </button>
        </div>
    );
}
