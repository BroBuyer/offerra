import FlashToast from '@/Components/FlashToast';
import PanelNavLink from '@/Components/PanelNavLink';
import { Head, Link, usePage } from '@inertiajs/react';

const navItems = [
    { href: '/dashboard', icon: '📊', label: 'Дашборд' },
    { href: '/offers', icon: '📋', label: 'Оффери' },
    { href: '/offers/create?fresh=1', icon: '➕', label: 'Створити оффер' },
    { href: '/templates', icon: '🎨', label: 'Шаблони' },
    { href: '/settings', icon: '⚙️', label: 'Налаштування' },
];

export default function PanelLayout({ title, children, wide = false, fullWidth = false }) {
    const { url, auth, panel } = usePage().props;

    const isActive = (href) => {
        const path = url ?? '';
        if (href === '/dashboard') {
            return path === '/dashboard';
        }

        return path === href || path.startsWith(`${href}/`);
    };

    const user = auth?.user;

    const roleLabel = user?.role === 'admin'
        ? 'Адмін'
        : (user?.role_label ?? 'Користувач');

    return (
        <>
            <Head title={title} />
            <div className="app">
                <aside className="sidebar">
                    <div className="sidebar-brand">
                        <h1>Offerra</h1>
                        <p>панель керування лендами</p>
                    </div>
                    <nav>
                        {navItems.map((item) => (
                            <PanelNavLink
                                key={item.href}
                                href={item.href}
                                active={isActive(item.href)}
                                icon={item.icon}
                            >
                                {item.label}
                            </PanelNavLink>
                        ))}
                    </nav>
                    <div className="sidebar-footer">
                        {user && (
                            <dl className="sidebar-account">
                                <div className="sidebar-account-row">
                                    <dt>Affiliate</dt>
                                    <dd>{panel?.affiliate_tag ?? 'BRO'}</dd>
                                </div>
                                <div className="sidebar-account-row">
                                    <dt>Email</dt>
                                    <dd>{user.email}</dd>
                                </div>
                                <div className="sidebar-account-row">
                                    <dt>Роль</dt>
                                    <dd>
                                        <span
                                            className={`sidebar-role${
                                                user.role === 'admin' ? ' sidebar-role--admin' : ''
                                            }`}
                                        >
                                            {roleLabel}
                                        </span>
                                    </dd>
                                </div>
                            </dl>
                        )}
                        <Link
                            href={route('logout')}
                            method="post"
                            as="button"
                            className="sidebar-logout"
                        >
                            <span className="icon">🚪</span>
                            Вийти з акаунта
                        </Link>
                    </div>
                </aside>

                <main
                    className={[
                        'main',
                        fullWidth ? 'main--full' : '',
                        wide ? 'main--wide' : '',
                    ].filter(Boolean).join(' ')}
                >
                    <div className="main-inner">{children}</div>
                </main>
            </div>
            <FlashToast />
        </>
    );
}
