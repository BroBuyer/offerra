import CopyReadonlyInput from '@/Components/CopyReadonlyInput';
import SecretInput from '@/Components/SecretInput';
import PanelLayout from '@/Layouts/PanelLayout';
import { router, useForm, usePage } from '@inertiajs/react';
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

export default function FunnelAlertsIndex({ settings, events, ignoredBrands = [] }) {
    const { flash, errors } = usePage().props;
    const [settingsOpen, setSettingsOpen] = useState(false);
    const [blacklistOpen, setBlacklistOpen] = useState(false);
    const [retryingTelegram, setRetryingTelegram] = useState(false);
    const [ignoreBrand, setIgnoreBrand] = useState('');
    const [ignoringBrand, setIgnoringBrand] = useState(false);

    const { data, setData, patch, processing, recentlySuccessful } = useForm({
        tg_bot_token: settings.tg_bot_token ?? '',
        tg_chat_ids: settings.tg_chat_ids?.length ? settings.tg_chat_ids : [''],
    });

    const postbackExample = useMemo(() => `POST ${settings.postback_url}
Authorization: Bearer ${settings.webhook_token}
Content-Type: application/json

{
  "event": "funnel.created",
  "id": "stable-id-у-них",
  "brand": "Yieldario",
  "geo": "FR",
  "lang": "fr",
  "ts": "2026-08-17T08:00:00Z"
}`, [settings.postback_url, settings.webhook_token]);

    const submit = (e) => {
        e.preventDefault();
        patch(route('funnel-alerts.update'), {
            preserveScroll: true,
            preserveState: true,
            onSuccess: (page) => {
                const next = page.props.settings ?? {};
                setData({
                    tg_bot_token: next.tg_bot_token ?? '',
                    tg_chat_ids: next.tg_chat_ids?.length ? next.tg_chat_ids : [''],
                });
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

    const pendingTelegramCount = events.filter((event) => !event.offer_found && !event.notified_at).length;

    const retryTelegram = () => {
        setRetryingTelegram(true);
        router.post(route('funnel-alerts.retry-telegram'), {}, {
            preserveScroll: true,
            onFinish: () => setRetryingTelegram(false),
        });
    };

    const ignoreBrandValue = (brand) => {
        const value = (brand ?? '').trim();
        if (!value || ignoringBrand) {
            return;
        }

        setIgnoringBrand(true);
        router.post(route('funnel-alerts.ignored-brands.store'), { brand: value }, {
            preserveScroll: true,
            preserveState: true,
            onFinish: () => {
                setIgnoringBrand(false);
                setIgnoreBrand('');
            },
        });
    };

    const submitIgnoreBrand = (e) => {
        e?.preventDefault?.();
        ignoreBrandValue(ignoreBrand);
    };

    const removeIgnoredBrand = (id) => {
        router.delete(route('funnel-alerts.ignored-brands.destroy', id), {
            preserveScroll: true,
            preserveState: true,
        });
    };

    return (
        <PanelLayout title="Алерти воронок" wide>
            <header className="page-header funnel-alerts-header">
                <div>
                    <h2>Алерти воронок</h2>
                    <p>TG лише якщо офера немає в базі і бренд не в чорному списку. Пуш один раз на комбінацію.</p>
                </div>
                <div className="offer-actions">
                    {pendingTelegramCount > 0 && (
                        <button
                            type="button"
                            className="btn btn-primary"
                            disabled={retryingTelegram}
                            onClick={retryTelegram}
                        >
                            {retryingTelegram ? 'Надсилаю…' : 'Надіслати в Telegram'}
                        </button>
                    )}
                    <button
                        type="button"
                        className="btn btn-secondary"
                        onClick={() => setBlacklistOpen(true)}
                    >
                        Чорний список
                        {ignoredBrands.length > 0 ? ` (${ignoredBrands.length})` : ''}
                    </button>
                    <button
                        type="button"
                        className="btn btn-secondary"
                        onClick={() => setSettingsOpen(true)}
                    >
                        Налаштування
                    </button>
                </div>
            </header>

            {flash?.success && (
                <div className="card" style={{ marginBottom: '1rem' }}>
                    <p className="card-desc">{flash.success}</p>
                </div>
            )}

            {errors?.telegram && (
                <div className="card" style={{ marginBottom: '1rem', borderColor: '#f87171' }}>
                    <p className="card-desc" style={{ color: '#f87171' }}>{errors.telegram}</p>
                </div>
            )}

            {blacklistOpen && (
                <div
                    className="modal-backdrop"
                    role="dialog"
                    aria-modal="true"
                    aria-label="Чорний список воронок"
                    onMouseDown={(e) => {
                        if (e.target === e.currentTarget) {
                            setBlacklistOpen(false);
                        }
                    }}
                >
                    <div className="modal-card modal-card--wide">
                        <div className="modal-card__header">
                            <div>
                                <h3>Чорний список</h3>
                                <p className="card-desc" style={{ margin: 0 }}>
                                    По цих брендах Telegram не йде. Якщо офер уже створили — в таблиці буде «Оффер є».
                                </p>
                            </div>
                            <button
                                type="button"
                                className="modal-card__close"
                                aria-label="Закрити"
                                onClick={() => setBlacklistOpen(false)}
                            >
                                ×
                            </button>
                        </div>

                        <form onSubmit={submitIgnoreBrand} className="blacklist-add">
                            <input
                                type="text"
                                value={ignoreBrand}
                                onChange={(e) => setIgnoreBrand(e.target.value)}
                                placeholder="Назва воронки / бренд"
                                autoFocus
                            />
                            <button
                                type="submit"
                                className="btn btn-primary"
                                disabled={ignoringBrand || !ignoreBrand.trim()}
                            >
                                {ignoringBrand ? 'Додаю…' : 'Додати'}
                            </button>
                        </form>

                        {ignoredBrands.length === 0 ? (
                            <p className="card-desc">Список порожній.</p>
                        ) : (
                            <ul className="blacklist-chips">
                                {ignoredBrands.map((item) => (
                                    <li key={item.id} className="blacklist-chip">
                                        <span>{item.brand}</span>
                                        <button
                                            type="button"
                                            className="blacklist-chip__remove"
                                            onClick={() => removeIgnoredBrand(item.id)}
                                            aria-label={`Прибрати ${item.brand}`}
                                        >
                                            ×
                                        </button>
                                    </li>
                                ))}
                            </ul>
                        )}
                    </div>
                </div>
            )}

            {settingsOpen && (
                <div
                    className="modal-backdrop"
                    role="dialog"
                    aria-modal="true"
                    aria-label="Налаштування алертів воронок"
                    onMouseDown={(e) => {
                        if (e.target === e.currentTarget) {
                            setSettingsOpen(false);
                        }
                    }}
                >
                    <div className="modal-card modal-card--wide">
                        <div className="modal-card__header">
                            <h3>Налаштування алертів воронок</h3>
                            <button
                                type="button"
                                className="modal-card__close"
                                aria-label="Закрити"
                                onClick={() => setSettingsOpen(false)}
                            >
                                ×
                            </button>
                        </div>

                        <form onSubmit={submit}>
                            <section className="card" style={{ marginBottom: '1.1rem' }}>
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
                                        value={settings.webhook_token}
                                        label="Bearer token"
                                    />
                                    <p className="field-hint">
                                        Заголовок: <code>Authorization: Bearer &lt;token&gt;</code>.
                                        Бренд передавати як є (без lower case). GEO — ISO2 uppercase, lang — lowercase.
                                    </p>
                                </div>
                                <pre className="card-desc" style={{ whiteSpace: 'pre-wrap', marginTop: '0.75rem' }}>
                                    {postbackExample}
                                </pre>
                            </section>

                            <section className="card" style={{ marginBottom: '1.1rem' }}>
                                <h3>Telegram</h3>
                                <div className="field">
                                    <label htmlFor="tg-token">Bot token</label>
                                    <SecretInput
                                        id="tg-token"
                                        value={data.tg_bot_token}
                                        onChange={(e) => setData('tg_bot_token', e.target.value)}
                                        placeholder="123456:ABC..."
                                    />
                                    {settings.has_tg_bot_token && !data.tg_bot_token && (
                                        <p className="field-hint">Токен уже збережено. Встав новий, лише якщо хочеш замінити.</p>
                                    )}
                                </div>

                                <div className="field">
                                    <label>Chat ID (група або особистий)</label>
                                    {data.tg_chat_ids.map((chatId, index) => (
                                        <div key={index} className="field-row" style={{ marginBottom: '0.5rem' }}>
                                            <input
                                                type="text"
                                                value={chatId}
                                                onChange={(e) => updateChatId(index, e.target.value)}
                                                placeholder={index === 0 ? 'ID групи або особистого чату' : 'Ще один chat ID'}
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
                    </div>
                </div>
            )}

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
                                    <th></th>
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
                                        <td>
                                            {!event.ignored && (
                                                <button
                                                    type="button"
                                                    className="btn btn-secondary btn-sm"
                                                    disabled={ignoringBrand}
                                                    onClick={() => ignoreBrandValue(event.brand)}
                                                >
                                                    У чорний список
                                                </button>
                                            )}
                                        </td>
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
