import PanelLayout from '@/Layouts/PanelLayout';
import { clearWizardState } from '@/lib/offerWizardStorage';
import { Link, router, usePage } from '@inertiajs/react';
import { useEffect, useMemo, useState } from 'react';

function statusBadge(status) {
    switch (status) {
        case 'deployed':
            return <span className="badge badge-ok">На сервері</span>;
        case 'deploying':
            return <span className="badge badge-warn">Деплоїться…</span>;
        case 'failed':
            return <span className="badge badge-error">Помилка</span>;
        default:
            return <span className="badge">Згенеровано</span>;
    }
}

function formatCreatedDate(isoDate) {
    if (!isoDate) {
        return '—';
    }

    const [year, month, day] = isoDate.split('-');

    return `${day}.${month}.${year}`;
}

function buildQueryParams(filters, overrides = {}) {
    const merged = { ...filters, ...overrides };
    const params = {};

    Object.entries(merged).forEach(([key, value]) => {
        if (value === '' || value === null || value === undefined) {
            return;
        }

        if (key === 'page' && Number(value) <= 1) {
            return;
        }

        params[key] = value;
    });

    return params;
}

function buildActiveFilterChips(filters, users) {
    const chips = [];

    if (filters.geo) {
        chips.push({
            id: 'geo',
            label: `GEO: ${filters.geo}`,
            clear: { geo: '' },
        });
    }

    if (filters.lang) {
        chips.push({
            id: 'lang',
            label: `Мова: ${filters.lang}`,
            clear: { lang: '' },
        });
    }

    if (filters.user) {
        const user = users.find((item) => String(item.id) === String(filters.user));
        chips.push({
            id: 'user',
            label: `Користувач: ${user?.name ?? user?.email ?? filters.user}`,
            clear: { user: '' },
        });
    }

    if (filters.indexing === 'yes') {
        chips.push({
            id: 'indexing',
            label: 'Індексація: подано',
            clear: { indexing: '' },
        });
    } else if (filters.indexing === 'no') {
        chips.push({
            id: 'indexing',
            label: 'Індексація: не подано',
            clear: { indexing: '' },
        });
    }

    if (filters.created) {
        let dateLabel = 'Дата: ';

        switch (filters.created) {
            case 'today':
                dateLabel += 'сьогодні';
                break;
            case 'yesterday':
                dateLabel += 'вчора';
                break;
            case 'week':
                dateLabel += 'цей тиждень';
                break;
            case 'month':
                dateLabel += 'цей місяць';
                break;
            case 'custom':
                dateLabel += [
                    filters.created_from ? formatCreatedDate(filters.created_from) : '…',
                    filters.created_to ? formatCreatedDate(filters.created_to) : '…',
                ].join(' – ');
                break;
            default:
                dateLabel += filters.created;
        }

        chips.push({
            id: 'created',
            label: dateLabel,
            clear: { created: '', created_from: '', created_to: '' },
        });
    }

    return chips;
}

function resolveOffersPagination(offers, filters = {}) {
    const pagination = offers?.meta ?? offers ?? {};

    return {
        rows: offers?.data ?? [],
        total: Number(pagination.total ?? 0),
        from: Number(pagination.from ?? 0),
        to: Number(pagination.to ?? 0),
        currentPage: Number(pagination.current_page ?? 1),
        lastPage: Number(pagination.last_page ?? 1),
        perPage: Number(pagination.per_page ?? filters.per_page ?? 30),
    };
}

