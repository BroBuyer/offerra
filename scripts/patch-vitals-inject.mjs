#!/usr/bin/env node
/**
 * Scatter vitals inject points across all template head/footer files.
 */
import fs from 'fs';
import path from 'path';

const roots = ['templates/default', 'templates/multilang'];

function walk(dir, out = []) {
  for (const ent of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, ent.name);
    if (ent.isDirectory()) walk(p, out);
    else out.push(p);
  }
  return out;
}

const HEAD_SNIP = "<?php if (function_exists('offer_vitals_head')) { offer_vitals_head(); } ?>\n";
const PIXEL_SNIP = "\n<?php if (function_exists('offer_vitals_pixel')) { offer_vitals_pixel(); } ?>\n";
const SCRIPT_SNIP = "<?php if (function_exists('offer_vitals_script')) { offer_vitals_script(); } ?>";
const BOOT_RE = /<\?php if \(function_exists\('offer_vitals_boot'\)\) \{ offer_vitals_boot\(\); \} \?>/;

let heads = 0;
let foots = 0;

for (const root of roots) {
  for (const file of walk(root)) {
    const base = path.basename(path.dirname(file));
    const name = path.basename(file);
    if (base !== 'includes') continue;

    let text = fs.readFileSync(file, 'utf8');

    if (name === 'head.php') {
      if (text.includes('offer_vitals_head')) continue;
      if (!text.includes('</head>')) continue;
      text = text.replace('</head>', `${HEAD_SNIP}</head>`);
      fs.writeFileSync(file, text);
      heads += 1;
      continue;
    }

    if (name === 'footer.php') {
      let changed = false;
      if (!text.includes('offer_vitals_pixel') && text.includes('</footer>')) {
        text = text.replace('</footer>', `</footer>${PIXEL_SNIP}`);
        changed = true;
      }
      if (BOOT_RE.test(text)) {
        text = text.replace(BOOT_RE, SCRIPT_SNIP);
        changed = true;
      } else if (!text.includes('offer_vitals_script') && text.includes("static/js/main.js")) {
        text = text.replace(
          /(<script src="<?= asset\('static\/js\/main\.js'\) ?>"><\/script>)/,
          `$1\n${SCRIPT_SNIP}`,
        );
        changed = true;
      }
      if (changed) {
        fs.writeFileSync(file, text);
        foots += 1;
      }
    }
  }
}

console.log(JSON.stringify({ heads, foots }));
