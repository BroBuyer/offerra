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

export default function OffersIndex({
    offers,
    canDeploy,
    showUserColumn = false,
    users = [],
    selectedUserId = null,
}) {
    const { flash, errors, auth } = usePage().props;
    const [geo, setGeo] = useState('');
    const [lang, setLang] = useState('');
    const [indexing, setIndexing] = useState('');
    const [userId, setUserId] = useState(selectedUserId ? String(selectedUserId) : '');
    const [deployingId, setDeployingId] = useState(null);
    const [indexingId, setIndexingId] = useState(null);

    useEffect(() => {
        if (flash?.success) {
            clearWizardState();
        }
    }, [flash?.success]);

    const geos = useMemo(
        () => [...new Set(offers.map((o) => o.geo))].sort(),
        [offers],
    );
    const langs = useMemo(
        () => [...new Set(offers.map((o) => o.lang))].sort(),
        [offers],
    );

    const filtered = offers.filter((offer) => {
        if (geo && offer.geo !== geo) return false;
        if (lang && offer.lang !== lang) return false;
        if (userId && String(offer.user_id) !== userId) return false;
        if (indexing === 'yes' && !offer.submitted_for_indexing) return false;
        if (indexing === 'no' && offer.submitted_for_indexing) return false;
        return true;
    });

    const changeUserFilter = (nextUserId) => {
        setUserId(nextUserId);
        router.get(
            route('offers.index', nextUserId ? { user: nextUserId } : {}),
            {},
            { preserveState: true, replace: true },
        );
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

            <div className="filter-bar">
                <select
                    aria-label="GEO"
                    value={geo}
                    onChange={(e) => setGeo(e.target.value)}
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
                    value={lang}
                    onChange={(e) => setLang(e.target.value)}
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
                        value={userId}
                        onChange={(e) => changeUserFilter(e.target.value)}
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
                    value={indexing}
                    onChange={(e) => setIndexing(e.target.value)}
                >
                    <option value="">Уся індексація</option>
                    <option value="no">Не подано</option>
                    <option value="yes">Подано</option>
                </select>
                <Link
                    href={route('offers.create', { fresh: 1 })}
                    className="btn btn-primary"
                    style={{ marginLeft: 'auto' }}
                >
                    + Новий оффер
                </Link>
            </div>

            <div className="table-wrap">
                <table>
                    <thead>
                        <tr>
                            {showUserColumn && <th>Користувач</th>}
                            <th>Бренд</th>
                            <th>Домен</th>
                            <th>GEO</th>
                            <th>Мова</th>
                            <th>Шаблон</th>
                            <th>Панель</th>
                            <th>Keitaro</th>
                            <th>Статус</th>
                            <th>Індексація</th>
                            <th />
                        </tr>
                    </thead>
                    <tbody>
                        {filtered.map((offer) => {
                            const isDeploying = offer.status === 'deploying' || deployingId === offer.id;

                            return (
                                <tr key={offer.folder}>
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
                                                className="btn btn-ghost btn-sm"
                                                disabled={isDeploying && offer.status === 'deploying'}
                                                onClick={() => deployOffer(offer)}
                                            >
                                                {isDeploying && offer.status !== 'failed'
                                                    ? '…'
                                                    : offer.status === 'deployed'
                                                      ? '↻'
                                                      : offer.status === 'failed'
                                                        ? 'Повтор'
                                                        : 'Деплой'}
                                            </button>
                                        ) : (
                                            <span className="field-hint">—</span>
                                        )}
                                    </td>
                                </tr>
                            );
                        })}
                        {filtered.length === 0 && (
                            <tr>
                                <td colSpan={showUserColumn ? 11 : 10} className="field-hint">
                                    Офферів не знайдено
                                </td>
                            </tr>
                        )}
                    </tbody>
                </table>
            </div>
            </div>
        </PanelLayout>
    );
}
