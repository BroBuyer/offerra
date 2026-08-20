export const WIZARD_STORAGE_KEY = 'offerra:offer-create-wizard';

const PURCHASE_STATUSES = new Set(['pending', 'owned', 'purchased', 'error', 'buying']);

function normalizeBulkItems(items) {
    if (!Array.isArray(items)) {
        return [];
    }

    return items
        .filter((item) => item && typeof item.domain === 'string' && item.domain.trim())
        .map((item) => {
            const status = PURCHASE_STATUSES.has(item.purchaseStatus)
                ? item.purchaseStatus
                : 'pending';

            return {
                domain: String(item.domain).trim().toLowerCase(),
                template: typeof item.template === 'string' ? item.template : '',
                price: item.price ?? null,
                amount: typeof item.amount === 'number' && !Number.isNaN(item.amount) ? item.amount : null,
                currency: typeof item.currency === 'string' ? item.currency : '',
                // Mid-purchase should not stick as "buying" after reload.
                purchaseStatus: status === 'buying' ? 'pending' : status,
                purchaseError: typeof item.purchaseError === 'string' ? item.purchaseError : null,
            };
        });
}

export function loadWizardState(defaults) {
    if (typeof window === 'undefined') {
        return {
            step: 0,
            data: defaults,
            bulkItems: [],
            domainPurchasedViaPanel: false,
        };
    }

    try {
        const raw = sessionStorage.getItem(WIZARD_STORAGE_KEY);

        if (!raw) {
            return {
                step: 0,
                data: defaults,
                bulkItems: [],
                domainPurchasedViaPanel: false,
            };
        }

        const parsed = JSON.parse(raw);
        const step = typeof parsed.step === 'number'
            ? Math.min(Math.max(parsed.step, 0), 3)
            : 0;

        return {
            step,
            data: { ...defaults, ...(parsed.data ?? {}) },
            bulkItems: normalizeBulkItems(parsed.bulkItems),
            domainPurchasedViaPanel: Boolean(parsed.domainPurchasedViaPanel),
        };
    } catch {
        return {
            step: 0,
            data: defaults,
            bulkItems: [],
            domainPurchasedViaPanel: false,
        };
    }
}

export function saveWizardState(step, data, extras = {}) {
    if (typeof window === 'undefined') {
        return;
    }

    sessionStorage.setItem(WIZARD_STORAGE_KEY, JSON.stringify({
        step,
        data,
        bulkItems: normalizeBulkItems(extras.bulkItems),
        domainPurchasedViaPanel: Boolean(extras.domainPurchasedViaPanel),
    }));
}

export function clearWizardState() {
    if (typeof window === 'undefined') {
        return;
    }

    sessionStorage.removeItem(WIZARD_STORAGE_KEY);
}

/** Remove ?fresh=1 so a browser refresh restores the draft instead of wiping again. */
export function stripFreshQueryParam() {
    if (typeof window === 'undefined') {
        return;
    }

    try {
        const url = new URL(window.location.href);

        if (!url.searchParams.has('fresh')) {
            return;
        }

        url.searchParams.delete('fresh');
        const qs = url.searchParams.toString();
        window.history.replaceState(window.history.state, '', url.pathname + (qs ? `?${qs}` : '') + url.hash);
    } catch {
        // ignore
    }
}
