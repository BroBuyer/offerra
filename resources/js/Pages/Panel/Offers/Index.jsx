import PanelLayout from '@/Layouts/PanelLayout';
import OfferEditModal from '@/Components/OfferEditModal';
import { clearWizardState } from '@/lib/offerWizardStorage';
import { Link, router, usePage } from '@inertiajs/react';
import { useEffect, useMemo, useState } from 'react';

function TrashIcon() {
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
            <path d="M3 6h18" />
            <path d="M8 6V4h8v2" />
            <path d="M19 6l-1 14H6L5 6" />
            <path d="M10 11v6" />
            <path d="M14 11v6" />
        </svg>
    );
}

function statusBadge(status) {
    switch (status) {
        case 'deployed':
            return <span className="badge badge-ok">На сервері</span>;
        case 'deploying':
            return <span className="badge badge-warn">Деплоїться…</span>;
        case 'archiving':
            return <span className="badge badge-warn">Архівація…</span>;
        case 'teardown_failed':
            return <span className="badge badge-error">Архів помилка</span>;
        case 'failed':
            return <span className="badge badge-error">Помилка</span>;
        default:
            return <span className="badge">Згенеровано</span>;
    }
}

function infraBadge(offer) {
    if (!offer.provision_infrastructure && !offer.infra_status) {
        return null;
    }

    switch (offer.infra_status) {
        case 'provisioning':
        case 'pending':
            return <span className="badge badge-warn">Інфра…</span>;
        case 'failed':
            return <span className="badge badge-error">Інфра</span>;
        default:
            return null;
    }
}

function dnsBadge(offer) {
    switch (offer.dns_status) {
        case 'ready':
            return (
                <span className="dns-status dns-status--ready" title="DNS поширено" aria-label="DNS поширено">
                    ✓
                </span>
            );
        case 'pending':
            return (
                <span className="dns-status dns-status--pending" title="Очікується поширення DNS">
                    <span className="dns-status__dot" aria-hidden="true" />
                    Очікується DNS
                </span>
            );
        case 'waiting':
            return <span className="dns-status dns-status--waiting">—</span>;
        default:
            return <span className="dns-status dns-status--na">—</span>;
    }
}

function formatCreatedDate(isoDate) {
    if (!isoDate) {
        return '—';
    }

    const [year, month, day] = isoDate.split('-');

    return `${day}.${month}.${year}`;
}

