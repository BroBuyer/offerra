import PanelLayout from '@/Layouts/PanelLayout';
import StaleDeadBanner from '@/Components/StaleDeadBanner';
import { router, usePage } from '@inertiajs/react';
import { useMemo, useState } from 'react';

function formatDt(value) {
    if (!value) {
        return '—';
    }
    const [date, time] = String(value).split(' ');
    if (!date) {
        return String(value);
    }
    const [year, month, day] = date.split('-');
    if (!year || !month || !day) {
        return String(value);
    }
    const shortTime = time ? time.slice(0, 5) : '';
    return `${day}.${month}.${year}${shortTime ? ` ${shortTime}` : ''}`;
}

function ratio(part, whole) {
    if (!whole) {
        return '—';
    }
    return `${((part / whole) * 100).toFixed(1)}%`;
}

function buildQueryParams(filters, overrides = {}) {
    const merged = { ...filters, ...overrides };
    const params = {};
    Object.entries(merged).forEach(([key, value]) => {
        if (value === '' || value === null || value === undefined || value === 0) {
            return;
        }
        if (key === 'page' && Number(value) <= 1) {
            return;
        }
        params[key] = value;
    });
    return params;
}

function SortTh({ label, column, filters, onSort, align = 'left' }) {
    const active = filters.sort === column;
    const arrow = !active ? '' : filters.dir === 'asc' ? ' ↑' : ' ↓';
    return (
        <th className={align === 'right' ? 'text-right' : undefined}>
            <button
                type="button"
                className={`stats-sort-btn${active ? ' is-active' : ''}`}
                onClick={() => onSort(column)}
            >
                {label}{arrow}
            </button>
        </th>
    );
}

