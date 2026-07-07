import { useEffect, useMemo, useRef, useState } from 'react';

export function phoneOptionCode(item) {
    return (item.phone ?? item.code.toLowerCase()).toLowerCase();
}

export function uniquePhonePresets(geoPresets) {
    const seen = new Set();

    return geoPresets.filter((item) => {
        const code = phoneOptionCode(item);
        if (seen.has(code)) {
            return false;
        }
        seen.add(code);

        return true;
    });
}

export default function PhoneGeoSelect({ options, selected, onToggle }) {
    const [open, setOpen] = useState(false);
    const [query, setQuery] = useState('');
    const rootRef = useRef(null);

    const filtered = useMemo(() => {
        const q = query.trim().toLowerCase();
        if (!q) {
            return options;
        }

        return options.filter((item) => {
            const code = phoneOptionCode(item);

            return code.includes(q)
                || item.code.toLowerCase().includes(q)
                || item.name.toLowerCase().includes(q);
        });
    }, [options, query]);

    useEffect(() => {
        if (!open) {
            return undefined;
        }

        const onDoc = (event) => {
            if (rootRef.current && !rootRef.current.contains(event.target)) {
                setOpen(false);
            }
        };

        const onKey = (event) => {
            if (event.key === 'Escape') {
                setOpen(false);
            }
        };

        document.addEventListener('mousedown', onDoc);
        document.addEventListener('keydown', onKey);

        return () => {
            document.removeEventListener('mousedown', onDoc);
            document.removeEventListener('keydown', onKey);
        };
    }, [open]);

    const summary = selected.length
        ? selected.map((code) => code.toUpperCase()).join(', ')
        : 'Оберіть країни…';

    return (
        <div className={`phone-geo-select${open ? ' is-open' : ''}`} ref={rootRef}>
            <button
                type="button"
                className="phone-geo-select__trigger"
                onClick={() => setOpen((value) => !value)}
                aria-expanded={open}
            >
                <span className="phone-geo-select__value">{summary}</span>
                <span className="phone-geo-select__badge">{selected.length}</span>
            </button>
            {open && (
                <div className="phone-geo-select__panel">
                    <input
                        type="search"
                        className="phone-geo-select__search"
                        placeholder="Пошук країни…"
                        value={query}
                        onChange={(event) => setQuery(event.target.value)}
                        autoFocus
                    />
                    <div className="phone-geo-select__list">
                        {filtered.map((item) => {
                            const code = phoneOptionCode(item);
                            const active = selected.includes(code);

                            return (
                                <label key={code} className="phone-geo-select__option">
                                    <input
                                        type="checkbox"
                                        checked={active}
                                        onChange={() => onToggle(code)}
                                    />
                                    <span>{code.toUpperCase()} — {item.name}</span>
                                </label>
                            );
                        })}
                        {filtered.length === 0 && (
                            <p className="phone-geo-select__empty">Нічого не знайдено</p>
                        )}
                    </div>
                </div>
            )}
        </div>
    );
}
