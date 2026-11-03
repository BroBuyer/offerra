import SecretInput from '@/Components/SecretInput';
import PanelLayout from '@/Layouts/PanelLayout';
import { router, useForm, usePage } from '@inertiajs/react';
import { useState } from 'react';

function statusBadge(state) {
    const map = {
        ok: { label: 'OK', color: '#16a34a' },
        degraded: { label: 'Застарілий', color: '#ca8a04' },
        down: { label: 'Немає знімка', color: '#dc2626' },
        unchecked: { label: '—', color: '#6b7280' },
    };
    const item = map[state] || map.unchecked;

    return (
        <span style={{ color: item.color, fontWeight: 600 }}>
            {item.label}
        </span>
    );
}

function formatWhen(value) {
    if (!value) {
        return '—';
    }
    try {
        return new Date(value).toLocaleString('uk-UA', { timeZone: 'Europe/Kyiv' });
    } catch {
        return value;
    }
}

function paidUntilView(server) {
    const raw = server?.paid_until;
    if (!raw) {
        return { label: 'не вказано', tone: '' };
    }
    const days = Number.isFinite(server.days_until_paid) ? server.days_until_paid : null;
    let dateLabel = raw;
    try {
        dateLabel = new Date(`${raw}T00:00:00`).toLocaleDateString('uk-UA');
    } catch {
        dateLabel = raw;
    }
    if (days === 1) {
        return { label: `${dateLabel} · завтра`, tone: 'due' };
    }
    if (days === 0) {
        return { label: `${dateLabel} · сьогодні`, tone: 'due' };
    }
    if (days !== null && days < 0) {
        return { label: `${dateLabel} · прострочено`, tone: 'due' };
    }
    if (days !== null && days <= 7) {
        return { label: dateLabel, tone: 'soon' };
    }

    return { label: dateLabel, tone: '' };
}

function emptyForm(server) {
    return {
        host: server?.host ?? '',
        port: server?.port ?? 22,
        username: server?.username || 'root',
        password: server?.password ?? '',
        label: server?.label ?? '',
        hoster: server?.hoster ?? '',
        cpu: server?.cpu ?? '',
        ram: server?.ram ?? '',
        disk: server?.disk ?? '',
        price: server?.price ?? '',
        paid_until: server?.paid_until ?? '',
        alerts_enabled: server?.alerts_enabled !== false,
    };
}

