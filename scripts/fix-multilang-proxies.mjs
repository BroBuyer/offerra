import fs from 'node:fs';
import path from 'node:path';

const base = path.resolve('templates/multilang/langs');
const langs = ['cs', 'de', 'fr', 'es', 'it', 'pl', 'pt', 'nl', 'hr', 'tr', 'no'];

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
    console.log('fixed', lang);
}
