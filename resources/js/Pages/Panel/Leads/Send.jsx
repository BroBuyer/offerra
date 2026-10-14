import PanelLayout from '@/Layouts/PanelLayout';
import { emptyLeadFields, parseTelegramLeadDump } from '@/lib/telegramLeadDump';
import axios from 'axios';
import { useState } from 'react';

const SAMPLE = `Name: Lucia Braschi
Email: lucia.braschi@icloud.com
Phone: +393922333949

Affiliate: EGO
Funnel: Vinci AI
Offer: Vinci AI
Domain: vinci-ai.org (https://vinci-ai.org/)
Country (offer): IT
Country (IP): IT
Spam reason: —
KT detail: —
IP: 5.91.126.157
Language: it
SubID: 1g6fae0.1277.r71pg`;

export default function SendLead() {
    const [dump, setDump] = useState('');
    const [fields, setFields] = useState(emptyLeadFields());
    const [busy, setBusy] = useState(false);
    const [error, setError] = useState('');
    const [result, setResult] = useState(null);

    const onDump = (value) => {
        setDump(value);
        setFields(parseTelegramLeadDump(value));
        setError('');
        setResult(null);
    };

    const setField = (key, value) => {
        setFields((current) => ({ ...current, [key]: value }));
    };

    const canSend = fields.email && fields.phone && fields.first_name && fields.domain;

    const submit = async (event) => {
        event.preventDefault();
        if (!canSend || busy) {
            return;
        }

        const ok = window.confirm(
            `Відправити ${fields.first_name} ${fields.last_name} / ${fields.phone}\n`
            + `${fields.email}\n→ ${fields.funnel || fields.offer || fields.domain}`,
        );
        if (!ok) {
            return;
        }

        setBusy(true);
        setError('');
        setResult(null);

        try {
            const { data } = await axios.post(route('leads.send'), {
                dump,
                ...fields,
            });
            setResult(data);
        } catch (err) {
            const data = err.response?.data;
            if (data?.crm || data?.http) {
                setResult(data);
                return;
            }
            setError(data?.message ?? err.message ?? 'Не вдалося відправити лід');
        } finally {
            setBusy(false);
        }
    };

    return (
        <PanelLayout title="Ліди">
            <div className="leads-page">
                <header className="page-header">
                    <h2>Відправити лід у CRM</h2>
                    <p>
                        Встав блок з Telegram — поля підхопляться самі. Відповідь YourLeads з’явиться справа.
                        IP панелі треба у вайтлісті CRM.
                    </p>
                </header>

                <form className="leads-grid" onSubmit={submit}>
                    <section className="card">
                        <h3>Дамп з Telegram</h3>
                        <p className="card-desc">Можна HTML з бота або звичайний текст як у прикладі.</p>
                        <div className="field">
                            <textarea
                                rows={18}
                                value={dump}
                                onChange={(event) => onDump(event.target.value)}
                                placeholder={SAMPLE}
                                spellCheck={false}
                            />
                        </div>
                        <div className="leads-actions">
                            <button type="submit" className="btn btn-primary" disabled={!canSend || busy}>
                                {busy ? 'Надсилаю…' : 'Відправити в CRM'}
                            </button>
                            <button
                                type="button"
                                className="btn btn-ghost"
                                onClick={() => onDump('')}
                                disabled={busy}
                            >
                                Очистити
                            </button>
                        </div>
                    </section>

                    <div className="leads-side">
                        <section className="card">
                            <h3>Поля</h3>
                            <div className="leads-fields">
                                <Field label="Імʼя" value={fields.first_name} onChange={(v) => setField('first_name', v)} />
                                <Field label="Прізвище" value={fields.last_name} onChange={(v) => setField('last_name', v)} />
                                <Field label="Email" value={fields.email} onChange={(v) => setField('email', v)} />
                                <Field label="Телефон" value={fields.phone} onChange={(v) => setField('phone', v)} />
                                <Field label="Домен" value={fields.domain} onChange={(v) => setField('domain', v)} />
                                <Field label="Funnel" value={fields.funnel} onChange={(v) => setField('funnel', v)} />
                                <Field label="Affiliate" value={fields.affiliate} onChange={(v) => setField('affiliate', v)} />
                                <Field label="GEO" value={fields.country} onChange={(v) => setField('country', v)} />
                                <Field label="IP" value={fields.ip} onChange={(v) => setField('ip', v)} />
                                <Field label="Мова" value={fields.language} onChange={(v) => setField('language', v)} />
                                <Field label="SubID" value={fields.subid} onChange={(v) => setField('subid', v)} wide />
                            </div>
                        </section>

                        {error && (
                            <section className="card leads-result leads-result--error">
                                <h3>Помилка</h3>
                                <p>{error}</p>
                            </section>
                        )}

                        {result && (
                            <section className={`card leads-result${result.ok ? ' leads-result--ok' : ' leads-result--error'}`}>
                                <h3>{result.ok ? 'CRM прийняв' : 'CRM відхилив'}</h3>
                                <p className="card-desc">
                                    HTTP {result.http}
                                    {result.offer?.domain ? ` · ${result.offer.domain}` : ''}
                                    {result.crm?.lead_uuid ? ` · ${result.crm.lead_uuid}` : ''}
                                </p>
                                {result.crm?.auto_login_url && (
                                    <p className="field-hint">
                                        Auto-login:{' '}
                                        <a href={result.crm.auto_login_url} target="_blank" rel="noreferrer">
                                            {result.crm.auto_login_url}
                                        </a>
                                    </p>
                                )}
                                <pre className="leads-json">{JSON.stringify(result.crm ?? result, null, 2)}</pre>
                            </section>
                        )}
                    </div>
                </form>
            </div>
        </PanelLayout>
    );
}

function Field({ label, value, onChange, wide = false }) {
    return (
        <div className={`field${wide ? ' leads-field--wide' : ''}`}>
            <label>{label}</label>
            <input
                type="text"
                value={value}
                onChange={(event) => onChange(event.target.value)}
            />
        </div>
    );
}

