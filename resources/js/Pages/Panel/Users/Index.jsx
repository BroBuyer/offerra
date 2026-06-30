import SecretInput from '@/Components/SecretInput';
import UserCredentialsCard from '@/Components/UserCredentialsCard';
import PanelLayout from '@/Layouts/PanelLayout';
import { Link, router, useForm, usePage } from '@inertiajs/react';
import { useState } from 'react';

function generatePassword() {
    const chars = 'abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ23456789!@#$%';
    const values = crypto.getRandomValues(new Uint32Array(14));

    return Array.from(values, (value) => chars[value % chars.length]).join('');
}

export default function UsersIndex({ users }) {
    const { flash, errors } = usePage().props;
    const [dismissedCredentialsId, setDismissedCredentialsId] = useState(null);
    const [resettingId, setResettingId] = useState(null);

    const { data, setData, post, processing, errors: formErrors, reset } = useForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
    });

    const credentials = flash?.user_credentials
        && flash.user_credentials.id !== dismissedCredentialsId
        ? flash.user_credentials
        : null;

    const submit = (e) => {
        e.preventDefault();
        post(route('users.store'), {
            preserveScroll: true,
            onSuccess: () => {
                reset();
                setDismissedCredentialsId(null);
            },
        });
    };

    const fillGeneratedPassword = () => {
        const password = generatePassword();
        setData('password', password);
        setData('password_confirmation', password);
    };

    const resetPassword = (user) => {
        if (! window.confirm(`Згенерувати новий пароль для ${user.email}? Старий перестане працювати.`)) {
            return;
        }

        setResettingId(user.id);
        setDismissedCredentialsId(null);

        router.post(route('users.reset-password', user.id), {}, {
            preserveScroll: true,
            onFinish: () => setResettingId(null),
        });
    };

    return (
        <PanelLayout title="Користувачі" wide>
            <header className="page-header">
                <h2>Користувачі</h2>
                <p>Створення акаунтів для команди — кожен працює зі своїми налаштуваннями та офферами</p>
            </header>

            {errors?.reset && (
                <div className="card" style={{ marginBottom: '1rem', borderColor: '#f87171' }}>
                    <p className="card-desc" style={{ color: '#f87171' }}>{errors.reset}</p>
                </div>
            )}

            {credentials && (
                <div style={{ marginBottom: '1.5rem' }}>
                    <UserCredentialsCard
                        user={credentials}
                        title="Дані для входу — збережіть зараз"
                        onDismiss={() => setDismissedCredentialsId(credentials.id)}
                    />
                </div>
            )}

            <section className="card" style={{ marginBottom: '1.5rem' }}>
                <h3>Новий користувач</h3>
                <p className="card-desc">Роль: Користувач (доступ до створення та деплою офферів під своїм акаунтом)</p>
                <form onSubmit={submit}>
                    <div className="field-row">
                        <div className="field">
                            <label htmlFor="user-name">Імʼя</label>
                            <input
                                id="user-name"
                                type="text"
                                value={data.name}
                                onChange={(e) => setData('name', e.target.value)}
                                placeholder="Іван Петренко"
                                autoComplete="off"
                            />
                            {formErrors.name && (
                                <p className="field-hint" style={{ color: '#f87171' }}>{formErrors.name}</p>
                            )}
                        </div>
                        <div className="field">
                            <label htmlFor="user-email">Email</label>
                            <input
                                id="user-email"
                                type="email"
                                value={data.email}
                                onChange={(e) => setData('email', e.target.value)}
                                placeholder="user@company.com"
                                autoComplete="off"
                            />
                            {formErrors.email && (
                                <p className="field-hint" style={{ color: '#f87171' }}>{formErrors.email}</p>
                            )}
                        </div>
                    </div>
                    <div className="field-row">
                        <div className="field">
                            <label htmlFor="user-password">Пароль</label>
                            <SecretInput
                                id="user-password"
                                value={data.password}
                                onChange={(e) => setData('password', e.target.value)}
                                placeholder="мінімум 8 символів"
                                autoComplete="new-password"
                            />
                            {formErrors.password && (
                                <p className="field-hint" style={{ color: '#f87171' }}>{formErrors.password}</p>
                            )}
                        </div>
                        <div className="field">
                            <label htmlFor="user-password-confirm">Підтвердження пароля</label>
                            <SecretInput
                                id="user-password-confirm"
                                value={data.password_confirmation}
                                onChange={(e) => setData('password_confirmation', e.target.value)}
                                placeholder="повторіть пароль"
                                autoComplete="new-password"
                            />
                        </div>
                    </div>
                    <div className="btn-row">
                        <button type="button" className="btn btn-ghost" onClick={fillGeneratedPassword}>
                            Згенерувати пароль
                        </button>
                        <button type="submit" className="btn btn-primary" disabled={processing}>
                            {processing ? 'Створення…' : 'Створити користувача'}
                        </button>
                    </div>
                </form>
            </section>

            <div className="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>Імʼя</th>
                            <th>Email</th>
                            <th>Роль</th>
                            <th>Офферів</th>
                            <th>Створено</th>
                            <th />
                        </tr>
                    </thead>
                    <tbody>
                        {users.map((user) => (
                            <tr key={user.id}>
                                <td>{user.name}</td>
                                <td>{user.email}</td>
                                <td>
                                    <span
                                        className={`sidebar-role${
                                            user.role === 'admin' ? ' sidebar-role--admin' : ''
                                        }`}
                                    >
                                        {user.role_label}
                                    </span>
                                </td>
                                <td>
                                    {user.offers_count > 0 ? (
                                        <Link href={route('offers.index')}>{user.offers_count}</Link>
                                    ) : (
                                        '0'
                                    )}
                                </td>
                                <td>{user.created_at ?? '—'}</td>
                                <td>
                                    {user.role !== 'admin' && (
                                        <button
                                            type="button"
                                            className="btn btn-ghost btn-sm"
                                            disabled={resettingId === user.id}
                                            onClick={() => resetPassword(user)}
                                        >
                                            {resettingId === user.id ? '…' : 'Новий пароль'}
                                        </button>
                                    )}
                                </td>
                            </tr>
                        ))}
                        {users.length === 0 && (
                            <tr>
                                <td colSpan={6} className="field-hint">
                                    Користувачів ще немає
                                </td>
                            </tr>
                        )}
                    </tbody>
                </table>
            </div>
        </PanelLayout>
    );
}
