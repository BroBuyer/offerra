import PhoneGeoSelect, { normalizePhoneCountries, uniquePhonePresets } from '@/Components/PhoneGeoSelect';
import { Link, useForm, usePage } from '@inertiajs/react';
import { useEffect, useMemo } from 'react';

function resolveMarket(geo, geoPresets, availableLanguages) {
    const code = String(geo || '').toUpperCase();
    const preset = geoPresets.find((item) => item.code === code);
    const preferredLang = (preset?.lang || '').toLowerCase();
    const langCodes = availableLanguages.map((item) => item.code);
    const lang = langCodes.includes(preferredLang)
        ? preferredLang
        : (langCodes[0] || preferredLang || '');

    return {
        geo: code,
        lang,
        currency: preset?.currency || '',
        phone: (preset?.phone || lang || '').toLowerCase(),
    };
}

export default function OfferEditModal({
    offer,
    geoPresets = [],
    currencies = [],
    templates = [],
    hasKeitaroApiKey,
    onClose,
}) {
    const phoneCountries = normalizePhoneCountries(offer.phone_countries, offer.phone);
    const initialTemplate = offer.template_id || 'default';

    const { errors: pageErrors } = usePage().props;
    const { data, setData, patch, processing, errors, reset, clearErrors } = useForm({
        brand: offer.brand || '',
        geo: String(offer.geo || '').toUpperCase(),
        lang: String(offer.lang || '').toLowerCase(),
        template: initialTemplate,
        min_deposit: offer.min_deposit || '250',
        currency: String(offer.currency || 'EUR').toUpperCase(),
        phone: offer.phone || phoneCountries[0] || '',
        phone_countries: phoneCountries,
        create_keitaro: false,
        vitals_enabled: Boolean(offer.vitals_enabled),
        auto_redeploy: true,
    });

    useEffect(() => {
        const onKey = (event) => {
            if (event.key === 'Escape' && !processing) {
                onClose();
            }
        };

        document.addEventListener('keydown', onKey);

        return () => document.removeEventListener('keydown', onKey);
    }, [onClose, processing]);

    const selectedTemplate = useMemo(
        () => templates.find((item) => item.id === data.template) ?? templates[0] ?? null,
        [templates, data.template],
    );
    const availableLanguages = selectedTemplate?.languages ?? [];
    const phoneOptions = useMemo(() => uniquePhonePresets(geoPresets), [geoPresets]);
    const selectedPhones = normalizePhoneCountries(data.phone_countries, data.phone);

    const onTemplateChange = (templateId) => {
        const template = templates.find((item) => item.id === templateId);
        const langs = template?.languages ?? [];
        const langCodes = langs.map((item) => item.code);
        const nextLang = langCodes.includes(data.lang) ? data.lang : (langCodes[0] || data.lang);

        setData((prev) => ({
            ...prev,
            template: templateId,
            lang: nextLang,
        }));
    };

    const onGeoChange = (code) => {
        const resolved = resolveMarket(code, geoPresets, availableLanguages);
        setData((prev) => {
            const phones = normalizePhoneCountries(prev.phone_countries, prev.phone);
            const phoneSet = new Set(phones);
            if (resolved.phone) {
                phoneSet.add(resolved.phone);
            }
            const list = [...phoneSet];
            const phone = list.includes(resolved.phone) ? resolved.phone : (list.includes(prev.phone) ? prev.phone : list[0]);

            return {
                ...prev,
                geo: resolved.geo,
                lang: resolved.lang || prev.lang,
                currency: resolved.currency || prev.currency,
                phone_countries: list,
                phone,
            };
        });
    };

    const togglePhoneCountry = (code) => {
        const normalized = code.toLowerCase();
        setData((prev) => {
            const current = normalizePhoneCountries(prev.phone_countries, prev.phone);
            const set = new Set(current);

            if (set.has(normalized)) {
                if (set.size <= 1) {
                    return prev;
                }
                set.delete(normalized);
            } else {
                set.add(normalized);
            }

            const list = [...set];
            const phone = list.includes(prev.phone) ? prev.phone : list[0];

            return { ...prev, phone_countries: list, phone };
        });
    };

    const submit = (event) => {
        event.preventDefault();
        clearErrors();

        patch(route('offers.update', offer.id), {
            preserveScroll: true,
            onSuccess: () => {
                reset();
                onClose();
            },
        });
    };

    const fieldError =
        pageErrors?.edit
        || errors.edit
        || errors.brand
        || errors.geo
        || errors.lang
        || errors.template
        || errors.min_deposit
        || errors.currency
        || errors.phone
        || errors.phone_countries
        || errors.create_keitaro
        || errors.vitals_enabled;

    return (
        <div className="modal-backdrop" onClick={() => !processing && onClose()}>
            <div
                className="modal-card modal-card--wide"
                role="dialog"
                aria-labelledby="offer-edit-title"
                onClick={(event) => event.stopPropagation()}
            >
                <div className="modal-card__header">
                    <div>
                        <h3 id="offer-edit-title">Редагувати оффер</h3>
                        <p className="card-desc">{offer.domain} · домен не змінюється</p>
                    </div>
                    <button
                        type="button"
                        className="modal-card__close"
                        onClick={onClose}
                        disabled={processing}
                        aria-label="Закрити"
                    >
                        ×
                    </button>
                </div>

                <form onSubmit={submit}>
                    <div className="field">
                        <label htmlFor="edit-brand">Бренд</label>
                        <input
                            id="edit-brand"
                            type="text"
                            value={data.brand}
                            onChange={(event) => setData('brand', event.target.value)}
                            required
                        />
                    </div>

                    <div className="field-row">
                        <div className="field">
                            <label htmlFor="edit-template">Шаблон</label>
                            <select
                                id="edit-template"
                                value={data.template}
                                onChange={(event) => onTemplateChange(event.target.value)}
                            >
                                {templates.map((item) => (
                                    <option key={item.id} value={item.id}>
                                        {item.name || item.id}
                                    </option>
                                ))}
                            </select>
                        </div>
                        <div className="field">
                            <label htmlFor="edit-geo">GEO (CRM)</label>
                            <select
                                id="edit-geo"
                                value={data.geo}
                                onChange={(event) => onGeoChange(event.target.value)}
                            >
                                {geoPresets.map((item) => (
                                    <option key={item.code} value={item.code}>
                                        {item.code}{item.name ? ` — ${item.name}` : ''}
                                    </option>
                                ))}
                            </select>
                        </div>
                        <div className="field">
                            <label htmlFor="edit-lang">Мова</label>
                            <select
                                id="edit-lang"
                                value={data.lang}
                                onChange={(event) => setData('lang', event.target.value.toLowerCase())}
                            >
                                {availableLanguages.map((item) => (
                                    <option key={item.code} value={item.code}>
                                        {item.code}{item.name ? ` — ${item.name}` : ''}
                                    </option>
                                ))}
                            </select>
                        </div>
                    </div>

                    <div className="field-row">
                        <div className="field">
                            <label htmlFor="edit-min-deposit">Мін. депозит</label>
                            <input
                                id="edit-min-deposit"
                                type="text"
                                value={data.min_deposit}
                                onChange={(event) => setData('min_deposit', event.target.value)}
                                required
                            />
                        </div>
                        <div className="field">
                            <label htmlFor="edit-currency">Валюта</label>
                            <select
                                id="edit-currency"
                                value={data.currency}
                                onChange={(event) => setData('currency', event.target.value.toUpperCase())}
                            >
                                {currencies.map(({ code, name }) => (
                                    <option key={code} value={code}>
                                        {code}{name ? ` — ${name}` : ''}
                                    </option>
                                ))}
                            </select>
                        </div>
                    </div>

                    <div className="field">
                        <label>Phone GEO (форма)</label>
                        <PhoneGeoSelect
                            options={phoneOptions}
                            selected={selectedPhones}
                            onToggle={togglePhoneCountry}
                        />
                        <p className="field-hint">
                            За IP (Cloudflare) підставляється код зі списку, інакше — дефолтний.
                        </p>
                    </div>

                    <div className="field">
                        <label htmlFor="edit-phone">Дефолтний phone</label>
                        <select
                            id="edit-phone"
                            value={data.phone}
                            onChange={(event) => setData('phone', event.target.value.toLowerCase())}
                        >
                            {selectedPhones.map((code) => (
                                <option key={code} value={code}>
                                    {code.toUpperCase()}
                                </option>
                            ))}
                        </select>
                    </div>

                    {offer.can_create_keitaro && (
                        <div className="field">
                            <label className="field-check" htmlFor="edit-create-keitaro">
                                <input
                                    id="edit-create-keitaro"
                                    type="checkbox"
                                    checked={data.create_keitaro}
                                    onChange={(event) => setData('create_keitaro', event.target.checked)}
                                />
                                <span>Створити кампанію в Keitaro</span>
                            </label>
                            {!hasKeitaroApiKey && (
                                <p className="field-hint" style={{ color: '#f59e0b' }}>
                                    Збережіть Keitaro Admin API key у{' '}
                                    <Link href={route('settings.index')}>налаштуваннях</Link>.
                                </p>
                            )}
                        </div>
                    )}

                    {offer.keitaro_id && (
                        <p className="field-hint">
                            Keitaro: #{offer.keitaro_id} (вже привʼязано)
                        </p>
                    )}

                    <div className="field">
                        <label className="field-check" htmlFor="edit-vitals-enabled">
                            <input
                                id="edit-vitals-enabled"
                                type="checkbox"
                                checked={data.vitals_enabled}
                                onChange={(event) => setData('vitals_enabled', event.target.checked)}
                            />
                            <span title="CWV — Core Web Vitals collector (дзеркала / редірект з копій)">
                                CWV-collector (дзеркала / редірект з копій)
                            </span>
                        </label>
                    </div>

                    <div className="field">
                        <label className="field-check" htmlFor="edit-auto-redeploy">
                            <input
                                id="edit-auto-redeploy"
                                type="checkbox"
                                checked={data.auto_redeploy}
                                onChange={(event) => setData('auto_redeploy', event.target.checked)}
                            />
                            <span>Одразу передеплоїти після збереження</span>
                        </label>
                        <p className="field-hint">
                            Зміна мови/шаблону перезбирає ленд з нуля. Домен і Cloudflare/Dynadot не чіпаються.
                        </p>
                    </div>

                    {fieldError && (
                        <p className="field-hint" style={{ color: '#f87171' }}>
                            {fieldError}
                        </p>
                    )}

                    <div className="btn-row">
                        <button
                            type="button"
                            className="btn btn-ghost"
                            onClick={onClose}
                            disabled={processing}
                        >
                            Скасувати
                        </button>
                        <button type="submit" className="btn btn-primary" disabled={processing}>
                            {processing ? 'Збереження…' : 'Зберегти'}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    );
}
