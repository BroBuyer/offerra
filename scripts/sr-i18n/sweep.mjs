/**
 * Second-pass leftover Croatian → Serbian across langs/sr and sr dicts.
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const ROOT = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '../..');

const EXTRA = [
  ['Uvjetima korišćenja', 'Uslovima korišćenja'],
  ['Uvjeti korišćenja', 'Uslovi korišćenja'],
  ['ovim Uvjetima', 'ovim Uslovima'],
  ['ovim Uvjetima', 'ovim Uslovima'],
  ['ove Uvjete', 'ove Uslove'],
  ['ovih Uvjeta', 'ovih Uslova'],
  ['Ovi Uvjeti', 'Ovi Uslovi'],
  ['Uvjeti', 'Uslovi'],
  ['uvjeti', 'uslovi'],
  ['jamčimo', 'garantujemo'],
  ['jamčiti', 'garantovati'],
  ['jamči', 'garantuje'],
  ['jamstva', 'garancije'],
  ['jamstvo', 'garancija'],
  ['utjecati', 'uticati'],
  ['utječe', 'utiče'],
  ['utjecaj', 'uticaj'],
  ['vrijednost', 'vrednost'],
  ['vrijednosti', 'vrednosti'],
  ['povjerenja', 'poverenja'],
  ['povjerenje', 'poverenje'],
  ['sučelje', 'interfejs'],
  ['sučelja', 'interfejsa'],
  ['mobitelu', 'mobilnom'],
  ['mobitel', 'mobilni'],
  ['sustav', 'sistem'],
  ['cijelosti', 'celosti'],
  ['prijevara', 'prevara'],
  ['prijevare', 'prevare'],
  ['neovlaštenog', 'neovlašćenog'],
  ['neovlašteni', 'neovlašćeni'],
  ['osobnih', 'ličnih'],
  ['osobni', 'lični'],
  ['osobne', 'lične'],
  ['osobnim', 'ličnim'],
  ['Tvrtka', 'Kompanija'],
  ['tvrtka', 'kompanija'],
];

const TEXT_EXT = new Set(['.php', '.js', '.mjs', '.json', '.md', '.txt', '.html']);

function apply(text) {
  let out = text;
  const sorted = [...EXTRA].sort((a, b) => b[0].length - a[0].length);
  for (const [from, to] of sorted) {
    if (out.includes(from)) out = out.split(from).join(to);
  }
  return out;
}

function walk(dir, out = []) {
  if (!fs.existsSync(dir)) return out;
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, entry.name);
    if (entry.isDirectory()) walk(p, out);
    else out.push(p);
  }
  return out;
}

function isText(file) {
  return TEXT_EXT.has(path.extname(file).toLowerCase());
}

let files = 0;
let hits = 0;

for (const file of walk(path.join(ROOT, 'templates'))) {
  if (!file.replace(/\\/g, '/').includes('/langs/sr/')) continue;
  if (!isText(file)) continue;
  const text = fs.readFileSync(file, 'utf8');
  const next = apply(text);
  if (next !== text) {
    fs.writeFileSync(file, next);
    files += 1;
    hits += 1;
  }
}

for (const rel of [
  'scripts/lumen-i18n/sr.json',
  'scripts/recupero-i18n/strings/sr.json',
  'scripts/cetra-i18n/sr.json',
  'scripts/audax-i18n/sr-ui.mjs',
  'scripts/audax-i18n/sr-legal.mjs',
  'scripts/thalora-i18n/sr.mjs',
]) {
  const file = path.join(ROOT, rel);
  if (!fs.existsSync(file)) continue;
  const text = fs.readFileSync(file, 'utf8');
  const next = apply(text);
  if (next !== text) {
    fs.writeFileSync(file, next);
    console.log('dict', rel);
  }
}

console.log(`swept ${hits} files`);
