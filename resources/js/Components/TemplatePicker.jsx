/**
 * Template chooser with “already used for this brand” markers.
 *
 * @param {{ id: string, name?: string }[]} templates
 * @param {string} value
 * @param {(id: string) => void} onChange
 * @param {string[]} usedTemplateIds
 * @param {string[]} [disabledTemplateIds]
 * @param {string} [idPrefix]
 * @param {string} [disabledReason]
 */
export default function TemplatePicker({
    templates = [],
    value,
    onChange,
    usedTemplateIds = [],
    disabledTemplateIds = [],
    idPrefix = 'template',
    disabledReason = 'Немає обраної мови',
}) {
    if (!templates.length) {
        return (
            <p className="field-hint" style={{ color: '#f59e0b' }}>
                Немає шаблонів у <code>templates/</code> — додайте підпапку з лендом.
            </p>
        );
    }

    const usedSet = new Set(usedTemplateIds);
    const disabledSet = new Set(disabledTemplateIds);

    return (
        <div
            className="template-picker"
            role="listbox"
            aria-label="Тема ленду"
            id={idPrefix}
        >
            {templates.map((item) => {
                const used = usedSet.has(item.id);
                const disabled = disabledSet.has(item.id);
                const selected = value === item.id;
                const usedTip = 'Цей шаблон уже використовується для цього бренду';

                return (
                    <button
                        key={item.id}
                        type="button"
                        role="option"
                        aria-selected={selected}
                        aria-disabled={disabled}
                        disabled={disabled}
                        title={disabled ? disabledReason : (used ? usedTip : undefined)}
                        className={
                            'template-picker__item'
                            + (selected ? ' is-selected' : '')
                            + (used ? ' is-used' : '')
                            + (disabled ? ' is-disabled' : '')
                        }
                        onClick={() => {
                            if (!disabled) {
                                onChange(item.id);
                            }
                        }}
                    >
                        <span className="template-picker__name">{item.name || item.id}</span>
                        {used && (
                            <span
                                className="template-picker__used-badge"
                                title={usedTip}
                                aria-label={usedTip}
                            >
                                вже є
                            </span>
                        )}
                        {disabled && (
                            <span className="template-picker__lang-badge" aria-hidden="true">
                                немає мови
                            </span>
                        )}
                    </button>
                );
            })}
        </div>
    );
}

/**
 * @param {Record<string, Record<string, number>>|undefined} usage
 * @param {string} brand
 * @param {{ excludeTemplate?: string, excludeIfCountIsOne?: boolean }} [opts]
 * @returns {string[]}
 */
export function usedTemplatesForBrand(usage, brand, opts = {}) {
    const key = String(brand || '').trim().toLowerCase();
    if (!key || !usage || typeof usage !== 'object') {
        return [];
    }

    const counts = usage[key];
    if (!counts || typeof counts !== 'object') {
        return [];
    }

    const excludeTemplate = opts.excludeTemplate || null;
    const excludeIfCountIsOne = Boolean(opts.excludeIfCountIsOne);

    return Object.entries(counts)
        .filter(([templateId, count]) => {
            const n = Number(count) || 0;
            if (n < 1) return false;
            if (
                excludeIfCountIsOne
                && excludeTemplate
                && templateId === excludeTemplate
                && n <= 1
            ) {
                return false;
            }
            return true;
        })
        .map(([templateId]) => templateId);
}
