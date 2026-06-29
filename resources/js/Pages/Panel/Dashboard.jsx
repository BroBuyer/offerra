import PanelLayout from '@/Layouts/PanelLayout';
import { Link } from '@inertiajs/react';

function StatusBadge({ status }) {
    const isLive = status === 'deployed' || status === 'На сервері';

    return (
        <span className={`badge${isLive ? '' : ' badge-ok'}`}>
            {isLive ? 'На сервері' : 'Згенеровано'}
        </span>
    );
}

export default function Dashboard({ stats, geoBars, recentOffers }) {
    const langPills = Object.entries(stats.lang_breakdown ?? {});

    return (
        <PanelLayout title="Дашборд" wide>
            <header className="page-header">
                <h2>Дашборд</h2>
                <p className="dashboard-date">
                    Дані з <code>offers/</code> · оновлено зараз
                </p>
            </header>

            <div className="quick-actions">
                <Link href={route('offers.create', { fresh: 1 })} className="btn btn-primary">
                    + Новий оффер
                </Link>
                <Link href={route('offers.index')} className="btn btn-ghost">
                    Всі оффери
                </Link>
                <Link href={route('templates.index')} className="btn btn-ghost">
                    Шаблони
                </Link>
            </div>

            <div className="dashboard-kpi-grid">
                <div className="kpi-card">
                    <div className="kpi-card-label">Згенеровано сьогодні</div>
                    <div className="kpi-card-value accent">{stats.generated_today}</div>
                    <div className="kpi-card-sub up">з папок offers/</div>
                </div>
                <div className="kpi-card">
                    <div className="kpi-card-label">Задеплоєно</div>
                    <div className="kpi-card-value">{stats.deployed}</div>
                    <div className="kpi-card-sub">лог деплою — скоро</div>
                </div>
                <div className="kpi-card">
                    <div className="kpi-card-label">Всього офферів</div>
                    <div className="kpi-card-value">{stats.total}</div>
                    <div className="kpi-card-sub">без example/</div>
                </div>
                <div className="kpi-card">
                    <div className="kpi-card-label">Очікують деплой</div>
                    <div className="kpi-card-value">{stats.pending_deploy}</div>
                    <div className="kpi-card-sub">згенеровано, не на сервері</div>
                </div>
            </div>

            <div className="dashboard-kpi-grid" style={{ marginBottom: '1.5rem' }}>
                <div className="kpi-card">
                    <div className="kpi-card-label">Keitaro підключено</div>
                    <div className="kpi-card-value">{stats.keitaro_linked}</div>
                    <div className="kpi-card-sub">з config.php</div>
                </div>
                <div className="kpi-card">
                    <div className="kpi-card-label">Унікальних GEO</div>
                    <div className="kpi-card-value">{stats.unique_geos}</div>
                </div>
                <div className="kpi-card">
                    <div className="kpi-card-label">Мов на лендах</div>
                    <div className="kpi-card-value">{stats.unique_langs}</div>
                </div>
                <div className="kpi-card">
                    <div className="kpi-card-label">Ліди сьогодні (TG)</div>
                    <div className="kpi-card-value accent">—</div>
                    <div className="kpi-card-sub">скоро</div>
                </div>
            </div>

            <div className="dashboard-two-col">
                <section className="card">
                    <h3>Оффери по GEO</h3>
                    <p className="card-desc" style={{ marginBottom: '1rem' }}>
                        Розподіл згенерованих лендів
                    </p>
                    <div className="bar-chart">
                        {geoBars.map((bar) => (
                            <div className="bar-row" key={bar.geo}>
                                <span>{bar.geo}</span>
                                <div className="bar-track">
                                    <div
                                        className="bar-fill"
                                        style={{ width: `${bar.width}%` }}
                                    />
                                </div>
                                <span>{bar.count}</span>
                            </div>
                        ))}
                        {geoBars.length === 0 && (
                            <p className="field-hint">Офферів не знайдено</p>
                        )}
                    </div>
                </section>

                <section className="card">
                    <h3>Статуси</h3>
                    <p className="card-desc" style={{ marginBottom: '1rem' }}>
                        Життєвий цикл оффера
                    </p>
                    <div className="status-legend">
                        <div className="status-item">
                            <span className="status-dot green" />
                            <span>На сервері (live)</span>
                            <strong>{stats.deployed}</strong>
                        </div>
                        <div className="status-item">
                            <span className="status-dot yellow" />
                            <span>Згенеровано · не задеплоєно</span>
                            <strong>{stats.pending_deploy}</strong>
                        </div>
                    </div>
                </section>
            </div>

            <div className="dashboard-two-col">
                <section className="card">
                    <h3>Останні оффери</h3>
                    <ul className="activity-list">
                        {recentOffers.map((offer) => (
                            <li className="activity-item" key={offer.domain}>
                                <span className="activity-time">{offer.date}</span>
                                <span className="activity-text">
                                    <strong>{offer.brand}</strong>
                                    {' · '}
                                    {offer.geo} · {offer.lang}
                                    {offer.keitaro_id ? ` · Keitaro #${offer.keitaro_id}` : ''}
                                </span>
                            </li>
                        ))}
                        {recentOffers.length === 0 && (
                            <li className="activity-item">
                                <span className="activity-text field-hint">
                                    Папок у offers/ не знайдено
                                </span>
                            </li>
                        )}
                    </ul>
                </section>

                <section className="card">
                    <h3>Мови в портфелі</h3>
                    <p className="card-desc" style={{ marginBottom: '1rem' }}>
                        Скільки офферів на кожній мові
                    </p>
                    <div className="lang-pills">
                        {langPills.map(([lang, count]) => (
                            <span className="lang-pill" key={lang}>
                                <span>{count}</span> {lang}
                            </span>
                        ))}
                    </div>
                </section>
            </div>
        </PanelLayout>
    );
}
