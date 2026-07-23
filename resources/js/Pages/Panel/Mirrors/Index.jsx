import PanelLayout from '@/Layouts/PanelLayout';
import { router, useForm, usePage } from '@inertiajs/react';
import { useEffect, useMemo, useState } from 'react';

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

function ProbeSnippetModal({ probe, onClose }) {
    const [copied, setCopied] = useState(false);
    const snippet = probe?.snippet || '';
    const endpoint = probe?.endpoint || '';
    const pixel = probe?.pixel || '';
    const css = probe?.css || '';
    const boot = probe?.boot || '';

    useEffect(() => {
        const onKey = (event) => {
            if (event.key === 'Escape') {
                onClose();
            }
        };
        document.addEventListener('keydown', onKey);
        return () => document.removeEventListener('keydown', onKey);
    }, [onClose]);

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

    return (
        <div className="modal-backdrop" onClick={onClose}>
            <div
                className="modal-card modal-card--wide"
                role="dialog"
                aria-labelledby="probe-snippet-title"
                onClick={(event) => event.stopPropagation()}
            >
                <div className="modal-card__header">
                    <div>
                        <h3 id="probe-snippet-title">Тестовий CDN-сніпет</h3>
                        <p className="card-desc">
                            Pixel/CSS = сигнал. boot.js = сигнал + редірект. Встав перед <code>&lt;/body&gt;</code>.
                        </p>
                    </div>
                    <button type="button" className="modal-card__close" onClick={onClose} aria-label="Закрити">
                        ×
                    </button>
                </div>

                <div className="field-hint" style={{ marginTop: 0, display: 'grid', gap: '0.35rem' }}>
                    {pixel && <div>Pixel: <code>{pixel}</code></div>}
                    {css && <div>CSS: <code>{css}</code></div>}
                    {boot && <div>Boot: <code>{boot}</code></div>}
                    {endpoint && <div>Collect: <code>{endpoint}</code></div>}
                </div>
                <textarea
                    className="mirrors-probe-code"
                    readOnly
                    value={snippet.trim()}
                    rows={10}
                    onFocus={(e) => e.target.select()}
                    spellCheck={false}
                />
                <div className="btn-row" style={{ marginTop: '1rem' }}>
                    <button type="button" className={`btn ${copied ? 'btn-primary' : 'btn-ghost'}`} onClick={copy}>
                        {copied ? 'Скопійовано' : 'Копіювати код'}
                    </button>
                    <button type="button" className="btn btn-ghost" onClick={onClose}>
                        Закрити
                    </button>
                </div>
            </div>
        </div>
    );
}

function MirrorManageModal({ mirror, offers, onClose }) {
    const { data, setData, patch, processing, errors, delete: destroy, transform } = useForm({
        redirect_enabled: Boolean(mirror.redirect_enabled),
        redirect_offer_id: mirror.redirect_offer_id || '',
        redirect_url: mirror.redirect_url || '',
        status: mirror.redirect_enabled ? 'redirecting' : (mirror.status || 'watching'),
        notes: mirror.notes || '',
    });

    useEffect(() => {
        const onKey = (event) => {
            if (event.key === 'Escape' && !processing) {
                onClose();
            }
        };
        document.addEventListener('keydown', onKey);
        return () => document.removeEventListener('keydown', onKey);
    }, [onClose, processing]);

    const save = (event) => {
        event.preventDefault();
        transform((payload) => {
            const url = String(payload.redirect_url || '').trim();
            const enabled = Boolean(payload.redirect_enabled)
                || (payload.status === 'redirecting' && url !== '')
                || Boolean(payload.redirect_offer_id);

            return {
                ...payload,
                redirect_enabled: enabled,
                status: enabled
                    ? 'redirecting'
                    : (payload.status === 'redirecting' ? 'watching' : payload.status),
            };
        });

        patch(route('mirrors.update', mirror.id), {
            preserveScroll: true,
            onSuccess: () => onClose(),
        });
    };

    const remove = () => {
        if (!window.confirm(`Видалити ${mirror.host}?`)) {
            return;
        }
        destroy(route('mirrors.destroy', mirror.id), {
            preserveScroll: true,
            onSuccess: () => onClose(),
        });
    };

    const setEnabled = (enabled) => {
        setData((prev) => ({
            ...prev,
            redirect_enabled: enabled,
            status: enabled ? 'redirecting' : (prev.status === 'redirecting' ? 'watching' : prev.status),
        }));
    };

    const onOfferChange = (value) => {
        const id = value ? Number(value) : '';
        setData((prev) => {
            const offer = offers.find((item) => item.id === id);
            return {
                ...prev,
                redirect_offer_id: id,
                redirect_url: offer ? `https://${offer.domain}/` : prev.redirect_url,
                redirect_enabled: id ? true : prev.redirect_enabled,
                status: id ? 'redirecting' : prev.status,
            };
        });
    };

    const onUrlChange = (value) => {
        setData((prev) => ({
            ...prev,
            redirect_url: value,
            redirect_enabled: value.trim() !== '' ? true : prev.redirect_enabled,
            status: value.trim() !== '' ? 'redirecting' : prev.status,
        }));
    };

    const onStatusChange = (value) => {
        setData((prev) => ({
            ...prev,
            status: value,
            redirect_enabled: value === 'redirecting' ? true : (value === 'ignored' ? false : prev.redirect_enabled),
        }));
    };

    return (
        <div className="modal-backdrop" onClick={() => !processing && onClose()}>
            <div
                className="modal-card modal-card--wide"
                role="dialog"
                aria-labelledby="mirror-manage-title"
                onClick={(event) => event.stopPropagation()}
            >
                <div className="modal-card__header">
                    <div>
                        <h3 id="mirror-manage-title">{mirror.host}</h3>
                        <p className="card-desc">
                            {mirror.hit_count} хіт(ів) · останній: {mirror.last_seen_at || '—'}
                            {mirror.last_path ? ` · ${mirror.last_path}` : ''}
                        </p>
                    </div>
                    <button
                        type="button"
                        className="modal-card__close"
                        onClick={onClose}
                        disabled={processing}
                        aria-label="Закрити"
                    >
                        ×
                    </button>
                </div>

                <form onSubmit={save}>
                    <div className="field">
                        <label className="field-check" htmlFor={`redir-${mirror.id}`}>
                            <input
                                id={`redir-${mirror.id}`}
                                type="checkbox"
                                checked={Boolean(data.redirect_enabled)}
                                onChange={(e) => setEnabled(e.target.checked)}
                            />
                            <span>Увімкнути редірект трафіку на мій офер</span>
                        </label>
                        <p className="field-hint" style={{ margin: '0.35rem 0 0' }}>
                            Обери офер або вкажи URL нижче — редірект увімкнеться автоматично.
                        </p>
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
                                onChange={(e) => onUrlChange(e.target.value)}
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
                                onChange={(e) => onStatusChange(e.target.value)}
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
                        <button type="submit" className="btn btn-primary" disabled={processing}>
                            {processing ? 'Збереження…' : 'Зберегти'}
                        </button>
                        <button type="button" className="btn btn-ghost" onClick={remove} disabled={processing}>
                            Видалити
                        </button>
                        <button type="button" className="btn btn-ghost" onClick={onClose} disabled={processing}>
                            Скасувати
                        </button>
                    </div>
                </form>
            </div>
        </div>
    );
}

