/**
 * Build Indonesian (id) i18n sources from Malay (ms) packs via lexical remaps.
 * Usage: node scripts/gen-id-from-ms.mjs
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import { applyMsToId } from './id-i18n/ms-to-id.mjs';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const ROOT = path.resolve(__dirname, '..');

function mapObject(obj) {
  const out = {};
  for (const [k, v] of Object.entries(obj)) {
    out[k] = typeof v === 'string' ? applyMsToId(v) : v;
  }
  return out;
}

function loadJson(p) {
  return JSON.parse(fs.readFileSync(p, 'utf8'));
}

function saveJson(p, obj) {
  fs.mkdirSync(path.dirname(p), { recursive: true });
  fs.writeFileSync(p, JSON.stringify(obj, null, 2) + '\n');
}

function writeMjs(p, obj) {
  fs.mkdirSync(path.dirname(p), { recursive: true });
  const lines = ['export default {'];
  for (const [k, v] of Object.entries(obj)) {
    lines.push(`  ${JSON.stringify(k)}: ${JSON.stringify(v)},`);
  }
  lines.push('};\n');
  fs.writeFileSync(p, lines.join('\n'));
}

async function loadMjs(rel) {
  const resolved = path.resolve(ROOT, rel).replace(/\\/g, '/');
  const mod = await import('file:///' + resolved + '?t=' + Date.now());
  return { ...(mod.default || {}) };
}

function patchCetraNames(destRel) {
  const destPath = path.join(ROOT, destRel);
  const out = loadJson(destPath);
  const names = {
    'Carolina Machado': 'Siti Aminah',
    'Felipe Santos': 'Budi Santoso',
    'Beatriz Lima': 'Dewi Lestari',
    'Lucas Ferreira': 'Andi Wijaya',
    'Gabriela Costa': 'Maya Putri',
    'Roberto Oliveira': 'Rudi Hartono',
    'São Paulo, SP': 'Jakarta',
    'Rio de Janeiro, RJ': 'Surabaya',
    'Belo Horizonte, MG': 'Bandung',
    'Brasília, DF': 'Medan',
    'Salvador, BA': 'Semarang',
    'Curitiba, PR': 'Yogyakarta',
  };
  for (const [k, v] of Object.entries(names)) {
    if (Object.prototype.hasOwnProperty.call(out, k)) out[k] = v;
  }
  saveJson(destPath, out);
}

for (const [src, dest, extra] of [
  ['scripts/lumen-i18n/ms.json', 'scripts/lumen-i18n/id.json', null],
  ['scripts/velora-i18n/ms.json', 'scripts/velora-i18n/id.json', null],
  ['scripts/cetra-i18n/ms.json', 'scripts/cetra-i18n/id.json', 'cetra'],
  ['scripts/recupero-i18n/strings/ms.json', 'scripts/recupero-i18n/strings/id.json', 'phone'],
]) {
  const mapped = mapObject(loadJson(path.join(ROOT, src)));
  if (extra === 'phone') mapped.ph_phone = '812 3456 7890';
  saveJson(path.join(ROOT, dest), mapped);
  if (extra === 'cetra') patchCetraNames(dest);
  console.log('OK', dest, Object.keys(mapped).length);
}

{
  const src = await loadMjs('scripts/thalora-i18n/ms.mjs');
  writeMjs(path.join(ROOT, 'scripts/thalora-i18n/id.mjs'), mapObject(src));
  console.log('OK scripts/thalora-i18n/id.mjs', Object.keys(src).length);
}

{
  const extraMs = await loadMjs('scripts/ms-i18n/extra-en-ms.mjs');
  const out = {};
  for (const [k, v] of Object.entries(extraMs)) {
    out[k] = applyMsToId(v);
  }
  writeMjs(path.join(ROOT, 'scripts/id-i18n/extra-en-id.mjs'), out);
  console.log('OK scripts/id-i18n/extra-en-id.mjs', Object.keys(out).length);
}

{
  const aurelLv = await loadMjs('scripts/aurel-i18n/lv.mjs');
  const thaloraId = await loadMjs('scripts/thalora-i18n/id.mjs');
  const extra = await loadMjs('scripts/id-i18n/extra-en-id.mjs');
  const out = {};
  for (const key of Object.keys(aurelLv)) {
    out[key] = thaloraId[key] || extra[key] || key;
  }
  writeMjs(path.join(ROOT, 'scripts/aurel-i18n/id.mjs'), out);
  console.log('OK scripts/aurel-i18n/id.mjs', Object.keys(out).length);
}

console.log('\nID i18n sources ready (from ms + remaps).');
