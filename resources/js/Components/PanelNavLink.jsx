import { Link } from '@inertiajs/react';

export default function PanelNavLink({ href, active, icon, children }) {
    return (
        <Link
            href={href}
            className={`nav-link${active ? ' is-active' : ''}`}
        >
            <span className="icon">{icon}</span>
            {children}
        </Link>
    );
}
