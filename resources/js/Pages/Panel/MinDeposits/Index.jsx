import PanelLayout from '@/Layouts/PanelLayout';
import { router, useForm, usePage } from '@inertiajs/react';
import { useState } from 'react';

function formatWhen(value) {
    if (!value) {
        return '—';
    }
    try {
        return new Date(value).toLocaleString('uk-UA');
    } catch {
        return value;
    }
}

export default function MinDepositsIndex({ rows = [], currencies = [], geoPresets = [] }) {
    const { flash, errors } = usePage().props;
    const [busyId, setBusyId] = useState(null);
    const [editingId, setEditingId] = useState(null);

    const createForm = useForm({
        geo: '',
        min_deposit: '',
        currency: 'EUR',
    });

    const editForm = useForm({
        geo: '',
        min_deposit: '',
        currency: 'EUR',
    });

    const submitCreate = (e) => {
        e.preventDefault();
        createForm.post(route('min-deposits.store'), {
            preserveScroll: true,
            onSuccess: () => {
                createForm.reset();
                createForm.setData({ geo: '', min_deposit: '', currency: 'EUR' });
            },
        });
    };

    const startEdit = (row) => {
        setEditingId(row.id);
        editForm.setData({
            geo: row.geo,
            min_deposit: row.min_deposit,
            currency: row.currency,
        });
        editForm.clearErrors();
    };

    const submitEdit = (e) => {
        e.preventDefault();
        if (!editingId) {
            return;
        }
        editForm.post(route('min-deposits.update', editingId), {
            preserveScroll: true,
            onSuccess: () => setEditingId(null),
        });
    };

    const removeRow = (row) => {
        if (!window.confirm(`Видалити мін. деп для ${row.geo}?`)) {
            return;
        }
        setBusyId(row.id);
        router.delete(route('min-deposits.destroy', row.id), {
            preserveScroll: true,
            onFinish: () => setBusyId(null),
        });
    };

    return (
        <PanelLayout title="Мін. депи" wide>
            <header className="page-header">
                <h2>Мін. депи по GEO</h2>
                <p>
                    При створенні / редагуванні оффера вибір GEO підтягне суму й валюту звідси.
                    Значення можна змінити вручну в формі оффера.
                </p>
            </header>

            {flash?.success && (
                <div className="card" style={{ marginBottom: '1rem' }}>
                    <p className="card-desc">{flash.success}</p>
                </div>
            )}

            {(errors?.geo || createForm.errors.geo || createForm.errors.min_deposit || createForm.errors.currency) && (
                <div className="card" style={{ marginBottom: '1rem', borderColor: '#f87171' }}>
                    <p className="card-desc" style={{ color: '#f87171' }}>
                        {errors?.geo
                            || createForm.errors.geo
                            || createForm.errors.min_deposit
                            || createForm.errors.currency}
                    </p>
                </div>
            )}

            <section className="card" style={{ marginBottom: '1.5rem' }}>
                <h3>Додати</h3>
                <form onSubmit={submitCreate}>
                    <div className="field-row">
                        <div className="field">
                            <label htmlFor="md-geo">GEO</label>
                            <input
                                id="md-geo"
                                list="md-geo-presets"
                                value={createForm.data.geo}
                                onChange={(e) => createForm.setData('geo', e.target.value.toUpperCase().slice(0, 2))}
                                placeholder="FR"
                                maxLength={2}
                                required
                            />
                            <datalist id="md-geo-presets">
                                {geoPresets.map((g) => (
                                    <option key={g.code} value={g.code}>{g.name}</option>
                                ))}
                            </datalist>
                        </div>
                        <div className="field">
                            <label htmlFor="md-amount">Сума</label>
                            <input
                                id="md-amount"
                                value={createForm.data.min_deposit}
                                onChange={(e) => createForm.setData('min_deposit', e.target.value)}
                                placeholder="250"
                                required
                            />
                        </div>
                        <div className="field">
                            <label htmlFor="md-currency">Валюта</label>
                            <select
                                id="md-currency"
                                value={createForm.data.currency}
                                onChange={(e) => createForm.setData('currency', e.target.value)}
                            >
                                {currencies.map((c) => (
                                    <option key={c.code} value={c.code}>{c.code} — {c.name}</option>
                                ))}
                            </select>
                        </div>
                    </div>
                    <div className="btn-row">
                        <button type="submit" className="btn btn-primary" disabled={createForm.processing}>
                            {createForm.processing ? 'Додавання…' : 'Додати'}
                        </button>
                    </div>
                </form>
            </section>

            <div className="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th>GEO</th>
                            <th>Сума</th>
                            <th>Валюта</th>
                            <th>Додано</th>
                            <th>Оновлено</th>
                            <th />
                        </tr>
                    </thead>
                    <tbody>
                        {rows.map((row) => (
                            <tr key={row.id}>
                                <td><strong>{row.geo}</strong></td>
                                <td>{row.min_deposit}</td>
                                <td>{row.currency}</td>
                                <td className="field-hint">{formatWhen(row.created_at)}</td>
                                <td className="field-hint">{formatWhen(row.updated_at)}</td>
                                <td>
                                    <button type="button" className="btn btn-ghost btn-sm" onClick={() => startEdit(row)}>
                                        Edit
                                    </button>
                                    <button
                                        type="button"
                                        className="btn btn-ghost btn-sm"
                                        disabled={busyId === row.id}
                                        onClick={() => removeRow(row)}
                                    >
                                        {busyId === row.id ? '…' : 'Del'}
                                    </button>
                                </td>
                            </tr>
                        ))}
                        {rows.length === 0 && (
                            <tr>
                                <td colSpan={6} className="field-hint">Ще немає записів — додайте перший GEO вище.</td>
                            </tr>
                        )}
                    </tbody>
                </table>
            </div>

            {editingId && (
                <section className="card" style={{ marginTop: '1.5rem' }}>
                    <h3>Редагувати</h3>
                    <form onSubmit={submitEdit}>
                        <div className="field-row">
                            <div className="field">
                                <label>GEO</label>
                                <input
                                    value={editForm.data.geo}
                                    onChange={(e) => editForm.setData('geo', e.target.value.toUpperCase().slice(0, 2))}
                                    maxLength={2}
                                    required
                                />
                                {editForm.errors.geo && (
                                    <p className="field-hint" style={{ color: '#f87171' }}>{editForm.errors.geo}</p>
                                )}
                            </div>
                            <div className="field">
                                <label>Сума</label>
                                <input
                                    value={editForm.data.min_deposit}
                                    onChange={(e) => editForm.setData('min_deposit', e.target.value)}
                                    required
                                />
                            </div>
                            <div className="field">
                                <label>Валюта</label>
                                <select
                                    value={editForm.data.currency}
                                    onChange={(e) => editForm.setData('currency', e.target.value)}
                                >
                                    {currencies.map((c) => (
                                        <option key={c.code} value={c.code}>{c.code}</option>
                                    ))}
                                </select>
                            </div>
                        </div>
                        <div className="btn-row">
                            <button type="submit" className="btn btn-primary" disabled={editForm.processing}>
                                Зберегти
                            </button>
                            <button type="button" className="btn btn-ghost" onClick={() => setEditingId(null)}>
                                Скасувати
                            </button>
                        </div>
                    </form>
                </section>
            )}
        </PanelLayout>
    );
}