function MirrorRow({ mirror, showUserColumn, onManage }) {
    return (
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
                <button type="button" className="btn btn-ghost btn-sm" onClick={() => onManage(mirror)}>
                    Керувати
                </button>
            </td>
        </tr>
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
    const [probeOpen, setProbeOpen] = useState(false);
    const [editing, setEditing] = useState(null);

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
                <header className="page-header mirrors-page-header">
                    <div>
                        <h2>Дзеркала</h2>
                        <p>
                            Чужі копії лендів. Увімкни редірект — і трафік піде на твій офер.
                        </p>
                    </div>
                    {probe?.snippet && (
                        <button type="button" className="btn btn-ghost btn-sm" onClick={() => setProbeOpen(true)}>
                            CDN снипет
                        </button>
                    )}
                </header>

                {flash?.success && (
                    <div className="card" style={{ marginBottom: '1rem', borderColor: '#34d399' }}>
                        <p className="card-desc" style={{ color: '#34d399', margin: 0 }}>{flash.success}</p>
                    </div>
                )}

                <div className="mirrors-toolbar">
                    <div className="dashboard-kpi-grid mirrors-kpi">
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

                    <div className="filter-bar mirrors-filters">
                        <select
                            value={filters.status || ''}
                            onChange={(e) => reload({ status: e.target.value, page: 1 })}
                            style={{ minWidth: 160 }}
                        >
                            {statusOptions.map((opt) => (
                                <option key={opt.value || 'all'} value={opt.value}>{opt.label}</option>
                            ))}
                        </select>
                        {showUserColumn && (
                            <select
                                value={filters.user_id || ''}
                                onChange={(e) => reload({ user_id: e.target.value, page: 1 })}
                                style={{ minWidth: 200 }}
                            >
                                <option value="">Усі користувачі</option>
                                {users.map((user) => (
                                    <option key={user.id} value={user.id}>{user.email}</option>
                                ))}
                            </select>
                        )}
                    </div>
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
                                        showUserColumn={showUserColumn}
                                        onManage={setEditing}
                                    />
                                ))
                            )}
                        </tbody>
                    </table>
                </div>

                {mirrors?.last_page > 1 && (
                    <div className="btn-row" style={{ marginTop: '0.75rem', flexShrink: 0 }}>
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

            {probeOpen && probe?.snippet && (
                <ProbeSnippetModal probe={probe} onClose={() => setProbeOpen(false)} />
            )}
            {editing && (
                <MirrorManageModal
                    mirror={editing}
                    offers={offers}
                    onClose={() => setEditing(null)}
                />
            )}
        </PanelLayout>
    );
}
