import SecretInput from '@/Components/SecretInput';
import PanelLayout from '@/Layouts/PanelLayout';
import { router, useForm, usePage } from '@inertiajs/react';
import { useRef, useState } from 'react';

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

export default function OriginServersIndex({
    servers = [],
    orphans = [],
    users = [],
    defaultPath = '/var/www/offers/{domain}/public_html',
}) {
    const { flash } = usePage().props;
    const [busyId, setBusyId] = useState(null);
    const [editingId, setEditingId] = useState(null);
    const [syncing, setSyncing] = useState(false);
    const [checkingAll, setCheckingAll] = useState(false);
    const [savingEdit, setSavingEdit] = useState(false);
    const [submitError, setSubmitError] = useState('');
    const editPasswordRef = useRef(null);

    const createForm = useForm({
        host: '',
        port: 22,
        username: 'root',
        password: '',
        label: '',
        deploy_path_template: defaultPath,
        is_active: true,
        alerts_enabled: true,
        owner_user_id: '',
    });

    const [editData, setEditData] = useState({
        host: '',
        port: 22,
        username: 'root',
        label: '',
        deploy_path_template: defaultPath,
        is_active: true,
        alerts_enabled: true,
        owner_user_id: '',
    });

    const setEditField = (key, value) => {
        setEditData((prev) => ({ ...prev, [key]: value }));
    };

    const submitCreate = (e) => {
        e.preventDefault();
        setSubmitError('');
        createForm.transform((data) => ({
            ...data,
            owner_user_id: data.owner_user_id === '' ? null : Number(data.owner_user_id),
            port: Number(data.port) || 22,
            is_active: Boolean(data.is_active),
            alerts_enabled: Boolean(data.alerts_enabled),
        })).post(route('origin-servers.store'), {
            preserveScroll: true,
            onSuccess: () => {
                createForm.reset();
                createForm.setData({
                    host: '',
                    port: 22,
                    username: 'root',
                    password: '',
                    label: '',
                    deploy_path_template: defaultPath,
                    is_active: true,
                    alerts_enabled: true,
                    owner_user_id: '',
                });
            },
            onError: (errs) => {
                setSubmitError(formErrorList(errs)[0] || 'Не вдалося додати сервер');
            },
        });
    };

    const startEdit = (server) => {
        setSubmitError('');
        setEditingId(server.id);
        setEditData({
            host: server.host ?? '',
            port: server.port ?? 22,
            username: server.username || 'root',
            label: server.label ?? '',
            deploy_path_template: server.deploy_path_template || defaultPath,
            is_active: true,
            alerts_enabled: server.alerts_enabled !== false,
            owner_user_id: server.owner_user_id ? String(server.owner_user_id) : '',
        });
        requestAnimationFrame(() => {
            if (editPasswordRef.current) {
                editPasswordRef.current.value = '';
            }
        });
    };

    const submitEdit = (e) => {
        e.preventDefault();
        if (!editingId) {
            setSubmitError('Не вибрано сервер для редагування');
            return;
        }

        const passwordFromDom = String(editPasswordRef.current?.value || '').trim();
        const payload = {
            host: String(editData.host || '').trim(),
            port: Number(editData.port) || 22,
            username: String(editData.username || '').trim(),
            password: passwordFromDom,
            label: String(editData.label || ''),
            deploy_path_template: String(editData.deploy_path_template || defaultPath),
            is_active: Boolean(editData.is_active),
            alerts_enabled: Boolean(editData.alerts_enabled),
            owner_user_id: editData.owner_user_id === ''
                ? null
                : Number(editData.owner_user_id),
        };

        if (!payload.host) {
            setSubmitError('Вкажіть Host / IP');
            return;
        }
        if (!payload.username) {
            setSubmitError('Вкажіть SSH user (зазвичай root)');
            return;
        }
        if (!passwordFromDom) {
            setSubmitError('Введіть SSH-пароль у поле (крапки від браузера не рахуються — зітріть і наберіть знову).');
            return;
        }

        setSubmitError('');
        setSavingEdit(true);

        router.post(route('origin-servers.update', editingId), payload, {
            preserveScroll: true,
            onSuccess: () => {
                setEditingId(null);
                setSubmitError('');
                if (editPasswordRef.current) {
                    editPasswordRef.current.value = '';
                }
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

    const removeServer = (server) => {
        if (!window.confirm(`Видалити ${server.host} з реєстру? Оффери не чіпаються.`)) {
            return;
        }
        setBusyId(server.id);
        router.delete(route('origin-servers.destroy', server.id), {
            preserveScroll: true,
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
            <header className="page-header">
                <h2>Origin-сервери</h2>
                <p>
                    Реєстр усіх origin-хостів для моніторингу. User settings лишаються лише
                    «куди деплоїти нові оффери». Cron перевіряє активні сервери та orphan з офферами.
                </p>
            </header>

            {flash?.success && (
                <div className="card" style={{ marginBottom: '1rem' }}>
                    <p className="card-desc">{flash.success}</p>
                </div>
            )}

            {(submitError || formErrorList(createForm.errors).length > 0) && (
                <div className="card" style={{ marginBottom: '1rem', borderColor: '#f87171' }}>
                    <p className="card-desc" style={{ color: '#f87171' }}>
                        {submitError || formErrorList(createForm.errors).join(' · ')}
                    </p>
                </div>
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

            <section className="card" style={{ marginBottom: '1.5rem' }}>
                <h3>Додати сервер</h3>
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
                        <div className="field">
                            <label htmlFor="os-owner">Власник (алерти)</label>
                            <select
                                id="os-owner"
                                value={createForm.data.owner_user_id}
                                onChange={(e) => createForm.setData('owner_user_id', e.target.value)}
                            >
                                <option value="">—</option>
                                {users.map((u) => (
                                    <option key={u.id} value={u.id}>{u.name} ({u.email})</option>
                                ))}
                            </select>
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
                    <div className="btn-row">
                        <button type="submit" className="btn btn-primary" disabled={createForm.processing}>
                            {createForm.processing ? 'Додавання…' : 'Додати'}
                        </button>
                    </div>
                </form>
            </section>

            <div className="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Сервер</th>
                            <th>Статус</th>
                            <th>Офферів</th>
                            <th>SSH</th>
                            <th>Перевірено</th>
                            <th>Власник</th>
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
                                </td>
                                <td>{statusBadge(server.health?.status)}</td>
                                <td>{server.offers_count}</td>
                                <td>{server.has_ssh ? 'так' : 'немає'}</td>
                                <td className="field-hint">{formatCheckedAt(server.health?.checked_at)}</td>
                                <td className="field-hint">{server.owner_email || '—'}</td>
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
                                        onClick={() => removeServer(server)}
                                    >
                                        Del
                                    </button>
                                </td>
                            </tr>
                        ))}
                        {servers.length === 0 && (
                            <tr>
                                <td colSpan={7} className="field-hint">
                                    Реєстр порожній — натисніть «Синхронізувати».
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
                                <label>SSH user</label>
                                <input
                                    value={editData.username}
                                    onChange={(e) => setEditField('username', e.target.value)}
                                    autoComplete="off"
                                />
                            </div>
                            <div className="field">
                                <label>SSH пароль (обовʼязково при першому збереженні)</label>
                                <input
                                    key={`pwd-${editingId}`}
                                    ref={editPasswordRef}
                                    type="password"
                                    name={`os_ssh_pass_${editingId}`}
                                    defaultValue=""
                                    autoComplete="new-password"
                                    placeholder="введіть пароль вручну"
                                />
                            </div>
                            <div className="field">
                                <label>Власник</label>
                                <select
                                    value={editData.owner_user_id}
                                    onChange={(e) => setEditField('owner_user_id', e.target.value)}
                                >
                                    <option value="">—</option>
                                    {users.map((u) => (
                                        <option key={u.id} value={u.id}>{u.name}</option>
                                    ))}
                                </select>
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
        </PanelLayout>
    );
}
