export const WIZARD_STORAGE_KEY = 'offerra:offer-create-wizard';
const LEGACY_SESSION_KEY = WIZARD_STORAGE_KEY;

const PURCHASE_STATUSES = new Set(['pending', 'owned', 'purchased', 'error', 'buying']);

function storage() {
    if (typeof window === 'undefined') {
        return null;
    }

    try {
        return window.localStorage;
    } catch {
        return null;
    }
}

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

function emptyState(defaults) {
    return {
        step: 0,
        data: defaults,
        bulkItems: [],
        domainPurchasedViaPanel: false,
    };
}

function parseStored(raw, defaults) {
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
}

function readRawDraft() {
    const store = storage();
    if (!store) {
        return null;
    }

    try {
        let raw = store.getItem(WIZARD_STORAGE_KEY);

        // One-time migration from the old per-tab sessionStorage draft.
        if (!raw && typeof sessionStorage !== 'undefined') {
            try {
                raw = sessionStorage.getItem(LEGACY_SESSION_KEY);
                if (raw) {
                    store.setItem(WIZARD_STORAGE_KEY, raw);
                    sessionStorage.removeItem(LEGACY_SESSION_KEY);
                }
            } catch {
                // ignore
            }
        }

        return raw;
    } catch {
        return null;
    }
}

export function draftHasProgress(state) {
    if (!state) {
        return false;
    }

    if ((state.bulkItems ?? []).length > 0) {
        return true;
    }

    if (state.domainPurchasedViaPanel) {
        return true;
    }

    if ((state.step ?? 0) > 0) {
        return true;
    }

    const data = state.data ?? {};
    const brand = typeof data.brand === 'string' ? data.brand.trim() : '';
    const domain = typeof data.domain === 'string' ? data.domain.trim() : '';
    const template = typeof data.template === 'string' ? data.template.trim() : '';

    return Boolean(brand || domain || template);
}

export function loadWizardState(defaults) {
    if (typeof window === 'undefined') {
        return emptyState(defaults);
    }

    try {
        const raw = readRawDraft();
        if (!raw) {
            return emptyState(defaults);
        }

        return parseStored(raw, defaults);
    } catch {
        return emptyState(defaults);
    }
}

export function peekWizardDraft(defaults = {}) {
    if (typeof window === 'undefined') {
        return null;
    }

    try {
        const raw = readRawDraft();
        if (!raw) {
            return null;
        }

        return parseStored(raw, defaults);
    } catch {
        return null;
    }
}

export function saveWizardState(step, data, extras = {}) {
    const store = storage();
    if (!store) {
        return;
    }

    try {
        store.setItem(WIZARD_STORAGE_KEY, JSON.stringify({
            step,
            data,
            bulkItems: normalizeBulkItems(extras.bulkItems),
            domainPurchasedViaPanel: Boolean(extras.domainPurchasedViaPanel),
            updatedAt: new Date().toISOString(),
        }));
    } catch {
        // Quota / private mode — ignore.
    }
}

export function clearWizardState() {
    const store = storage();
    if (!store) {
        return;
    }

    try {
        store.removeItem(WIZARD_STORAGE_KEY);
    } catch {
        // ignore
    }

    try {
        sessionStorage.removeItem(LEGACY_SESSION_KEY);
    } catch {
        // ignore
    }
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
