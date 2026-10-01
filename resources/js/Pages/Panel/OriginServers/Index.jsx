import SecretInput from '@/Components/SecretInput';
import PanelLayout from '@/Layouts/PanelLayout';
import { router, useForm, usePage } from '@inertiajs/react';
import { useEffect, useState } from 'react';

function statusBadge(status) {
    const map = {
        ok: { label: 'OK', color: '#16a34a' },
        degraded: { label: 'Degraded', color: '#ca8a04' },
        down: { label: 'Down', color: '#dc2626' },
        unchecked: { label: '—', color: '#6b7280' },
    };
    const item = map[status] || map.unchecked;

    return (
        <span style={{ color: item.color, fontWeight: 600 }}>
            {item.label}
        </span>
    );
}

function formatCheckedAt(value) {
    if (!value) {
        return 'ніколи';
    }
    try {
        return new Date(value).toLocaleString('uk-UA');
    } catch {
        return value;
    }
}

function formErrorList(formErrors) {
    return Object.values(formErrors || {}).flat().filter(Boolean);
}

const ROLE_LABELS = {
    pool: 'Пул',
    spare: 'Запасний',
    drain: 'Звільняється',
};

const ROLE_COLORS = {
    pool: '#16a34a',
    spare: '#2563eb',
    drain: '#ca8a04',
};

function roleBadge(role, acceptsNewOffers) {
    const key = ROLE_LABELS[role] ? role : 'pool';

    return (
        <>
            <span style={{ color: ROLE_COLORS[key], fontWeight: 600 }}>{ROLE_LABELS[key]}</span>
            {key === 'pool' && !acceptsNewOffers && (
                <div className="field-hint" style={{ color: '#ca8a04' }}>не приймає нові</div>
            )}
        </>
    );
}

function PlusIcon() {
    return (
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" aria-hidden>
            <path d="M12 5v14M5 12h14" strokeLinecap="round" />
        </svg>
    );
}

const emptyCreate = (defaultPath) => ({
    host: '',
    port: 22,
    username: 'root',
    password: '',
    label: '',
    cpu: '',
    ram: '',
    disk: '',
    price: '',
    hoster: '',
    deploy_path_template: defaultPath,
    role: 'pool',
    max_offers: '',
    is_active: true,
    alerts_enabled: true,
});

