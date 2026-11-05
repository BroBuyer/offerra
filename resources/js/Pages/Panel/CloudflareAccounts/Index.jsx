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
        router.delete(route('cloudflare-accounts.destroy', account.id), { preserveScroll: true });
    };

    return (
        <PanelLayout title="Запасні Cloudflare">
            <header className="page-header">
                <div>
                    <h2>Запасні Cloudflare</h2>
                    <p>
                        Пул акаунтів на заміну, коли Netcraft кладе слот. Юзери бачать лише свій основний CF.
                        Зі списку оферів перекидай пачку на наступний акаунт звідси.
                    </p>
                </div>
            </header>

            {flash?.success && (
                <div className="card" style={{ marginBottom: '1rem' }}>
                    <p className="card-desc">{flash.success}</p>
                </div>
            )}
            {flash?.warning && (
                <div className="card" style={{ marginBottom: '1rem', borderColor: '#fbbf24' }}>
                    <p className="card-desc" style={{ color: '#fbbf24' }}>{flash.warning}</p>
                </div>
            )}
            {(errors?.name || errors?.api_token || errors?.account_id) && (
                <div className="card" style={{ marginBottom: '1rem', borderColor: '#f87171' }}>
                    <p className="card-desc" style={{ color: '#f87171' }}>
                        {errors.name || errors.api_token || errors.account_id}
                    </p>
                </div>
            )}

            <section className="card" style={{ marginBottom: '1rem' }}>
                <h3>Додати акаунт</h3>
                <form className="cf-pool-form" onSubmit={submitCreate}>
                    <div className="field">
                        <label htmlFor="cf-pool-name">Назва</label>
                        <input
                            id="cf-pool-name"
                            type="text"
                            value={createForm.data.name}
                            onChange={(e) => createForm.setData('name', e.target.value)}
                            placeholder="CF-2, CF-ego-spare…"
                            required
                        />
                    </div>
                    <div className="field">
                        <label htmlFor="cf-pool-token">API token</label>
                        <SecretInput
                            id="cf-pool-token"
                            value={createForm.data.api_token}
                            onChange={(e) => createForm.setData('api_token', e.target.value)}
                            placeholder="Cloudflare API token"
                        />
                    </div>
                    <div className="field">
                        <label htmlFor="cf-pool-account">Account ID</label>
                        <input
                            id="cf-pool-account"
                            type="text"
                            value={createForm.data.account_id}
                            onChange={(e) => createForm.setData('account_id', e.target.value)}
                            placeholder="32-символьний Account ID"
                            required
                        />
                    </div>
                    <div className="cf-pool-form__actions">
                        <button type="submit" className="btn btn-primary" disabled={createForm.processing}>
                            {createForm.processing ? 'Додаю…' : 'Додати'}
                        </button>
                    </div>
                </form>
            </section>

            <div className="table-wrap">
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
                                <td colSpan={6} className="muted">Поки порожньо — додай 8–10 запасних слотів.</td>
                            </tr>
                        ) : accounts.map((account) => (
                            <tr key={account.id} className={account.is_active ? undefined : 'is-muted'}>
                                <td>
                                    {editingId === account.id ? (
                                        <input
                                            type="text"
                                            value={editForm.data.name}
                                            onChange={(e) => editForm.setData('name', e.target.value)}
                                        />
                                    ) : account.name}
                                </td>
                                <td>
                                    {editingId === account.id ? (
                                        <input
                                            type="text"
                                            value={editForm.data.account_id}
                                            onChange={(e) => editForm.setData('account_id', e.target.value)}
                                        />
                                    ) : (
                                        <code>{account.account_id}</code>
                                    )}
                                </td>
                                <td>{account.offers_count}</td>
                                <td>
                                    <span style={{ color: account.is_active ? '#16a34a' : '#ca8a04', fontWeight: 600 }}>
                                        {account.is_active ? 'В пулі' : 'Вимкнений'}
                                    </span>
                                </td>
                                <td>
                                    {account.last_check_message ? (
                                        <span style={{ color: account.last_check_ok ? '#16a34a' : '#dc2626' }}>
                                            {account.last_check_ok ? 'OK' : 'Fail'}
                                            {account.last_checked_at ? ` · ${account.last_checked_at}` : ''}
                                        </span>
                                    ) : '—'}
                                </td>
                                <td>
                                    {editingId === account.id ? (
                                        <form className="btn-row" onSubmit={submitEdit} style={{ marginTop: 0 }}>
                                            <div className="field" style={{ minWidth: '14rem' }}>
                                                <SecretInput
                                                    value={editForm.data.api_token}
                                                    onChange={(e) => editForm.setData('api_token', e.target.value)}
                                                    placeholder={editForm.data.has_token ? 'Залишити поточний token' : 'API token'}
                                                />
                                            </div>
                                            <button type="submit" className="btn btn-primary btn-sm" disabled={editForm.processing}>
                                                Зберегти
                                            </button>
                                            <button type="button" className="btn btn-ghost btn-sm" onClick={() => setEditingId(null)}>
                                                Скасувати
                                            </button>
                                        </form>
                                    ) : (
                                        <div className="btn-row" style={{ marginTop: 0 }}>
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
                                            <button type="button" className="btn btn-ghost btn-sm" onClick={() => startEdit(account)}>
                                                Змінити
                                            </button>
                                            <button type="button" className="btn btn-ghost btn-sm" onClick={() => removeAccount(account)}>
                                                Видалити
                                            </button>
                                        </div>
                                    )}
                                </td>
                            </tr>
                        ))}
                    </tbody>
                </table>
            </div>
        </PanelLayout>
    );
}
