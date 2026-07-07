import PhoneGeoSelect, { normalizePhoneCountries, uniquePhonePresets } from '@/Components/PhoneGeoSelect';
import { Link, useForm, usePage } from '@inertiajs/react';
import { useEffect, useMemo } from 'react';

export default function OfferEditModal({
    offer,
    geoPresets,
    hasKeitaroApiKey,
    onClose,
}) {
    const phoneCountries = normalizePhoneCountries(offer.phone_countries, offer.phone);

    const { errors: pageErrors } = usePage().props;
    const { data, setData, patch, processing, errors, reset, clearErrors } = useForm({
        phone: offer.phone || phoneCountries[0] || '',
        phone_countries: phoneCountries,
        create_keitaro: false,
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

    const phoneOptions = useMemo(() => uniquePhonePresets(geoPresets), [geoPresets]);
    const selectedPhones = normalizePhoneCountries(data.phone_countries, data.phone);

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

    return (
        <div className="modal-backdrop" onClick={() => !processing && onClose()}>
            <div
                className="modal-card"
                role="dialog"
                aria-labelledby="offer-edit-title"
                onClick={(event) => event.stopPropagation()}
            >
                <div className="modal-card__header">
                    <div>
                        <h3 id="offer-edit-title">Редагувати оффер</h3>
                        <p className="card-desc">{offer.brand} · {offer.domain}</p>
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

                    {(errors.phone || errors.phone_countries || errors.create_keitaro || errors.edit || pageErrors?.edit) && (
                        <p className="field-hint" style={{ color: '#f87171' }}>
                            {pageErrors?.edit || errors.edit || errors.phone || errors.phone_countries || errors.create_keitaro}
                        </p>
                    )}

                    <p className="field-hint">
                        Після збереження натисніть «Деплой», щоб оновити файли на сервері.
                    </p>

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