function formatDeployedAt(value) {
    if (!value) {
        return '—';
    }

    // backend returns "YYYY-MM-DD HH:mm"
    const [date, time] = String(value).split(' ');
    if (!date) {
        return String(value);
    }

    const [year, month, day] = date.split('-');
    if (!year || !month || !day) {
        return String(value);
    }

    return `${day}.${month}.${year}${time ? ` ${time}` : ''}`;
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

    if (filters.brand) {
        chips.push({
            id: 'brand',
            label: `Бренд: ${filters.brand}`,
            clear: { brand: '' },
        });
    }

    if (filters.domain) {
        chips.push({
            id: 'domain',
            label: `Домен: ${filters.domain}`,
            clear: { domain: '' },
        });
    }

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
    hasKeitaroApiKey = false,
    geoPresets = [],
    showUserColumn = false,
    users = [],
    dateFilters = {},
}) {
    const { flash, errors, auth } = usePage().props;
    const [deployingId, setDeployingId] = useState(null);
    const [provisioningId, setProvisioningId] = useState(null);
    const [indexingId, setIndexingId] = useState(null);
    const [archivingId, setArchivingId] = useState(null);
    const [copiedDomainId, setCopiedDomainId] = useState(null);
    const [editingOffer, setEditingOffer] = useState(null);
    const [brandQuery, setBrandQuery] = useState(filters.brand ?? '');
    const [domainQuery, setDomainQuery] = useState(filters.domain ?? '');

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

    useEffect(() => {
        setBrandQuery(filters.brand ?? '');
    }, [filters.brand]);

    useEffect(() => {
        setDomainQuery(filters.domain ?? '');
    }, [filters.domain]);

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
            brand: '',
            domain: '',
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

    useEffect(() => {
        if (brandQuery === (filters.brand ?? '')) {
            return undefined;
        }

        const timeout = window.setTimeout(() => {
            reloadOffers({ brand: brandQuery });
        }, 350);

        return () => window.clearTimeout(timeout);
    }, [brandQuery, filters.brand]);

    useEffect(() => {
        if (domainQuery === (filters.domain ?? '')) {
            return undefined;
        }

        const timeout = window.setTimeout(() => {
            reloadOffers({ domain: domainQuery });
        }, 350);

        return () => window.clearTimeout(timeout);
    }, [domainQuery, filters.domain]);

    const hasDeploying = useMemo(
        () => rows.some((offer) => offer.status === 'deploying' || offer.status === 'archiving'),
        [rows],
    );

    const hasInfraProvisioning = useMemo(
        () => rows.some((offer) => ['pending', 'provisioning'].includes(offer.infra_status)),
        [rows],
    );

    const hasDnsPending = useMemo(
        () => rows.some((offer) => offer.dns_status === 'pending'),
        [rows],
    );

    useEffect(() => {
        if (!hasDeploying && !hasInfraProvisioning) {
            return undefined;
        }

        const interval = window.setInterval(() => {
            router.reload({
                only: ['offers'],
                preserveScroll: true,
                preserveState: true,
            });
        }, 5000);

        return () => window.clearInterval(interval);
    }, [hasDeploying, hasInfraProvisioning]);

    useEffect(() => {
        if (!hasDnsPending) {
            return undefined;
        }

        const interval = window.setInterval(() => {
            router.reload({
                only: ['offers'],
                preserveScroll: true,
                preserveState: true,
            });
        }, 60000);

        return () => window.clearInterval(interval);
    }, [hasDnsPending]);

    const deployOffer = (offer) => {
        setDeployingId(offer.id);
        router.post(route('offers.deploy', offer.id), {}, {
            preserveScroll: true,
            onFinish: () => setDeployingId(null),
        });
    };

    const provisionOffer = (offer) => {
        setProvisioningId(offer.id);
        router.post(route('offers.provision', offer.id), {}, {
            preserveScroll: true,
            onFinish: () => setProvisioningId(null),
        });
    };

    const archiveOffer = (offer) => {
        const ok = window.confirm(
            `Архівувати ${offer.domain}?\n\n`
            + 'Сайт буде знято з Hestia і Cloudflare. Домен лишиться в Dynadot для перепродажу.',
        );
        if (!ok) {
            return;
        }

        setArchivingId(offer.id);
        router.post(route('offers.archive', offer.id), {}, {
            preserveScroll: true,
            onFinish: () => setArchivingId(null),
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

    const copyDomainUrl = async (offer) => {
        const url = `https://${offer.domain}`;

        try {
            await navigator.clipboard.writeText(url);
        } catch {
            const textarea = document.createElement('textarea');
            textarea.value = url;
            textarea.style.position = 'fixed';
            textarea.style.opacity = '0';
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
        }

        setCopiedDomainId(offer.id);
        window.setTimeout(() => {
            setCopiedDomainId((current) => (current === offer.id ? null : current));
        }, 2000);
    };

    const activeFilterChips = useMemo(
        () => buildActiveFilterChips(filters, users),
        [filters, users],
    );

    const hasActiveFilters = activeFilterChips.length > 0;

    return (
        <PanelLayout title="Оффери" fullWidth>
            <div className="offers-page">
            <header className="page-header offers-page-header">
                <div>
                    <h2>Оффери</h2>
                    <p>Каталог згенерованих лендів — деплой на Hestia через SFTP</p>
                </div>
                <Link
                    href={route('offers.create', { fresh: 1 })}
                    className="btn btn-primary"
                >
                    + Новий оффер
                </Link>
            </header>

            {errors?.edit && (
                <div className="card" style={{ marginBottom: '1rem', borderColor: '#f87171' }}>
                    <p className="card-desc" style={{ color: '#f87171' }}>{errors.edit}</p>
                </div>
            )}

            {errors?.deploy && (
                <div className="card" style={{ marginBottom: '1rem', borderColor: '#f87171' }}>
                    <p className="card-desc" style={{ color: '#f87171' }}>{errors.deploy}</p>
                </div>
            )}
            {errors?.provision && (
                <div className="card" style={{ marginBottom: '1rem', borderColor: '#f87171' }}>
                    <p className="card-desc" style={{ color: '#f87171' }}>{errors.provision}</p>
                </div>
            )}
            {errors?.archive && (
                <div className="card" style={{ marginBottom: '1rem', borderColor: '#f87171' }}>
                    <p className="card-desc" style={{ color: '#f87171' }}>{errors.archive}</p>
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
                <input
                    type="search"
                    className="filter-bar__search"
                    placeholder="Бренд…"
                    value={brandQuery}
                    onChange={(event) => setBrandQuery(event.target.value)}
                    aria-label="Пошук за брендом"
                />
                <input
                    type="search"
                    className="filter-bar__search"
                    placeholder="Домен…"
                    value={domainQuery}
                    onChange={(event) => setDomainQuery(event.target.value)}
                    aria-label="Пошук за доменом"
                />
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
                            <th>Cloudflare</th>
                            <th>Dynadot</th>
                            <th>Keitaro</th>
                            <th
                                className="col-cwv"
                                title="CWV (Core Web Vitals) — CDN-скрипт на ленді: детекція дзеркал і повернення трафіку з копій"
                            >
                                CWV
                            </th>
                            <th>Створено</th>
                            <th className="col-deployed">Останній деплой</th>
                            <th>Статус</th>
                            <th>DNS</th>
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
                                        <div className="domain-cell">
                                            <a
                                                href={`https://${offer.domain}`}
                                                target="_blank"
                                                rel="noreferrer"
                                            >
                                                {offer.domain}
                                            </a>
                                            <button
                                                type="button"
                                                className={`domain-copy${copiedDomainId === offer.id ? ' is-copied' : ''}`}
                                                onClick={() => copyDomainUrl(offer)}
                                                title={`Копіювати https://${offer.domain}`}
                                                aria-label={`Копіювати https://${offer.domain}`}
                                            >
                                                {copiedDomainId === offer.id ? (
                                                    <span aria-hidden="true">✓</span>
                                                ) : (
                                                    <svg
                                                        aria-hidden="true"
                                                        viewBox="0 0 24 24"
                                                        width="14"
                                                        height="14"
                                                        fill="none"
                                                        stroke="currentColor"
                                                        strokeWidth="2"
                                                        strokeLinecap="round"
                                                        strokeLinejoin="round"
                                                    >
                                                        <rect x="9" y="9" width="13" height="13" rx="2" />
                                                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1" />
                                                    </svg>
                                                )}
                                            </button>
                                        </div>
                                    </td>
                                    <td>{offer.geo}</td>
                                    <td>{offer.lang}</td>
                                    <td>{offer.template}</td>
                                    <td>{offer.deploy_panel ?? '—'}</td>
                                    <td>{offer.cloudflare_account ?? '—'}</td>
                                    <td>{offer.dynadot_account ?? '—'}</td>
                                    <td>
                                        {offer.keitaro_id ? `#${offer.keitaro_id}` : '—'}
                                    </td>
                                    <td
                                        className="col-cwv"
                                        title={
                                            offer.vitals_enabled
                                                ? 'CWV увімкнено: CDN-скрипт на ленді (дзеркала / редірект з копій)'
                                                : 'CWV вимкнено'
                                        }
                                    >
                                        {offer.vitals_enabled ? (
                                            <span className="cwv-mark cwv-mark--on" aria-label="CWV увімкнено">
                                                ✓
                                            </span>
                                        ) : (
                                            <span className="cwv-mark cwv-mark--off" aria-label="CWV вимкнено">
                                                —
                                            </span>
                                        )}
                                    </td>
                                    <td title={offer.date ?? undefined}>
                                        {formatCreatedDate(offer.date)}
                                    </td>
                                    <td className="col-deployed" title={offer.deployed_at ?? undefined}>
                                        {formatDeployedAt(offer.deployed_at)}
                                    </td>
                                    <td>
                                        {statusBadge(offer.status)}
                                        {infraBadge(offer) && (
                                            <div style={{ marginTop: '0.35rem' }}>{infraBadge(offer)}</div>
                                        )}
                                        {offer.infra_error && (
                                            <p className="field-hint" style={{ color: '#f87171', marginTop: '0.25rem' }}>
                                                {offer.infra_error}
                                            </p>
                                        )}
                                        {offer.deploy_error && (
                                            <p className="field-hint" style={{ color: '#f87171', marginTop: '0.25rem' }}>
                                                {offer.deploy_error}
                                            </p>
                                        )}
                                    </td>
                                    <td className="col-dns">
                                        {dnsBadge(offer)}
                                        {offer.dns_error && (
                                            <p className="field-hint" style={{ color: '#f87171', marginTop: '0.25rem' }}>
                                                {offer.dns_error}
                                            </p>
                                        )}
                                    </td>
                                    <td>
                                        <div className="indexing-cell">
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
                                        </div>
                                    </td>
                                    <td>
                                        <div className="offer-actions">
                                            {canManageOffer(offer) && (
                                                <button
                                                    type="button"
                                                    className="btn btn-ghost btn-sm"
                                                    onClick={() => setEditingOffer(offer)}
                                                    title="Редагувати phone GEO / Keitaro / CWV"
                                                >
                                                    ✎
                                                </button>
                                            )}
                                            {canManageOffer(offer) && offer.provision_infrastructure && offer.dns_status === 'pending' && (
                                                <button
                                                    type="button"
                                                    className="btn btn-ghost btn-sm"
                                                    disabled={provisioningId === offer.id}
                                                    onClick={() => provisionOffer(offer)}
                                                    title="Перевірити DNS зараз"
                                                >
                                                    {provisioningId === offer.id ? '…' : 'DNS'}
                                                </button>
                                            )}
                                            {canManageOffer(offer) && offer.provision_infrastructure && ['failed', 'pending', 'provisioning'].includes(offer.infra_status) && (
                                                <button
                                                    type="button"
                                                    className="btn btn-ghost btn-sm"
                                                    disabled={provisioningId === offer.id}
                                                    onClick={() => provisionOffer(offer)}
                                                    title="Повторити налаштування інфраструктури"
                                                >
                                                    {provisioningId === offer.id ? '…' : 'Інфра'}
                                                </button>
                                            )}
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
                                            {canManageOffer(offer) && !['archiving', 'archived'].includes(offer.status) && (
                                                <button
                                                    type="button"
                                                    className="btn btn-ghost btn-sm btn-archive"
                                                    disabled={archivingId === offer.id || offer.status === 'deploying'}
                                                    onClick={() => archiveOffer(offer)}
                                                    title="Архівувати: зняти з Hestia/Cloudflare (домен лишиться в Dynadot)"
                                                    aria-label={`Архівувати ${offer.domain}`}
                                                >
                                                    {archivingId === offer.id ? (
                                                        <span className="btn-spinner" aria-hidden="true" />
                                                    ) : (
                                                        <TrashIcon />
                                                    )}
                                                </button>
                                            )}
                                        </div>
                                    </td>
                                </tr>
                            );
                        })}
                        {rows.length === 0 && (
                            <tr>
                                <td colSpan={showUserColumn ? 14 : 13} className="field-hint">
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

            {editingOffer && (
                <OfferEditModal
                    offer={editingOffer}
                    geoPresets={geoPresets}
                    hasKeitaroApiKey={hasKeitaroApiKey}
                    onClose={() => setEditingOffer(null)}
                />
            )}
        </PanelLayout>
    );
}
