# Audax — шаблон ленда

Світлий ленд про AI-трейдинг: герой із формою, тікер, калькулятор прибутку в модалці,
слайдер відгуків, FAQ і повний набір юридичних сторінок.

## Мови

`langs/en/` — джерело (англійська). Інші мови збираються з паків у
`scripts/audax-i18n/`, без переписування розмітки.

```
node scripts/build-audax-langs.mjs       # усі мови
node scripts/build-audax-langs.mjs fr    # одна мова
```

Нова мова: скопіюй `scripts/audax-i18n/fr.mjs` (або `fr-ui.mjs` + `fr-legal.mjs`),
переклади значення, додай код у `scripts/audax-i18n/index.mjs`, знову запусти білд.
Не правити згенерований `langs/{code}/` вручну — наступний білд його перезапише.

## Прев’ю

`/preview/audax/langs/en/`
`/preview/audax/langs/fr/`

## Структура

- `langs/en/` — повний ленд
- `includes/helpers.php`, `includes/keitaro.php` — спільні хелпери (синхронізуються при генерації)
- `integration/` — lead pipeline (send.php, LeadProcessor.php, validation.js)

## Особливості

- **CSS розбитий на mobile/desktop.** Сторінки підвантажують `main-mob.min.css` і
  `main-desk.min.css` через `preload` + підміну на `stylesheet`; десктопний лист
  закритий брейкпоінтом `(min-width: 769px)`. `static/css/main.css` — fallback для
  no-JS, який тягне обидва одним запитом.
- **Поля форми** звуться `first_name` / `last_name` / `email` / `phone`.
  `integration/validation.js` тут адаптований: чіпляється до `form.lead-form`
  (бо `.leadform` у цій розмітці — div-обгортка) і кладе міжнародний номер і в
  `phone`, і в `fullphone`, бо `LeadProcessor` читає `phone` першим.
- **Форма підключається через `includes/form.php`.** Кожне місце передає свої
  класи (`$form_wrap_class`, `$form_field_classes`, `$form_submit`,
  `$form_phone_id`), тож верстка кожної з форм лишається своєю.
- **intlTelInput ініціалізує лише `validation.js`** — країну він бере з
  `FORM_PHONE_COUNTRY` згенерованого офера. Бібліотека тут сучасної версії, яка
  знає `showSelectedDialCode`, а не старий `separateDialCode`: саме ця опція
  друкує код країни і ставить прапор ліворуч.
- **Тікер TradingView** — це custom element із закритим shadow root, тож
  усередину він не стилюється. Логотип у правому верхньому куті перекривається
  накладкою з `ticker.css`, а висота смуги підібрана впритул до рядка цін, бо
  роздільники клітинок малюються на всю висоту й у вільному місці читаються як
  випадкові вертикальні риски.