export default function BackupIndex({ server = null }) {
    const { flash, errors = {} } = usePage().props;
    const [checking, setChecking] = useState(false);
    const form = useForm(emptyForm(server));

    const submit = (e) => {
        e.preventDefault();
        const url = server?.id ? route('backup.update', server.id) : route('backup.store');
        form.post(url, { preserveScroll: true });
    };

    const check = () => {
        if (!server?.id || checking) {
            return;
        }
        setChecking(true);
        router.post(route('backup.check', server.id), {}, {
            preserveScroll: true,
            onFinish: () => setChecking(false),
        });
    };

    const paid = paidUntilView(server);
    const status = server?.status || {};

    return (
        <PanelLayout title="Бекап">
            <header className="page-header">
                <div>
                    <h2>Бекап-сервер</h2>
                    <p>
                        Окремий VPS, куди щоночі йде зашифрований restic-знімок панелі:
                        PostgreSQL, <code>.env</code> і <code>storage/app</code>.
                        Це не origin і не в пулі оферів.
                    </p>
                </div>
            </header>

            {flash?.success && (
                <div className="card" style={{ marginBottom: '1rem' }}>
                    <p className="card-desc">{flash.success}</p>
                </div>
            )}

            {server && (
                <section className="card" style={{ marginBottom: '1rem' }}>
                    <div className="btn-row" style={{ justifyContent: 'space-between', alignItems: 'center' }}>
                        <h3 style={{ margin: 0 }}>Останній прогін</h3>
                        <button type="button" className="btn btn-primary btn-sm" onClick={check} disabled={checking}>
                            {checking ? 'Перевірка…' : 'Оновити статус'}
                        </button>
                    </div>
                    <dl className="backup-status-grid">
                        <div>
                            <dt>Статус</dt>
                            <dd>{statusBadge(status.state)}</dd>
                        </div>
                        <div>
                            <dt>Останній успішний</dt>
                            <dd>{formatWhen(status.last_ok_at)}</dd>
                        </div>
                        <div>
                            <dt>Останній знімок</dt>
                            <dd>{formatWhen(status.latest_snapshot_at)}</dd>
                        </div>
                        <div>
                            <dt>Знімків</dt>
                            <dd>{status.snapshots || 0} (тримати {status.keep_daily || 14} днів)</dd>
                        </div>
                        <div>
                            <dt>Розмір</dt>
                            <dd>{status.size || '—'}</dd>
                        </div>
                        <div>
                            <dt>Розклад</dt>
                            <dd>{status.cron || 'щодня о 03:15 (Київ)'}</dd>
                        </div>
                        <div>
                            <dt>Оплачено до</dt>
                            <dd>
                                <span className={paid.tone ? `origin-paid origin-paid--${paid.tone}` : undefined}>
                                    {paid.label}
                                </span>
                            </dd>
                        </div>
                    </dl>
                    {status.message && <p className="field-hint">{status.message}</p>}
                </section>
            )}

            <section className="card">
                <h3>{server ? 'Кредити і оплата' : 'Додати бекап-сервер'}</h3>
                <p className="card-desc">
                    SSH сюди потрібен, щоб зайти на ящик. Нічний бекап іде ключем
                    <code> offerra-backup</code>, пароль restic у панелі не світиться.
                </p>
                <form onSubmit={submit} autoComplete="off">
                    <div className="field-row">
                        <div className="field">
                            <label htmlFor="backup-host">Host / IP</label>
                            <input
                                id="backup-host"
                                value={form.data.host}
                                onChange={(e) => form.setData('host', e.target.value)}
                                required
                                autoComplete="off"
                            />
                            {errors.host && <p className="field-hint" style={{ color: '#f87171' }}>{errors.host}</p>}
                        </div>
                        <div className="field">
                            <label htmlFor="backup-port">SSH port</label>
                            <input
                                id="backup-port"
                                type="number"
                                value={form.data.port}
                                onChange={(e) => form.setData('port', e.target.value)}
                            />
                        </div>
                        <div className="field">
                            <label htmlFor="backup-user">SSH user</label>
                            <input
                                id="backup-user"
                                value={form.data.username}
                                onChange={(e) => form.setData('username', e.target.value)}
                                autoComplete="off"
                            />
                        </div>
                    </div>
                    <div className="field-row">
                        <div className="field">
                            <label htmlFor="backup-pass">SSH пароль</label>
                            <SecretInput
                                id="backup-pass"
                                value={form.data.password}
                                onChange={(e) => form.setData('password', e.target.value)}
                                autoComplete="new-password"
                                data-1p-ignore="true"
                                placeholder={server?.has_password ? 'збережений' : 'пароль'}
                            />
                        </div>
                        <div className="field">
                            <label htmlFor="backup-hoster">Хостер</label>
                            <input
                                id="backup-hoster"
                                value={form.data.hoster}
                                onChange={(e) => form.setData('hoster', e.target.value)}
                                placeholder="AlexHost / …"
                            />
                        </div>
                        <div className="field">
                            <label htmlFor="backup-paid">Оплачено до</label>
                            <input
                                id="backup-paid"
                                type="date"
                                value={form.data.paid_until}
                                onChange={(e) => form.setData('paid_until', e.target.value)}
                            />
                        </div>
                    </div>
                    <div className="field-row">
                        <div className="field">
                            <label htmlFor="backup-label">Мітка</label>
                            <input
                                id="backup-label"
                                value={form.data.label}
                                onChange={(e) => form.setData('label', e.target.value)}
                            />
                        </div>
                        <div className="field">
                            <label htmlFor="backup-cpu">CPU</label>
                            <input
                                id="backup-cpu"
                                value={form.data.cpu}
                                onChange={(e) => form.setData('cpu', e.target.value)}
                            />
                        </div>
                        <div className="field">
                            <label htmlFor="backup-ram">RAM</label>
                            <input
                                id="backup-ram"
                                value={form.data.ram}
                                onChange={(e) => form.setData('ram', e.target.value)}
                            />
                        </div>
                        <div className="field">
                            <label htmlFor="backup-disk">Диск</label>
                            <input
                                id="backup-disk"
                                value={form.data.disk}
                                onChange={(e) => form.setData('disk', e.target.value)}
                            />
                        </div>
                        <div className="field">
                            <label htmlFor="backup-price">Ціна</label>
                            <input
                                id="backup-price"
                                value={form.data.price}
                                onChange={(e) => form.setData('price', e.target.value)}
                                placeholder="€5"
                            />
                        </div>
                    </div>
                    <label className="field" style={{ display: 'flex', alignItems: 'center', gap: '0.5rem' }}>
                        <input
                            type="checkbox"
                            checked={Boolean(form.data.alerts_enabled)}
                            onChange={(e) => form.setData('alerts_enabled', e.target.checked)}
                        />
                        Telegram за день до кінця оплати
                    </label>
                    <div className="btn-row" style={{ marginTop: '1rem' }}>
                        <button type="submit" className="btn btn-primary" disabled={form.processing}>
                            {form.processing ? 'Збереження…' : 'Зберегти'}
                        </button>
                    </div>
                </form>
            </section>
        </PanelLayout>
    );
}