export default function OfferStats({
    rows,
    filters,
    filterOptions = {},
    templateTotals = [],
    perPageOptions = [50],
    showUserColumn = false,
    users = [],
    staleDeadHint = null,
}) {
    const { flash } = usePage().props;
    const [draft, setDraft] = useState({
        brand: filters.brand || '',
        domain: filters.domain || '',
        geo: filters.geo || '',
        lang: filters.lang || '',
        template: filters.template || '',
        user: filters.user || '',
        per_page: filters.per_page || 50,
    });

    const pagination = useMemo(() => {
        if (!rows) {
            return null;
        }
        return {
            from: rows.from,
            to: rows.to,
            total: rows.total,
            current: rows.current_page,
            last: rows.last_page,
            links: rows.links || [],
        };
    }, [rows]);

    const applyFilters = (overrides = {}) => {
        router.get('/offers/stats', buildQueryParams({
            ...filters,
            brand: draft.brand,
            domain: draft.domain,
            geo: draft.geo,
            lang: draft.lang,
            template: draft.template,
            user: draft.user || 0,
            per_page: draft.per_page,
            page: 1,
            ...overrides,
        }), {
            preserveState: true,
            replace: true,
        });
    };

    const selectTemplate = (template) => {
        setDraft((d) => ({ ...d, template }));
        applyFilters({ template, page: 1 });
    };

    const onSort = (column) => {
        const nextDir = filters.sort === column && filters.dir === 'desc' ? 'asc' : 'desc';
        applyFilters({ sort: column, dir: nextDir, page: 1 });
    };

    const goPage = (page) => {
        if (!page || page < 1 || (pagination && page > pagination.last)) {
            return;
        }
        router.get('/offers/stats', buildQueryParams(filters, { page }), {
            preserveState: true,
            replace: true,
        });
    };

    return (
        <PanelLayout title="Статистика оферів" fullWidth>
            <div className="offers-page stats-page">
                {flash?.success && <div className="flash flash-ok">{flash.success}</div>}
                {flash?.error && <div className="flash flash-error">{flash.error}</div>}

                <div className="page-head">
                    <div>
                        <h1>Статистика оферів</h1>
                        <p className="muted">
                            Кліки (цільове GEO), ліди та депи. GEO-кліки рахуються з ленда (CF-IPCountry ∈ GEO офера, 1/відвідувач/доба).
                        </p>
                    </div>
                </div>

                <StaleDeadBanner hint={staleDeadHint} />

                <form
                    className="filters-bar"
                    onSubmit={(e) => {
                        e.preventDefault();
                        applyFilters();
                    }}
                >
                    <input
                        type="text"
                        placeholder="Brand"
                        value={draft.brand}
                        onChange={(e) => setDraft((d) => ({ ...d, brand: e.target.value }))}
                    />
                    <input
                        type="text"
                        placeholder="Domain"
                        value={draft.domain}
                        onChange={(e) => setDraft((d) => ({ ...d, domain: e.target.value }))}
                    />
                    <select
                        value={draft.geo}
                        onChange={(e) => setDraft((d) => ({ ...d, geo: e.target.value }))}
                    >
                        <option value="">GEO</option>
                        {(filterOptions.geos || []).map((g) => (
                            <option key={g} value={g}>{g}</option>
                        ))}
                    </select>
                    <select
                        value={draft.lang}
                        onChange={(e) => setDraft((d) => ({ ...d, lang: e.target.value }))}
                    >
                        <option value="">Lang</option>
                        {(filterOptions.langs || []).map((l) => (
                            <option key={l} value={l}>{l}</option>
                        ))}
                    </select>
                    <select
                        value={draft.template}
                        onChange={(e) => setDraft((d) => ({ ...d, template: e.target.value }))}
                    >
                        <option value="">Шаблон</option>
                        {(filterOptions.templates || []).map((t) => (
                            <option key={t.id} value={t.id}>{t.name}</option>
                        ))}
                    </select>
                    {showUserColumn && (
                        <select
                            value={draft.user}
                            onChange={(e) => setDraft((d) => ({ ...d, user: e.target.value }))}
                        >
                            <option value="">User</option>
                            {users.map((u) => (
                                <option key={u.id} value={u.id}>{u.name || u.email}</option>
                            ))}
                        </select>
                    )}
                    <select
                        value={draft.per_page}
                        onChange={(e) => setDraft((d) => ({ ...d, per_page: Number(e.target.value) }))}
                    >
                        {perPageOptions.map((n) => (
                            <option key={n} value={n}>{n}/стор.</option>
                        ))}
                    </select>
                    <button type="submit" className="btn btn-primary">Фільтр</button>
                    <button
                        type="button"
                        className="btn"
                        onClick={() => {
                            setDraft({ brand: '', domain: '', geo: '', lang: '', template: '', user: '', per_page: 50 });
                            router.get('/offers/stats', { sort: 'leads_count', dir: 'desc', per_page: 50 }, {
                                preserveState: true,
                                replace: true,
                            });
                        }}
                    >
                        Скинути
                    </button>
                </form>

                {templateTotals.length > 0 && (
                    <section className="stats-templates">
                        <h2>Підсумок по шаблонах</h2>
                        <p className="muted">
                            Сума по всіх оферах під поточними фільтрами. CR — ліди від кліків.
                            Натисни на шаблон, щоб залишити в таблиці нижче лише його.
                        </p>
                        <div className="table-wrap">
                            <table className="offers-table-desktop">
                                <thead>
                                    <tr>
                                        <th>Шаблон</th>
                                        <th className="text-right">Офери</th>
                                        <th className="text-right">Кліки</th>
                                        <th className="text-right">Ліди</th>
                                        <th className="text-right">Депи</th>
                                        <th className="text-right">CR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {templateTotals.map((t) => (
                                        <tr key={t.template} className={filters.template === t.template ? 'is-selected' : undefined}>
                                            <td>
                                                <button
                                                    type="button"
                                                    className={`stats-sort-btn${filters.template === t.template ? ' is-active' : ''}`}
                                                    onClick={() => selectTemplate(filters.template === t.template ? '' : t.template)}
                                                >
                                                    {t.label}
                                                </button>
                                            </td>
                                            <td className="text-right muted">{t.offers_count}</td>
                                            <td className="text-right">{t.clicks}</td>
                                            <td className="text-right">{t.leads}</td>
                                            <td className="text-right">{t.deposits}</td>
                                            <td className="text-right muted">{ratio(t.leads, t.clicks)}</td>
                                        </tr>
                                    ))}
                                </tbody>
                            </table>
                        </div>
                    </section>
                )}

                <div className="table-wrap">
                    <table className="offers-table-desktop">
                        <thead>
                            <tr>
                                {showUserColumn && <th>User</th>}
                                <SortTh label="Brand" column="brand" filters={filters} onSort={onSort} />
                                <SortTh label="Domain" column="domain" filters={filters} onSort={onSort} />
                                <SortTh label="GEO" column="geo" filters={filters} onSort={onSort} />
                                <SortTh label="Lang" column="lang" filters={filters} onSort={onSort} />
                                <SortTh label="Шаблон" column="template" filters={filters} onSort={onSort} />
                                <SortTh label="Кліки" column="clicks_geo_count" filters={filters} onSort={onSort} align="right" />
                                <SortTh label="Ост. клік" column="last_click_geo_at" filters={filters} onSort={onSort} />
                                <SortTh label="Ліди" column="leads_count" filters={filters} onSort={onSort} align="right" />
                                <SortTh label="Ост. лід" column="last_lead_at" filters={filters} onSort={onSort} />
                                <SortTh label="Депи" column="deposits_count" filters={filters} onSort={onSort} align="right" />
                                <SortTh label="Ост. деп" column="last_deposit_at" filters={filters} onSort={onSort} />
                                <SortTh label="Submitted" column="indexed_at" filters={filters} onSort={onSort} />
                                <SortTh label="Indexed" column="google_indexed_at" filters={filters} onSort={onSort} />
                            </tr>
                        </thead>
                        <tbody>
                            {(rows?.data || []).length === 0 && (
                                <tr>
                                    <td colSpan={showUserColumn ? 14 : 13} className="muted">
                                        Немає оферів за фільтром.
                                    </td>
                                </tr>
                            )}
                            {(rows?.data || []).map((row) => (
                                <tr key={row.id}>
                                    {showUserColumn && (
                                        <td className="muted">{row.user_name || row.user_email || '—'}</td>
                                    )}
                                    <td>{row.brand || '—'}</td>
                                    <td>
                                        <a href={`https://${row.domain}`} target="_blank" rel="noreferrer">
                                            {row.domain}
                                        </a>
                                        {row.is_protected ? (
                                            <span className="badge" style={{ marginLeft: 6 }}>protect</span>
                                        ) : null}
                                    </td>
                                    <td>{row.geo || '—'}</td>
                                    <td>{row.lang || '—'}</td>
                                    <td>{row.template_label || '—'}</td>
                                    <td className="text-right">{row.clicks_geo_count}</td>
                                    <td className="muted">{formatDt(row.last_click_geo_at)}</td>
                                    <td className="text-right">{row.leads_count}</td>
                                    <td className="muted">{formatDt(row.last_lead_at)}</td>
                                    <td className="text-right">{row.deposits_count}</td>
                                    <td className="muted">{formatDt(row.last_deposit_at)}</td>
                                    <td className="muted">{formatDt(row.indexed_at)}</td>
                                    <td>
                                        {row.google_indexed ? (
                                            <span className="badge badge-ok" title={row.google_indexed_at || undefined}>так</span>
                                        ) : (
                                            <span className="muted">—</span>
                                        )}
                                    </td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>

                {pagination && pagination.last > 1 && (
                    <div className="pagination-bar">
                        <span className="muted">
                            {pagination.from}–{pagination.to} з {pagination.total}
                        </span>
                        <div className="pagination-actions">
                            <button type="button" className="btn" disabled={pagination.current <= 1} onClick={() => goPage(pagination.current - 1)}>
                                ←
                            </button>
                            <span className="muted">{pagination.current} / {pagination.last}</span>
                            <button type="button" className="btn" disabled={pagination.current >= pagination.last} onClick={() => goPage(pagination.current + 1)}>
                                →
                            </button>
                        </div>
                    </div>
                )}
            </div>
        </PanelLayout>
    );
}