export default function OriginServersIndex({
    servers = [],
    orphans = [],
    defaultPath = '/var/www/offers/{domain}/public_html',
    poolSummary = null,
    roles = ['pool', 'spare', 'drain'],
}) {
    const { flash, errors = {} } = usePage().props;
    const [busyId, setBusyId] = useState(null);
    const [editingId, setEditingId] = useState(null);
    const [createOpen, setCreateOpen] = useState(false);
    const [syncing, setSyncing] = useState(false);
    const [checkingAll, setCheckingAll] = useState(false);
    const [savingEdit, setSavingEdit] = useState(false);
    const [savingCreate, setSavingCreate] = useState(false);
    const [submitError, setSubmitError] = useState('');

    const createForm = useForm(emptyCreate(defaultPath));

    const [editData, setEditData] = useState({
        host: '',
        port: 22,
        username: 'root',
        password: '',
        label: '',
        cpu: '',
        ram: '',
        disk: '',
        price: '',
        hoster: '',
        deploy_path_template: defaultPath,
        role: 'pool',
        max_offers: '',
        is_active: true,
        alerts_enabled: true,
        has_password: false,
    });

    const setEditField = (key, value) => {
        setEditData((prev) => ({ ...prev, [key]: value }));
    };

    const openCreate = () => {
        setSubmitError('');
        createForm.clearErrors();
        createForm.setData(emptyCreate(defaultPath));
        setCreateOpen(true);
    };

    const closeCreate = () => {
        if (savingCreate) {
            return;
        }
        setCreateOpen(false);
        setSubmitError('');
    };

    useEffect(() => {
        if (!createOpen) {
            return undefined;
        }
        const onKey = (e) => {
            if (e.key === 'Escape') {
                closeCreate();
            }
        };
        window.addEventListener('keydown', onKey);
        return () => window.removeEventListener('keydown', onKey);
    }, [createOpen, savingCreate]);

    const submitCreate = (e) => {
        e.preventDefault();
        const data = createForm.data;
        const host = String(data.host || '').trim();
        if (!host) {
            setSubmitError('Вкажіть Host / IP');
            return;
        }
        if (!String(data.username || '').trim()) {
            setSubmitError('Вкажіть SSH user');
            return;
        }
        if (!String(data.password || '').trim()) {
            setSubmitError('Вкажіть SSH password');
            return;
        }

        const payload = {
            host,
            port: Number(data.port) || 22,
            username: String(data.username || '').trim(),
            password: String(data.password || ''),
            label: String(data.label || '').trim(),
            cpu: String(data.cpu || '').trim() || null,
            ram: String(data.ram || '').trim() || null,
            disk: String(data.disk || '').trim() || null,
            price: String(data.price || '').trim() || null,
            hoster: String(data.hoster || '').trim() || null,
            deploy_path_template: String(data.deploy_path_template || defaultPath),
            role: String(data.role || 'pool'),
            max_offers: Number(data.max_offers) || 0,
            is_active: Boolean(data.is_active),
            alerts_enabled: Boolean(data.alerts_enabled),
        };

        setSubmitError('');
        createForm.clearErrors();
        setSavingCreate(true);

        router.post(route('origin-servers.store'), payload, {
            preserveScroll: true,
            onSuccess: () => {
                createForm.reset();
                createForm.setData(emptyCreate(defaultPath));
                setCreateOpen(false);
                setSubmitError('');
            },
            onError: (errs) => {
                setSubmitError(formErrorList(errs)[0] || 'Не вдалося додати сервер');
            },
            onFinish: () => setSavingCreate(false),
        });
    };

    const startEdit = (server) => {
        setSubmitError('');
        setEditingId(server.id);
        setEditData({
            host: server.host ?? '',
            port: server.port ?? 22,
            username: server.username || 'root',
            password: server.password ?? '',
            label: server.label ?? '',
            cpu: server.cpu ?? '',
            ram: server.ram ?? '',
            disk: server.disk ?? '',
            price: server.price ?? '',
            hoster: server.hoster ?? '',
            deploy_path_template: server.deploy_path_template || defaultPath,
            role: server.role || 'pool',
            max_offers: server.max_offers ? String(server.max_offers) : '',
            is_active: server.is_active !== false,
            alerts_enabled: server.alerts_enabled !== false,
            has_password: Boolean(server.has_password || server.has_ssh || server.password),
        });
    };

    const submitEdit = (e) => {
        e.preventDefault();
        if (!editingId) {
            setSubmitError('Не вибрано сервер для редагування');
            return;
        }

        const password = String(editData.password || '').trim();
        const payload = {
            host: String(editData.host || '').trim(),
            port: Number(editData.port) || 22,
            username: String(editData.username || '').trim(),
            password,
            label: String(editData.label || ''),
            cpu: String(editData.cpu || '').trim(),
            ram: String(editData.ram || '').trim(),
            disk: String(editData.disk || '').trim(),
            price: String(editData.price || '').trim(),
            hoster: String(editData.hoster || '').trim(),
            deploy_path_template: String(editData.deploy_path_template || defaultPath),
            role: String(editData.role || 'pool'),
            max_offers: Number(editData.max_offers) || 0,
            is_active: Boolean(editData.is_active),
            alerts_enabled: Boolean(editData.alerts_enabled),
        };

        if (!payload.host) {
            setSubmitError('Вкажіть Host / IP');
            return;
        }
        if (!payload.username) {
            setSubmitError('Вкажіть SSH user (зазвичай root)');
            return;
        }
        if (!password && !editData.has_password) {
            setSubmitError('Введіть SSH-пароль (покажіть оком і переконайтесь, що символи видно).');
            return;
        }

        setSubmitError('');
        setSavingEdit(true);

        router.post(route('origin-servers.update', editingId), payload, {
            preserveScroll: true,
            onSuccess: () => {
                setEditingId(null);
                setSubmitError('');
                setEditData((prev) => ({ ...prev, password: '' }));
            },
            onError: (errs) => {
                const list = formErrorList(errs);
                setSubmitError(list.join(' · ') || 'Не вдалося зберегти. Перевірте поля.');
            },
            onFinish: () => setSavingEdit(false),
        });
    };

    const runCheck = (server) => {
        setBusyId(server.id);
        router.post(route('origin-servers.check', server.id), {}, {
            preserveScroll: true,
            onFinish: () => setBusyId(null),
        });
    };

    const evacuateServer = (server) => {
        const confirmText = server.offers_count > 0
            ? `Перенести ${server.offers_count} оферів з ${server.host} на інші сервери пулу?`
            + '\n\nСервер буде позначено «Звільняється», оффери — перезадеплоєні й перепривʼязані в Cloudflare.'
            : `На ${server.host} немає активних оферів. Позначити сервер як «Звільняється»?`;

        if (!window.confirm(confirmText)) {
            return;
        }

        setBusyId(server.id);
        router.post(route('origin-servers.evacuate', server.id), {}, {
            preserveScroll: true,
            onFinish: () => setBusyId(null),
        });
    };

    const removeServer = (server) => {
        const confirmText = server.offers_count > 0
            ? `Видалити ${server.host} з реєстру?\n\n${server.offers_count} оферів будуть евакуйовані на інші сервери пулу.`
            : `Видалити ${server.host} з реєстру?`;

        if (!window.confirm(confirmText)) {
            return;
        }
        setBusyId(server.id);
        setSubmitError('');
        router.delete(route('origin-servers.destroy', server.id), {
            preserveScroll: true,
            onError: (errs) => {
                const list = formErrorList(errs);
                setSubmitError(list.join(' · ') || 'Не вдалося видалити сервер.');
            },
            onFinish: () => setBusyId(null),
        });
    };

    const syncRegistry = () => {
        setSyncing(true);
        router.post(route('origin-servers.sync'), {}, {
            preserveScroll: true,
            onFinish: () => setSyncing(false),
        });
    };

    const checkAll = () => {
        setCheckingAll(true);
        router.post(route('origin-servers.check-all'), {}, {
            preserveScroll: true,
            onFinish: () => setCheckingAll(false),
        });
    };

    return (
        <PanelLayout title="Origin-сервери" wide>
            <header className="page-header origin-servers-header">
                <div>
                    <h2>Origin-сервери</h2>
                    <p>
                        Єдиний пул серверів для всіх юзерів. Нові оффери однієї воронки
                        (бренд) розкидаються по різних серверах з роллю «Пул»; якщо IP
                        забанять, решта доменів бренду лишаються на інших. «Запасні»
                        моніторяться, але нових оферів не отримують. Якщо сервер падає —
                        «Evacuate» розкидає його оффери по решті пулу.
                    </p>
                </div>
                <button
                    type="button"
                    className="btn btn-primary origin-servers-add-btn"
                    onClick={openCreate}
                    title="Додати сервер"
                    aria-label="Додати сервер"
                >
                    <PlusIcon />
                </button>
            </header>

            {(flash?.success) && (
                <div className="card" style={{ marginBottom: '1rem' }}>
                    <p className="card-desc">{flash.success}</p>
                </div>
            )}

            {(submitError || errors.delete || errors.evacuate) && !createOpen && (
                <div className="card" style={{ marginBottom: '1rem', borderColor: '#f87171' }}>
                    <p className="card-desc" style={{ color: '#f87171' }}>
                        {submitError || errors.delete || errors.evacuate}
                    </p>
                </div>
            )}

            {poolSummary && (
                <section
                    className="card"
                    style={{ marginBottom: '1rem', borderColor: poolSummary.accepting > 0 ? undefined : '#f87171' }}
                >
                    <h3>Пул</h3>
                    <p className="card-desc">
                        {poolSummary.accepting > 0 ? (
                            <>
                                Приймають нові оффери: <strong>{poolSummary.accepting}</strong>
                                {' · запасних: '}
                                <strong>{poolSummary.spare}</strong>
                                {poolSummary.drain > 0 ? ` · звільняється: ${poolSummary.drain}` : ''}
                                {' · оферів у пулі: '}
                                <strong>{poolSummary.offers}</strong>
                                {poolSummary.capacity != null ? ` · вільних місць: ${poolSummary.capacity}` : ''}
                                {poolSummary.next_host
                                    ? ` · найменш завантажений: ${poolSummary.next_host}`
                                    : ''}
                            </>
                        ) : (
                            <span style={{ color: '#f87171' }}>
                                Жоден сервер не приймає нові оффери — створення й деплой зупиняться.
                                Додайте сервер або переведіть запасний у роль «Пул».
                            </span>
                        )}
                    </p>
                </section>
            )}

            <div className="btn-row" style={{ marginBottom: '1rem' }}>
                <button type="button" className="btn btn-primary" onClick={checkAll} disabled={checkingAll}>
                    {checkingAll ? 'Перевірка…' : 'Перевірити всі'}
                </button>
                <button type="button" className="btn btn-ghost" onClick={syncRegistry} disabled={syncing}>
                    {syncing ? 'Синхронізація…' : 'Синхронізувати з settings/офферами'}
                </button>
            </div>

            {orphans.length > 0 && (
                <section className="card" style={{ marginBottom: '1.5rem', borderColor: '#f59e0b' }}>
                    <h3>Оффери на хостах без SSH у реєстрі</h3>
                    <p className="card-desc">
                        Додайте пароль і увімкніть сервер — інакше моніторинг лише TCP/HTTP.
                    </p>
                    <ul style={{ margin: 0, paddingLeft: '1.2rem' }}>
                        {orphans.map((row) => (
                            <li key={row.host}>
                                <code>{row.host}</code>
                                {' · '}
                                {row.offers_count}
                                {' офферів'}
                            </li>
                        ))}
                    </ul>
                </section>
            )}

            <div className="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Сервер</th>
                            <th>Хостер</th>
                            <th>CPU</th>
                            <th>RAM</th>
                            <th>Диск</th>
                            <th>Ціна</th>
                            <th>Роль</th>
                            <th>Статус</th>
                            <th>Офферів</th>
                            <th>SSH</th>
                            <th />
                        </tr>
                    </thead>
                    <tbody>
                        {servers.map((server) => (
                            <tr key={server.id}>
                                <td>
                                    <strong>{server.display_label}</strong>
                                    <div className="field-hint">{server.host}:{server.port}</div>
                                    {!server.is_active && (
                                        <div className="field-hint" style={{ color: '#ca8a04' }}>неактивний</div>
                                    )}
                                    {server.health?.message && (
                                        <div className="field-hint">{server.health.message}</div>
                                    )}
                                    <div className="field-hint">{formatCheckedAt(server.health?.checked_at)}</div>
                                </td>
                                <td className="field-hint">{server.hoster || '—'}</td>
                                <td className="field-hint">{server.cpu || '—'}</td>
                                <td className="field-hint">{server.ram || '—'}</td>
                                <td className="field-hint">{server.disk || '—'}</td>
                                <td className="field-hint">{server.price || '—'}</td>
                                <td>{roleBadge(server.role, server.accepts_new_offers)}</td>
                                <td>{statusBadge(server.health?.status)}</td>
                                <td>
                                    {server.offers_count}
                                    {server.max_offers > 0 && (
                                        <div className="field-hint">ліміт {server.max_offers}</div>
                                    )}
                                </td>
                                <td>{server.has_ssh ? 'так' : 'немає'}</td>
                                <td>
                                    <button
                                        type="button"
                                        className="btn btn-ghost btn-sm"
                                        disabled={busyId === server.id}
                                        onClick={() => runCheck(server)}
                                    >
                                        {busyId === server.id ? '…' : 'Check'}
                                    </button>
                                    <button
                                        type="button"
                                        className="btn btn-ghost btn-sm"
                                        onClick={() => startEdit(server)}
                                    >
                                        Edit
                                    </button>
                                    <button
                                        type="button"
                                        className="btn btn-ghost btn-sm"
                                        disabled={busyId === server.id}
                                        onClick={() => evacuateServer(server)}
                                        title="Розкидати оффери цього сервера по решті пулу"
                                    >
                                        Evacuate
                                    </button>
                                    <button
                                        type="button"
                                        className="btn btn-ghost btn-sm"
                                        disabled={busyId === server.id}
                                        onClick={() => removeServer(server)}
                                    >
                                        Del
                                    </button>
                                </td>
                            </tr>
                        ))}
                        {servers.length === 0 && (
                            <tr>
                                <td colSpan={11} className="field-hint">
                                    Реєстр порожній — натисніть «+» або «Синхронізувати».
                                </td>
                            </tr>
                        )}
                    </tbody>
                </table>
            </div>

            {editingId && (
                <section className="card" style={{ marginTop: '1.5rem' }}>
                    <h3>Редагувати сервер</h3>
                    <form onSubmit={submitEdit} autoComplete="off">
                        <div className="field-row">
                            <div className="field">
                                <label>Host / IP</label>
                                <input
                                    value={editData.host}
                                    onChange={(e) => setEditField('host', e.target.value)}
                                    required
                                    autoComplete="off"
                                />
                            </div>
                            <div className="field">
                                <label>Мітка</label>
                                <input
                                    value={editData.label}
                                    onChange={(e) => setEditField('label', e.target.value)}
                                    autoComplete="off"
                                />
                            </div>
                            <div className="field">
                                <label>SSH port</label>
                                <input
                                    type="number"
                                    value={editData.port}
                                    onChange={(e) => setEditField('port', e.target.value)}
                                />
                            </div>
                        </div>
                        <div className="field-row">
                            <div className="field">
                                <label>Хостер</label>
                                <input
                                    value={editData.hoster}
                                    onChange={(e) => setEditField('hoster', e.target.value)}
                                    placeholder="Contabo / Hetzner / …"
                                    autoComplete="off"
                                />
                            </div>
                            <div className="field">
                                <label>CPU</label>
                                <input
                                    value={editData.cpu}
                                    onChange={(e) => setEditField('cpu', e.target.value)}
                                    placeholder="Xeon E5-1620 v3 / 8 thr"
                                    autoComplete="off"
                                />
                            </div>
                            <div className="field">
                                <label>RAM</label>
                                <input
                                    value={editData.ram}
                                    onChange={(e) => setEditField('ram', e.target.value)}
                                    placeholder="32 GB"
                                    autoComplete="off"
                                />
                            </div>
                            <div className="field">
                                <label>Диск</label>
                                <input
                                    value={editData.disk}
                                    onChange={(e) => setEditField('disk', e.target.value)}
                                    placeholder="1 TB SSD"
                                    autoComplete="off"
                                />
                            </div>
                            <div className="field">
                                <label>Ціна</label>
                                <input
                                    value={editData.price}
                                    onChange={(e) => setEditField('price', e.target.value)}
                                    placeholder="€63"
                                    autoComplete="off"
                                />
                            </div>
                        </div>
                        <div className="field-row">
                            <div className="field">
                                <label>SSH user</label>
                                <input
                                    value={editData.username}
                                    onChange={(e) => setEditField('username', e.target.value)}
                                    autoComplete="off"
                                />
                            </div>
                            <div className="field">
                                <label htmlFor="os-edit-pass">SSH пароль</label>
                                <SecretInput
                                    id="os-edit-pass"
                                    value={editData.password}
                                    onChange={(e) => setEditField('password', e.target.value)}
                                    autoComplete="new-password"
                                    data-1p-ignore="true"
                                    data-lpignore="true"
                                    placeholder="пароль"
                                />
                                <p className="field-hint">
                                    Натисни око, щоб побачити пароль. Після збереження він знову підтягнеться сюди.
                                </p>
                            </div>
                        </div>
                        <div className="field-row">
                            <div className="field">
                                <label>Роль у пулі</label>
                                <select
                                    value={editData.role}
                                    onChange={(e) => setEditField('role', e.target.value)}
                                >
                                    {roles.map((r) => (
                                        <option key={r} value={r}>{ROLE_LABELS[r] || r}</option>
                                    ))}
                                </select>
                                <p className="field-hint">
                                    Пул — приймає нові оффери. Запасний — тільки моніторинг.
                                    Звільняється — готується до евакуації.
                                </p>
                            </div>
                            <div className="field">
                                <label>Ліміт оферів</label>
                                <input
                                    type="number"
                                    min="0"
                                    value={editData.max_offers}
                                    onChange={(e) => setEditField('max_offers', e.target.value)}
                                    placeholder="0 = без ліміту"
                                />
                            </div>
                        </div>
                        <div className="field-row">
                            <label className="field" style={{ display: 'flex', alignItems: 'center', gap: '0.5rem' }}>
                                <input
                                    type="checkbox"
                                    checked={Boolean(editData.is_active)}
                                    onChange={(e) => setEditField('is_active', e.target.checked)}
                                />
                                Активний
                            </label>
                            <label className="field" style={{ display: 'flex', alignItems: 'center', gap: '0.5rem' }}>
                                <input
                                    type="checkbox"
                                    checked={Boolean(editData.alerts_enabled)}
                                    onChange={(e) => setEditField('alerts_enabled', e.target.checked)}
                                />
                                Алерти
                            </label>
                        </div>
                        <div className="btn-row">
                            <button type="submit" className="btn btn-primary" disabled={savingEdit}>
                                {savingEdit ? 'Збереження…' : 'Зберегти'}
                            </button>
                            <button type="button" className="btn btn-ghost" onClick={() => setEditingId(null)}>
                                Скасувати
                            </button>
                        </div>
                    </form>
                </section>
            )}

            {createOpen && (
                <div
                    className="modal-backdrop"
                    onClick={closeCreate}
                    role="presentation"
                >
                    <div
                        className="modal-card modal-card--wide"
                        onClick={(e) => e.stopPropagation()}
                        role="dialog"
                        aria-modal="true"
                        aria-labelledby="os-create-title"
                    >
                        <div className="modal-card__header">
                            <h3 id="os-create-title">Додати сервер</h3>
                            <button
                                type="button"
                                className="modal-card__close"
                                onClick={closeCreate}
                                aria-label="Закрити"
                            >
                                ×
                            </button>
                        </div>

                        {(submitError || formErrorList(createForm.errors).length > 0) && (
                            <p className="field-hint" style={{ color: '#f87171', marginBottom: '0.75rem' }}>
                                {submitError || formErrorList(createForm.errors).join(' · ')}
                            </p>
                        )}

                        <form onSubmit={submitCreate}>
                            <div className="field-row">
                                <div className="field">
                                    <label htmlFor="os-host">Host / IP</label>
                                    <input
                                        id="os-host"
                                        value={createForm.data.host}
                                        onChange={(e) => createForm.setData('host', e.target.value)}
                                        placeholder="176.123.6.48"
                                        required
                                        autoFocus
                                    />
                                </div>
                                <div className="field">
                                    <label htmlFor="os-label">Мітка</label>
                                    <input
                                        id="os-label"
                                        value={createForm.data.label}
                                        onChange={(e) => createForm.setData('label', e.target.value)}
                                        placeholder="Admin origin"
                                    />
                                </div>
                                <div className="field">
                                    <label htmlFor="os-port">SSH port</label>
                                    <input
                                        id="os-port"
                                        type="number"
                                        value={createForm.data.port}
                                        onChange={(e) => createForm.setData('port', e.target.value)}
                                    />
                                </div>
                            </div>
                            <div className="field-row">
                                <div className="field">
                                    <label htmlFor="os-hoster">Хостер</label>
                                    <input
                                        id="os-hoster"
                                        value={createForm.data.hoster}
                                        onChange={(e) => createForm.setData('hoster', e.target.value)}
                                        placeholder="Contabo / Hetzner / …"
                                    />
                                </div>
                                <div className="field">
                                    <label htmlFor="os-cpu">CPU</label>
                                    <input
                                        id="os-cpu"
                                        value={createForm.data.cpu}
                                        onChange={(e) => createForm.setData('cpu', e.target.value)}
                                        placeholder="Xeon E5-1620 v3 / 8 thr"
                                    />
                                </div>
                                <div className="field">
                                    <label htmlFor="os-ram">RAM</label>
                                    <input
                                        id="os-ram"
                                        value={createForm.data.ram}
                                        onChange={(e) => createForm.setData('ram', e.target.value)}
                                        placeholder="32 GB"
                                    />
                                </div>
                                <div className="field">
                                    <label htmlFor="os-disk">Диск</label>
                                    <input
                                        id="os-disk"
                                        value={createForm.data.disk}
                                        onChange={(e) => createForm.setData('disk', e.target.value)}
                                        placeholder="1 TB SSD"
                                    />
                                </div>
                                <div className="field">
                                    <label htmlFor="os-price">Ціна</label>
                                    <input
                                        id="os-price"
                                        value={createForm.data.price}
                                        onChange={(e) => createForm.setData('price', e.target.value)}
                                        placeholder="€63"
                                    />
                                </div>
                            </div>
                            <div className="field-row">
                                <div className="field">
                                    <label htmlFor="os-user">SSH user</label>
                                    <input
                                        id="os-user"
                                        value={createForm.data.username}
                                        onChange={(e) => createForm.setData('username', e.target.value)}
                                    />
                                </div>
                                <div className="field">
                                    <label htmlFor="os-pass">SSH password</label>
                                    <SecretInput
                                        id="os-pass"
                                        value={createForm.data.password}
                                        onChange={(e) => createForm.setData('password', e.target.value)}
                                        autoComplete="new-password"
                                    />
                                </div>
                            </div>
                            <div className="field-row">
                                <div className="field">
                                    <label htmlFor="os-role">Роль у пулі</label>
                                    <select
                                        id="os-role"
                                        value={createForm.data.role}
                                        onChange={(e) => createForm.setData('role', e.target.value)}
                                    >
                                        {roles.map((r) => (
                                            <option key={r} value={r}>{ROLE_LABELS[r] || r}</option>
                                        ))}
                                    </select>
                                    <p className="field-hint">
                                        Запасний сервер прогрітий і моніториться, але нових оферів не отримує.
                                    </p>
                                </div>
                                <div className="field">
                                    <label htmlFor="os-max-offers">Ліміт оферів</label>
                                    <input
                                        id="os-max-offers"
                                        type="number"
                                        min="0"
                                        value={createForm.data.max_offers}
                                        onChange={(e) => createForm.setData('max_offers', e.target.value)}
                                        placeholder="0 = без ліміту"
                                    />
                                </div>
                            </div>
                            <div className="field-row">
                                <label className="field" style={{ display: 'flex', alignItems: 'center', gap: '0.5rem' }}>
                                    <input
                                        type="checkbox"
                                        checked={Boolean(createForm.data.is_active)}
                                        onChange={(e) => createForm.setData('is_active', e.target.checked)}
                                    />
                                    Активний (моніторити)
                                </label>
                                <label className="field" style={{ display: 'flex', alignItems: 'center', gap: '0.5rem' }}>
                                    <input
                                        type="checkbox"
                                        checked={Boolean(createForm.data.alerts_enabled)}
                                        onChange={(e) => createForm.setData('alerts_enabled', e.target.checked)}
                                    />
                                    Telegram-алерти
                                </label>
                            </div>
                            <div className="btn-row" style={{ marginTop: '0.75rem' }}>
                                <button type="submit" className="btn btn-primary" disabled={savingCreate}>
                                    {savingCreate ? 'Додавання…' : 'Додати'}
                                </button>
                                <button type="button" className="btn btn-ghost" onClick={closeCreate} disabled={savingCreate}>
                                    Скасувати
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            )}
        </PanelLayout>
    );
}
