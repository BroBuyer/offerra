export default function GuestLayout({ children, subtitle = 'Панель оферів' }) {
    return (
        <div className="auth-screen">
            <div className="auth-bg" aria-hidden="true" />
            <div className="auth-card">
                <div className="auth-brand">
                    <span className="auth-mark" aria-hidden="true">O</span>
                    <div>
                        <div className="auth-name">Offerra</div>
                        {subtitle ? <div className="auth-sub">{subtitle}</div> : null}
                    </div>
                </div>
                {children}
            </div>
        </div>
    );
}
