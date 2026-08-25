# Solano — шаблон ленда

Шаблон на базі [solanobursencia.co](https://solanobursencia.co/): темний fintech-ленд з формою, відгуками, таблицею порівняння, калькулятором депозиту, квізом, live-ринками та FAQ.

## Мови

Усі мовні пакети успадковані від `aurel` (22 мови). Референсний контент — `langs/es/`.

## Прев’ю

`/preview/solano/langs/es/`

## Структура

- `langs/{code}/` — повний ленд на кожну мову
- `includes/helpers.php` — спільні хелпери (синхронізуються при генерації)
- `integration/` — lead pipeline (send.php, LeadProcessor.php, validation.js)
