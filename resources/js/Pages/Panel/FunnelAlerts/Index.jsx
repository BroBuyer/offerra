import CopyReadonlyInput from '@/Components/CopyReadonlyInput';
import SecretInput from '@/Components/SecretInput';
import PanelLayout from '@/Layouts/PanelLayout';
import { useForm, usePage } from '@inertiajs/react';
import axios from 'axios';
import { useMemo, useState } from 'react';

function statusLabel(event) {
    if (event.offer_found) {
        return 'Оффер є';
    }

    if (event.notified_at) {
        return 'TG надіслано';
    }

    return 'Очікує TG';
}

export default function FunnelAlertsIndex({ settings, events }) {
    const { flash } = usePage().props;
    const [webhookToken, setWebhookToken] = useState(settings.webhook_token);
    const [regeneratingToken, setRegeneratingToken] = useState(false);
    const [tokenRegenerated, setTokenRegenerated] = useState(false);

    const { data, setData, patch, processing, recentlySuccessful } = useForm({
        tg_bot_token: '',
        tg_chat_ids: settings.tg_chat_ids?.length ? settings.tg_chat_ids : [''],
    });

    const postbackExample = useMemo(() => `POST ${settings.postback_url}
Authorization: Bearer ${webhookToken}
Content-Type: application/json

{
  "event": "funnel.created",
  "id": "stable-id-у-них",
  "brand": "Yieldario",
  "geo": "FR",
  "lang": "fr",
  "ts": "2026-08-17T08:00:00Z"
}`, [settings.postback_url, webhookToken]);

    const submit = (e) => {
        e.preventDefault();
        patch(route('funnel-alerts.update'), {
            preserveScroll: true,
            onSuccess: () => {
                setData('tg_bot_token', '');
            },
        });
    };

    const regenerateToken = async () => {
        if (! window.confirm('Згенерувати новий Bearer token? Старий перестане працювати.')) {
            return;
        }

        setRegeneratingToken(true);
        setTokenRegenerated(false);

        try {
            const { data: result } = await axios.post(route('funnel-alerts.regenerate-token'));
            setWebhookToken(result.webhook_token);
            setTokenRegenerated(true);
        } catch {
            window.alert('Не вдалося згенерувати новий token');
        } finally {
            setRegeneratingToken(false);
        }
    };

    const updateChatId = (index, value) => {
        const next = [...data.tg_chat_ids];
        next[index] = value;
        setData('tg_chat_ids', next);
    };

    const addChatId = () => {
        setData('tg_chat_ids', [...data.tg_chat_ids, '']);
    };

    const removeChatId = (index) => {
        const next = data.tg_chat_ids.filter((_, i) => i !== index);
        setData('tg_chat_ids', next.length ? next : ['']);
    };

    return (
        <PanelLayout title="Алерти воронок" wide>
            <header className="page-header">
                <h2>Алерти воронок</h2>
                <p>Postback від зовнішньої системи: якщо воронка активна, а офера в Offerra ще немає — сповіщення в Telegram</p>
            </header>

            {flash?.success && (
                <div className="card" style={{ marginBottom: '1rem' }}>
                    <p className="card-desc">{flash.success}</p>
                </div>
            )}

            <form onSubmit={submit}>
                <section className="card" style={{ marginBottom: '1.5rem' }}>
                    <h3>Postback для їхньої системи</h3>
                    <div className="field">
                        <label htmlFor="postback-url">URL</label>
                        <CopyReadonlyInput
                            id="postback-url"
                            value={settings.postback_url}
                            label="URL"
                        />
                    </div>
                    <div className="field">
                        <label htmlFor="webhook-token">Bearer token</label>
                        <CopyReadonlyInput
                            id="webhook-token"
                            value={webhookToken}
                            label="Bearer token"
                        />
                        <p className="field-hint">
                            Заголовок: <code>Authorization: Bearer &lt;token&gt;</code>.
                            Бренд передавати як є (без lower case). GEO — ISO2 uppercase, lang — lowercase.
                        </p>
                    </div>
                    <div className="field">
                        <button
                            type="button"
                            className="btn btn-secondary"
                            onClick={regenerateToken}
                            disabled={regeneratingToken}
                        >
                            {regeneratingToken ? 'Генерація…' : 'Перегенерувати token'}
                        </button>
                        {tokenRegenerated && (
                            <p className="field-hint" style={{ marginTop: '0.5rem' }}>
                                Новий token збережено — передай його їхній системі.
                            </p>
                        )}
                    </div>
                    <pre className="card-desc" style={{ whiteSpace: 'pre-wrap', marginTop: '0.75rem' }}>
                        {postbackExample}
                    </pre>
                </section>

                <section className="card" style={{ marginBottom: '1.5rem' }}>
                    <h3>Telegram</h3>
                    <div className="field">
                        <label htmlFor="tg-token">Bot token</label>
                        <SecretInput
                            id="tg-token"
                            value={data.tg_bot_token}
                            onChange={(e) => setData('tg_bot_token', e.target.value)}
                            placeholder={settings.has_tg_bot_token ? 'Залиш порожнім, щоб не змінювати' : '123456:ABC...'}
                        />
                    </div>

                    <div className="field">
                        <label>Chat ID (група або особистий)</label>
                        {data.tg_chat_ids.map((chatId, index) => (
                            <div key={index} className="field-row" style={{ marginBottom: '0.5rem' }}>
                                <input
                                    type="text"
                                    value={chatId}
                                    onChange={(e) => updateChatId(index, e.target.value)}
                                    placeholder={index === 0 ? '-1001234567890' : 'Ще один chat ID'}
                                />
                                {data.tg_chat_ids.length > 1 && (
                                    <button
                                        type="button"
                                        className="btn btn-secondary"
                                        onClick={() => removeChatId(index)}
                                    >
                                        −
                                    </button>
                                )}
                            </div>
                        ))}
                        <button type="button" className="btn btn-secondary" onClick={addChatId}>
                            + Додати chat ID
                        </button>
                    </div>

                    <div className="form-actions">
                        <button type="submit" className="btn btn-primary" disabled={processing}>
                            {processing ? 'Збереження…' : 'Зберегти'}
                        </button>
                        {recentlySuccessful && <span className="field-hint">Збережено</span>}
                    </div>
                </section>
            </form>

            <section className="card">
                <h3>Останні postback-и</h3>
                {events.length === 0 ? (
                    <p className="card-desc">Ще нічого не приходило.</p>
                ) : (
                    <div className="table-wrap">
                        <table className="data-table">
                            <thead>
                                <tr>
                                    <th>Час</th>
                                    <th>Бренд</th>
                                    <th>GEO</th>
                                    <th>Lang</th>
                                    <th>ID</th>
                                    <th>Статус</th>
                                </tr>
                            </thead>
                            <tbody>
                                {events.map((event) => (
                                    <tr key={event.id}>
                                        <td>{event.received_at ?? '—'}</td>
                                        <td>{event.brand}</td>
                                        <td>{event.geo}</td>
                                        <td>{event.lang}</td>
                                        <td>{event.external_id ?? '—'}</td>
                                        <td>{statusLabel(event)}</td>
                                    </tr>
                                ))}
                            </tbody>
                        </table>
                    </div>
                )}
            </section>
        </PanelLayout>
    );
}
