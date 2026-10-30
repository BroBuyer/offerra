import InputError from '@/Components/InputError';
import GuestLayout from '@/Layouts/GuestLayout';
import { Head, Link, useForm } from '@inertiajs/react';

export default function Login({ status, canResetPassword, challenge = null }) {
    const passwordForm = useForm({
        email: '',
        password: '',
        remember: false,
    });
    const codeForm = useForm({
        code: '',
    });

    const submitPassword = (e) => {
        e.preventDefault();
        passwordForm.post(route('login'), {
            onFinish: () => passwordForm.reset('password'),
        });
    };

    const submitCode = (e) => {
        e.preventDefault();
        codeForm.post(route('login.2fa'));
    };

    return (
        <GuestLayout subtitle={challenge ? 'Код із Telegram' : 'Панель оферів'}>
            <Head title="Вхід" />

            {status && <div className="auth-status">{status}</div>}

            {challenge ? (
                <form onSubmit={submitCode} className="auth-form">
                    <p className="auth-lead">
                        Код надіслано в Telegram
                        {challenge.email ? <> для <strong>{challenge.email}</strong></> : null}.
                    </p>

                    <label className="auth-label" htmlFor="code">
                        4-значний код
                    </label>
                    <input
                        id="code"
                        name="code"
                        type="text"
                        inputMode="numeric"
                        autoComplete="one-time-code"
                        pattern="[0-9]*"
                        maxLength={4}
                        value={codeForm.data.code}
                        onChange={(e) => codeForm.setData('code', e.target.value.replace(/\D/g, '').slice(0, 4))}
                        className="auth-input auth-input-code"
                        autoFocus
                    />
                    <InputError message={codeForm.errors.code} className="mt-2" />

                    <button type="submit" className="btn btn-primary auth-submit" disabled={codeForm.processing}>
                        Увійти
                    </button>

                    <div className="auth-row">
                        <button
                            type="button"
                            className="auth-link"
                            disabled={codeForm.processing}
                            onClick={() => codeForm.post(route('login.2fa.resend'))}
                        >
                            Надіслати ще раз
                        </button>
                        <Link href={route('login.2fa.cancel')} method="post" as="button" className="auth-link">
                            Інший акаунт
                        </Link>
                    </div>
                </form>
            ) : (
                <form onSubmit={submitPassword} className="auth-form">
                    <label className="auth-label" htmlFor="email">
                        Email
                    </label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value={passwordForm.data.email}
                        autoComplete="username"
                        autoFocus
                        onChange={(e) => passwordForm.setData('email', e.target.value)}
                        className="auth-input"
                    />
                    <InputError message={passwordForm.errors.email} className="mt-2" />

                    <label className="auth-label" htmlFor="password">
                        Пароль
                    </label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        value={passwordForm.data.password}
                        autoComplete="current-password"
                        onChange={(e) => passwordForm.setData('password', e.target.value)}
                        className="auth-input"
                    />
                    <InputError message={passwordForm.errors.password} className="mt-2" />

                    <label className="auth-check">
                        <input
                            type="checkbox"
                            name="remember"
                            checked={passwordForm.data.remember}
                            onChange={(e) => passwordForm.setData('remember', e.target.checked)}
                        />
                        Запам’ятати мене
                    </label>

                    <button type="submit" className="btn btn-primary auth-submit" disabled={passwordForm.processing}>
                        Далі
                    </button>

                    {canResetPassword && (
                        <div className="auth-row">
                            <Link href={route('password.request')} className="auth-link">
                                Забув пароль?
                            </Link>
                        </div>
                    )}
                </form>
            )}
        </GuestLayout>
    );
}
