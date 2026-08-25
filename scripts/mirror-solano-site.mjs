#!/usr/bin/env node
/**
 * Mirror solanobursencia.co into templates/solano/_mirror and rebuild langs/es.
 */
import fs from 'fs';
import path from 'path';
import { fileURLToPath } from 'url';
import https from 'https';
import http from 'http';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const root = path.resolve(__dirname, '..');
const mirror = path.join(root, 'templates', 'solano', '_mirror');
const ORIGIN = 'https://solanobursencia.co';

function fetchBuf(url) {
  return new Promise((resolve, reject) => {
    const lib = url.startsWith('https') ? https : http;
    const req = lib.get(url, {
      headers: { 'User-Agent': 'Mozilla/5.0', Accept: '*/*' },
      timeout: 60000,
    }, (res) => {
      if (res.statusCode >= 300 && res.statusCode < 400 && res.headers.location) {
        const next = res.headers.location.startsWith('http')
          ? res.headers.location
          : new URL(res.headers.location, url).href;
        res.resume();
        return resolve(fetchBuf(next));
      }
      if (res.statusCode !== 200) {
        res.resume();
        return reject(new Error(`HTTP ${res.statusCode} ${url}`));
      }
      const chunks = [];
      res.on('data', (c) => chunks.push(c));
      res.on('end', () => resolve(Buffer.concat(chunks)));
    });
    req.on('error', reject);
    req.on('timeout', () => { req.destroy(); reject(new Error('timeout ' + url)); });
  });
}

function ensureDir(p) {
  fs.mkdirSync(p, { recursive: true });
}

async function downloadAsset(rel) {
  const clean = rel.split('?')[0].split('#')[0];
  if (!clean || clean.startsWith('data:') || clean.startsWith('mailto:') || clean.startsWith('tel:')) return null;
  let url;
  if (clean.startsWith('http://') || clean.startsWith('https://')) {
    if (!clean.includes('solanobursencia.co') && !clean.includes('jsdelivr') && !clean.includes('cdn.')) {
      // keep external CDN as-is in HTML
      return null;
    }
    url = clean;
  } else if (clean.startsWith('/')) {
    url = ORIGIN + clean;
  } else {
    url = ORIGIN + '/' + clean;
  }

  let localRel;
  try {
    const u = new URL(url);
    if (u.hostname.includes('solanobursencia.co')) {
      localRel = u.pathname.replace(/^\//, '');
    } else {
      // skip external
      return null;
    }
  } catch {
    return null;
  }

  const dest = path.join(mirror, localRel);
  if (fs.existsSync(dest) && fs.statSync(dest).size > 0) return localRel;
  ensureDir(path.dirname(dest));
  try {
    const buf = await fetchBuf(url);
    fs.writeFileSync(dest, buf);
    console.log('OK', localRel, buf.length);
    return localRel;
  } catch (e) {
    console.warn('FAIL', url, e.message);
    return null;
  }
}

const htmlPath = path.join(mirror, 'index.html');
let html = fs.readFileSync(htmlPath, 'utf8');

const urls = new Set();
for (const m of html.matchAll(/(?:href|src|srcset)=["']([^"']+)["']/gi)) {
  const raw = m[1];
  for (const part of raw.split(',')) {
    const u = part.trim().split(/\s+/)[0];
    if (u) urls.add(u);
  }
}
// url() in inline styles
for (const m of html.matchAll(/url\((['"]?)([^)'"]+)\1\)/gi)) {
  urls.add(m[2]);
}

console.log('candidates', urls.size);
for (const u of [...urls]) {
  await downloadAsset(u);
}

// Also fetch common font css referenced
const fontCss = [...html.matchAll(/href=["'](\/fonts\/[^"']+)["']/g)].map((m) => m[1]);
for (const fc of fontCss) {
  const local = await downloadAsset(fc);
  if (!local) continue;
  const cssText = fs.readFileSync(path.join(mirror, local), 'utf8');
  for (const m of cssText.matchAll(/url\((['"]?)([^)'"]+)\1\)/gi)) {
    let fontUrl = m[2];
    if (fontUrl.startsWith('../') || fontUrl.startsWith('./')) {
      fontUrl = path.posix.normalize(path.posix.dirname(local) + '/' + fontUrl);
    } else if (fontUrl.startsWith('/')) {
      fontUrl = fontUrl.slice(1);
    }
    await downloadAsset('/' + fontUrl.replace(/^\//, ''));
  }
}

// Extract inline <style> into main.css
const styles = [...html.matchAll(/<style[^>]*>([\s\S]*?)<\/style>/gi)].map((m) => m[1]);
ensureDir(path.join(mirror, 'static', 'css'));
fs.writeFileSync(path.join(mirror, 'static', 'css', 'main.css'), styles.join('\n\n'));
console.log('extracted css bytes', styles.join('\n').length);

// Save cleaned body snapshot
fs.writeFileSync(path.join(mirror, 'styles-count.txt'), String(styles.length));
console.log('DONE mirror assets');
