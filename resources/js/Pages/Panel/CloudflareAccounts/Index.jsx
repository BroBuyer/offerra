import SecretInput from '@/Components/SecretInput';
import PanelLayout from '@/Layouts/PanelLayout';
import { router, useForm, usePage } from '@inertiajs/react';
import { useState } from 'react';

function emptyCreate() {
    return {
        name: '',
        api_token: '',
        account_id: '',
        is_active: true,
    };
}

function statusBadge(account) {
    if (account.is_active) {
        return <span className="badge badge-ok">У пулі</span>;
    }

    return <span className="badge badge-warn">Вимкнений</span>;
}

function checkBadge(account) {
    if (!account.last_check_message) {
        return <span className="cf-pool-check__empty">ще не перевіряли</span>;
    }

    return (
        <div className="cf-pool-check">
            <span className={`badge ${account.last_check_ok ? 'badge-ok' : 'badge-error'}`}>
                {account.last_check_ok ? 'OK' : 'Fail'}
            </span>
            {account.last_checked_at && (
                <span className="cf-pool-check__time">{account.last_checked_at}</span>
            )}
        </div>
    );
}

export default function CloudflareAccountsIndex({ accounts = [] }) {
    const { flash, errors = {} } = usePage().props;
    const [editingId, setEditingId] = useState(null);
    const [checkingId, setCheckingId] = useState(null);
    const createForm = useForm(emptyCreate());
    const editForm = useForm({
        name: '',
        api_token: '',
        account_id: '',
        is_active: true,
        has_token: false,
    });

    const activeCount = accounts.filter((account) => account.is_active).length;
    const offerSum = accounts.reduce((sum, account) => sum + (account.offers_count || 0), 0);
    const editing = accounts.find((account) => account.id === editingId) ?? null;

    const startEdit = (account) => {
        setEditingId(account.id);
        editForm.setData({
            name: account.name ?? '',
            api_token: account.api_token ?? '',
            account_id: account.account_id ?? '',
            is_active: account.is_active !== false,
            has_token: Boolean(account.has_token),
        });
        editForm.clearErrors();
    };

    const cancelEdit = () => {
        setEditingId(null);
        editForm.reset();
        editForm.clearErrors();
    };

    const submitCreate = (e) => {
        e.preventDefault();
        createForm.post(route('cloudflare-accounts.store'), {
            preserveScroll: true,
            onSuccess: () => createForm.reset(),
        });
    };

    const submitEdit = (e) => {
        e.preventDefault();
        if (!editingId) {
            return;
        }
        editForm.post(route('cloudflare-accounts.update', editingId), {
            preserveScroll: true,
            onSuccess: () => setEditingId(null),
        });
    };

    const checkAccount = (account) => {
        setCheckingId(account.id);
        router.post(route('cloudflare-accounts.check', account.id), {}, {
            preserveScroll: true,
            onFinish: () => setCheckingId(null),
        });
    };

    const toggleActive = (account) => {
        router.post(route('cloudflare-accounts.update', account.id), {
            name: account.name,
            account_id: account.account_id,
            is_active: !account.is_active,
        }, { preserveScroll: true });
    };

    const removeAccount = (account) => {
        if (!window.confirm(`Прибрати «${account.name}» з пулу? Офери на ньому лишаться, поки їх не перекинеш.`)) {
            return;
        }
        if (editingId === account.id) {
            setEditingId(null);
        }
        router.delete(route('cloudflare-accounts.destroy', account.id), { preserveScroll: true });
    };

    const createError = createForm.errors.name
        || createForm.errors.api_token
        || createForm.errors.account_id
        || errors?.name
        || errors?.api_token
        || errors?.account_id;
    const editError = editForm.errors.name || editForm.errors.api_token || editForm.errors.account_id;

    return (
        <PanelLayout title="Запасні Cloudflare" wide>
            <header className="page-header cf-pool-header">
                <div>
                    <h2>Запасні Cloudflare</h2>
                    <p>
                        Коли Netcraft кладе слот — вимикаєш його тут і з оферів кидаєш пачку на наступний.
                    </p>
                </div>
                {accounts.length > 0 && (
                    <p className="cf-pool-summary">
                        <strong>{activeCount}</strong> у пулі
                        <span>·</span>
                        {accounts.length} слотів
                        <span>·</span>
                        {offerSum} оферів
                    </p>
                )}
            </header>

            {flash?.warning && (
                <div className="card" style={{ marginBottom: '1rem', borderColor: '#fbbf24' }}>
                    <p className="card-desc" style={{ color: '#fbbf24', margin: 0 }}>{flash.warning}</p>
                </div>
            )}

            <section className="card">
                <h3>Додати акаунт</h3>
                <p className="card-desc">
                    Назва для себе, API token і Account ID — з дашборду Cloudflare.
                </p>
                <form className="cf-pool-form" onSubmit={submitCreate} autoComplete="off">
                    <div className="field">
                        <label htmlFor="cf-pool-name">Назва</label>
                        <input
                            id="cf-pool-name"
                            name="cf_spare_name"
                            type="text"
                            value={createForm.data.name}
                            onChange={(e) => createForm.setData('name', e.target.value)}
                            placeholder="назва слота"
                            required
                            autoComplete="off"
                            data-1p-ignore="true"
                            data-lpignore="true"
                        />
                    </div>
                    <div className="field">
                        <label htmlFor="cf-pool-token">API token</label>
                        <SecretInput
                            id="cf-pool-token"
                            name="cf_spare_token"
                            value={createForm.data.api_token}
                            onChange={(e) => createForm.setData('api_token', e.target.value)}
                            placeholder="API token"
                            autoComplete="new-password"
                            data-1p-ignore="true"
                            data-lpignore="true"
                        />
                    </div>
                    <div className="field">
                        <label htmlFor="cf-pool-account">Account ID</label>
                        <input
                            id="cf-pool-account"
                            name="cf_spare_account_id"
                            type="text"
                            value={createForm.data.account_id}
                            onChange={(e) => createForm.setData('account_id', e.target.value)}
                            required
                            spellCheck={false}
                            autoComplete="off"
                            data-1p-ignore="true"
                            data-lpignore="true"
                        />
                    </div>
                    <div className="cf-pool-form__actions">
                        {createError && (
                            <p className="field-hint" style={{ color: '#f87171' }}>{createError}</p>
                        )}
                        <button type="submit" className="btn btn-primary" disabled={createForm.processing}>
                            {createForm.processing ? 'Додаю…' : 'Додати'}
                        </button>
                    </div>
                </form>
            </section>

            <div className="table-wrap cf-pool-table">
                <table>
                    <thead>
                        <tr>
                            <th>Назва</th>
                            <th>Account ID</th>
                            <th>Оферів</th>
                            <th>Статус</th>
                            <th>Перевірка</th>
                            <th />
                        </tr>
                    </thead>
                    <tbody>
                        {accounts.length === 0 ? (
                            <tr>
                                <td colSpan={6} className="field-hint">Поки порожньо — додай 8–10 запасних слотів.</td>
                            </tr>
                        ) : accounts.map((account) => (
                            <tr
                                key={account.id}
                                className={[
                                    account.is_active ? undefined : 'is-muted',
                                    editingId === account.id ? 'is-editing' : undefined,
                                ].filter(Boolean).join(' ') || undefined}
                            >
                                <td>
                                    <strong>{account.name}</strong>
                                </td>
                                <td>
                                    <code className="cf-pool-id" title={account.account_id}>
                                        {account.account_id}
                                    </code>
                                </td>
                                <td className="col-num">{account.offers_count}</td>
                                <td>{statusBadge(account)}</td>
                                <td>{checkBadge(account)}</td>
                                <td>
                                    <div className="offer-actions">
                                        <button
                                            type="button"
                                            className="btn btn-ghost btn-sm"
                                            disabled={checkingId === account.id}
                                            onClick={() => checkAccount(account)}
                                        >
                                            {checkingId === account.id ? '…' : 'Перевірити'}
                                        </button>
                                        <button
                                            type="button"
                                            className="btn btn-ghost btn-sm"
                                            onClick={() => toggleActive(account)}
                                        >
                                            {account.is_active ? 'Вимкнути' : 'Увімкнути'}
                                        </button>
                                        <button
                                            type="button"
                                            className="btn btn-ghost btn-sm"
                                            onClick={() => startEdit(account)}
                                        >
                                            Змінити
                                        </button>
                                        <button
                                            type="button"
                                            className="btn btn-ghost btn-sm"
                                            onClick={() => removeAccount(account)}
                                        >
                                            Видалити
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        ))}
                    </tbody>
                </table>
            </div>

            {editing && (
                <section className="card" style={{ marginTop: '1rem' }}>
                    <h3>Змінити {editing.name}</h3>
                    <form onSubmit={submitEdit} autoComplete="off">
                        <div className="field-row cf-pool-edit">
                            <div className="field">
                                <label htmlFor="cf-pool-edit-name">Назва</label>
                                <input
                                    id="cf-pool-edit-name"
                                    type="text"
                                    value={editForm.data.name}
                                    onChange={(e) => editForm.setData('name', e.target.value)}
                                    placeholder="ego-2"
                                    required
                                    autoComplete="off"
                                />
                            </div>
                            <div className="field">
                                <label htmlFor="cf-pool-edit-token">API token</label>
                                <SecretInput
                                    id="cf-pool-edit-token"
                                    value={editForm.data.api_token}
                                    onChange={(e) => editForm.setData('api_token', e.target.value)}
                                    placeholder={editForm.data.has_token ? 'залишити поточний' : 'встав API token'}
                                />
                            </div>
                            <div className="field">
                                <label htmlFor="cf-pool-edit-account">Account ID</label>
                                <input
                                    id="cf-pool-edit-account"
                                    type="text"
                                    value={editForm.data.account_id}
                                    onChange={(e) => editForm.setData('account_id', e.target.value)}
                                    required
                                    spellCheck={false}
                                    autoComplete="off"
                                    data-1p-ignore="true"
                                    data-lpignore="true"
                                />
                            </div>
                        </div>
                        {editError && (
                            <p className="field-hint" style={{ color: '#f87171' }}>{editError}</p>
                        )}
                        <div className="btn-row">
                            <button type="submit" className="btn btn-primary" disabled={editForm.processing}>
                                {editForm.processing ? 'Зберігаю…' : 'Зберегти'}
                            </button>
                            <button type="button" className="btn btn-ghost" onClick={cancelEdit}>
                                Скасувати
                            </button>
                        </div>
                    </form>
                </section>
            )}
        </PanelLayout>
    );
}
