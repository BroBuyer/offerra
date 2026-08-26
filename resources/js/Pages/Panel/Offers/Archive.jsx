import PanelLayout from '@/Layouts/PanelLayout';
import { Link, router, usePage } from '@inertiajs/react';
import { useState } from 'react';

function formatArchivedAt(value) {
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

    return `${day}.${month}.${year}${time ? ` ${time}` : ''}`;
}

function statusBadge(status) {
    switch (status) {
        case 'archived':
            return <span className="badge badge-ok">В архіві</span>;
        case 'teardown_failed':
            return <span className="badge badge-error">Помилка</span>;
        default:
            return <span className="badge">{status}</span>;
    }
}

export default function Archive({ offers, filters, perPageOptions, showUserColumn, users }) {
    const { auth, errors } = usePage().props;
    const rows = offers?.data ?? [];
    const [retryingId, setRetryingId] = useState(null);
    const [copiedDomainId, setCopiedDomainId] = useState(null);

    const currentPage = offers?.current_page ?? 1;
    const lastPage = offers?.last_page ?? 1;

    const copyDomain = async (offer) => {
        const text = offer.domain;
        try {
            await navigator.clipboard.writeText(text);
        } catch {
            const textarea = document.createElement('textarea');
            textarea.value = text;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
        }
        setCopiedDomainId(offer.id);
        window.setTimeout(() => setCopiedDomainId((id) => (id === offer.id ? null : id)), 2000);
    };

    const retryArchive = (offer) => {
        setRetryingId(offer.id);
        router.post(route('offers.archive.retry', offer.id), {}, {
            preserveScroll: true,
            onFinish: () => setRetryingId(null),
        });
    };

    const reloadPage = (page) => {
        const params = { ...filters, page };
        Object.keys(params).forEach((key) => {
            if (params[key] === '' || params[key] === null || params[key] === undefined) {
                delete params[key];
            }
        });
        if (page <= 1) {
            delete params.page;
        }
        router.get(route('offers.archive.index'), params, { preserveState: true, preserveScroll: true });
    };

    return (
        <PanelLayout title="Архів доменів" fullWidth>
            <div className="offers-page">
                <header className="page-header">
                    <h2>Архів доменів</h2>
                    <p>
                        Оффери зняті з origin-сервера і Cloudflare. Домен лишається в Dynadot — можна перепродати вручну.
                    </p>
                    <p className="field-hint" style={{ marginTop: '0.5rem' }}>
                        <Link href={route('offers.index')}>← До активних офферів</Link>
                    </p>
                </header>

                {errors?.archive && (
                    <div className="card" style={{ marginBottom: '1rem', borderColor: '#f87171' }}>
                        <p className="card-desc" style={{ color: '#f87171' }}>{errors.archive}</p>
                    </div>
                )}

                <div className="table-wrap">
                    <table className="data-table offers-table">
                        <thead>
                            <tr>
                                {showUserColumn && <th>Користувач</th>}
                                <th>Домен</th>
                                <th>Бренд</th>
                                <th>GEO</th>
                                <th>Статус</th>
                                <th>Архівовано</th>
                                <th>Дії</th>
                            </tr>
                        </thead>
                        <tbody>
                            {rows.map((offer) => {
                                const teardownErrors = offer.teardown_meta?.errors ?? [];
                                return (
                                    <tr key={offer.id}>
                                        {showUserColumn && (
                                            <td>
                                                <span className="field-hint">{offer.user_name ?? '—'}</span>
                                            </td>
                                        )}
                                        <td>
                                            <div className="domain-cell">
                                                <span className="domain-cell__name">{offer.domain}</span>
                                                <button
                                                    type="button"
                                                    className={`domain-copy${copiedDomainId === offer.id ? ' is-copied' : ''}`}
                                                    onClick={() => copyDomain(offer)}
                                                    title="Скопіювати домен"
                                                    aria-label={`Скопіювати ${offer.domain}`}
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
                                        <td>{offer.brand}</td>
                                        <td>{offer.geo}</td>
                                        <td>
                                            {statusBadge(offer.status)}
                                            {teardownErrors.length > 0 && (
                                                <p className="field-hint" style={{ color: '#f87171', marginTop: '0.25rem' }}>
                                                    {teardownErrors.join(' · ')}
                                                </p>
                                            )}
                                        </td>
                                        <td>{formatArchivedAt(offer.archived_at)}</td>
                                        <td>
                                            <div className="offer-actions">
                                                {offer.status === 'teardown_failed' && (
                                                    <button
                                                        type="button"
                                                        className="btn btn-ghost btn-sm"
                                                        disabled={retryingId === offer.id}
                                                        onClick={() => retryArchive(offer)}
                                                    >
                                                        {retryingId === offer.id ? '…' : 'Повтор'}
                                                    </button>
                                                )}
                                            </div>
                                        </td>
                                    </tr>
                                );
                            })}
                            {rows.length === 0 && (
                                <tr>
                                    <td colSpan={showUserColumn ? 7 : 6} className="field-hint">
                                        Архів порожній
                                    </td>
                                </tr>
                            )}
                        </tbody>
                    </table>
                </div>

                {lastPage > 1 && (
                    <nav className="pagination-bar" aria-label="Сторінки архіву">
                        <button
                            type="button"
                            className="btn btn-ghost btn-sm"
                            disabled={currentPage <= 1}
                            onClick={() => reloadPage(currentPage - 1)}
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
                            onClick={() => reloadPage(currentPage + 1)}
                        >
                            Далі →
                        </button>
                    </nav>
                )}
            </div>
        </PanelLayout>
    );
}
