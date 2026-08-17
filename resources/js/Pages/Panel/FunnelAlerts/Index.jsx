import SecretInput from '@/Components/SecretInput';
import PanelLayout from '@/Layouts/PanelLayout';
import { useForm, usePage } from '@inertiajs/react';

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

    const { data, setData, patch, processing, recentlySuccessful } = useForm({
        tg_bot_token: '',
        tg_chat_ids: settings.tg_chat_ids?.length ? settings.tg_chat_ids : [''],
        regenerate_webhook_token: false,
    });

    const submit = (e) => {
        e.preventDefault();
        patch(route('funnel-alerts.update'), {
            preserveScroll: true,
            onSuccess: () => {
                setData('tg_bot_token', '');
                setData('regenerate_webhook_token', false);
            },
        });
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

            <section className="card" style={{ marginBottom: '1.5rem' }}>
                <h3>Postback для їхньої системи</h3>
                <div className="field">
                    <label htmlFor="postback-url">URL</label>
                    <input
                        id="postback-url"
                        type="text"
                        readOnly
                        value={settings.postback_url}
                        onFocus={(e) => e.target.select()}
                    />
                </div>
                <div className="field">
                    <label htmlFor="webhook-token">Bearer token</label>
                    <input
                        id="webhook-token"
                        type="text"
                        readOnly
                        value={settings.webhook_token}
                        onFocus={(e) => e.target.select()}
                    />
                    <p className="field-hint">
                        Заголовок: <code>Authorization: Bearer &lt;token&gt;</code>.
                        Бренд передавати як є (без lower case). GEO — ISO2 uppercase, lang — lowercase.
                    </p>
                </div>
                <pre className="card-desc" style={{ whiteSpace: 'pre-wrap', marginTop: '0.75rem' }}>
{`POST ${settings.postback_url}
Authorization: Bearer ${settings.webhook_token}
Content-Type: application/json

{
  "event": "funnel.created",
  "id": "stable-id-у-них",
  "brand": "Yieldario",
  "geo": "FR",
  "lang": "fr",
  "ts": "2026-08-17T08:00:00Z"
}`}
                </pre>
            </section>

            <section className="card" style={{ marginBottom: '1.5rem' }}>
                <h3>Telegram</h3>
                <form onSubmit={submit}>
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

                    <div className="field" style={{ marginTop: '1rem' }}>
                        <label>
                            <input
                                type="checkbox"
                                checked={data.regenerate_webhook_token}
                                onChange={(e) => setData('regenerate_webhook_token', e.target.checked)}
                            />
                            {' '}Згенерувати новий Bearer token
                        </label>
                    </div>

                    <div className="form-actions">
                        <button type="submit" className="btn btn-primary" disabled={processing}>
                            {processing ? 'Збереження…' : 'Зберегти'}
                        </button>
                        {recentlySuccessful && <span className="field-hint">Збережено</span>}
                    </div>
                </form>
            </section>

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
