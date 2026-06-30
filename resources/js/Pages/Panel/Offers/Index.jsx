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

export default function OffersIndex({ offers, canDeploy, showUserColumn = false }) {
    const { flash, errors, auth } = usePage().props;
    const [geo, setGeo] = useState('');
    const [lang, setLang] = useState('');
    const [deployingId, setDeployingId] = useState(null);

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
        return true;
    });

    const deployOffer = (offer) => {
        setDeployingId(offer.id);
        router.post(route('offers.deploy', offer.id), {}, {
            preserveScroll: true,
            onFinish: () => setDeployingId(null),
        });
    };

    const canDeployOffer = (offer) => {
        if (!canDeploy) {
            return false;
        }

        if (!showUserColumn) {
            return true;
        }

        return offer.user_id === auth?.user?.id;
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
                                <td colSpan={showUserColumn ? 10 : 9} className="field-hint">
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
