/**
 * Insert Slovenian locale plumbing into template helpers.php copies.
 * Usage: node scripts/patch-sl-helpers.mjs
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';

const ROOT = path.resolve(path.dirname(fileURLToPath(import.meta.url)), '..');
const TEMPLATES = path.join(ROOT, 'templates');

function walk(dir, out = []) {
  if (!fs.existsSync(dir)) return out;
  for (const entry of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, entry.name);
    if (entry.isDirectory()) walk(p, out);
    else if (entry.name === 'helpers.php') out.push(p);
  }
  return out;
}

function insertAfter(haystack, needle, insert, already) {
  if (haystack.includes(already)) return haystack;
  if (!haystack.includes(needle)) return haystack;
  return haystack.replace(needle, needle + insert);
}

let n = 0;
for (const file of walk(TEMPLATES)) {
  let s = fs.readFileSync(file, 'utf8');
  const before = s;

  s = insertAfter(s, "'lv' => 'lv-LV',", "\n        'sl' => 'sl-SI',", "'sl' => 'sl-SI'");
  s = insertAfter(s, "'lt' => 'lt-LT',", "\n        'sl' => 'sl-SI',", "'sl' => 'sl-SI'");
  s = insertAfter(s, "'ja' => 'ja-JP',", "\n        'sl' => 'sl-SI',", "'sl' => 'sl-SI'");

  s = insertAfter(s, "'lt' => 'lt',\n", "        'sl' => 'si',\n", "'sl' => 'si'");
  s = insertAfter(s, "'lv' => 'lv',\n", "        'sl' => 'si',\n", "'sl' => 'si'");
  s = insertAfter(s, "'ja' => 'jp',\n", "        'sl' => 'si',\n", "'sl' => 'si'");

  s = insertAfter(s, "'lt' => 'Lietuvių',\n", "        'sl' => 'Slovenščina',\n", "'sl' => 'Slovenščina'");
  s = insertAfter(s, "'lv' => 'Latviešu',\n", "        'sl' => 'Slovenščina',\n", "'sl' => 'Slovenščina'");
  s = insertAfter(s, "'id' => 'Bahasa Indonesia',\n", "        'sl' => 'Slovenščina',\n", "'sl' => 'Slovenščina'");

  s = insertAfter(s, "'LT' => ['lt'],\n", "        'SI' => ['sl'],\n", "'SI' => ['sl']");
  s = insertAfter(s, "'LV' => ['lv'],\n", "        'SI' => ['sl'],\n", "'SI' => ['sl']");
  s = insertAfter(s, "'HR' => ['hr'],\n", "        'SI' => ['sl'],\n", "'SI' => ['sl']");

  s = insertAfter(
    s,
    "'SK' => 'Slovakia',",
    " 'SI' => 'Slovenia',",
    "'SI' => 'Slovenia'",
  );
  s = insertAfter(
    s,
    "'SK' => 'Slovakia', ",
    "'SI' => 'Slovenia', ",
    "'SI' => 'Slovenia'",
  );

  if (!s.includes("'sl' => 'traderjem")) {
    s = s.replace(
      "'lv' => 'tirgotājiem valstī '.$country,\n",
      "'lv' => 'tirgotājiem valstī '.$country,\n        'sl' => 'traderjem v državi '.$country,\n",
    );
    s = s.replace(
      "'hr' => 'traderima u zemlji '.$country,\n",
      "'hr' => 'traderima u zemlji '.$country,\n        'sl' => 'traderjem v državi '.$country,\n",
    );
    s = s.replace(
      "'sk' => 'traderov v krajine '.$country,\n",
      "'sk' => 'traderov v krajine '.$country,\n        'sl' => 'traderjem v državi '.$country,\n",
    );
  }

  if (s !== before) {
    fs.writeFileSync(file, s);
    n++;
  }
}

console.log(`patched ${n} helpers.php files`);
