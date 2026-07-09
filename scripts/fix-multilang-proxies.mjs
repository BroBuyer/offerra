import fs from 'node:fs';
import path from 'node:path';

const base = path.resolve('templates/multilang/langs');
const langs = ['cs', 'de', 'fr', 'es', 'it', 'pl', 'pt', 'nl', 'hr', 'tr', 'no', 'sk', 'da'];

for (const lang of langs) {
    const dir = path.join(base, lang, 'includes');
    fs.writeFileSync(
        path.join(dir, 'config.php'),
        `<?php\n\ndefine('ACTIVE_LANG', '${lang}');\nrequire_once __DIR__ . '/../../../includes/config.php';\n`,
    );
    fs.writeFileSync(
        path.join(dir, 'header.php'),
        `<?php\n\nrequire_once __DIR__ . '/../../../includes/header.php';\n`,
    );
    const headPath = path.join(dir, 'head.php');
    if (fs.existsSync(headPath)) {
        const head = fs.readFileSync(headPath, 'utf8');
        const updated = head.replace(
            /href="<\?= asset\('static\/css\/main\.css'\) \?>"/g,
            'href="<?= asset_version(\'static/css/main.css\') ?>"',
        );
        if (updated !== head) {
            fs.writeFileSync(headPath, updated);
        }
    }
    console.log('fixed', lang);
}