export default function OffersIndex({
    offers,
    filters = {},
    filterOptions = {},
    createdCounts = {},
    perPageOptions = [10, 30, 50, 100],
    canDeploy,
    showUserColumn = false,
    users = [],
    dateFilters = {},
}) {
    const { flash, errors, auth } = usePage().props;
    const [deployingId, setDeployingId] = useState(null);
    const [indexingId, setIndexingId] = useState(null);

    const pagination = resolveOffersPagination(offers, filters);
    const rows = pagination.rows;
    const { total, from: rangeFrom, to: rangeTo, currentPage, lastPage, perPage } = pagination;
    const geos = filterOptions.geos ?? [];
    const langs = filterOptions.langs ?? [];

    useEffect(() => {
        if (flash?.success) {
            clearWizardState();
        }
    }, [flash?.success]);

    const reloadOffers = (overrides = {}, { resetPage = true } = {}) => {
        const next = { ...filters, ...overrides };

        if (resetPage) {
            next.page = 1;
        }

        router.get(route('offers.index'), buildQueryParams(next), {
            preserveState: false,
            replace: true,
            preserveScroll: true,
        });
    };

    const clearAllFilters = () => {
        reloadOffers({
            geo: '',
            lang: '',
            indexing: '',
            created: '',
            created_from: '',
            created_to: '',
            user: '',
        });
    };

    const clearFilter = (overrides) => {
        reloadOffers(overrides);
    };

    const deployOffer = (offer) => {
        setDeployingId(offer.id);
        router.post(route('offers.deploy', offer.id), {}, {
            preserveScroll: true,
            onFinish: () => setDeployingId(null),
        });
    };

    const canManageOffer = (offer) => {
        if (showUserColumn) {
            return true;
        }

        return offer.user_id === auth?.user?.id;
    };

    const canDeployOffer = (offer) => {
        if (showUserColumn) {
            return offer.deploy_ready;
        }

        return canDeploy;
    };

    const toggleIndexing = (offer, checked) => {
        setIndexingId(offer.id);
        router.patch(
            route('offers.indexing', offer.id),
            { submitted_for_indexing: checked },
            {
                preserveScroll: true,
                onFinish: () => setIndexingId(null),
            },
        );
    };

    const activeFilterChips = useMemo(
        () => buildActiveFilterChips(filters, users),
        [filters, users],
    );

    const hasActiveFilters = activeFilterChips.length > 0;

    return (
        <PanelLayout title="Оффери" fullWidth>
            <div className="offers-page">
            <header className="page-header">
                <h2>Оффери</h2>
                <p>Каталог згенерованих лендів — деплой на Hestia через SFTP</p>
            </header>

            {errors?.deploy && (
                <div className="card" style={{ marginBottom: '1rem', borderColor: '#f87171' }}>
                    <p className="card-desc" style={{ color: '#f87171' }}>{errors.deploy}</p>
                </div>
            )}

            {!canDeploy && (
                <div className="card" style={{ marginBottom: '1rem', borderColor: '#f59e0b' }}>
                    <p className="card-desc">
                        Для деплою збережіть SFTP-налаштування в{' '}
                        <Link href={route('settings.index')}>налаштуваннях</Link>.
                    </p>
                </div>
            )}

            {hasActiveFilters && (
                <div className="active-filters" aria-label="Активні фільтри">
                    <span className="active-filters__label">Обрані фільтри:</span>
                    <div className="active-filters__chips">
                        {activeFilterChips.map((chip) => (
                            <button
                                key={chip.id}
                                type="button"
                                className="filter-chip"
                                onClick={() => clearFilter(chip.clear)}
                                title="Прибрати фільтр"
                            >
                                <span>{chip.label}</span>
                                <span className="filter-chip__remove" aria-hidden="true">×</span>
                            </button>
                        ))}
                    </div>
                    <button
                        type="button"
                        className="btn btn-ghost btn-sm active-filters__reset"
                        onClick={clearAllFilters}
                    >
                        Скинути все
                    </button>
                </div>
            )}

            <div className="filter-bar">
                <select
                    aria-label="GEO"
                    value={filters.geo ?? ''}
                    onChange={(e) => reloadOffers({ geo: e.target.value })}
                >
                    <option value="">Усі GEO</option>
                    {geos.map((g) => (
                        <option key={g} value={g}>
                            {g}
                        </option>
                    ))}
                </select>
                <select
                    aria-label="Мова"
                    value={filters.lang ?? ''}
                    onChange={(e) => reloadOffers({ lang: e.target.value })}
                >
                    <option value="">Усі мови</option>
                    {langs.map((l) => (
                        <option key={l} value={l}>
                            {l}
                        </option>
                    ))}
                </select>
                {showUserColumn && users.length > 0 && (
                    <select
                        aria-label="Користувач"
                        value={filters.user ?? ''}
                        onChange={(e) => reloadOffers({ user: e.target.value })}
                    >
                        <option value="">Усі користувачі</option>
                        {users.map((user) => (
                            <option key={user.id} value={user.id}>
                                {user.name ?? user.email}
                            </option>
                        ))}
                    </select>
                )}
                <select
                    aria-label="Індексація"
                    value={filters.indexing ?? ''}
                    onChange={(e) => reloadOffers({ indexing: e.target.value })}
                >
                    <option value="">Уся індексація</option>
                    <option value="no">Не подано</option>
                    <option value="yes">Подано</option>
                </select>
                <select
                    aria-label="Дата створення"
                    value={filters.created ?? ''}
                    onChange={(e) => reloadOffers({ created: e.target.value })}
                >
                    <option value="">Усі дати</option>
                    <option value="today">Сьогодні ({createdCounts.today ?? 0})</option>
                    <option value="yesterday">Вчора ({createdCounts.yesterday ?? 0})</option>
                    <option value="week">Цей тиждень ({createdCounts.week ?? 0})</option>
                    <option value="month">Цей місяць ({createdCounts.month ?? 0})</option>
                    <option value="custom">Свій період…</option>
                </select>
                {filters.created === 'custom' && (
                    <div className="filter-bar__date-range">
                        <label className="filter-bar__date-field">
                            <span className="sr-only">Від</span>
                            <input
                                type="date"
                                aria-label="Дата від"
                                value={filters.created_from ?? ''}
                                max={filters.created_to || dateFilters.today || undefined}
                                onChange={(e) => reloadOffers({ created_from: e.target.value })}
                            />
                        </label>
                        <span className="filter-bar__date-sep" aria-hidden="true">—</span>
                        <label className="filter-bar__date-field">
                            <span className="sr-only">До</span>
                            <input
                                type="date"
                                aria-label="Дата до"
                                value={filters.created_to ?? ''}
                                min={filters.created_from || undefined}
                                max={dateFilters.today || undefined}
                                onChange={(e) => reloadOffers({ created_to: e.target.value })}
                            />
                        </label>
                    </div>
                )}
                <select
                    aria-label="На сторінці"
                    value={String(filters.per_page ?? 30)}
                    onChange={(e) => reloadOffers({ per_page: Number(e.target.value) })}
                >
                    {perPageOptions.map((size) => (
                        <option key={size} value={size}>
                            {size} / стор.
                        </option>
                    ))}
                </select>
                {(hasActiveFilters || total > 0) && (
                    <span className="filter-bar__count">
                        {total === 0
                            ? 'Офферів не знайдено'
                            : `Знайдено ${total}${lastPage > 1 ? ` · показано ${rangeFrom}–${rangeTo}` : ''}`}
                    </span>
                )}
                <Link
                    href={route('offers.create', { fresh: 1 })}
                    className="btn btn-primary filter-bar__create"
                >
                    + Новий оффер
                </Link>
            </div>

            <div className="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th className="col-num" title={`Всього: ${total}`}>#</th>
                            {showUserColumn && <th>Користувач</th>}
                            <th>Бренд</th>
                            <th>Домен</th>
                            <th>GEO</th>
                            <th>Мова</th>
                            <th>Шаблон</th>
                            <th>Панель</th>
                            <th>Keitaro</th>
                            <th>Створено</th>
                            <th>Статус</th>
                            <th>Індексація</th>
                            <th />
                        </tr>
                    </thead>
                    <tbody>
                        {rows.map((offer, index) => {
                            const isDeploying = offer.status === 'deploying' || deployingId === offer.id;
                            const rowNumber = (currentPage - 1) * perPage + index + 1;

                            return (
                                <tr key={offer.folder}>
                                    <td className="col-num">{rowNumber}</td>
                                    {showUserColumn && (
                                        <td>
                                            <span className="offer-user" title={offer.user_email}>
                                                {offer.user_name ?? offer.user_email ?? '—'}
                                            </span>
                                        </td>
                                    )}
                                    <td>{offer.brand}</td>
                                    <td>
                                        <a
                                            href={`https://${offer.domain}`}
                                            target="_blank"
                                            rel="noreferrer"
                                        >
                                            {offer.domain}
                                        </a>
                                    </td>
                                    <td>{offer.geo}</td>
                                    <td>{offer.lang}</td>
                                    <td>{offer.template}</td>
                                    <td>{offer.deploy_panel ?? '—'}</td>
                                    <td>
                                        {offer.keitaro_id ? `#${offer.keitaro_id}` : '—'}
                                    </td>
                                    <td title={offer.date ?? undefined}>
                                        {formatCreatedDate(offer.date)}
                                    </td>
                                    <td>
                                        {statusBadge(offer.status)}
                                        {offer.deploy_error && (
                                            <p className="field-hint" style={{ color: '#f87171', marginTop: '0.25rem' }}>
                                                {offer.deploy_error}
                                            </p>
                                        )}
                                    </td>
                                    <td>
                                        {canManageOffer(offer) ? (
                                            <label
                                                className="indexing-check"
                                                title={
                                                    offer.submitted_for_indexing && offer.indexed_at
                                                        ? `Подано: ${offer.indexed_at}`
                                                        : 'Подано на індексацію (GSC / IndexNow)'
                                                }
                                            >
                                                <input
                                                    type="checkbox"
                                                    checked={Boolean(offer.submitted_for_indexing)}
                                                    disabled={indexingId === offer.id}
                                                    onChange={(e) => toggleIndexing(offer, e.target.checked)}
                                                />
                                                <span className="indexing-check__label">
                                                    {offer.submitted_for_indexing ? 'Так' : 'Ні'}
                                                </span>
                                            </label>
                                        ) : (
                                            <span className="field-hint">
                                                {offer.submitted_for_indexing ? 'Так' : '—'}
                                            </span>
                                        )}
                                    </td>
                                    <td>
                                        {canDeployOffer(offer) ? (
                                            <button
                                                type="button"
                                                className={`btn btn-ghost btn-sm btn-deploy${isDeploying ? ' is-loading' : ''}`}
                                                disabled={isDeploying}
                                                aria-busy={isDeploying}
                                                onClick={() => deployOffer(offer)}
                                            >
                                                {isDeploying ? (
                                                    <>
                                                        <span className="btn-spinner" aria-hidden="true" />
                                                        <span>Деплой…</span>
                                                    </>
                                                ) : offer.status === 'deployed' ? (
                                                    '↻'
                                                ) : offer.status === 'failed' ? (
                                                    'Повтор'
                                                ) : (
                                                    'Деплой'
                                                )}
                                            </button>
                                        ) : (
                                            <span className="field-hint">—</span>
                                        )}
                                    </td>
                                </tr>
                            );
                        })}
                        {rows.length === 0 && (
                            <tr>
                                <td colSpan={showUserColumn ? 13 : 12} className="field-hint">
                                    Офферів не знайдено
                                </td>
                            </tr>
                        )}
                    </tbody>
                </table>
            </div>

            {lastPage > 1 && (
                <nav className="pagination-bar" aria-label="Сторінки офферів">
                    <button
                        type="button"
                        className="btn btn-ghost btn-sm"
                        disabled={currentPage <= 1}
                        onClick={() => reloadOffers({ page: currentPage - 1 }, { resetPage: false })}
                    >
                        ← Назад
                    </button>
                    <span className="pagination-bar__info">
                        Сторінка {currentPage} з {lastPage}
                    </span>
                    <button
                        type="button"
                        className="btn btn-ghost btn-sm"
                        disabled={currentPage >= lastPage}
                        onClick={() => reloadOffers({ page: currentPage + 1 }, { resetPage: false })}
                    >
                        Далі →
                    </button>
                </nav>
            )}
            </div>
        </PanelLayout>
    );
}
