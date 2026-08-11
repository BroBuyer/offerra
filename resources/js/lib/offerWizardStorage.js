export const WIZARD_STORAGE_KEY = 'offerra:offer-create-wizard';

export function loadWizardState(defaults) {
    if (typeof window === 'undefined') {
        return { step: 0, data: defaults };
    }

    try {
        const raw = sessionStorage.getItem(WIZARD_STORAGE_KEY);

        if (!raw) {
            return { step: 0, data: defaults };
        }

        const parsed = JSON.parse(raw);
        const step = typeof parsed.step === 'number'
            ? Math.min(Math.max(parsed.step, 0), 3)
            : 0;

        return {
            step,
            data: { ...defaults, ...(parsed.data ?? {}) },
        };
    } catch {
        return { step: 0, data: defaults };
    }
}

export function saveWizardState(step, data) {
    if (typeof window === 'undefined') {
        return;
    }

    sessionStorage.setItem(WIZARD_STORAGE_KEY, JSON.stringify({ step, data }));
}

export function clearWizardState() {
    if (typeof window === 'undefined') {
        return;
    }

    sessionStorage.removeItem(WIZARD_STORAGE_KEY);
}
