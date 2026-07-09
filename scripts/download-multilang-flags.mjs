import fs from 'node:fs';
import path from 'node:path';
import https from 'node:https';

const outDir = path.resolve('templates/multilang/static/img/flags');
fs.mkdirSync(outDir, { recursive: true });

// Country ISO2 (filenames) for language switcher.
const codes = ['gb', 'cz', 'sk', 'de', 'fr', 'es', 'it', 'pl', 'pt', 'nl', 'hr', 'tr', 'no', 'dk'];

function download(url, dest) {
  return new Promise((resolve, reject) => {
    const file = fs.createWriteStream(dest);
    https
      .get(url, (res) => {
        if (res.statusCode && res.statusCode >= 400) {
          reject(new Error(`HTTP ${res.statusCode} for ${url}`));
          res.resume();
          return;
        }

        res.pipe(file);
        file.on('finish', () => file.close(resolve));
      })
      .on('error', (err) => {
        fs.unlink(dest, () => undefined);
        reject(err);
      });
  });
}

for (const code of codes) {
  const url = `https://flagcdn.com/24x18/${code}.png`;
  const dest = path.join(outDir, `${code}.png`);
  console.log(`Downloading ${code} ...`);
  await download(url, dest);
}

console.log('Done.');

