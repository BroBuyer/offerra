/**
 * Resolve min deposit / currency from the admin DB catalog (panel.geo_min_deposits).
 */

export function normalizeGeoCode(geo) {
    return String(geo || '')
        .replace(/[^a-zA-Z]/g, '')
        .toUpperCase()
        .slice(0, 2);
}

/**
 * @param {string} geo
 * @param {Record<string, { min_deposit?: string, currency?: string }>|null|undefined} catalog
 * @returns {{ min_deposit: string, currency: string } | null}
 */
export function lookupGeoDeposit(geo, catalog) {
    const code = normalizeGeoCode(geo);
    if (code.length !== 2 || !catalog || typeof catalog !== 'object') {
        return null;
    }

    const row = catalog[code];
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

/** True when GEO is a normal country code with no row in the admin catalog. */
export function geoDepositMissingFromCatalog(geo, catalog) {
    const code = normalizeGeoCode(geo);
    if (code.length !== 2 || code === 'ML') {
        return false;
    }

    return lookupGeoDeposit(code, catalog) === null;
}
