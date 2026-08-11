export const GEO_DEPOSIT_PREFS_KEY = 'offerra:geo-deposit-prefs';

function readAll() {
    if (typeof window === 'undefined') {
        return {};
    }

    try {
        const raw = localStorage.getItem(GEO_DEPOSIT_PREFS_KEY);
        if (!raw) {
            return {};
        }
        const parsed = JSON.parse(raw);
        return parsed && typeof parsed === 'object' ? parsed : {};
    } catch {
        return {};
    }
}

function writeAll(prefs) {
    if (typeof window === 'undefined') {
        return;
    }

    try {
        localStorage.setItem(GEO_DEPOSIT_PREFS_KEY, JSON.stringify(prefs));
    } catch {
        // Quota / private mode — ignore.
    }
}

function normalizeGeoCode(geo) {
    return String(geo || '')
        .replace(/[^a-zA-Z]/g, '')
        .toUpperCase()
        .slice(0, 2);
}

/** @returns {{ min_deposit: string, currency: string } | null} */
export function getGeoDepositPref(geo) {
    const code = normalizeGeoCode(geo);
    if (code.length !== 2) {
        return null;
    }

    const row = readAll()[code];
    if (!row || typeof row !== 'object') {
        return null;
    }

    const minDeposit = String(row.min_deposit ?? '').trim();
    const currency = String(row.currency ?? '').trim().toUpperCase();
    if (!minDeposit && !currency) {
        return null;
    }

    return {
        ...(minDeposit ? { min_deposit: minDeposit } : {}),
        ...(currency ? { currency } : {}),
    };
}

export function saveGeoDepositPref(geo, minDeposit, currency) {
    const code = normalizeGeoCode(geo);
    if (code.length !== 2) {
        return;
    }

    const deposit = String(minDeposit ?? '').trim();
    const curr = String(currency ?? '').trim().toUpperCase();
    if (!deposit && !curr) {
        return;
    }

    const all = readAll();
    all[code] = {
        ...(deposit ? { min_deposit: deposit } : all[code]?.min_deposit ? { min_deposit: all[code].min_deposit } : {}),
        ...(curr ? { currency: curr } : all[code]?.currency ? { currency: all[code].currency } : {}),
    };
    writeAll(all);
}
